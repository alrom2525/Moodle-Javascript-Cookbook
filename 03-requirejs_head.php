<?php
require_once(dirname(__FILE__) . '/../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->requires->js('/cook/js/alert.js', true);
$PAGE->set_url('/cook/03-requirejs_head.php');
echo $OUTPUT->header();
echo $OUTPUT->footer();
