<?php
require_once(dirname(__FILE__) . '/../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/cook/05-requirejs_init_data.php');
$PAGE->requires->js('/cook/js/requirejs_init_data.js');
$PAGE->requires->js_init_call('hello', array('Hi', $USER->username));
echo $OUTPUT->header();
echo $OUTPUT->footer();