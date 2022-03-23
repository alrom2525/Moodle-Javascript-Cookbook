<?php
require_once(dirname(__FILE__) . '/../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/cook/09-yui_event.php');
$PAGE->requires->js('/cook/js/yui_eventbasic.js');
echo $OUTPUT->header();
?>
<form>
    <input type="button" id="btn1" value="Click me for testing ">
</form>
<?php
echo $OUTPUT->footer();
