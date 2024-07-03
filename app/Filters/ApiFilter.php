<?php

namespace App\Filters;

use Illuminate\Http\Request;

use Carbon\Carbon;

class ApiFilter {

    protected $safeParams = [];

    protected $columnMap = [];

    protected $operatorsMap = [];

    public function transform(Request $request)
    {
        $queryItems = [];

        foreach ($this->safeParams as $param => $operators) {
            $query = $request->query($param);

            if(!isset($query)) continue;

            $column = $this->columnMap[$param] ?? $param;

            foreach ($operators as $operator) {
                if(isset($query[$operator])) {
                    if($this->operatorsMap[$operator] == 'like')
                        $queryItems[] = [$column, $this->operatorsMap[$operator], '%'.$query[$operator].'%'];
                    elseif(substr($column, -2) == 'at')
                        $queryItems[] = [$column, $this->operatorsMap[$operator], Carbon::parse($query[$operator])];
                    else    
                        $queryItems[] = [$column, $this->operatorsMap[$operator], $query[$operator]];
                }
            }
        }
        return $queryItems;
    }
}