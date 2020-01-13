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
            
          2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20? <br> <br> <br>
<?php 
    $rjesenje=0;
    for($i=2500;;$i++)
    {
        $uvjet=true;
        for ($j=1; $j < 20; $j++) 
        { 
            if($i%$j!==0) 
            {
                $uvjet=false;
            break;
            }
            
        }
        if($uvjet===true) 
            {
                $rjesenje=$i;
                break;
            }
    }
echo $rjesenje;






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



