<?php declare(strict_types=1);

namespace Marios\Pizza;

abstract class Topping
{
    /**
     * @api
     */
    public function availableToAll()
    {

    }

    public function publiclyAvailable()
    {

    }

    protected function availableToChildren()
    {

    }

    private function availableToItself()
    {

    }

    /**
     * @internal
     */
    private function secretIngredient()
    {

    }
}
