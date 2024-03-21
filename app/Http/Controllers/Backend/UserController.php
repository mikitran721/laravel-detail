<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'List User';
    }

    public function create()
    {
        return view('backend.user.create');
    }

    //method for POST
    public function store(Request $req)
    {
        dd(__METHOD__, $req->all());
        return 'Store view - for POST';
    }

    //method for PUT/PATCH
    public function update(Request $req)
    {
        dd(__METHOD__, $req->all());
    }
}
