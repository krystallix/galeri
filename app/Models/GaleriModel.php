<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table      = 'gallery';
    protected $primaryKey = 'id_photo';
    protected $allowedFields = ['photo', 'judul_foto', 'describe_photo', 'like_post', 'user_id'];

    public function getFoto()
    {
        $db = db_connect();
        $builder = $db->table('gallery');
        $query   = $builder->get();
        return $query->getResult();
    }

    public function getWhere($id_photo)
    {
        $db = db_connect();
        $builder = $db->table('gallery');
        $builder->select('gallery.id_photo, gallery.photo, gallery.judul_foto, gallery.describe_photo, gallery.time_upload, gallery.like_post, gallery.user_id, user.username, profile.photo_profile');
        $builder->join('user', 'gallery.user_id = user.user_id');
        $builder->join('profile', 'gallery.user_id = profile.user_id');
        $builder->where('gallery.id_photo', $id_photo);
        $query   = $builder->get();
        return $query->getResult();
    }

    public function getFotoUser($user_id)
    {
        $db = db_connect();
        $builder = $db->table('gallery');
        $builder->where('user_id', $user_id);
        $query   = $builder->get();
        return $query->getResult();
    }

    public function getFotoWhere($id_photo)
    {
        $db = db_connect();
        $builder = $db->table('gallery');
        $builder->select('photo');
        $builder->where('id_photo', $id_photo);
        $query   = $builder->get();
        return $query->getResult();
    }

    public function getEditFoto($id_photo)
    {
        $db = db_connect();
        $builder = $db->table('gallery');
        $builder->where('id_photo', $id_photo);
        $query   = $builder->get();
        return $query->getResult();
    }

    public function deleteFotoPengguna($id_photo)
    {
        $db = db_connect();
        $builder = $db->table('gallery');
        $builder->delete(['id_photo' => $id_photo]);
        $query   = $builder->get();
        return $query->getResult();
    }

    public function jumlahPost($user_id)
    {
        $db = db_connect();
        $builder = $db->table('gallery');
        $builder->selectCount('photo');
        $builder->where('user_id', $user_id);
        $query   = $builder->get();
        return $query->getRow();
    }

    public function deleteFoto($user_id)
    {
        $db = db_connect();
        $builder = $db->table('gallery');
        $builder->delete(['user_id' => $user_id]);
    }

    public function getKeyword($keyword)
    {
        $db = db_connect();
        $builder = $db->table('gallery');
        $builder->select('id_photo, photo, judul_foto, describe_photo, time_upload, like_post, user_id');
        $builder->like('judul_foto', $keyword);
        $builder->orLike('describe_photo', $keyword);
        $query = $builder->get();
        return $query->getResult();
    }
}
