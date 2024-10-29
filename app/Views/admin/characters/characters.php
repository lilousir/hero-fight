<?php
echo"coucou" ?>
<div class="row">
    <div class="col">
        <form action="<?= isset($characters) ? "/admin/characters/update" : "/admin/characters/create" ?>" method="POST" enctype="multipart/form-data">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        <?= isset($characters) ? "Editer " . $characters['name'] : "Créer un personnage" ?>
                    </h4>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-profil" role="presentation">
                        <button class="nav-link active" id="profil-tab" data-bs-toggle="tab" data-bs-target="#profil-pane" type="button" role="tab" aria-controls="profil" aria-selected="true">Profil</button>
                    </li>
                </ul>
                <div class="tab-content p-3">
                    <div class="tab-pane fade show active" id="profil-pane" role="tabpanel" aria-labelledby="profil-tab" tabindex="0">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Pseudo</label>
                                <input type="text" class="form-control" id="username" placeholder="username" value="<?= isset($characters) ? $characters['name'] : ""; ?>" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="strength" class="form-label">strength</label>
                                <input type="text" class="form-control" id="strength" placeholder="strength" value="<?= isset($characters) ? $characters['strength'] : "" ?>" name="strength" <?= isset($characters) ? "readonly" : "" ?> >
                            </div>
                            <div class="mb-3">
                                <label for="constitution" class="form-label">constitution</label>
                                <input type="text" class="form-control" id="constitution" placeholder="constitution" value="<?= isset($characters) ? $characters['constitution'] : "" ?>" name="constitution" <?= isset($characters) ? "readonly" : "" ?> >
                            </div>
                            <div class="mb-3">
                                <label for="agility" class="form-label">agilité</label>
                                <input type="text" class="form-control" id="agility" placeholder="agility" value="<?= isset($characters) ? $characters['agility'] : "" ?>" name="agility" <?= isset($characters) ? "readonly" : "" ?> >
                            </div>
                            <div class="mb-3">
                                <label for="experience" class="form-label">expérience</label>
                                <input type="text" class="form-control" id="experience" placeholder="experience" value="<?= isset($characters) ? $characters['experience'] : "" ?>" name="experience" <?= isset($characters) ? "readonly" : "" ?> >
                            </div>
                            <div class="mb-3">
                                <label for="level" class="form-label">level</label>
                                <input type="text" class="form-control" id="level" placeholder="level" value="<?= isset($characters) ? $characters['level'] : "" ?>" name="level" <?= isset($characters) ? "readonly" : "" ?> >
                            </div>


                            <div class="mb-3">
                                <label for="image" class="form-label">Avatar</label>
                                <input class="form-control" type="file" name="profile_image" id="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <?php if (isset($characters)): ?>
                        <input type="hidden" name="id" value="<?= $characters['id']; ?>">
                    <?php endif; ?>
                    <button type="submit" class="btn btn-primary">
                        <?= isset($characters) ? "Sauvegarder" : "Enregistrer" ?>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>