<?php
namespace Qubus\Traits;

use Qubus\Hooks\ActionFilterHook;

trait UriTrait
{
    /**
     * Redirects to another page.
     *
     * Uses `ttcms_redirect` and `ttcms_redirect_status` filter hooks.
     *
     * @since 1.0.0
     * @param string $location The path to redirect to
     * @param int $status Status code to use
     * @return bool False if $location is not set
     */
    public function redirect(string $location, int $status = 302)
    {
        /**
         * Filters the redirect location.
         *
         * @since 1.0.0
         *
         * @param string $location The path to redirect to.
         * @param int    $status   Status code to use.
         */
        $_location = ActionFilterHook::getInstance()->applyFilter('qubus_redirect', $location, $status);
        /**
         * Filters the redirect status code.
         *
         * @since 1.0.0
         *
         * @param int    $status   Status code to use.
         * @param string $_location The path to redirect to.
         */
        $_status = ActionFilterHook::getInstance()->applyFilter('qubus_redirect_status', $status, $_location);

        if (!$_location) {
            return false;
        }

        header("Location: $_location", true, $_status);
        return true;
    }

    /**
     * Url shortening function.
     *
     * @since 1.0.0
     * @param string $url URL
     * @param int $length Characters to check against.
     * @return string
     */
    public function shorten(string $url, int $length = 80)
    {
        if (strlen($url) > $length) {
            $strlen = $length - 30;
            $first = substr($url, 0, $strlen);
            $last = substr($url, -15);
            $short_url = $first . "[ ... ]" . $last;
            return $short_url;
        } else {
            return $url;
        }
    }

    public function getPathInfo($relative)
    {
        $base = basename(BASE_PATH);
        if (strpos($_SERVER['REQUEST_URI'], DS . $base . $relative) === 0) {
            return $relative;
        } else {
            return $_SERVER['REQUEST_URI'];
        }
    }

    /**
     * Whether the current request is for an administrative interface.
     *
     * e.g. `/admin/`
     *
     * @since 1.0.0
     * @return bool True if an admin screen, otherwise false.
     */
    public function isAdmin(): bool
    {
        $relative_path = ActionFilterHook::getInstance()->applyFilter('qubus_is_admin', '/admin');

        if (strpos($this->getPathInfo($relative_path), $relative_path) === 0) {
            return true;
        }
        return false;
    }

    /**
     * Whether the current request is for a login interface.
     *
     * e.g. `/login/`
     *
     * @since 1.0.0
     * @return bool True if login screen, otherwise false.
     */
    public function isLogin(): bool
    {
        $relative_path = ActionFilterHook::getInstance()->applyFilter('qubus_is_login', '/login');

        if (strpos($this->getPathInfo($relative_path), $relative_path) === 0) {
            return true;
        }
        return false;
    }
}
