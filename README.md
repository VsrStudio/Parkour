# 🏃‍♂️ Parkour Plugin

The **Parkour** plugin allows you to create and manage a parkour minigame on your PocketMine server. Players can challenge themselves by completing various parkour courses, tracking their statistics, and competing on leaderboards.

## 🚀 Features

- **Create and manage parkour courses**: Easily set up challenging courses for players.
- **Checkpoint system**: Keep track of player progress with checkpoints.
- **Leaderboard**: Display top players and their best times.
- **Adjustable settings**: Customize gameplay to fit your server's needs.
- **Player statistics tracking**: Monitor player performance over time.

## 📥 Installation

1. **Download** the Parkour plugin.
2. **Place** the plugin folder into the `plugins` directory of your PocketMine server.
3. **Restart** your server.
4. **Configure** the settings in `resources/Parkour/config.yml` as needed.

## 📋 Commands

Here are the available commands:

| Command                              | Description                               |
| ------------------------------------ | ----------------------------------------- |
| `/parkour start`                    | Start the parkour game.                  |
| `/parkour stop`                     | Stop the parkour game.                   |
| `/parkour leaderboard`               | Show the leaderboard with top players.    |
| `/parkour settings`                 | Adjust parkour settings.                  |
| `/parkour stats`                    | Display player statistics.                |
| `/parkour set <checkpoint|time> <true|false|number>` | Set specific settings.            |
| `/parkour checkpoint`               | Set a checkpoint for the player.          |

## ⚙️ Configuration

The initial settings can be found in `resources/Parkour/config.yml`. Modify these settings to adjust game parameters such as time limits and checkpoint availability.

### Example `config.yml`

```yaml
settings:
  time_limit: 300          # Time limit in seconds
  checkpoint_enabled: true # Enable or disable checkpoints
