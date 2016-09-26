# CF_CNPJ - Versão 1.0 (23/07/01)
	
Descrição: tag para verificação de consistência de CNPJ.  
Autor: Paulino Michelazzo - http://www.michelazzo.com.br

Parâmetros da tag:

- CNPJ (obrigatório) Número do CNPJ a testar
- Formato (opcional) Formatação do CNPJ (0 para CNPJ formatado, 1 para não formatado. Default 1)

Retorno da tag:

- CNPJ_Status - boolean (CNPJ ok ou não)
- CNPJ_Error - integer (tipos de erros)
 - 0 = Sem erros
 - 1 = CNPJ não informado
 - 2 = CNPJ com número de caracteres inválido
 - 3 = CNPJ Inválido

Arquivos do pacote:

- CNPJ.CFM - Tag de verificação de consistência de CNPJ
- testform.html - Formulário de exemplo para testes
- cnpjtest.cfm - Retorno de dados da tag
- leiame.md - Este documento

Licença de uso:

Esta tag é fornecida "no estado", podendo ser utilizada para quaisquer fins e por qualquer pessoa sem nenhum tipo de pagamento para seu autor. Assim sendo, não existe nenhuma responsabilidade para o autor pelo seu uso indevido ou por problemas que a mesma possa causar.

Sua distribuicão é livre de quaisquer formas, desde que o pacote original seja mantido com todos seus arquivos.
O autor reserva o direito de alterar suas funcionalidades e efetuar correcões sem prévio aviso.
Para contato com o autor ou reportagem de problemas, utilize o e-mail paulino@michelazzo.com.br.
