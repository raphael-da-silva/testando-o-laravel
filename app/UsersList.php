<?php

namespace App;

use Illuminate\Support\Facades\DB;

/**
 *
 * @author Raphael da Silva
 *
 */
interface UsersList
{

   	public function getAll(): array;

}