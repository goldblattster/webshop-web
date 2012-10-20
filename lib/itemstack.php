<?php
class Enchantment
{
    const Arrow_Damage = 48;
    const Arrow_Fire = 50;
    const Arrow_Infinite = 51;
    const Arrow_Knockback = 49;
    const Damage_All = 16;
    const Damage_Arthropods = 18;
    const Damage_Undead = 17;
    const Dig_Speed = 32;
    const Durability = 34;
    const Fire_Aspect = 20;
    const Knockback = 19;
    const Loot_Bonus_Blocks = 35;
    const Loot_Bonus_Mobs = 21;
    const Oxygen = 5;
    const Protection_Environmental = 0;
    const Protection_Explosions = 3;
    const Protection_Fall = 2;
    const Protection_Fire = 1;
    const Protection_Projectile = 4;
    const Silk_Touch = 33;
    const Water_Worker = 6;
}

class ItemStack
{
    private $id;
    private $amount;
    private $durability;
    private $enchantments;

    function __construct($id, $amount = 1, $durability = -1, $enchantments = array())
    {
        $this->id = $id;
        $this->amount = $amount;
        $this->durability = $durability;
        $this->enchantments = $enchantments;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        if (is_int($id)) {
            $this->id = $id;
        }
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getDurability()
    {
        return $this->durability;
    }

    public function addEnchantment($enchantment, $level)
    {
        $this->enchantments[$enchantment] = $level;
    }

    public function removeEnchantment($enchantment) {
        unset($this->enchantments[$enchantment]);
    }

    public function getEnchantmentLevel($enchantment)
    {
        if (array_key_exists($enchantment, $this->enchantments))
        {
            return $this->enchantments[$enchantment];
        } else {
            return 0;
        }
    }

    public function getEnchantments()
    {
        return $this->enchantments;
    }
}
