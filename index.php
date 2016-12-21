<!DOCTYPE html>
<?php
include_once 'conexao.php';   
?>
<table border="0" width="100%"> 
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
<?php
    $sql ="SELECT cnomepaci, cemailpaci FROM lb_paci limit 50";
    $sql = $pdo->query($sql);
    if($sql->rowCount() >0){
        foreach ($sql->fetchAll() as $paciente) {
                echo '<tr>';
                echo '<td>'.$paciente['cnomepaci'].'<td>';
                echo '<td>'.$paciente['cemailpaci'].'<td>';
                echo '<td>Ações</td>';
                echo '</tr>';
        }
    }
?>
</table>
