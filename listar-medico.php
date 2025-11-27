<h1>Listar Médicos</h1>
<?php
    $sql = "SELECT * FROM medicos";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>ID</th>";
            print "<th>Nome</th>";
            print "<th>CRM</th>";
            print "<th>Especialidade</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_medico."</td>";
            print "<td>".$row->nome_medico."</td>";
            print "<td>".$row->crm."</td>";
            print "<td>".$row->especialidade."</td>";
            print "<td>
                   <button onclick=\"location.href='?page=editar-medico&id_medico=".$row->id_medico."';\" class='btn btn-success'>Editar</button>
                   <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-medico&acao=excluir&id_medico=".$row->id_medico."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                   </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>