<?php
class AgeAPI
{
    
    public function age_rest_api_init()
    {
        register_rest_route('age-attribute/v1', '/users/(?P<user_id>[\d]+)/age', array(
            'methods'  => WP_REST_Server::READABLE,
            'callback' => array($this, 'age_rest_api_handler'),
        ));
    }
    
    public function age_rest_api_handler($request)
    {
        $request['user_id'];
        $user_id = $request['user_id'];
        $age = get_user_meta($user_id, 'age', true);
        return array('age' => $age);
        
    }
}
