<?php

namespace Versatile\QueryBuilder\Filters;

use Illuminate\Database\Eloquent\Builder;

class FiltersExact implements Filter
{
    public function __invoke(Builder $query, $value, string $property) : Builder
    {
        if (is_array($value)) {
            return $query->whereIn($property, $value);
        }

        return $query->where($property, $value);
    }
}
