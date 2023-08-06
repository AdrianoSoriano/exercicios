<html>

    <head>
        <title>EXERCÍCIOS PROPOSTOS DA AULA 03</title>
    </head>

    <body>
        <?php
                echo "<BR><BR>";
                echo "Exercicio 07";
                echo "<BR><BR>";
            
                echo "7- Termine o script abaixo, exibindo o nome do mês correspondente à variável \$numMes e caso o
                        valor de \$numMes esteja fora do intervalo entre 1 e 12, exibir a mensagem 'Mês inválido.'";
                echo "<BR>";
                echo "\$numMes = 8;";
                echo "<BR><BR>";
            
                    $numMes = 8;
            
                    switch ($numMes) {
                        case 1:
                            $result = 'Janeiro';
                            break;
                        case 2:
                            $result = 'Fevereiro';
                            break;
                        case 3:
                            $result = 'Março';
                            break;
                        case 4:
                            $result = 'Abril';
                            break;
                        case 5:
                            $result = 'Maio';
                            break;
                        case 6:
                            $result = 'Junho';
                            break;
                        case 7:
                            $result = 'Julho';
                            break;
                        case 8:
                            $result = 'Agosto';
                            break;
                        case 9:
                            $result = 'Setembro';
                            break;
                        case 10:
                            $result = 'Outubro';
                            break;
                        case 11:
                            $result = 'Novembro';
                            break;
                        case 12:
                            $result = 'Dezembro';
                            break;
                        default:
                            $result = 'Não é um Mês Válido';
                    }
                    echo $result;
        ?>
    </body>

</html>