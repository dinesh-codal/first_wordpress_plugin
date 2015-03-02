<?php
/*
    Plugin Name: Measure Article Duplicay
    Plugin URI: http://localhost/extend/plugins/measure-duplicacy/
    Description: Plugin to check the duplicacy of an article.
    Author: Dinesh Kumar Sahoo
    Version: 1.0
    Author URI: http://localhost/extend/plugins/measure-duplicacy/
    Text Domain: measure-duplicacy
    Domain Path: /lang
 */

/********
    Global Variables
 */
$wp_dup_measure_options = get_option('measure_duplicacy_settings');
$original = $wp_dup_measure_options['original'];
$rewritten = $wp_dup_measure_options['rewrite'];
similar_text($original, $rewritten, $percent);

function wp_measure_duplicacy_page() {
    global $wp_dup_measure_options;
    global $percent;
    ob_start();
?>
<div class="wrap">
    <form action="options.php" method="POST">
	<?php settings_fields('measure_duplicacy_group'); ?>
	<h1>Wordpress Measure Duplicacy for an article</h1>
	<p>
	<h3>Paste your original article</h3>
	<textarea name="measure_duplicacy_settings[original]"><?php echo $wp_dup_measure_options['original']; ?></textarea>
	<br />
	<h3>Paste your current article</h3>
	<textarea name="measure_duplicacy_settings[rewrite]"><?php echo $wp_dup_measure_options['rewrite']; ?></textarea>
	</p>
	<input type="submit" class="button primary" value="Comare Article" />
	<input type="button" class="button" value="<?php echo $percent; ?>" />
    </form>
</div>
<?php
echo ob_get_clean();
}

function wp_measure_duplicacy_tab() {
    add_options_page( 'Measure duplicacy', 'Measure Duplicacy', 'manage_options', 
	'wpmeasureduplicacy', 'wp_measure_duplicacy_page');
}

add_action('admin_menu', 'wp_measure_duplicacy_tab');

function wp_measure_duplicacy_settings() {
    register_setting('measure_duplicacy_group', 'measure_duplicacy_settings');
}

add_action('admin_init', 'wp_measure_duplicacy_settings');  