<?php

namespace Parkour\models;

class PlayerStats {
    private $playerName;
    private $timeTaken;
    private $checkpointReached;

    public function __construct(string $playerName) {
        $this->playerName = $playerName;
        $this->timeTaken = 0;
        $this->checkpointReached = 0;
    }

    // Getter dan setter untuk atribut
}
