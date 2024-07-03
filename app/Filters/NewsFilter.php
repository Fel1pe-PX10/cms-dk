<?php

namespace App\Filters;

use App\Filters\ApiFilter;

use Illuminate\Http\Request;

class NewsFilter extends ApiFilter {

    protected $safeParams = [
        'id'            => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'targetId'      => ['eq'],
        'headline'      => ['in'],
        'description'   => ['in'],
        'image'         => ['in'],
        'video'         => ['in'],
        'document'      => ['in'],
        'createdBy'     => ['in'],
        'createdAt'    => ['eq', 'lt', 'lte', 'gt', 'gte']
    ];

    protected $columnMap = [
       'targetId'   => 'target_id',
       'createdBy'  => 'create_by',
       'createdAt'  => 'created_at',
    ];

    protected $operatorsMap = [
        'eq'    => '=',
        'lt'    => '<',
        'lte'   => '<=',
        'gt'    => '>',
        'gte'   => '>=',
        'in'    => 'like',
    ];
}