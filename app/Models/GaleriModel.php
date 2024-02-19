<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table      = 'gallery';
    protected $primaryKey = 'id_photo';
    protected $allowedFields = ['photo', 'judul_foto', 'describe_photo', 'like_post', 'user_id'];
}
