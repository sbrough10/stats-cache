<?
  $cache = file_get_contents("http://free.sportsinsights.com/free-odds/free-odds-frame.aspx?SportGroup=sg2");

  $cache = str_replace("//", "http://", $cache);

  echo($cache);

  file_put_contents("odds/" . date("Y-m-d H-i-s") . ".html", $cache);
?>