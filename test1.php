<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h1>Welcome to Sam's Used Cars.</h1>
    <?php include 'variables.php';?>
    <?php echo "I have a $color $pet"; ?>
    <?php
    function($age){
      list($year, $month, $day) = explode("-", $age);
      $y_diff=date("Y")-$year;
      $m_diff=date("m")-$month;
      $d_diff=date("d")-$day;
      if($d_diff<0 || $m_diff<0)
        $y_diff--;
      return $y_diff; 
    }
     ?>
  </body>
</html>

