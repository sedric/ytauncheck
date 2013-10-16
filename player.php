<?php
if (preg_match ("/(youtube.com|youtu.be)/",$_GET["v"]))
{
  preg_match ("/.*v=([^#&]*)/",$_GET["v"], $match);
  $id = $match[1];
}
else
  $id = $_GET["v"];
echo("<html><body>");
echo("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/" . $id . "?html5=1\" frameborder=\"0\" allowfullscreen></iframe>");
echo("</body></html>");
?>
