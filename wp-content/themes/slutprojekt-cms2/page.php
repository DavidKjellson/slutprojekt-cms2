<?php
get_header();
?>

<?php
if (have_posts()) {
	the_post();
	$title = get_the_title();
	echo "<h1>{$title}</h1>";
	the_content();
} else {
	the_content();
}
?>

<?php
get_footer();