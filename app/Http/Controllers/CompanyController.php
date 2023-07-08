<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
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
        $data = new Company();
        $data->name = $request->name;
        $data->image = $filename;
        $data->save();

        return redirect('task19');
    }
}
