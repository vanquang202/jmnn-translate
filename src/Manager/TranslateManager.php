<?php

namespace Jmnn\Translate\Manager;

use Illuminate\Support\Manager;
use Jmnn\Translate\Drivers\GoogleTranslate;
use Jmnn\Translate\Drivers\NlpTranslate;

class TranslateManager extends Manager
{
    public function getDefaultDriver()
    {
        return config('jmnn-translate.default');
    }

    public function createGoogleDriver()
    {
        return new GoogleTranslate();
    }

    public function createNlpDriver()
    {
        return new NlpTranslate();
    }
}
