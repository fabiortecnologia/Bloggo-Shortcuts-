<?php

  $input = "You _should_ see the new walrus at the zoo!
  Move it from *Accounts Payable* to *Receiving*.
  I saw _Chelydra serpentina_ in *Centennial Park*.
  _ _ __ _ yabba dabba _ * dooooo * ****
  _now_I_know_*my*_ABC_next_time_*sing*it_with_me";

  // Divide as linhas usando a quebra de linha como delimitador
  $lines = explode("\n", $input);

  foreach ($lines as $line) {
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
