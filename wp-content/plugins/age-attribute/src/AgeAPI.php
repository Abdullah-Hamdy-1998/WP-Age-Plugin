<?php
class AgeAPI
{

    public function age_rest_api_init()
    {
        register_rest_route('age-attribute/v1', '/users/(?P<user_id>[\d]+)/age', array(
            'methods'  => WP_REST_Server::READABLE,
            'callback' => array($this, 'age_get_handler'),
        ));

        register_rest_route('age-attribute/v1', '/users/(?P<user_id>[\d]+)/age/create', array(
            'methods'  => WP_REST_Server::CREATABLE,
            'callback' => array($this, 'age_post_handler'),
        ));
        register_rest_route('age-attribute/v1', '/users/(?P<user_id>[\d]+)/age/update', array(
            'methods'  => WP_REST_Server::EDITABLE,
            'callback' => array($this, 'age_put_handler'),
        ));
    }

    public function age_get_handler($request)
    {
        $user_id = $request['user_id'];
        $age = get_user_meta($user_id, 'age', true);

        return array('age' => $age);
    }

    public function age_post_handler($request)
    {
        $age = $request['age'];
        update_user_meta($request['user_id'], 'age', $age);
        
        return array('age' => $age);
    }

    public function age_put_handler($request)
    { 
        $age = $request['age'];
        update_user_meta($request['user_id'], 'age', $age);

        return array('age' => $age);
    }
}
