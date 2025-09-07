<?php
require_once 'classes.php';
require_once 'forms.php';
// Create an instance of the class
$instance = new MyClass();
// Create an instance of the user_forms 
$formInstance = new user_forms();

// Call the method myMethod
$instance->heading();
$instance->myMethod();
// Call the method signup_form
$formInstance->signup_form();
$instance->footer();