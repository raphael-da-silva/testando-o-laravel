<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
			'link' => 'github.com/raphael-da-silva'
		]);

	}

}
