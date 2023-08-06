<html>

    <head>
        <title>EXERCÍCIOS PROPOSTOS DA AULA 03</title>
    </head>

    <body>
        <?php
            echo "Exercicio 06";
            echo "<BR><BR>";

            echo "6- Termine o script abaixo, verificando se a variável \$numero valor positivo, negativo ou igual a zero.
                    Exiba na tela a mensagem: 'Valor Positivo' ,  'Valor Negativo' 'ou' 'Igual a Zero' .";
            echo "<BR>";
            echo "\$numero = 0;";
            echo "<BR><BR>";

                $numero = 0;

                if ($numero < 0) {
                    echo "Valor Negativo";
                }
                if ($numero > 0) {
                    echo "Valor Positivo";
                }
                if ($numero == 0) {
                    echo "Igual a Zero";
                }
        ?>
    </body>

</html>