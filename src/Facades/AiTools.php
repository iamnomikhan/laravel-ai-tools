<?php
// src/Facades/AiTools.php
namespace Nouman\LaravelAiTools\Facades;

use Illuminate\Support\Facades\Facade;

class AiTools extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ai-tools'; // The service binding name
    }
}
