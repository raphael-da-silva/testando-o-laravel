<?php

namespace App;

use Illuminate\Support\Facades\DB;

/**
 *
 * @author Raphael da Silva
 *
 */
class UsersList
{

   	public function getAll(): array
   	{

   		return DB::select('SELECT * FROM users');

   	}

}
