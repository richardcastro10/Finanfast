<?php
    $nome = $_POST['Nome'];
    $query = "INSERT INTO tbagenda VALUES('$nome', '$end', '$cid')";
    $result = mysqli_query($con, $query);
    if(mysqli_affected_rows($con)){
          echo "<br><font size=5 color='green' face='verdana'>Cadastrado com sucesso</font>";
    }
    // fecha a conexão
    mysqli_close($con);

