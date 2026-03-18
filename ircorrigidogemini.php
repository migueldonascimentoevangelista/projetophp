<?php 
    $sal = 3500;

    // Adicionado o $ antes de todas as variáveis 'sal'
    if ($sal <= 2428.00) {
        $porcent = 0;
    } elseif ($sal > 2428.00 && $sal <= 2826.65) {
        $porcent = 0.075;
    } elseif ($sal > 2826.65 && $sal <= 3751.05) {
        $porcent = 0.15;
    } elseif ($sal > 3751.05 && $sal <= 4664.68) {
        $porcent = 0.225;
    } else {
        $porcent = 0.275;
    }

    echo "Salário Bruto: R$ " . $sal . "<br>";
    // Adicionado pontos para concatenar a porcentagem corretamente
    echo "Porcentagem de desconto: " . ($porcent * 100) . "%<br>";
    echo "Valor do desconto: R$ " . ($sal * $porcent) . "<br>";
    echo "Salário Líquido: R$ " . ($sal - ($sal * $porcent));
?>

<!-- Seu código tem alguns erros de sintaxe que vão impedir a execução, principalmente a falta do símbolo $ nas variáveis e alguns erros de concatenação no echo.

Aqui estão os pontos principais que precisam de correção:

**Variáveis sem $**: No PHP, toda vez que você chama uma variável (como dentro do if), ela precisa do cifrão. Exemplo: if ($sal <= ...) em vez de if (sal <= ...).

Comparações incompletas: No elseif, você não pode colocar apenas && <= 2826.65. Você precisa repetir a variável: && $sal <= 2826.65.

Concatenação e Strings: Para juntar texto e cálculos no echo, usamos o ponto (.). No caso da porcentagem, faltou um ponto antes do símbolo de "%".

O que eu mudei:
Correção do IF: Agora o PHP entende o que comparar em ambos os lados do operador &&.

Tags <br>: Adicionei quebras de linha para que o resultado não apareça todo grudado na tela.

Parênteses nos Cálculos: Coloquei os cálculos entre parênteses dentro do echo para garantir que o PHP resolva a conta antes de tentar exibir o texto.

Dica extra: Se você estiver calculando o IRRF (Imposto de Renda) real do Brasil, lembre-se que o cálculo oficial não é apenas uma porcentagem direta sobre o total; existe uma "parcela a deduzir" para cada faixa. Se precisar de ajuda para implementar a lógica oficial, é só falar!

Gostaria que eu adaptasse esse código para incluir as parcelas a deduzir do IRRF oficial? -->