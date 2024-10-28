namespace Parkour\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use Parkour\parkour\Parkour;

class ParkourCommand extends Command {

    public function __construct() {
        parent::__construct("parkour", "Perintah Parkour", "/parkour", []);
        $this->setPermission("parkour.command");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): bool {
        if (!$sender instanceof Player) {
            // Menggunakan logger untuk mencatat peringatan
            $this->getPlugin()->getLogger()->warning("Perintah ini hanya dapat digunakan di dalam permainan.");
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
                $this->getPlugin()->getLogger()->info("Perintah tidak dikenal.");
                break;
        }
        return true;
    }

    private function startParkour(Player $player) {
        // Implementasi logika start parkour
    }

    private function stopParkour(Player $player) {
        // Implementasi logika stop parkour
    }

    private function showLeaderboard(Player $player) {
        // Implementasi logika leaderboard
    }

    private function showSettings(Player $player) {
        // Implementasi logika settings
    }

    private function showStats(Player $player) {
        // Implementasi logika stats
    }

    private function setCheckpoint(Player $player) {
        // Implementasi logika checkpoint
    }
}
