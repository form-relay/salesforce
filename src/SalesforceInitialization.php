<?php

namespace FormRelay\Salesforce;

use FormRelay\Core\Initialization;
use FormRelay\Core\Service\RegistryInterface;
use FormRelay\Request\RequestInitialization;
use FormRelay\Salesforce\Route\SalesforceRoute;

class SalesforceInitialization extends Initialization
{
    const ROUTES = [
        SalesforceRoute::class,
    ];

    public static function initialize(RegistryInterface $registry)
    {
        RequestInitialization::initialize($registry);
        parent::initialize($registry);
    }
}
