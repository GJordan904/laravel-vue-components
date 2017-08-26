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
		$users = User::select(['name',  'email', 'city', 'state'])->take(100)->get();
		return view('components.datables', compact('users'));
    }
}
