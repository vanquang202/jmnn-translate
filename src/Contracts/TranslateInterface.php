<?php

namespace Jmnn\Translate\Contracts;

interface TranslateInterface
{
    public function driver() : string;

    public function languages();

    public function convert($message ,$target = "en");
}
