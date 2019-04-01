<?php

    namespace BernhardK\Dpd;

    use Illuminate\Support\Facades\Facade;

    class DpdFacade extends Facade
    {
        protected static function getFacadeAccessor()
        {
            return 'laravel-dpd';
        }
    }