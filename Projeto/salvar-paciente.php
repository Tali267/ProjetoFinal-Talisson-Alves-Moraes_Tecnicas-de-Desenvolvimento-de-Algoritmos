<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome_paciente"];
        $cpf = $_POST["cpf"];
        $data = $_POST["dt_nasc"];
        $id_medico = $_POST["medico_id_medico"];

        $sql = "INSERT INTO pacientes (nome_paciente, cpf, dt_nasc, medico_id_medico) VALUES (?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $nome, $cpf, $data, $id_medico);

        if($stmt->execute()) {
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        }
        break;

    case 'editar':
        $nome = $_POST["nome_paciente"];
        $cpf = $_POST["cpf"];
        $data = $_POST["dt_nasc"];
        $id_medico = $_POST["medico_id_medico"];
        $id_paciente = $_POST["id_paciente"];

        $sql = "UPDATE pacientes SET nome_paciente=?, cpf=?, dt_nasc=?, medico_id_medico=? WHERE id_paciente=?";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssii", $nome, $cpf, $data, $id_medico, $id_paciente);

        if($stmt->execute()) {
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        } else {
            print "<script>alert('Erro ao editar');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM pacientes WHERE id_paciente=?";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $_REQUEST["id_paciente"]);

        if($stmt->execute()) {
            print "<script>alert('Excluído com sucesso!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        } else {
            print "<script>alert('Erro ao excluir');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        }
        break;
}
?>