<?php

namespace GuzzleHttp\Promise;

/**
 * Container for a coroutine result.
 *
 * @internal
 */
final class CoroutineResult
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }
}
