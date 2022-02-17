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

        <form method="post">
            <textarea type="text" id="messageInput" style="background-color: rgb(32, 32, 32); color: rgb(0, 255, 157); border-radius: 12px; border: 2px solid rgb(80, 0, 255); padding: 15px 8px; min-width: 326px; min-height: 59px; max-width: 312px; max-height: 194px; width: 306px; height: 422px;"></textarea>
            <button id="messageButton" type="button" style="background-color: #202020;color: #00ff9d;border-radius: 12px;border: 2px solid #5000ff;padding: 6px 8px 6px 8px;">Send</button>
        </form>

        <br>

        <?php header("access-control-allow-origin: PRIVATE "); ?>

        <script>
        
        document.getElementById("messageButton").addEventListener("click", () => {
          fetch("PRIVATE", {
            method: "post",
            body: document.getElementById("messageInput").value
          });
          alert("Your message was sent");
        });

        </script>

      </div>
    </div>

  </body>

</html>