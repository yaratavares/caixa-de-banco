# Caixa de Banco

Este projeto demonstra o uso de diversos conceitos e práticas recomendadas em PHP. Abaixo estão alguns dos conceitos importantes ilustrados no código.

## Conceitos Demonstrados

### Saída de Texto
- **Echo**: Usado para imprimir texto na tela.
- **PHP_EOL**: Constante que representa uma quebra de linha compatível com o sistema operacional.
- **Caracteres de escape**: `\n` para nova linha e `\t` para tabulação.

### Arrays Associativos
- Permitem associar chaves a valores, criando um mapa de dados.

### Entrada via Linha de Comando
- **$argc**: Representa o número de argumentos passados na linha de comando.
- **$argv**: Array contendo os argumentos passados na linha de comando.

### Loops
- **For**: Utilizado para iterações com contagem.
- **Foreach**: Utilizado para iterar sobre arrays.

### Funções de Array
- **array_sum**: Soma os valores de um array.
- **count**: Conta o número de elementos em um array.

### Condicionais
- **If, elseif, else**: Estruturas condicionais para controle de fluxo com diferentes caminhos de execução baseados em condições.

### Expressões Match
- Introduzida no PHP 8, oferece uma maneira mais concisa e flexível de comparar valores do que o tradicional `switch`.

### Operador Ternário
- Uma forma compacta de escrever condicionais simples.

### Executando o Projeto

Para executar o projeto, você pode usar o servidor embutido do PHP com o comando:

```bash
php -dopcache.validate_timestamps=0 -S localhost:8080
```

Isso iniciará um servidor web local na porta 8080. Acesse http://localhost:8080 no seu navegador para ver o resultado.

## Observações

- Boas práticas de fechamento de tag PHP: Evitar fechar a tag PHP ?> em arquivos que contêm apenas código PHP para prevenir saídas inválidas.
- Precisão para operações financeiras: Uso de bibliotecas específicas para manipulação precisa de decimais é recomendada.


Este README tem como objetivo ajudar a consolidar o aprendizado dos conceitos básicos de PHP.