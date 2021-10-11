<?php

if($_REQUEST["action"] == "get_adventure"){

    $adventures = file_get_contents(__DIR__."/adventures.json");
    $adventures = json_decode($adventures,true);

    echo json_encode($adventures[array_rand($adventures)]);

} else if($_REQUEST["action"] == "team_register") {

    $teams = file_get_contents(__DIR__."/adventure.json");
    $teams = json_decode($teams,true);

    $teams["teams"][] = array("name"=>$_REQUEST["team_name"],"registered"=>$_REQUEST["load_time"]);

    file_put_contents(__DIR__."/adventure.json",json_encode($teams,JSON_PRETTY_PRINT));

    echo $_REQUEST["team_name"];

}