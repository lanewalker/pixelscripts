<?php
/**
 * Created by PhpStorm.
 * User: mwalker
 * Date: 10/10/21
 */


?>
<html>
<head>
    <title></title>
</head>
<style>
    body {
        background-size: 100% 100%;
        /*background-image: url('Selection_406.png');*/
    }
    #content {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
    }

    #team_name:not(:focus) {
        font-style:italic;
        color:grey;
    }
    div.btn {
        color:#444;
        border:1px solid #CCC;
        background:#FFFFFF;
        box-shadow: 0 0 5px -1px rgba(0,0,0,0.2);
        cursor:pointer;
        vertical-align:middle;
        padding: 5px;
        text-align: center;
    }
    div.btn:active {
        /*color:red;*/
        box-shadow: 0 0 5px -1px rgba(0,0,0,0.6);
    }
    img.header {
        font-size: 90%;
        width: 100%;
        text-align: center;
        margin-bottom: 30px;
    }
</style>
<body>

<div id="timer" style="font-family:Arial;color:black;font-size:6vw;font-weight:bold;text-align:center;display:none;"></div>
<div id="content" style="font-family:Arial;color:black;font-size:6vw;font-weight:bold;text-align:center;"></div>
<div id="instructions" style="font-family:Arial;color:black;font-size:6vw;font-weight:bold;text-align:center;display:none;">
    <h3>Playing Mural Adventure</h3>
    Adventure begins at :00 :10 :20 :30 :40 :50 each hour!
</div>

<script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script>
    $( document ).ready(function() {

        //if currently on an adventure, display adventure status
        if(Cookies.get("pixelstix-mural-adeventure")){
            adventure = Cookies.get('pixelstix-mural-adeventure');
            displayAdventureStatus(adventure);
            setInterval(displayAdventureStatus,30000,adventure);
        }else{
            d = new Date();
            m = d.getMinutes();
            console.log(d);
            if(m == "00" || m == "10" || m == "20" || m == "30" || m == "40" || m == "50") {
                //adventure time
                $.get("https://content.pixelstix.com/mural_adventure/adventure_controller.php?action=get_adventure",function(data) {
                    data = JSON.parse(data);
                    adventure_data = { "adventure":data,"started":d }
                    inNminutes = new Date(new Date().getTime() + data.minutes * 60 * 1000);
                    Cookies.set("pixelstix-mural-adeventure",JSON.stringify(adventure_data),{expires: inNminutes });
                    adventure = Cookies.get('pixelstix-mural-adeventure');
                    displayAdventureStatus(adventure);
                    setInterval(displayAdventureStatus,30000,adventure);
                });
            }else{
                //give Mural Adventure Instructions
                $("#content").hide();
                $("#instructions").show();
            }
        }
    });

    function displayAdventureStatus(adventure){
        $("#timer").hide();
        adventure = JSON.parse(adventure);
        adventure_expires = new Date(new Date(adventure.started).getTime() + adventure.adventure['minutes']*60000);
        time_left = (adventure_expires - new Date());
        minutes_left = Math.round(((time_left % 86400000) % 3600000) / 60000);
        if(minutes_left > 0){
            $("#timer").html(minutes_left+" minutes remaining");
            $("#timer").show(1000);
            $("#content").html("-"+adventure.adventure['name']+"-<br/>"+adventure.adventure['text']);
        }else{
            $("#content").html("Times Up!<br/>-"+adventure.adventure['name']+"-<br/>has expired.");
        }



    }
</script>
</body>
</html>
