<?php
/**
 * Created by PhpStorm.
 * User: susana
 * Date: 27/05/17
 * Time: 19:10
 */

require_once "bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);