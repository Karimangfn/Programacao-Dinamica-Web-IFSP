<?php
try {
    $con = new PDO("sqlite:banco_de_dados.sqlite");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Criando Tabelas
    $sql = "CREATE TABLE IF NOT EXISTS Produto (
        Codigo INTEGER PRIMARY KEY AUTOINCREMENT,
        Descricao TEXT,
        Preco FLOAT
    )";

    $con->exec($sql);

    $sql = "CREATE TABLE IF NOT EXISTS Carrinho (
        Numero INTEGER PRIMARY KEY AUTOINCREMENT,
        Data_de_Criacao DATE
    )";

    $con->exec($sql);

    $sql = "CREATE TABLE IF NOT EXISTS Produto_Carrinho (
        Numero INTEGER,
        Codigo INTEGER,
        PRIMARY KEY (Numero, Codigo),
        FOREIGN KEY(Codigo) REFERENCES Produto(Codigo),
        FOREIGN KEY(Numero) REFERENCES Carrinho(Numero)
    )";

    $con->exec($sql);

    // Insert
    $stmtProduto = $con->prepare("INSERT INTO Produto (Descricao, Preco) VALUES (?, ?)");

    $stmtProduto->bindParam(1, $Descricao);
    $stmtProduto->bindParam(2, $Preco);

    $Descricao = "Morango";
    $Preco = "2.50";
    $stmtProduto->execute();

    $Descricao = "Maça";
    $Preco = "4.75";
    $stmtProduto->execute();

    $Descricao = "Laranja";
    $Preco = "3.15";
    $stmtProduto->execute();

    $Descricao = "Tangerina";
    $Preco = "6.52";
    $stmtProduto->execute();

    $Descricao = "Melancia";
    $Preco = "2.93";
    $stmtProduto->execute();

    $stmtCarrinho = $con->prepare("INSERT INTO Carrinho (Data_de_Criacao) VALUES (?)");

    $stmtCarrinho->bindParam(1, $Data_de_Criacao);

    $Data_de_Criacao = "03-04-2023";
    $stmtCarrinho->execute();

    $Data_de_Criacao = "04-04-2023";
    $stmtCarrinho->execute();

    $Data_de_Criacao = "05-04-2023";
    $stmtCarrinho->execute();

    $Data_de_Criacao = "06-04-2023";
    $stmtCarrinho->execute();

    $Data_de_Criacao = "07-04-2023";
    $stmtCarrinho->execute();

    $stmtProduto_Carrinho = $con->prepare("INSERT INTO Produto_Carrinho (Numero, Codigo) VALUES (?, ?)");

    $stmtProduto_Carrinho->bindParam(1, $Numero);
    $stmtProduto_Carrinho->bindParam(2, $Codigo);

    $Numero = "1";
    $Codigo = "1";
    $stmtProduto_Carrinho->execute();

    $Numero = "2";
    $Codigo = "2";
    $stmtProduto_Carrinho->execute();

    $Numero = "3";
    $Codigo = "3";
    $stmtProduto_Carrinho->execute();

    $Numero = "4";
    $Codigo = "4";
    $stmtProduto_Carrinho->execute();

    $Numero = "5";
    $Codigo = "5";
    $stmtProduto_Carrinho->execute();
  
    // Fazendo Select
    $stmtSelect = $con -> prepare("SELECT * FROM Produto");
    $stmtSelect -> execute();

    $Produtos = $stmtSelect->fetchAll();

    $stmtSelect = $con -> prepare("SELECT * FROM Carrinho");
    $stmtSelect -> execute();

    $Carrinhos = $stmtSelect->fetchAll();

    // Fazendo Select sem Join
    //$stmtSelect = $con -> prepare("SELECT * FROM Produto_Carrinho");
    //$stmtSelect -> execute();

    //$Produto_Carrinhos = $stmtSelect->fetchAll();

    // Fazendo Select com Join
    $stmtSelect = $con -> prepare("
    SELECT Produto.Descricao, Produto.Preco, Carrinho.Data_de_Criacao,
    Produto_Carrinho.Codigo, Produto_Carrinho.Numero 
    FROM Produto_Carrinho
    INNER JOIN Produto
    ON Produto.Codigo = Produto_Carrinho.Codigo
    INNER JOIN Carrinho
    ON Carrinho.Numero = Produto_Carrinho.Numero");
    $stmtSelect -> execute();

    $Produto_Carrinhos = $stmtSelect->fetchAll();

    $con = null;
} catch (PDOException $e) {
    echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<head>
    <title>Lista de Compras</title>
</head>
<body>
    <h1>Tabela Produto</h1>
    <?php
    foreach ($Produtos as $Produto) {
        echo "<p>";
        echo "Codigo: " . $Produto["Codigo"] . "<br>"
        . "Descricao: " . $Produto["Descricao"] . "<br>"
        . "Preço: " . $Produto["Preco"];
        echo "</p>";
    }
    ?>

    <h1>Tabela Carrinho</h1>
    <?php
    foreach ($Carrinhos as $Carrinho) {
        echo "<p>";
        echo "Numero: " . $Carrinho["Numero"] . "<br>"
        . "Data de Criação: " . $Carrinho["Data_de_Criacao"];
        echo "</p>";
    }
    ?>

  <h1>Tabela Produto_Carrinho</h1>
  <?php
    foreach ($Produto_Carrinhos as $Produto_Carrinho) {
        echo "<p>";
        echo "Codigo (Produto): " . $Produto_Carrinho["Codigo"] . "<br>"
        . "Numero (Carrinho): " . $Produto_Carrinho["Numero"] . "<br>"
        . "Produto: " . $Produto_Carrinho["Descricao"] . "<br>"
        . "Preço: " . $Produto_Carrinho["Preco"] . "<br>"
        . "Data de Criação: " . $Produto_Carrinho["Data_de_Criacao"];
        echo "</p>";
    }
    ?>
</body>
</html>