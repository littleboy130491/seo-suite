<?php

namespace Littleboy130491\SeoSuite\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Littleboy130491\SeoSuite\SeoSuite
 */
class SeoSuite extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Littleboy130491\SeoSuite\SeoSuite::class;
    }
}
