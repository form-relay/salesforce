<?php

namespace FormRelay\Salesforce\Route;

use FormRelay\Core\Model\Submission\SubmissionConfigurationInterface;
use FormRelay\Request\Route\RequestRoute;

class SalesforceRoute extends RequestRoute
{
    public static function getDefaultConfiguration(): array
    {
        $defaults = parent::getDefaultConfiguration();
        // test system: 'https://test.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8'
        $defaults['url'] = 'https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8';
        $defaults['gate'] =[
            'required' => 'email',
        ];
        $defaults['fields'] = [
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
        return $defaults;
    }
}
