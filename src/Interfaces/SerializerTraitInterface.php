<?php
namespace Qubus\Traits\Interfaces;

interface SerializerTraitInterface
{

    /**
     * Serializes data if necessary.
     *
     * @since 1.0.1
     * @param string $data Data to be serialized.
     * @return string Serialized data or original string.
     * @throws TypeException
     */
    public function serialize($data);

    /**
     * Unserializes data if necessary.
     *
     * @since 1.0.1
     * @param string $data Data that should be unserialzed.
     * @return string Unserialized data or original string.
     */
    public function unserialize($data);

    public function isSerialized($data, $strict = true);
}
