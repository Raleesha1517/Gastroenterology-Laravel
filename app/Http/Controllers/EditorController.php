<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function view()
    {
        $data['header_title'] = "Admin List";
        return view('editors.home');
    }
}
