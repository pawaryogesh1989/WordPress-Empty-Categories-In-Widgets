<?php

class Empty_Categories_Widgets
{

    static $instance;

    /**
     * Constructor of the class
     * Author : Yogesh Pawar
     * Date : 6th Feb 2019
     */
    function __construct()
    {

        self::$instance = $this;

        add_filter('widget_categories_args', array($this, 'displayEmptyCat'));
    }

    /**
     * Function to Display empty Categories in the category widget
     * @param array $cat_args
     * @return int
     */
    function displayEmptyCat($cat_args)
    {
        $cat_args['hide_empty'] = 0;
        return $cat_args;
    }
}

//Initialising Class Plugin
new Empty_Categories_Widgets();

?>