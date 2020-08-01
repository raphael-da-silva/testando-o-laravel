<?php

namespace App;

use App\UsersList;
use Illuminate\Support\Facades\DB;

/**
 *
 * @author Raphael da Silva
 *
 */
class LaravelDBUsersList implements UsersList 
{

   	public function getAll(): array
   	{

   		return DB::select('SELECT * FROM users');

   	}

}
