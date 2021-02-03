<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     //variables
     $name = "Hassan Raza";
     $age = 20;
     //constant
     define("gender", "male");
         
          //cannot return
          echo ("my name is $name <br>");
          echo ("i am $age years old <br>" );
          echo gender.("<br>");

          //can return 
          print("my name is $name");
    ?>
</body>
</html>