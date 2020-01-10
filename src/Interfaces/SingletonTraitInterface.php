<?php
namespace Qubus\Traits\Interfaces;

interface SingletonTraitInterface
{
    /**
     * Creates the original or retrieves the stored singleton instance
     *
     * @return self
     */
    public static function getInstance();

    /**
     * Unserialization is disabled
     *
     * @throws \RuntimeException if called
     */
    public function unserialize($serialized_data);
}
