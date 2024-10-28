namespace Parkour\parkour;

use pocketmine\math\Vector3;
use Parkour\utils\Main;

class Parkour {
    private array $checkpoints = [];

    public function addCheckpoint(Vector3 $position): void {
        $this->checkpoints[] = $position; // Menambahkan checkpoint baru
        Main::getInstance()->getLogger()->info("Checkpoint ditambahkan di {$position}");
    }

    public function getCheckpoints(): array {
        return $this->checkpoints; // Mengembalikan daftar checkpoint
    }
}
