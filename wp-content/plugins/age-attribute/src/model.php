<?php

class UserModel
{
    public function update_age($user_id, $age)
    {
        update_user_meta($user_id, 'age', intval($age));
    }
}
