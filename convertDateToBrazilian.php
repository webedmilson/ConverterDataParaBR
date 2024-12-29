<?php

function convertDateToBrazilian($dateAmericanFormat) {
    // Verifica se a data está no formato correto YYYY-MM-DD
    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $dateAmericanFormat)) {
        // Divide a string da data em ano, mês e dia
        list($year, $month, $day) = explode('-', $dateAmericanFormat);
        
        // Retorna no formato DD/MM/YYYY
        return "$day/$month/$year";
    } else {
        // Caso a data não esteja no formato correto, retorna um erro
        return "Data inválida. Por favor, insira no formato YYYY-MM-DD.";
    }
}

// Exemplo de uso
$dateAmerican = "2024-12-29";
$dateBrazilian = convertDateToBrazilian($dateAmerican);

echo "Data no formato brasileiro: $dateBrazilian"; // Saída: Data no formato brasileiro: 29/12/2024

?>
