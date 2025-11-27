<h1>Cadastrar Paciente</h1>
<form action="?page=salvar-paciente" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_paciente" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="dt_nasc" class="form-control">
    </div>
    <div class="mb-3">
        <label>Médico Responsável</label>
        <select name="medico_id_medico" class="form-control">
            <option>Escolha</option>
            <?php
                $sql = "SELECT * FROM medicos";
                $res = $conn->query($sql);
                while($row = $res->fetch_object()){
                    print "<option value='".$row->id_medico."'>".$row->nome_medico."</option>";
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>