<?php
include('geral.php');
InsereCabecalho("");
echo "<BODY BACKGROUND=\"fundo.jpg\" bgColor=#FFFFFF leftMargin=0 topMargin=0 marginheight=0 marginwidth=0>\n";
echo "<BR>\n";
InsereTexto("<B>1) O que é um atuador elétrico? Quais os seus tipos de sensores e para que servem cada um deles?</B>");
InsereTexto("Atuador elétrico é um equipamento que permite a motorização controlada de válvulas, dampers e comportas entre outros equipamentos similiares a distância, através do torque de seu motor. Sensores: de torque: mostrar com que torque o motor está atuando no respectivo equipamento, de posição: mostrar onde o equipamento atuado parou , de movimento: monitorar a movimentação do equipamento atuado.");
echo "<BR>\n";
InsereTexto("<B>2) O que é ERP? Cite dois exemplos.</B>");
InsereTexto("ERP ( Enterprise Resource Planning ) é definido como uma arquitetura de software multi-modular que facilita o fluxo de informações entre todos os setores da empresa como fabricação, logística, finanças, administração e recursos humanos. Onde as  informações são reunidas em um banco de dados único, operando em uma plataforma comum que interage com um conjunto integrado de aplicações, consolidando todas as operações do negócio em um simples ambiente computacional. Podemos citar como exemplos o BPCS, o SAP R/3, BAAN e o EMS.");
echo "<BR>\n";
InsereTexto("<B>3) O que são protocolos de comunicação ?</B>");
InsereTexto("São os métodos definidos para comunicação entre pontos de maneira a tratar de todos os sete problemas que aparecem em uma transmissão de dados conforme especificação de camadas RM-OSI, realizados por hardware ou software.");
echo "<BR>\n";
InsereTexto("<B>4) Cite três análises que um software de CAE pode fazer? E três softwares utilizados em CAD/CAM/CAE?</B>");
InsereTexto("Análises: cálculo de esforços, cálculos de transferência de calor, simulação de mecanismo. Softwares de CAD/CAM/CAE: Catia, Euclid, Unigraphics.");
echo "<BR>\n";
InsereTexto("<B>5) Defina o que é Fieldbus ? Cite 3 vantagens do sistema fieldbus.</B>");
InsereTexto("É definido como sendo um sistema de comunicação digital bidirecional que permite a interligação em rede de múltiplos instrumentos diretamente no campo realizando funções de controle e monitoração de processo e estações de operação através de softwares supervisórios. Vantagens: redução de cabeamento, permite a programação de dispositivos a distância, pode prever problemas nos dispositivos antes que eles causem problemas.");
echo "<BR><BR>\n";
InsereRodape();
echo "</BODY></HTML>";
?>