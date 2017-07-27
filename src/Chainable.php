<?php

namespace Demeyerthom\Maybe;

/**
 * Trait Chainable
 */
trait Chainable
{
    /**
     * @var mixed
     */
    protected $value;

    /**
     * @param string $name
     * @param array $arguments
     *
     * @return None|Some
     */
    public function __call(string $name, array $arguments)
    {
        if ($this->value === null || $this->value instanceof None) {
            return new None();
        }

        return new Some($this->value->$name());
    }
}