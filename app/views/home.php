<h2>Home</h2>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?=$user->id?></td>
            <td><?=$user->name?></td>
            <td>
                <a href="/pdo/edit_user?id=<?=$user->id;?>" class="btn btn-warning btn-xs">Editar</a></td>
            <td>
                <a href="/pdo/destroy_user?id=<?=$user->id;?>" class="btn btn-danger btn-xs">Excluir</a></td>
        </tr>
    </tbody>
        <?php endforeach; ?>
</table>