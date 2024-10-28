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
            return true;
        }

        // ... (kode lainnya)
    }
}
