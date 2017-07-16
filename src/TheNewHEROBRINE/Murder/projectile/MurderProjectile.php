<?php

namespace TheNewHEROBRINE\Murder\projectile;

use pocketmine\entity\Projectile;

abstract class MurderProjectile extends Projectile {
    public $width = 0.5;
    public $length = 0.5;
    public $height = 0.5;

    protected $gravity = 0;
    protected $drag = 0;

    public function getResultDamage(): int {
        return 3.5 * 2;
    }
}