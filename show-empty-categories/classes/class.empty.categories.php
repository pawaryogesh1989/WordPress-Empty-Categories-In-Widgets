<?php

class Empty_Categories_Widgets {

    static $instance;

    //Constructor of the Class
    public function __construct() {

        self::$instance = $this;

        add_filter('widget_categories_args', array($this, 'seciw_display_categories'));
    }

    public function seciw_display_categories($cat_args) {
        $cat_args['hide_empty'] = 0;
        return $cat_args;
    }

}

?>