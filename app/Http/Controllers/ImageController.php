<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Image::all();

        return view('read', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|min:3|max:20',
                'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]
        );

        $file = $request->file('image');
        $filename = $file->hashName();
        // Storage::put('Image/', $request->image);
        $file->move(public_path('/Image'), $filename);
        $data = new Image();
        $data->name = $request->name;
        $data->image = $filename;
        $data->save();

        return redirect('imagecrud');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Image::find($id);
        return view('update', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Image::find($id);

        $request->validate(
            [
                'name' => 'required|min:3|max:20',
                'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]
        );

        $filename = $data->image;
        if ($request->image) {

            if (File::exists(public_path("Image/$filename"))) {
                File::delete(public_path("Image/$filename"));
            }
            $file = $request->file('image');
            $filename = $file->hashName();
            $file->move(public_path('/Image'), $filename);

            $data->name = $request->name;
            $data->image = $filename;
            $data->save();
        }

        $data->name = $request->name;
        $data->save();

        return redirect('/imagecrud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::find($id);
        $filename = $image->image;
        $image->delete();

        if (File::exists(public_path("Image/$filename"))) {
            File::delete(public_path("Image/$filename"));
        }

        return redirect('/imagecrud');
    }
}
