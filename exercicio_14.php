<html>

    <head>
        <title>EXERCÍCIOS PROPOSTOS DA AULA 04 parte 2</title>
    </head>

    <body>
        <?php
        echo "Exercicio 03";
        echo "<BR><BR>";

        echo "Crie uma função em PHP que calcule e imprima o salário reajustado de um funcionário
        de acordo com a seguinte regra:
        • salários até R$ 3.000,00 , reajuste de 50%
        • salários de R$ 3.000,00 ou mais, reajuste de 30%";
        echo "<BR>";

        function reajusteDeSalario($salario){
            if($salario <= 3000){
                $salario = $salario * 1.5;
            } else {
                $salario = $salario * 1.3;
            }
            return $salario;
        }

        $salario1 = 2500;
        $salario2 = 3500;

        echo "O Salario reajustado de " . $salario1 . " é:" . reajusteDeSalario($salario1) . "<br>";
        echo "O Salario reajustado de " . $salario2 . " é:" . reajusteDeSalario($salario2) . "<br>";

        ?>
    </body>

</html>