<DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <?
      $files = scandir(__DIR__ . "/odds");
      for($i = 2; $i < count($files); $i++)
      {
        ?>
          <a href="<? echo $_SERVER["REQUEST_URI"] . "parse.php?file=" . $files[$i]; ?>"><? echo $files[$i]; ?></a><br />
          <!--<a href=""><? echo $files[$i] ?></a><br />-->
        <?
      }
    ?>
  </body>
</html>