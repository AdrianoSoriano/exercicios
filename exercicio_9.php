<html>

    <head>
        <title>EXERCÍCIOS PROPOSTOS DA AULA 04</title>
    </head>

    <body>
        <?php
        echo "Exercicio 02";
        echo "<BR><BR>";

        echo "2- Crie um script em PHP que crie um vetor de 5 elementos inteiros com valores aleatórios,
        entre 0 e 10. Encontre e mostre o menor elemento e sua posição no vetor.";
        echo "<BR><BR>";

        function valoresAleatorio(){
           define("valor1", 0);
           define("valor2", 10);
           $valoresAleatorio[] = 0;

            for ($x=0; $x<=4; $x++){

                $sorteado = rand(valor1, valor2);
                
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

        $numerosAleatorio = valoresAleatorio();
        echo "numeros sorteados: ";

            foreach($numerosAleatorio as $elemento){
            
                echo $elemento .",";
            }
            echo "<BR>";
        
        $menorValor = min($numerosAleatorio);

            for($x=0; $x < sizeof($numerosAleatorio); $x++ ){
                
                if($numerosAleatorio[$x] == $menorValor){
                        $posicao = $x + 1;
                    echo "O menor valor é: " . $menorValor . " está na posição " . $posicao;
                }
            }
        
        ?>
    </body>

</html>