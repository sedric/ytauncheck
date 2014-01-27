<?php
if (preg_match ("/(youtube.com|youtu.be)/",$_GET["v"]))
{
  preg_match ("/.*v=([^#&]*)/",$_GET["v"], $match);
  $id = $match[1];
  $request = urldecode($_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]);
  $baseurl = substr($request, 0, strpos($request, "?"));
  $url = $baseurl . "?v=" . $id;
  header('HTTP/1.1 301');
  header('Location: http://' . $url);
}
else
  $id = $_GET["v"];
echo("<html><body>");
echo("<iframe width=\"100%\" height=\"100%\" src=\"https://www.youtube.com/embed/" . $id . "?html5=1\" frameborder=\"0\" allowfullscreen></iframe>");
echo("</body></html>");
?>
