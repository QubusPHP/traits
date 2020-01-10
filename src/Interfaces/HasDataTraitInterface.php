<?php
namespace Qubus\Traits\Interfaces;

interface HasDataTraitInterface
{
    /**
     * Get the array to operate on from the implementation
     *
     * @return array
     */
    public function & getData();
}
