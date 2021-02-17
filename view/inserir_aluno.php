<?php
if (!isset($_GET['editar'])) { ?>

    <h1>Inserir novo Aluno</h1>
    <hr /><br>

    <form action="processa_aluno.php" method="POST">
        <label>Nome:</label>
        <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do Aluno">
        <br>
        <label>Data Nascimento:</label>
        <input type="text" name="data_nascimento" placeholder="dd/MM/yyyy" class="form-control" data-mask="00-00-0000">
        <div>
            <hr /><br>
            <input type="submit" value="salvar">
        </div>
    </form>

<?php } else { ?>

    <?php while ($linha = mysqli_fetch_array($consulta_alunos)) { ?>
        <?php if ($linha['id_aluno'] == $_GET['editar']) { ?>

            <h1>Editar Aluno</h1>
            <hr /><br>
            <form action="view/edita_aluno.php" method="POST">

                <input class="form-control" type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno'] ?>">

                <label>Nome:</label>

                <input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do Aluno" value="<?php echo $linha['nome_aluno'] ?>">
                <br>
                <label>Data Nascimento:</label>
                <input class="form-control" type="text" name="data_nascimento" placeholder="dd/MM/yyyy" value="<?php echo $linha['data_nascimento'] ?>">
                <div>
                    <hr /><br>
                    <input type="submit" value="salvar">
                </div>
            </form>


        <?php } ?>
<?php }
} ?>