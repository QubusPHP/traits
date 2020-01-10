<?php
namespace Qubus\Traits\Interfaces;

interface EscapeTraitInterface
{
    /**
     * Escaping for HTML blocks.
     *
     * @since 1.0.0
     * @param string $string
     * @return string Escaped HTML block.
     */
    public function html($string);

    /**
     * Escaping for textarea.
     *
     * @since 1.0.0
     * @param string $string
     * @return string Escaped string.
     */
    public function textarea($string);

    /**
     * Escaping for url.
     *
     * @since 1.0.0
     * @param string $url
     * @return string Escaped url.
     */
    public function url(string $url, array $scheme = [], bool $encode = false);

    /**
     * Escaping for HTML attributes.
     *
     * @since 1.0.0
     * @param string $string
     * @return string Escaped HTML attribute.
     */
    public function attr($string);

    /**
     * Escaping for inline javascript.
     *
     * @since 1.0.0
     * @param string $string
     * @return string Escaped inline javascript.
     */
    public function js($string);
}
