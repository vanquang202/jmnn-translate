<?php

namespace Jmnn\Translate\Facade;

use Illuminate\Support\Facades\Facade;

class TranslateFacade extends  Facade
{
    public static function getFacadeAccessor()
    {
        return 'jmnn-translate';
    }
}
