<?php


namespace Supermarket\resources;

use Slim\Http\Request;
use Respect\Validation\Validator;
use Supermarket\entities\Franchise;

/**
 * Class FranchiseResource
 *
 * @package Supermarket\resources
 */
class FranchiseResource extends BaseResource
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public function getAll(Request $request)
    {
        $franchiseRespository = $this->connDb->getRepository('Supermarket\entities\Franchise');
        $franchises = $franchiseRespository->findAll();

        return $franchises;
    }

    public function get(Request $request, $identifier)
    {
        // TODO: Implement get() method.
    }

    public function post(Request $request)
    {
        // Get sended data
        $data = json_decode($request->getBody()->getContents(), true);

        // Validate data
        if (Validator::notEmpty()->validate($data['name'])) {
            // Create a new franchise
            $franchise = new Franchise();
            $franchise->setName($data['name']);

            $this->connDb->persist($franchise);
            $this->connDb->flush();
        }
    }

    public function put(Request $request, $identifier)
    {
        // TODO: Implement put() method.
    }

    public function patch(Request $request, $identifier)
    {
        // TODO: Implement patch() method.
    }

    public function delete(Request $request, $identifier)
    {
        // TODO: Implement delete() method.
    }
}