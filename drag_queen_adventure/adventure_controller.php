<?php

if($_REQUEST["action"] == "team_lookup"){

    $teams = file_get_contents(__DIR__."/adventure.json");
    $teams = json_decode($teams,true);
    $un_registered_teams = null;

    foreach($teams["teams"] as $i=>$team){
        if(empty($team["registered"])){
            $un_registered_teams["teams"][] = $team;
        }
    }

    $un_registered_teams["load_time"] = time();

    echo json_encode($un_registered_teams);

} else if($_REQUEST["action"] == "team_register") {

    $teams = file_get_contents(__DIR__."/adventure.json");
    $teams = json_decode($teams,true);

    $teams["teams"][] = array("name"=>$_REQUEST["team_name"],"registered"=>$_REQUEST["load_time"]);

    file_put_contents(__DIR__."/adventure.json",json_encode($teams,JSON_PRETTY_PRINT));

    echo $_REQUEST["team_name"];

}