<?php


namespace Supermarket\resources;

/**
 * Class FranchiseResource
 *
 * @package Supermarket\resources
 */
class FranchiseResource
{
    /**
     * @param $request
     */
    public function getAll($request)
    {
        $franchises = [
            ['name' => 'test 1'],
            ['name' => 'test 2']
        ];
        return $franchises;
    }
}