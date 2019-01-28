<?php
/**
 * Created by PhpStorm.
 * User: jens
 * Date: 28/01/19
 * Time: 19:35
 */

namespace App;


class Domain
{
    /** @var int */
    private static $total;
    /** @var int */
    private static $found;
    /** @var string */
    private $domainname;
    /** @var string */
    private $nsgroup;
    /** @var \DateTime */
    private $expireDate;
    /** @var bool */
    private $autoRenew;
    /** @var bool */
    private $lock;
    /** @var Order */
    private $order;
}