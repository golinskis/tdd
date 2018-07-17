<?php
/**
 * Created by PhpStorm.
 * User: szymongolinski
 * Date: 17.07.2018
 * Time: 16:16
 */

namespace Makao;

use Makao\Exception\TooManyPlayersAtTheTableException;


class Table
{
    private $players = [];

    public function countPlayers()
    {
        return count($this->players);
    }


    public function addPlayer($player): void
    {
        if($this->countPlayers() == 4){
            throw new TooManyPlayersAtTheTableException('Max capacity is 4 players');
        }
        $this->players[] = $player;
    }
}