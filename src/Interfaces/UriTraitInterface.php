<?php
namespace Qubus\Traits\Interfaces;

interface UriTraitInterface
{
    /**
     * Redirects to another page.
     *
     * Uses `qubus_redirect` and `qubus_redirect_status` filter hooks.
     *
     * @since 1.0.1
     * @param string $location The path to redirect to
     * @param int $status Status code to use
     * @return bool False if $location is not set
     */
    public function redirect(string $location, int $status = 302);

    /**
     * Url shortening function.
     *
     * @since 1.0.1
     * @param string $url URL
     * @param int $length Characters to check against.
     * @return string
     */
    public function shorten(string $url, int $length = 80);

    public function getPathInfo($relative);

    /**
     * Whether the current request is for an administrative interface.
     *
     * e.g. `/admin/`
     *
     * @since 1.0.1
     * @return bool True if an admin screen, otherwise false.
     */
    public function isAdmin(): bool;

    /**
     * Whether the current request is for a login interface.
     *
     * e.g. `/login/`
     *
     * @since 1.0.1
     * @return bool True if login screen, otherwise false.
     */
    public function isLogin(): bool;
}
