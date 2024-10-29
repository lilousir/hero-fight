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
    public function postupdate() {

        $data = $this->request->getPost();

        $cm = Model("CharactersModel");

        if ($cm->updateCharacter($data)) {

            $this->success("Le personnage a bien été modifié.");
        } else {

            $this->error("Une erreur est survenue lors de la modification du personnage.");
        }
        return $this->redirect("/admin/characters");
    }

    public function postSearchCharacter()
    {
        $CharactersModel = model('App\Models\CharactersModel');

        // Paramètres de pagination et de recherche envoyés par DataTables
        $draw        = $this->request->getPost('draw');
        $start       = $this->request->getPost('start');
        $length      = $this->request->getPost('length');
        $searchValue = $this->request->getPost('search')['value'];

        // Obtenez les informations sur le tri envoyées par DataTables
        $orderColumnIndex = $this->request->getPost('order')[0]['column'] ?? 0;
        $orderDirection = $this->request->getPost('order')[0]['dir'] ?? 'asc';
        $orderColumnName = $this->request->getPost('columns')[$orderColumnIndex]['data'] ?? 'id';


        // Obtenez les données triées et filtrées
        $data = $CharactersModel->getPaginatedCharacter($start, $length, $searchValue, $orderColumnName, $orderDirection);

        // Obtenez le nombre total de lignes sans filtre
        $totalRecords =  $CharactersModel->getTotalCharacter();

        // Obtenez le nombre total de lignes filtrées pour la recherche
        $filteredRecords =  $CharactersModel->getFiltereCharacter($searchValue);

        $result = [
            'draw'            => $draw,
            'recordsTotal'    => $totalRecords,
            'recordsFiltered' => $filteredRecords,
            'data'            => $data,
        ];
        return $this->response->setJSON($result);
    }
    }
