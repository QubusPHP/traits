<?php
namespace Qubus\Traits;

trait HasDataTrait
{
    /**
     * Get the array to operate on from the implementation
     *
     * @return array
     */
    abstract protected function & getData();
}
