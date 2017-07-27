<?php

namespace Demeyerthom\Maybe;

/**
 * Class None
 */
class None extends \Monad\Option\None
{
    use Chainable;

    const DEFAULT_VALUE_NONE = null;

    /**
     * @return null
     */
    public function value()
    {
        return static::DEFAULT_VALUE_NONE;
    }
}