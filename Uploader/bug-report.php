<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Bug</title>
    <link rel="stylesheet" href="List.css">
  </head>

  <body>

    <div style="background-color: #202020; min-height: 35vh; background-size: cover; background-repeat: no-repeat; display: flex; align-items: center;">
      <div id="inner" style="border-radius: 20px;border: 2px solid #00000000;text-align: center;color: white; padding: 20px; background: rgba(255, 255, 255, 0.26); margin: 0 auto;">
          
        <form enctype="multipart/form-data" action="bug-report.php" method="POST">
          <p>Add image/mp4</p>
          <input type="file" name="uploaded_file" style="background-color: #202020;color: #00ff9d;border-radius: 12px;border: 2px solid #5000ff;padding: 15px 8px 15px 8px;"><br><br>
          <input type="submit" value="Upload" style="background-color: #202020;color: #00ff9d;border-radius: 12px;border: 2px solid #5000ff;padding: 6px 8px 6px 8px;">
        </form>

        <br>

        <?php 

          if(!empty($_FILES['uploaded_file']))
          {
            $path = "../Uploader/Bug/";
            $path = $path . basename( $_FILES['uploaded_file']['name']);

            if(!preg_match('/\.(jpe?g|png|jpg|gif|webp|webm|mp4)$/', $path)){
              die("<p>lol dat kinda sus m8 👀</p>");
            }
          
            if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
              echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
              " has been uploaded, thank you for notifying the owner.";
            } else{
                echo "There was an error uploading the file, please try again!";
            }
          }
        ?>

      </div>
    </div>

  </body>

</html>