<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersEditRequest;
use App\Role;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index(Request $request)
    {

        $users = User::paginate(10);
        error_log('index function');

        /*if($request->ajax()) {
            return [
                'users' => view('users.ajax.index')->with(compact('users'))->render(),
                'next_page' => $users->nextPageUrl()
            ];
        }*/
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
        return view('admin.users.create', compact('roles'));
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
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {

        $user = User::findOrFail($id);
        if(trim($request->password)==''){
            $input = $request->except('password');
        }else{
            $input = $request->all();
            $input['password'] = Hash::make($request['password']);
        }
        $user->first_name = trim($request->first_name);
        $user->last_name = trim($request->last_name);
        $user->email = trim($request->email);
        $user->role_id = trim((int)$request->role);
        $user->save();
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
        $user->delete();
        return redirect('/admin/users');
    }

    /*public function action(Request $request)
    {
        error_log('action function');
        if($request->ajax())
        {
            error_log('in function 2');
            $query = $request->get('query');
            if($query != '') {
                $data = DB::table('users')
                    ->select('first_name', 'last_name', 'email', 'role')
                    ->where('first_name', 'LIKE', '%' . $query . '%')
                    ->orWhere('last_name', 'LIKE', '%' . $query . '%')
                    ->orWhere('email', 'LIKE', '%' . $query . '%')
                    ->orWhere('role', 'LIKE', '%' . $query . '%')
                    ->get();
            } else {
                $data = DB::table('users')
                    ->select('first_name', 'last_name', 'email', 'role')
                    ->orderBy('created_at', 'desc')
                    ->get();
            }
            $total_row = $data->count();
            if($total_row > 0) {
                foreach($data as $row)
                {
                    $output = '
                        <tr>
                            <td>' .$row->id. '</td>
                            <td>' .$row->first_name. '</td>
                            <td>' .$row->last_name. '</td>
                            <td>' .$row->email. '</td>
                            <td>' .$row->role. '</td>
                            <td>' .$row->created_at. '</td>
                            <td>' .$row->updated_at. '</td>
                        </tr>
                    ';
                }
            } else {
                $output = '
                    <tr>
                        <td align="center" colspan="5">No Data Found</td>
                    </tr>
                ';
            }
            $data = array(
                'table_data' => $output,
                'total_data' => $total_row
            );

            return Response::json($data);
        }
    }*/
}
