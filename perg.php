<?php
include('geral.php');
InsereCabecalho("");
echo "<BODY BACKGROUND=\"fundo.jpg\" bgColor=#FFFFFF leftMargin=0 topMargin=0 marginheight=0 marginwidth=0>\n";
echo "<BR>\n";
InsereTexto("<B>1) O que � um atuador el�trico? Quais os seus tipos de sensores e para que servem cada um deles?</B>");
InsereTexto("Atuador el�trico � um equipamento que permite a motoriza��o controlada de v�lvulas, dampers e comportas entre outros equipamentos similiares a dist�ncia, atrav�s do torque de seu motor. Sensores: de torque: mostrar com que torque o motor est� atuando no respectivo equipamento, de posi��o: mostrar onde o equipamento atuado parou , de movimento: monitorar a movimenta��o do equipamento atuado.");
echo "<BR>\n";
InsereTexto("<B>2) O que � ERP? Cite dois exemplos.</B>");
InsereTexto("ERP ( Enterprise Resource Planning ) � definido como uma arquitetura de software multi-modular que facilita o fluxo de informa��es entre todos os setores da empresa como fabrica��o, log�stica, finan�as, administra��o e recursos humanos. Onde as  informa��es s�o reunidas em um banco de dados �nico, operando em uma plataforma comum que interage com um conjunto integrado de aplica��es, consolidando todas as opera��es do neg�cio em um simples ambiente computacional. Podemos citar como exemplos o BPCS, o SAP R/3, BAAN e o EMS.");
echo "<BR>\n";
InsereTexto("<B>3) O que s�o protocolos de comunica��o ?</B>");
InsereTexto("S�o os m�todos definidos para comunica��o entre pontos de maneira a tratar de todos os sete problemas que aparecem em uma transmiss�o de dados conforme especifica��o de camadas RM-OSI, realizados por hardware ou software.");
echo "<BR>\n";
InsereTexto("<B>4) Cite tr�s an�lises que um software de CAE pode fazer? E tr�s softwares utilizados em CAD/CAM/CAE?</B>");
InsereTexto("An�lises: c�lculo de esfor�os, c�lculos de transfer�ncia de calor, simula��o de mecanismo. Softwares de CAD/CAM/CAE: Catia, Euclid, Unigraphics.");
echo "<BR>\n";
InsereTexto("<B>5) Defina o que � Fieldbus ? Cite 3 vantagens do sistema fieldbus.</B>");
InsereTexto("� definido como sendo um sistema de comunica��o digital bidirecional que permite a interliga��o em rede de m�ltiplos instrumentos diretamente no campo realizando fun��es de controle e monitora��o de processo e esta��es de opera��o atrav�s de softwares supervis�rios. Vantagens: redu��o de cabeamento, permite a programa��o de dispositivos a dist�ncia, pode prever problemas nos dispositivos antes que eles causem problemas.");
echo "<BR><BR>\n";
InsereRodape();
echo "</BODY></HTML>";
?>