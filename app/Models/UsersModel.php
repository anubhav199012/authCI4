<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['name', 'email', 'email_verified_at', 'password', 'mobile', 'referral_link', 'referred_by'];
    protected $useTimestamps = true;
    protected $skipValidation = true;
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data){
        print_r($data);
        if (!isset($data['data']['password'])) return $data;
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }

    public function get_allusers($referral_link=null){
        return $this->db->table('users')
        ->where('is_delete',0)     
        ->where('referred_by',$referral_link)     
        ->get()->getResultArray();
    }

    public function get_user($user_id){
        return $this->db->table('users')
        ->select('*')
        ->where('is_delete',0)     
        ->where('user_id',$user_id) 
        ->get()->getRow();
    }

     // Validation of referrer if already exists or not
     public function validateReferral($referral_code = false) {
        return $this->db->table('users')
        ->select("user_id")
        ->where('is_delete',0)    
        ->where("referral_link", $referral_code)
        ->get()->getRow();
    }

    // validate email already exits in user register
    public function validateEmail($email = false, $iUserId = false) {
        return $this->db->table('users')
        ->select("user_id")
        ->where('is_delete',0)    
        ->where("email", $email) 
        ->get()->getRow();
    }

    public function getProfileDetailsById($id){
        return $this->db->table('users')
        ->select('*')
        ->where('user_id', $id)
        ->where('is_delete',0) 
        ->from('users')
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
