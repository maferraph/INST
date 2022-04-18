<?php

include('geral.php');

InsereCabecalho("");
echo "<BODY BACKGROUND=\"fundo.jpg\" bgColor=#FFFFFF leftMargin=0 topMargin=0 marginheight=0 marginwidth=0>\n";

if(strlen($slide) == 0 )
{
   echo "<BR>";
   InsereTexto("Abaixo mostramos os 137 slides que usamos na apresentação do trabalho em classe:");
   echo "<BR>";
   echo "<BR>";
   echo "<CENTER>";
   InsereAncoraTexto("aprese.php?slide=1","Exibe apresentação - slide por slide","Exibe apresentação - slide por slide");
   echo "<BR>";
   InsereAncoraTexto("aprese.php?slide=todos","Exibe apresentação - todos slides","Exibe apresentação - todos slides");
   echo "</CENTER>";
}
else
{
   if($slide == "todos" )
   {
      for( $i=1 ; $i <= 137 ; $i++)
      {
         InsereImagem("Slide$i.JPG","Slide $i");
      }
   }
   else
   {
      InsereImagem("Slide$slide.JPG","Slide $slide");
      if($slide == 1 )
      {
         InserePro($slide);
      }
      elseif($slide > 1 && $slide < 137)
      {
         InsereAntPro($slide);
      }
      else
      {
         InsereAnt($slide);
      }
   }
}

echo "<BR><BR>\n";
InsereRodape();
echo "</BODY></HTML>";

function InserePro($atual)
{
   echo "<BR><CENTER>";
   $prox = $atual + 1;
   InsereAncoraTexto("aprese.php?slide=$prox","Próximo","Vai para o Próximo Slide");
   echo "<BR></CENTER>";
}

function InsereAnt($atual)
{
   echo "<BR><CENTER>";
   $prox = $atual - 1;
   InsereAncoraTexto("aprese.php?slide=$prox","Anterior","Vai para o Slide Anterior");
   echo "<BR></CENTER>";
}

function InsereAntPro($atual)
{
   echo "<BR><CENTER>";
   $prox = $atual - 1;
   InsereAncoraTexto("aprese.php?slide=$prox","Anterior","Vai para o Slide Anterior");
   echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
   $prox = $atual + 1;
   InsereAncoraTexto("aprese.php?slide=$prox","Próximo","Vai para o Próximo Slide");
   echo "<BR></CENTER>";
}

?>