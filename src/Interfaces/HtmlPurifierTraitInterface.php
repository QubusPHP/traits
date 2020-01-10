<?php
namespace Qubus\Traits\Interfaces;

interface HtmlPurifierTraitInterface
{
    /**
     * Escaping for rich text.
     *
     * @since 1.0.2
     * @param string $string
     * @return string Escaped rich text.
     */
    public function purify($string, $is_image = false);
}
