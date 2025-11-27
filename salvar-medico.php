<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome_medico"];
        $crm = $_POST["crm"];
        $esp = $_POST["especialidade"];

        $sql = "INSERT INTO medicos (nome_medico, crm, especialidade) VALUES (?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nome, $crm, $esp);
        
        if($stmt->execute()) {
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=listar-medico';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar');</script>";
            print "<script>location.href='?page=listar-medico';</script>";
        }
        break;

    case 'editar':
        $nome = $_POST["nome_medico"];
        $crm = $_POST["crm"];
        $esp = $_POST["especialidade"];
        $id = $_POST["id_medico"];

        $sql = "UPDATE medicos SET nome_medico=?, crm=?, especialidade=? WHERE id_medico=?";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $nome, $crm, $esp, $id);

        if($stmt->execute()) {
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='?page=listar-medico';</script>";
        } else {
            print "<script>alert('Erro ao editar');</script>";
            print "<script>location.href='?page=listar-medico';</script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM medicos WHERE id_medico=?";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $_REQUEST["id_medico"]);
        
        if($stmt->execute()) {
            print "<script>alert('Excluído com sucesso!');</script>";
            print "<script>location.href='?page=listar-medico';</script>";
        } else {
            print "<script>alert('Erro ao excluir');</script>";
            print "<script>location.href='?page=listar-medico';</script>";
        }
        break;
}
?>