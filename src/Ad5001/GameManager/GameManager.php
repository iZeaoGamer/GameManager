<?php

use Ad5001\GameManager\Game;
use pocketmine\Player;

class <YOUR_GAME_NAME> extends Game {

public function onGameStart() { // When the game start (enought players)
// $this->getServer()->broadcastMessage("Game started on {$this->getLevel()->getName()}");
}


public function onGameStop() { // When you stop the game.
// $this->getServer()->broadcastMessage("Game stoped on {$this->getLevel()->getName()}");
}
   

public function getMaxPlayers() : int { // Return the max of the players
return <NUMBER OF PLAYERS MAX>;
}
  
}
