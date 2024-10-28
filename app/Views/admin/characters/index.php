<?php
echo"coucou" ?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>Liste des perso</h4>
        <a href="/admin/characters/characters"><i class="fa-solid fa-user-plus"></i></a>
    </div>
    <div class="card-body">
        <table id="tableCharacters" class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>avatar</th>
                <th>user</th>
                <th>Name</th>
                <th>strength</th>
                <th>constitution</th>
                <th>agility</th>
                <th>experience</th>
                <th>level</th>

            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>


<script>
    $(document).ready(function () {
        var baseUrl = "<?= base_url(); ?>";
        var dataTable = $('#tableCharacters').DataTable({
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "pageLength": 10,
            "language": {
                url: '<?= base_url("/js/datatable/datatable-2.1.4-fr-FR.json") ?>',
            },
            "ajax": {
                "url": "<?= base_url('/admin/user/SearchUser'); ?>",
                "type": "POST"
            },
            "columns": [
                {"data": "id"},

                {"data": "id_user"},
                {"data": "name"},
                {"data": "strength"},
                {"data": "constitution"},
                {"data": "agility"},
                {"data": "experience"},
                {"data": "level"},

                },

                }
            ]
        });
    });

</script>
