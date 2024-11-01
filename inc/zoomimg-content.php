<?php
// Add class images content
function Zoom_img_add_image_responsive_class($content) {
   global $post;
   $zoomimg_pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
   $zoomimg_replacement = '<img$1class="$2 mBox" $3>';
   $content = preg_replace($zoomimg_pattern, $zoomimg_replacement, $content);
   return $content;
}
add_filter('the_content', 'Zoom_img_add_image_responsive_class');

// Add js content
function Zoom_img_js_add_content($content) {
if(is_singular('post')) {
ob_start();
?>
<script>
jQuery('.mBox').mBox();
</script>
<?php
$zoom_img_js = ob_get_clean();
return $content . $zoom_img_js;
}else {
return $content;
}
}
add_filter('the_content', 'Zoom_img_js_add_content');

