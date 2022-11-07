<?php

return [
    // Default
    "default" => env("RAPIDAPI_DEFAULT",'google'),

    // NLP
    "nlp" => [
        "KEY" => env("RAPIDAPI_KEY"),
        "URL_LANGUAGES" => env("RAPIDAPI_NLP_LANGUAGES", ),
        "URL_TRANSLATE" => env("RAPIDAPI_NLP_TRANSLATE"),
        "HOST" => env("RAPIDAPI_NLP_HOST"),
    ],

    // Google
    "google" => [
        "KEY" => env("RAPIDAPI_KEY"),
        "URL_LANGUAGES" => env("RAPIDAPI_GOOLE_LANGUAGES"),
        "URL_TRANSLATE" => env("RAPIDAPI_GOOLE_TRANSLATTE"),
        "HOST" => env("RAPIDAPI_GOOLE_HOST"),
    ]

];
