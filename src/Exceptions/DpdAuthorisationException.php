<?php

namespace BernhardK\Dpd\Exceptions;

use Exception;

class DpdAuthorisationException extends Exception
{
    public static function because(string $message): self
    {
        return new static($message);
    }
}