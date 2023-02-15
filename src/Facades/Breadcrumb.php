<?php

namespace Wurkhouse\BreadcrumbPackage\Facades;

use Illuminate\Support\Facades\Facade;

class Breadcrumb extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Breadcrumb';
    }
}
