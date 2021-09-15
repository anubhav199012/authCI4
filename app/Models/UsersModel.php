<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['name', 'email', 'email_verified_at', 'password', 'mobile'];
    protected $useTimestamps = true;
    protected $skipValidation = true;
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        print_r($data);
        if (!isset($data['data']['password'])) return $data;

        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

        return $data;
    }

    public function get_allusers()
    {
        return $this->db->table('users')
        ->where('is_delete',0)     
        ->get()->getResultArray();
    }

    public function get_user($user_id)
    {
        return $this->db->table('users')
        ->where('is_delete',0)     
        ->where('user_id',$user_id) 
        ->get()->getRow();
    }

    /*public function getNews($slug = false)
    {
        if ($slug === false)
        {
            return $this->findAll();
        }

        return $this->asArray()
                    ->where(['slug' => $slug])
                    ->first();
    }*/
}
