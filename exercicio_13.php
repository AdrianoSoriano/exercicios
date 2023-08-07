<html>

    <head>
        <title>EXERCÍCIOS PROPOSTOS DA AULA 04 parte 2</title>
    </head>

    <body>
        <?php
        echo "Exercicio 02";
        echo "<BR><BR>";

        echo "2- Crie uma função que receba 2 notas (\$n1 e \$n2) de um aluno. Essa função deve 
        retornar um booleano indicando se o aluno foi aprovado. Para ser aprovado, a soma das 
        notas deve ser igual ou superior a 19 e ambas devem ser superiores a 7.";
        echo "<BR>";

        function aprovado($n1, $n2) {
            $soma = $n1 + $n2;
            //retornar um booleano
            if ($soma >= 19 && $n1 > 7 && $n2 > 7) {
                return true;
            } else {
                return false;
            }
        }

        $n1 = 2;
        $n2 = 7;
        //se a resposta do booleano for true - Aprovado
        if (aprovado($n1, $n2)) {
            echo "Aprovado!";
        } else {
            echo "Reprovado!";
        }


        ?>
    </body>

</html>