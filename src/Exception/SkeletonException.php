<?php
/**
 * [FILE DESCRIPTION].
 *
 * @author    __Vendor__ <__email__>
 * @copyright __year__ (c) __Vendor__ - __PREFIX____Package__
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/__Vendor__/__PREFIX____Package__
 * @since     __version__
 */
namespace __Vendor__\__Package__\Exception;

/**
 * Exception class for __PREFIX____Package__ library.
 *
 * You can use an exception and error handler with this library.
 *
 * @link https://github.com/Josantonius/PHP-ErrorHandler
 */
class __Package__Exception extends \Exception
{
    /**
     * @param string $msg    → message error
     * @param int    $status → HTTP response status code
     */
    public function __construct($msg = '', $status = 0)
    {
        $this->message = $msg;
        $this->statusCode = $status;
    }
}
