
<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>oof</title>
  </head>
  <body>
    <?php
    //první PC
      $computer[0]['CPU']='Intel Core I5';
      $computer[0]['HDD']='SeaGate 5TB';
      $computer[0]['RAM']='HyperX 16GB';
      $computer[0]['MB']='MSI Z370';
      $computer[0]['Case']='iTek ORIGIN';
      $computer[0]['GPU']='Nvidia GEforce 1080Ti';
      $computer[0]['DISPLAY']='Acer Nitro VG240';
      $computer[0]['KB']='C-TECH Arcus';
      $computer[0]['MOUSE']='CONNECT IT DOODLE Mouse';
    //druhý PC
      $computer[1]['CPU']='Intel Core i9';
      $computer[1]['HDD']='Dell 73GB';
      $computer[1]['RAM']='G.Skill 16GB';
      $computer[1]['MB']='ASUS EX-B250';
      $computer[1]['Case']='Evolveo T3';
      $computer[1]['GPU']='Nvidia GeForce RTX 2070';
      $computer[1]['DISPLAY']='Samsung S24F350';
      $computer[1]['KB']='Yenkee YKB';
      $computer[1]['MOUSE']='Mad Catz R.A.T. PRO S+';
//-------------------------------------------------------

      for ($i=0; $i < 2; $i++) {
        echo $computer[$i]['CPU'];
        echo "<br />";
        echo $computer[$i]['HDD'];
        echo "<br />";
        echo $computer[$i]['RAM'];
        echo "<br />";
        echo $computer[$i]['MB'];
        echo "<br />";
        echo $computer[$i]['Case'];
        echo "<br />";
        echo $computer[$i]['GPU'];
        echo "<br />";
        echo $computer[$i]['DISPLAY'];
        echo "<br />";
        echo $computer[$i]['KB'];
        echo "<br />";
        echo $computer[$i]['MOUSE'];
      }
     ?>
  </body>
</html>
