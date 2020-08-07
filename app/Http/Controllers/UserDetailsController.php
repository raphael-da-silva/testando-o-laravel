<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use App\UserFinder;

/**
 *
 * @author Raphael da Silva
 *
 */
class UserDetailsController extends Controller
{

	private $userFinder;

	public function __construct(
		UserFinder $userFinder
	){

		$this->userFinder = $userFinder;

	}
    
	public function index(int $id): Renderable
	{

		return view('user-details', [
			'user' => $this->userFinder->getById($id)
		]);

	}

}
