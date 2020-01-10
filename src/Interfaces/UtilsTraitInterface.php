<?php
namespace Qubus\Traits\Interfaces;

interface UtilsTraitInterface
{
    /**
     * Navigates through an array, object, or scalar, and removes slashes from the values.
     *
     * @since 1.0.1
     * @param mixed $value  The value to be stripped.
     * @return mixed Stripped value.
     */
    public function stripslashesDeep($value);

    /**
     * This should be used to remove slashes from data passed to core API that
     * expects data to be unslashed.
     *
     * @since 1.0.1
     * @param string|array String or array of strings to unslash.
     * @return string|array Unslashed value.
     */
    public function unslash($value);

    /**
     * Convert a value to non-negative integer.
     *
     * @since 1.0.1
     * @param mixed $maybeint   Data you wish to have converted to a non-negative integer.
     * @return int A non-negative integer.
     */
    public function absint($maybeint): int;

    /**
     * Checks if a variable is null. If not null, check if integer or string.
     *
     * @since 1.0.1
     * @param string|int $var   Variable to check.
     * @return string|int|null Returns null if empty otherwise a string or an integer.
     */
    public function ifNull($var);

    /**
     * Turns multi-dimensional array into a regular array.
     *
     * @since 1.0.1
     * @param array $array The array to convert.
     * @return array
     */
    public function flattenArray(array $array): array;

    /**
     * Removes all whitespace.
     *
     * @since 1.0.1
     * @param string $str
     * @return mixed
     */
    public function trim($str);

    /**
     * Renders any unwarranted special characters to HTML entities.
     *
     * @since 1.0.1
     * @param string $str
     * @return mixed
     */
    public function escape($str);

    /**
     * Parses a string into variables to be stored in an array.
     *
     * Uses {@link http://www.php.net/parse_str parse_str()}
     *
     * @since 1.0.1
     * @param string $string The string to be parsed.
     * @param array $array Variables will be stored in this array.
     */
    public function parseStr($string, $array);

    /**
     * Merge user defined arguments into defaults array.
     *
     * This method is used throughout TriTan CMS to allow for both string or array
     * to be merged into another array.
     *
     * @since 0.9
     * @param string|array $args Value to merge with $defaults
     * @param array $defaults Optional. Array that serves as the defaults. Default empty.
     * @return array Merged user defined values with defaults.
     */
    public function parseArgs($args, $defaults = '');

    /**
     * Properly strip all HTML tags including script and style (default).
     *
     * This differs from PHP's native strip_tags() function because this function removes the contents of
     * the `<script>` and `<style>` tags. E.g. `strip_tags( '<script>something</script>' )`
     * will return `'something'`. By default, $this->stripTags() will return `''`.
     *
     * Example Usage:
     *
     *      $string = '<b>sample</b> text with <div>tags</div>';
     *
     *      $this->stripTags($string); //returns 'text with'
     *      $this->stripTags($string, false, '<b>'); //returns '<b>sample</b> text with'
     *      $this->stripTags($string, false, '<b>', true); //returns 'text with <div>tags</div>'
     *
     * @since 1.0.1
     * @param string $string        String containing HTML tags
     * @param bool   $remove_breaks Optional. Whether to remove left over line breaks and white space chars
     * @param string $tags          Tags that should be removed.
     * @param bool   $invert        Instead of removing tags, this option checks for which tags to not remove.
     *                              Default: false;
     * @return string The processed string.
     */
    public function stripTags($string, $remove_breaks = false, $tags = '', $invert = false);
}
