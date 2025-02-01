# EconomyLand

EconomyLand is a PocketMine-MP plugin that allows players to buy, sell, and manage land using the in-game economy. This plugin integrates seamlessly with EconomyAPI and provides a simple yet effective land protection system.

## 📌 Features
- ✅ Buy and sell land using in-game currency
- ✅ Protect owned land from other players
- ✅ Configurable land prices and sizes
- ✅ Simple commands for managing land ownership
- ✅ Compatible with **PocketMine API 5**

## 🛠 Installation
1. Download the latest version of **EconomyLand**.
2. Place the `.phar` file into the `plugins` folder of your PocketMine-MP server.
3. Restart your server.

## 🔧 Commands
| Command | Description |
|---------|-------------|
| `/startp` | Sets start position |
| `/endp` | Sets second position |
| `/land buy` | Purchase a piece of land |
| `/land here` | Get information about a land |
| `/land give <player> <land number>` | Give land to another player |
| `/land move <land number>` | Going to a specific place |
| `/land whose <player>` | Check ownership of land |
| `/landsell <land number>` | Sell specific land |
| `/land invite <land number> <player>` | Add a player to your land |
| `/land kick <land number> <player>` | Remove a player from your land |

## 📜 Permissions
| Permission | Default | Description |
|------------|---------|-------------|
| `economyland.*` | op | Allows player to use all functions in EconomyLand |
| `economyland.land.modify.others` | op | Allows player to modify others' lands |
| `economyland.land.modify.whiteland` | op | Allows player to modify white lands |
| `economyland.land.give.others` | op | Allows player to give others' land to others |
| `economyland.landsell.others` | op | Allows player to sell others' land |
| `economyland.command.land.invite.remove.others` | op | Allows player to remove invited players from land |

## 📥 Source Code
This plugin is based on [EconomyS](https://github.com/onebone/EconomyS). You can find the source code on GitHub:
🔗 [EconomyLand Repository](https://github.com/mohammad-8056/EconomyLand)

## 📝 Changelog
- Updated for **PocketMine API 5**
- Improved land protection system
- Optimized performance and bug fixes

## 🤝 Contribution
Feel free to contribute by opening issues or pull requests on GitHub.

---

🚀 **Enjoy managing your land with EconomyLand!**
