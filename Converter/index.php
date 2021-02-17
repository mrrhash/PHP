<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body class="bg-dark">
    <div  class="container ">
        <h1 style="font-size: 100px;" class="text-warning text-center">Converter</h1>
        <br><br>
        
        <div class="row">
               
           
        <form name="form  " action="" method="get">
           <h3 class="text-light">Enter Your Value:</h1><br>
           <div class="row">
               
           <input type="number" min="0" step="0" name="input" placeholder="Enter here...." id="input" class="form-control col-6">
          
           </div>
           <div class="row">
               <div class="col-6">
            <!-- Decimal -->
            <br>
            <button type="submit" name="button1" class="btn btn-success col-4" style="margin-left:-15px;">Decimal to Binary</button>

            <button type="submit" name="button2" class="btn btn-success col-4">Decimal to Hexa</button>

            <button type="submit" name="button3" class="btn btn-success col-4">Decimal to Octa</button>   
             <!-- Binary -->
            <button type="submit" name="button4" class="btn btn-warning col-4 mt-2" style="margin-left:-15px;">Binary to Decimal</button>

            <button type="submit" name="button5" class="btn btn-warning col-4 mt-2">Binary to Hexa</button>

            <button type="submit" name="button6" class="btn btn-warning col-4 mt-2">Binary to Octa</button> 
             <!-- Octa -->
             <button type="submit" name="button7" class="btn btn-primary col-4 mt-2" style="margin-left:-15px;">Octa to Binary</button>

             <button type="submit" name="button8" class="btn btn-primary col-4 mt-2">Octa to Hexa</button>

             <button type="submit" name="button9" class="btn btn-primary col-4 mt-2">Octa to Decimal</button> 
              <!-- Hexa -->  
              <button type="submit" name="button10" class="btn btn-danger col-4 mt-2" style="margin-left:-15px;">Hexa to Binary</button>

            <button type="submit" name="button11" class="btn btn-danger col-4 mt-2">Hexa to Decimal</button>

            <button type="submit" name="button12" class="btn btn-danger col-4 mt-2">Hexa to Octa</button>
            </div>    
            </div>    
        </form>
        </div>
         
       

    </div>

    <?php

    $input=(int) $_GET['input'];

    if(array_key_exists('button1', $_GET)) { 
        decimaltobinary(); 
    } 
    if(array_key_exists('button2', $_GET)) { 
        decimaltohexa(); 
    }
    if(array_key_exists('button3', $_GET)) { 
        decimaltoocta(); 
    }  
    if(array_key_exists('button4', $_GET)) { 
        binarytodecimal(); 
    } 
    if(array_key_exists('button5', $_GET)) { 
        binarytohexa(); 
    }
    if(array_key_exists('button6', $_GET)) { 
        binarytoocta(); 
    } 
    if(array_key_exists('button7', $_GET)) { 
        octatobinary(); 
    } 
    if(array_key_exists('button8', $_GET)) { 
        octatohexa(); 
    }
    if(array_key_exists('button9', $_GET)) { 
        octatodecimal(); 
    } 
    if(array_key_exists('button10', $_GET)) { 
        hexatobinary(); 
    } 
    if(array_key_exists('button11', $_GET)) { 
        hexatodecimal(); 
    }
    if(array_key_exists('button12', $_GET)) { 
        hexatoocta(); 
    } 

   function decimaltobinary(){

    global $input;
   $input3= decbin($input);
   echo 
   "<div class='text-center'>
   <h1 style='margin-left:460px;margin-top:-297px;color:white;'>Your Result:</h1>
   <input type='text' style='margin-left:800px;' readonly class='col-4 form-control text-center' value='$input3'/>
   </div>";
   }

   function decimaltohexa(){

    global $input;
   $input3= dechex($input);
    echo "<div class='text-center'>
    <h1 style='margin-left:460px;margin-top:-297px;color:white;'>Your Result:</h1>
    <input type='text' style='margin-left:800px;' readonly class='col-4 form-control text-center' value='$input3'/>
    </div>";
   }

   function decimaltoocta(){

    global $input;
   $input3= decoct($input);
    echo "<div class='text-center'>
    <h1 style='margin-left:460px;margin-top:-297px;color:white;'>Your Result:</h1>
    <input type='text' style='margin-left:800px;' readonly class='col-4 form-control text-center' value='$input3'/>
    </div>";
   }

   function binarytodecimal(){

    global $input;
   $input3= bindec($input);
    echo "<div class='text-center'>
    <h1 style='margin-left:460px;margin-top:-297px;color:white;'>Your Result:</h1>
    <input type='text' style='margin-left:800px;' readonly class='col-4 form-control text-center' value='$input3'/>
    </div>";
   }
   function binarytohexa(){
    
    global $input;
   $input3= bindec($input);
   $input4=dechex($input3);
   
    echo "<div class='text-center'>
    <h1 style='margin-left:460px;margin-top:-297px;color:white;'>Your Result:</h1>
    <input type='text' style='margin-left:800px;' readonly class='col-4 form-control text-center' value='$input4'/>
    </div>";
   }
   function binarytoocta(){
    
    global $input;
    $input3=bindec($input);
   $input4= decoct($input3);
  
    echo "<div class='text-center'>
    <h1 style='margin-left:460px;margin-top:-297px;color:white;'>Your Result:</h1>
    <input type='text' style='margin-left:800px;' readonly class='col-4 form-control text-center' value='$input4'/>
    </div>";
   }
   function octatobinary(){
    
    global $input;
    $input3=octdec($input);
   $input4= decbin($input3);
  
    echo "<div class='text-center'>
    <h1 style='margin-left:460px;margin-top:-297px;color:white;'>Your Result:</h1>
    <input type='text' style='margin-left:800px;' readonly class='col-4 form-control text-center' value='$input4'/>
    </div>";
   }
   function octatohexa(){
    
    global $input;
    $input3=octdec($input);
   $input4= dechex($input3);
  
    echo "<div class='text-center'>
    <h1 style='margin-left:460px;margin-top:-297px;color:white;'>Your Result:</h1>
    <input type='text' style='margin-left:800px;' readonly class='col-4 form-control text-center' value='$input4'/>
    </div>";
   }
   function octatodecimal(){
    
    global $input;
    $input3=octdec($input);
  
  
    echo "<div class='text-center'>
    <h1 style='margin-left:460px;margin-top:-297px;color:white;'>Your Result:</h1>
    <input type='text' style='margin-left:800px;' readonly class='col-4 form-control text-center' value='$input3'/>
    </div>";
   }
   function hexatobinary(){
    
    global $input;
    $input3=hexdec($input);
    $input4=decbin($input3);
  
  
    echo "<div class='text-center'>
    <h1 style='margin-left:460px;margin-top:-297px;color:white;'>Your Result:</h1>
    <input type='text' style='margin-left:800px;' readonly class='col-4 form-control text-center' value='$input4'/>
    </div>";
   }    
   function hexatodecimal(){
    
    global $input;
    $input3=hexdec($input);
    
  
  
    echo "<div class='text-center'>
    <h1 style='margin-left:460px;margin-top:-297px;color:white;'>Your Result:</h1>
    <input type='text' style='margin-left:800px;' readonly class='col-4 form-control text-center' value='$input3'/>
    </div>";
   }   
   function hexatoocta(){
    
    global $input;
    $input3=hexdec($input);
    $input4=decoct($input3);
    
  
  
    echo "<div class='text-center'>
    <h1 style='margin-left:460px;margin-top:-297px;color:white;'>Your Result:</h1>
    <input type='text' style='margin-left:800px;' readonly class='col-4 form-control text-center' value='$input4'/>
    </div>";
   }   
    ?>
</body>
</html>