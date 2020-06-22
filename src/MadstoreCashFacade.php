<?php

namespace Madnest\MadstoreCash;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Madnest\MadstoreCash\Skeleton\SkeletonClass
 */
class MadstoreCashFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'madstore-cash';
    }
}
