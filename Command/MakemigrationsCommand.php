<?php
/**
 * Created by PhpStorm.
 * User: edd
 * Date: 2/4/18
 * Time: 4:35 PM
 */

namespace Eddmash\Bundle\PowerormBundle\Command;


use Doctrine\Bundle\DoctrineBundle\Command\DoctrineCommand;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class MakemigrationsCommand extends ContainerAwareCommand
{
    protected static $defaultName = 'powerorm:makemigrations';
}