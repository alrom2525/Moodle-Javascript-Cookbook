<?php
require_once(dirname(__FILE__) . '/../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/cook/12-yui_console.php');
$PAGE->requires->js('/cook/js/yui_console.js');
echo $OUTPUT->header();
?>
<h1>YUI console</h1>
<?php
echo $OUTPUT->footer();
