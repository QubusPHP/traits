<?php
namespace Qubus\Traits\Interfaces;

interface SslTraitInterface
{
    /**
     * Determines if SSL is used.
     *
     * @since 1.0.1
     * @return bool True if SSL, otherwise false.
     */
    public function isEnabled(): bool;
}
