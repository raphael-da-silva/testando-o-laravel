<?php

namespace App\Console\Commands;

use Closure;

/**
 *
 * @author Raphael da Silva
 *
 */
class ProjectInfoCommand
{

	public const COMMAND_NAME = 'project-info';
	public const COMMAND_DESC = 'Ver informações sobre o projeto.';

	public static function getClosure(): Closure
	{

		return function(){

			$this->info('Projeto feito para testar o laravel.');
			$this->info(sprintf('Link no github: %s', getenv('APP_GITHUB_REPO')));

		};

	}

}