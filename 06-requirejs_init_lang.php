<?php
require_once(dirname(__FILE__) . '/../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/cook/06-requirejs_init_lang.php');
$PAGE->requires->js('/cook/js/requirejs_init_lang.js');
$PAGE->requires->string_for_js('course', 'moodle');
$PAGE->requires->js_init_call('lang');
echo $OUTPUT->header();
echo $OUTPUT->footer();