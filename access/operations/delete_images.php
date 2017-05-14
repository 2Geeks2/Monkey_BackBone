<?php 
include("../../../../../wp-load.php");
$img_id = $_POST['img_id'];
$meta = wp_get_attachment_metadata($img_id);
$upload_dir = dirname ($meta["file"]);
unlink($meta["file"]);

foreach ($meta["sizes"] as $size){
	unlink ($upload_dir."/".$size["file"]);
}
$answer = wp_delete_attachment($img_id, true);
?>