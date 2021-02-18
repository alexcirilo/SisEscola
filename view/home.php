<h1 style="text-align: center;">Bem vindos a Dog Cursos</h1>
<form method="POST" action="view/login.php">

    <div class="container container-fluid">
        <label class="badge badge-secondary">Login</label>
        <input type="text" name="usuario" placeholder="nome do usuario" class="form-control">

        <br />
        <label class="badge badge-secondary">Senha</label>
        <input type="password" name="senha" placeholder="Digite a senha" class="form-control">

        <input type="submit" class="btn btn-success" value="entrar">
    </div>
</form>
<br/>
<?php

if (isset($_GET['erro'])) { ?>
    <div class="alert alert-danger" role="alert">
        Usuario e/ou senha inválidos.
    </div>
<?php }
?>