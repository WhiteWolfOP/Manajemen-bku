<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'email'];

    public function getUsers()
    {
        return $this->findAll();
    }

    public function createUser($data)
    {
        return $this->insert($data);
    }

    public function updateUser($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteUser($id)
    {
        return $this->delete($id);
    }
    
    public function getUsersWithUserRole()
    {
        return $this->select('users.id, users.username')
                    ->join('auth_groups_users', 'users.id = auth_groups_users.user_id')
                    ->join('auth_groups', 'auth_groups_users.group_id = auth_groups.id')
                    ->where('auth_groups.name', 'user')
                    ->findAll();
    }

}
