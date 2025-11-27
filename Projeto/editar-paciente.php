<h1>Editar Paciente</h1>
<?php
    $sql = "SELECT * FROM pacientes WHERE id_paciente=".$_REQUEST["id_paciente"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-paciente" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_paciente" value="<?php print $row->id_paciente; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_paciente" value="<?php print $row->nome_paciente; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf" value="<?php print $row->cpf; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="dt_nasc" value="<?php print $row->dt_nasc; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Médico Responsável</label>
        <select name="medico_id_medico" class="form-control">
            <option>Escolha</option>
            <?php
                $sql_med = "SELECT * FROM medicos";
                $res_med = $conn->query($sql_med);
                while($row_med = $res_med->fetch_object()){
                    if($row_med->id_medico == $row->medico_id_medico){
                        print "<option value='".$row_med->id_medico."' selected>".$row_med->nome_medico."</option>";
                    } else {
                        print "<option value='".$row_med->id_medico."'>".$row_med->nome_medico."</option>";
                    }
                }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>