<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Characters extends BaseController
{
    protected $require_auth = true;

    protected $requiredPermissions = ['administrateur'];

    public function getindex ($id = null){
        if ($id) {
            $characters = model("CharactersModel")->getCharacterById($id);

            return $this->view('/admin/characters/characters', ['characters' => $characters],true);
        }

        return $this->view('/admin/characters/index', [],true);
    }
}