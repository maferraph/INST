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
      echo "<TR VALIGN=\"MIDDLE\"><TD ALIGN=\"LEFT\" BGCOLOR=\"#FF0000\"><A HREF=\"http://www.instrumentacao.port5.com/\" TARGET=\"FR_1\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"Página inicial\")'><IMG BORDER=0 SRC=\"logo.jpg\" BORDER=0></A></TD>\n";
      echo "<TD ALIGN=\"RIGHT\" BGCOLOR=\"#FF0000\"><A HREF=\"http://www.unip.br\" TARGET=\"FR_1\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"Vai para site da Unip\")'><IMG SRC=\"unip.gif\" BORDER=0></A></TD></TR></TABLE>\n";
      echo "<TABLE CELLPADDING=\"0\" CELLSPACING=\"0\" WIDTH=\"100%\" BORDER=\"0\" VALIGN=\"TOP\"><TR VALIGN=\"TOP\">\n";
      echo "<TD ALIGN=\"LEFT\" HALIGN=\"CENTER\" BGCOLOR=\"#808080\" VALIGN=\"MIDDLE\" HEIGHT=\"20\">\n";
      echo "<FONT CLASS=\"F1\">&nbsp;&nbsp;</FONT>\n";
      echo "<A HREF=\"traba.php\" TARGET=\"FR_2\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"Trabalho entregue ao professor\")'><FONT CLASS=\"F1\">Trabalho</FONT></A>\n";
      echo $espaco;
      echo "<A HREF=\"aprese.php\" TARGET=\"FR_2\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"Apresentação realizada em classe\")'><FONT CLASS=\"F1\">Apresentação</FONT></A>\n";
      echo $espaco;
      echo "<A HREF=\"outros.php\" TARGET=\"FR_2\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"Trabalhos e apresentações dos outros grupos da classe\")'><FONT CLASS=\"F1\">Trabalhos da Classe</FONT></A>\n";
      echo $espaco;
      echo "<A HREF=\"cred.php\" TARGET=\"FR_2\" ONMOUSEOUT='return BarraStatus(\"\")' ONMOUSEOVER='return BarraStatus(\"Créditos\")'><FONT CLASS=\"F1\">Créditos</FONT></A>\n";
      echo "</TD></TR></TBODY></TABLE>\n";
      echo "</BODY></HTML>\n";
   }
   else
   {
      InsereCabecalho("");
      echo "<BODY BACKGROUND=\"fundo.jpg\" bgColor=#FFFFFF leftMargin=0 topMargin=0 marginheight=0 marginwidth=0>\n";
      echo "<BR><BR>\n";
      InsereTexto("Este trabalho foi realizado por alunos do 5º ano de Engenharia Mecatrônica da UNIP - Universidade Paulista - unidade Bacelar - São Paulo (SP), 07 de Novembro de 2001, da disciplina de Instrumentação aplicada pelo Professor Francisco Paletta.");
      InsereTexto("Foi discutido sobre Automação e Controle - Sistemas de Gestão, onde abordamos os seguintes temas: automação industrial CAD / CAM / CAE, automação comercial, redes locais - conectividade, controle de atuadores elétricos, controle de máquinas de corrente contínua - chopper, controle de velocidade e aceleração, controle de máquinas de corrente alternada e síncrona de motor por indução, sistemas de gestão - SAP / CRM, protocolos de comunicação e fieldbus.");
      InsereImagem("image001.jpg","Automação e Controle - Sistemas de Gestão");
      ContadordePagina();
      //echo "<CENTER><A HREF=\"http://www.TheCounter.com\" TARGET=\"_top\"><IMG SRC=\"http://c3.thecounter.com/id=2408794\" ALT=\"TC\" BORDER=0></A></CENTER>\n";
      echo "<BR><BR>\n";
      InsereRodape();
      echo "</BODY></HTML>\n";
   }
}
?>