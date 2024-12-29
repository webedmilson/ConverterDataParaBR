# Conversor de Formato de Data (Americano para Brasileiro)

Este repositório contém uma função PHP para converter datas do formato americano (`YYYY-MM-DD`) para o formato brasileiro (`DD/MM/YYYY`).

## Funcionalidades

- Função PHP simples e reutilizável.
- Valida o formato da data de entrada.
- Retorna uma mensagem de erro amigável para formatos inválidos.

## Uso

### Função

A função principal é:

```php
function convertDateToBrazilian($dateAmericanFormat) {
    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $dateAmericanFormat)) {
        list($year, $month, $day) = explode('-', $dateAmericanFormat);
        return "$day/$month/$year";
    } else {
        return "Data inválida. Por favor, insira no formato YYYY-MM-DD.";
    }
}
```

### Exemplo

Aqui está um exemplo de como usar a função:

```php
$dateAmerican = "2024-12-29";
$dateBrazilian = convertDateToBrazilian($dateAmerican);

echo "Data no formato brasileiro: $dateBrazilian"; // Saída: Data no formato brasileiro: 29/12/2024
```

## Instalação

1. Clone o repositório:
   ```bash
   git clone [https://github.com/webedmilson/convert-date-format.git](https://github.com/webedmilson/ConverterDataParaBR)
   ```
2. Inclua o arquivo PHP no seu projeto.

## Contribuições

Fique à vontade para abrir issues ou enviar pull requests com melhorias e novas funcionalidades.

## Licença

Este projeto está licenciado sob a Licença MIT. Consulte o arquivo `LICENSE` para mais detalhes.

## Autor

Desenvolvido por [Edmilson Rodrigues Julio](https://github.com/webedmilson).
