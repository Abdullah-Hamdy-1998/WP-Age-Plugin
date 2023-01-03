<?php

class AdminController
{

    private $view;

    public function __construct()
    {
        $this->view = new AdminView();
        add_action('edit_user_profile', array($this, 'add_age_field'));
    }

    public function add_age_field()
    {
        $this->view->render_age_field();
    }
}
