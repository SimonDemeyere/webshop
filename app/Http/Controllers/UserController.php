<?php

namespace App\Http\Controllers;

use App\Address;
use App\Country;
use App\Http\Requests\UsersEditRequest;
use App\Role;
use Illuminate\Http\Request;
use App\User;
use App\Photo;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use PragmaRX\Countries\Package\Countries;

class UserController extends Controller
{

    use UploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index(Request $request)
    {
        $users = User::withTrashed()->get();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $countries = Countries::all();
        return view('admin.users.create', compact('roles', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->first_name = trim($request->first_name);
        $user->last_name = trim($request->last_name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request['password']);
        $user->role_id = trim((int)$request->role);
        $user->save();
        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        $address = Address::findOrFail($user->address_id);
        $countries = Country::all();
        return view('admin.users.edit', compact('user', 'roles', 'address', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, User $user)
    {
        /*if(trim($request->password) == ''){
            $input = $request->except('password');
        }else{
            $input = $request->all();
            $input['password'] = Hash::make($request['password']);
        }*/
        $user->first_name = trim($request->first_name);
        $user->last_name = trim($request->last_name);
        $user->email = trim($request->email);
        if($user->address) {
            $user->address->street = trim($request->street);
            $user->address->house_number = trim($request->house_number);
            $user->address->postcode = trim($request->postcode);
            $user->address->city = trim($request->city);
            $user->address->country_id = trim($request->country);
        }
        if($request->has('src')) {
            if($user->photo) {

                $prev_image = public_path( 'assets/' . $user->photo->src );
                if(File::exists($prev_image)) {
                    unlink($prev_image);
                }
                $image = $request->file('src');
                $image_name = Str::slug($image->getClientOriginalName() . '_' . time());
                $folder = 'images/users/';
                $tmp_path = $folder . $image_name . '.' . $image->getClientOriginalExtension();

                $this->uploadOne($image, $folder, 'public', $image_name);

                $user->photo->src = $tmp_path;
                $user->photo->save();
            } else {
                $photo = new Photo();

                $image = $request->file('src');
                $image_name = Str::slug($image->getClientOriginalName() . '_' . time());
                $folder = 'images/users/';
                $tmp_path = $folder . $image_name . '.' . $image->getClientOriginalExtension();

                $this->uploadOne($image, $folder, 'public', $image_name);

                $photo->src = $tmp_path;
                $photo->save();
                $user->photo_id = trim((int)$photo->id);
            }

        }
        $user->role_id = trim((int)$request->role);
        $user->save();
        $user->address->save();
        $user->address->country->save();
        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if($user->photo && File::exists('assets/' . $user->photo->src)) {
            $image = public_path( 'assets/' . $user->photo->src );
            if(File::exists($image)) {
                unlink($image);
            }
            $user->photo->delete();
        }
        $user->delete();
        return redirect('/admin/users');
    }

    public function restore($id)
    {
        $user = User::withTrashed()->find($id)->restore();
        return redirect('/admin/users');
    }
}
