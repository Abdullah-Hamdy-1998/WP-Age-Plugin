<?php

class AdminController
{

    private $view;
    private $model;

    public function __construct()
    {
        $this->view = new AdminView();
        $this->model = new UserModel();

        //user
        add_action('edit_user_profile', array($this, 'add_age_field'));
        add_action('edit_user_profile_update', array($this, 'save_age_field'));

        //admin
        add_action('show_user_profile', array($this, 'add_age_field'));
        add_action('personal_options_update', array($this, 'save_age_field'));
    }

    public function add_age_field($user_id)
    {
        if (!current_user_can('edit_user', $user_id))
            return false;

        $this->view->render_age_field();
    }

    public function save_age_field($user_id)
    {

        if (!current_user_can('edit_user', $user_id))
            return false;

        $this->model->update_age($user_id, $_POST['age']);
    }
}
