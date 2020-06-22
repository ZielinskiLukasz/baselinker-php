<?php

namespace Baselinker\Api\Request;

use Baselinker\Api\Client;
use Baselinker\Api\Response\Response;

class Orders extends Client implements OrdersInterface
{
    /**
     * @inheritDoc
     */
    public function addOrder(array $data): Response
    {
        return new Response(
            $this->post('addOrder', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function getOrders(array $data): Response
    {
        return new Response(
            $this->post('getOrders', $data)
        );
    }

    /**
     * @inheritDoc
     */
    public function getOrderStatusList(): Response
    {
        return new Response(
            $this->post('getOrderStatusList')
        );
    }
}