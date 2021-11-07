<?php 

namespace App\Http\Controllers;

class AuthController extends Controller{
	function showLogin(){
		return view('login');
	}
	function prosesLogin(){
		// return view('login');
	}
	function logout(){
		// return view('login');
	}
	function showRegister(){
		return view('register');
	}
	function forgotPassword(){
		// return view('login');
	}
}