<h2>Editar Usuário</h2>

<form action="/pdo/update_user/" method="POST" role="form">

    <div class="form-group">
        <label for="">Nome</label>
        <!--Campo uculto para pegar o valor -->
        <input type="hidden" name="id" value="<?=$userEncontrado->id;?>" >
        <input type="text" class="form-control" name="name" value="<?=$userEncontrado->name;?>">

    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" value="<?=$userEncontrado->email;?>">

    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password" value="<?=$userEncontrado->password;?>">

    </div>
    <button type="submit" class="btn btn-primary">Editar</submit>

</form>
