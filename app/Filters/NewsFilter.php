<?php

namespace App\Filters;

use App\Filters\ApiFilter;

use Illuminate\Http\Request;

class NewsFilter extends ApiFilter {

    protected $safeParams = [
        'name' => ['eq'],
        'type'  => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'postalCode' => ['eq', 'gt', 'lt']
    ];

    protected $columnMap = [
    ];

    protected $operatorsMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];
}