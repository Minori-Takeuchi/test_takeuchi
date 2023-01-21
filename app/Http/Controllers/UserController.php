<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function send(Request $request)
    {
        $user = new User;
        unset($request['_token']);
        $user->fill($request->all())->save();
        return view('thanks');
    }
}
