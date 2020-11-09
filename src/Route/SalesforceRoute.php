<?php

namespace FormRelay\Salesforce\Route;

use FormRelay\Core\Model\Submission\SubmissionConfigurationInterface;
use FormRelay\Request\Route\RequestRoute;

class SalesforceRoute extends RequestRoute
{
    public static function getDefaultConfiguration(): array
    {
        return parent::getDefaultConfiguration() + [
            //'url' => 'https://test.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8',
            'url' => 'https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8',
            'gate' => [
                'required' => 'email',
            ],
            'defaults' => [
                'oid' => '',
                'retURL' => '#',
                'encoding' => 'UTF-8',
                'debugEmail' => '',
                'debug' => '0',
            ],
            'fields' => [
                'mapping' => [
                    'first_name' => 'first_name',
                    'last_name' => 'last_name',
                    'company' => 'company',
                    'department' => 'department',
                    'email' => 'email',
                    'phone' => 'phone',
                    'zip' => 'zip',
                    'country' => 'country_code',
                    'city' => 'city',
                    'street' => 'street',
                    'fax' => 'fax',
                    'title' => 'title',
                    'language' => 'language',
                    'lead_source' => 'lead_source',

                ],
                'unmapped' => [
                    SubmissionConfigurationInterface::KEY_SELF => 'description',
                    'appendKeyValue' => true,
                ],
            ],
        ];
    }
}
