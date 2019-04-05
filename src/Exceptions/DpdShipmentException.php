<?php

namespace BernhardK\Dpd\Exceptions;

use Exception;

class DpdShipmentException extends Exception
{
    public static function predictUnavailable(): self
    {
        return new static('Predict service not available for this destination');
    }

    public static function incompleteParcel(): self
    {
        return new static('Parcel array not complete');
    }

    public static function noParcel(): self
    {
        return new static('Create at least one parcel');
    }

    public static function dpdFault(string $fault): self
    {
        return new static($fault);
    }
}