<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use App\UsersList;

/**
 *
 * @author Raphael da Silva
 *
 */
class UsersListController extends Controller
{

	private $usersList;

	public function __construct(
		UsersList $usersList
	){

		$this->usersList = $usersList;

	}

	public function index(): Renderable
	{

		return view('users-list', [
			'users' => $this->usersList->getAll()
		]);

	}

}
