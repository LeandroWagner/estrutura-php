<h2>Cadastrar usuário</h2>

<form action="/pdo/store_user/" method="POST" role="form">


    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite nome">

    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Digite email">

    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Digite password">

    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</submit>

</form>


