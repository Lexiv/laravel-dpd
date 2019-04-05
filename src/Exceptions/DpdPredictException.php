<?php

namespace BernhardK\Dpd\Exceptions;

use Exception;

class DpdPredictException extends Exception
{
    public static function incompletePredictArray(): self
    {
        return new static('Predict array not complete');
    }

    public static function channel(string $message): self
    {
        return new static($message);
    }

}