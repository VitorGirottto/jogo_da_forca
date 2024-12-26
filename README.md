# Jogo da Forca (PHP)

Este projeto é uma implementação simples do jogo **Forca** usando PHP. O objetivo do jogo é adivinhar a palavra secreta antes de perder todas as tentativas.

## Como jogar

1. **Objetivo**: O objetivo do jogo é adivinhar a palavra secreta, uma letra de cada vez, antes que o número de tentativas chegue a zero.
2. **Palavra Secreta**: O jogo escolhe uma palavra aleatória de uma lista de palavras predefinidas.
3. **Tentativas**: O jogador tem um número limitado de tentativas (6 tentativas).
4. **Interação**: O jogador deve adivinhar a palavra letra por letra. O programa exibe a palavra com espaços em branco para as letras não adivinhadas. O jogador deve digitar uma letra a cada rodada.
    - Se a letra for correta, ela é revelada na palavra.
    - Se a letra estiver errada, o número de tentativas restantes diminui.
5. **Vitória**: O jogo é vencido quando o jogador adivinha todas as letras da palavra secreta antes de ficar sem tentativas.
6. **Derrota**: O jogo é perdido quando o número de tentativas chega a zero e o jogador não adivinha a palavra.

## Como rodar o jogo


### Rodar no OnlineGDB

1. Acesse o link [Jogo da Forca no OnlineGDB](https://onlinegdb.com/LOvfcX9RZ).
2. Clique em "Run" para começar o jogo.
3. O jogo irá rodar no terminal, e você poderá interagir com ele digitando letras para tentar adivinhar a palavra.

### Rodar localmente

1. Clone o repositório para sua máquina:

    ```bash
    git clone https://github.com/seu-usuario/jogo-da-forca.git
    ```

2. Navegue até o diretório do projeto:

    ```bash
    cd jogo-da-forca
    ```

3. Execute o script PHP:

    ```bash
    php jogo.php
    ```

    **Nota**: Certifique-se de ter o PHP instalado em sua máquina. Caso não tenha, você pode [baixar o PHP aqui](https://www.php.net/downloads.php).

## Explicação do código

O código implementa o jogo **Forca** com as seguintes funcionalidades:

- **Função `obterPalavra()`**:
    - Retorna uma palavra aleatória a partir de um conjunto predefinido de palavras.

- **Função `exibirPalavra($palavra, $letrasTentadas)`**:
    - Exibe a palavra com as letras que foram adivinhadas e espaços ("_") para as letras que ainda não foram adivinhadas.

- **Função `jogarForca()`**:
    - Função principal que executa o jogo. O jogador tem 6 tentativas para adivinhar a palavra. O programa verifica se a letra digitada está na palavra e exibe o resultado da rodada.

## Exemplo de execução

```bash
Bem-vindo ao Jogo da Forca!
Adivinhe a palavra!

Palavra: _ _ _ _ _ 
Tentativas restantes: 6

Letras já tentadas: 
Digite uma letra: p

A letra 'p' está na palavra!
Palavra: p _ _ _ _ 
Tentativas restantes: 6

Letras já tentadas: p
Digite uma letra: a

A letra 'a' não está na palavra.
Tentativas restantes: 5

Letras já tentadas: p, a
Digite uma letra: r

A letra 'r' está na palavra!
Palavra: p r _ _ _ 
Tentativas restantes: 5

Letras já tentadas: p, a, r
Digite uma letra: o

A letra 'o' está na palavra!
Palavra: p r o _ _ 
Tentativas restantes: 5

Letras já tentadas: p, a, r, o
Digite uma letra: g

A letra 'g' está na palavra!
Palavra: p r o g _ 
Tentativas restantes: 5

Letras já tentadas: p, a, r, o, g
Digite uma letra: a

Você já tentou essa letra.
Tentativas restantes: 5

Letras já tentadas: p, a, r, o, g
Digite uma letra: m

A letra 'm' está na palavra!
Palavra: p r o g r 
Tentativas restantes: 5

Letras já tentadas: p, a, r, o, g, m
Digite uma letra: a

Você já tentou essa letra.
Tentativas restantes: 5

Letras já tentadas: p, a, r, o, g, m
Digite uma letra: c

A letra 'c' está na palavra!
Palavra: p r o g r a
Tentativas restantes: 5

Parabéns! Você adivinhou a palavra: programacao
