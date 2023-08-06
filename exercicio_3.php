<html>

    <head>
        <title>EXERCÍCIOS PROPOSTOS DA AULA 03</title>
    </head>

    <body>
        <?php
            echo "Exercicio 03";
            echo "<BR><BR>";
        
            echo "3- Termine o script abaixo. A variável \$preco contém o valor da venda. Acrescente 12% ao
                    preço do produto, divida em 10 parcelas e mostre na tela o valor de cada parcela e o valor total
                    da compra.";
            echo "<BR>";
            echo "\$preco = 320;";
            echo "<BR><BR>";
        
                $preco = 320;
                $valorPorcentagem = ($preco * 12) / 100;
                $valorTotal = $preco + $valorPorcentagem;
                $valorParcela = $valorTotal / 10;
        
                for ($x = 1; $x <= 10; $x++) {
        
                    echo "Valor da Parcela " . $x . " " . $valorParcela;
                    echo "<BR>";
                }
                echo "O resultado total do preço:" . $valorTotal;
        ?>
    </body>

</html>