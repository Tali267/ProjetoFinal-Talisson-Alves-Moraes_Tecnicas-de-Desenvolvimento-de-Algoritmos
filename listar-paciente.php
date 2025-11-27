<h1>Listar Pacientes</h1>
<?php
    $sql = "SELECT p.*, m.nome_medico 
            FROM pacientes AS p
            INNER JOIN medicos AS m
            ON p.medico_id_medico = m.id_medico";
            
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>ID</th>";
            print "<th>Nome</th>";
            print "<th>CPF</th>";
            print "<th>Data Nasc.</th>";
            print "<th>Médico</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id_paciente."</td>";
            print "<td>".$row->nome_paciente."</td>";
            print "<td>".$row->cpf."</td>";
            print "<td>".$row->dt_nasc."</td>";
            print "<td>".$row->nome_medico."</td>";
            print "<td>
                   <button onclick=\"location.href='?page=editar-paciente&id_paciente=".$row->id_paciente."';\" class='btn btn-success'>Editar</button>
                   <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-paciente&acao=excluir&id_paciente=".$row->id_paciente."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                   </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
?>