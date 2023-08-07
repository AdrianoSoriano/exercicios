<html>

    <<head>
        <title>EXERCÍCIOS PROPOSTOS DA AULA 04 parte 2</title>
    </head>

    <body>
        <?php
        echo "Exercicio 04";
        echo "<BR><BR>";

        echo "4- Crie uma função em PHP que receba a altura e o peso de uma pessoa, calcule seu IMC de acordo com a
        fórmula abaixo:
        IMC = Peso dividido pela altura ao quadrado ( peso ÷ (altura²)).
        A função deve retornar uma string (magreza, normal. sobrepeso ou obesidade)";
        echo "<br><br>";
        
        function imc($altura, $peso){

            $imc = $peso / ($altura * $altura);
            if($imc < 18.5){
                return "Magreza";
            } 
            if($imc >= 18.5 && $imc < 25){
                return "Normal";
            }
            if($imc >= 25 && $imc < 30){
                return "Sobrepeso";
            } else {
                return "Obesidade";
            }
        }
        
       $altura = 1.7;
       $peso = 80;
       $resultadoImc = imc($altura, $peso);

       echo "O imc referente a altura " . $altura . " e o peso " . $peso . " de acordo com a tabela está " . $resultadoImc
      
       ?>
    </body>

</html>