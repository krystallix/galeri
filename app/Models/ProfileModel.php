<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table      = 'profile';
    protected $primaryKey = 'profile_id';
    protected $allowedFields = ['user_id', 'describe_profile', 'photo_profile'];

    public function deleteProfile($user_id)
    {
        $db = db_connect();
        $builder = $db->table('profile');
        $builder->delete(['user_id' => $user_id]);
    }
}
