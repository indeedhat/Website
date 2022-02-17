<?php

    if(!isset($_GET['v'])) die("invalid request");

    $imgFilename = $_GET['v'];
    if(preg_match('-/-', $imgFilename)) die("404"); 
    

?>
<html>

<body style="background-color: #202020;">

    <div style="text-align: -moz-center;text-align: -webkit-center;">

        <br>
        <div>
            <img style="border-radius: 25px !important; border: 2px solid #00ff9d !important; background-color: #202020; margin: 10px; max-height: 695px; max-width: 1235px;" src="../Uploader/Add/<?php echo $imgFilename;?>" controls=""></img><br><br>
            <a href="../Uploader/Add/<?php echo $imgFilename;?>" height="280" width="320" download=""><button>Download</button></a><br><br>
        </div><br><br>
    </div>

</body>

</html>