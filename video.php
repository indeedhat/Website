<?php

    if(!isset($_GET['v'])) die("invalid request");

    $videoFilename = $_GET['v'];
    if(preg_match('-/-', $videoFilename)) die("404"); 
    

?>
<html>

<body style="background-color: #202020;">

    <div style="text-align: -moz-center;text-align: -webkit-center;">

        <br>
        <div>
            <video style="border-radius: 25px !important; border: 2px solid #00ff9d !important; background-color: #202020; margin: 10px; height: 695px; width: 1235px;" src="../Uploader/Add/<?php echo $videoFilename;?>" controls=""></video><br><br>
            <a href="../Uploader/Add/<?php echo $videoFilename;?>" height="280" width="320" download=""><button>Download</button></a><br><br>
        </div><br><br>
    </div>

</body>

</html>
</html>