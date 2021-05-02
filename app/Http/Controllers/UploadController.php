<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request){

        if ($request->hasFile('files')){
            $file = $request->file('files');
            $filename = $file->getClientOriginalName();
            $folder = uniqid(). '-' . now()->timestamp;
            $file->storeAs('files/' . $folder, $filename); 

            return $folder;
        } 
        return '';
    }
}
