<?php

function obterPalavra() {
    $palavras = ["programacao", "php", "jogo", "computador", "desenvolvimento"]; //aqui deve se colocar as palavras na qual quer que pode ser que seja
    return $palavras[array_rand($palavras)];
}

function exibirPalavra($palavra, $letrasTentadas) {
    $exibicao = "";
    for ($i = 0; $i < strlen($palavra); $i++) {
        if (in_array($palavra[$i], $letrasTentadas)) {
            $exibicao .= $palavra[$i] . " ";
        } else {
            $exibicao .= "_ ";
        }
    }
    return $exibicao;
}

function jogarForca() {
    $palavra = obterPalavra();  //escolhe a palavra aleatória
    $letrasTentadas = [];  
    $tentativas = 6;  //tentativas restantes, podendo ser alterado

    echo "Bem-vindo ao Jogo da Forca!\n";
    echo "Adivinhe a palavra!\n\n";

    while ($tentativas > 0) {
        echo "Palavra: " . exibirPalavra($palavra, $letrasTentadas) . "\n";
        echo "Tentativas restantes: $tentativas\n\n";
        echo "Letras já tentadas: " . implode(", ", $letrasTentadas) . "\n";
        echo "Digite uma letra: ";
        
        $tentativa = strtolower(trim(fgets(STDIN)));

        if (strlen($tentativa) != 1 || !ctype_alpha($tentativa)) {
            echo "Por favor, digite uma letra válida.\n";
            continue;
        }

        if (in_array($tentativa, $letrasTentadas)) {
            echo "Você já tentou essa letra.\n";
            continue;
        }

        $letrasTentadas[] = $tentativa;

        if (strpos($palavra, $tentativa) === false) {
            $tentativas--;
            echo "A letra '$tentativa' não está na palavra.\n";
        } else {
            echo "A letra '$tentativa' está na palavra!\n";
        }

        if (count(array_diff(str_split($palavra), $letrasTentadas)) == 0) {
            echo "Parabéns! Você adivinhou a palavra: $palavra\n";
            return;
        }
    }

    echo "Você perdeu! A palavra era: $palavra\n";
}

jogarForca();
?>
