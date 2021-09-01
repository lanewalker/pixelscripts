<?php

/**
 * if pixelstix-oneswitch cookie is not present, set pixelstix-oneswitch cookie and route to url A
 * if pixelstix-oneswitch cookie is present, route to url B
 * url A and B are base64 encoded URLs
 */

if(empty($_REQUEST["a"]) || empty($_REQUEST["b"])){
    $_REQUEST["a"] = base64_encode("https://www.pixelstix.com/");
    $_REQUEST["b"] = base64_encode("https://www.pixelstix.com/");
}

$is_reset="false";
$url_a = base64_decode($_REQUEST["a"]);
$url_b = base64_decode($_REQUEST["b"]);

if(!empty($_REQUEST["reset"])){
    $is_reset="true";
}

?>
<html>
<head>
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        $( document ).ready(function() {
            if(<?= $is_reset ?>){
                Cookies.remove('pixelstix-oneswitch');
                $("#content").html("ONESWITCH RESET IS COMPLETE");
            }else if(Cookies.get('pixelstix-oneswitch') === "pre-switch"){
                Cookies.set('pixelstix-oneswitch','post-switch',{ expires:60 });
                window.location.href = "<?= $url_b ?>";
                //console.log("<?= $url_b ?>");
            }else if(Cookies.get('pixelstix-oneswitch') === "post-switch"){
                window.location.href = "<?= $url_a ?>";
                //console.log("<?= $url_a ?>");
            }else{
                Cookies.set('pixelstix-oneswitch','pre-switch',{ expires:60 });
                window.location.href = "<?= $url_a ?>";
                //console.log("<?= $url_a ?>");
            }
        });
    </script>
</head>
<body>
<div id="content" style="font-size:130px;"></div>

</body>
</html>
