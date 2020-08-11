<?php

namespace App;

use App\UserFinder;
use Illuminate\Support\Facades\DB;
use \stdClass as User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 *
 * @author Raphael da Silva
 *
 */
class LaravelDBUserFinder implements UserFinder 
{

   	public function getById(int $id): User
   	{

   		$user = DB::table('users')->find($id);

   		if(is_null($user)){
   			throw new ModelNotFoundException('User not found.');
   		}

   		return $user;

   	}

}
