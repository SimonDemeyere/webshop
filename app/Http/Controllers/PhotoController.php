<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PhotoController extends Controller
{
    use UploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::paginate(10);
        return view('admin.photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$src = $request->file('src');
        $name = time() . $src->getClientOriginalName();
        $src->move('assets/images', $name);
        Photo::create(['src' => $name]);
        return redirect('admin/photos');*/

        $photo = new Photo();

        $image = $request->file('src');
        $image_name = Str::slug($image->getClientOriginalName() . '_' . time());
        $folder = 'images/users/';
        $tmp_path = $folder . $image_name . '.' . $image->getClientOriginalExtension();
        $this->uploadOne($image, $folder, 'public', $image_name);

        $photo->src = $tmp_path;

        $photo->save();

        return redirect('/admin/photos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        return view('admin.photos.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        if($request->hasFile('src')) {
            $prev_image = public_path( 'assets/' . $photo->src );
            if(File::exists($prev_image)) {
                unlink($prev_image);
            }
            $image = $request->file('src');
            $image_name = Str::slug($image->getClientOriginalName() . '_' . time());
            $folder = 'images/users/';
            $tmp_path = $folder . $image_name . '.' . $image->getClientOriginalExtension();

            $this->uploadOne($image, $folder, 'public', $image_name);

            $photo->src = $tmp_path;

            $photo->save();
        }
        return redirect('admin/photos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Photo $photo
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Photo $photo)
    {
        if(File::exists('assets/' . $photo->src)) {
            unlink(public_path( 'assets/' . $photo->src ));
        }
        $photo->delete();

        return redirect('admin/photos');
    }
}
