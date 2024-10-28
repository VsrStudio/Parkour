namespace Parkour\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use Parkour\utils\Main;

class ParkourCommand extends Command {
    public function __construct() {
        parent::__construct("parkour", "Perintah Parkour", "/parkour", []);
        $this->setPermission("parkour.command");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): bool {
        if (!$sender instanceof Player) {
            Main::getInstance()->getLogger()->warning("Perintah ini hanya dapat digunakan di dalam permainan.");
            $sender->sendMessage("Perintah ini hanya dapat digunakan di dalam permainan."); // Kirim pesan ke pengirim
            return true;
        }

        if (empty($args)) {
            Main::getInstance()->getLogger()->info("Perintah tidak dikenal.");
            $sender->sendMessage("Gunakan /parkour [start|stop|leaderboard|settings|stats|checkpoint].");
            return true;
        }

        switch ($args[0]) {
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
                Main::getInstance()->getLogger()->info("Perintah tidak dikenal.");
                $sender->sendMessage("Perintah tidak dikenal. Gunakan /parkour [start|stop|leaderboard|settings|stats|checkpoint].");
                break;
        }
        return true;
    }

    private function startParkour(Player $player): void {
        // Implement
