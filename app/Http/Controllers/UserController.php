<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    /**
     * Return all users
     *
     */
    public function users_all() {
    	return response()->json(['data' => User::all()], 200);
    }

	/**
	 * Return 200 users
	 *
	 */
	public function users_some() {
		return response()->json(['data' => User::all()->take(200)], 200);
	}
}
