<?php
/**
 * Created by PhpStorm.
 * User: susana
 * Date: 11/11/17
 * Time: 20:32
 */

namespace Supermarket\resources;


use Slim\Http\Request;

/**
 * Interface InterfaceResource
 *
 * @package Supermarket\resources
 */
interface InterfaceResource
{
    /**
     * Get all entities
     *
     * @param Request $request request
     *
     * @return mixed
     */
    public function getAll(Request $request);

    /**
     * Get entity
     *
     * @param Request $request    request
     * @param mixed   $identifier identifier entity
     *
     * @return mixed
     */
    public function get(Request $request, $identifier);

    /**
     * Create entity
     *
     * @param Request $request request
     *
     * @return mixed
     */
    public function post(Request $request);

    /**
     * Update entity
     *
     * @param Request $request    request
     * @param mixed   $identifier identifier entity
     *
     * @return mixed
     */
    public function put(Request $request, $identifier);

    /**
     * Partial update entity
     *
     * @param Request $request    request
     * @param mixed   $identifier identifier entity
     *
     * @return mixed
     */
    public function patch(Request $request, $identifier);

    /**
     * @param Request $request    request
     * @param mixed   $identifier identifier entity
     *
     * @return mixed
     */
    public function delete(Request $request, $identifier);
}