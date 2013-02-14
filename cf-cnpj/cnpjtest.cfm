<html>
<head>
	<title>CF_CNPJ</title>
</head>
<body>
<style media="screen" type="text/css">
	Div{font-family: Verdana; font-size: 12px;}
</style>
<CF_cnpj
	cnpj = #form.cnpj#
	formato = #form.formato#>
	
<div align="center">
	<cfoutput>
		#iif(CNPJ_Status IS 1,DE("CNPJ V&aacute;lido"),DE("CNPJ Inv&aacute;lido"))#
		<p>
		<cfif CNPJ_Error IS 0>
			Nenhum erro
		<cfelseif CNPJ_Error IS 1>
			Valor foi ativado o par&acirc;metro mandat&oacute;rio CNPJ
		<cfelseif CNPJ_Error IS 2>
			Tamanho do CNPJ inv&aacute;lido
		<cfelseif CNPJ_Error IS 3>
			CNPJ Inv&aacute;lido
		</cfif>
	</cfoutput>
</div>
</body>
</html>
