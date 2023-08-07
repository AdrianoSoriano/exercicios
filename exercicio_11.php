<html>

    <head>
        <title>EXERCÍCIOS PROPOSTOS DA AULA 04</title>
    </head>

    <body>
        <?php
        echo "Exercicio 04";
        echo "<BR><BR>";

        echo "4- Seu salário atual é de R$5.000,00. O do seu colega é de R$2.500,00. Suponha que você
        tenha 10% de aumento todo ano e seu colega 20%. Crie um script que calcula em quantos anos 
        seu colega irá passar a ganhar mais que você";
        echo "<BR>";
        echo "\$sal1 = 5000;";
        echo "<BR>";
        echo "\$vsal2 = 2500;";
        echo "<BR><BR>";

        $sal1 = 5000;
        $sal2 = 2500;
        $anos = 0;

            while ($sal2 <= $sal1) {
                $sal1 += $sal1 * 0.1;
                $sal2 += $sal2 * 0.2;
                $anos++;
            }

            echo "Ele passar a ganhar mais do que eu em " . $anos . " anos.";      
        ?>
    </body>

</html>