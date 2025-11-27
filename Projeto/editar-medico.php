<h1>Editar Médico</h1>
<?php
    $sql = "SELECT * FROM medicos WHERE id_medico=".$_REQUEST["id_medico"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar-medico" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_medico" value="<?php print $row->id_medico; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_medico" value="<?php print $row->nome_medico; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>CRM</label>
        <input type="text" name="crm" value="<?php print $row->crm; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Especialidade</label>
        <input type="text" name="especialidade" value="<?php print $row->especialidade; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>