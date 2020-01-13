<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'; ?>
    <?php //include_once 'predlozak/head1.php'; ?>
    <?php //include 'predlozak/head.php'; ?>
  </head>
  <body>
    <div class="grid-container">
      <?php require_once 'predlozak/izbornik.php' ?>
      <!-- Početak tijela -->
      <div class="grid-x">
        <div class="large-12 small-12 columns">
          <div class="callout" style="min-height: 400px;"> 
By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.

What is the 10 001st prime number?    <br> <br> <br>       
          
<?php 
    $prim=[];
    $poz=0;
    for ($i=2;  ; $i++) 
    { 
        $uvjet=true;
        for ($j=2; $j < $i; $j++) 
        { 
            if($i%$j===0) 
            {
                $uvjet=false;
                break;
            }
        }
        if($uvjet===true) $prim[$poz++]=$i;
        
        


        if(count($prim)>10000) break;
    }
    echo $prim[10000];
echo '<pre>';
print_r($prim);
echo '</pre>';



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