<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Renderable;

/**
 *
 * @author Raphael da Silva
 *
 */
class HomeController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');

    }

    public function index(): Renderable
    {

        return view('home');

    }

}