<?php
 namespace Gy\Packagetest\Facades;
 use Illuminate\Support\Facades\Facade;
 class Packagetest extends Facade
 {
     protected static function getFacadeAccessor()
     {
         return 'packagetest';
     }
 }

