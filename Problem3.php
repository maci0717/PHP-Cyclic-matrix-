<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
  </head>
  <body>
    <div class="grid-container">
      <?php require_once 'predlozak/izbornik.php' ?>
      <!-- Početak tijela -->
      <div class="grid-x">
        <div class="large-12 small-12 columns">
          <div class="callout" style="min-height: 400px;"> 
            
<form action="" method="post">
Rastavi: 
<input type="number" name="broj"><br>
<input type="submit">
</form>
The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?<br> <br> <br>
<?php 
    $a=$_POST['broj'];

    for ($i=2; $i<=$a; $i++) 
    { 
        $uvjet=true;
       for ($j=2; $j<$i ; $j++) 
       { 
          if($i%$j===0) $uvjet=false;
       }
       while ($a%$i===0) 
       {
           
            if($uvjet===true) 
            {
            echo $i . ' ';
            $a=$a/$i;
            }
       }
    }
 ?>
          </div>
        </div>
      </div>
      <!-- Kraj tijela -->
      <?php require_once 'predlozak/podnozje.php' ?>
    </div>
    <?php require_once 'predlozak/skripte.php' ?>
  </body>
</html>



