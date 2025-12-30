<?php

declare(strict_types=1);

namespace onebone\economyland\lib\libPiggyEconomy\providers;

use ecstsy\essentialsx\Loader;
use pocketmine\player\Player;
use pocketmine\Server;

class EssentialsXProvider extends EconomyProvider
{
    private Loader $essentialsX;

    public static function checkDependencies(): bool
    {
        return Server::getInstance()->getPluginManager()->getPlugin("EssentialsX") !== null;
    }

    public function __construct()
    {
        $this->essentialsX = Loader::getInstance();
    }

    public function getMonetaryUnit(): string
    {
        return $this->essentialsX->getConfig()->get("currency-symbol");
    }

    public function getMoney(Player $player, callable $callback): void
    {
        $callback($this->essentialsX->getPlayerManager()->getSession($player)->getBalance() ?: 0);
    }

    public function giveMoney(Player $player, float $amount, ?callable $callback = null): void
    {
        $this->essentialsX->getPlayerManager()->getSession($player)->addBalance((int)$amount);
    }

    public function takeMoney(Player $player, float $amount, ?callable $callback = null): void
    {
        $this->essentialsX->getPlayerManager()->getSession($player)->subtractBalance((int)$amount);
    }

    public function setMoney(Player $player, float $amount, ?callable $callback = null): void
    {
        $this->essentialsX->getPlayerManager()->getSession($player)->setBalance((int)$amount);
    }
}