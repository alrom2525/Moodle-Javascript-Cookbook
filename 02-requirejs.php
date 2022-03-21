<?php
require_once(dirname(__FILE__) . '/../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/cook/02-requirejs.php');
$PAGE->requires->js('/cook/js/alert.js');
echo $OUTPUT->header();
echo $OUTPUT->footer();
