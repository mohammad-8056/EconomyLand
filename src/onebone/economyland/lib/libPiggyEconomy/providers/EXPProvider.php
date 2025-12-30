<?php

declare(strict_types=1);

namespace onebone\economyland\lib\libPiggyEconomy\providers;

use pocketmine\entity\utils\ExperienceUtils;
use pocketmine\player\Player;

class EXPProvider extends EconomyProvider
{
    public function getMonetaryUnit(): string
    {
        return "Exp";
    }

    public function getMoney(Player $player, callable $callback): void
    {
        $callback($player->getXpManager()->getCurrentTotalXp());
    }

    public function giveMoney(Player $player, float $amount, ?callable $callback = null): void
    {
        $ret = $player->getXpManager()->addXp((int)$amount);
        if ($callback) $callback($ret);
    }

    public function takeMoney(Player $player, float $amount, ?callable $callback = null): void
    {
        $ret = $player->getXpManager()->subtractXp((int)$amount);
        if ($callback) $callback($ret);
    }

    public function setMoney(Player $player, float $amount, ?callable $callback = null): void
    {
        $ret = $player->getXpManager()->setCurrentTotalXp((int)$amount);
        if ($callback) $callback($ret);
    }
}
