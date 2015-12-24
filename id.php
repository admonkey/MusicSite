<?php include('_header.php'); ?>

<a target="_blank" href="http://php.net/manual/en/function.id3-get-tag.php">Read this.</a>


<?php
$tag = id3_get_tag( "/var/www/music.77dogwood.us/html/VA-Straight_Up_Glitch_Hop_Vol_10-WEB-2015-iHR/14-katori-hello_(feat._caitlin_cardier)_(den5ity_remix).mp3" );
print_r($tag);
?>


<?php include('_footer.php'); ?>
