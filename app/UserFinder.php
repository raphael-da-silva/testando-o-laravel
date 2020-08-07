<?php

namespace App;

use \stdClass as User;

/**
 *
 * @author Raphael da Silva
 *
 */
interface UserFinder
{

   	public function getById(int $id): User;

}