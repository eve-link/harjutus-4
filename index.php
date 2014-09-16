<!DOCTYPE html>
<html>
<head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Harjutus-4</title>
</head>

<body> 
  <h1>Andmetüübid </h1>
  <h2>Arvutamine murd ja- täisarvudega</h2>

  <?php echo $float = 3.14; 
  echo "<br>";
  echo $float + 7;
  echo "<br>";
  echo "4" / "3"
  ?>
  <br>

  <h2>Murdarvude ümardamine</h2>

  <?php 
  echo round($float, 1); 
  echo "<br>";
  echo ceil($float);
  echo "<br>"; 
  echo floor($float); 
  ?>

  <h2>Andmetüübi funktsioonid</h2>

  <?php   
  $integer = 7;
  echo "Kas {$integer} on integer? " . is_int($integer); ?><br>
  <?php echo "Kas {$float} on integer? " . is_int($float); ?><br>
  <?php echo "Kas {$integer} on float? " . is_float($integer); ?><br>
  <?php echo "Kas {$float} on float? " . is_float($float); ?><br>
  <?php echo "Kas {$integer} on numeber? " . is_numeric($integer); ?><br>
  <?php echo "Kas {$float} on number? " . is_numeric($float); ?><br>

<h2>Jadad</h2>
<?php
    $numbers = array(4,8,15,16,23,42); ?>
    <?php echo $numbers[0]; ?> <br>
    <?php echo $numbers[1]; ?> <br>
    <?php echo $numbers[2]; ?> <br>
    <?php echo $numbers[3]; ?> <br>
    <?php echo $numbers[4]; ?> <br>
    <?php echo $numbers[5]; ?> <br>
<?php  $mixed = array(6, "rebane", "koer", 5.5, array("x", "y", "z"));?>

<?php echo $mixed[2];?> <br>
<?php echo $mixed[4][2];?> <br>



</body>
</html> 