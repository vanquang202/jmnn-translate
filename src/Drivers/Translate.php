<?php

namespace Jmnn\Translate\Drivers;

use Illuminate\Support\Facades\Http;
use Jmnn\Translate\Contracts\TranslateInterface;

abstract class Translate implements TranslateInterface
{
    public function __construct()
    {
        $this->config = config('jmnn-translate');
    }

    public function driver() : string
    {
        return config('jmnn-translate.default');
    }

    private function __headers() : array
    {
        return [
//            "content-type" => "application/x-www-form-urlencoded",
//            "Accept-Encoding"=> "application/gzip",
            "X-RapidAPI-Host"=> $this->config[(new static)->driver()]['HOST'],
            "X-RapidAPI-Key" => $this->config[(new static)->driver()]['KEY'],
        ];
    }

    private function __body()
    {
        return  [
            "source" => config('app.locale')
        ];
    }

    private function throwError($res) : bool
    {
        if($res->failed()) throw new \Exception($res->json()['message']);
        if($res->failed()) return false;
        return true;
    }

    public function languages()
    {
        $response = Http::withHeaders($this->__headers())
            ->get($this->config[(new static)->driver()]['URL_LANGUAGES']);
        $this->throwError($response);
        return $response->json();
    }

    public function convert($message ,$target = "en")
    {
        $body = [
            "q" => $message,
            "target" => $target,
            ...$this->__body()
        ];
        $response = Http::asForm()
            ->withHeaders($this->__headers())
            ->post($this->config[(new static)->driver()]['URL_TRANSLATE'],$body);
        $this->throwError($response);
        return $response->json();
    }

}
