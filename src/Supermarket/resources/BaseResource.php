<?php
/**
 * Created by PhpStorm.
 * User: susana
 * Date: 11/11/17
 * Time: 20:32
 */

namespace Supermarket\resources;

use Doctrine\ORM\EntityManager;

/**
 * Class BaseResource
 *
 * @package Supermarket\resources
 */
abstract class BaseResource implements InterfaceResource
{
    /**
     * Db connection manager
     *
     * @var EntityManager
     */
    protected $connDb;

    /**
     * BaseResource constructor.
     *
     * @param EntityManager $connDb
     */
    public function __construct(EntityManager $connDb)
    {
        $this->connDb = $connDb;
    }


}