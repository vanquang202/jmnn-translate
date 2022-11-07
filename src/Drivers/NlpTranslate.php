<?php

namespace Jmnn\Translate\Drivers;

class NlpTranslate extends Translate
{
    public function driver() : string
    {
        return 'nlp';
    }

    public function languages(){
        throw new \Exception('Driver does not exists api get all languages');
    }
}
