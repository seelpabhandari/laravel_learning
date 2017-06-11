<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationRequest;
class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store(RegistrationRequest $request)
    {
    	//validate the form
    	 

    	//create and save the user
    	$user=User::create(request(['name','email','password']));

    	//sign them in
    	auth()->login($user);
        \Mail::to($user)->send(new Welcome($user));
        session()->flash('message','Thanks for signing up');
    	return redirect()->home();

    }
}
