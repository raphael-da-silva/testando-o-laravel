<?php

namespace App;

use App\UserFinder;
use Illuminate\Support\Facades\DB;
use \stdClass as User;

/**
 *
 * @author Raphael da Silva
 *
 */
class LaravelDBUserFinder implements UserFinder 
{

   	public function getById(int $id): User
   	{

   		return DB::table('users')->find($id);

   	}

}
