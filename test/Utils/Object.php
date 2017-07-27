<?php

namespace Demeyerthom\Maybe\Test\Utils;

/**
 * Class Object
 */
class Object
{
    protected $protected;

    public function __construct($protected = null)
    {
        $this->protected = $protected;
    }

    public function getProtected()
    {
        return $this->protected;
    }

}