<?php
/**
 * Created by PhpStorm.
 * User: edd
 * Date: 2/4/18
 * Time: 11:24 AM
 */

namespace Eddmash\Bundle\PowerormBundle;


use Eddmash\Bundle\PowerormBundle\Command\MakemigrationsCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PowerormBundle extends Bundle
{
    public function registerCommands(Application $application)
    {
        // noop
    }
}