<form action="processa_municipio.php" method="POST">
    <div class="form">
        <div>
            <label>Nome: </label>
            <input class="form-control" type="text" name="municipio" placeholder="Nome do Municipio">
        </div>
        
        <div>
        <label>Data Fundação: </label>
        <input class="form-control" type="date" name="data_criacao">
        </div>

        <div>
        <label>Região Integração: </label>
        <select name="regiao_integracao">
            <option value="">Selecione</option>

            <?php while ($linha = mysqli_fetch_array($consulta_regiao)) {
                echo "<option value=" . $linha['id'] . "> " . $linha['nome'] . "</option>";
            }
            ?>
        </select>
        </div>

        <div>
        <label>Estado: </label>
        <select name="estado">
            <option value="PA">Pará</option>
        </select>
        </div>
        <hr><br>
            <div>
        <input class="btn btn-success" type="submit" value="Enviar">
            </div>
    </div>



</form>