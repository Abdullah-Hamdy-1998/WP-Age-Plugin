<?php

class AdminView
{
    public function render_age_field($user)
    {
        include plugin_dir_path(__FILE__) . '../templates/age-field.php';
    }
}
