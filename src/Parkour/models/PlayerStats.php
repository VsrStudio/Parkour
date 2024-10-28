namespace Parkour\models;

class PlayerStats {
    private string $playerName;
    private int $timeTaken;
    private int $checkpointReached;

    public function __construct(string $playerName, int $timeTaken, int $checkpointReached) {
        $this->playerName = $playerName;
        $this->timeTaken = $timeTaken;
        $this->checkpointReached = $checkpointReached;
    }

    public function getPlayerName(): string {
        return $this->playerName;
    }

    public function getTimeTaken(): int {
        return $this->timeTaken;
    }

    public function getCheckpointReached(): int {
        return $this->checkpointReached;
    }

    public function displayStats(): string {
        return "Player: $this->playerName, Time Taken: $this->timeTaken, Checkpoints Reached: $this->checkpointReached";
    }
}
