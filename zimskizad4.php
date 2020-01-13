<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once 'predlozak/head.php'?>
  </head>
  <body>
<div class="grid-container">
  <?php
  include_once 'predlozak/izbornik.php'
  ?>
  <div class="grid-x">
    <div class="large-12 small-12 columns">
      <div class="callout" style="min-height: 400px">
      

    <?php      
          echo 'Upiši brojeve za prvu matricu:';
          echo '<form action="" method="post">';
          for($i=0;$i<16;$i++)
          {
            echo '<input type="number" name="$A[]" id="0">';
          }
          echo 'Upiši brojeve za drugu matricu:';
          for($j=0;$j<16;$j++)
          {
            echo '<input type="number" name="$B[]" id="0">';
          }       
          echo '<input type="submit" value="Postavi">';


          $A=array_merge($_POST['$A']);
          $B=array_merge($_POST['$B']);
          $C=[];

          for ($i=0; $i<16; $i++) 
          { 
            $C[$i]=$A[$i]+$B[$i];
          }
    ?>
      
    <table>
      <?php 
      echo '<br/>Prva matrica';
        for($i=0;$i<4;$i++)
        {
          echo '<tr>';
            for ($j=0; $j < 4; $j++) 
            { 
              echo '<td>'. $A[4*$i+$j] .'</td>' ;
            }
            echo '</tr>';
        }
       ?>
    </table>

    <table>
      <?php 
      echo 'Druga matrica';
        for($i=0;$i<4;$i++)
        {
          echo '<tr>';
            for ($j=0; $j < 4; $j++) 
            { 
              echo '<td>'. $B[4*$i+$j] .'</td>' ;
            }
            echo '</tr>';
        }
       ?>
    </table>

    <table>
      <?php 
      echo 'Zbroj matrica';
        for($i=0;$i<4;$i++)
        {
          echo '<tr>';
            for ($j=0; $j < 4; $j++) 
            { 
              echo '<td>'. $C[4*$i+$j] .'</td>' ;
            }
            echo '</tr>';
        }
       ?>
    </table>
         

      </div>
    </div>
  </div>
  <?php include_once 'predlozak/podnozje.php'?>
</div>
<?php
require_once 'predlozak/skripte.php';
 ?>
  </body>
</html>