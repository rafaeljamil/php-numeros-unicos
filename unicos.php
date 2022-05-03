<?php
    // 3 - Escreva um programa
    // Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. Depois informe qual ou quais número(s) não se repetiram.

    // Exemplo

    // Array sorteado = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]
    // Os números que não se repetem são o 4 e 7. 

    // A função que cria um array aleatório com 20 números de 1 a 10.
    function criaArray(){
        // Primeiro temos um array vazio
        $randomArray = array();
        // Depois temos um laço com 20 voltas
        for($i = 0; $i <=20; $i ++){
            // Pra cada volta criamos um número aleatório com rand()
            $numero = rand(1,10);
            // E então empurramos ele pra dentro do nosso array
            array_push($randomArray, $numero);
        }
        // Retornamos o array depois do laço se completar
        return $randomArray;
    }

    // Esta função apenas ajuda a imprimir os arrays em linha de forma mais organizada
    function prettifyArray($array){
        // Inicializamos uma string vazia
        $returnStr = "";
        // Adicionamos cada item do array a nossa string acompanhado de uma vírgula e espaço
        foreach($array as $item){
            $returnStr .= $item . ", ";
        }
        // Retornamos a string completa
        return $returnStr;
    }

    // Esta função retorna um array com os números que aparecem apenas uma vez
    function unicos($array){
        // Primeiro inicializamos um array vazio
        $unicos = [];
        // Depois contamos quantas vezes cada número aparece com a função array_count_values()
        // que nos retorna outro array, onde a chave é o número checado e o valor é quantas vezes
        // ele apareceu
        $count = array_count_values($array);
        // No laço foreach separamos a chave e o valor
        foreach($count as $key => $value){
            // Pra cada chave (número no primeiro array) que tenha valor 1 (quantas vezes aparece)
            // empurramos a chave para o array $unicos
            if($value == 1){
                array_push($unicos, $key);
            }
        }
        // Por fim retornamos o array com os números que aparecem apenas uma vez
        return $unicos;
    }

    // Criando nosso array aleatório
    $meuArray = criaArray();

    // Criando nosso array de números que aparecem uma vez
    $semRepetidos = unicos($meuArray);

    // Mostrando os arrays no console
    printf("Array completo: \n" . prettifyArray($meuArray) . "\n");
    printf("Array sem os repetidos: \n" . prettifyArray($semRepetidos) . "\n");
?>