<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Characters extends BaseController
{
    protected $require_auth = true;

    protected $requiredPermissions = ['administrateur'];

    public function getindex($id = null)
    {
        if ($id) {
            $character = model("CharactersModel")->getCharacterById($id);
            return $this->view('/admin/characters/characters', ['characters' => $character], true);

        } else {
            $characters = model("CharactersModel")->getAllCharactersByUserId();
            return $this->view('/admin/characters/index', ['characters' => $characters], true);
        }
    }

    public function postupdate()
    {

        $data = $this->request->getPost();

        $cm = Model("CharactersModel");

        if ($cm->updateCharacter($data)) {

            $this->success("Le personnage a bien été modifié.");
        } else {

            $this->error("Une erreur est survenue lors de la modification du personnage.");
        }
        return $this->redirect("/admin/characters");
    }

    public function postcreate()
    {
        $data = $this->request->getPost();
        $cm = Model("CharactersModel");

        $newCharactersId = $cm->createCharacters($data);
        if ($newCharactersId) {
            $this->success("Le personnage à bien été ajouté.");
            $this->redirect("/admin/characters");
        } else {

            $errors = $cm->errors();
            foreach ($errors as $error) {

                $this->error($error);
            }
            $this->redirect("/admin/characters/new");
        }
    }

    public function getdeletecharacters($id)
    {
        $cm = model('CharactersModel');
            if ($cm->deleteCharacter($id)) {
                $this->success("Personnage supprimé");
            } else {
                $this->error("Personnage non supprimé");
            }
           return $this->redirect('/admin/characters');
        }



}
