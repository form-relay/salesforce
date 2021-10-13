<?php

namespace FormRelay\Salesforce\Route;

use FormRelay\Request\Route\RequestRoute;

class SalesforceRoute extends RequestRoute
{
    // test system: 'https://test.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8'
    const DEFAULT_URL = 'https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8';

    const DEFAULT_GATE = [
        'required' => 'email',
    ];

    const DEFAULT_FIELDS = [
        'oid' => '',
        'retURL' => '#',
        'encoding' => 'UTF-8',
        'debugEmail' => '',
        'debug' => '0',

        'first_name' => ['field' => 'first_name'],
        'last_name' => ['field' => 'last_name'],
        'company' => ['field' => 'company'],
        'department' => ['field' => 'department'],
        'email' => ['field' => 'email'],
        'phone' => ['field' => 'phone'],
        'zip' => ['field' => 'zip'],
        'country' => ['field' => 'country_code'],
        'city' => ['field' => 'city'],
        'street' => ['field' => 'street'],
        'fax' => ['field' => 'fax'],
        'title' => ['field' => 'title'],
        'language' => ['field' => 'language'],
        'lead_source' => ['field' => 'lead_source'],

        'description' => [
            'fieldCollector' => [
                'exclude' => '',
                'ignoreIfEmpty' => true,
                'unprocessedOnly' => true,
            ],
        ],
    ];
}
