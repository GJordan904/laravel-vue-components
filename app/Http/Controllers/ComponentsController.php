<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ComponentsController extends Controller
{
	/**
	 * Initialize our controller
	 *
	 * @constructor
	 */
	public function __construct() {

	}

	/**
     * The DataTables Page
     *
     */
    public function datatables_index() {
		$users = User::all()->take(100);
		return view('components.datables', compact('users'));
    }
}
