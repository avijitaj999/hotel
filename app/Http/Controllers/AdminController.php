<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\user;

class AdminController extends Controller
{
    public function index()
    {

        $usertype = Auth::user()->usertype;
        if ($usertype == 'user') {
            return view('home.index');
        } else if ($usertype == 'admin') {
            return view('admin.index');
        } else {
            return redirect()->back();
        }
    }
}
