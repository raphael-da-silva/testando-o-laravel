<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

/**
 *
 * @author Raphael da Silva
 *
 */
class AboutController extends Controller
{
    
	public function index(): Renderable
	{

		return view('about', [
			'link' => getenv('APP_GITHUB_REPO')
		]);

	}

}
