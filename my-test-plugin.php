<?php
/*
Plugin Name: My Test Plugin
Description: A test plugin for demonstrating Composer autoloading.
Version: 1.0
Author: Your Name
*/

// Include the Composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

use MyTestPlugin\Main;
use MyTestPlugin\ClassOne as two;
use MyTestPlugin\ClassTwo;
use MyTestPlugin\MyClass;
use MyTestPlugin\Jeet;
use Dhakad\ClassJeet;

// Initialize the main plugin class
$main = new Main();
$classOne = new two();
$classTwo = new ClassTwo();
$Jeet = new Jeet();
$my_class_instance = new MyClass();
$JeetClass1 = new ClassJeet();

// Example usage
$classOne->do_something();
$classTwo->do_something_else();
$Jeet->do_something_else();
$my_class_instance->my_method();
