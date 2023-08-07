<html>
    <head>
        <title>EXERCÍCIOS PROPOSTOS DA AULA 04</title>
    </head>

    <body>
        <?php
        echo "Exercicio 03";
        echo "<BR><BR>";

        echo "3- Crie um script em PHP crie dois vetores de 10 posições preenchidos com valores aleatórios.
        Faça a soma dos elementos de mesmo índice, colocando o resultado em um terceiro vetor.
        Imprima os três vetores, um após o outro. Obs: Utilize um for";
        echo "<BR><BR>";

        function valoresAleatorio(){
           $valor1 = 0;
           $valor2 = 100;
           $valoresAleatorio[] = 0;

            for ($x=0; $x<=9; $x++){

                $sorteado = rand($valor1, $valor2);
                
                if($x==0){
                    $valoresAleatorio = array ($x => $sorteado);
                } else{
                        if(in_array($sorteado, $valoresAleatorio, true)){
                            $x--;
                        } else {
                            $valoresAleatorio[] = ($sorteado);
                        }
                    }
            }
            return $valoresAleatorio;
        }

        $numerosAleatorio1 = array();
        $numerosAleatorio1 = array();
        $numerosTotais = array();

        $numerosAleatorio1 = valoresAleatorio();
        $numerosAleatorio2 = valoresAleatorio();

        for($x=0; $x < sizeof($numerosAleatorio1); $x++){

            $numerosTotais[$x] = $numerosAleatorio1[$x] + $numerosAleatorio2[$x];
        }
        echo "Primeiros numeros sorteados: ";

            foreach($numerosAleatorio1 as $elemento){
            
                echo "  " . $elemento;
            }
            echo "<BR>";
        echo "Segundo numeros sorteados: ";

            foreach($numerosAleatorio2 as $elemento1){
            
                echo "  " . $elemento1;
            }
            echo "<BR>";
        
        echo "A soma dos numeros sorteados: ";

            foreach($numerosTotais as $elemento2){
            
                echo "  " . $elemento2;
           }
        
        ?>
    </body>

</html>