<?php

include('geral.php');

if(strlen($pag) == 0 )
{
   InsereCabecalho("");
   echo "<FRAMESET rows=\"110,*\" frameborder=0 framespacing=0>\n";
   echo "<FRAME name=FR_1 marginheight=0 marginwidth=0 frameborder=0 noresize src=\"index.php?pag=cab\" scrolling=NO background=\"fundo.jpg\">\n";
   echo "<FRAME name=FR_2 marginheigh=0 marginwidth=0 frameborder=0 src=\"index.php?pag=ent\" scrolling=yes>\n";
   echo "</FRAMESET></html>";
}
else
{
   if($pag == "cab" )
   {
      InsereCabecalho("");
      echo "<BODY background=\"fundo.jpg\">\n";
      $espaco = "<FONT CLASS=\"F1\">&nbsp;&nbsp;|&nbsp;&nbsp;</FONT>\n";
      echo "<TABLE BGCOLOR=\"#FF0000\" CELLPADDING=\"0\" CELLSPACING=\"0\" WIDTH=\"100%\" BORDER=\"0\" VALIGN=\"TOP\">\n";
      echo "<TR VALIGN=\"MIDDLE\"><TD ALIGN=\"LEFT\" BGCOLOR=\"#FF0000\"><A HREF=\"http://www.instrumentacao.port5.com/\" TARGET=\"FR_1\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"P�gina inicial\")'><IMG BORDER=0 SRC=\"logo.jpg\" BORDER=0></A></TD>\n";
      echo "<TD ALIGN=\"RIGHT\" BGCOLOR=\"#FF0000\"><A HREF=\"http://www.unip.br\" TARGET=\"FR_1\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"Vai para site da Unip\")'><IMG SRC=\"unip.gif\" BORDER=0></A></TD></TR></TABLE>\n";
      echo "<TABLE CELLPADDING=\"0\" CELLSPACING=\"0\" WIDTH=\"100%\" BORDER=\"0\" VALIGN=\"TOP\"><TR VALIGN=\"TOP\">\n";
      echo "<TD ALIGN=\"LEFT\" HALIGN=\"CENTER\" BGCOLOR=\"#808080\" VALIGN=\"MIDDLE\" HEIGHT=\"20\">\n";
      echo "<FONT CLASS=\"F1\">&nbsp;&nbsp;</FONT>\n";
      echo "<A HREF=\"traba.php\" TARGET=\"FR_2\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"Trabalho entregue ao professor\")'><FONT CLASS=\"F1\">Trabalho</FONT></A>\n";
      echo $espaco;
      echo "<A HREF=\"aprese.php\" TARGET=\"FR_2\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"Apresenta��o realizada em classe\")'><FONT CLASS=\"F1\">Apresenta��o</FONT></A>\n";
      echo $espaco;
      echo "<A HREF=\"outros.php\" TARGET=\"FR_2\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"Trabalhos e apresenta��es dos outros grupos da classe\")'><FONT CLASS=\"F1\">Trabalhos da Classe</FONT></A>\n";
      echo $espaco;
      echo "<A HREF=\"cred.php\" TARGET=\"FR_2\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"Cr�ditos\")'><FONT CLASS=\"F1\">Cr�ditos</FONT></A>\n";
      echo "</TD></TR></TBODY></TABLE>\n";
      echo "</BODY></HTML>\n";
   }
   else
   {
      InsereCabecalho("");
      echo "<BODY BACKGROUND=\"fundo.jpg\" bgColor=#FFFFFF leftMargin=0 topMargin=0 marginheight=0 marginwidth=0>\n";
      echo "<BR><BR>\n";
      InsereTexto("Este trabalho foi realizado por alunos do 5� ano de Engenharia Mecatr�nica da UNIP - Universidade Paulista - unidade Bacelar - S�o Paulo (SP), 07 de Novembro de 2001, da disciplina de Instrumenta��o aplicada pelo Professor Francisco Paletta.");
      InsereTexto("Foi discutido sobre Automa��o e Controle - Sistemas de Gest�o, onde abordamos os seguintes temas: automa��o industrial CAD / CAM / CAE, automa��o comercial, redes locais - conectividade, controle de atuadores el�tricos, controle de m�quinas de corrente cont�nua - chopper, controle de velocidade e acelera��o, controle de m�quinas de corrente alternada e s�ncrona de motor por indu��o, sistemas de gest�o - SAP / CRM, protocolos de comunica��o e fieldbus.");
      InsereImagem("image001.jpg","Automa��o e Controle - Sistemas de Gest�o");
      ContadordePagina();
      //echo "<CENTER><A HREF=\"http://www.TheCounter.com\" TARGET=\"_top\"><IMG SRC=\"http://c3.thecounter.com/id=2408794\" ALT=\"TC\" BORDER=0></A></CENTER>\n";
      echo "<BR><BR>\n";
      InsereRodape();
      echo "</BODY></HTML>\n";
   }
}
?>