<?php
require_once(dirname(__FILE__) . "/ItemStack.php");

class Inventory {
    private $items;
    private $holder;

    function __construct($items = array(), $holder)
    {
        $this->items = $items;
        $this->holder = $holder;
    }

    public function toString()
    {
        $serialization = '54;';
        for ($i = 0; $i < 54; $i++)
        {
            $stack = new ItemStack($this->items[$i]);
            if (!empty($stack)) {
                $serializedStack = '';
                $id = $stack->getId();

                $serializedStack .= 't@' . $id;

                if ($stack->getDurability() != -1)
                {
                    $serializedStack .= ':d@' . $stack->getDurability();
                }

                if ($stack->getAmount() != 1)
                {
                    $serializedStack .= ':a@' . $stack->getAmount();
                }

                $stackEnchantments = $stack->getEnchantments();
                if (empty($stackEnchantments))
                {
                    foreach ($stackEnchantments as $enchantment => $level)
                    {
                        $serializedStack .= ':e@' . $enchantment . '@' . $level;
                    }
                }

                $serialization .= $i . '#' . $serializedStack . ';';
            }
        }

        return $serialization;
    }

    public static function stringToInventory($string)
    {

    }
}