<?php
namespace Qubus\Traits\Interfaces;

interface ConverterTraitInterface
{
    /**
     * Takes an array and turns it into an object.
     *
     * @since 1.0.1
     * @param array $array Array of data.
     */
    public function toObject(array $array);

    /**
     * Takes an object and turns it into an array.
     *
     * @since 1.0.1
     * @param object $object Object data.
     */
    public function toArray($object);
}
