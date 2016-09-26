CF_CNPJ - Versao 1.0 (23/07/01)
	Descricao:
		Tag para verificacao de consistencia de CNPJ.
	Autor:
		Paulino Michelazzo - http://www.michelazzo.com.br
			
	Parametros da tag:
		CNPJ (obrigatorio) Numero do CNPJ a testar
		Formato (opcional) Formatacao do CNPJ (0 para CNPJ formatado, 1 para nao formatado. Default 1)
		
	Retorno da TAG:
		CNPJ_Status - boolean (cnpj ok ou nao)
		CNPJ_Error - integer (tipos de erros)
			0 = Sem erros
			1 = CNPJ nao informado
			2 = CNPJ com numero de caracteres invalido
			3 = CNPJ Invalido


ARQUIVOS DO PACOTE:
CNPJ.CFM - Tag de verificacao de consistencia de CNPJ
testform.html - Formulario de exemplo para testes
cnpjtest.cfm - Retorno de dados da Tag
Leiame.txt - Este documento

LICENCA DE USO:
Esta TAG e fornecida "no estado", podendo ser utilizada para quaisquer fins e por qualquer pessoa sem nenhum tipo de pagamento para seu autor. Assim sendo, nao existe nenhuma responsabilidade para o autor pelo seu uso indevido ou por problemas que a mesma possa causar.
Sua distribuicao e livre de quaisquer formas, desde que o pacote original seja mantido com todos seus arquivos.
O autor reserva o direito de alterar suas funcionalidades e efetuar correcoes sem previo aviso.
Para contato com o autor ou reportagem de problemas, utilize o e-mail paulino@michelazzo.com.br.
