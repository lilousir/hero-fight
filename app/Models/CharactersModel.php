<?php

namespace App\Models;

use CodeIgniter\Model;

class CharactersModel extends Model
{
    protected $table = 'character';
    protected $primaryKey = 'id';

    // Champs permis pour les opérations d'insertion et de mise à jour
    protected $allowedFields = ['id', 'id_user', 'name', 'strength', 'constitution','agility','experience', 'level', 'created_at', 'updated_at', 'deleted_at'];

    // Activer le soft delete
    protected $useSoftDeletes = true;

    // Champs de gestion des dates
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';




    public function getCharacterById($id)
    {
        return $this->find($id);
    }
    public function getAllCharacterById($id) {


        return $this->findAll();
    }
    public function getAllCharactersByUserId() {

        return $this->findAll();
    }




    public function getAllCharacter()
    {
        return $this->findAll();
    }

    public function createCharacter($data)
    {
        return $this->insert($data);
    }
    public function createCharacters($data)
    {
        return $this->insert($data);

    }
    public function updateCharacter($data)
    {
        return $this->update($data['id'], $data);
    }

    public function deleteCharacter($id)
    {
        return $this->delete($id);
    }




 //public function getPaginatedUser($start, $length, $searchValue, $orderColumnName, $orderDirection)
 //  {
 //      $builder = $this->builder();
 //      $builder->join('user_permission', 'user.id_permission = user_permission.id', 'left');
 //      $builder->join('media', 'user.id = media.entity_id AND media.entity_type = "user"', 'left');
 //      $builder->select('user.*, user_permission.name as permission_name, media.file_path as avatar_url');

 //      // Recherche
 //      if ($searchValue != null) {
 //          $builder->like('username', $searchValue);
 //          $builder->orLike('email', $searchValue);
 //          $builder->orLike('user_permission.name', $searchValue);
 //      }

 //      // Tri
 //      if ($orderColumnName && $orderDirection) {
 //          $builder->orderBy($orderColumnName, $orderDirection);
 //      }

 //      $builder->limit($length, $start);

 //      return $builder->get()->getResultArray();
 //  }

    //public function getTotalUser()
    //{
    //    $builder = $this->builder();
    //    $builder->join('user_permission', 'user.id_permission = user_permission.id');
    //    return $builder->countAllResults();
    //}

   //public function getFilteredUser($searchValue)
   //{
   //    $builder = $this->builder();
   //    $builder->join('user_permission', 'user.id_permission = user_permission.id', 'left');
   //    $builder->join('media', 'user.id = media.entity_id AND media.entity_type = "user"', 'left');
   //    $builder->select('user.*, user_permission.name as permission_name, media.file_path as avatar_url');

   //    // @phpstan-ignore-next-line
   //    if (! empty($searchValue)) {
   //        $builder->like('username', $searchValue);
   //        $builder->orLike('email', $searchValue);
   //        $builder->orLike('user_permission.name', $searchValue);
   //    }

   //    return $builder->countAllResults();
   //}


}
