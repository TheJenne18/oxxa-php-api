<?php
/**
 * Created by PhpStorm.
 * User: jens
 * Date: 28/01/19
 * Time: 19:34
 */

namespace App;


class Order
{
    /** @var int */
    private $orderId;
    /** @var string */
    private $command;
    /** @var string */
    private $tld;
    /** @var string */
    private $statusCode;
    /** @var string */
    private $statusDescription;
    /** @var double */
    private $price;
    /** @var string */
    private $details;
    /** @var bool */
    private $complete;
    /** @var bool */
    private $done;
}