<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

namespace dvr\system\common;

use Throwable;

/**
 *
 */
class NotImplementedException extends SystemException
{
    /**
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "Not implemented", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
