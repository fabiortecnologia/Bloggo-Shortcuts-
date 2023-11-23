
<?php 

while ($line) {
    // Remove quebras de linha
    $line = rtrim($line);

    // Inicializa variáveis para controle
    $italicOpen = false;
    $boldOpen = false;

    // Itera sobre cada caractere na linha
    for ($i = 0; $i < strlen($line); $i++) {
        $char = $line[$i];

        // Verifica se é um sublinhado
        if ($char === '_') {
            if (!$italicOpen) {
                echo "<i>";
                $italicOpen = true;
            } else {
                echo "</i>";
                $italicOpen = false;
            }
        }

        // Verifica se é um asterisco
        if ($char === '*') {
            if (!$boldOpen) {
                echo "<b>";
                $boldOpen = true;
            } else {
                echo "</b>";
                $boldOpen = false;
            }
        }

        // Se não for sublinhado nem asterisco, imprime o caractere normalmente
        if ($char !== '_' && $char !== '*') {
            echo $char;
        }
    }

    // Imprime quebra de linha ao final de cada caso de teste
    echo "\n";
}

?>