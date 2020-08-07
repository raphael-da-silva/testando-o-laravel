<?php

namespace App;

use Illuminate\Support\Collection;

/**
 *
 * @author Raphael da Silva
 *
 */
interface UsersList
{

   	public function getAll(): Collection;

}