<html>
<head>
    <title>.:Página do Ellioth.:</title>
    <meta charset = "utf-8">
</head>
<body>
    <table border = '1'>
    <tr>
        <td>
            Tabela criada pelo for
        </td>
    </tr>
    <?php
    $quantidade = $_POST['quantidade'];
    echo "A quantidade de linhas escolhida por você foi $quantidade";

    for($i = 1;$i <= $quantidade;$i++){
        echo"<tr><td>Linha $i</td></tr>";
    }
    ?>

</body>
</html>
