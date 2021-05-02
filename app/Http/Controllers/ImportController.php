<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function users() 
    {
        Excel::import(new UsersImport, request()->file('files'));   
        return redirect('/users')->with('success', 'All good!');
    }
}
