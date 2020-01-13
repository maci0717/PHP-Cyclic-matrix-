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
          
          A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.

Find the largest palindrome made from the product of two 3-digit numbers          <br> <br> <br>

        <?php 
            
            
            $palndromi=[];
            $poz=0;
            
for ($i=900; $i < 999; $i++) 
{ 
    for ($j=900; $j < 999; $j++) 
    { 
        $c=$i*$j;
        $c = strval($c);
        if (strrev($c) == $c)
        {
        $palindromi[$poz++]=$c;
        }
    }
}
echo max($palindromi);
echo '<pre>';
print_r($palindromi);
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



