<?php

namespace App;

use App\UsersList;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

/**
 *
 * @author Raphael da Silva
 *
 */
class LaravelDBUsersList implements UsersList 
{

   	public function getAll(): Collection
   	{

   		return DB::table('users')->get();

   	}

}
