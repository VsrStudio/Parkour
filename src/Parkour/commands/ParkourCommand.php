namespace Parkour\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use Parkour\parkour\Parkour;

class ParkourCommand extends Command {

    public function __construct() {
        parent::__construct("parkour", "Parkour commands", "/parkour", []);
        $this->setPermission("parkour.command");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): bool {
        if (!$sender instanceof Player) {
            $sender->sendMessage("This command can only be used in-game.");
            return true;
        }

        switch ($args[0] ?? "") {
            case "start":
                $this->startParkour($sender);
                break;
            case "stop":
                $this->stopParkour($sender);
                break;
            case "leaderboard":
                $this->showLeaderboard($sender);
                break;
            case "settings":
                $this->showSettings($sender);
                break;
            case "stats":
                $this->showStats($sender);
                break;
            case "checkpoint":
                $this->setCheckpoint($sender);
                break;
            default:
                $sender->sendMessage("Unknown command.");
                break;
        }
        return true;
    }

    private function startParkour(Player $player) {
        // Implement start logic
    }

    private function stopParkour(Player $player) {
        // Implement stop logic
    }

    private function showLeaderboard(Player $player) {
        // Implement leaderboard logic
    }

    private function showSettings(Player $player) {
        // Implement settings logic
    }

    private function showStats(Player $player) {
        // Implement stats logic
    }

    private function setCheckpoint(Player $player) {
        // Implement checkpoint logic
    }
}
