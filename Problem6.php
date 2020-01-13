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
            
          
<?php 
$sum1=0;
$zbroj=0;
    for ($i=1; $i <= 100; $i++) 
    { 
        $sum1+=pow($i,2);
        $zbroj+=$i;
    }
$rjesenje=pow($zbroj,2)-$sum1;
    echo 'Zbroj kvadrata: '.$sum1.'  Kvadrat zbroja: '. $zbroj. '  Razlika: '. $rjesenje;
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



