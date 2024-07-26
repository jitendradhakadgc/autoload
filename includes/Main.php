<?php
namespace MyTestPlugin;

class Main {
    public function __construct() {
        // Initialize your plugin
        $this->initialize();
    }

    public function initialize() {
        // Plugin initialization code
        add_action('init', [$this, 'plugin_init']);
    }

    public function plugin_init() {
        echo 'jitendra dhakad';
        echo '<br>';
    }
}
