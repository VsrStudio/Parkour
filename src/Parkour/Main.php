namespace Parkour\utils;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener {
    private static $instance;

    public function onLoad(): void {
        self::$instance = $this;
    }

    public function onEnable(): void {
        $this->getLogger()->info("Parkour plugin enabled.");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onDisable(): void {
        $this->getLogger()->info("Parkour plugin disabled.");
    }

    public static function getInstance(): self {
        return self::$instance;
    }

    public function onPlayerJoin(PlayerJoinEvent $event): void {
        $player = $event->getPlayer();
        $player->sendMessage("Selamat datang di Parkour! Gunakan perintah /parkour untuk mulai.");
    }

    public function getLogger() {
        return parent::getLogger();
    }
}
