<?php
if (!isset($_GET['editar'])) { ?>

    <h1>Inserir novo curso</h1>
    <hr /><br>

    <form action="processa_curso.php" method="POST">
        <div class="form-control">
            <label>Curso:</label>
            <input type="text" name="nome_curso" placeholder="Insira o nome do curso">
        
        <br><br>
        
            <label>Cargo Horária: </label>
            <input type="text" name="cargo_horaria" placeholder="Insira a Cargo horária">
        

        <br>
            <hr />
            <input type="submit" value="salvar">
        </div>
    </form>

<?php } else { ?>

    <?php while ($linha = mysqli_fetch_array($consulta_cursos)) {
        if ($linha['id_curso'] == $_GET['editar']) { ?>


            <h1>Editar curso</h1>
            <hr /><br>

            <form action="view/edita_curso.php" method="POST">
                <input type="hidden" name="id_curso" value="<?php echo $linha['id_curso'] ?>">
                <div>
                    <label>Curso:</label>
                    <input class="form-control col-6" type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['nome_curso'] ?>">
                </div>
                <br><br>
                <div>
                    <label>Cargo Horária: </label>
                    <input class="form-control col-6" type="text" name="cargo_horaria" placeholder="Insira a Cargo horária" value="<?php echo $linha['cargo_horaria'] ?>">
                </div>

                <div><br>
                    <hr />
                    <input class="btn btn-success" type="submit" value="salvar">
                </div>
            </form>


        <?php } ?>
<?php }
} ?>