<?php
/**
 * Created by PhpStorm.
 * User: jens
 * Date: 28/01/19
 * Time: 19:38
 */

namespace App;


class NsGroup extends Api
{
    /** @var int */
    private static $total;
    /** @var int */
    private static $found;
    /** @var string */
    private $handle;
    /** @var string */
    private $name;
    /** @var string */
    private $ns1, $ns2, $ns3, $ns4, $ns5, $ns6;
    /** @var Order */
    private $order;

    public function add(string $alias, string $ns1, string $ns2, string $ns3 = null, string $ns4 = null, string $ns5 = null, string $ns6 = null)
    {
        $command = 'nsgroup_add' .
            '&alias=' . $alias .
            '&ns1_fqdn=' . $ns1 .
            '&ns2_fqdn=' . $ns2;
        if (isset($ns3)) {
            $command .= '&ns3_fqdn=' . $ns3;
        }
        if (isset($ns4)) {
            $command .= '&ns4_fqdn=' . $ns4;
        }
        if (isset($ns5)) {
            $command .= '&ns5_fqdn=' . $ns5;
        }
        if (isset($ns6)) {
            $command .= '&ns6_fqdn=' . $ns6;
        }

        $response = Api::call($command);
    }

    public function delete(string $handle)
    {
        Api::call('nsgroup_del&nsgroup=' . $handle);
    }

    public function get(string $handle)
    {
        Api::call('nsgroup_get&nsgroup=' . $handle);
    }

    public function update(string $handle, string $alias = null, string $ns1 = null, string $ns2 = null, string $ns3 = null, string $ns4 = null, string $ns5 = null, string $ns6 = null)
    {
        $command = 'nsgroup_upd' .
            '&nsgroup=' . $handle;
        if (isset($alias)) {
            $command .= '&alias=' . $alias;
        }
        if (isset($ns1)) {
            $command .= '&ns1_fqdn=' . $ns1;
        }
        if (isset($ns2)) {
            $command .= '&ns2_fqdn=' . $ns2;
        }
        if (isset($ns3)) {
            $command .= '&ns3_fqdn=' . $ns3;
        }
        if (isset($ns4)) {
            $command .= '&ns4_fqdn=' . $ns4;
        }
        if (isset($ns5)) {
            $command .= '&ns5_fqdn=' . $ns5;
        }
        if (isset($ns6)) {
            $command .= '&ns6_fqdn=' . $ns6;
        }    }

    public function list()
    {
        $response = Api::call("nsgroup_list");

        echo ($response);
    }

    /**
     * @return int
     */
    public static function getTotal(): int
    {
        return self::$total;
    }

    /**
     * @param int $total
     */
    public static function setTotal(int $total): void
    {
        self::$total = $total;
    }

    /**
     * @return int
     */
    public static function getFound(): int
    {
        return self::$found;
    }

    /**
     * @param int $found
     */
    public static function setFound(int $found): void
    {
        self::$found = $found;
    }

    /**
     * @return string
     */
    public function getHandle(): string
    {
        return $this->handle;
    }

    /**
     * @param string $handle
     */
    public function setHandle(string $handle): void
    {
        $this->handle = $handle;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNs1(): string
    {
        return $this->ns1;
    }

    /**
     * @param string $ns1
     */
    public function setNs1(string $ns1): void
    {
        $this->ns1 = $ns1;
    }

    /**
     * @return string
     */
    public function getNs2(): string
    {
        return $this->ns2;
    }

    /**
     * @param string $ns2
     */
    public function setNs2(string $ns2): void
    {
        $this->ns2 = $ns2;
    }

    /**
     * @return string
     */
    public function getNs3(): string
    {
        return $this->ns3;
    }

    /**
     * @param string $ns3
     */
    public function setNs3(string $ns3): void
    {
        $this->ns3 = $ns3;
    }

    /**
     * @return string
     */
    public function getNs4(): string
    {
        return $this->ns4;
    }

    /**
     * @param string $ns4
     */
    public function setNs4(string $ns4): void
    {
        $this->ns4 = $ns4;
    }

    /**
     * @return string
     */
    public function getNs5(): string
    {
        return $this->ns5;
    }

    /**
     * @param string $ns5
     */
    public function setNs5(string $ns5): void
    {
        $this->ns5 = $ns5;
    }

    /**
     * @return string
     */
    public function getNs6(): string
    {
        return $this->ns6;
    }

    /**
     * @param string $ns6
     */
    public function setNs6(string $ns6): void
    {
        $this->ns6 = $ns6;
    }

    /**
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder(Order $order): void
    {
        $this->order = $order;
    }
}