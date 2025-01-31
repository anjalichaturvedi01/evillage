<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<p>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            function logout()
            {
                window.history.forward();
                window.setTimeout("window.location.href='Login.php'",1000);
            }
            
        </script>
    </head>
    <body bgcolor="yellowgreen" onload="logout()">
        
        <span style="font-size: 100px;color: white;margin: 50px">Loading</span>
        
    </body>
        </html>
