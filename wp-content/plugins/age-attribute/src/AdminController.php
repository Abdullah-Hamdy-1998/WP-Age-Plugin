<?php

class AdminController
{

    private $view;
    private $model;
    private $api;

    public function __construct()
    {
        $this->view = new AdminView();
        $this->model = new UserModel();
        $this->api = new AgeAPI();

        //user
        add_action('edit_user_profile', array($this, 'add_age_field'));
        add_action('edit_user_profile_update', array($this, 'save_age_field'));

        //admin
        add_action('show_user_profile', array($this, 'add_age_field'));
        add_action('personal_options_update', array($this, 'save_age_field'));

        //initialize endpoints 
        add_action('rest_api_init', array($this, 'call_api_methods'));
    }

    public function add_age_field($user)
    {
        if (!current_user_can('edit_user', $user))
            return false;

        $this->view->render_age_field($user);
    }

    public function save_age_field($user)
    {

        if (!current_user_can('edit_user', $user))
            return false;

        $this->model->update_age($user, $_POST['age']);
    }

    public function call_api_methods()
    {
        $this->api->age_rest_api_init();
    }
}
