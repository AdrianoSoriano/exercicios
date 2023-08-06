<html>

    <head>
        <title>EXERCÍCIOS PROPOSTOS DA AULA 03</title>
    </head>

    <body>
        <?php
            echo "Exercicio 02";
            echo "<BR><BR>";
        
            echo "2- Termine o script abaixo, calculando a média dos valor de \$valor1, \$valor2 e \$valor3,
                    armazenando o resultado na variável \$media e exibindo na tela a mensagem: Média calculada:
                    [valor]";
            echo "<BR>";
            echo "\$valor1 = 7;";
            echo "<BR>";
            echo "\$valor2 = 3;";
            echo "<BR>";
            echo "\$valor3 = 9;";
            echo "<BR><BR>";
        
            $valor1 = 7;
            $valor2 = 3;
            $valor3 = 9;
        
            function mediaDeValores($valores)
            {
                $resultado = 0;
                $qtdeDoArray = sizeof($valores);
        
                for ($x = 0; $x < sizeof($valores); $x++) {
                    $resultado += ($valores[$x]);
                }
        
                return $resultado / $qtdeDoArray;
            }
            echo "O resultado da media é:" . mediaDeValores(array($valor1, $valor2, $valor3));
        ?>
    </body>

</html>