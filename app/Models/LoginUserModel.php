<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginUserModel extends Model
{
    protected $table      = 'user_login';
    protected $primaryKey = 'id_login';
    protected $allowedFields = ['user_id'];

    public function deleteUserLogin($user_id)
    {
        $db = db_connect();
        $builder = $db->table('user_login');
        $builder->delete(['user_id' => $user_id]);
    }
}
