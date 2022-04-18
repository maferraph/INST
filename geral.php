<?PHP

function InsereTexto($Texto)
{
   $paragrafo = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
   echo "<P><FONT CLASS=\"FX\">$paragrafo $Texto</FONT>\n";
}

function InsereTitulo($Texto)
{
   echo "<FONT CLASS=\"FS\">$Texto</FONT>\n";
}

function InsereLista($Item , $Texto)
{
   echo "<UL><LI><FONT CLASS=\"FX\"><B>$Item </B>$Texto</FONT></LI></UL>\n";
}

function InsereImagem($Imagem,$Nome)
{
   //global $Largura , $Comprimento;
   //$Tamanho = GetImageSize ($Imagem);
   //$TmpLar = (int) ($Tamanho[0] * ( $Largura / 1024));
   //$TmpCom = (int) ($Tamanho[1] * ( $Comprimento / 768));
   echo "<BR><BR><CENTER><IMG SRC=\"$Imagem\" border=0 alt=\"$Nome\"></CENTER><BR>\n";
}

function InsereAncoraTexto($ArquivoDestino,$Texto,$BarraStatus)
{
   echo "<A HREF=\"$ArquivoDestino\" TARGET=\"FR_2\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"$BarraStatus\")'>$Texto</A>\n";
}

function InsereAncoraImagem($ArquivoDestino,$Imagem,$BarraStatus)
{
   echo "<A HREF=\"$ArquivoDestino\" TARGET=\"_top\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"$BarraStatus\")'><IMG src=\"$Imagem\" border=0 alt=\"$BarraStatus\"></A>\n";
}

function InsereAncoraImagemExterna($ArquivoDestino,$Imagem,$BarraStatus)
{
   global $Largura , $Comprimento;
   $Tamanho = GetImageSize ($Imagem);
   $TmpLar = (int) ($Tamanho[0] * ( $Largura / 1024));
   $TmpCom = (int) ($Tamanho[1] * ( $Comprimento / 768));
   echo "<A HREF=\"$ArquivoDestino\" TARGET=\"_blank\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"$BarraStatus\")'><IMG src='$Imagem' border=0 alt='$BarraStatus' width=$TmpLar height=$TmpCom ></A>\n";
}

function InsereCabecalho($Titulo)
{
   if($Titulo == "" )
   {
      echo "<HTML><HEAD><TITLE>Projeto de Instrumenta��o 2001 - Engenharia Mecatr�nica UNIP</TITLE>\n";
   }
   else
   {
      echo "<HTML><HEAD><TITLE>$Titulo</TITLE>\n";
   }
   echo "<LINK HREF=\"inst.ico\" REL=\"SHORTCUT ICON\">\n";
   echo "<LINK HREF=\"estilos.css\" REL=\"stylesheet\" TYPE=\"text/css\">\n";
   echo "<SCRIPT LANGUAGE=\"javascript\" SRC=\"geral.js\"></SCRIPT>\n";
   InsereMetaTags();
   echo "</HEAD>\n";
}

function InsereRodape()
{
   echo "<TABLE CELLPADDING=\"0\" CELLSPACING=\"0\" WIDTH=\"100%\" BORDER=\"0\" VALIGN=\"TOP\"><TR VALIGN=\"MIDDLE\">\n";
   echo "<TD ALIGN=\"LEFT\" BGCOLOR=\"#808080\" VALIGN=\"MIDDLE\">\n";
   echo "<FONT CLASS=\"F1\"><CENTER>Os direitos sobre este trabalho pertencem aos alunos e professores da UNIP - Universidade Paulista</CENTER></FONT>\n";
   echo "</TD></TR></TBODY></TABLE>\n";
}

function InsereMetaTags()
{
echo "<META NAME=\"Title\" CONTENT=\"Projeto de Instrumenta��o 2001 - Engenharia Mecatr�nica UNIP\">
<META NAME=\"ROBOTS\" CONTENT=\"INDEX,FOLLOW\">
<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html; charset=iso-8859-1\">
<META NAME=\"Language\" CONTENT=\"Portuguese\">
<META HTTP-EQUIV=\"Expires\" CONTENT=\"0\">
<META NAME=\"description\" CONTENT=\"Projeto de Instrumenta��o de alunos da UNIP - Universidade Paulista, sobre Automa��o e Controle - Sistemas de Gest�o, abordando os temas: automa��o industrial CAD / CAM / CAE, automa��o comercial, redes locais - conectividade, controle de atuadores el�tricos, controle de m�quinas de corrente cont�nua - chopper, controle de velocidade e acelera��o, controle de m�quinas de corrente alternada e s�ncrona de motor por indu��o, sistemas de gest�o - SAP / CRM, protocolos de comunica��o e fieldbus.\">
<META NAME=\"keywords\" CONTENT=\"Projeto, Trabalho, Unip, Universidade Paulista, Instrumenta��o, Automa��o, Controle, Sistemas de Gest�o, automa��o industrial CAD / CAM / CAE, automa��o comercial, redes locais - conectividade, controle de atuadores el�tricos, controle de m�quinas de corrente cont�nua - chopper, controle de velocidade e acelera��o, controle de m�quinas de corrente alternada e s�ncrona de motor por indu��o, sistemas de gest�o - SAP / CRM, protocolos de comunica��o, fieldbus\">
<META HTTP-EQUIV=\"author\" CONTENT=\"Maur�cio Fernandes Raphael\">
<META HTTP-EQUIV=\"Reply-to\" CONTENT=\"mauricio@instrumentacaol.port5.com\">
<META NAME=\"Classification\" CONTENT=\"Engenharia\">
<META NAME=\"Doc-rights\" CONTENT=\"Unip - Universidade Paulista\">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
\n";
}

function ContadordePagina()
{
   echo "<CENTER><FONT CLASS=\"CON\">Visitas desde Mar�o/2004</FONT></CENTER>\n";
   echo "<CENTER><TABLE bgColor=\"#FFFFFF\" CELLPADDING=0 CELLSPACING=0 WIDTH=\"20%\" BORDER=1 VALIGN=\"TOP\">\n";
   echo "<TR VALIGN=\"MIDDLE\"><TD ALIGN=\"CENTER\">\n";
   $tmp = PegaContador("inst");
   $tamtmp = strlen($tmp);
   $diftmp = 7 - $tamtmp;
   for($i=1 ; $i < $diftmp ; $i++)
   {
      echo "<IMG SRC=\"0.gif\" border=0>";
   }
   for($i=0 ; $i < $tamtmp ; $i++)
   {
      echo "<IMG SRC=\"$tmp[$i].gif\" border=0>";
   }
   echo "</TD></TR></TABLE></CENTER>\n";
}

function PegaContador($tipo)
{
   //constante MySQL
   $ERRO_CONECTAR_BD = "N�o foi poss�vel estabelecer a conex�o com o banco de dados." ;
   $ERRO_ABRIR_BD = "N�o foi poss�vel abrir o banco de dados." ;
   $ERRO_CONSULTAR_BD = "N�o foi poss�vel realizar a consulta ao banco de dados." ;
   $ERRO_ALTERAR_BD = "N�o foi poss�vel realizar a altera��o no banco de dados." ;
   $ERRO_INSERIR_BD = "N�o foi poss�vel inserir dados no banco de dados." ;
   $ERRO_APAGAR_BD = "N�o foi poss�vel deletar dados no banco de dados." ;
   $ERRO_FECHAR_BD = "N�o foi poss�vel encerrar conex�o com o banco de dados." ;
   //abre conexao com MySQL
   $host = "localhost:3306";
   $usuario = "engenhariaunip_it_db";
   $senha = "";
   $bd_conexao = mysql_connect($host,$usuario,$senha) or die ($ERRO_CONECTAR_BD);
   //consulta indice
   $bd_bancodedados = mysql_select_db($usuario,$bd_conexao) or die ($ERRO_ABRIR_BD);
   $bd_query = "SELECT * FROM contador WHERE site = '$tipo'";
   $bd_consulta = mysql_query($bd_query,$bd_conexao) or die ($ERRO_CONSULTAR_BD);
   $bd_resultado = mysql_fetch_object($bd_consulta);
   $int_visita =  $bd_resultado->visitas + 1;
   $bd_query = "UPDATE contador SET visitas = '$int_visita' WHERE site = '$tipo'";
   $bd_alteracao = mysql_query($bd_query,$bd_conexao) or die ($ERRO_ALTERAR_BD);
   $bd_fecha = mysql_close($bd_conexao) or die ($ERRO_FECHAR_BD);
   if( is_numeric($int_visita) ==  true )
   {
      $int_visita = (string) $int_visita;
   }
   else
   {
      $int_visita = "-";
   }
   return $int_visita;
}

function InsereDownload()
{
   echo "<TABLE CELLPADDING=\"0\" CELLSPACING=\"0\" WIDTH=\"100%\" BORDER=\"1\" VALIGN=\"TOP\">\n";
   echo "<TR VALIGN=\"MIDDLE\">\n";
   echo "<TD ALIGN=\"CENTER\" VALIGN=\"MIDDLE\"><FONT CLASS=\"FT\">Item</FONT></TD>\n";
   echo "<TD ALIGN=\"CENTER\" VALIGN=\"MIDDLE\"><FONT CLASS=\"FT\">Downloads</FONT></TD>\n";
   echo "<TD ALIGN=\"CENTER\" VALIGN=\"MIDDLE\"><FONT CLASS=\"FT\">Link</FONT></TD>\n";
   echo "</TR><TR VALIGN=\"MIDDLE\">\n";
//   $tmp = PegaContador("tra");
   echo "<TD ALIGN=\"CENTER\" VALIGN=\"MIDDLE\"><FONT CLASS=\"FX\">Trabalho</FONT></TD>\n";
   echo "<TD ALIGN=\"CENTER\" VALIGN=\"MIDDLE\">\n";
//   $tamtmp = strlen($tmp);
//   for($i=0 ; $i < $tamtmp ; $i++)
//   {
//      echo "<IMG SRC=\"$tmp[$i].gif\" border=0>";
//   }
   echo "</TD><TD ALIGN=\"CENTER\" VALIGN=\"MIDDLE\"><FONT CLASS=\"FX\">(n�o dispon�vel)\n";
//   InsereLinkDownload("cred.php?download=tra");
   echo "</FONT></TD>\n";
   echo "</TR><TR VALIGN=\"MIDDLE\">\n";
//   $tmp = PegaContador("apr");
   echo "<TD ALIGN=\"CENTER\" VALIGN=\"MIDDLE\"><FONT CLASS=\"FX\">Apresenta��o</FONT></TD>\n";
   echo "<TD ALIGN=\"CENTER\" VALIGN=\"MIDDLE\">\n";
//   $tamtmp = strlen($tmp);
//   for($i=0 ; $i < $tamtmp ; $i++)
//   {
//      echo "<IMG SRC=\"$tmp[$i].gif\" border=0>";
//   }
   echo "</TD><TD ALIGN=\"CENTER\" VALIGN=\"MIDDLE\"><FONT CLASS=\"FX\">(n�o dispon�vel)\n";
//   InsereLinkDownload("cred.php?download=apr");
   echo "</FONT></TD>\n";
   echo "</TR></TABLE>\n";
}

function InsereLinkDownload($pagina)
{
   echo "<A HREF=\"$pagina\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"Iniciar download\")'>Iniciar download</A>";
}


?>