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
        $defaults['defaults'] = [
            'oid' => '',
            'retURL' => '#',
            'encoding' => 'UTF-8',
            'debugEmail' => '',
            'debug' => '0',
        ];
        $defaults['fields']['mapping'] = [
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

        ];
        $defaults['fields']['unmapped'] = [
            SubmissionConfigurationInterface::KEY_SELF => 'description',
            'appendKeyValue' => true,
        ];
        return $defaults;
    }
}
