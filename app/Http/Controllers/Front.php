<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Front extends Controller
{
	public function user($user){
		//return $user;
		return view('welcome',array('username' => $user));
	}

    public function index() {
        return 'index page';
    }

    public function login() {
        return 'login page';
    }

    public function logout() {
        return 'logout page';
    }

    public function search($query) {
        return "$query search page";
    }
}
