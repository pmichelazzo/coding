# README

*Copyleft: Paulino Michelazzo
Data: 25/08/2011
Versão: 1.0*

Esta lista de países em Português do Brasil foi compilada por Paulino Michelazzo (paulino@michelazzo.com.br) e está disponível sob a licença Creative Commons Atribuição-Uso não-comercial-Compartilhamento pela mesma licença 3.0 que pode ser vista em http://creativecommons.org/licenses/by-nc-sa/3.0/deed.pt_BR

Não existe nenhuma garantia que esta lista representa os reais países geograficamente ou politicamente divididos, mas ela é considerada completa pois inclui todas as nações do mundo e também diversos territórios e ilhas.

Sua principal intenção é oferecer uma forma simples de preencher campos de selecionamento de países para tipos de conteúdo de Drupal. Entretanto é possível usá-la em outros sistemas, exportando-a em uma planilha e fazendo as alterações necessárias.

OBS: estes arquivos já contém o Sudão do Sul, país reconhecido em 14/07/2011

## DESCRIÇÃO DOS ARQUIVOS

O arquivo **drupal.txt** contém a lista de países em ordem alfabética de nomes, dois caracteres que representam o código do país de acordo com a norma ISO 3166-1 alfa-2 [1] e um caractere separador (|) entre seu código e seu nome. Esta divisão é usada para a inserção do conteúdo do arquivo em um campo de texto para a criação de uma caixa de seleção (select box) que irá acrescentar a tabela do banco de dados SOMENTE o código do país e não seu nome. Com isso o tamanho do campo é reduzido (somente 2 caracteres). 

O arquivo **paises.txt** é uma lista de países que contém somente o nome dos países, podendo ser usada em qualquer aplicativo e/ou sistema que demande uma listagem completa.

Os arquivos **paises.ods** e **paises.xls** são planilhas em ODF e Excel, respectivamente, que contém a mesma lista de países com os códigos de duas e três letras.

## COMO USAR NO DRUPAL

- crie um campo CCK de tipo texto e selecione como elemento do formulário a Lista de Seleção
- Na área de Valores Permitidos do campo criado, copie o conteúdo do arquivo drupal.txt e cole no mesmo
- salve o campo e use-o!

## DÚVIDAS E PROBLEMAS

Entre em contato pelo e-mail paulino@michelazzo.com.br

## REFERÊNCIAS

[1] http://pt.wikipedia.org/wiki/ISO_3166-1_alfa-2