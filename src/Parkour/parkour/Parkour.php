namespace Parkour\parkour;

use pocketmine\math\Vector3;

class Parkour {
    private array $checkpoints = [];

    public function addCheckpoint(Vector3 $position): void {
        $this->checkpoints[] = $position; // Menambahkan checkpoint baru
    }

    public function getCheckpoints(): array {
        return $this->checkpoints; // Mengembalikan daftar checkpoint
    }
}
