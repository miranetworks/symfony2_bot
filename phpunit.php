<?PHP
  function testSum($x, $y) {
    return (bool) (((int)$x+(int)$y==2)? true:false);
  }

  echo "Simulating unit tests for new Mira CI infrastructure \n";

  echo "Testing Math 1+1=2? ,";
  if (testSum(1, 1)) {
    echo 'OK'."\n";
  } else {
    echo 'FAIL'."\n";
  }

  echo "Testing Math 1+1=3? ,";
  if (testSum(1, 2)) {
    echo 'OK'."\n";
  } else {
    echo 'FAIL'."\n";
  }

?>
