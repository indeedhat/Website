<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>List</title>
    <link rel="stylesheet" href="List.css">
  </head>

  <body>

    <ul class="sidenav">
      <li class="Nav1" ><a href="List-Add.php">Add</a></li>
      <li class="Nav2" ><a href="List-Replace.php">Replace</a></li>
    </ul>

    <div style="text-align: -moz-center; text-align: -webkit-center;">

      <div style="background-color: #202020; min-height: 35vh; background-size: cover; background-repeat: no-repeat; display: flex; align-items: center;">
        <div id="inner" style="border-radius: 20px;border: 2px solid #00000000;text-align: center;color: white; padding: 20px; background: rgba(255, 255, 255, 0.26); margin: 0 auto;">
            
          <form enctype="multipart/form-data" action="List-Add.php" method="POST">
            <p>Add image/mp4</p>
            <input type="file" name="uploaded_file" style="background-color: #202020;color: #00ff9d;border-radius: 12px;border: 2px solid #5000ff;padding: 15px 8px 15px 8px;"><br><br>
            <input type="submit" value="Upload" style="background-color: #202020;color: #00ff9d;border-radius: 12px;border: 2px solid #5000ff;padding: 6px 8px 6px 8px;">
          </form>

          <br>

          <?php 

            if(!empty($_FILES['uploaded_file']))
            {
              $path = "Add/";
              $path = $path . basename( $_FILES['uploaded_file']['name']);

              if(!preg_match('/\.(jpe?g|png|jpg|gif|webp|webm|mp4)$/', $path)){
                die("<p>lol dat kinda sus m8 👀</p>");
              }
            
              if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
                echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
                " has been uploaded";
              } else{
                  echo "There was an error uploading the file, please try again!";
              }
            }
          ?>

        </div>
      </div>

      <br><br>

      <?php
        $dir_path = "Add/";
        $extensions_array = array('jpg','png','jpeg', 'gif', 'webp', 'webm', 'mp4');
        
        if(is_dir($dir_path))
        {
            $files = scandir($dir_path);
            
            for($i = 0; $i < count($files); $i++)
            {
                if($files[$i] !='.' && $files[$i] !='..')
                {
                    $file = pathinfo($files[$i]);
                    $extension = $file['extension'];
                    
                    if(in_array($extension, $extensions_array))
                    {
                        $tag = preg_match('/(webp|webm|mp4)$/', $files[$i])
                        ? "video"
                        : "img";
                        echo "<div style='width: 500px;text-align: center;background-color: #202020;border-radius: 10px;border: 2px solid #5000ff;'>
                          <a href='../$tag.php?v=$files[$i]'><$tag src='$dir_path$files[$i]' controls style='max-height:350px;max-width: 470px;'></a><br>
                          <p style='font-size: 10px;color: white;'>https://techlm77.com/$tag.php?v=$files[$i]</p>
                          <a href='$dir_path$files[$i]' height='280' width='320' download><button>Download</button></a><br><br>
                        </div><br>";
                    }
                }
            }
        }
      ?>
    </div>

  </body>

</html>