<html>
    <header>
        <title>Cadastro</title>
    </header>
    <body>
        <?php
        require_once 'Pessoa..php';

        /*
        $pessoa1 = new Pessoa("Adriano", 37, "Castanho", "Masculino", 1.7, 90);

        echo "<p>Nome: {$pessoa1->getNome()} </p>";
        echo "<p>Idade: {$pessoa1->getIdade()} </p>";
        echo "<p>Cor dos Olhos: {$pessoa1->getcorDosOlhos()} </p>";
        echo "<p>Genero: {$pessoa1->getgenero()} </p>";
        echo "<p>Altura: {$pessoa1->getaltura()} </p>";
        echo "<p>Peso: {$pessoa1->getpeso()} </p>";
        */

        $pessoa1 = new Pessoa("Adriano","Castanho", "Masculino");
        $pessoa1->setIdade(45)
                ->setAltura(1.78)
                ->setPeso(45);

                echo "<p>Nome: {$pessoa1->getNome()} </p>";
                echo "<p>Idade: {$pessoa1->getIdade()} </p>";
                echo "<p>Cor dos Olhos: {$pessoa1->getcorDosOlhos()} </p>";
                echo "<p>Genero: {$pessoa1->getgenero()} </p>";
                echo "<p>Altura: {$pessoa1->getaltura()} </p>";
                echo "<p>Peso: {$pessoa1->getpeso()} </p>";

        ?>
    </body>
</html>