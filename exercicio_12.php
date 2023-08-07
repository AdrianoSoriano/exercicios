<html>

    <head>
        <title>EXERCÍCIOS PROPOSTOS DA AULA 04 parte 2</title>
    </head>

    <body>
        <?php
        echo "Exercicio 01";
        echo "<BR><BR>";

        echo "1- Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma. 
        Se o valor da soma for negativo a função deverá o valor 0.";
        echo "<BR>";

        function valorSoma($valor1, $valor2) {
            $soma = $valor1 + $valor2;
            if ($soma < 0) {
                return 0;
            } else {
                return $soma;
            }
        }
       $valorDaSoma = valorSoma(2, 7);

       echo "Para os valores 2 e 7 o valor da soma é " . $valorDaSoma . "<br>";

       $valorDaSoma = valorSoma(2, -5);
       
       echo "Para os valores 2 e -5 o valor da soma é " . $valorDaSoma;

        ?>
    </body>

</html>