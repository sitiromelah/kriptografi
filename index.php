<html>
  <head>
    <title>Kriptografi</title>
  </head>

   <body>
      <center>
      <h2><b>Caesar Cipher</b></h2>
      <form action="" method="get">
          Kalimat : <input type="text" name="kalimat">
          <br><br>
          <input type="submit" value="kirim">
      </form>
      
      <?php
          if(isset($_GET['kalimat'])){
          $msg = $_GET['kalimat']; 
          }else{
          $msg = " ";
          }
          echo $msg;
          $key = 13;
          $mode = 'decrypt';
          $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
          $trans = '';
          $msg = strtoupper($msg);
          for ($i = 0; $i < strlen($msg); $i++) {
              if (strpos($letters, $msg[$i]) !== false) {
                  $num = strpos($letters, $msg[$i]);
              if ($mode == 'encrypt') {
                  $num += $key;
              } else {
                  $num -= $key;
              }
              
              $cnt = strlen($letters);
              if ($num >= $cnt) {
                  $num -= $cnt;
              } else {
                  $num += $cnt;
              }
              if ($num >= $cnt) {
                  $num = $num - $cnt;
              }
              $trans .= $letters[$num];
              }    
         }
     ?>
     </center>
     <center>
     <?php
        echo 'Hasil : ';
        echo $trans . PHP_EOL;
     ?>
     </center>
   </body>
</html>
