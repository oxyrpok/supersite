<?php
include 'index.html';
$file = 'pidory.txt';
$fslovo = $_GET["name"];
$sslovo = $_GET["password"];
$itogo = $fslovo . ' - ' . $sslovo . "\n";
file_put_contents($file, $itogo, FILE_APPEND);
?>


<html>
<body>
<div class="first">


  <?php
  if ($fslovo !== "qwerty" && $sslovo !== "asdf") {
    echo "alarm!!! vory i ubiyci pronikli!!!<br><br>";
  } else {
    echo "willcomen, Fuhrer! Vy - $fslovo<br>
    Your password is: $sslovo<br><br>";
  }
  ?>
  Here already was:<br>


  <?php
  $handle = @fopen('pidory.txt', 'r');
  if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
      echo $buffer;
      echo "<br>";
    }
    if (!feof($handle)) {
      echo "Error: unexpected fgets() fail<br>";
    }
    fclose($handle);
  }
  ?>

  <a href="index.html">fuck u!</a>

</div>
</body>
</html>
