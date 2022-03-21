<?php
require_once(dirname(__FILE__) . '/../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/cook/04-requirejs_init.php');
$PAGE->requires->js('/cook/js/requirejs_init.js');
$PAGE->requires->js_init_call('hello');
echo $OUTPUT->header();
echo $OUTPUT->footer();