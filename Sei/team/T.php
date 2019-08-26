<?php

namespace Sei\team;

use pocketmine\Player;

class T {

	private static $team;
	private static $pteam;

	public static function createTeam(string $teamname): bool{

		if(self::checkTeam($teamname)){
			return false;
		}

		static::$team[$teamname] = 0;
		return true;

	}

	public static function checkTeam(string $teamname): bool{

		return(isset(self::$team[$teamname])) ? true : false;

	}

	public static function checkInTeam(Player $player): bool{

		$name = $player->getName();

		return(isset(self::$pteam[$name])) ? true : false;

	}
	
	public static function deleteTeam(string $teamname): bool{
		
		if(self::checkTeam($teamname)){
			
			if(!self::getTeamData($teamname) === 0){
				
				unset(self::$team[$teamname]);
				
				foreach(self::$pteam as $name => $team){
					
					if($team === $teamname){
						unset(self::$pteam[$name]);
					}
				}
				return true;
			}
			return false;
		}

	}

	public static function joinTeam(string $teamname, Player $player): bool{

		$name = $player->getName();

		if(self::checkTeam($teamname)){

			if(self::checkInTeam($player)) return false;

			self::$pteam[$name] = $teamname;
			++self::$team[$teamname];
			return true;

		}
		return false;

	}

	public static function leaveTeam(string $teamname, Player $player): bool{
		$name = $player->getName();

		if(self::checkTeam($teamname)){

			if(!self::checkInTeam($player)) return false;

			self::$pteam[$name] = $teamname;
			--self::$team[$teamname];
			return true;

		}
		return false;

	}

	public static function getTeamData(string $teamname): int{

		if(!self::checkTeam($teamname)) return null;

		$team = self::$team[$teamname];
		
		return $team;
		
	}

	public static function getPTeam(Player $player): string{

		if(!self::checkInTeam($player)) return null;

		$name = $player->getName();

		$team = self::$pteam[$name];

		return $team;

	}

	public static function getAllPlayer(): array{

		$all = self::$pteam;

		return $all;

	}

	public static function getAllTeam(): array{

		$all = self::$team;

		return $all;

	}

}
