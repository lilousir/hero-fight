<div class="col">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Liste des personnages</h4>
            <a href="/admin/characters/new"><i class="fa-solid fa-user-plus"></i></a>
        </div>
        <div class="card-body">
            <table id="tableCharacter" class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Utilisateur</th>
                    <th>Nom</th>
                    <th>Force</th>
                    <th>Constitution</th>
                    <th>Agilité</th>
                    <th>Experience</th>
                    <th>Niveau</th>
                    <th>Modifier</th>
                </tr>
                </thead>
                <tbody>

                <tbody>
                <?php foreach ($characters as $character) : ?>
                    <tr>
                        <td><?= $character['id'] ?></td>
                        <td><?= $character['id_user'] ?></td>
                        <td><?= $character['strength'] ?></td>
                        <td><?= $character['constitution'] ?></td>
                        <td><?= $character['agility'] ?></td>
                        <td><?= $character['experience'] ?></td>
                        <td><?= $character['level'] ?></td>

                        <td> <a href="/admin/comment/delete/<?=$character['id']; ?>" class="btn btn-outline-danger">
                                <i class="fa-regular fa-trash-can"></i>
                            </a></td>
                        <td> <a href="/admin/comment/delete/<?=$character['id']; ?>" class="btn btn-outline-danger">
                                <i class="fa-regular fa-trash-can"></i>
                            </a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>

                </tr>
            </table>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>
</div>
