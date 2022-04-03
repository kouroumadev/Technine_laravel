<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('auth.index', compact('users'));
    }

    public function edit() {
        //

    }

    public function show() {
        //
    }

    public function update(Request $request, User $user) {

        /*dd($request->all());*/

        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'name' => ['required', 'string', 'max:255'],

        ]);

        //dd($request->all());


        $user->update([
            'email' => $request->email,
            'name' => $request->name,
        ]);

        return redirect(route('user.show'))->with('yes','Detais updated with success');


    }


}
