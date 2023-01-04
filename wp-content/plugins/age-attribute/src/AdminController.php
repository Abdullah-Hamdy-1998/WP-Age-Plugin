<?php

class AdminController
{

    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new AdminView();
        $this->model = new UserModel();

        add_action('edit_user_profile', array($this, 'add_age_field'));
        add_action('show_user_profile', array($this, 'add_age_field'));
    }

    public function add_age_field($user_id)
    {
        if (!current_user_can('edit_user', $user_id))
            return false;

        $this->view->render_age_field();
    }
}
