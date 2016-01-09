<?
  $files = scandir(__DIR__ . "/odds");
  for($i = 2; $i < count($files); $i++)
  {
    preg_match("/<tr id='group' name='2'  class='row-group'>/", file_get_contents($files[$i])
  }
?>