<?php
require_once(dirname(__FILE__) . '/../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/cook/10-yui_event.php');
$PAGE->requires->js('/cook/js/yui_eventdom.js');
echo $OUTPUT->header();
?>
<div id="container">
    <h1>Events called, in order:</h1>
</div>
<?php
echo $OUTPUT->footer();
