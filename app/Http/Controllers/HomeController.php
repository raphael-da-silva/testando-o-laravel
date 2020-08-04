<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

/**
 *
 * @author Raphael da Silva
 *
 */
class HomeController extends Controller
{

    public function index(): Renderable
    {

        return view('home');

    }

}