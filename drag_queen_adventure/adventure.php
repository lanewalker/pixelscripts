<?php
/**
 * Created by PhpStorm.
 * User: mwalker
 * Date: 12/9/19
 * Time: 8:46 AM
 */

$name = "Matthew";

//Attach coupon to final plaque after video (call to action)
//Upload new videos on Tuesday
//build out team registration page that allows people to select/enter their team name. This *must* be done by the team captain so that the system understands which
//phones performed which task, the fastest and soonest.

?>
<html>
<head>
    <title></title>
</head>
<style>
    body {
        background-size: 100% 100%;
        background-image: url('Selection_406.png');
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

<div id="content" style="font-family:Arial;color:white;font-size:10vw;font-weight:bold;text-align:center;"></div>

<script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script>
    $( document ).ready(function() {

        <?php if($_REQUEST['scavenger_stop'] == "reset") { ?>

            Cookies.remove('scavenger_stop_experienced');
            window.location.href = 'https://player.vimeo.com/video/525241093?autoplay=1';

        <?php }else if($_REQUEST['scavenger_stop'] == "begin") { ?>

            Cookies.remove('scavenger_stop_experienced');
            Cookies.set('scavenger_stop_experienced','entrance',{ expires:60 });
            window.location.href = 'https://player.vimeo.com/video/560702010?autoplay=1';

        <?php }else if($_REQUEST['scavenger_stop'] == "1") { ?>
            if(Cookies.get('scavenger_stop_experienced') === "entrance" || Cookies.get('scavenger_stop_experienced') === "1"){
                Cookies.set('scavenger_stop_experienced','1',{ expires:60 });
                window.location.href = 'https://player.vimeo.com/video/560687745?autoplay=1';
            }else{
                window.location.href = 'https://stpeteartsalliance.org/shine?alias=/2019_SHINE_Mural_Cecilia_Lueza';
            }
        <?php }else if($_REQUEST['scavenger_stop'] == "2") { ?>
            if(Cookies.get('scavenger_stop_experienced') === "1" || Cookies.get('scavenger_stop_experienced') === "2"){
                Cookies.set('scavenger_stop_experienced','2',{ expires:60 });
                window.location.href = 'https://player.vimeo.com/video/560699336?autoplay=1';
            }else{
                window.location.href = 'https://stpeteartsalliance.org/shine?alias=/2019_SHINE_Mural_Drew_Merritt';
            }
        <?php }else if($_REQUEST['scavenger_stop'] == "3") { ?>
            if(Cookies.get('scavenger_stop_experienced') === "2" || Cookies.get('scavenger_stop_experienced') === "3"){
                Cookies.set('scavenger_stop_experienced','3',{ expires:60 });
                window.location.href = 'https://player.vimeo.com/video/560689420?autoplay=1';
            }else{
                window.location.href = 'https://stpeteartsalliance.org/shine?alias=/2019_SHINE_Mural_Taylor_White';
            }
        <?php }else if($_REQUEST['scavenger_stop'] == "4") { ?>
            if(Cookies.get('scavenger_stop_experienced') === "3" || Cookies.get('scavenger_stop_experienced') === "4"){
                Cookies.set('scavenger_stop_experienced','4',{ expires:60 });
                window.location.href = 'https://player.vimeo.com/video/560688990?autoplay=1';
            }else{
                window.location.href = 'https://stpeteartsalliance.org/shine?alias=/2020_SHINE_Mural_BASK';
            }
        <?php }else if($_REQUEST['scavenger_stop'] == "5") { ?>
            if(Cookies.get('scavenger_stop_experienced') === "4" || Cookies.get('scavenger_stop_experienced') === "5"){
                Cookies.set('scavenger_stop_experienced','5',{ expires:60 });
                window.location.href = 'https://player.vimeo.com/video/560691476?autoplay=1';
            }else{
                window.location.href = 'https://stpeteartsalliance.org/shine?alias=/2018_SHINE_Mural_Angela_Faustina';
            }
        <?php }else if($_REQUEST['scavenger_stop'] == "6") { ?>
            if(Cookies.get('scavenger_stop_experienced') === "5" || Cookies.get('scavenger_stop_experienced') === "6"){
                Cookies.set('scavenger_stop_experienced','6',{ expires:60 });
                window.location.href = 'https://player.vimeo.com/video/560696622?autoplay=1';
            }else{
                window.location.href = 'https://stpeteartsalliance.org/shine?alias=/2016_SHINE_Mural_NoseGo';
            }
        <?php }else if($_REQUEST['scavenger_stop'] == "7") { ?>
            if(Cookies.get('scavenger_stop_experienced') === "6" || Cookies.get('scavenger_stop_experienced') === "7"){
                Cookies.set('scavenger_stop_experienced','7',{ expires:60 });
                window.location.href = 'https://player.vimeo.com/video/560692082?autoplay=1';
            }else{
                window.location.href = 'https://stpeteartsalliance.org/shine?alias=/2016_SHINE_Mural_Apexer';
            }
        <?php }else if($_REQUEST['scavenger_stop'] == "8") { ?>
            if(Cookies.get('scavenger_stop_experienced') === "7" || Cookies.get('scavenger_stop_experienced') === "8"){
                Cookies.set('scavenger_stop_experienced','8',{ expires:60 });
                window.location.href = 'https://player.vimeo.com/video/560695365?autoplay=1';
            }else{
                window.location.href = 'https://stpeteartsalliance.org/shine?alias=/2015_SHINE_Mural_Greg_Mike';
            }
        <?php }else if($_REQUEST['scavenger_stop'] == "9") { ?>
            if(Cookies.get('scavenger_stop_experienced') === "8" || Cookies.get('scavenger_stop_experienced') === "9"){
                Cookies.set('scavenger_stop_experienced','9',{ expires:60 });
                window.location.href = 'https://player.vimeo.com/video/560694905?autoplay=1';
            }else{
                window.location.href = 'https://stpeteartsalliance.org/shine?alias=/2017_SHINE_Mural_Joram_Roukes';
            }
        <?php }else if($_REQUEST['scavenger_stop'] == "10") { ?>
            if(Cookies.get('scavenger_stop_experienced') === "9" || Cookies.get('scavenger_stop_experienced') === "10"){
                Cookies.set('scavenger_stop_experienced','10',{ expires:60 });
                window.location.href = 'https://player.vimeo.com/video/560698048?autoplay=1';
            }else{
                window.location.href = 'https://stpeteartsalliance.org/shine?alias=/2019_SHINE_Mural_Jay_Hoff_and_Chad_Mize_and_LGBTQ_Teen';
            }
        <?php }else if($_REQUEST['scavenger_stop'] == "11") { ?>
            if(Cookies.get('scavenger_stop_experienced') === "10" || Cookies.get('scavenger_stop_experienced') === "11"){
                Cookies.set('scavenger_stop_experienced','11',{ expires:60 });
                window.location.href = 'https://player.vimeo.com/video/560697031?autoplay=1';
            }else{
                window.location.href = 'https://stpeteartsalliance.org/shine?alias=/2017_SHINE_Mural_ZuluPainter_and_Thirst';
            }
        <?php }else if($_REQUEST['scavenger_stop'] == "12") { ?>
            if(Cookies.get('scavenger_stop_experienced') === "11" || Cookies.get('scavenger_stop_experienced') === "12"){
                Cookies.set('scavenger_stop_experienced','12',{ expires:60 });
                window.location.href = 'https://player.vimeo.com/video/560698904?autoplay=1';
            }else{
                window.location.href = 'https://stpeteartsalliance.org/blm-mural';
            }
        <?php }else if($_REQUEST['scavenger_stop'] == "final") { ?>
            if(Cookies.get('scavenger_stop_experienced') === "12" || Cookies.get('scavenger_stop_experienced') === "final"){
                Cookies.set('scavenger_stop_experienced','final',{ expires:60 });
                window.location.href = 'https://player.vimeo.com/video/560703184?autoplay=1';
            }else{
                window.location.href = 'https://player.vimeo.com/video/559644557?autoplay=1';
            }
        <?php }else if($_REQUEST['scavenger_stop'] == "clue") { ?>

            stop_experienced = Cookies.get('scavenger_stop_experienced');
            if(stop_experienced == "entrance") { window.location.href = 'https://player.vimeo.com/video/560702010?autoplay=1'; }
            else if(stop_experienced == "1") { window.location.href = 'https://player.vimeo.com/video/560687745?autoplay=1'; }
            else if(stop_experienced == "2") { window.location.href = 'https://player.vimeo.com/video/560699336?autoplay=1'; }
            else if(stop_experienced == "3") { window.location.href = 'https://player.vimeo.com/video/560689420?autoplay=1'; }
            else if(stop_experienced == "4") { window.location.href = 'https://player.vimeo.com/video/560688990?autoplay=1'; }
            else if(stop_experienced == "5") { window.location.href = 'https://player.vimeo.com/video/560691476?autoplay=1'; }
            else if(stop_experienced == "6") { window.location.href = 'https://player.vimeo.com/video/560696622?autoplay=1'; }
            else if(stop_experienced == "7") { window.location.href = 'https://player.vimeo.com/video/560692082?autoplay=1'; }
            else if(stop_experienced == "8") { window.location.href = 'https://player.vimeo.com/video/560695365?autoplay=1'; }
            else if(stop_experienced == "9") { window.location.href = 'https://player.vimeo.com/video/560694905?autoplay=1'; }
            else if(stop_experienced == "10") { window.location.href = 'https://player.vimeo.com/video/560698048?autoplay=1'; }
            else if(stop_experienced == "11") { window.location.href = 'https://player.vimeo.com/video/560697031?autoplay=1'; }
            else if(stop_experienced == "12") { window.location.href = 'https://player.vimeo.com/video/560698904?autoplay=1'; }
            else { window.location.href = 'https://player.vimeo.com/video/559644557?autoplay=1'; }

        <?php }else if($_REQUEST['scavenger_stop'] == "register") { ?>

            Cookies.remove('scavenger_stop_experienced');
            $.get("https://content.pixelstix.com/drag_queen_adventure/adventure_controller.php?action=team_lookup",function(data){

                console.log(data);
                data = JSON.parse(data);
                $("body").css("background-image","none").css("width","100%");
                $("#content").css("width","90%");

                //add header images
                $("#content").html("<img style='margin-bottom:30px;' class='header' src='OnceUponA_logo_white_background.jpg'>");

                //add select to #content
                $("#content").append("<select id='team_names' style='display:none;'>");
                $.each(data.teams,function(key,value){
                    $("#team_names").append($('<option>').val(value.name).text(value.name));
                });

                //add input to #content
                $("#content").append("<input id='team_name' value='Team Name?'>");
                $("#team_name").css("font-size","90%").css("width","100%").css("text-align","center").css("margin-bottom","30px");

                //add register button
                $("#content").append("<br/><div class='btn' id='register_team'>REGISTER</div>");

                $("#register_team").click(function(element){

                   team_name = $("#team_name").val();
                   load_time = data.load_time;

                   if(team_name != "" && team_name != "Team Name?"){
                       $(this).html("<img src='loading.gif'>");
                       setTimeout(function() {
                               $.get("https://content.pixelstix.com/drag_queen_adventure/adventure_controller.php?action=team_register&load_time="+load_time+"&team_name="+team_name,function(data2) {
                                   console.log(data2);
                                   $("#content").html("<img src='plaque.png' style='align-items: center;'><br/><p style='color:#000;font-size:7vw;'>"+data2+", You're All Set! <br/>1. Visit the Front Desk for your information sheet and Tinkerbell PixelStix<br/>(only 1 per team!)<br/>2. PixelStix scan the Once Upon a SHINE plaque to begin! </p>")
                               });
                       }, 2000);
                   }
                });

                $("#team_name").click(function(element){
                    $("#team_name").val("");
                });


            });


        <?php } ?>

    });
</script>
</body>
</html>
