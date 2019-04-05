<?php

namespace BernhardK\Dpd\Exceptions;

use Exception;

class DpdParcelException extends Exception
{
    public static function notFound(): self
    {
        return new static('Parcel not found');
    }
}