<?php
/* Generate JSON string of image data to the waterfall. */
$num = $_GET["n"];
$arr = array();
for($i = 0; $i < $num; $i++) {
  $picname=array("DSC3963","P1000110");
  $src = $picname[rand(1, 2)];
  $size = getimagesize("image/" . $src . ".jpg");
  $height = $size[1];
  if($size[0] != 190) {
    $height = 190 * $size[1] / $size[0];
  }
  $arr[$i] = array("title" => "demo picture " . $src, "src" => $src, "height" => $height, "width" => 190);
}
// Faking network latency.
sleep(2);
echo json_encode($arr);
?>
