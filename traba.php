<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns="http://www.w3.org/TR/REC-html40">

<HEAD><TITLE>Projeto de Instrumenta��o</TITLE>

<?php
include('geral.php');
echo "<LINK HREF=\"estilos.css\" REL=\"stylesheet\" TYPE=\"text/css\">";
echo "<SCRIPT LANGUAGE=\"javascript\" SRC=\"geral.js\"></SCRIPT>";
InsereMetaTags();
echo "</HEAD>";
?>

<link rel=File-List href="./arquivos/filelist.xml">
<link rel=Preview href="./arquivos/preview.wmf">
<link rel=Edit-Time-Data href="./arquivos/editdata.mso">
<link rel=OLE-Object-Data href="./arquivos/oledata.mso">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Daniel, Fernando, Gustavo, Eduardo, Maur�cio e Ricardo</o:Author>
  <o:LastAuthor>MFR</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>271</o:TotalTime>
  <o:LastPrinted>2001-11-14T19:51:00Z</o:LastPrinted>
  <o:Created>2001-11-20T10:24:00Z</o:Created>
  <o:LastSaved>2001-11-20T10:24:00Z</o:LastSaved>
  <o:Pages>5</o:Pages>
  <o:Words>21333</o:Words>
  <o:Characters>121603</o:Characters>
  <o:Lines>1013</o:Lines>
  <o:Paragraphs>243</o:Paragraphs>
  <o:CharactersWithSpaces>149337</o:CharactersWithSpaces>
  <o:Version>9.2812</o:Version>
 </o:DocumentProperties>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:HyphenationZone>21</w:HyphenationZone>
  <w:Compatibility>
   <w:FootnoteLayoutLikeWW8/>
   <w:ShapeLayoutLikeWW8/>
   <w:AlignTablesRowByRow/>
   <w:ForgetLastTabAlignment/>
   <w:LayoutRawTableWidth/>
   <w:LayoutTableRowsApart/>
  </w:Compatibility>
 </w:WordDocument>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
@font-face
        {font-family:Wingdings;
        panose-1:5 0 0 0 0 0 0 0 0 0;
        mso-font-charset:2;
        mso-generic-font-family:auto;
        mso-font-pitch:variable;
        mso-font-signature:0 268435456 0 0 -2147483648 0;}
@font-face
        {font-family:"MS Mincho";
        panose-1:2 2 6 9 4 2 5 8 3 4;
        mso-font-alt:"\FF2D\FF33 \660E\671D";
        mso-font-charset:128;
        mso-generic-font-family:modern;
        mso-font-pitch:fixed;
        mso-font-signature:647 134676480 16 0 131231 0;}
@font-face
        {font-family:Palatia;
        mso-font-charset:0;
        mso-generic-font-family:auto;
        mso-font-pitch:variable;
        mso-font-signature:3 0 0 0 1 0;}
@font-face
        {font-family:"Arial Unicode MS";
        panose-1:2 11 6 4 2 2 2 2 2 4;
        mso-font-charset:128;
        mso-generic-font-family:swiss;
        mso-font-pitch:variable;
        mso-font-signature:-1 -369098753 63 0 4129023 0;}
@font-face
        {font-family:"TimesNewRoman\,Bold";
        panose-1:0 0 0 0 0 0 0 0 0 0;
        mso-font-charset:0;
        mso-generic-font-family:roman;
        mso-font-format:other;
        mso-font-pitch:auto;
        mso-font-signature:3 0 0 0 1 0;}
@font-face
        {font-family:Romantic;
        panose-1:0 0 4 0 0 0 0 0 0 0;
        mso-font-charset:2;
        mso-generic-font-family:auto;
        mso-font-pitch:variable;
        mso-font-signature:0 268435456 0 0 -2147483648 0;}
@font-face
        {font-family:TimesNewRoman;
        panose-1:0 0 0 0 0 0 0 0 0 0;
        mso-font-charset:0;
        mso-generic-font-family:roman;
        mso-font-format:other;
        mso-font-pitch:auto;
        mso-font-signature:3 0 0 0 1 0;}
@font-face
        {font-family:Verdana;
        panose-1:2 11 6 4 3 5 4 4 2 4;
        mso-font-charset:0;
        mso-generic-font-family:swiss;
        mso-font-pitch:variable;
        mso-font-signature:647 0 0 0 159 0;}
@font-face
        {font-family:"\@Arial Unicode MS";
        mso-font-charset:128;
        mso-generic-font-family:swiss;
        mso-font-pitch:variable;
        mso-font-signature:-1 -369098753 63 0 4129023 0;}
@font-face
        {font-family:"\@MS Mincho";
        mso-font-charset:128;
        mso-generic-font-family:modern;
        mso-font-pitch:fixed;
        mso-font-signature:647 134676480 16 0 131231 0;}
 /* Style Definitions */
p.MsoNormal, li.MsoNormal, div.MsoNormal
        {mso-style-parent:"";
        margin:0cm;
        margin-bottom:.0001pt;
        mso-pagination:widow-orphan;
        font-size:12.0pt;
        font-family:"Times New Roman";
        mso-fareast-font-family:"Times New Roman";}
h1
        {mso-style-next:Normal;
        margin:0cm;
        margin-bottom:.0001pt;
        mso-pagination:widow-orphan;
        page-break-after:avoid;
        mso-outline-level:1;
        font-size:12.0pt;
        font-family:"Times New Roman";
        mso-fareast-font-family:"Times New Roman";
        mso-font-kerning:0pt;
        font-weight:bold;}
h2
        {mso-style-next:Normal;
        margin-top:0cm;
        margin-right:5.35pt;
        margin-bottom:0cm;
        margin-left:0cm;
        margin-bottom:.0001pt;
        text-align:justify;
        mso-pagination:none;
        page-break-after:avoid;
        mso-outline-level:2;
        mso-layout-grid-align:none;
        punctuation-wrap:simple;
        text-autospace:none;
        font-size:12.0pt;
        mso-bidi-font-size:10.0pt;
        font-family:Arial;
        mso-fareast-font-family:"Times New Roman";
        mso-font-kerning:14.0pt;
        font-weight:normal;}
h3
        {mso-style-next:Normal;
        margin:0cm;
        margin-bottom:.0001pt;
        text-align:justify;
        mso-pagination:widow-orphan;
        page-break-after:avoid;
        mso-outline-level:3;
        font-size:12.0pt;
        mso-bidi-font-size:10.0pt;
        font-family:Arial;
        mso-fareast-font-family:"Times New Roman";
        mso-font-kerning:14.0pt;
        font-weight:normal;}
h4
        {mso-style-next:Normal;
        margin-top:0cm;
        margin-right:5.35pt;
        margin-bottom:0cm;
        margin-left:0cm;
        margin-bottom:.0001pt;
        text-align:center;
        mso-pagination:none;
        page-break-after:avoid;
        mso-outline-level:4;
        mso-layout-grid-align:none;
        punctuation-wrap:simple;
        text-autospace:none;
        font-size:8.0pt;
        mso-bidi-font-size:10.0pt;
        font-family:Arial;
        mso-fareast-font-family:"Times New Roman";
        mso-bidi-font-family:"Times New Roman";
        mso-font-kerning:14.0pt;
        font-weight:normal;
        font-style:italic;}
h5
        {mso-style-next:Normal;
        margin-top:0cm;
        margin-right:5.35pt;
        margin-bottom:0cm;
        margin-left:0cm;
        margin-bottom:.0001pt;
        text-align:justify;
        mso-pagination:none;
        page-break-after:avoid;
        mso-outline-level:5;
        mso-layout-grid-align:none;
        punctuation-wrap:simple;
        text-autospace:none;
        font-size:12.0pt;
        mso-bidi-font-size:10.0pt;
        font-family:Arial;
        mso-fareast-font-family:"Times New Roman";
        mso-bidi-font-family:"Times New Roman";
        mso-font-kerning:14.0pt;
        font-weight:bold;}
h6
        {mso-style-next:Normal;
        margin:0cm;
        margin-bottom:.0001pt;
        text-align:justify;
        mso-pagination:none;
        page-break-after:avoid;
        mso-outline-level:6;
        mso-layout-grid-align:none;
        punctuation-wrap:simple;
        text-autospace:none;
        font-size:12.0pt;
        mso-bidi-font-size:9.0pt;
        font-family:Arial;
        mso-fareast-font-family:Arial;
        mso-font-kerning:14.0pt;
        font-weight:bold;}
p.MsoHeading7, li.MsoHeading7, div.MsoHeading7
        {mso-style-next:Normal;
        margin:0cm;
        margin-bottom:.0001pt;
        mso-pagination:widow-orphan;
        page-break-after:avoid;
        mso-outline-level:7;
        font-size:12.0pt;
        mso-bidi-font-size:8.0pt;
        font-family:Arial;
        mso-fareast-font-family:"Times New Roman";
        mso-font-kerning:14.0pt;
        font-weight:bold;}
p.MsoTitle, li.MsoTitle, div.MsoTitle
        {margin:0cm;
        margin-bottom:.0001pt;
        text-align:center;
        mso-pagination:widow-orphan;
        font-size:16.0pt;
        mso-bidi-font-size:10.0pt;
        font-family:"Times New Roman";
        mso-fareast-font-family:"Times New Roman";
        font-weight:bold;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
        {margin:0cm;
        margin-bottom:.0001pt;
        text-align:justify;
        mso-pagination:none;
        mso-layout-grid-align:none;
        punctuation-wrap:simple;
        text-autospace:none;
        font-size:12.0pt;
        mso-bidi-font-size:10.0pt;
        font-family:Arial;
        mso-fareast-font-family:"Times New Roman";
        mso-font-kerning:14.0pt;}
p.MsoBodyTextIndent, li.MsoBodyTextIndent, div.MsoBodyTextIndent
        {margin:0cm;
        margin-bottom:.0001pt;
        text-indent:24.0pt;
        mso-pagination:widow-orphan;
        mso-layout-grid-align:none;
        text-autospace:none;
        font-size:13.0pt;
        font-family:TimesNewRoman;
        mso-fareast-font-family:"Times New Roman";
        mso-bidi-font-family:"Times New Roman";}
p.MsoBodyText2, li.MsoBodyText2, div.MsoBodyText2
        {margin:0cm;
        margin-bottom:.0001pt;
        text-align:justify;
        mso-pagination:widow-orphan;
        mso-layout-grid-align:none;
        text-autospace:none;
        font-size:12.0pt;
        font-family:"Times New Roman";
        mso-fareast-font-family:"Times New Roman";
        font-weight:bold;}
p.MsoBodyTextIndent2, li.MsoBodyTextIndent2, div.MsoBodyTextIndent2
        {margin:0cm;
        margin-bottom:.0001pt;
        text-indent:30.0pt;
        mso-pagination:widow-orphan;
        mso-layout-grid-align:none;
        text-autospace:none;
        font-size:12.0pt;
        mso-bidi-font-size:7.5pt;
        font-family:Verdana;
        mso-fareast-font-family:"Times New Roman";
        mso-bidi-font-family:"Times New Roman";}
p.MsoBodyTextIndent3, li.MsoBodyTextIndent3, div.MsoBodyTextIndent3
        {margin:0cm;
        margin-bottom:.0001pt;
        text-align:justify;
        text-indent:36.0pt;
        mso-pagination:widow-orphan;
        font-size:12.0pt;
        font-family:"Times New Roman";
        mso-fareast-font-family:"Times New Roman";}
a:link, span.MsoHyperlink
        {color:blue;
        text-decoration:underline;
        text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
        {color:purple;
        text-decoration:underline;
        text-underline:single;}
p.MsoPlainText, li.MsoPlainText, div.MsoPlainText
        {margin:0cm;
        margin-bottom:.0001pt;
        mso-pagination:widow-orphan;
        font-size:10.0pt;
        font-family:"Courier New";
        mso-fareast-font-family:"Times New Roman";}
p
        {margin-right:0cm;
        mso-margin-top-alt:auto;
        mso-margin-bottom-alt:auto;
        margin-left:0cm;
        mso-pagination:widow-orphan;
        font-size:12.0pt;
        font-family:"Arial Unicode MS";}
span.EstiloDeCorreioEletrnico15
        {mso-style-type:personal;
        mso-ansi-font-size:10.0pt;
        mso-ascii-font-family:Arial;
        mso-hansi-font-family:Arial;
        mso-bidi-font-family:Arial;
        color:black;}
p.p1, li.p1, div.p1
        {mso-style-name:p1;
        margin:0cm;
        margin-bottom:.0001pt;
        line-height:14.0pt;
        mso-pagination:none;
        tab-stops:36.0pt;
        mso-layout-grid-align:none;
        text-autospace:none;
        font-size:10.0pt;
        mso-bidi-font-size:12.0pt;
        font-family:"Times New Roman";
        mso-fareast-font-family:"Times New Roman";}
p.p2, li.p2, div.p2
        {mso-style-name:p2;
        margin:0cm;
        margin-bottom:.0001pt;
        line-height:12.0pt;
        mso-pagination:none;
        tab-stops:36.0pt;
        mso-layout-grid-align:none;
        text-autospace:none;
        font-size:10.0pt;
        mso-bidi-font-size:12.0pt;
        font-family:"Times New Roman";
        mso-fareast-font-family:"Times New Roman";}
p.p3, li.p3, div.p3
        {mso-style-name:p3;
        margin-top:0cm;
        margin-right:0cm;
        margin-bottom:0cm;
        margin-left:35.0pt;
        margin-bottom:.0001pt;
        line-height:12.0pt;
        mso-pagination:none;
        tab-stops:37.0pt;
        mso-layout-grid-align:none;
        text-autospace:none;
        font-size:10.0pt;
        mso-bidi-font-size:12.0pt;
        font-family:"Times New Roman";
        mso-fareast-font-family:"Times New Roman";}
p.p4, li.p4, div.p4
        {mso-style-name:p4;
        margin-top:0cm;
        margin-right:0cm;
        margin-bottom:0cm;
        margin-left:36.0pt;
        margin-bottom:.0001pt;
        text-indent:-14.4pt;
        line-height:22.0pt;
        mso-pagination:none;
        tab-stops:18.0pt;
        mso-layout-grid-align:none;
        text-autospace:none;
        font-size:10.0pt;
        mso-bidi-font-size:12.0pt;
        font-family:"Times New Roman";
        mso-fareast-font-family:"Times New Roman";}
p.p5, li.p5, div.p5
        {mso-style-name:p5;
        margin-top:0cm;
        margin-right:0cm;
        margin-bottom:0cm;
        margin-left:36.0pt;
        margin-bottom:.0001pt;
        text-indent:-14.4pt;
        line-height:14.0pt;
        mso-pagination:none;
        tab-stops:18.0pt 37.0pt;
        mso-layout-grid-align:none;
        text-autospace:none;
        font-size:10.0pt;
        mso-bidi-font-size:12.0pt;
        font-family:"Times New Roman";
        mso-fareast-font-family:"Times New Roman";}
p.p6, li.p6, div.p6
        {mso-style-name:p6;
        margin:0cm;
        margin-bottom:.0001pt;
        line-height:12.0pt;
        mso-pagination:none;
        mso-layout-grid-align:none;
        text-autospace:none;
        font-size:10.0pt;
        mso-bidi-font-size:12.0pt;
        font-family:"Times New Roman";
        mso-fareast-font-family:"Times New Roman";}
@page Section1
        {size:612.0pt 792.0pt;
        margin:70.9pt 3.0cm 70.9pt 3.0cm;
        mso-header-margin:35.45pt;
        mso-footer-margin:35.45pt;
        mso-paper-source:0;}
div.Section1
        {page:Section1;}
 /* List Definitions */
@list l0
        {mso-list-id:79565965;
        mso-list-type:hybrid;
        mso-list-template-ids:635316888 462469868 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l0:level1
        {mso-level-start-at:0;
        mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;
        mso-fareast-font-family:"Times New Roman";
        mso-bidi-font-family:Arial;
        mso-ansi-font-weight:bold;}
@list l1
        {mso-list-id:309988650;
        mso-list-type:hybrid;
        mso-list-template-ids:-2018975524 462469868 -351625928 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l1:level1
        {mso-level-start-at:0;
        mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;
        mso-fareast-font-family:"Times New Roman";
        mso-bidi-font-family:Arial;
        mso-ansi-font-weight:bold;}
@list l1:level2
        {mso-level-start-at:10;
        mso-level-number-format:bullet;
        mso-level-text:\F071;
        mso-level-tab-stop:72.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Wingdings;
        mso-fareast-font-family:"Times New Roman";
        mso-bidi-font-family:Arial;}
@list l2
        {mso-list-id:422187401;
        mso-list-type:hybrid;
        mso-list-template-ids:-1157981260 -219108168 -1476512190 -698697180 2020667154 286946340 -161301524 -940965676 396403082 -1114049540;}
@list l2:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        mso-ansi-font-size:10.0pt;
        font-family:Symbol;}
@list l3
        {mso-list-id:515538785;
        mso-list-type:hybrid;
        mso-list-template-ids:614351936 68550657 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l3:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;}
@list l4
        {mso-list-id:614092341;
        mso-list-type:hybrid;
        mso-list-template-ids:-28786750 462469868 68550657 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l4:level1
        {mso-level-start-at:0;
        mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;
        mso-fareast-font-family:"Times New Roman";
        mso-bidi-font-family:Arial;
        mso-ansi-font-weight:bold;}
@list l4:level2
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:72.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;}
@list l5
        {mso-list-id:687489931;
        mso-list-type:hybrid;
        mso-list-template-ids:-90386226 428869272 821315970 1552575790 322337300 -995868996 624828938 1354389538 -1764594256 1696737252;}
@list l5:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        mso-ansi-font-size:10.0pt;
        font-family:Symbol;}
@list l6
        {mso-list-id:704599133;
        mso-list-type:hybrid;
        mso-list-template-ids:607791544 583809180 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l6:level1
        {mso-level-start-at:0;
        mso-level-number-format:bullet;
        mso-level-text:-;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:"Times New Roman";
        mso-fareast-font-family:"Times New Roman";}
@list l7
        {mso-list-id:709957312;
        mso-list-type:hybrid;
        mso-list-template-ids:-809469938 68550657 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l7:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;}
@list l8
        {mso-list-id:719205028;
        mso-list-type:hybrid;
        mso-list-template-ids:-326580338 199230280 628682532 -441681714 67639336 172543294 965788570 2145709262 716874002 -855095660;}
@list l8:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        mso-ansi-font-size:10.0pt;
        font-family:Symbol;}
@list l9
        {mso-list-id:735084491;
        mso-list-type:hybrid;
        mso-list-template-ids:-333915070 2004019532 -1990682052 -1980213012 -275614580 -1173162546 -1982444716 602995634 -2146266422 -173402110;}
@list l9:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        mso-ansi-font-size:10.0pt;
        font-family:Symbol;}
@list l10
        {mso-list-id:744648874;
        mso-list-type:hybrid;
        mso-list-template-ids:-1169933894 -1040277758 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l10:level1
        {mso-level-start-at:3;
        mso-level-number-format:bullet;
        mso-level-text:-;
        mso-level-tab-stop:19.05pt;
        mso-level-number-position:left;
        margin-left:19.05pt;
        text-indent:-18.0pt;
        font-family:"Times New Roman";
        mso-fareast-font-family:"Times New Roman";}
@list l11
        {mso-list-id:892498357;
        mso-list-type:hybrid;
        mso-list-template-ids:477505698 68550657 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l11:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;}
@list l12
        {mso-list-id:908273021;
        mso-list-type:hybrid;
        mso-list-template-ids:-636716718 68550657 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l12:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:37.15pt;
        mso-level-number-position:left;
        margin-left:37.15pt;
        text-indent:-18.0pt;
        font-family:Symbol;}
@list l13
        {mso-list-id:1079710081;
        mso-list-type:hybrid;
        mso-list-template-ids:1987590252;}
@list l13:level1
        {mso-level-start-at:0;
        mso-level-number-format:bullet;
        mso-level-text:-;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:"Times New Roman";
        mso-fareast-font-family:"Times New Roman";}
@list l14
        {mso-list-id:1097750884;
        mso-list-type:hybrid;
        mso-list-template-ids:328655758 68550657 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l14:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;}
@list l15
        {mso-list-id:1129125109;
        mso-list-type:hybrid;
        mso-list-template-ids:1653875464 -1 -1 -1 -1 -1 -1 -1 -1 -1;}
@list l15:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0D8;
        mso-level-tab-stop:49.2pt;
        mso-level-number-position:left;
        margin-left:42.55pt;
        text-indent:-11.35pt;
        mso-ansi-font-size:12.0pt;
        font-family:Wingdings;
        mso-bidi-font-family:"Times New Roman";}
@list l16
        {mso-list-id:1251549266;
        mso-list-type:hybrid;
        mso-list-template-ids:1200903790 462469868 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l16:level1
        {mso-level-start-at:0;
        mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;
        mso-fareast-font-family:"Times New Roman";
        mso-bidi-font-family:Arial;
        mso-ansi-font-weight:bold;}
@list l17
        {mso-list-id:1342321985;
        mso-list-type:hybrid;
        mso-list-template-ids:428644018 7111840 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l17:level1
        {mso-level-start-at:0;
        mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;
        mso-fareast-font-family:"Times New Roman";
        mso-bidi-font-family:Arial;}
@list l18
        {mso-list-id:1460025275;
        mso-list-type:hybrid;
        mso-list-template-ids:1727575306 68550657 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l18:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;}
@list l19
        {mso-list-id:1482963306;
        mso-list-type:hybrid;
        mso-list-template-ids:-1618959512 1129217030 1670141066 -1150353910 1244066420 -487313636 -1094916624 -1015279406 -1458635438 -370136098;}
@list l19:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        mso-ansi-font-size:10.0pt;
        font-family:Symbol;}
@list l20
        {mso-list-id:1519084079;
        mso-list-type:hybrid;
        mso-list-template-ids:-165924102 504111896 -1300203246 389554642 -1060311042 1778392066 -275622944 717791626 -1302449290 -1165064618;}
@list l20:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        mso-ansi-font-size:10.0pt;
        font-family:Symbol;}
@list l21
        {mso-list-id:1552840425;
        mso-list-type:hybrid;
        mso-list-template-ids:-912519772 1062077334 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l21:level1
        {mso-level-start-at:2;
        mso-level-number-format:bullet;
        mso-level-text:-;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:"Times New Roman";
        mso-fareast-font-family:"Times New Roman";
        mso-ansi-font-weight:bold;}
@list l22
        {mso-list-id:1571648357;
        mso-list-type:hybrid;
        mso-list-template-ids:1487840848 68550657 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l22:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;}
@list l23
        {mso-list-id:1595354953;
        mso-list-type:hybrid;
        mso-list-template-ids:-1665134858 68550657 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l23:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;}
@list l24
        {mso-list-id:1628125106;
        mso-list-type:hybrid;
        mso-list-template-ids:-423714406;}
@list l24:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;}
@list l24:level2
        {mso-level-number-format:bullet;
        mso-level-text:o;
        mso-level-tab-stop:72.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:"Courier New";
        mso-bidi-font-family:"Times New Roman";}
@list l25
        {mso-list-id:1655792744;
        mso-list-type:hybrid;
        mso-list-template-ids:-1922014474 -704376338 1153342288 -638941202 1018753294 1846438240 -476439150 -304595066 -2136700584 -1932256158;}
@list l25:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        mso-ansi-font-size:10.0pt;
        font-family:Symbol;}
@list l26
        {mso-list-id:1865246978;
        mso-list-type:hybrid;
        mso-list-template-ids:1796504778 68550657 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l26:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;}
@list l27
        {mso-list-id:1920865497;
        mso-list-type:hybrid;
        mso-list-template-ids:-139031502 68550657 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l27:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;}
@list l28
        {mso-list-id:1993874623;
        mso-list-type:hybrid;
        mso-list-template-ids:255334782 462469868 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l28:level1
        {mso-level-start-at:0;
        mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;
        mso-fareast-font-family:"Times New Roman";
        mso-bidi-font-family:Arial;
        mso-ansi-font-weight:bold;}
@list l28:level2
        {mso-level-number-format:bullet;
        mso-level-text:o;
        mso-level-tab-stop:72.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:"Courier New";
        mso-bidi-font-family:"Times New Roman";}
@list l29
        {mso-list-id:2056616026;
        mso-list-type:hybrid;
        mso-list-template-ids:-344152244 68550657 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l29:level1
        {mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;}
@list l30
        {mso-list-id:2120835125;
        mso-list-type:hybrid;
        mso-list-template-ids:1714079910 462469868 68550659 68550661 68550657 68550659 68550661 68550657 68550659 68550661;}
@list l30:level1
        {mso-level-start-at:0;
        mso-level-number-format:bullet;
        mso-level-text:\F0B7;
        mso-level-tab-stop:36.0pt;
        mso-level-number-position:left;
        text-indent:-18.0pt;
        font-family:Symbol;
        mso-fareast-font-family:"Times New Roman";
        mso-bidi-font-family:Arial;
        mso-ansi-font-weight:bold;}
ol
        {margin-bottom:0cm;}
ul
        {margin-bottom:0cm;}
-->
</style>
<!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="2050"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<BODY BACKGROUND="fundo.jpg" bgColor=#FFFFFF leftMargin=0 topMargin=0 marginheight=0 marginwidth=0>

<div class=Section1>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:14.0pt;mso-bidi-font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:14.0pt;mso-bidi-font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:14.0pt;mso-bidi-font-size:12.0pt'>UNIP</span></b><span
style='font-size:14.0pt;mso-bidi-font-size:12.0pt'> - Universidade Paulista<o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:14.0pt;mso-bidi-font-size:12.0pt'>ICET</span></b><span
style='font-size:14.0pt;mso-bidi-font-size:12.0pt'> - Instituto de Ci�ncias
Exatas e Tecnologia</span></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><!--[if gte vml 1]><v:shapetype id="_x0000_t75" coordsize="21600,21600"
 o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe" filled="f"
 stroked="f">
 <v:stroke joinstyle="miter"/>
 <v:formulas>
  <v:f eqn="if lineDrawn pixelLineWidth 0"/>
  <v:f eqn="sum @0 1 0"/>
  <v:f eqn="sum 0 0 @1"/>
  <v:f eqn="prod @2 1 2"/>
  <v:f eqn="prod @3 21600 pixelWidth"/>
  <v:f eqn="prod @3 21600 pixelHeight"/>
  <v:f eqn="sum @0 0 1"/>
  <v:f eqn="prod @6 1 2"/>
  <v:f eqn="prod @7 21600 pixelWidth"/>
  <v:f eqn="sum @8 21600 0"/>
  <v:f eqn="prod @7 21600 pixelHeight"/>
  <v:f eqn="sum @10 21600 0"/>
 </v:formulas>
 <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
 <o:lock v:ext="edit" aspectratio="t"/>
</v:shapetype><v:shape id="_x0000_s1088" type="#_x0000_t75" style='position:absolute;
 margin-left:0;margin-top:.4pt;width:451.25pt;height:354.75pt;z-index:-1;
 mso-wrap-edited:f' wrapcoords="-38 0 -38 21565 21600 21565 21600 0 -38 0">
<v:imagedata src="./arquivos/image001.jpg" o:title="chopper - 1" gain="39322f"
  blacklevel="13107f"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:-61;margin-left:0px;margin-top:1px;width:602px;height:473px'><img
width=602 height=473 src="./arquivos/image002.jpg" v:shapes="_x0000_s1088"></span><![endif]></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center'><b><i><span
style='font-size:28.0pt;mso-bidi-font-size:12.0pt'>AUTOMA��O E CONTROLE<o:p></o:p></span></i></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><i><span
style='font-size:28.0pt;mso-bidi-font-size:12.0pt'><span style="mso-spacerun:
yes">�</span><o:p></o:p></span></i></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><i><span
style='font-size:28.0pt;mso-bidi-font-size:12.0pt'>SISTEMAS DE GEST�O<o:p></o:p></span></i></b></p>

<p class=MsoNormal align=center style='text-align:center'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal>Integrantes:</p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal>Daniel Savoy<span style='mso-tab-count:5'>������������������������������������������������ </span>N�.
118634-5</p>

<p class=MsoNormal>Eduardo F. B. Barbosa<span style='mso-tab-count:3'>��������������������������������� </span>N�.
058760-5<span style='font-size:10.0pt;font-family:Palatia'> </span><span
style='display:none;mso-hide:all'><o:p></o:p></span></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal>Fernando Frasson Giusti<span style='mso-tab-count:3'>������������������������������� </span>N�.
072993-0</p>

<p class=MsoNormal>Gustavo B. Bonanno<span style='mso-tab-count:4'>������������������������������������� </span>N�.
091262-0</p>

<p class=MsoNormal>Maur�cio Fernandes Raphael<span style='mso-tab-count:3'>������������������������ </span>N�.
091495-9</p>

<p class=MsoNormal>Ricardo de Almeida Fil�<span style='mso-tab-count:3'>������������������������������ </span>N�.
090071-0</p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h1 style='text-align:justify'>INTRODU��O</h1>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>A competi��o
entre empresas vem crescendo cada vez mais, tanto no mercado interno quanto no
mercado externo. Dois fatores principais contribuem para que as empresas pensem
em investir para ser competitiva.<span style="mso-spacerun: yes">�
</span>Primeiro a estabiliza��o da economia nacional e segundo, a abertura do
mercado de inform�tica, onde temos mais empresas no ramo, aumentando a
concorr�ncia e assim baixando custos. Paras sobreviver no mercado, as empresas
viram-se obrigadas a reduzir custos e aumentar os lucros de uma forma nunca
vista antes. Um dos meios utilizados � a automa��o.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><span
class=EstiloDeCorreioEletrnico15><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'>Existe uma diferen�a quando falamos de
mecaniza��o, informatiza��o e automa��o.<o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><span
class=EstiloDeCorreioEletrnico15><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><span
class=EstiloDeCorreioEletrnico15><b><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'>Mecaniza��o</span></b></span><span
class=EstiloDeCorreioEletrnico15><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'> consiste simplesmente no uso de
m�quinas para realizar trabalho, substituindo o esfor�o f�sico do homem.<o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><span
class=EstiloDeCorreioEletrnico15><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><span
class=EstiloDeCorreioEletrnico15><b><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'>Informatiza��o</span></b></span><span
class=EstiloDeCorreioEletrnico15><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'> </span></span>consiste basicamente, no
uso da inform�tica para facilitar algum trabalho<span
class=EstiloDeCorreioEletrnico15><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'>. Como exemplo, podemos citar o uso de
softwares editores de textos substituindo m�quinas de escrever convencionais.<o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><span
class=EstiloDeCorreioEletrnico15><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><b>Automa��o</b>
pode ser entendida como todo o esfor�o para transformar tarefas manuais
repetitivas em processos autom�ticos realizados por uma m�quina, quase sem a
interven��o do homem. </p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>A tentativa de
mecanizar atividades realizadas pelo homem � extremamente remota, por�m a
automa��o propriamente dita s� ganhou destaque na sociedade a partir da segunda
metade do s�culo XVIII, na Inglaterra, com a evolu��o industrial. Os sistemas totalmente
autom�ticos surgiram no in�cio do s�culo XX com a evolu��o da tecnologia,
quando foi poss�vel contar com computadores, servomecanismos e controladores
program�veis. A partir de ent�o os computadores tornaram-se o alicerce da
automa��o.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Em um exemplo
b�sico do dia-a-dia de como a automa��o est� presente, podemos citar uma pessoa
que quer obter um extrato de sua conta banc�ria. Ao chegar a ag�ncia, o usu�rio
passa o seu cart�o de banco e digita sua senha e a opera��o desejada. No caso a
opera��o desejada � a impress�o do extrato banc�rio. Um computador l� as
informa��es de entrada e processa estas informa��es, imprimindo o extrato
banc�rio do usu�rio.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>A automa��o
pode ser classificada de acordo com suas diversas �reas de aplica��o. </p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h1 style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></h1>

<h1 style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></h1>

<h1 style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></h1>

<h1 style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></h1>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h1 style='text-align:justify'><span style='font-size:14.0pt;mso-bidi-font-size:
12.0pt'>AUTOMA��O COMERCIAL<o:p></o:p></span></h1>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Automa��o
comercial � a utiliza��o de equipamentos para a integra��o, racionaliza��o e
padroniza��o de todas as rotinas operacionais da empresa, permitindo a
intera��o mais r�pida e eficaz com fornecedores e clientes (internos e
externos). </p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>O uso da
informatiza��o simplifica o trabalho ajudando a manter o controle de estoque,
controle de vendas e o controle financeiro. Em face disto muitos softwares,
hardwares e equipamentos perif�ricos surgiram.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>O uso da
automa��o comercial vem facilita n�o s� o desenvolvimento das atividades da
empresa, como tamb�m melhora a forma de opera��o, percebida pelo cliente.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Estima-se que o
Brasil tenha investido US$1 bilh�o at� o ano de 2000 em automa��o comercial.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><span
style="mso-spacerun: yes">�</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>O governo viu
na automa��o comercial um importante meio de fiscaliza��o. Para isso foram
criadas regulamenta��es.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'>ICMS 24/86 - Conv�nio que
normatiza a utiliza��o de m�quinas registradoras;</p>

<p class=MsoNormal style='text-align:justify'>ICMS 122/94 - Altera��es
realizadas no ICMS 24/86;</p>

<p class=MsoNormal style='text-align:justify'>ICMS 44/87 - Conv�nio que
normatiza a utiliza��o de PDV's (Terminais de Ponto de Venda);</p>

<p class=MsoNormal style='text-align:justify'>ICMS 42/93 - Conv�nio que adota o
uso de mem�ria fiscal;</p>

<p class=MsoNormal style='text-align:justify'>ICMS 47/93 - Conv�nio que
normatiza a homologa��o dos equipamentos fiscais;</p>

<p class=MsoNormal style='text-align:justify'>ICMS 82/93 - Conv�nio que
regulamenta a mem�ria fiscal;</p>

<p class=MsoNormal style='text-align:justify'>ICMS 132/97 - Conv�nio que
regulamenta o uso de cupons fiscais;</p>

<p class=MsoNormal style='text-align:justify'>ECF 001/98 � Obriga o uso de
Emissores de cupons Fiscais ECF por todos os estabelecimentos de venda,
revenda, bens a varejo ou presta��o de servi�o;.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Apesar da boa
inten��o do governo, a obrigatoriedade do uso do ECF n�o agradou aos lojistas
que encaram o uso do ECF como mais uma dificuldade em meio a crise que assola a
economia do pa�s. Isto porque muitos n�o compreendem os benef�cios que a
automa��o comercial pode proporcionar aos neg�cios. A automa��o acaba sendo
indispens�vel frente aos desafios impostos pela concorr�ncia das grandes
cadeias de lojas.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Entre os
equipamentos que surgiram com a automa��o comercial para o com�rcio varejista
podemos citar:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l29 level1 lfo3;
     tab-stops:list 36.0pt'><b style='mso-bidi-font-weight:normal'>Caixas
     Registradoras<o:p></o:p></b></li>
</ul>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'>As caixas registradoras mec�nicas e eletromec�nicas
foram as precursoras da automa��o comercial, causando uma verdadeira revolu��o
na gest�o do varejo. </p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'>Em seguida, acompanhando a evolu��o tecnol�gica,
surgiram as caixas registradoras eletr�nicas. Sua fun��o b�sica concentra-se na
opera��o de registro e totaliza��o do valor das compras efetuadas. Atrav�s
delas, tanto o operador como o consumidor, podem acompanhar o que est� sendo
registrado. Normalmente, ligados a elas existem dispositivos que armazenam
tamb�m o dinheiro e outras formas de pagamento, al�m de uma impressora do cupom
fiscal de caixa. Neste cupom est�o listadas as quantidades e os pre�os dos
produtos comprados, permitindo ao consumidor que ele confira, se desejar, as
compras que fez. Em alguns modelos de maior porte, as caixas registradoras oferecem
tamb�m a op��o de registro e fechamento do movimento di�rio, o que facilita ao
varejista a confer�ncia das contas e do estoque. Este tipo de equipamento
apresenta como vantagem a obten��o de uma maior confiabilidade nas opera��es de
registro de dados e melhores perspectivas de manuten��o, uma vez que o desgaste
apresentado � menor, se comparado aos equipamentos mec�nicos utilizados
anteriormente.</p>

<p class=p1 align=center style='text-align:center;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p2 style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;
line-height:normal;mso-list:l29 level1 lfo3;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:12.0pt;font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'>Os PDV's (Pontos de Venda)</span></b><span
style='font-size:12.0pt'> <b style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>

<p class=p2 style='text-align:justify;line-height:normal'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Com a evolu��o da
tecnologia tornou-se poss�vel a utiliza��o de equipamentos mais sofisticados e
cujo princ�pio de funcionamento assemelha-se ao das caixas registradoras. Estes
novos equipamentos apresentam como vantagens principais uma maior flexibilidade
nas opera��es realizadas, possibilitando tamb�m a comunica��o com outros equipamentos.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>S�o os chamados
PDV's, que nada mais s�o do que computadores cuja fun��o � voltada para as
tarefas do caixa, apresentando caracter�sticas que tornam sua utiliza��o
extremamente vantajosa em aplica��es de automa��o Comercial, destacando-se as
seguintes:<o:p></o:p></span></p>

<p class=p4><span style='font-size:12.0pt'>Registro de vendas, quantidades e
pre�o com o c�digo dos produtos;<o:p></o:p></span></p>

<p class=p4><span style='font-size:12.0pt'>Totaliza��o de uma venda, de acordo
com a necessidade;<o:p></o:p></span></p>

<p class=p4><span style='font-size:12.0pt'>Visores especiais, program�veis de
acordo com o usu�rio;<o:p></o:p></span></p>

<p class=p4><span style='font-size:12.0pt'>Teclado pr�prio, program�vel de
acordo com a necessidade;<o:p></o:p></span></p>

<p class=p4><span style='font-size:12.0pt'>Totaliza��es di�rias (relat�rios por
produtos, quantidades, se��o, etc.);<o:p></o:p></span></p>

<p class=p4><span style='font-size:12.0pt'>Impressora de cupons com melhor
resolu��o, permitindo a inser��o de imagens;<o:p></o:p></span></p>

<p class=p4 style='margin-left:21.3pt;text-indent:0cm'><span style='font-size:
12.0pt'>Facilidade de liga��o com outros perif�ricos (impressoras de notas
fiscais, scanners, impressoras de cheques, etc.);<o:p></o:p></span></p>

<p class=p4><span style='font-size:12.0pt'>Facilidade de liga��o em rede,
melhorando o controle fora da �rea do caixa;.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:37.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Encontram-se
dispon�veis no mercado diversos modelos de PDV's, aplicados de acordo com as
necessidades. V�rias tamb�m s�o as op��es conforme as caracter�sticas do
mostrador (monitor), teclado, disposi��o da caixa de dinheiro, interfaces
dispon�veis, impressoras de cupons, entre outras. Dependendo da disponibilidade
e do interesse de cada varejista s�o fornecidas, inclusive, solu��es modulares,
ou seja, o varejista adquire as partes que lhe interessam no momento, havendo a
possibilidade de uma expans�o posterior.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os custos dos
PDV's dependem, basicamente, dos modelos e m�dulos que estar�o presentes na
op��o desejada.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p6 style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;
line-height:normal;mso-list:l29 level1 lfo3;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:12.0pt;font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'>Preenchedores de Cheques<o:p></o:p></span></b></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Este equipamento
perif�rico nada mais � do que uma impressora inteligente, capaz de interpretar
os valores dos cheques e preench�-los corretamente com o total por extenso,
al�m de informa��es de localidade e data de emiss�o. � um equipamento que pode
ser integrado a um PDV, cuja opera��o ser� facilitada, uma vez que o total a
ser preenchido � transferido automaticamente do PDV para o preenchedor,
evitando os erros de digita��o.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os preenchedores
de cheques trouxeram in�meras vantagens: aumento da confiabilidade no
preenchimento dos cheques, na conferncia da totaliza��o e na diminui��o do
tempo gasto na espera. Com isso, tanto os consumidores como os varejistas
sairam ganhando.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p2 style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;
line-height:normal;mso-list:l29 level1 lfo3;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:12.0pt;font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'>A</span></b><span style='font-size:12.0pt'> <b
style='mso-bidi-font-weight:normal'>Codifica��o dos Produtos<o:p></o:p></b></span></p>

<p class=p2 style='text-align:justify;line-height:normal'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>O processo de
automa��o deve ter como objetivos principais o aumento da produtividade e a melhoria
na qualidade do atendimento aos consumidores. Para facilitar o atendimento aos
clientes existe um procedimento em que cada produto recebe um c�digo
pr�-definido para melhorar sua caracteriza��o e classifica��o dentro da loja.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Existem v�rias
maneiras para se codificar um produto.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Na primeira delas
� atribu�do um nome pr�prio para cada produto. Apesar de ser um procedimento
f�cil de ser realizado, por j� existirem normas comerciais para cada produto,
ele ainda apresenta alguns problemas na entrada do c�digo no computador,
dificultando a classifica��o posterior por categoria do produto. Uma segunda
forma de codifica��o � a utiliza��o de c�digos num�ricos para cada produto,
onde cada um recebe um c�digo pr�prio, que muitas vezes pode at� coincidir com
o c�digo utilizado pelo fabricante. Nestes c�digos existem v�rias informa��es
sobre o produto: proced�ncia, fabricante, tipo de produto, tamanho, quantidade,
entre outras.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Este tipo de
codifica��o apresenta como desvantagem, a necessidade de o operador do caixa
digitar o c�digo dos produtos, tornando a tarefa demorada e sujeita a erros.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Uma terceira forma
de codifica��o dos produtos diz respeito a utilizarmos uma forma de codifica��o
que permita ao computador, a partir de um instrumento qualquer de leitura, identificar
automaticamente o produto com o qual se est� trabalhando. Neste caso, existem
algumas formas poss�veis.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A primeira delas �
o reconhecimento de caracteres, onde um reconhecedor faz a leitura e tradu��o
dos dados para informa��es reconhecidas pelo computador. Este m�todo n�o foi
muito desenvolvido por problemas de padroniza��o e do pr�prio reconhecimento
dos caracteres expostos.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Outra forma
utilizada � a de codificar os dados a partir de barras verticais representando
o c�digo num�rico caracter�stico de um determinado produto. Assim, cada produto
recebe uma codifica��o em barras, que � facilmente lida por um leitor �ptico e
convertida em informa��es que podem ser processadas pelo computador.<o:p></o:p></span></p>

<p class=p2 style='text-align:justify;line-height:normal'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p2 style='text-align:justify;line-height:normal'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p2 style='text-align:justify;line-height:normal'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p2 style='text-align:justify;line-height:normal'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p2 style='text-align:justify;line-height:normal'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p1 style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;
mso-list:l29 level1 lfo3;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:12.0pt;font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'>C�digo de Barras<o:p></o:p></span></b></p>

<p class=p2 style='text-align:justify;line-height:normal'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Juntamente com a
utiliza��o de caixas eletr�nicos e com o desenvolvimento da leitura �ptica,
outro instrumento que vem contribuindo significativamente para o
desenvolvimento da automa��o varejista � o c�digo de barras. Sua utiliza��o tem
possibilitado a sistematiza��o de in�meras tarefas dentro do processo de
automa��o.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Trata-se de um
sistema que consiste basicamente em um conjunto de barras, representando 0's e
1's, formando uma combina��o que permite a um leitor �ptico (scanner)
reconhecer as caracter�sticas do produto, tais como proced�ncia, tipo de
produto, marca, tamanho, entre outras.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:13.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Deste modo,
atrav�s de um simples processamento de informa��es, tem-se nas m�os um sistema
de reconhecimento de produtos vendidos nos caixas, traduzindo-se em valiosas
informa��es que auxiliam no processo de tomada de decis�es.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:13.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Atualmente sao
utilizados alguns c�digos que s�o padr�es. No Brasil � utilizado o c�digo EAN
cuja gest�o � feita pela EAN - Brasil. Cada fomecedor tem o seu pr�prio c�digo
inscrito na EAN - Brasil e nele est�o contidas as informa��es sobre o pa�s de
onde prov�m o produto, a empresa fabricante e o produto em si. Essa nova
tecnologia tem exercido um grande impacto sob o ponto de vista dos
consumidores, existindo, basicamente, quatro fatores influenciadores,
diretamente percebidos por eles.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p2 style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><span style="mso-spacerun:
yes">�</span>- O primeiro diz respeito aos servi�os prestados no caixa, onde
essa tecnologia trouxe maior confiabilidade na opera��o realizada, diminuindo
os erros de digita��o e o tempo gasto nos caixas e nas filas.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly;tab-stops:16.0pt 37.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=p2 style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><span style="mso-spacerun:
yes">�</span>- A segunda modifica��o percebida refere-se aos recibos emitidos
pelos caixas, que passaram a ser discriminados, permitindo que o<b
style='mso-bidi-font-weight:normal'> </b>consumidor confira, item por item, o<b
style='mso-bidi-font-weight:normal'> </b>que comprou.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly;tab-stops:16.0pt 37.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=p2 style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><span style="mso-spacerun:
yes">�</span>- O terceiro fator est� relacionado a alguns beneficios adicionais
em termos do pre�o final dos produtos, onde � percebido um impacto de
diminui��o dos pre�os, provocado pelo aumento da produtividade da opera��o na
loja.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly;tab-stops:16.0pt 37.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=p2 style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><span style="mso-spacerun:
yes">�</span>- O �ltimo fator refere-se ao problema dos pre�os que n�o
necessariamente est�o marcados diretamente nos produtos, podendo encontrar-se
nas prateleiras. Esse fator pode ser visto como um inibidor da sele��o de lojas
por parte dos consumidores, devido a dificuldade na sua utiliza��o. Por�m,
outros fatores j� citados, principalmente aqueles relacionados a confiabilidade
e a rapidez nos caixas podem atuar como fatores compensadores, anulando uma
primeira impress�o desfavor�vel.<o:p></o:p></span></p>

<p class=p2 style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:13.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Al�m dos quatro
fatores mencionados existem ainda fatores que n�o s�o percebidos diretamente
pelos consumidores, mas que possuem um forte impacto sobre o composto de uma
loja a eles oferecido.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:13.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>O varejista, ao
utilizar a tecnologia do c�digo de barras, ligada a dos PDV's integrados ter�,
num reduzido espa�o de tempo, um controle mais apurado sobre os resultados
obtidos pela sua loja. Desta forma, ele poder� reconfigurar, de maneira mais
r�pida, o composto de produtos oferecidos, adaptando-o as necessidades dos
consumidores. Esta utiliza��o tamb�m possibilita ao varejista, rep�r os seus
estoques nas prateleiras de maneira mais eficiente, a um custo mais reduzido.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:13.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Outro importante
fator que deve ser citado, relacionado a utiliza��o do c�digo de barras no
varejo, diz respeito diretamente a comunica��o com o consumidor. Combinando-se
leitores �pticos com equipamentos multim�dia, obt�m-se como resultado uma
eficiente maneira de suprir os consumidores com informa��es adicionais sobre os
produtos e sobre a loja. Como exemplo � citado o caso de sistemas de informa��o
de pre�o, onde o consumidor &quot;passa&quot; o produto por um scanner e
visualiza imediatamente algumas caracter�sticas desse produto e seu respectivo
pre�o.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Para o varejista
que est� pretendendo implantar o uso de c�digo de barras � importante que se
fa�a algumas recomenda��es.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Verifique
inicialmente quantos fornecedores de seus produtos comercializados ja possuem
esta caracteriza��o. Se alguns deles ainda n�o se utilizam deste sistema �
importante que seja prevista alguma forma de emitir as etiquetas com estes
c�digos, caracterizando, deste modo, cada um dos produtos oferecidos aos
consumidores, para facilitar as opera��es no caixa.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>No caso de
varejistas que possuem produtos vendidos em quantidades variadas, como tecidos
por exemplo, � importante verificar como pode ser operacionalizado o registro
destes produtos no caixa. Em caso de d�vida consulte alguns fornecedores, que
poder�o lhe oferecer solu��es interessantes. Caso o varejista seja o
respons�vel direto pela impress�o das etiquetas com os c�digos de barras, �
necess�rio que sejam tomados alguns cuidados b�sicos. � importante que a
impressora utilizada tenha resolu��o suficiente para que o leitor �ptico possa
entender claramente o c�digo, evitando com isso problemas na sua interpreta��o.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A qualidade da
etiqueta e da sua impress�o, s�o itens essenciais neste processo. Alguns
fornecedores oferecem op��es quanto a impressoras especiais para a utiliza��o
de etiquetas com c�digos de barras. Por isso verifique antes se a impressora
que voc� possui � apropriada para esta utiliza��o. Abaixo segue um exemplo de
c�digo usado.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><!--[if gte vml 1]><v:shape id="_x0000_s1029" type="#_x0000_t75"
 style='position:absolute;left:0;text-align:left;margin-left:0;margin-top:6.7pt;
 width:107.25pt;height:47.45pt;z-index:1;mso-wrap-edited:f;
 mso-position-horizontal:left' wrapcoords="-131 0 -131 21304 21600 21304 21600 0 -131 0">
 <v:imagedata src="./arquivos/image003.jpg" o:title="barras"/>
 <w:wrap type="square"/>
</v:shape><![endif]--><![if !vml]><img width=143 height=63
src="./arquivos/image004.jpg" align=left hspace=12 v:shapes="_x0000_s1029"><![endif]><span
style='font-size:12.0pt'><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 align=center style='text-align:center;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 align=center style='text-align:center;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
style='font-size:12.0pt'>Neste exemplo podemos identificar:<o:p></o:p></span></p>

<p class=MsoNormal>789 � Brasil (Pa�s)<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>

<p class=MsoNormal>4401 � Philips (fabricante)</p>

<p class=MsoNormal>00004 � Fita de v�deo T-120 S-2 (Produto)</p>

<p class=MsoNormal>1 � Digito verificador</p>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p2 style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;
line-height:normal;mso-list:l29 level1 lfo3;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:12.0pt;font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'>Os Leitores �pticos<o:p></o:p></span></b></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A codifica��o
atrav�s das barras n�o ter� nenhuma fun��o se n�o houver um instrumento que
possa &quot;capturar&quot; as informa��es contidas nessas barras. Para que isso
ocorra, ou seja, para que exista esta interface, onde as informa��es sobre as
caracter�sticas de cada produto possam ser &quot;capturadas&quot;, codificadas
em um c�digo de barras e transformadas em informa��es intelig�veis por um
computador ou um PDV, � necess�rio um instrumento de leitura �ptica. Trata-se
de um equipamento cujo funcionamento esta baseado num conjunto de luzes que
podem ou n�o se refletir, de acordo com a presen�a ou aus�ncia das barras.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A partir da�, a
informa��o � transformada em uma linguagem que o computador entenda e possa
processar, realizando a atribui��o de pre�o ao produto, registrando a compra e
dando baixa no estoque, entre outras opera��es poss�veis.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os leitores
�pticos, ou &quot;scanners&quot;, como s�o mais habitualmente conhecidos, s�o
basicamente emissores de luz, que utilizam ccd's ou laser e que, a partir da
reflex�o desta luz, num conjunto de barras de duas cores diferentes, com
caracter�sticas distintas, decodifica a informa��o, disponibilizando-a para um
processamento posterior.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os scanners podem
ser m�veis ou fixos.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;line-height:normal'><u><span
style='font-size:12.0pt'>Scanners m�veis<o:p></o:p></span></u></p>

<p class=p3 style='margin-left:38.0pt;text-align:justify;line-height:normal'><span
style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>A leitura do
c�digo � feita manualmente, atrav�s de duas formas diferentes:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'>1<span style='mso-tab-count:1'>��������� </span>Scanner
de contato: na forma de uma caneta, possui na extremidade um receptor emissor
de luz. A leitura do c�digo acontece quando a ponta da caneta � deslocada sobre
o c�digo. Seu custo � baixo, mas apresenta alguns problemas quanto � leitura,
dependendo da inclina��o e da velocidade com que se usa a caneta.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly;tab-stops:19.0pt 37.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'>2.<span style='mso-tab-count:1'>�������� </span>Scanner
de aproxima��o: com ele n�o � necess�rio haver contato direto com o c�digo,
basta uma aproxima��o m�nima. Como vantagem ele diminui os erros na opera��o e
pode ser usado em superf�cies irregulares. Pelas caracter�sticas que apresenta
� um equipamento de custo mais elevado.<o:p></o:p></span></p>

<p class=p2 style='text-align:justify;line-height:normal'><span
style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p2 style='text-align:justify;line-height:normal'><u><span
style='font-size:12.0pt'>Scanners fixos<o:p></o:p></span></u></p>

<p class=MsoNormal style='text-align:justify;tab-stops:37.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Al�m
dos m�veis, existem tamb�m os scanners fixos. Neles, o reconhecimento do c�digo
ocorre pela sua passagem em frente a um feixe de luz. S�o aparelhos mais caros,
mas apresentam maiores facilidades: rapidez, precis�o e diminui��o dos erros de
leitura s�o as principais.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Avaliando
as op��es dispon�veis, o varejista pode se defrontar com uma delicada quest�o:
qual dos equipamentos � o mais indicado para a sua aplica��o?<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Para
obter a resposta, devem ser considerados, antes de mais nada, dois pontos
b�sicos:<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><span style='mso-tab-count:1'>����������� </span><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'>-<span style='mso-tab-count:1'>���������� </span>analisar
o volume de recursos dispon�vel para a automa��o dos processos da loja, em
termos de equipamentos;<o:p></o:p></span></p>

<p class=p4 style='margin-left:0cm;text-align:justify;text-indent:0cm;
line-height:normal;tab-stops:18.0pt 37.0pt'><span style='font-size:12.0pt'>-<span
style='mso-tab-count:2'>���������� </span>verificar o tipo de produto que ser�
manipulado no registro do caixa.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Na
primeira situa��o o montante de recursos dispon�vel poder� se constituir num
fator limitante para o uso de equipamentos mais sofisticados.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>No
segundo caso, a forma de manipula��o e a localiza��o das etiquetas e/ou c�digo
de barras nos produtos poder� vir a determinar o tipo de scanner a ser
utilizado.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Caso
os produtos sejam de f�cil manipula��o, a escolha poder� recair em qualquer um
dos tipos de scanners dispon�veis.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Havendo
a necessidade de leitura dos c�digos em grande velocidade, no caso de lojas com
alta rota��o de produtos, o scanner fixo � o mais apropriado. Se os produtos
forem de dif�cil manipula��o, pesados ou de grande volume, Os scanners m�veis
(manuais) s�o os mais indicados.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A
escolha do scanner mais apropriado depender� sempre da aplica��o espec�fica que
ele ter� em qualquer tipo de neg�cio.<o:p></o:p></span></p>

<p class=p5 align=center style='margin-left:0cm;text-align:center;text-indent:
0cm;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p5 style='text-align:justify;text-indent:-18.0pt;line-height:normal;
mso-list:l29 level1 lfo3;tab-stops:18.0pt list 36.0pt'><![if !supportLists]><span
style='font-size:12.0pt;font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'>As Balan�as Eletr�nicas<o:p></o:p></span></b></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:42.55pt;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>As
balan�as eletr�nicas com emiss�o de etiquetas em c�digo de barras ou com o
pre�o do produto impresso fazem parte do conjunto de equipamentos perif�ricos
usados na Automa��o Comercial.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Estas
s�o capazes de emitir, automaticamente, etiquetas com informa��es sobre produtos
n�o codificados, que necessitam de pesagem para a fixa��o do pre�o. Isso �
muito �til, por exemplo, no caso da compra de frutas e verduras, onde o
comprador prefere, ele mesmo, escolher os produtos e as quantidades que ser�o
compradas e n�o adquir�-los j� embalados.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Nesse caso, as
etiquetas tem duas fun��es principais. A primeira diz respeito a
cornpatibiliza��o dos produtos vendidos ao sisterna de coleta de dados
utilizado no caixa.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A segunda se
refere � agiliza��o no atendirnento da pesagern de alimentos, j� que essa
opera��o tem sua velocidade aumentada pela utiliza��o das balan�as. As
caracter�sticas das balan�as ir�o depender, essencialmente, das aplica��es a
que se destinarem, principalmente no que diz respeito � capacidade de peso e a
cornunica��o com outros sistemas, para a troca de infoma��es.<o:p></o:p></span></p>

<p class=p2 style='text-align:justify;line-height:normal'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p2 style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;
line-height:normal;mso-list:l29 level1 lfo3;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:12.0pt;font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'>A Transfer�ncia Eletr�nica de Fundos<o:p></o:p></span></b></p>

<p class=p2 style='text-align:justify;line-height:normal'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Grande parte das
transa��es que o varejo realiza envolvemn o sistema banc�rio. Diariamnente o
varejista convive com ele, seja no recebimento de pagamentos, seja para saldar
d�vidas, faturas, duplicatas e at� mesmo no caso dos movimentos que realiza.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Para agilizar este
fluxo j� existem dispon�veis equipamentos que possibilitam o uso de formas de
pagamento automatizadas. Para se ter uma id�ia das vantagens que esses equipamentos
trouxeram, imagine o n�mero de cheques que voc� recebeu em troca das
mercadorias vendidas. Agora, tente percorrer mentalmente o caminho que estes
cheques fizeram at� se transformarem em dinheiro, depositado na conta da sua
loja. Voc� n�o concorda que seria muito mais f�cil e menos dispendioso realizar
esta opera��o diretamente?<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A Transfer�ncia
Eletr�nica de Fundos foi desenvolvida justamente como uma solu��o para este
tipo de problema. Atrav�s dela os pagamentos podem ser efetuados atrav�s de
cart�es magn�ticos, (de bancos ou de cr�dito) e cuja opera��o requer,
normalmente, uma linha telef�nica dispon�vel e aparelhos especiais que cuidam
da comunica��o.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os servi�os de
transfer�ncia s�o oferecidos por prestadores que se encarregam de toda a
transfer�ncia do dinheiro entre bancos e entre contas correntes. O custo destas
opera��es limita-se, basicamente, ao aluguel do equipamento ou ao n�mero de
consultas realizadas.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Por ser uma
solu��o altamente vantajosa para todas as partes envolvidas, aconselha-se a fazer
contato com alguns fornecedores para verificar o custo/beneficio desta solu��o.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os consumidores
ser�o beneficiados na medida em que n�o haver� a necessidade que levem dinheiro
ou cheques para realizarem suas compras. Com isso, haver� um aumento na confiabilidade
da opera��o e uma diminui��o no tempo gasto para realiz�-la.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>No caso dos
varejistas, eles perceber�o uma diminui��o nos custos das transa��es e evitar�o
problemas com cheques devolvidos por raz�es diversas eliminando tamb�m a
necessidade de consultas sobre refer�ncias banc�rias para aprovarem os
pagamentos.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os bancos ter�o
diminuidos os custos de compensa��o e de transa��o de cheques, facilitando com
isso a vida dos seus clientes, consumidores e varejistas.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Existem,
basicamente, duas formas para que se realizem as transa��es eletr�nicas.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A primeira delas
requer a utiliza��o do cart�o magn�tico do banco do cliente. Neste caso, Os
d�bitos s�o feitos automaticamente na conta corrente dos consumidores. Algumas
administradoras oferecem como op��o um prazo para a compensa��o do pagamento,
como se fosse um cheque. Com isso � evitado o inc�modo que o d�bito caia
imediatamente na conta do consumidor. Outras oferecem op��es semelhantes ao do
cheque pr�-datado, fixando datas para os d�bitos dos valores dos pagamentos.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A segunda forma
para que a transa��o seja realizada implica na utiliza��o do cart�o de cr�dito
do cliente. Neste caso, existem algumas regras de pagamento e recebimento das
contas, realizadas em datas pr�-fixadas.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A grande vantagem
oferecida pela utiliza��o do sistema eletr�nico refere-se a aprova��o do
cart�o, que ocorre &quot;on line&quot;, sem a necessidade de consulta as listas
de cart�es bloqueados.<o:p></o:p></span></p>

<p class=p2 style='text-align:justify;line-height:normal'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p2 style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;
line-height:normal;mso-list:l29 level1 lfo3;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:12.0pt;font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'>Troca Eletr�nica de Dados (EDI)<o:p></o:p></span></b></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><b
style='mso-bidi-font-weight:normal'><span style="mso-spacerun: yes">�</span></b>A
utiliza��o da tecnologia da comunica��o de dados gerou para o varejo outra
interessante aplica��o. Trata-se do EDI (Electronic Data Interchange),
respons�vel pela troca eletr�nica de dados bidirecional.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Pode-se dizer
que a Troca Eletr�nica de Fundos � uma forma particular do EDI aplicada ao
sistema banc�rio.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Deste modo o
lojista pode estabelecer uma comunica��o direta com seus fornecedores,
diminuindo o tempo de coloca��o de pedidos e no tempo gasto para que eles sejam
processados, reduzindo, consequentemente, o tempo envolvido no processo de
reposi��o de estoques das empresas varejistas. Esta tecnologia abriu novas
perspectivas aos varejistas, permitindo-lhes a comunica��o completa de todo o
seu sistema de dados, desde o caixa at� o seu fomecimento.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Para que este
tipo de sistema seja poss�vel, existem duas formas principais:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'>1.<span style='mso-tab-count:
1'>�������� </span>Troca de dados entre a matriz e as filiais de uma mesma
loja, feita atrav�s de uma linha telef�nica e um modem, em determinados
per�odos do dia.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'>2.<span style='mso-tab-count:
1'>�������� </span>A troca eletr�nica de dados assume um papel de
intercomunicador entre empresas (fomecedores e compradores) permitindo tamb�m a
comunica��o com v�rios fomecedores, quando for poss�vel a utiliza��o de um
padr�o de comunica��o comum.</p>

<p class=MsoNormal style='text-align:justify;tab-stops:19.0pt 37.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Este tipo de
equipamento permite tamb�m a comunica��o com bancos possibilitando opera��es de
controle de cobran�as de duplicatas e de dep�sitos. Esta tecnologia tamb�m �
acess�vel ao empresario do pequeno varejo, onde ele pode ligar sua filial a
matriz, atrav�s da comunica��o de dados via rede telef�nica. Com isso ele
estar� facilitando o controle geral, centralizando suas opera��es num �nico
ponto, sem que sejam gerados custos adicionais elevados.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l29 level1 lfo3;
     tab-stops:list 36.0pt'><b style='mso-bidi-font-weight:normal'>Computadores
     e Redes de Computadores<o:p></o:p></b></li>
</ul>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Atrav�s do
desenvolvimento da tecnologia e da redu��o em seus pre�os, cada vez mais os
computadores est�o se tomando acess�veis aos varejistas. Em suas mais diversas
op��es os computadores estao alterando significativamente as atividades do
varejo atrav�s da velocidade de processamento, da facilidade de acesso aos
dados e da capacidade de armazenamento que possuem, principalmente nas
atividades de suporte, como controle de estoques, recebimento de mercadorias,
planejamento de exposi��o de produtos, simula��es de elasticidade em vendas, em
rela��o a promo��es, propaganda e displays, entre outras.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Em varejos de
pequeno porte e com baixa rota��o de produtos, o computador pode ser utilizado
tamb�m como um caixa eletr�nico. Nos per�odos de ociosidade, ele assume o papel
de suporte as atividades de Retaguarda, gerando relat�rios de controle sobre
produtos, estoques, financeiro, etc. � importante ressaltar que estas tarefas
n�o sejam realizadas em per�odos onde existam clientes na loja, caso contr�rio,
acabar� tornando o processo de atendimento mais demorado, gerando mais
problemas do que solu��es. Outra forma bastante difundida da utiliza��o da
tecnologia a servi�o do varejista s�o as LAN's (Local Area Network), ou Redes
Locais de Computadores. Neste caso, a troca de informa��es ocorre de modo mais
efetivo.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>As redes s�o as
respons�veis pela integra��o dos PDV's e scanners com o sistema central de
processamento da empresa, possibilitando as opera��es de verifica��o e controle
sobre os caixas e sobre o resultado geral obtido pela loja. A dimens�o criada
para o varejista tornou-se agora mais abrangente pois, al�m de permitir o
controle direto dos produtos nos pontos-de-venda, permitiu a ele ter ainda um
feedback das informa��es, interagindo com os consumidores e criando uma nova
comunica��o no caixa, na rela��o com os atendentes e com os consumidores. Essas
informa��es interessam tanto aos varejistas como tamb�m aos seus fornecedores.</p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>O que se percebe,
na pr�tica, � que as redes de computadores s�o as grandes respons�veis pela
diminui��o do ciclo de controle sobre as mercadorias. A utiliza��o desta
tecnologia nao � percebida diretamente pelos consumidores, uma vez que ela est�
mais relacionada com as atividades de suporte do varejo. Mais a frente
tornaremos a explicar o sistema de funcionamento de redes mais detalhadamente.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;line-height:normal'><span
style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt'>Os Terminais
Multim�dia<o:p></o:p></span></b></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Dentro do processo
de estabelecimento de uma comunicacao mais eficiente com os clientes de uma
loja, est�o sendo utilizados os terminais multim�dia, ou S�o Tom�s, como sao
mais conhecidos.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Estes terminais
tem acoplados a eles um sistema de leitura �ptica (scanner), um monitor
colorido, um computador e alto-falantes, que possibilitam ao consumidor ter
acesso a informa��es sobre determinados produtos no que diz respeito a pre�os,
promo��es, localiza��o desses produtos, formas de pagamento e apresenta��o de
lan�amentos.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Para que essa
tecnologia possa ser utilizada � necess�rio que exista uma infra�estrutura
tecnol�gica j� organizada, uma vez que estes terminais normalmente est�o
ligados na rede de computadores, que fomece as informa��es necess�rias para que
a conex�o seja realizada.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os monitores podem
ser utilizados nos caixas como uma forma adicional de comunica��o com o
consumidor, onde s�o acoplados ao PDV, fornecendo ao cliente informa��es sobre
alguns produtos, sobre o subtotal da sua compra e sobre a totaliza��o dessa
compra. Al�m disso, pode transmitir tamb�m algumas informa��es bastante �teis
quando o PDV estiver fora de uso.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os terminais
multim�dia podem tamb�m ser utilizados isoladamente na loja, com a finalidade
de fornecer aos clientes informa��es diversas, tais como promo��es, descontos,
localiza��o de produtos, etc., necessitando, por�m, que essas informa��es sejam
previamente programadas.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Trata-se de uma
tecnologia bastante interessante, oferecendo in�meras possibilidades de
intera��o com os clientes da loja, mas que ainda possui um custo um pouco
elevado, tornando-se de dif�cil acesso ao pequeno varejo, pelo menos
temporariamente.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Como os pre�os dos
equipamentos de inform�tica est�o sofrendo redu��es significativas, futuramente
os terminais multim�dia podem vir a tornar-se uma op��o bastante interessante
para os varejistas dos pequenos estabelecimentos.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><b>Vantagens da Automa��o
comercial<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Agilidade e qualidade ao atendimento</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Confiabilidade, eliminando erros de digita��o e contagem</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Controle de estoque, entrada de material, armazenagem e
distribui��o, reposi��o, transfer�ncia de mercadorias entre setores</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Redu��o de estoques</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Redu��o de custos financeiros</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Conhecimento melhor do consumidor, melhorando o atendimento e
ganhando a credibilidade do cliente</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Agilidade na atualiza��o de dados</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Reaproveitamento de pessoal, recoloca��o de funcion�rios</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Status para o estabelecimento e para o funcion�rio.</p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 align=center style='text-align:center;line-height:14.0pt;
mso-line-height-rule:exactly'><b><span style='font-size:14.0pt;mso-bidi-font-size:
12.0pt'>RESUMO<o:p></o:p></span></b></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<table border=1 cellspacing=0 cellpadding=0 width=784 style='width:470.5pt;
 border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
 <tr style='height:22.7pt'>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;padding:
  0cm 3.5pt 0cm 3.5pt;height:22.7pt'>
  <p class=p1 align=center style='text-align:center;line-height:14.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:12.0pt'>Sistema<o:p></o:p></span></b></p>
  </td>
  <td width=248 style='width:148.85pt;border:solid windowtext .5pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:22.7pt'>
  <p class=p1 align=center style='text-align:center;line-height:14.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:12.0pt'>Subsistema<o:p></o:p></span></b></p>
  </td>
  <td width=365 style='width:218.9pt;border:solid windowtext .5pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:22.7pt'>
  <p class=p1 align=center style='text-align:center;line-height:14.0pt;
  mso-line-height-rule:exactly'><b><span style='font-size:12.0pt'>Fun��o<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='height:17.0pt'>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:17.0pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>PDV<o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:17.0pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>leitor de c�digo de barras<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:17.0pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>identificar c�digo de produtos<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><![if !supportEmptyParas]>&nbsp;<![endif]><span
  style='font-size:12.0pt'><o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>impressoras<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>imprimir cupom fiscal e imprimir c�digo de barras<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><![if !supportEmptyParas]>&nbsp;<![endif]><span
  style='font-size:12.0pt'><o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>monitores<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>apresentar dados da compra e possibilitar entrada de
  dados<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>Hardware<o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>redes<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>integrar computadores eliminando mainframes<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>EDI<o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 align=center style='text-align:center;line-height:14.0pt;
  mso-line-height-rule:exactly'><span style='font-size:12.0pt'>-<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>permitir a comunica��o entre empresas (fornecedores
  e clientes)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>Compra Virtual<o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>Compra Virtual<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>permitir ao consumidor fazer compras sem sair de
  casa <o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>ECR<o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>ECR (resposta eficiente ao consumidor)<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>melhorar as opera��es envolvidas na cadeia log�stica
  de comercializa��o de produtos<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='height:17.0pt'>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:17.0pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><![if !supportEmptyParas]>&nbsp;<![endif]><span
  style='font-size:12.0pt'><o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:17.0pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:12.0pt;mso-ansi-language:EN-US'>CM (category
  management)<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:17.0pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>ger�ncia de categoria de produtos<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><![if !supportEmptyParas]>&nbsp;<![endif]><span
  style='font-size:12.0pt'><o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:12.0pt;mso-ansi-language:EN-US'>CRP (continuos
  replanishment program)<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>possibilita o suprimento cont�nuo de mercadorias
  pelo fornecedor com m�nima interfer�ncia d ocliente<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><![if !supportEmptyParas]>&nbsp;<![endif]><span
  style='font-size:12.0pt'><o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>CAO (computer assistes ordering)<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>gera pedidos automaticamente<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='height:17.0pt'>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:17.0pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><![if !supportEmptyParas]>&nbsp;<![endif]><span
  style='font-size:12.0pt'><o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:17.0pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  lang=EN-US style='font-size:12.0pt;mso-ansi-language:EN-US'>ABC (activity
  based costing)<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:17.0pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>custeio baseado em atividades<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>Terminais multim�dia<o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 align=center style='text-align:center;line-height:14.0pt;
  mso-line-height-rule:exactly'><span style='font-size:12.0pt'>-<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>fornece informa��es sobre produtos comercializados<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>Dinheiro eletr�nico<o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 align=center style='text-align:center;line-height:14.0pt;
  mso-line-height-rule:exactly'><span style='font-size:12.0pt'>-<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>cart�o com um chip que permite introduzir
  informa��es sobre uma conta corrente<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>TEF (Transfer�ncia eletr�nica de fundos)<o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 align=center style='text-align:center;line-height:14.0pt;
  mso-line-height-rule:exactly'><span style='font-size:12.0pt'>-<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>permitir ao usu�rio pagar suas contas � um
  estabelecimento comercial com dinheiro que sai eletronicamente de sua conta<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>Coletores de r�dio-frequ�ncia<o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 align=center style='text-align:center;line-height:14.0pt;
  mso-line-height-rule:exactly'><span style='font-size:12.0pt'>-<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>terminal port�til que transforma sinal de r�dio em
  el�trico<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>Programas<o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>administrativos <o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>programas que atendem a �rea administrativa da
  empresa<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><![if !supportEmptyParas]>&nbsp;<![endif]><span
  style='font-size:12.0pt'><o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>espec�ficos<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>programas de automa��o de front office ou de
  retaguarda<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><![if !supportEmptyParas]>&nbsp;<![endif]><span
  style='font-size:12.0pt'><o:p></o:p></span></p>
  </td>
  <td width=248 style='width:148.85pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>gerenciamento de g�ndolas<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>programas voltados � administrar espa�os em g�ndolas
  de supermecados<o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='font-size:14.0pt;mso-bidi-font-size:13.0pt;font-family:"TimesNewRoman\,Bold"'>AUTOMA��O
INDUSTRIAL<o:p></o:p></span></b></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt;font-family:"TimesNewRoman\,Bold"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt;font-family:"TimesNewRoman\,Bold"'>O que �
CAD/CAM/CAE?</span></b><b><span style='font-size:14.0pt;mso-bidi-font-size:
13.0pt;font-family:"TimesNewRoman\,Bold"'><o:p></o:p></span></b></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='font-size:13.0pt;font-family:"TimesNewRoman\,Bold"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'>CAD<o:p></o:p></span></b></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>Os sistemas
CAD � <i>Computer Aided Design </i>(Projeto Auxiliado por Computador) auxiliam
a cria��o, modifica��o, an�lise ou otimiza��o de um projeto. O software desses
sistemas � baseado em interface gr�fica orientada ao usu�rio. Podem ser
desenvolvidos prjetos mec�nicos, el�tricos, eletr�nicos, de engenharia civil, aeron�utica,
naval, etc.<o:p></o:p></span></p>

<p class=MsoBodyTextIndent style='text-align:justify;text-indent:1.0cm'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent style='text-align:justify;text-indent:1.0cm'>A
dimensionalidade se refere ao tipo de geometria processada e armazenada num
sistema CAD. Com rela��o a essa caracter�stica os sistemas CAD podem ter as
seguintes representa��es:</p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b><i><span style='mso-bidi-font-size:13.0pt'>- Sistemas
de duas dimens�es</span></i></b><i><span style='mso-bidi-font-size:13.0pt'> </span></i><span
style='mso-bidi-font-size:13.0pt'>(2D), equivalente ao desenho em papel. Cada
ponto � representado por dois n�meros (p. ex. a dist�ncia horizontal em rela��o
� borda esquerda do papel e a dist�ncia vertical da borda inferior do papel).
H� representa��o tamb�m para segmentos, c�rculos, arcos e outras curvas planares.
Os primeiros sistemas CAD baseavam-se em representa��o 2D. Ainda hoje, apesar
do desenvolvimento de sistemas 3D, a representa��o em 2D � melhor para realizar
as atividades de documenta��o e detalhamento final de um projeto. H� limita��es
sobretudo na visualiza��o dos objetos.<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><i><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></i></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b><i><span style='mso-bidi-font-size:13.0pt'>- Sistemas
de duas e meia dimens�es</span></i></b><i><span style='mso-bidi-font-size:13.0pt'>
</span></i><span style='mso-bidi-font-size:13.0pt'>(2 � D) , que acrescentam �s
representa��es 2D a representa��o de objetos tridimensionais tais como uma
se��o de corte arbitr�ria. Podem ser calculadas propriedades de objetos
s�lidos, tais como o volume.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b><i><span style='mso-bidi-font-size:13.0pt'>- Sistemas
de tr�s dimens�es</span></i></b><i><span style='mso-bidi-font-size:13.0pt'> </span></i><span
style='mso-bidi-font-size:13.0pt'>(3D), <b><i>wire frame</i></b>, que utilizam
segmentos de reta, c�rculos, arcos e outras curvas em tr�s dimens�es e que
trabalham com m�ltiplas vis�es (de qualquer dire��o arbitr�ria) e perspectiva.
A representa��o de um paralelep�pedo, por exemplo, � feita atrav�s de suas 12
bordas.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b><i><span style='mso-bidi-font-size:13.0pt'>- Sistemas
de tr�s dimens�es </span></i></b><span style='mso-bidi-font-size:13.0pt'>(3D), <b><i>superf�cies</i></b>,
onde cada s�lido � representado por seus limites, que consistem em superf�cies
planares, cil�ndricas, c�nicas, esf�ricas. � a representa��o mais utilizada no
projeto de autom�veis (sobretudo parte externa e painel).<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b><i><span style='mso-bidi-font-size:13.0pt'>- Sistemas
de tr�s dimens�es </span></i></b><span style='mso-bidi-font-size:13.0pt'>(3D), <b><i>s�lidos</i></b>,
que trabalham de forma similar com a utiliza��o de blocos para construir um
sistema s�lido real. Possuem um conjunto de objetos primitivos e podem mover
(transla��o, rota��o) estes objetos, al�m de combin�-los usando um conjunto de
opera��es b�sicas (uni�o, intersec��o, diferen�a). Estes sistemas permitem a
melhor visualiza��o.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-size:13.0pt'>A tabela a seguir apresenta os principais
m�ritos de cada dimensionalidade.<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<table border=1 cellspacing=0 cellpadding=0 style='border-collapse:collapse;
 border:none;mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
 <tr style='height:21.2pt'>
  <td width=377 style='width:225.9pt;border:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:21.2pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
  style='mso-bidi-font-size:13.0pt'>Dimensionalidade<o:p></o:p></span></b></p>
  </td>
  <td width=377 style='width:225.9pt;border:solid windowtext .5pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt;
  height:21.2pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
  style='mso-bidi-font-size:13.0pt'>M�rito<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr>
  <td width=377 valign=top style='width:225.9pt;border:solid windowtext .5pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>2D<b><o:p></o:p></b></span></p>
  </td>
  <td width=377 valign=top style='width:225.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Documenta��o<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Detalhamento<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Controle num�rico 2D<b><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr>
  <td width=377 valign=top style='width:225.9pt;border:solid windowtext .5pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>2 � D<b><o:p></o:p></b></span></p>
  </td>
  <td width=377 valign=top style='width:225.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Partes torneadas<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Partes esculpidas<b><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr>
  <td width=377 valign=top style='width:225.9pt;border:solid windowtext .5pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  lang=EN-US style='mso-bidi-font-size:13.0pt;mso-ansi-language:EN-US'>3D wire
  frame<b><o:p></o:p></b></span></p>
  </td>
  <td width=377 valign=top style='width:225.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Extens�o simples do 2D<b><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr>
  <td width=377 valign=top style='width:225.9pt;border:solid windowtext .5pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>3D superf�cies<b><o:p></o:p></b></span></p>
  </td>
  <td width=377 valign=top style='width:225.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Remo��o de linhas escondidas<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Controle num�rico multieixo<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Especifica��es de superf�cies<b><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr>
  <td width=377 valign=top style='width:225.9pt;border:solid windowtext .5pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>3D s�lidos <b><o:p></o:p></b></span></p>
  </td>
  <td width=377 valign=top style='width:225.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Visualiza��o<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>An�lise de elementos finitos<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>An�lise din�mica<b><o:p></o:p></b></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>Uma tend�ncia
dos sistemas CAD modernos � a inclus�o de caracter�sticas de topologia, al�m
das de geometria. Entende-se por <b>geometria </b>a posi��o, orienta��o e o
tamanho de cada elemento geom�trico no projeto de um objeto. <b>Topologia </b>�
a conectividade entre esses elementos geom�tricos.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>Os <b>sistemas
orientados apenas a geometria </b>(sistemas CAD cl�ssicos) armazenam apenas a
geometria final.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>Os <b>sistemas
param�tricos </b>trabalham com topologia, armazenando os comandos usados pelo
usu�rio para definir a geometria. Por exemplo: quando um usu�rio especifica que
um arco pode ser criado com um dado raio, tangente ao final de um segmento
previamente definido e com um dado �ngulo incluso, pode ser armazenada a
seq��ncia de opera��es executada para constru��o da geometria. Se o segmento
for modificado o sistema param�trico pode recuperar a constru��o do arco
(apesar de ter sido alterada a geometria, que far� com que o �ngulo interno
seja diferente).<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>Os <b>sistemas
variacionais </b>s�o ainda mais avan�ados, pois armazenam a topologia tanto
quanto a geometria. Por exemplo, um usu�rio entra com um arco, especifica que
possui um dado raio, tangente ao final de um segmento previamente definido e
com um dado �ngulo. O sistema variacional guarda n�o somente a localiza��o dos
pontos e do arco, mas tamb�m as regras para o arco. Se, mais tarde, o usu�rio
decide trocar a regra do �ngulo interno por uma regra de tang�ncia com outro
segmento, ele deve apenas selecionar a regra do �ngulo incluso e troc�-la por
uma regra de tang�ncia apropriada. O sistema recupera as outras regras sobre o
arco e automaticamente recalcula a geometria.<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'>CAID<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>Uma
especialidade de sistemas CAD tem se desenvolvido nos �ltimos anos, para
suportar as caracter�sticas especiais das atividades de concep��o inicial de
modelos, antes do projeto propriamente dito: os sistemas CAID � <i>Computer
Aided Industrial Design </i>(Desenho Industrial Auxiliado por Computador). Os
recursos gr�ficos s�o, tamb�m aqui, muito utilizados, contando ainda com a
inclus�o de recursos sofisticados de tratamento de cores e sombras, para
estudos da apar�ncia do futuro produto.<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'>CAE<o:p></o:p></span></b></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>As atividades
de an�lise de engenharia s�o auxiliadas pelos sistemas CAE � <i>Computer Aided
Engineering </i>(Engenharia Auxiliada por Computador). Tendo-se desenvolvido um
projeto em CAD (mesmo que sem o detalhamento final), � poss�vel realizar v�rios
estudos baseados na geometria estabelecida, acrescida com informa��es
adicionais relevantes para a an�lise a ser realizada (p.ex. tipo e densidade do
material, capacidade t�rmica, etc.). A an�lise pode envolver:<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l21 level1 lfo4;tab-stops:list 36.0pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-size:
13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>c�lculo de
esfor�os;<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l21 level1 lfo4;tab-stops:list 36.0pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-size:
13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>c�lculos de
transfer�ncia de calor;<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l21 level1 lfo4;tab-stops:list 36.0pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-size:
13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>uso de equa��es
diferenciais para descrever o comportamento din�mico do sistema sendo projetado;
<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l21 level1 lfo4;tab-stops:list 36.0pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-size:
13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>simula��o de
mecanismo;<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l21 level1 lfo4;tab-stops:list 36.0pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-size:
13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>prototipa��o
r�pida atrav�s da estereolitografia, t�cnica que permite gerar um<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>modelo f�sico
real.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>Exemplo 1 � <i>An�lise
de propriedades de massa</i>: podem ser fornecidas propriedades<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>de objetos s�lidos
sendo analisados, tais como �rea de superf�cie, peso, volume, centro de
gravidade e momento de in�rcia. Para uma superf�cie plana (ou se��o transversal
de um objeto s�lido) pode incluir per�metro, �rea e propriedades de in�rcia.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>Exemplo 2 � <i>An�lise
de elementos finitos</i>: o objeto � dividido em um grande n�mero de elementos
finitos (usualmente de forma retangular ou triangular) que formam uma rede de
interconex�o de n�s. Usando computadores de grande capacidade computacional, o
objeto completo pode ser analisado em rela��o a esfor�os, transfer�ncia de
calor e outras caracter�sticas, atrav�s do c�lculo do comportamento de cada n�.<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'>CAM<o:p></o:p></span></b></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>CAM � <i>Computer
Aided Manufacturing </i>(Fabrica��o Auxiliada por Computador) pode ser definido
como o uso de sistemas computacionais para planejar, gerenciar e controlar as
opera��es de uma planta de fabrica��o atrav�s de uma interface direta ou
indireta com os recursos de produ��o da planta. H� duas categorias de
aplica��es:<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>1. Monitoramento e
controle do processo de fabrica��o: aplica��es diretas em que o computador �
conectado diretamente ao processo.<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>2. Suporte �
fabrica��o: aplica��es indiretas em que o computador � usado para suporte �s
opera��es de produ��o da planta, sem que haja uma interface direta entre o
computador e o processo. Exemplos:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l21 level1 lfo4;tab-stops:list 36.0pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-size:
13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>prepara��o de
programas de controle num�rico (atrav�s de p�s-procesadores que geram c�digo
para m�quinas CNC a partir da base de dados do projeto em CAD);<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l21 level1 lfo4;
tab-stops:list 36.0pt;mso-layout-grid-align:none;text-autospace:none'><![if !supportLists]><span
style='mso-bidi-font-size:13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>projeto de
ferramentas;<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l21 level1 lfo4;
tab-stops:list 36.0pt;mso-layout-grid-align:none;text-autospace:none'><![if !supportLists]><span
style='mso-bidi-font-size:13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>projeto de
moldes;<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l21 level1 lfo4;
tab-stops:list 36.0pt;mso-layout-grid-align:none;text-autospace:none'><![if !supportLists]><span
style='mso-bidi-font-size:13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>planejamento do
processo automatizado por computador; <o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l21 level1 lfo4;
tab-stops:list 36.0pt;mso-layout-grid-align:none;text-autospace:none'><![if !supportLists]><span
style='mso-bidi-font-size:13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>padr�es de
trabalho gerados por computador (p.ex. tempos padr�o);<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l21 level1 lfo4;
tab-stops:list 36.0pt;mso-layout-grid-align:none;text-autospace:none'><![if !supportLists]><span
style='mso-bidi-font-size:13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>programa��o da
produ��o;<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l21 level1 lfo4;
tab-stops:list 36.0pt;mso-layout-grid-align:none;text-autospace:none'><![if !supportLists]><span
lang=EN-US style='mso-bidi-font-size:13.0pt;mso-ansi-language:EN-US'>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span lang=EN-US style='mso-bidi-font-size:13.0pt;
mso-ansi-language:EN-US'>MRP (Material Requirement Planning).<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
lang=EN-US style='mso-bidi-font-size:13.0pt;mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'>CIM<o:p></o:p></span></b></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>A integra��o
dos diversos processos de uma organiza��o � uma necessidade. O conceito de CIM
� <i>Computer Integrated Manufacturing </i>(Fabrica��o Integrada por<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>Computador)
est� voltado exatamente para a disponibiliza��o da informa��o necess�ria em
toda a empresa. Quanto maior a integra��o de informa��es e atividades, maior a
capacidade da empresa de melhorar seu espa�o competitivo. As principais
vantagens buscadas s�o:<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l21 level1 lfo4;
tab-stops:list 36.0pt;mso-layout-grid-align:none;text-autospace:none'><![if !supportLists]><span
style='mso-bidi-font-size:13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>produtos de
alta qualidade;<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l21 level1 lfo4;
tab-stops:list 36.0pt;mso-layout-grid-align:none;text-autospace:none'><![if !supportLists]><span
style='mso-bidi-font-size:13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>projetos de
novos e melhores produtos;<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l21 level1 lfo4;
tab-stops:list 36.0pt;mso-layout-grid-align:none;text-autospace:none'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]><span style='mso-bidi-font-size:13.0pt'>prazos de entrega mais
curtos;</span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l21 level1 lfo4;
tab-stops:list 36.0pt;mso-layout-grid-align:none;text-autospace:none'><![if !supportLists]><span
style='mso-bidi-font-size:13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>maior
produtividade e menores custos;<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l21 level1 lfo4;
tab-stops:list 36.0pt;mso-layout-grid-align:none;text-autospace:none'><![if !supportLists]><span
style='mso-bidi-font-size:13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>capacidade de
antecipa��o e rea��o r�pida a mudan�as;<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l21 level1 lfo4;
tab-stops:list 36.0pt;mso-layout-grid-align:none;text-autospace:none'><![if !supportLists]><span
style='mso-bidi-font-size:13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>administra��o
eficaz de recursos.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-size:13.0pt'>Para isso � necess�rio:<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l21 level1 lfo4;tab-stops:list 36.0pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-size:
13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>integrar
aplica��es, ou seja, trabalhar com uma base de dados comum (ou pelo menos com
interfaces bem definidas) para projeto, an�lises de engenharia, prepara��o
t�cnica, planejamento, monitoramento e controle da produ��o. <o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l21 level1 lfo4;tab-stops:list 36.0pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportLists]>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]><span style='mso-bidi-font-size:13.0pt'>integrar hardware e
software, evitando incompatibilidades.</span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><b>Conceitos e exemplos de CAD/CAM/ CAE<o:p></o:p></b></p>

<p class=MsoNormal><b><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:24.0pt'>Projeto
assistido por computador (<b><i>Computer Aided Design � CAD</i></b>) /
Engenharia assistida por computador (<b><i>Computer Aided Engineering</i></b> <b><i>-
CAE</i></b>) Manufatura Assistida por Computador (<b><i>Computer Aided
Manufacturing - CAM</i></b>).</p>

<p class=MsoNormal style='text-align:justify;text-indent:24.0pt'>O CAD inclui
um grupo de aplica��es que permitem aos escrit�rios t�cnicos, designers e
engenheiros conceber, testar, avaliar e definir um produto para fabrica��o no
menor tempo poss�vel (Tempo para comercializar). O conceito de CAD, ent�o, n�o
s� se refere ao conceito de representa��o gr�fica � matem�tica, mais que tudo
isso, o CAD excede este significado na sua simultaneidade e integra��o no
processo de desenvolvimento, velocidade de projeta��o e distribui��o de
informa��es (<b><i>Figura 1</i></b>).</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><!--[if gte vml 1]><v:shape id="_x0000_s1030" type="#_x0000_t75"
 alt="" style='position:absolute;left:0;text-align:left;margin-left:0;
 margin-top:2.45pt;width:169.5pt;height:126.05pt;z-index:2;mso-wrap-edited:f;
 mso-position-horizontal:left' wrapcoords="-69 0 -69 21507 21600 21507 21600 0 -69 0">
 <v:imagedata src="./arquivos/image005.png" o:href="http://www.quatter.com.br/solu/img/fig1.gif"/>
 <w:wrap type="square"/>
</v:shape><![endif]--><![if !vml]><img width=226 height=168
src="./arquivos/image006.gif" align=left hspace=12 v:shapes="_x0000_s1030"><![endif]></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><em><b><span style='font-size:10.0pt;mso-bidi-font-size:
7.5pt'>Figura 1- Desenho de CAD</span></b></em><em><span style='font-size:10.0pt'>.
O modelamento s�lido atrav�s de <b>features</b> � bastante intuitivo, pois a
partir de um s�lido inicial o projetista segue adicionando e removendo material
at� chegar � pe�a final. O desenho 3D realiza-se no contexto da montagem, e o
detalhamento � facilitado com a gera��o autom�tica de vistas e cortes.</span></em><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent2 style='text-align:justify'><span style='font-family:
"Times New Roman"'>Os softwares de sistema CAD trabalham objetos
tridimensionais por meio do qual pode ser levada proje��o bidimensional,
volum�tricas, descri��es, montagens, c�lculo de elementos finitos, de simula��o
de programas CNC, ou de exporta��o &quot;de arquivos STL&quot; para m�quinas de
prototipagem r�pida. Ao mesmo tempo eles possuem bancos de dados de
propriedades (materiais, bibliotecas, toler�ncias espec�ficas, etc.).<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.0pt;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:7.5pt'>A evolu��o do
c�lculo estrutural voltado para o dimensionamento de estruturas e componentes
mec�nicos � um bom exemplo da automatiza��o na engenharia pelo CAE. Sem o
computador, os c�lculos eram executados manualmente atrav�s de m�todos
anal�ticos, e era necess�rio reduzir ao m�nimo a quantidade de opera��es.
Diversas caracter�sticas do problema real n�o podiam ser consideradas, poucas
alternativas de projeto eram analisadas e a utiliza��o de altos coeficientes de
seguran�a resultava em estruturas superdimensionadas. A tecnologia de CAE mudou
radicalmente este cen�rio, pois tal ferramenta permite a realiza��o de uma
grande quantidade de c�lculos em tempo reduzido. O projetista fica liberado do
trabalho bra�al, concentrando-se na atividade de projetar com mais criatividade.
A simula��o computacional de um modelo permite a avalia��o de um maior n�mero
de varia��es do projeto, com custos e prazos menores - reduzindo a necessidade
de constru��o de v�rios prot�tipos.<o:p></o:p></span></p>

<p class=MsoBodyTextIndent2 style='text-align:justify'><span style='font-family:
"Times New Roman"'>Os softwares de CAE utilizam modelos digitais para simular
fen�menos reais atrav�s de m�todos num�ricos (<b><i>figura 2</i></b>). Os
sistemas CAE atualmente mais difundidos s�o baseados no m�todo dos elementos
finitos, o qual discretiza o desenho de CAD em</span><span style='font-size:
7.5pt;font-family:"Times New Roman";color:silver'> </span><span
style='font-family:"Times New Roman"'>muitas partes pequenas, resolvendo ent�o
um conjunto de equa��es alg�bricas para obter os resultados desejados em fun��o
do carregamento e das condi��es de contorno. Os softwares de CAE baseados em
an�lise por elementos finitos (FEA) s�o largamente utilizados para o c�lculo de
tens�es, deslocamentos, vibra��o, transfer�ncia de calor, escoamento de
fluidos, instala��es industriais e outras aplica��es.<o:p></o:p></span></p>

<p class=MsoBodyTextIndent2><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyTextIndent2 align=center style='text-align:center;text-indent:
0cm'><span style='font-family:"Times New Roman"'><!--[if gte vml 1]><v:shape
 id="_x0000_i1025" type="#_x0000_t75" alt="" style='width:312pt;height:111pt'>
 <v:imagedata src="./arquivos/image007.png" o:href="http://www.quatter.com.br/solu/img/fig2.gif"/>
</v:shape><![endif]--><![if !vml]><img width=416 height=148
src="./arquivos/image008.jpg" v:shapes="_x0000_i1025"><![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:60.8pt;margin-bottom:
0cm;margin-left:54.0pt;margin-bottom:.0001pt;text-align:justify;mso-layout-grid-align:
none;text-autospace:none'><em><b><span style='font-size:10.0pt;mso-bidi-font-size:
7.5pt'>Figura 2</span></b></em><em><span style='font-size:10.0pt'> - Simula��o
de uma l�mina submetida � flambagem pela a��o de uma mecanismo. Este software
combina an�lises cinem�tica e din�mica de corpos r�gidos/flex�veis com an�lises
de tens�es lineares e n�o-lineares por elementos finitos. A integra��o do
sistema permite a visualiza��o dos resultados atrav�s de uma anima��o realista.<o:p></o:p></span></em></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-indent:1.0cm'><span style='mso-bidi-font-size:7.5pt'>Al�m
da an�lise por elementos finitos, existem outros programas CAE que tamb�m
realizam simula��es em prot�tipos virtuais para a an�lise cinem�tica (<b><i>Figura
3</i></b>) e din�mica de mecanismos no ambiente Windows, em 2 ou 3 dimens�es.
Este sistema reproduz no computador o funcionamento real de uma montagem
projetada em CAD, gerando gr�ficos de par�metros e anima��es na tela.<o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-indent:36.0pt'><span style='mso-bidi-font-size:7.5pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-indent:36.0pt'><span style='mso-bidi-font-size:7.5pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-indent:36.0pt'><!--[if gte vml 1]><v:shape id="_x0000_s1031"
 type="#_x0000_t75" alt="" style='position:absolute;left:0;text-align:left;
 margin-left:0;margin-top:1.85pt;width:221.7pt;height:147.4pt;z-index:3;
 mso-wrap-edited:f;mso-position-horizontal:left' wrapcoords="-123 0 -123 21415 21600 21415 21600 0 -123 0">
 <v:imagedata src="./arquivos/image009.png" o:href="http://www.quatter.com.br/solu/img/fig3.gif"/>
 <w:wrap type="square"/>
</v:shape><![endif]--><![if !vml]><img width=296 height=196
src="./arquivos/image010.gif" align=left hspace=12 v:shapes="_x0000_s1031"><![endif]><em><b><span
style='font-size:10.0pt'>Figura 3</span></b></em><em><span style='font-size:
10.0pt'> - An�lise cinem�tica e din�mica de um mecanismo, realizada com o
software WORKING MODEL. Est�o sendo considerados tamb�m efeitos de colis�o e
gravidade. As pe�as foram modeladas no software de CAD mec�nico SOLID EDGE</span></em><em><span
style='font-size:7.5pt;mso-bidi-font-size:10.0pt;color:silver'>.</span></em><span
style='mso-bidi-font-size:7.5pt'><o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-indent:36.0pt'><span style='mso-bidi-font-size:7.5pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-indent:36.0pt'><span style='mso-bidi-font-size:7.5pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-indent:1.0cm'><span style='mso-bidi-font-size:7.5pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-indent:1.0cm'><span style='mso-bidi-font-size:7.5pt'>Um
Software de CAM pode, por exemplo, selecionar os melhores jogos de ferramentas
cortantes para um material e determinar a velocidade da opera��o atrav�s da
rotina que propicia o melhor rendimento. O software gera uma imagem de exibi��o
chamada de <b><i>toolpath</i></b>, isso mostra como a ferramenta cortar� o
material, muito parecido com o demonstrativo de pr�-impress�o em exibi��es de
programas associados a impressoras, que d� um preview da p�gina antes de ser
impressa. O sistema CAM junto ao computador ligado e sincronizado a uma
ferramenta el�trica, como uma broca ou um torno mec�nico, cria e determina o
melhor processo de manufatura, seja ela um modelamento de uma pe�a ou a
estampagem e fura��o em uma chapa de a�o. O CAM determina os melhores
procedimentos industriais globais para uso em uma planta industrial, inclusive
a prova e o controle dos produtos acabados (<b><i>Figura 4</i></b>).<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><!--[if gte vml 1]><v:shape id="_x0000_s1032"
 type="#_x0000_t75" alt="" style='position:absolute;left:0;text-align:left;
 margin-left:0;margin-top:50.75pt;width:150pt;height:138pt;z-index:4;
 mso-wrap-edited:f;mso-position-horizontal:left' wrapcoords="-108 0 -108 21483 21600 21483 21600 0 -108 0">
 <v:imagedata src="./arquivos/image011.png" o:href="http://www.quatter.com.br/solu/img/fig4.gif"/>
 <w:wrap type="square"/>
</v:shape><![endif]--><![if !vml]><img width=200 height=184
src="./arquivos/image012.gif" align=left hspace=12 v:shapes="_x0000_s1032"><![endif]><em><b><span
style='font-size:10.0pt'><o:p></o:p></span></b></em></p>

<p class=MsoNormal style='text-align:justify'><em><b><span style='font-size:
10.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></em></p>

<p class=MsoNormal style='text-align:justify'><em><b><span style='font-size:
10.0pt'>Figura 4</span></b></em><em><span style='font-size:10.0pt'> - Simula��o
de uma usinagem, em ambiente PC/Windows. Existem m�dulos para a programa��o de
diversos tipos de usinagem CNC, de 2 at� 5 eixos.</span></em><span
style='font-size:10.0pt;mso-bidi-font-size:7.5pt'><o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-indent:36.0pt'><span style='mso-bidi-font-size:7.5pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-indent:36.0pt'><span style='mso-bidi-font-size:7.5pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-indent:36.0pt'><span style='mso-bidi-font-size:7.5pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-indent:36.0pt'><span style='mso-bidi-font-size:7.5pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-indent:36.0pt'><span style='mso-bidi-font-size:7.5pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Os primeiros
passos neste processo de ferramentas integradas para o projeto com aux�lio de
computador compreendem o uso de Desenhos feitos no software para capturar as
id�ias de design iniciais e produzir desenhos de engenharia precisos, fazendo
desde a modelagem at� documenta��o t�cnica precisa do produto ou objeto (CAD).
Logo, os engenheiros usam software de an�lise (CAE) para assegurar que a pe�a,
objeto ou produto � bastante forte. Na seq��ncia os dados s�o manipulados para
a produ��o de um prot�tipo, ou modelo. No passo final o software de CAM
controla a m�quina que produz a pe�a, objeto ou produto.</p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-indent:1.0cm'>Na fase de concep��o, s�o combinadas
t�cnicas de constru��o e gr�ficos de computador para produzir modelos de
objetos. Os desenhistas manipulam e testam estes modelos em telas de exibi��o
de v�deo at� que tenham o melhor equil�brio de caracter�sticas, inclusive
facilidade de produ��o e custo. A informa��o de CAD � <span style='mso-bidi-font-size:
7.5pt'>Na fase de concep��o, s�o combinadas t�cnicas de constru��o e gr�ficos
de computador para produzir modelos de objetos. Os desenhistas manipulam e
testam estes modelos em telas de exibi��o de v�deo at� que tenham o melhor
equil�brio de caracter�sticas, inclusive facilidade de produ��o e custo. A
informa��o de CAD � combinada ent�o com CAE e procedimentos de CAM por bancos
de dados compartilhados. Hoje, � poss�vel executar o processo integralmente por
computador<o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify'><b><u><span style='font-size:14.0pt;mso-bidi-font-size:
12.0pt'>Aplica��o de CAE na Medicina<o:p></o:p></span></u></b></p>

<p class=MsoNormal style='text-align:justify'><b><u><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></u></b></p>

<p style='margin-top:0cm;text-align:justify;text-indent:30.0pt'><span
style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>O modelamento
computacional do corpo humano, os sofisticados sistemas de diagn�stico por
imagens, o projeto e a fabrica��o de equipamentos m�dico-hospitalares s�o
apenas alguns exemplos de como a medicina tem sido intensamente beneficiada
pelos recentes avan�os da inform�tica. A Engenharia Biom�dica � portanto uma
t�pica �rea para a aplica��o de sistemas CAD/CAE/CAM, onde as mais avan�adas
tecnologias s�o colocadas a servi�o da sa�de. Descreveremos neste artigo alguns
estudos de casos que ilustram aplica��es de sistemas CAE na medicina, abordando
mais especificamente a an�lise de tens�es por elementos finitos.<o:p></o:p></span></p>

<p style='margin-top:0cm'><u><span style='font-family:"Times New Roman"'>Otimiza��o
de �rtese ortop�dica na AACD<o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify'><span
style='font-family:"Times New Roman"'>A Associa��o de Assist�ncia � Crian�a
Defeituosa (AACD) � uma das mais renomadas entidades filantr�picas do Brasil,
prestando relevantes servi�os � comunidade atrav�s de suas instala��es
hospitalares e oficinas. O Engenheiro Milton Seigui Oshiro, coordenador do
Laborat�rio de Pesquisas em Bioengenharia da AACD, tem utilizado sistemas
CAD/CAE/CAM para projeto, otimiza��o e fabrica��o de �rteses e pr�teses
ortop�dicas, bem como para o desenvolvimento de equipamentos destinados ao
teste de tais componentes.<o:p></o:p></span></p>

<p class=MsoBodyTextIndent3>Um dos trabalhos desenvolvidos pela AACD foi a
an�lise estrutural de uma �rtese, a qual constitui-se num aparelho ortop�dico
utilizado no suporte a um membro deficiente. Ap�s o modelamento tridimensional
em CAD da haste inferior do joelho da �rtese, uma an�lise de tens�es com o
software ALGOR mostrou o efeito de um furo na concentra��o de tens�es do
componente.</p>

<p class=MsoBodyTextIndent3><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent3><!--[if gte vml 1]><v:shape id="_x0000_s1033"
 type="#_x0000_t75" alt="ortese.gif (8530 bytes)" style='position:absolute;
 left:0;text-align:left;margin-left:0;margin-top:3.6pt;width:194.25pt;height:145.5pt;
 z-index:5;mso-wrap-edited:f;mso-position-horizontal:left' wrapcoords="-83 0 -83 21489 21600 21489 21600 0 -83 0">
 <v:imagedata src="./arquivos/image013.png" o:href="http://www.cae.com.br/images/ortese.gif"/>
 <w:wrap type="square"/>
</v:shape><![endif]--><![if !vml]><img width=259 height=194
src="./arquivos/image014.gif" align=left hspace=12
alt="ortese.gif (8530 bytes)" v:shapes="_x0000_s1033"><![endif]></p>

<p class=MsoBodyTextIndent3><em>An�lise de tes�es em �rtese da AACD (Brasil),
para o estudo da concentra��o de tens�es e otimiza��o do projeto. Outros
projetos est�o em andamento com o uso de sistemas CAD/CAE/CAM.</em></p>

<p class=MsoBodyTextIndent3 style='text-indent:0cm'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent3><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent3><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent3><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent3><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt'><u><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt'><u><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt'><u><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt'><u><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt'><u><span style='font-family:"Times New Roman"'>An�lise
das causas e tratamentos da escoliose<o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt'><u><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify'><span
style='font-family:"Times New Roman"'>A escoliose � uma deformidade da coluna
vertebral que se desenvolve durante a fase de crescimento, consistindo-se numa
curvatura lateral da coluna vertebral e numa rota��o axial da v�rtebra. A
escoliose pode ser tratada com a utiliza��o de um aparelho durante v�rios anos,
ou atrav�s de cirurgia. Muitos pesquisadores t�m tentado responder tr�s
quest�es centrais sobre a escoliose:<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt'><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l25 level1 lfo5;
     tab-stops:list 36.0pt'>Qual � a causa da doen�a? </li>
 <li class=MsoNormal style='text-align:justify;mso-list:l25 level1 lfo5;
     tab-stops:list 36.0pt'>Quais s�o os fatores mec�nicos respons�veis pela
     evolu��o da doen�a at� uma deformidade grave? </li>
 <li class=MsoNormal style='text-align:justify;mso-list:l25 level1 lfo5;
     tab-stops:list 36.0pt'>As t�cnicas cir�rgicas atuais poderiam ser aperfei�oadas
     atrav�s da aplica��o dos princ�pios da mec�nica? </li>
</ul>

<p class=MsoNormal style='margin-left:18.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:24.0pt'><span
style='font-family:"Times New Roman"'>Uma equipe de pesquisadores da
Universidade de Vermont utilizou o software <i>Algor</i> de an�lise por
elementos finitos na procura de respostas para estas quest�es, atrav�s do
desenvolvimento de uma s�rie de tr�s modelos de elementos finitos.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:24.0pt'><span
style='font-family:"Times New Roman"'>O primeiro modelo objetivou o estudo da
origem e das causas da escoliose. Diversos estudos cl�nicos com raio-X
demonstraram que muitos pacientes possuem costelas mais longas no lado convexo
da escoliose, sugerindo que este crescimento anormal possa ser uma causa da
doen�a. O modelo de elementos finitos foi desenvolvido para demonstrar os
efeitos que o crescimento assim�trico de costelas pode ter sobre a curvatura da
coluna vertebral. O segundo modelo foi desenvolvido para estudar diversas
hip�teses sobre os mecanismos da progress�o da escoliose, e os seus efeitos
sobre a geometria da coluna vertebral. O terceiro modelo foi idealizado para
simular o tratamento cir�rgico da escoliose.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:24.0pt'><span
style='font-family:"Times New Roman"'>O desenho de CAD com a geometria do
modelo foi elaborado a partir de imagens de raio-X obtidas de pacientes com
escoliose. Foram utilizados elementos de viga para representar as costelas, o
esterno e a cartilagem costal que os conecta; os ligamentos intercostais foram
representados por elementos de barra. O efeito do crescimento do paciente foi
modelado atrav�s de analogias com efeitos de dilata��o t�rmica e for�as atuando
nos elementos do modelo. Os resultados preliminares dos dois primeiros modelos
mostraram que o efeito isolado das deforma��es el�sticas n�o poderia produzir
as deformidades encontradas na escoliose, embora um crescimento assim�trico das
costelas possa iniciar este problema. A equipe prosseguia trabalhando no
terceiro modelo para a obten��o de outros resultados.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:36.0pt'><b><span
style='font-size:14.0pt;mso-bidi-font-size:7.5pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p style='margin:0cm;margin-bottom:.0001pt'><u><span style='font-family:"Times New Roman"'>Aperfei�oamento
no diagn�stico do c�ncer de mama<o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>O n�mero de mortes por c�ncer de mama em
mulheres tem diminu�do significativamente nos �ltimos anos, em parte devido a
uma ampla utiliza��o de t�cnicas para a detec��o da doen�a em sua fase inicial.
Os m�todos tradicionalmente indicados para o diagn�stico precoce do c�ncer de
mama s�o a mamografia com raio-X e o exame de toque da mama, os quais possuem
entretanto algumas limita��es. A mamografia por raio-X n�o � eficiente em
mulheres jovens, e a confiabilidade do exame de toque depende da sensibilidade
da pr�pria mulher ou do m�dico; al�m disto, certos n�dulos n�o podem ser
sentidos devido ao seu tamanho reduzido ou � sua posi��o. O ultrassom tem sido
estudado ultimamente como um m�todo eficiente de diagn�stico do c�ncer da mama,
possuindo a vantagem adicional de ser isento de efeitos colaterais.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>Uma equipe da Universidade de Kansas est�
desenvolvendo uma extensa pesquisa para o aprimoramento das t�cnicas de an�lise
e processamentos das imagens de ultrassom para o diagn�stico precoce do c�ncer
de mama.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>Os aparelhos de ultrassom utilizam um
sensor que � passado diversas vezes sobre a superf�cie do corpo para a
constru��o da imagem. Um dos objetivos desta pesquisa foi estabelecer se os
tumores podem ser detectados mais facilmente quando a mama � colocada entre
duas placas, como � feito na mamografia tradicional. Foi desenvolvido ent�o um
modelo computacional para a an�lise est�tica linear de tens�es pelo m�todo dos
elementos finitos, para a pesquisa do deslocamento do tumor e a sua deforma��o
dentro da mama sob tais condi��es.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>A figura mostra o resultado da an�lise de
tens�es do modelo bidimensional de um tumor; o qual foi representado como sendo
nove vezes mais r�gido do que os tecidos vizinhos. A superf�cie foi comprimida
em 1,5% para uma an�lise do campo de tens�es, e foram aplicadas condi��es de
contorno adequadas. O tumor teve a sua geometria circular deformada, e
apareceram quatro &quot;asas&quot; caracter�sticas no campo de tens�es em sua
volta. Esta an�lise de elementos finitos ajudou a equipe de pesquisadores a
entender melhor tais efeitos, os quais tamb�m est�o presentes em imagens
cl�nicas. A continua��o deste estudo levar� os pesquisadores a importantes
progressos na compreens�o e no processamento das imagens obtidas com exames de
ultrassom nas mamas.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.0pt'><!--[if gte vml 1]><v:shape
 id="_x0000_s1034" type="#_x0000_t75" alt="cancer.jpg (7435 bytes)" style='position:absolute;
 margin-left:0;margin-top:8.55pt;width:167.8pt;height:125.55pt;z-index:6;
 mso-wrap-edited:f;mso-position-horizontal:left' wrapcoords="-143 0 -143 21409 21600 21409 21600 0 -143 0">
 <v:imagedata src="./arquivos/image015.jpg" o:href="http://www.cae.com.br/images/cancer.jpg"/>
 <w:wrap type="square"/>
</v:shape><![endif]--><![if !vml]><img width=223 height=168
src="./arquivos/image016.jpg" align=left hspace=12
alt="cancer.jpg (7435 bytes)" v:shapes="_x0000_s1034"><![endif]><span
style='font-family:"Times New Roman"'><o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p style='margin-top:0cm;margin-right:30.8pt;margin-bottom:0cm;margin-left:
0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><em><span
style='font-family:"Times New Roman"'>Pesquisa para aprimoramento na detec��o
do c�ncer de mama por meio de ultrassom. A figura mostra a an�lise de tens�es
do modelo bidimensional de um tumor, desenvolvida na Universidade de Kansas.</span></em><span
style='font-family:"Times New Roman"'> <o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:36.0pt'><b><span
style='font-size:14.0pt;mso-bidi-font-size:7.5pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:36.0pt'><b><span
style='font-size:14.0pt;mso-bidi-font-size:7.5pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:36.0pt'><span
style='mso-bidi-font-size:7.5pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt'><u><span style='font-family:"Times New Roman"'>Modelo
computacional do joelho humano<o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>Uma equipe do Imperial College da
Universidade de Londres desenvolveu um modelo computacional do joelho humano,
visando testar o desempenho de novos projetos de ligamentos artificiais para
joelhos, al�m de outros tipos de reconstru��o utilizando tecidos naturais. Os
ligamentos s�o componentes passivos sujeitos a tens�o, que controlam a
separa��o entre as extremidades dos ossos e a cinem�tica da junta durante a
locomo��o. Os ligamentos possuem uma geometria tridimensional complexa, e s�o compostos
por materiais n�o-homog�nios.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>O modelamento do joelho foi feito em CAD
tridimensional, atrav�s da reconstru��o da geometria dos ossos a partir de
imagens obtidas por tomografia computadorizada. A geometria dos ligamentos foi
digitalizada com o aux�lio de um equipamento especialmente desenvolvido para
esta finalidade. Foram realizados experimentos <i>in vitro</i> para a
determina��o das propriedades mec�nicas dos ligamentos. Com o aux�lio de
softwares de elementos finitos e softwares de simula��o de movimentos, este
trabalho resultou em uma nova metodologia para o ensaio virtual das pr�teses de
joelho.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt'><b><span style='font-size:14.0pt;
mso-bidi-font-size:13.5pt;font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p style='margin:0cm;margin-bottom:.0001pt'><b><span style='font-size:14.0pt;
mso-bidi-font-size:13.5pt;font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p style='margin:0cm;margin-bottom:.0001pt'><b><span style='font-size:14.0pt;
mso-bidi-font-size:13.5pt;font-family:"Times New Roman"'>Modelamento
Tridimensional com o <i>Solid Edge<o:p></o:p></i></span></b></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><b><i><span
style='mso-bidi-font-size:13.5pt;font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></i></b></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.05pt'><span
style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>O lan�amento do
primeiro PC pela IBM, em 1981, mudou a forma de muitos engenheiros, projetistas
e desenhistas trabalharem. Com o advento do computador pessoal, desenhos
t�cnicos, c�lculos estruturais e simula��es deixaram de ser executados
manualmente nas empresas que n�o podiam arcar com os custos de computadores de
grande porte. Durante os �ltimos anos, uma nova gera��o de softwares nativos
para <i>Windows </i>tem se destacado por trazer ao usu�rio de PC recursos
tecnol�gicos antes somente encontrados em sistemas <i>high-end</i>.</span><span
style='font-family:"Times New Roman"'><o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.05pt'><span
style='font-family:"Times New Roman"'>Um exemplo de CAD mec�nico tridimensional
nativo para Windows � o SOLID EDGE, desenvolvido pela Unigraphics Solutions
(EUA), que integra m�dulos para modelamento s�lido e de superf�cie, desenho de
montagens em 3D, pe�as em chapa dobrada e ambiente de detalhamento para a
gera��o autom�tica de desenhos 2D. O <i>Solid Edge</i> utiliza a tecnologia de <i>features</i>
para o modelamento s�lido param�trico e variacional, sendo esta a maneira mais
atual, r�pida e intuitiva de gera��o de desenhos tridimensionais. A partir de
um s�lido inicial, o projetista segue adicionando e removendo material atrav�s
de opera��es do tipo <i>feature</i>, at� chegar � pe�a final. As principais <i>feature
</i>encontradas no <i>Solid Edge</i> s�o: extrus�o, protus�o de revolu��o,
helicoidal, rasgo, nervura, arredondamento, gera��o de parede fina, s�lido de
se��o vari�vel e outras. Algumas caracter�sticas importantes do modelamento
s�lido no <i>Solid Edge</i> s�o descritas a seguir.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.05pt'><span
style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-12.0pt;mso-list:l2 level1 lfo6;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><![endif]>Possibilidade
de cria��o de pe�as no contexto da montagem, utilizando pe�as existentes como
referenciais para o projeto da nova pe�a. </p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-12.0pt;mso-list:l2 level1 lfo6;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><![endif]>Completa
parametriza��o do modelo assim que este � criado, facilitando futuras
altera��es e permitindo a gera��o de fam�lias de componentes similares. </p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-12.0pt;mso-list:l2 level1 lfo6;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><![endif]>Menu
<i>Pathfinder</i> com o hist�rico de todas as etapas realizadas na constru��o
da pe�a. </p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-12.0pt;mso-list:l2 level1 lfo6;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><![endif]>Aproveitamento
de desenhos j� existentes em 2D como perfis para a gera��o de novos desenhos em
3D, facilitando a transi��o do sistema CAD antigo para o <i>Solid Edge</i>. </p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-12.0pt;mso-list:l2 level1 lfo6;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><![endif]>Capacidade
de leitura e grava��o em formatos de arquivos universais, tais como IGES, DXF,
DGN, STL, SAT, EMS e outros. </p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-12.0pt;mso-list:l2 level1 lfo6;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><![endif]>Grande
facilidade de uso e aprendizado, com comandos inteligentes e auto-explicativos.
Quando uma <i>feature</i> � ativada, apenas os comandos necess�rios para aquela
opera��o s�o apresentados na tela, e uma barra de �cones orienta o usu�rio
sobre as etapas que devem ser cumpridas. </p>

<p class=MsoNormal style='margin-left:24.0pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'>Avan�ados
recursos de visualiza��o dos modelos, permitindo a aplica��o de luzes, cores,
texturas, reflexos e imagens de fundo para a gera��o de imagens com elevado
grau de realismo.</p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><!--[if gte vml 1]><v:shape
 id="_x0000_s1035" type="#_x0000_t75" alt="" style='position:absolute;left:0;
 text-align:left;margin-left:0;margin-top:-1.15pt;width:174pt;height:124.7pt;
 z-index:7;mso-wrap-edited:f;mso-position-horizontal:left' wrapcoords="-76 0 -76 21495 21600 21495 21600 0 -76 0">
 <v:imagedata src="./arquivos/image017.png" o:href="http://www.cae.com.br/images/features.gif"/>
 <w:wrap type="square"/>
</v:shape><![endif]--><![if !vml]><img width=232 height=166
src="./arquivos/image018.gif" align=left hspace=12 v:shapes="_x0000_s1035"><![endif]></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><em>Comandos
do tipo feature para o modelamento tridimensional, com opera��es sucessivas de
adi��o e remo��o de material.</em> </p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify'><span
style='font-family:"Times New Roman"'>Um dos recursos mais vers�teis do <i>Solid
Edge</i> � o menu <i>Pathfinder</i>, que lista todas as opera��es realizadas na
gera��o do modelo. As vantagens do <i>Pathfinder</i> s�o in�meras:<o:p></o:p></span></p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l5 level1 lfo8;tab-stops:list 36.0pt'>Edi��o
     de qualquer opera��o executada anteriormente, sendo que as opera��es
     posteriores se ajustam automaticamente. </li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l5 level1 lfo8;tab-stops:list 36.0pt'>Reordenamento
     das opera��es executadas, resultando em novas possibilidades de
     modelamento. </li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l5 level1 lfo8;tab-stops:list 36.0pt'>Supress�o
     tempor�ria de opera��es anteriores, permitindo, por exemplo, a elimina��o
     de detalhes geom�tricos irrelevantes para a realiza��o de uma an�lise por
     elementos finitos. <i><o:p></o:p></i></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l5 level1 lfo8;tab-stops:list 36.0pt'><i>Playback</i>
     de todas as opera��es realizadas, permitindo que um projetista entenda
     perfeitamente o trabalho de outro profissional para dar continuidade ao
     seu servi�o. </li>
</ul>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'>Al�m do
ambiente <i>Part</i> para modelamento s�lido e de superf�cie, o <i>Solid Edge</i>
possui ainda o <i>Assembly</i> para o projeto de montagens em 3D, o <i>Sheet
Metal</i> para projeto e desenvolvimento de chapas dobradas, e o <i>Draft</i>
para gera��o autom�tica de vistas, cortes e detalhamentos. Al�m disto, o <i>Solid
Edge</i> possui recursos de gerenciamento de desenhos e integra-se
perfeitamente com todos os outros aplicativos para Windows.</p>

<p style='text-align:justify;text-indent:30.0pt'><span style='font-family:"Times New Roman"'>A
utiliza��o de sistemas CAD/CAE/CAM nas diferentes �reas da engenharia � uma
exig�ncia do atual mercado globalizado altamente competitivo, onde as empresas
necessitam produzir cada vez mais, melhor e com custos reduzidos. Embora os
sistemas CAD tradicionais de desenho em duas dimens�es ainda sejam os mais
utilizados no Brasil, cada vez mais empresas despertam para a necessidade de se
manterem atualizadas e competitivas com o uso de sistemas tridimensionais mais
eficazes. O <i>Solid Edge</i> destaca-se como uma solu��o de CAD mec�nico que
consegue aliar poderosos recursos de modelamento com uma grande facilidade de
uso.<o:p></o:p></span></p>

<p><strong><u><span style='font-size:13.5pt;font-family:Arial'>Comparativo de
Tecnologias <i>CAE</i></span> :</u></strong><span style='font-size:13.5pt;
font-family:Arial'><o:p></o:p></span></p>

<p><span style='font-size:13.5pt;font-family:Arial'>Simula��o de Eventos
Mec�nicos <b>x </b>An�lise Est�tica Linear de Tens�es<o:p></o:p></span></p>

<p><u><span style='font-family:"Times New Roman"'>Prototipagem virtual<o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.05pt'><span
style='font-family:"Times New Roman"'>Em determinada fase do processo de
pesquisa e desenvolvimento de um novo produto, o engenheiro depara-se com a
necessidade de prever o comportamento real de seu projeto. Encontramos esta
situa��o quando projetamos uma nova suspens�o de ve�culo, um quadro de
bicicleta, uma estrutura met�lica sujeita a cargas din�micas, e em muitos
outros casos. Uma solu��o tradicional seria a constru��o de prot�tipos ou
modelos reduzidos para ensaios em laborat�rios, onde instrumentos de medi��o
estrategicamente distribu�dos coletariam dados de tens�es, deforma��es,
velocidades, for�as, etc. Entretanto, a metodologia de constru��o e ensaio de
diversos prot�tipos costuma consumir mais tempo e recursos do que seria o
desej�vel, n�o sendo portanto a solu��o ideal.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.05pt'><span
style='font-family:"Times New Roman"'>O atual est�gio de desenvolvimento
tecnol�gico j� permite que softwares baseados na plataforma PC/Windows simulem
situa��es f�sicas reais de maneira bastante completa, resultando em verdadeiros
prot�tipos virtuais. Dentro deste conceito, vamos analisar e comparar dois
cen�rios distintos: a <i>An�lise Est�tica Linear de Tens�es</i> tradicional, e
a nova tecnologia de <i>Simula��o de Eventos Mec�nicos</i>. <o:p></o:p></span></p>

<p><u><span style='font-family:"Times New Roman"'>An�lise est�tica linear de
tens�es por elementos finitos<o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>Os softwares de CAE (Engenharia Assistida
por Computador) utilizam modelos digitais para simular fen�menos f�sicos reais
atrav�s de m�todos num�ricos aproximados. Os sistemas CAE mais difundidos
atualmente s�o baseados no m�todo dos elementos finitos, o qual discretiza um
modelo de CAD em muitas partes pequenas, resolvendo ent�o um conjunto de
equa��es alg�bricas para obter os resultados desejados, em fun��o do
carregamento e das condi��es de contorno aplicados.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>Os sistemas CAE j� s�o razoavelmente
difundidos entre os engenheiros mec�nicos e civis, principalmente para a
realiza��o de c�lculos estruturais envolvendo tens�es est�ticas lineares.
Entretanto, existem in�meras situa��es mais complexas em que este tipo de c�lculo
acarreta dificuldades pr�ticas e imprecis�es importantes, como podemos ver no
exemplo a seguir.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>Por exemplo, para se analisar a
resist�ncia mec�nica do quadro de uma bicicleta com o uso de um sistema CAE
tradicional, seguir�amos as seguintes etapas: desenhar a geometria da
bicicleta, definir os materiais envolvidos, definir as for�as externas que a
estrada exerce sobre a bicicleta enquanto esta se movimenta, definir as
condi��es de contorno, processar os c�lculos e interpretar os resultados. Tal
exemplo evidencia uma pergunta inerente a este tipo de an�lise - &quot;Quais
s�o os valores das for�as exercidas pela estrada sobre as rodas da bicicleta
enquanto esta se movimenta?&quot; A resposta a esta quest�o frequentemente n�o
est� prontamente dispon�vel, exigindo a realiza��o de experi�ncias pr�ticas ou
a ado��o de hip�teses simplificadoras. Com a recente tecnologia de simula��o de
eventos mec�nicos, n�o existe mais a necessidade de se encontrar uma resposta a
esta pergunta para se executar a an�lise de tens�es por elementos finitos.<o:p></o:p></span></p>

<p><u><span style='font-family:"Times New Roman"'>Simula��o de eventos
mec�nicos <o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>A tecnologia de Simula��o de Eventos
Mec�nicos (MES) adiciona movimento � an�lise tradicional de elementos finitos,
dispensando assim o conhecimento pr�vio das for�as envolvidas. Em outras
palavras, as for�as atuantes s�o calculadas internamente pelo software, de
maneira transparente para o usu�rio. Voltando ao exemplo anterior, n�o seria
necess�rio descobrir quais s�o as for�as externas que a estrada exerce sobre a
bicicleta enquanto esta se movimenta; bastaria entrarmos com a velocidade da
bicicleta e o perfil da estrada (os quais s�o par�metros conhecidos), e o
software nos forneceria os resultados desejados. Al�m de calcular as tens�es e
deforma��es, as eventuais falhas do material seriam apresentadas visualmente
atrav�s de anima��es bastante intuitivas. <o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>Para entender mais tecnicamente como a
simula��o de eventos mec�nicos elimina a necessidade do conhecimento pr�vio das
for�as atuantes para o processo de an�lise, vamos relembrar rapidamente algumas
equa��es b�sicas da f�sica:<o:p></o:p></span></p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l20 level1 lfo9;tab-stops:list 36.0pt'>A
     an�lise tradicional de tens�es est�ticas lineares por elementos finitos
     baseia-se na lei de Hooke (F=kd), onde a for�a (F) e a constante el�stica
     (k) devem ser conhecidas previamente para o c�lculo do deslocamento (d).
     As tens�es s�o uma conseq��ncia dos deslocamentos em cada ponto. </li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l20 level1 lfo9;tab-stops:list 36.0pt'>A
     an�lise din�mica de corpos r�gidos � baseada na segunda lei de Newton
     (F=ma), onde a acelera��o (a) � calculada em fun��o das for�as (F) e da
     massa (m). </li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l20 level1 lfo9;tab-stops:list 36.0pt'>A
     simula��o de eventos mec�nicos combina a lei de Hooke com a segunda lei de
     Newton, eliminando portanto a vari�vel for�a (ma=kd). </li>
</ul>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.05pt'><span
style='font-family:"Times New Roman"'>A tabela comparativa da pr�xima p�gina
apresenta os benef�cios desta s�ntese de equa��es.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.05pt'><span
style='font-family:"Times New Roman"'>A tecnologia da Simula��o de Eventos
Mec�nicos (MES) re�ne em um �nico sistema a an�lises de tens�es por elementos
finitos, a an�lise cinem�tica e a an�lise din�mica de corpos r�gidos/flex�veis.
Temos assim um sistema de simula��o computacional permitindo que uma s�rie de
prot�tipos e ensaios de laborat�rios sejam substitu�dos por simula��es
virtuais. O engenheiro testar� um maior n�mero de alternativas de projeto, com
custos reduzidos e menos tempo, resultando em uma maior competitividade geral
para a empresa</span>.</p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<div align=center>

<table border=1 cellspacing=8 cellpadding=0 width=812 style='width:486.9pt;
 mso-cellspacing:4.5pt;border:none;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='height:9.0pt'>
  <td width=797 valign=top style='width:477.9pt;border:none;padding:0cm 0cm 0cm 0cm;
  height:9.0pt'>
  <div align=center>
  <table border=0 cellspacing=1 cellpadding=0 width=737 style='width:442.1pt;
   mso-cellspacing:.7pt;border:outset .75pt;mso-padding-alt:3.0pt 3.0pt 3.0pt 3.0pt'>
   <tr>
    <td width=211 rowspan=2 valign=top style='width:126.75pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp; </p>
    <p style='margin:0cm;margin-bottom:.0001pt'>&nbsp;</p>
    </td>
    <td width=385 colspan=3 valign=top style='width:230.8pt;border:inset .75pt;
    background:aqua;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p align=center style='margin:0cm;margin-bottom:.0001pt;text-align:center'><b>Simula��o
    Convencional</b></p>
    </td>
    <td width=136 rowspan=2 valign=top style='width:81.75pt;border:inset .75pt;
    background:aqua;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p align=center style='margin:0cm;margin-bottom:.0001pt;text-align:center'><b>Simula��o
    de Eventos Mec�nicos (MES)</b></p>
    </td>
   </tr>
   <tr>
    <td width=113 valign=top style='width:67.55pt;border:inset .75pt;
    background:aqua;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p align=center style='margin:0cm;margin-bottom:.0001pt;text-align:center'>Cinem�tica</p>
    </td>
    <td width=119 valign=top style='width:71.55pt;border:inset .75pt;
    background:aqua;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p align=center style='margin:0cm;margin-bottom:.0001pt;text-align:center'>An�lise
    Est�tica de Tens�es</p>
    </td>
    <td width=151 valign=top style='width:90.3pt;border:inset .75pt;background:
    aqua;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p align=center style='margin:0cm;margin-bottom:.0001pt;text-align:center'>An�lise
    Din�mica de Tens�es</p>
    </td>
   </tr>
   <tr style='height:15.45pt'>
    <td width=211 valign=top style='width:126.75pt;border:inset .75pt;
    background:yellow;padding:3.0pt 3.0pt 3.0pt 3.0pt;height:15.45pt'>
    <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>1.
    Equa��o b�sica</span><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
    font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=113 valign=top style='width:67.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt;height:15.45pt'>
    <p align=center style='margin:0cm;margin-bottom:.0001pt;text-align:center'>F
    = ma</p>
    </td>
    <td width=271 colspan=2 valign=top style='width:162.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt;height:15.45pt'>
    <p align=center style='margin:0cm;margin-bottom:.0001pt;text-align:center'><span
    lang=EN-US style='mso-ansi-language:EN-US'>F = kd<o:p></o:p></span></p>
    </td>
    <td width=136 valign=top style='width:81.75pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt;height:15.45pt'>
    <p align=center style='margin:0cm;margin-bottom:.0001pt;text-align:center'><span
    lang=EN-US style='mso-ansi-language:EN-US'>ma = kd *<o:p></o:p></span></p>
    </td>
   </tr>
   <tr>
    <td width=211 valign=top style='width:126.75pt;border:inset .75pt;
    background:yellow;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>2.
    Realiza an�lise de tens�es</span><span style='font-size:10.0pt;mso-bidi-font-size:
    12.0pt;font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=113 valign=top style='width:67.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=119 valign=top style='width:71.55pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=151 valign=top style='width:90.3pt;border:inset .75pt;background:
    silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=136 valign=top style='width:81.75pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr>
    <td width=211 valign=top style='width:126.75pt;border:inset .75pt;
    background:yellow;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>3.
    Aceita geometrias complexas</span><span style='font-size:10.0pt;mso-bidi-font-size:
    12.0pt;font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=113 valign=top style='width:67.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=119 valign=top style='width:71.55pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=151 valign=top style='width:90.3pt;border:inset .75pt;background:
    silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=136 valign=top style='width:81.75pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr>
    <td width=211 valign=top style='width:126.75pt;border:inset .75pt;
    background:yellow;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>4.
    N�o requer especifica��o das for�as</span><span style='font-size:10.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=113 valign=top style='width:67.55pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=119 valign=top style='width:71.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=151 valign=top style='width:90.3pt;border:inset .75pt;padding:
    3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=136 valign=top style='width:81.75pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr>
    <td width=211 valign=top style='width:126.75pt;border:inset .75pt;
    background:yellow;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>5.
    N�o requer especifica��o da rigidez</span><span style='font-size:10.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=113 valign=top style='width:67.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=119 valign=top style='width:71.55pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=151 valign=top style='width:90.3pt;border:inset .75pt;background:
    silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=136 valign=top style='width:81.75pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr>
    <td width=211 valign=top style='width:126.75pt;border:inset .75pt;
    background:yellow;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>6.
    Testa resist�ncia dos materiais</span><span style='font-size:10.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=113 valign=top style='width:67.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=119 valign=top style='width:71.55pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=151 valign=top style='width:90.3pt;border:inset .75pt;background:
    silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=136 valign=top style='width:81.75pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr>
    <td width=211 valign=top style='width:126.75pt;border:inset .75pt;
    background:yellow;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>7.
    Analisa movimentos e mecanismos</span><span style='font-size:10.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=113 valign=top style='width:67.55pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=119 valign=top style='width:71.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=151 valign=top style='width:90.3pt;border:inset .75pt;padding:
    3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=136 valign=top style='width:81.75pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr>
    <td width=211 valign=top style='width:126.75pt;border:inset .75pt;
    background:yellow;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>8.
    Mostra movimentos resultantes</span><span style='font-size:10.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=113 valign=top style='width:67.55pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=119 valign=top style='width:71.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=151 valign=top style='width:90.3pt;border:inset .75pt;padding:
    3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=136 valign=top style='width:81.75pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr>
    <td width=211 valign=top style='width:126.75pt;border:inset .75pt;
    background:yellow;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>9.
    Mostra flexibilidade de mecanismos</span><span style='font-size:10.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=113 valign=top style='width:67.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=119 valign=top style='width:71.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=151 valign=top style='width:90.3pt;border:inset .75pt;padding:
    3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=136 valign=top style='width:81.75pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr>
    <td width=211 valign=top style='width:126.75pt;border:inset .75pt;
    background:yellow;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>10.
    Mostra ocorr�ncia de impactos</span><span style='font-size:10.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=113 valign=top style='width:67.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=119 valign=top style='width:71.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=151 valign=top style='width:90.3pt;border:inset .75pt;padding:
    3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=136 valign=top style='width:81.75pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr>
    <td width=211 valign=top style='width:126.75pt;border:inset .75pt;
    background:yellow;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>11.
    Analisa impacto entre m�ltiplos objetos</span><span style='font-size:10.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=113 valign=top style='width:67.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=119 valign=top style='width:71.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=151 valign=top style='width:90.3pt;border:inset .75pt;background:
    silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p align=center style='margin:0cm;margin-bottom:.0001pt;text-align:center'>**</p>
    </td>
    <td width=136 valign=top style='width:81.75pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr>
    <td width=211 valign=top style='width:126.75pt;border:inset .75pt;
    background:yellow;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>12.
    Analisa comportamento de materiais n�o-lineares</span><span
    style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=113 valign=top style='width:67.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=119 valign=top style='width:71.55pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p align=center style='margin:0cm;margin-bottom:.0001pt;text-align:center'>***</p>
    </td>
    <td width=151 valign=top style='width:90.3pt;border:inset .75pt;background:
    silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p align=center style='margin:0cm;margin-bottom:.0001pt;text-align:center'>***</p>
    </td>
    <td width=136 valign=top style='width:81.75pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr>
    <td width=211 valign=top style='width:126.75pt;border:inset .75pt;
    background:yellow;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>13.
    Erros de entrada dos dados s�o �bvios</span><span style='font-size:10.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=113 valign=top style='width:67.55pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=119 valign=top style='width:71.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=151 valign=top style='width:90.3pt;border:inset .75pt;padding:
    3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=136 valign=top style='width:81.75pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr>
    <td width=211 valign=top style='width:126.75pt;border:inset .75pt;
    background:yellow;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>14.
    Fornece curvas Tens�o x Tempo</span><span style='font-size:10.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=113 valign=top style='width:67.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=119 valign=top style='width:71.55pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=151 valign=top style='width:90.3pt;border:inset .75pt;background:
    silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=136 valign=top style='width:81.75pt;border:inset .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr>
    <td width=211 valign=top style='width:126.75pt;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=113 valign=top style='width:67.55pt;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=119 valign=top style='width:71.55pt;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=151 valign=top style='width:90.3pt;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=136 valign=top style='width:81.75pt;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal>&nbsp;<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr>
    <td width=211 valign=top style='width:126.75pt;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-family:Arial'>&nbsp;</span><span
    style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=113 valign=top style='width:67.55pt;border:solid windowtext .75pt;
    background:silver;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-family:Arial'>&nbsp;</span><span
    style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=119 valign=top style='width:71.55pt;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><strong><span style='font-family:Arial'>SIM</span></strong><span
    style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=151 valign=top style='width:90.3pt;border:solid windowtext .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-family:Arial'>&nbsp;</span><span
    style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
    <td width=136 valign=top style='width:81.75pt;background:white;padding:
    3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><strong><span style='font-family:Arial'>N�O</span></strong><span
    style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr>
    <td width=735 colspan=5 valign=top style='width:440.7pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>*
    Onde a massa multiplicada pela acelera��o iguala a soma das for�as,
    incluindo amortecimento. <o:p></o:p></span></p>
    <p style='margin:0cm;margin-bottom:.0001pt'><span style='font-size:10.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Times New Roman"'>** O engenheiro
    deve especificar as curvas de Carga x Tempo ou Deslocamento x Tempo.<o:p></o:p></span></p>
    <p style='margin:0cm;margin-bottom:.0001pt'><span style='font-size:10.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Times New Roman"'>*** Requer
    software especial de an�lise n�o-linear.</span></p>
    </td>
   </tr>
  </table>
  </div>
  <p class=MsoNormal style='mso-line-height-alt:9.0pt'><span style='font-family:
  "Arial Unicode MS"'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

</div>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='text-align:justify'><!--[if gte vml 1]><v:shape id="_x0000_s1036"
 type="#_x0000_t75" alt="bikes2.jpg (23582 bytes)" style='position:absolute;
 left:0;text-align:left;margin-left:0;margin-top:0;width:187.5pt;height:157.5pt;
 z-index:8;mso-wrap-edited:f;mso-position-horizontal:left' wrapcoords="-86 0 -86 21497 21600 21497 21600 0 -86 0">
 <v:imagedata src="./arquivos/image019.jpg" o:href="http://www.cae.com.br/images/bikes2.jpg"/>
 <w:wrap type="square"/>
</v:shape><![endif]--><![if !vml]><img width=250 height=210
src="./arquivos/image019.jpg" align=left hspace=12
alt="bikes2.jpg (23582 bytes)" v:shapes="_x0000_s1036"><![endif]><em><span
style='font-family:"Times New Roman"'>Resultado do c�lculo de tens�es pelo
m�todo dos elementos finitos, realizado pelo software ALGOR. As simula��es
otimizam a utiliza��o dos materiais compostos, para a obten��o da m�xima
resist�ncia com o menor peso poss�vel.</span></em><span style='font-family:
"Times New Roman"'><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p><strong><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;font-family:
"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></strong></p>

<p><strong><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;font-family:
"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></strong></p>

<p><strong><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;font-family:
"Times New Roman"'>A Unigraphics Solutions lan�a a vers�o 16 do Unigraphics.</span></strong><span
style='font-size:14.0pt;mso-bidi-font-size:12.0pt;font-family:"Times New Roman"'><o:p></o:p></span></p>

<p><strong><span style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>O
software para CAD/CAE/CAM � completamente desenvolvido na plataforma Windows
NT.</span></strong><span style='font-family:"Times New Roman"'><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.0pt'><span
style='mso-bidi-font-size:10.0pt'>Recentemente a Unigraphics lan�ou a mais nova
vers�o de seu software para CAD/CAE/CAM: o Unigraphics V16, completamente
desenvolvido na plataforma Windows NT, o que lhe confere o t�tulo de Software
Nativo Windows.</span><br>
<span style='mso-bidi-font-size:10.0pt'>A interface nativa Windows do
Unigraphics mant�m os padr�es Windows de layout, caixas de di�logo, servi�os de
impress�o, �cones coloridos, barras de tarefas customiz�veis (toolbars), o novo
mecanismo Microsoft HTML HELP e o processo de instala��o simples.Al�m diso, a
vers�o 16 possuir� integra��o com o Microsoft Excel, para controle e otimiza��o
de dados param�tricos, interagindo com mecanismos e an�lise de dados.</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.0pt'><span
style='mso-bidi-font-size:10.0pt'>A novidade destina-se a processos produtivos
de alta complexidade. Apresen- tado em m�dulos, permite �s empresas adquir�-lo
por etapas, segundo suas necessidades e cultura organizacional, sem qualquer
dificuldade para a integra��o posterior com outros m�dulos, incluindo softwares
da Unigraphics Solutions, como o Solid Edge e o IMAN. </span><br>
<span style='mso-bidi-font-size:10.0pt'>O Unigraphics V16 � um modelador
h�brido, param�trico e variacional. H�brido porque abrange s�lidos e
superf�cies. Os sistemas param�tricos permitem modificar o projeto de um
produto j� concebido. Variacional porque, a partir de dados param�tricos,
pode-se compor fam�lias de produtos sem modificar sua apar�ncia.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.0pt'><span
style='mso-bidi-font-size:10.0pt'>&quot;O modelamento s�lido da Unigraphics
Solutions veio exatamente para criar a possibilidade de esculpir na tela do
computador o produto desejado.&quot; diz Roberto Trinconi, diretor presidente
da Unigrphics Solutions para a Am�rica Latina.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.0pt'><span
style='mso-bidi-font-size:10.0pt'>A Unigraphics Solutions direciona seu
investimento anual de R$ 100 milh�es para desenvolvimento de aplicativos e
solu��es virtuais para eliminar retrabalho, antecipar resultados e aumentar
produtividade industrial.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.0pt'><span
style='mso-bidi-font-size:10.0pt'>Uma das l�deres em tecnologia e solu��es
CAD/CAE/CAM e PDM, a empresa desenvolve, vende, implementa e d� suporte a
aplicativos de modelamento s�lido e de gerenciamento de processos de engenharia
e de manufatura, que permitem �s ind�strias, virtualmente, desenvolver
produtos, prever resultados e gerenciar a produ��o, eliminando a confec��o de
prot�tipos ou a grande quantidade de processos inconsistentes ou duplicados.
Isso significa em termos pr�ticos maior produtividade e rapidez.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.0pt'><span
style='mso-bidi-font-size:10.0pt'>A redu��o de tempo se tornou poss�vel porque,
agora com um simples clique no mouse, os engenheiros deixam de refazer � m�o o
desenho de cada pe�a n�o aprovada, eliminam prot�tipos e passam a testar
virtualmente no pr�prio computador os tipos de materiais e suas propriedades de
expans�o, disten��o, vari�ncia e dilata��o, al�m de reestruturar e prever os
processos produtivos envolvidos.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.0pt'><span
style='mso-bidi-font-size:10.0pt'>Tudo isso � poss�vel atrav�s dos aplicativos:
Unigraphics CAD/CAM/CAE, Solid Edge e Parasolid (plataforma de facto para
modelagem s�lido) e pelo software IMAN (de gerenciamento de processos e
informa��es), que rodam em plataformas Unix e Windows NT, s�o modulares, mant�m
interface amig�vel entre si e com aplicativos de outros fabricantes somados a
servi�os de consultoria, suporte e treinamento oferecidos pela empresa.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.0pt'><span
style='mso-bidi-font-size:10.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h5><span style='font-size:14.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>Redes
Locais<o:p></o:p></span></h5>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h5><span style='font-family:"Times New Roman"'>Introdu��o<o:p></o:p></span></h5>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify;text-indent:
36.0pt'>Nos �ltimos dois s�culos, podemos dizer que a humanidade foi dividida
em tr�s per�odos marcantes: o da inven��o de grandes m�quinas mec�nicas durante
a Revolu��o Industrial, a m�quina � vapor e por fim a dissemina��o das
informa��es, atrav�s da inven��o do r�dio, televis�o, computadores, sat�lites e
redes interligando todos.</p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><span
style='mso-tab-count:1'>����������� </span>Com esses fatos vemos a import�ncia
das redes atualmente, pois sem elas seria como se as grandes inven��es
eletr�nicas n�o tivessem alma. O homem sempre teve necessidade de se comunicar,
seja por sinais de fuma�a, pombo-correio, c�digo Morse, e outros, e com as
redes, a inten��o era de conectar dois ou mais pontos, para se comunicarem e
compartilharem recursos atrav�s de um sistema de comunica��o.</p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><!--[if gte vml 1]><v:shape
 id="_x0000_s1037" type="#_x0000_t75" style='position:absolute;left:0;
 text-align:left;margin-left:11.2pt;margin-top:10.25pt;width:41.75pt;height:1in;
 z-index:9'>
 <v:imagedata src="./arquivos/image020.jpg" o:title="fumaca2"/>
</v:shape><v:shape id="_x0000_s1039" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:203.95pt;margin-top:11.75pt;width:1in;
 height:68.75pt;z-index:11'>
 <v:imagedata src="./arquivos/image021.jpg" o:title="97"/>
</v:shape><v:shape id="_x0000_s1040" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:307.45pt;margin-top:11pt;width:102pt;
 height:69.4pt;z-index:12'>
 <v:imagedata src="./arquivos/image022.png" o:title="hstfig24"/>
</v:shape><v:shape id="_x0000_s1038" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:96.7pt;margin-top:13.25pt;width:1in;
 height:69.8pt;z-index:10'>
 <v:imagedata src="./arquivos/image023.gif" o:title="correio"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=15 height=14></td>
  <td width=56></td>
  <td width=58></td>
  <td width=96></td>
  <td width=47></td>
  <td width=96></td>
  <td width=42></td>
  <td width=136></td>
 </tr>
 <tr>
  <td height=1></td>
  <td rowspan=5 align=left valign=top><img width=56 height=96
  src="./arquivos/image024.jpg" v:shapes="_x0000_s1037"></td>
 </tr>
 <tr>
  <td height=1></td>
  <td colspan=5></td>
  <td rowspan=3 align=left valign=top><img width=136 height=93
  src="./arquivos/image025.gif" v:shapes="_x0000_s1040"></td>
 </tr>
 <tr>
  <td height=2></td>
  <td colspan=3></td>
  <td rowspan=2 align=left valign=top><img width=96 height=92
  src="./arquivos/image026.jpg" v:shapes="_x0000_s1039"></td>
 </tr>
 <tr>
  <td height=90></td>
  <td></td>
  <td rowspan=3 align=left valign=top><img width=96 height=93
  src="./arquivos/image023.gif" v:shapes="_x0000_s1038"></td>
 </tr>
 <tr>
  <td height=2></td>
 </tr>
 <tr>
  <td height=1></td>
 </tr>
</table>

</span><![endif]><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<br style='mso-ignore:vglayout' clear=ALL>

<h4><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>Figura
1: Alguns tipos de comunica��o de dados como sinais de fuma�a, correio,
pombo-correio e c�digo morse<o:p></o:p></span></h4>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h5><span style='font-family:"Times New Roman"'>Hist�rico<o:p></o:p></span></h5>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><span
style='mso-tab-count:1'>����������� </span>A primeira rede de computadores,
teve seu projeto iniciado em 1966 pela ag�ncia DARPA (Defense Advanced Research
Projects Agency) do Departamento de Defesa do governo americano, da qual
desejava conectar quatro computadores atrav�s de uma linha telef�nica, com o
objetivo de criar um sistema de comunica��o e controle distribu�do com fins
militares, entre centros militares e de pesquisa em universidades, projeto este
que recebeu o nome de ARPANET. Mais tarde, esta rede foi dividida em duas
partes, a MILNET com a por��o militar e a ARPANET continuou o meio acad�mico,
com seus projetos de pesquisa concentrados na Universidade da Calif�rnia -
Berkeley, sendo que depois da inven��o do TCP/IP, com o in�cio do seu uso em
1983 foi poss�vel ampliar a rede de forma ordenada, e em 1986, a NSF (Network
Science Foundation) passou a operar o backbone americano formando a NSFNet,
interligando diversas redes regionais de institutos acad�micos e de pesquisa,
dentre eles a CSNET (Computer Science Net), HEPNet (High Energy Physics Net),
SPAN (Nasa Space Physics Network) e outras, at� que em 1988 a NSFNet foi
integrada � redes de outros pa�ses, formando a Internet, que foi difundida em
1993 com a cria��o dos protocolos HTTP e o browser Mosaic, dando origem ao WWW
- World Wide Web.</p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h5><span style='font-family:"Times New Roman"'>Tipos de Redes<o:p></o:p></span></h5>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><span
style='mso-tab-count:1'>����������� </span>Podemos classificar as redes da
seguinte maneira:</p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='margin-right:5.35pt;text-align:justify;mso-list:
     l17 level1 lfo10;tab-stops:list 36.0pt'><b>LAN </b>(<i>Local Area Network</i>):
     redes onde os computadores se localizam em uma faixa de poucos metros at�
     alguns quil�metros</li>
 <li class=MsoNormal style='margin-right:5.35pt;text-align:justify;mso-list:
     l17 level1 lfo10;tab-stops:list 36.0pt'><b>MAN </b>(<i>Metropolitan Area
     Network</i>): redes onde os computadores se localizam em cidades
     diferentes<b><o:p></o:p></b></li>
 <li class=MsoNormal style='margin-right:5.35pt;text-align:justify;mso-list:
     l17 level1 lfo10;tab-stops:list 36.0pt'><b>WAN </b>(<i>Wide Area Network</i>):
     redes onde os computadores se localizam em pa�ses ou continentes
     diferentes<b><o:p></o:p></b></li>
</ul>

<p class=MsoNormal style='margin-top:0cm;margin-right:5.35pt;margin-bottom:
0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-align:justify'><b><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></b></p>

<div align=center>

<table border=1 cellspacing=0 cellpadding=0 style='border-collapse:collapse;
 border:none;mso-border-alt:solid windowtext .5pt;mso-padding-alt:0cm 3.5pt 0cm 3.5pt'>
 <tr>
  <td width=303 style='width:181.9pt;border:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>Diferentes<o:p></o:p></b></p>
  </td>
  <td width=303 style='width:181.9pt;border:solid windowtext .5pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><b>Tipo de Rede<o:p></o:p></b></p>
  </td>
 </tr>
 <tr>
  <td width=303 style='width:181.9pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=ES-TRAD
  style='mso-ansi-language:ES-TRAD'>Salas<o:p></o:p></span></p>
  </td>
  <td width=303 style='width:181.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=ES-TRAD
  style='mso-ansi-language:ES-TRAD'>LAN<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=303 style='width:181.9pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=ES-TRAD
  style='mso-ansi-language:ES-TRAD'>Pr�dios<o:p></o:p></span></p>
  </td>
  <td width=303 style='width:181.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=ES-TRAD
  style='mso-ansi-language:ES-TRAD'>LAN<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=303 style='width:181.9pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <h1><span lang=ES-TRAD style='mso-ansi-language:ES-TRAD'>Campus<o:p></o:p></span></h1>
  </td>
  <td width=303 style='width:181.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=ES-TRAD
  style='mso-ansi-language:ES-TRAD'>LAN<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=303 style='width:181.9pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <h1><span lang=ES-TRAD style='mso-ansi-language:ES-TRAD'>Cidades<o:p></o:p></span></h1>
  </td>
  <td width=303 style='width:181.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='mso-ansi-language:EN-US'>MAN<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=303 style='width:181.9pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='mso-ansi-language:EN-US'>Pa�ses<o:p></o:p></span></p>
  </td>
  <td width=303 style='width:181.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-US
  style='mso-ansi-language:EN-US'>WAN<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=303 style='width:181.9pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'>Continentes</p>
  </td>
  <td width=303 style='width:181.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal align=center style='text-align:center'>WAN</p>
  </td>
 </tr>
</table>

</div>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><!--[if gte vml 1]><v:shape
 id="_x0000_s1041" type="#_x0000_t75" style='position:absolute;left:0;
 text-align:left;margin-left:136.15pt;margin-top:3.05pt;width:155.35pt;
 height:171.2pt;z-index:13'>
 <v:imagedata src="./arquivos/image027.jpg" o:title="intranet"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=182 height=4></td>
 </tr>
 <tr>
  <td></td>
  <td><img width=207 height=228 src="./arquivos/image028.jpg" v:shapes="_x0000_s1041"></td>
 </tr>
</table>

</span><![endif]><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<br style='mso-ignore:vglayout' clear=ALL>

<h4><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>Figura
2: Um exemplo de conex�o LAN<o:p></o:p></span></h4>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify;text-indent:
36.0pt'>Ainda sobre tipos de redes, podemos classifica-las em:</p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='margin-right:5.35pt;text-align:justify;mso-list:
     l17 level1 lfo10;tab-stops:list 36.0pt'><b>Internet</b>: rede p�blica com
     milh�es de computadores compartilhando informa��es de diversas
     especialidades em diversos tipos de m�dia;</li>
 <li class=MsoNormal style='margin-right:5.35pt;text-align:justify;mso-list:
     l17 level1 lfo10;tab-stops:list 36.0pt'><b>Intranet</b>: rede particular
     como de uma empresa ou universidade, onde os aplicativos e documentos de
     departamentos diferentes s�o disponibilizados em forma de p�ginas de
     internet (html);</li>
 <li class=MsoNormal style='margin-right:5.35pt;text-align:justify;mso-list:
     l17 level1 lfo10;tab-stops:list 36.0pt'><b>Extranet</b>: � uma rede
     intranet, por�m expande seu acesso � clientes, fornecedores, parceiros,
     estudantes, e outros de qualquer lugar.<b><o:p></o:p></b></li>
</ul>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><b><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></b></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><!--[if gte vml 1]><v:shape
 id="_x0000_s1042" type="#_x0000_t75" style='position:absolute;left:0;
 text-align:left;margin-left:80.65pt;margin-top:-5.5pt;width:222pt;height:129.15pt;
 z-index:14'>
 <v:imagedata src="./arquivos/image029.png" o:title="extranet2"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
relative;z-index:14'><span style='left:0px;position:absolute;left:108px;
top:-8px;width:296px;height:173px'><img width=296 height=173
src="./arquivos/image030.jpg" v:shapes="_x0000_s1042"></span></span><![endif]><b><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></b></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><b><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></b></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><b><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></b></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><b><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></b></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><b><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></b></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><b><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></b></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><b><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></b></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><b><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></b></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><b><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></b></p>

<br style='mso-ignore:vglayout' clear=ALL>

<h4><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>Figura
3: Demonstra uma rede Extranet compartilhando os recursos<o:p></o:p></span></h4>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><b><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></b></p>

<h2><b><span style='font-family:"Times New Roman"'>Sistemas Operacionais para
Redes<o:p></o:p></span></b></h2>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><span
style='mso-tab-count:1'>����������� </span>Para montar um rede, � necess�rio um
sistema operacional que tenha ferramentas que ajude a administrar a rede.
Dentre os diversos softwares no mercados, alguns dos mais conhecidos s�o:
Microsoft Windows NT, Linux (mais de 70 vers�es), Novell Netware, e diversos
derivados do Unix, como Aix, FreeBSD, Digital Unix, UnixWare, UWIN, NetBSD,
SunOS, Solaris e outros.<o:p></o:p></span></p>

<p class=MsoBodyText><!--[if gte vml 1]><v:shape id="_x0000_s1043" type="#_x0000_t75"
 style='position:absolute;left:0;text-align:left;margin-left:31.9pt;
 margin-top:7.4pt;width:115.05pt;height:51.8pt;z-index:15'>
 <v:imagedata src="./arquivos/image031.png" o:title="windows_nt_logo"/>
</v:shape><v:shape id="_x0000_s1045" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:307.9pt;margin-top:5.15pt;width:78pt;
 height:54.1pt;z-index:17'>
 <v:imagedata src="./arquivos/image032.png" o:title="netware"/>
</v:shape><v:shape id="_x0000_s1044" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:166.15pt;margin-top:6.65pt;width:114pt;
 height:51.65pt;z-index:16'>
 <v:imagedata src="./arquivos/image033.png" o:title="linux-pengo-color-sml"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=43 height=7></td>
  <td width=153></td>
  <td width=26></td>
  <td width=152></td>
  <td width=37></td>
  <td width=104></td>
 </tr>
 <tr>
  <td height=2></td>
  <td colspan=4></td>
  <td rowspan=4 align=left valign=top><img width=104 height=72
  src="./arquivos/image034.gif" v:shapes="_x0000_s1045"></td>
 </tr>
 <tr>
  <td height=1></td>
  <td colspan=2></td>
  <td rowspan=2 align=left valign=top><img width=152 height=69
  src="./arquivos/image035.jpg" v:shapes="_x0000_s1044"></td>
 </tr>
 <tr>
  <td height=68></td>
  <td rowspan=2 align=left valign=top><img width=153 height=69
  src="./arquivos/image036.gif" v:shapes="_x0000_s1043"></td>
 </tr>
 <tr>
  <td height=1></td>
 </tr>
</table>

</span><![endif]><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<h4><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h4>

<br style='mso-ignore:vglayout' clear=ALL>

<h4><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>Figura
4: Logotipos dos sistemas operacionais de redes mais conhecidos<o:p></o:p></span></h4>

<p class=MsoBodyText><span style='font-size:10.0pt;font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><b><span style='font-family:"Times New Roman"'>Tipos de
Servidores<o:p></o:p></span></b></p>

<p class=MsoBodyText><span style='font-size:10.0pt;font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><span
style='mso-tab-count:1'>����������� </span>Depois de decidir qual sistema
operacional dever� ser usado, o administrador da rede ir� configurar os
computadores fazendo o papel de servidores da rede, que s�o os computadores que
compartilhar�o seus recursos com os clientes ou esta��es, de acordo com as suas
necessidades. Alguns tipos de servidores poss�veis de configurar:<o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>ARQUIVOS: gerencia documentos compartilhados<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>CORREIO ELETR�NICO: gerencia contas de e-mails da rede (POP3,SMTP)<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>IMPRESS�O: gerencia fila de impress�o de documentos da rede<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>BOOT REMOTO: gerencia aplicativos de esta��es (sem disco)<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>BANCO DE DADOS: gerencia o banco de dados usado na rede<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>FIREWALL: filtro de acessos externos � rede<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>ROTEADOR: respons�vel pelas rotas do IP�s da rede interna<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>INTERNET: gerencia p�ginas de internet da rede<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>INTRANET: gerencia aplicativos e documentos da intranet<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>BACKUP: respons�vel pelas c�pias de seguran�a da rede<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>PROXY: acelera acesso � p�ginas de internet � guarda p�ginas
     est�ticas<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>PPP: gerencia acessos remotos atrav�s de uma conex�o dial-up<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>DNS: controla cadastro de IP�s x Dom�nios<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>COMUNICA��O: ou gateway, gerencia m�dias externas (celulares, fax,
     m�quinas, etc)<o:p></o:p></span></li>
</ul>

<h6><span style='font-family:"Times New Roman"'>Equipamentos para redes<o:p></o:p></span></h6>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-size:
9.0pt;mso-fareast-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-size:
9.0pt;mso-fareast-font-family:Arial'><span style='mso-tab-count:1'>����������� </span>Para
montar a rede, � necess�rios alguns equipamentos para poder ligar os computadores
uns aos outros. Abaixo uma lista de equipamentos e suas finalidades:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-size:
9.0pt;mso-fareast-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo12;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:8.0pt'>SWITCH: divide uma rede grande em
     diversas LAN�s, aumentando a performance da rede<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo12;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:8.0pt'>PRINT SERVERS: gerenciam as filas de
     impress�es; � um conversor de rede como Rj45 para paralelo<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo12;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:8.0pt'>BRIDGES: interligam LAN�s, com diferentes
     meios de transmiss�o, como de fibra �ptica para cabo coaxial<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo12;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:8.0pt'>HUBS: conecta os computadores da rede,
     uma esp�cie de �benjamim� de computador<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo12;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:8.0pt'>ROUTERS: faz o papel dos bridges, al�m de
     filtrar os dados e direcion�-los ao seu destino correto, seja na LAN ou na
     WAN<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l11 level1 lfo12;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:8.0pt'>REPETIDORES: trabalha como um
     amplificadores de sinais, repetindo os dados enviados<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l11 level1 lfo12;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:8.0pt'>SERVERSWITCH: usado por administradores
     de redes, liga por exemplo 10 servidores remotamente � um �nico
     monitor/teclado/mouse para o administrador<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><!--[if gte vml 1]><v:shape id="_x0000_s1046" type="#_x0000_t75"
 style='position:absolute;margin-left:-.8pt;margin-top:10pt;width:66pt;
 height:58.55pt;z-index:18'>
 <v:imagedata src="./arquivos/image037.jpg" o:title="h_express_switches"/>
</v:shape><v:shape id="_x0000_s1048" type="#_x0000_t75" style='position:absolute;
 margin-left:160.45pt;margin-top:9.25pt;width:2in;height:57.75pt;z-index:20'>
 <v:imagedata src="./arquivos/image038.jpg" o:title="blr5200pcs"/>
</v:shape><v:shape id="_x0000_s1049" type="#_x0000_t75" style='position:absolute;
 margin-left:313.45pt;margin-top:11.5pt;width:1in;height:57.55pt;z-index:21'>
 <v:imagedata src="./arquivos/image039.jpg" o:title="h_hubs"/>
</v:shape><v:shape id="_x0000_s1050" type="#_x0000_t75" style='position:absolute;
 margin-left:382.45pt;margin-top:13pt;width:60pt;height:55.7pt;z-index:22'>
 <v:imagedata src="./arquivos/image040.jpg" o:title="h_routers"/>
</v:shape><v:shape id="_x0000_s1047" type="#_x0000_t75" style='position:absolute;
 margin-left:77.2pt;margin-top:10pt;width:78pt;height:58.5pt;z-index:19'>
 <v:imagedata src="./arquivos/image041.jpg" o:title="h_print_server"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
relative;z-index:18;left:-1px;top:12px;width:591px;height:92px'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=0 height=0></td>
  <td width=88></td>
  <td width=16></td>
  <td width=104></td>
  <td width=7></td>
  <td width=192></td>
  <td width=12></td>
  <td width=172></td>
 </tr>
 <tr>
  <td height=1></td>
  <td colspan=4></td>
  <td rowspan=3 align=left valign=top><img width=192 height=77
  src="./arquivos/image042.jpg" v:shapes="_x0000_s1048"></td>
 </tr>
 <tr>
  <td height=2></td>
  <td rowspan=3 align=left valign=top><img width=88 height=78
  src="./arquivos/image043.jpg" v:shapes="_x0000_s1046"></td>
  <td></td>
  <td rowspan=3 align=left valign=top><img width=104 height=78
  src="./arquivos/image044.jpg" v:shapes="_x0000_s1047"></td>
 </tr>
 <tr>
  <td height=74></td>
  <td></td>
  <td></td>
  <td></td>
  <td rowspan=3 align=left valign=top><img width=172 height=77
  src="./arquivos/image045.gif" v:shapes="_x0000_s1049 _x0000_s1050"></td>
 </tr>
 <tr>
  <td height=2></td>
 </tr>
 <tr>
  <td height=1></td>
 </tr>
</table>

</span><![endif]><span style='mso-bidi-font-size:8.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:8.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:8.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='mso-bidi-font-size:
8.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='mso-bidi-font-size:
8.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<br style='mso-ignore:vglayout' clear=ALL>

<h4><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>Figura
5: Fotos ilustrativas de alguns equipamentos � da esquerda para direita:
switch, print servers, bridges, hubs, routers<o:p></o:p></span></h4>

<p class=MsoNormal style='margin-left:18.0pt'><span style='mso-bidi-font-size:
8.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='mso-bidi-font-size:
8.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoHeading7><span style='font-family:"Times New Roman"'>Meios de
Transmiss�o<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='mso-bidi-font-size:
8.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='mso-bidi-font-size:
8.0pt'><span style='mso-tab-count:1'>����� </span>Para conectar os equipamentos
e computadores, dispomos de alguns meios de transmiss�o de dados. Alguns deles:<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='mso-bidi-font-size:
8.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<h3><span style='font-family:"Times New Roman"'>Uso Geral</span><span
style='font-family:"Times New Roman";mso-fareast-font-family:"Arial Unicode MS";
mso-font-kerning:0pt'><o:p></o:p></span></h3>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'>Par Tran�ado � transmiss�es at� 100Mbps</li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'>Cabo Coaxial � transmiss�es at� 10Mbps</li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'>Fibra �ptica � transmiss�es ate 10Gbps (quarta
     gera��o)</li>
</ul>

<p class=MsoNormal style='text-align:justify'><span style='display:none;
mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'>Uso
Espec�fico:<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'>R�dio Difus�o � como as usadas por r�dios e
     televis�es (grandes dist�ncias e tr�fego)</li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'>Microondas � entre duas parab�licas, para
     dist�ncias entre 10 e 100 km</li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'>Enlace de Sat�lites � cobre todo o globo com imenso
     tr�fego</li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'>Infravermelho � � laser, como controles remotos,
     at� 155 Mbps</li>
</ul>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:8.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:8.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoHeading7 style='mso-pagination:none;mso-layout-grid-align:none;
punctuation-wrap:simple;text-autospace:none;vertical-align:baseline'><span
style='font-family:"Times New Roman"'>Tipos de cabos<o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:8.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:8.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='mso-bidi-font-size:8.0pt;font-family:"Times New Roman"'><span
style='mso-tab-count:1'>����������� </span>S�o usados para conectar todos
equipamentos em uma rede atrav�s dos meios de transmiss�o de dados. Dentre os
cabos, temos o RJ45 e coaxial, normalmente usado em dispositivos de rede,
paralelo, serial ou usb em dispositivos ligados a computador como impressoras,
ou o mais usado em equipamentos eletr�nicos conectados em computadores como um
torno CNC, o cabo RS232.<o:p></o:p></span></p>

<p class=MsoBodyText><!--[if gte vml 1]><v:shape id="_x0000_s1051" type="#_x0000_t75"
 style='position:absolute;left:0;text-align:left;margin-left:7.9pt;
 margin-top:3.05pt;width:20.5pt;height:54pt;z-index:23'>
 <v:imagedata src="./arquivos/image046.jpg" o:title="BN"/>
</v:shape><v:shape id="_x0000_s1053" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:118.95pt;margin-top:2.3pt;width:74.6pt;
 height:54.55pt;z-index:25'>
 <v:imagedata src="./arquivos/image047.jpg" o:title="USB"/>
</v:shape><v:shape id="_x0000_s1055" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:322.65pt;margin-top:4.55pt;width:62.5pt;
 height:53.55pt;z-index:27'>
 <v:imagedata src="./arquivos/image048.jpg" o:title="fibra"/>
</v:shape><v:shape id="_x0000_s1054" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:212.85pt;margin-top:4.55pt;width:79pt;
 height:52.65pt;z-index:26'>
 <v:imagedata src="./arquivos/image049.jpg" o:title="DB9"/>
</v:shape><v:shape id="_x0000_s1052" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:41.9pt;margin-top:5.3pt;width:58.7pt;
 height:53.4pt;z-index:24'>
 <v:imagedata src="./arquivos/image050.jpg" o:title="RJ45"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=11 height=3></td>
  <td width=27></td>
  <td width=18></td>
  <td width=78></td>
  <td width=25></td>
  <td width=99></td>
  <td width=26></td>
  <td width=105></td>
  <td width=41></td>
  <td width=84></td>
 </tr>
 <tr>
  <td height=1></td>
  <td colspan=4></td>
  <td rowspan=4 align=left valign=top><img width=99 height=73
  src="./arquivos/image051.jpg" v:shapes="_x0000_s1053"></td>
 </tr>
 <tr>
  <td height=2></td>
  <td rowspan=3 align=left valign=top><img width=27 height=72
  src="./arquivos/image052.jpg" v:shapes="_x0000_s1051"></td>
 </tr>
 <tr>
  <td height=1></td>
  <td colspan=3></td>
  <td></td>
  <td rowspan=2 align=left valign=top><img width=105 height=70
  src="./arquivos/image053.jpg" v:shapes="_x0000_s1054"></td>
  <td></td>
  <td rowspan=3 align=left valign=top><img width=84 height=71
  src="./arquivos/image054.jpg" v:shapes="_x0000_s1055"></td>
 </tr>
 <tr>
  <td height=69></td>
  <td></td>
  <td rowspan=3 align=left valign=top><img width=78 height=71
  src="./arquivos/image055.jpg" v:shapes="_x0000_s1052"></td>
 </tr>
 <tr>
  <td height=1></td>
 </tr>
 <tr>
  <td height=1></td>
 </tr>
</table>

</span><![endif]><span style='mso-bidi-font-size:8.0pt;font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<br style='mso-ignore:vglayout' clear=ALL>

<p class=MsoBodyText><span style='mso-bidi-font-size:8.0pt;font-family:"Times New Roman"'><span
style="mso-spacerun: yes">�</span><b><span style='color:#000099;display:none;
mso-hide:all'><o:p></o:p></span></b></span></p>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-size:
9.0pt;mso-fareast-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<h4><!--[if gte vml 1]><v:shape id="_x0000_s1056" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:73.15pt;margin-top:5.75pt;width:102pt;
 height:50.05pt;z-index:28'>
 <v:imagedata src="./arquivos/image056.jpg" o:title="232"/>
</v:shape><v:shape id="_x0000_s1057" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:211.9pt;margin-top:5pt;width:114pt;
 height:50.7pt;z-index:29'>
 <v:imagedata src="./arquivos/image057.jpg" o:title="DB25"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=98 height=7></td>
  <td width=136></td>
  <td width=49></td>
  <td width=152></td>
 </tr>
 <tr>
  <td height=1></td>
  <td colspan=2></td>
  <td rowspan=2 align=left valign=top><img width=152 height=67
  src="./arquivos/image058.jpg" v:shapes="_x0000_s1057"></td>
 </tr>
 <tr>
  <td height=66></td>
  <td align=left valign=top><img width=136 height=66
  src="./arquivos/image059.jpg" v:shapes="_x0000_s1056"></td>
 </tr>
</table>

</span><![endif]><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h4>

<h4><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h4>

<h4><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h4>

<h4><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h4>

<br style='mso-ignore:vglayout' clear=ALL>

<h4><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>Figura
6: Fotos ilustrativas de alguns cabos � da esquerda para direita: coaxial,
RJ45, USB, serial DB9, fibra �ptica, serial RS232 e paralelo DB25<o:p></o:p></span></h4>

<p class=MsoNormal style='text-align:justify'><span style='mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoHeading7 style='mso-pagination:none;mso-layout-grid-align:none;
punctuation-wrap:simple;text-autospace:none;vertical-align:baseline'><span
style='font-family:"Times New Roman"'>Topologia de Redes<o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><span style='mso-tab-count:1'>����������� </span>Um outro
assunto amplamente discutido entre administradores de redes � a melhor forma de
conectar os computadores, ou seja, a topologia da rede. Mesmo que uma empresa
compre os melhores equipamentos do mercado para rede, se a estrutura da rede
n�o estiver bem organizada, a rede ficar� lenta da mesma forma devido as
caracter�sticas de cada topologia, sendo que estas devem ser analisadas para
atender cada caso. � poss�vel tamb�m montar uma rede com diversos tipos de
estrutura diferentes.<o:p></o:p></span></p>

<p class=MsoBodyText><!--[if gte vml 1]><v:shape id="_x0000_s1058" type="#_x0000_t75"
 style='position:absolute;left:0;text-align:left;margin-left:139.9pt;
 margin-top:4.35pt;width:173.05pt;height:174pt;z-index:30'>
 <v:imagedata src="./arquivos/image060.jpg" o:title="topologia"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=187 height=6></td>
 </tr>
 <tr>
  <td></td>
  <td><img width=230 height=232 src="./arquivos/image061.jpg" v:shapes="_x0000_s1058"></td>
 </tr>
</table>

</span><![endif]><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<h4><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h4>

<br style='mso-ignore:vglayout' clear=ALL>

<h4><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>Figura
7: Mostra algumas poss�veis forma��es de redes � em cima do lado esquerdo em
estrela, do lado direito em barra e embaixo em anel<o:p></o:p></span></h4>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-size:
8.0pt;font-family:Wingdings;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Wingdings'><span
style='mso-char-type:symbol;mso-symbol-font-family:Wingdings'>�</span></span><span
style='mso-bidi-font-size:8.0pt'> ESTRELA<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Alto custo
     com cabos<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Mais
     tolerante � falhas<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>F�cil de
     instalar usu�rios<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     display:none;tab-stops:list 36.0pt'><span style='display:none;mso-hide:
     all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     display:none;tab-stops:list 36.0pt'><span style='display:none;mso-hide:
     all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     display:none;tab-stops:list 36.0pt'><span style='display:none;mso-hide:
     all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Monitoramento
     centralizado</span><span style='display:none;mso-hide:all'><o:p></o:p></span></li>
</ul>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-size:
8.0pt;font-family:Wingdings;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Wingdings'><span
style='mso-char-type:symbol;mso-symbol-font-family:Wingdings'>�</span></span><span
style='mso-bidi-font-size:8.0pt'> ANEL</span><span style='mso-bidi-font-size:
8.0pt;mso-fareast-font-family:"Arial Unicode MS"'><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Requer menos
     cabos<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Desempenho
     uniforma<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Se uma
     esta��o para, todas param junto<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Problemas
     dif�ceis de isolar<o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='text-align:justify'><span style='display:none;
mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-size:
8.0pt;font-family:Wingdings;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Wingdings'><span
style='mso-char-type:symbol;mso-symbol-font-family:Wingdings'>�</span></span><span
style='mso-bidi-font-size:8.0pt'> BARRAMENTO</span><span style='mso-bidi-font-size:
8.0pt;mso-fareast-font-family:"Arial Unicode MS"'><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>F�cil
     instala��o<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Requer menos
     cabos<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Rede lenta
     em per�odos com uso intenso<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Problemas
     dif�ceis de isolar<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Todos n�s
     tem acesso a mesmo informa��o<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoHeading7 style='mso-pagination:none;mso-layout-grid-align:none;
punctuation-wrap:simple;text-autospace:none;vertical-align:baseline'><span
style='font-family:"Times New Roman"'>Exemplo de aplica��o � Visita t�cnica<o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><span style='mso-tab-count:1'>����������� </span>A empresa
visitada foi a Conesteel V�lvulas e Conex�es Industriais Ltda., onde foi
desenvolvido o sistema SISCOVAL, aplicativo este que � usado em toda a rede, de
qualquer parte da f�brica. No exemplo, � conectado ao torno CNC um cabo serial
RS232, ligado � um computador com o sistema instalado. O sistema funciona da
seguinte maneira: um vendedor faz a cota��o de pre�os, depois importa para
pedidos, que analisa automaticamente se existem pe�as em estoque, caso
afirmativo, envia um romaneio � expedi��o, sen�o verifica a possibilidade de
fabrica��o emitindo uma ordem de fabrica��o, e ordem de compra se for
necess�rio. Ainda no caso de v�lvulas, � necess�rio emitir uma ordem de montagem
com as ordens de fabrica��o de cada componente separadamente. Na f�brica, o
respons�vel pelos tornos CNC analisa a ordem de fabrica��o, por ela abre o
programa de desenhos da pe�a, o de layout da montagem da m�quina para aquela
pe�a, o de processos (fura��o, usinagem, etc) daquela pe�a, e por fim abre o
Gerenciador de CNC, com o programa do torno daquela pe�a gravado no banco de
dados, que � poss�vel pelo sistema alterar, simular graficamente como no torno,
e ainda trabalha como um DNC � software que transmite o programa ao torno.<o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><!--[if gte vml 1]><v:shape id="_x0000_s1059" type="#_x0000_t75"
 style='position:absolute;left:0;text-align:left;margin-left:103.9pt;
 margin-top:151.6pt;width:228pt;height:170.95pt;z-index:31'>
 <v:imagedata src="./arquivos/image062.jpg" o:title="GC"/>
</v:shape><v:shape id="_x0000_s1060" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:2.65pt;margin-top:6.75pt;width:202.5pt;
 height:151.9pt;z-index:32'>
 <v:imagedata src="./arquivos/image063.jpg" o:title="P0000030"/>
</v:shape><v:shape id="_x0000_s1061" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:225.4pt;margin-top:7.5pt;width:199pt;
 height:149.25pt;z-index:33'>
 <v:imagedata src="./arquivos/image064.jpg" o:title="P0000031"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=4 height=9></td>
 </tr>
 <tr>
  <td></td>
  <td><img width=562 height=421 src="./arquivos/image065.gif" v:shapes="_x0000_s1059 _x0000_s1060 _x0000_s1061"></td>
 </tr>
</table>

</span><![endif]><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<br style='mso-ignore:vglayout' clear=ALL>

<h4><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>Figura
8: Foto do<span style="mso-spacerun: yes">� </span>torno com o cabo RS232 e do
Gerenciador de CNC <o:p></o:p></span></h4>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><b><span style='font-size:14.0pt;
mso-bidi-font-size:12.0pt;text-transform:uppercase'>SIStemas de gets�o<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><b>Sistema (ou Software) de
Gest�o<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'>� Programa de computador que
auxilia na administra��o , total ou parcial, da empresa, podendo ser composto
de v�rios m�dulos, cada qual com uma finalidade.� ( Extra�do da tese de
Doutorado de Wagner D�umichen Barrella ).</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>A arquitetura
de softwrae mais conhecida no mercado � a ERP ( Enterprise Resource Planning ).<span
style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>ERP � definido como uma arquitetura de
software que facilita o fluxo de informa��es entre todas as atividades da
empresa como fabrica��o, log�stica, finan�as e recursos humanos. � um sistema
amplo de solu��es e informa��es. Um banco de dados �nico, operando em uma
plataforma comum que interage com um conjunto integrado de aplica��es,
consolidando todas as opera��es do neg�cio em um simples ambiente
computacional. Idealmente, a vantagem de um sistema ERP � a habilidade de
necessitar a entrada de informa��es uma �nica vez. Por exemplo, um
representante de vendas grava um pedido de compra no sistema ERP da empresa.
Quando a f�brica come�a a processar a ordem, o faturamento e a expedi��o podem
checar o status da ordem de produ��o e estimar a data de embarque. O estoque
pode checar se a ordem pode ser suprida pelo saldo e podem ent�o notificar a
produ��o com uma ordem que apenas complemente a quantidade de itens
requisitados. Uma vez expedida, a informa��o vai direto a relat�rio de vendas
para gerenciamento superior. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>O ERP emprega a tecnologia
cliente/servidor. Isto significa que o usu�rio do sistema (cliente) roda uma
aplica��o (rotina de um m�dulo do sistema) que acessa as informa��oes de um
sistema de gerenciamento de uma base de dados �nica (servidor). Isto, ao
contr�rio do antigo sistema de mainframe, reflete o conceito de computa��o
descentralizada. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>O sistema opera ent�o com uma base de
dados comum, no cora��o do sistema. O banco de dados interage com todos o
aplicativos do sistema, desta forma, elimina-se a redund�ncia e redigita��o de
dados, o que assegura a integridade das informa��es obtidas. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Cada sistema de ERP oferece um conjunto de
m�dulos (aplicativos) para aquisi��o. Estes s�o os pacotes funcionais,
individualizados para cada unidade de neg�cio dentro da organiza��o
(financeiro, engenharia, PCP, administra��o de materiais, contabilidade, etc.).
<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-fareast-font-family:
"MS Mincho"'>Muitos sistemas ERP s�o comercializados em um pacote com os
m�dulos b�sicos para a gest�o do neg�cio e ent�o oferecem m�dulos adicionais
que podem ser adquiridos individualmente em fun��o do interesse e estrat�gia da
empresa. Todos esses aplicativos s�o completamente integrados a fim de
propiciar consist�ncia e visibilidade para todas as atividades inerentes ao
processo da organiza��o. Entretanto, o sistema ERP requer do usu�rio o
cumprimento dos procedimentos e processos como descrito pelo aplicativo. Os
vendedores de ERP tamb�m oferecem aplicativos especializados em gerir processos
diferenciados de atividades espec�ficas. Tais m�dulos atendem a mercados
verticais assim como reparti��es p�blicas, planos de sa�de, financeiras, etc.
Por exemplo a empresa SAP, oferece um m�dulo espec�fico para o gerenciamento de
planos de sa�de e conv�nios, que apoiam processos orientados ao paciente dentro
do hospital. A tend�ncia atual mostra as vendas movendo-se mais ainda para
�reas espec�ficas assim como gerenciamento do ch�o-de-f�brica, log�stica e
automa��o de marketing direto.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:Arial;
mso-fareast-font-family:"MS Mincho"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify'><b><span style='font-size:
12.0pt;mso-bidi-font-size:10.0pt;font-family:Arial;mso-fareast-font-family:
"MS Mincho"'>Benef�cios do Sistema ERP<o:p></o:p></span></b></p>

<p class=MsoPlainText style='text-align:justify'><b><span style='font-size:
14.0pt;mso-bidi-font-size:10.0pt;font-family:Arial;mso-fareast-font-family:
"MS Mincho"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Tradicionalmente, as empresas
proliferaram-se com a utiliza��o de sistemas incompat�veis, como CAD e sistemas
MRP, os quais armazenavam dados vitais, sem mecanismos de busca e acesso a tais
dados ou transfer�ncia entre sistemas. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Sistemas ERP funcionam com a utiliza��o de
uma base de dados comum.<span style="mso-spacerun: yes">� </span>Assim, decis�es
que envolvem an�lise de custos, por exemplo, podem ser calculadas com o rateio
de todos os custos na empresa com melhor performance do que com o levantamento
parcial em cada unidade. Al�m de evitar a concilia��o manual das informa��es
obtidas entre as interfaces dos diferentes aplicativos. Um sistema integrado
oferece a possibilidade melhoria de relat�rios, fidelidade de dados,
consist�ncia e compara��o de dados, devido � utiliza��o de um crit�rio �nico em
todas as atividades da empresa. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Impulsionado pelo processo de
re-engenharia do neg�cio, a implementa��o do ERP reduz redund�ncia de
atividades na organiza��o. Com departamentos utilizando aplicativos integrados
e compartilhando a mesma base de dados, n�o existe a necessidade de repeti��o
de atividades tais como reentrada de dados de um aplicativo para outro.
Estatisticamente, em sistemas n�o integrados, uma informa��o pode residir em
at� 6 diferentes lugares [John H. Sheridan]. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>O sistema ERP identifica o tempo como uma
vari�vel cr�tica de restri��o, � a informa��o que norteia a tecnologia dos
neg�cios e a tecnologia da informa��o. A redu��o do tempo de c�clo � obtida via
minimiza��o na obten��o e dissemina��o das informa��es. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Decis�es ao longo dos processos da empresa
tamb�m s�o poss�veis gra�as ao ERP. Isto resulta em economia de tempo, don�nio
sobre as opera��es e tamb�m a elimina��o daquelas sup�rfluas, as quais o
cliente n�o paga. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Elaine L. Appleton em seu livro &quot;How
to survive ERP&quot; cita o caso das ind�strias PAR na cidade de Moline
(Illinois) em em um ano de implementa��o de ERP conseguiram reduzir o lead time
com o cliente de 6 para 2 semanas, as entregas na data da programa��o
aumentaram de 60% para 95%, os n�veis de reserva de materiais e invent�rios
caiu em quase 60% e a tramita��o dos documentos de uma ordem de produ��o no
ch�o de f�brica caiu de semanas para horas. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Reconhecendo as necessidades das empresas
em reduzir o tempo de resposta ao mercado de produtos e servi�os, os sistemas
ERP s�o desenvolvidos para responder instantaneamente o surgimento de novas
necessidades n�o previstas. As opera��es podem facilmente mudar ou expandir sem
romper com as atividades em curso. Da�, o tempo para desdobrar e otimizar os
processos � severamente reduzido. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>As empresas est�o sempre buscando novos
nichos de mercado. Um neg�cio n�o envolver� necess�riamente, sempre o mesmo
produto. Internamente</span><span style='font-size:12.0pt;mso-bidi-font-size:
10.0pt;font-family:Arial;mso-fareast-font-family:"MS Mincho"'> </span><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>teremos novas necessidades de processos,
ent�o devemos estar preparados para tanto. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Um aspecto importante atualmente � o Bug
do ano 2.000. Devido a ser um sistema de �ltima gera��o, a base de dados
relacional dos sistemas ERP suporta ano com 4 d�gitos, o que n�o acontece em
antigos sistemas ainda remanecentes dos main-frames. Parece um fato de pouca
import�ncia, mas muitas empresas</span><span style='font-size:12.0pt;
mso-bidi-font-size:10.0pt;font-family:Arial;mso-fareast-font-family:"MS Mincho"'>
</span><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:
"Times New Roman";mso-fareast-font-family:"MS Mincho"'>ter�o surpresas
desagrad�veis com emiss�o de t�tulos, faturas, boletos, etc. na virada do ano.</span><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:Arial;mso-fareast-font-family:
"MS Mincho"'> </span><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
font-family:"Times New Roman";mso-fareast-font-family:"MS Mincho"'><o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Outro detalhe importante � o surgimento de
novas moedas, assim como o Euro. Em um sistema ERP, a simples a��o de converter
a moeda na base de dados atualizar� todo o sistema e documentos derivados. O
mesmo pode significar uma atividade com semanas de dura��o em sistemas n�o
integrados. <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-fareast-font-family:
"MS Mincho"'>Muitos sistemas de ERP j� possuem dualidade de moeda como
ferramenta inerente ao sistema, isto pode gerar uma transi��o confort�vel e
autom�tica em uma situa��o de mudan�a de moeda. Quem administra o CPD de uma
grande corpora��o, sabe contabilizar as horas ou dias de desespero que poder�o
ser evitados.</span></p>

<p class=MsoNormal><b><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></b></p>

<p class=MsoNormal><b>Pricipais Softwares do Mercado<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'>1) SAP / R3<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'>2) BPCS (Business Planning and Control System )<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'>3) BAAN<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'>4) EMS<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'>5) Siga Advanced<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'>6) Oracle Applications<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><b><span lang=EN-US
style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal><b>SAP R/3</b></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal>Os principais m�dulos do software SAP<span
style="mso-spacerun: yes">� </span>R/3 s�o:</p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><span style='font-size:11.0pt'>� Recursos Humanos<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>� Materiais<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>� Contabilidade Financeira<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>� Controladoria<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>� Projetos<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>� Investimentos de Capital<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>� Produ��o <o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>� Tesouraria<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>� Produ��o em ind�stria de Processos<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>� Vendas e Distribui��o<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>� Controle de Empresa<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>� Manuten��o<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>� Workflow<o:p></o:p></span></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal>Estes softwares incorporam diversas solu��es estrat�gicas em
seu conte�do.<span style='display:none;mso-hide:all'><o:p></o:p></span></p>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='display:none;mso-hide:all;
mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">�</span>Entre eles podemos citar:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><span
style="mso-spacerun: yes">�</span>- Supply Chain Management </span><span
lang=EN-US style='font-family:"Arial Unicode MS";mso-ansi-language:EN-US'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><span
style="mso-spacerun: yes">�</span>- CRM (Customer Relationship Management )<o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><span
style="mso-spacerun: yes">�</span>- E-Procurement <o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><span
style="mso-spacerun: yes">�</span>- E-Marketplace <o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><span
style="mso-spacerun: yes">�</span>- Business Intelligence <o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><span
style="mso-spacerun: yes">�</span>- Financials <o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><span
style="mso-spacerun: yes">�</span>- Product Lifecycle Management <o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-fareast-font-family:"Arial Unicode MS";
mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-fareast-font-family:"Arial Unicode MS";
mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'>Abaixo
daremos uma explica��o b�sica sobre as solu��es encontradas nestes softwares.
Cada softwrae coloca uma nomenclatura para sua solu��o, mas todos possuem o
mesmo conceito, que � o tentaremos mostrar.<o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><u>Supply Chain Management</u> </p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'>Os melhores produtos nem sempre s�o os
vencedores, mas as melhores redes de distribui��o sim. A vantagem competitiva
n�o depende mais somente do produto ou da empresa. O que tem se mostrado
imbat�vel � integrar a Cadeia Produtiva para dinamizar e personalizar o
processo de fazer neg�cios com clientes alvo. <o:p></o:p></span></p>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'>O gerenciamento da Cadeia Produtiva (Supply
Chain Management - SCM) � mais do que apenas um novo modismo no mundo dos
neg�cios. � puro ouro. As empresas est�o vislumbrando um aumento mensur�vel e
signifitivo dos lucros atrav�s dos recursos da Cadeia Produtiva (SCM).<o:p></o:p></span></p>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'>Existem dois lados na moeda do SCM: planejamento
e execu��o. O planejamento acelera a tomada de decis�o, o que � vital para se
passar do &quot;e se&quot;... para &quot;o que � melhor&quot;... no
planejamento da transi��o de produtos desde a fonte at� o seu uso final. Mas os
principais propulsores para maioria dos neg�cios baseiam-se na execu��o:<o:p></o:p></span></p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l9 level1 lfo14;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Maior participa��o de mercado <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l9 level1 lfo14;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Servi�o de atendimento a clientes de
     padr�o internacional <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l9 level1 lfo14;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Lan�amento r�pido de novos produtos <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l9 level1 lfo14;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Log�stica totalmente integrada <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l9 level1 lfo14;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Ciclo de fluxo de caixa acelerado <o:p></o:p></span></li>
</ul>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'>Portanto, n�o � de se estranhar que a execu��o
de uma Cadeia Produtiva voltada para o cliente tenha surgido como um fator
chave para uma vantagem competitiva e para o crescimento. A excel�ncia na
execu��o significa estar o mais pr�ximo poss�vel de seu cliente, estar
totalmente sintonizado com suas exig�ncias, as quais mudam constantemente, e,
ent�o, adaptar o seu neg�cio para atender a essas exig�ncias.<o:p></o:p></span></p>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'>A solu��o Supply Chain, permite capacit�-lo para
executar de forma din�mica redes de distribui��o orientadas ao cliente. Uma
abrangente rede central de computadores de funcionalidade compartilhada via
distribui��o facilita realizar neg�cios da maneira que o cliente quer. <o:p></o:p></span></p>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'>O Supply Chain da J. D. Edwards amplia o sistema
de informa��es limitado do ERP, transformando-o em uma Cadeia Produtiva
ampliada que apoia a tomada de decis�es. O banco de dados de informa��es do
cliente e de produtos (que possibilita uma comunica��o &quot;de interface e
imagem de dados �nicas&quot; atrav�s de aplica��es tradicionais de ERP). �
ampliado para incluir a execu��o de fun��es centrais de distribui��o, tais
como:<o:p></o:p></span></p>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l8 level1 lfo15;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Gerenciamento de pre�os e promo��es <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l8 level1 lfo15;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Planejamento e programa��o antecipados <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l8 level1 lfo15;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Gerenciamento de pedidos com
     configura��o de pedidos de vendas <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l8 level1 lfo15;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Automatiza��o da for�a de vendas <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l8 level1 lfo15;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Gerenciamento de estoque <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l8 level1 lfo15;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Gerenciamento de transporte <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l8 level1 lfo15;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Gerenciamento do servi�o de atendimento
     ao cliente <o:p></o:p></span></li>
</ul>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'>Ao usar recursos comerciais eletr�nicos
eficazes, voc� mant�m a coer�ncia estrat�gica e a integridade dos dados, a
medida que voc� expande o raio de a��o de seus neg�cios para incluir parceiros
comerciais. O J.D. Edwards Supply Chain da J.D. Edwards possibilita a troca
eletr�nica de dados (EDI - Electronic Data Interchange) e � compat�vel com a
Web, de forma que voc� possa compartilhar, de forma colaborativa, as
informa��es sobre oferta e procura e acessar telas com informa��es sobre
transa��es de solicita��es e pedidos para seus fornecedores e clientes.<o:p></o:p></span></p>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'>Resumidamente, voc� tem condi��es de receber um
pedido, determinar o pre�o, produzir ou suprir, embalar e enviar o produto da
forma que seu cliente deseja. Voc� pode oferecer a op��o de uma assist�ncia
p�s-venda atrav�s de uma linha direta, pedido de conserto ou assist�ncia
t�cnica no local. Voc� poder� emitir faturas no formato, ciclo de faturamento,
idioma e moeda que o cliente preferir. E toda essa flexibilidade est� integrada
a um �nico sistema de servi�o personalizado,
&quot;one-face-to-the-customer&quot;, em qualquer est�gio da Cadeia Produtiva.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><u><span lang=EN-US
style='mso-fareast-font-family:"Arial Unicode MS";mso-ansi-language:EN-US'>CRM
- </span></u><u><span lang=EN-US style='mso-ansi-language:EN-US'>Customer
Relationship Management<o:p></o:p></span></u></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Customer
Relationship Management ou Gerenciamento do Relacionamento, como o pr�prio nome
indica � a integra��o entre o Marketing e a tecnologia da Informa��o para
prover a empresa de meios mais eficazes e integrados para atender, reconhecer e
cuidar do cliente, em tempo real e transformar estes dados em informa��es que
disseminadas pela organiza��o permitem que o cliente seja �conhecido� e cuidado
por todos e n�o s� pelas operadoras do <a href="..\..\TEMP\call_center.htm"><span
style='color:windowtext;text-decoration:none;text-underline:none'>Call Center</span></a>.<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Al�m
de estar preparado para atender no primeiro toque, � preciso responder o e-mail
ou o fax assim que chega a empresa, e incorporar todos os dados de contato no <a
href="..\..\TEMP\data_base.htm"><span style='color:windowtext;text-decoration:
none;text-underline:none'>Database Marketing</span></a> para gerar uma
comunica��o continuada e com pertin�ncia por qualquer meio (telefone, mala
direta, e-mail e pessoal). Al�m disso a captura centralizada desses dados,
transmitida para o banco de dados de marketing permite conhecer o perfil do
cliente, detectar as amea�as e oportunidades sinalizadas atrav�s de uma
reclama��o (amea�a), de um pedido de mais informa��es (oportunidade), de um
pedido acompanhado de uma refer�ncia ao pre�o diferenciado do concorrente
(amea�a), de uma insinua��o que o concorrente est� prestando mais servi�os
(amea�a), ou de que a empresa est� ampliando a sua produ��o
(oportunidade).&nbsp;<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>O CRM
� a combina��o da filosofia do <a href="..\..\TEMP\estrat_mark.htm"><span
style='color:windowtext;text-decoration:none;text-underline:none'>marketing de
Relacionamento</span></a>, que ensina a import�ncia de cultivar os clientes e
estabelecer com os mesmo um relacionamento est�vel e duradouro atrav�s do uso
intensivo da informa��o, aliado a tecnologia da informa��o que prove os
recursos de inform�tica e telecomunica��es integrados de uma forma singular que
transcende as possibilidades dos <a href="..\..\TEMP\call_center.htm"><span
style='color:windowtext;text-decoration:none;text-underline:none'>Call Center</span></a>s
atuais.&nbsp;<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Essa
integra��o singular pressup�e que a empresa esteja disposta a manter um
relacionamento suportado por processos operacionais mais �geis e selecione a
tecnologia adequada, e isto requer metodologia, expertise e experi�ncia
comprovada neste tipo de solu��o. � uma grande virada no conceito de
atendimento ao cliente, que extrapola a pr�tica existente em qualidade, e
possibilidade de aumentar a fidelidade do cliente e consequentemente a
rentabilidade.&nbsp;<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Tamb�m
� preciso que os recursos humanos sejam treinados e capacitados, em todos os
n�veis, n�o s� para melhorar a qualidade do atendimento, mas tamb�m para usar
adequadamente as informa��es que transformam possibilidades de neg�cios em
lucros.&nbsp;<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Caso
pr�tico: Uma empresa de gases industriais, para ser bem sucedida no
gerenciamento do relacionamento com o cliente transformou o seu servi�o de
atendimento ao cliente, de um est�gio de triagem receptivas das liga��es, sem
autonomia para o est�gio de alavancagem, incorporando as atividades de <a
href="..\..\TEMP\telemarketing.htm"><span style='color:windowtext;text-decoration:
none;text-underline:none'>telemarketing</span></a> ativo para identificar novas
oportunidades de neg�cios, vendas e cobran�a, visando a fidelidade do cliente.
O novo Contact Center, totalmente informatizado, integrou-se a um sistema de
informa��es sobre o cliente totalmente integrado e operando em tempo real. Este
sistema ser� usado pelas unidades de neg�cios, pelo marketing, vendas e servi�o
de atendimento ao cliente no dia a dia e coletar muitos dados sobre o
comportamento do clienter, para entender as quest�es referentes � elasticidade
ao pre�o, percep��o da marca, propens�o a consumir outros produtos da empresa
(cross-selling), etc.&nbsp;<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Portanto,
para melhorar a habilidade para capturar dados, tratamento e uso das
informa��es para gerar mais retorno foi preciso dotar a empresa, al�m da
tecnologia adequada (equipamento de telecomunica��es com DAC, <a
href="..\..\TEMP\call_center.htm"><span style='color:windowtext;text-decoration:
none;text-underline:none'>0800</span></a>, gerenciador de WEB e fax, de uma
estrat�gia de relacionamento com o cliente, que definiu as pol�ticas de
comercializa��o, autonomia das operadoras nas negocia��es do pedido e formas de
comunica��o por marketing direto. A Estrat�gia foi definida a partir de uma
pesquisa realizada com os clientes e a contrata��o da <a
href="..\..\TEMP\index.htm"><span style='color:windowtext;text-decoration:none;
text-underline:none'>Bretzke</span></a> Consultoria que desenvolveu um projeto
de processo do cliente, que mapeou como os clientes contatam a empresa e como
desejam ser atendidos e que realizou o redesenho dos processos atrav�s do fluxo
do pedido e informa��es. Tamb�m foram redefinidos os perfil das profissionais
do Contact Center, que passaram a ter n�vel universit�rio e foram treinadas
atrav�s de um programa formal de treinamento com mais de 120 horas de cursos em
produtos e as suas aplica��es t�cnicas, na qualidade do atendimento e no
pr�prio neg�cio dos clientes da empresa. Os resultados come�aram a aparecer
mesmo antes do projeto estar completamente implantado, pois com a revis�o dos
processos e mudan�a nos recursos humanos a qualidade do atendimento foi
imediata, houve redu��o no tempo que os vendedores dedicavam a solu��o de
problemas e atendimento aos clientes por problemas relacionados a parte
administrativa do pedido.&nbsp;<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Nesse
contexto hoje existe uma bom n�mero de solu��es a disposi��o, mas tamb�m est�
se formando uma torre de babel em torno do que significa <a
href="..\..\TEMP\estrat_mark.htm"><span style='color:windowtext;text-decoration:
none;text-underline:none'>Marketing de Relacionamento</span></a> e CRM e que
tecnologia � apropriada. No quadro abaixo definimos o escopo de cada solu��o e
seus principais fornecedores e como a empresa precisa visualizar a integra��o
das diversas solu��es. � preciso derrubar o mito de que uma �nica solu��o possa
suprir a necessidade de gerenciamento do relacionamento. No quadro a baixo
verificamos que o gerenciamento do cliente � composto de uma parte da solu��o
t�pica de <a href="..\..\TEMP\call_center.htm"><span style='color:windowtext;
text-decoration:none;text-underline:none'>Call Center</span></a> mais a solu��o
de <a href="..\..\TEMP\data_base.htm"><span style='color:windowtext;text-decoration:
none;text-underline:none'>database marketing</span></a>, e que uma complementa
a outra, que por sua vez se integram aos demais sistemas operacionais.<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Finalmente,
� recomend�vel a contrata��o de uma empresa com metodologia de implanta��o de
projetos que fa�a o papel de integrador, atuando em conjunto com a �rea de
tecnologia da informa��o e marketing e que concilie os interesses das �reas sob
a �gide da filosofia de <a href="..\..\TEMP\estrat_mark.htm"><span
style='color:windowtext;text-decoration:none;text-underline:none'>Marketing de
Relacionamento</span></a><o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>As
empresas, integrando o Marketing e a tecnologia da informa��o no esfor�o para
manterem a sua posi��o competitiva, est�o concentrado-se em oferecer cada vez
mais servi�os aos seus clientes, pois entendem de que a lealdade dos clientes
diminui a sua depend�ncia da inova��o de produtos e servi�os, as torna menos
suscet�vel a guerra de pre�os, e coloca o diferencial competitivo na lealdade
do cliente investindo em <a href="..\..\TEMP\call_center.htm"><span
style='color:windowtext;text-decoration:none;text-underline:none'>Call Centers</span></a>.&nbsp;<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Portanto,
adotar o quanto antes o m�todo do CRM (Customer Relatioship Management) � uma
quest�o de manter a competitividade, pois os clientes foco da aten��o de tantas
empresas aumentaram as suas expectativas e n�o se contentam simplesmente com um
acesso r�pido e f�cil, a qualquer hora �s centrais de atendimento.&nbsp;<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Por
isso, � preciso ir al�m. � preciso transformar o seu <a
href="..\..\TEMP\call_center.htm"><span style='color:windowtext;text-decoration:
none;text-underline:none'>Call Center</span></a> num Contact Center, onde o
t�pico acesso telef�nico gratuito est� sendo substitu�do por acessos
alternativos, por e-mail, fax, e Internet, e cada que as atendentes tem
autonomia plena para resolver qualquer problema do cliente na primeira chamada,
ou em tempo h�bil. Al�m disso, � preciso que toda a empresa esteja preparada
para prestar o atendimento e reconhecimento que o cliente deseja e - que a
empresa promete- , e isso s� � preciso se for disponibilizado o mesmo �front
office� (software com a ficha do cliente e todos os dados de relacionamento) do
Contact Center para qualquer departamento da empresa com a finalidade de
auxiliar o crescimento e manuten��o desse forte relacionamento que se
transformar� em receitas e lucros crescentes.&nbsp;</span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<h3><u><span style='font-family:"Times New Roman"'>Business Intelligence<o:p></o:p></span></u></h3>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin-right:2.45pt;text-align:justify'><span style='font-family:
"Times New Roman";mso-fareast-font-family:"Times New Roman"'>Intelig�ncia � o
resultado de um processo que come�a com a coleta de dados. Esses dados s�o
organizados e transformados em informa��o que, depois de analisada e
contextualizada, transforma-se em intelig�ncia. Essa, por sua vez, quando
aplicada a processos de decis�o, gera vantagem competitiva para a organiza��o.<o:p></o:p></span></p>

<p style='margin-right:2.45pt;text-align:justify'><span style='font-family:
"Times New Roman";mso-fareast-font-family:"Times New Roman"'>Business
Intelligence � um conjunto de conceitos e metodologias que, fazendo uso de
acontecimentos (fatos) e sistemas baseados nos mesmos, ap�ia a tomada de
decis�es em neg�cios. Aplica��es BI incluem sistemas de suporte a decis�es,
ferramentas para</span><span style='font-family:"Times New Roman"'> pesquisas e
relat�rios, an�lises estat�sticas e previs�es. <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><b><span style='font-size:14.0pt;mso-bidi-font-size:10.0pt;
font-family:"Times New Roman";mso-bidi-font-family:Arial'>Atuadores El�tricos<o:p></o:p></span></b></p>

<p class=MsoBodyText><b><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-left:1.05pt'><b><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'>Defini��o:<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:12.0pt;text-indent:1.0cm;line-height:
12.0pt'><!--[if gte vml 1]><o:wrapblock><v:shape id="_x0000_s1062" type="#_x0000_t75"
  style='position:absolute;left:0;text-align:left;margin-left:147.5pt;
  margin-top:0;width:141.25pt;height:122.65pt;z-index:34'>
  <v:imagedata src="./arquivos/image066.jpg" o:title="atuador - 3"/>
  <w:wrap type="topAndBottom"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0>
  <tr>
   <td width=197 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=188 height=164 src="./arquivos/image067.jpg" v:shapes="_x0000_s1062"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Atuador
el�trico � um conjunto de motor el�trico + controle que tem como principal
objetivo a motoriza��o de v�lvulas, dampers, comportas entre outros
equipamentos similares � dist�ncia. A figura 1.1 demonstra uma v�lvula com um
atuador el�trico acoplado. <o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:0cm;margin-left:21.25pt;margin-bottom:.0001pt;text-align:center'><b><span
style='font-size:11.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Figura 1.1<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:24.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:1.15pt;margin-bottom:.0001pt'><b><u><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'>Funcionamento de um atuador
el�trico e seus sensores<o:p></o:p></span></u></b></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Funcionamento</span></b><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'><o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Um CLP, por exemplo, manda um sinal para o painel
de controle do atuador, o painel de controle pega este sinal e transforma em
movimento para o motor que atuar� na cadeia mec�nica do equipamento. Se o
atuador estiver operando com servo motor esta cadeia mec�nica n�o ser� mais
necess�ria, pois o servomotor conserva o torque mesmo parado.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Sensores.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Um atuador el�trico possui sensores de torque e
posi��o/movimento. O sensor de torque que vai dizer com que for�a que o motor
el�trico est� atuando e o de posi��o/movimento a onde que o equipamento parou
ou onde ele est� quando em movimento.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A figura 5.1 mostrar� a localiza��o destes
sensores, do motor e da cadeia mec�nica de um atuador el�trico.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:24.0pt;margin-right:0cm;margin-bottom:
12.0pt;margin-left:1.15pt'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Op��es de controle:<o:p></o:p></span></u></p>

<p class=MsoBodyText style='margin-left:1.05pt'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:37.15pt;text-indent:-18.0pt;mso-list:
l12 level1 lfo17;tab-stops:list 37.15pt'><![if !supportLists]><span
style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'>Standard.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:6.0pt;text-indent:1.0cm'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Compostos
basicamente pelo conjunto mec�nico, motor e sensores. Toda a parte de controle
� realizado externamente atrav�s de CLP, por exemplo.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Neste tipo de controle o equipamento � utilizado
com atua��es limitadas de a��o, ou seja, o equipamento n�o � controlado por
multi voltas na cadeia mec�nica, mas sim por n�mero de voltas limitadas. A
figura 2.1.1 mostra uma planta do controle Standard.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:49.6pt;text-align:center'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="_x0000_s1064" type="#_x0000_t75" style='position:absolute;left:0;
  text-align:left;margin-left:88.5pt;margin-top:0;width:279pt;height:81.65pt;
  z-index:36'>
  <v:imagedata src="./arquivos/image068.jpg" o:title="atuador - 4"/>
  <w:wrap type="topAndBottom"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0>
  <tr>
   <td width=118 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=372 height=109 src="./arquivos/image069.jpg" v:shapes="_x0000_s1064"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span style='font-family:"Times New Roman";mso-bidi-font-family:Arial'><b>Figura
2.1.1<o:p></o:p></b></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:37.15pt;text-indent:-18.0pt;mso-list:l12 level1 lfo17;
tab-stops:list 37.15pt'><![if !supportLists]><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><![endif]><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Integral.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="_x0000_s1065" type="#_x0000_t75" style='position:absolute;left:0;
  text-align:left;margin-left:81pt;margin-top:0;width:295.2pt;height:83.5pt;
  z-index:37'>
  <v:imagedata src="./arquivos/image070.jpg" o:title="atuador - 5"/>
  <w:wrap type="topAndBottom"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0>
  <tr>
   <td width=108 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=394 height=111 src="./arquivos/image070.jpg" v:shapes="_x0000_s1065"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>A �nica
diferen�a, em rela��o ao Standard � que a parte de controle e comando est�
acoplada ao equipamento. A figura 2.2.1. demonstra a planta de um controle
integral.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<br style='mso-ignore:vglayout' clear=ALL>

<p class=MsoBodyText align=center style='margin-left:49.65pt;text-align:center'><b><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Figura 2.2.1<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:37.15pt;text-indent:-18.0pt;mso-list:l12 level1 lfo17;
tab-stops:list 37.15pt'><![if !supportLists]><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><![endif]><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Modulante.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A �nica diferen�a em rela��o ao Standard e o
Integral e que o equipamento pode ser modulado sem n�mero limitado de atua��o,
ou seja, pode ser controlado para atuar de 0 � 100% atrav�s de sinal anal�gico
que na figura 2.3.1. mostra como sendo de 4 � 20 mA.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:49.65pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="_x0000_s1066" type="#_x0000_t75" style='position:absolute;left:0;
  text-align:left;margin-left:81pt;margin-top:0;width:309.6pt;height:83.5pt;
  z-index:38'>
  <v:imagedata src="./arquivos/image071.jpg" o:title="atuador - 7"/>
  <w:wrap type="topAndBottom"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=108 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=413 height=112 src="./arquivos/image071.jpg" v:shapes="_x0000_s1066"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span style='font-family:"Times New Roman";mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<br style='mso-ignore:vglayout' clear=ALL>

<p class=MsoBodyText align=center style='margin-left:49.65pt;text-align:center'><b><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Figura 2.3.1<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:37.15pt;text-indent:-18.0pt;mso-list:l12 level1 lfo17;
tab-stops:list 37.15pt'><![if !supportLists]><span style='font-family:Symbol'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><![endif]><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Inteligente.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Utilizado para controle de v�rios equipamentos ao
mesmo tempo, interligados a redes de comunica��o e uma esta��o mestra como
demonstrado na figura 2.4.1.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:35.45pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="_x0000_s1067" type="#_x0000_t75" style='position:absolute;left:0;
  text-align:left;margin-left:81pt;margin-top:0;width:316.8pt;height:146.9pt;
  z-index:39'>
  <v:imagedata src="./arquivos/image072.jpg" o:title="atuador - 8"/>
  <w:wrap type="topAndBottom"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=108 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=422 height=196 src="./arquivos/image072.jpg" v:shapes="_x0000_s1067"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span style='font-family:"Times New Roman";mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<br style='mso-ignore:vglayout' clear=ALL>

<p class=MsoBodyText align=center style='margin-left:49.65pt;text-align:center'><b><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Figura 2.4.1<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:24.0pt;margin-right:0cm;margin-bottom:
12.0pt;margin-left:1.15pt;tab-stops:14.2pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Sistemas de controle<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-left:42.55pt;text-indent:-17.85pt;
line-height:150%;mso-list:l10 level1 lfo16;tab-stops:list 19.05pt left 42.55pt'><![if !supportLists]><span
style='font-family:"Times New Roman"'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'>Redes de comunica��o abertas e normalizadas;<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.55pt;text-indent:-17.85pt;
line-height:150%;mso-list:l10 level1 lfo16;tab-stops:list 19.05pt left 42.55pt'><![if !supportLists]><span
style='font-family:"Times New Roman"'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'>Protocolos de comunica��o;<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.55pt;text-indent:-17.85pt;
line-height:150%;mso-list:l10 level1 lfo16;tab-stops:list 19.05pt left 42.55pt'><![if !supportLists]><span
style='font-family:"Times New Roman"'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'>Interoperabilidade com equipamento de diversos fabricantes.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:49.65pt;text-indent:-1.0cm;tab-stops:
49.65pt'><span style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>OBS:<span
style='mso-tab-count:1'> </span>Estes sistemas de controles ser�o melhor
explicados a seguir<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:49.65pt;text-indent:-1.0cm;tab-stops:
49.65pt'><span style='font-family:"Times New Roman";mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:21.3pt;tab-stops:21.3pt'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>A figura 3.1
demonstra uma planta de um sistema de controle.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:21.3pt;tab-stops:21.3pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="_x0000_s1068" type="#_x0000_t75" style='position:absolute;left:0;
  text-align:left;margin-left:90pt;margin-top:0;width:4in;height:215.65pt;
  z-index:40'>
  <v:imagedata src="./arquivos/image073.jpg" o:title="atuador - 9"/>
  <w:wrap type="topAndBottom"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0 align=left>
  <tr>
   <td width=120 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=384 height=288 src="./arquivos/image074.jpg" v:shapes="_x0000_s1068"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span style='font-family:"Times New Roman";mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<br style='mso-ignore:vglayout' clear=ALL>

<p class=MsoBodyText align=center style='margin-left:49.65pt;text-align:center'><b><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Figura 3.1<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-left:1.05pt'><b><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-left:1.05pt'><b><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-left:1.05pt'><b><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-left:1.05pt'><b><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-left:1.05pt'><b><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-left:1.05pt'><b><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-left:1.05pt'><b><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-left:1.05pt'><b><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'>Componentes de um atuador e suas
fun��es:<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-left:18.0pt'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Vamos utilizar a figura 5.1 para demonstrar as
principais partes de um atuador: <o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:21.3pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:42.55pt;text-align:center;
text-indent:-21.25pt;tab-stops:42.55pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="_x0000_s1063" type="#_x0000_t75" style='position:absolute;left:0;
  text-align:left;margin-left:18pt;margin-top:0;width:378pt;height:267.35pt;
  z-index:35'>
  <v:imagedata src="./arquivos/image075.jpg" o:title="atuador - 10"/>
  <w:wrap type="topAndBottom"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0>
  <tr>
   <td width=24 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=504 height=356 src="./arquivos/image076.jpg" v:shapes="_x0000_s1063"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<b><span style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Figura
5.1<o:p></o:p></span></b></p>

<p class=MsoBodyText align=center style='margin-left:42.55pt;text-align:center;
text-indent:-21.25pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<br style='mso-ignore:vglayout' clear=ALL>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:-4.0cm 42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>1-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>��� </span>Motor
el�trico: principal componente do atuador, pois � ele que vai atuar na cadeia
mec�nica.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>2-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>��� </span>Cadeia
Mec�nica: transforma a energia el�trica em mec�nica.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>3-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>��� </span>Opera��o
Manual: serve para manipular manualmente o equipamento quando h� um problema
com a eletr�nica (uma perda de comunica��o com o equipamento, por exemplo)<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>4-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>��� </span>Acoplamento
de sa�da: seve para a introdu��o de um redutor quando ha necessidade de grandes
torques de trabalho do equipamento.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>5-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>��� </span>Inv�lucro:
carca�a do equipamento para prote��o do mesmo.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>6-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>��� </span>Unidade de
controle.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>7-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>��� </span>Placa de
comunica��o: mandar informa��es para centrais de rede, protocolos dentre outros
tipos de comunica��o<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>8-<span style='mso-tab-count:1'>��� </span></span></b><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Indicador
mec�nico de posi��o: serve para visualizar a posi��o em que o equipamento parou
no caso de falta de energia, por exemplo.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>9-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>��� </span>Sensor
eletr�nico de torque: c�lula de carga para medi��o din�mica e real do torque de
sa�da aplicado.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>10-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>� </span>Sensor
eletr�nico de posi��o e movimento: mesma id�ia do sensor de torque.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>11-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>� </span>Terminal de
bornes: sa�da do equipamento para a rede, por exemplo, e entrada de energia
para o funcionamento do equipamento.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:24.0pt;margin-right:0cm;margin-bottom:
12.0pt;margin-left:0cm'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Exemplos de processos onde atuam atuadores el�tricos<o:p></o:p></span></b></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'>Usinas.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:6.0pt'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style="mso-spacerun: yes">�</span>-
Caldeiras;<o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'><span style="mso-spacerun: yes">�</span>- Comportas, dentre outros<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'>Redes hidr�ulicas.<o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'><span style="mso-spacerun: yes">�</span>- Fan coils (ar condicionado);<o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'><span style="mso-spacerun: yes">�</span>- Sistemas de distribui��o de
combust�vel, dentre outros<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:18.0pt'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoTitle align=left style='text-align:left'><span style='font-size:
14.0pt;mso-bidi-font-size:10.0pt'>Variadores de Freq��ncia<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><b style='mso-bidi-font-weight:
normal'><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'>Os variadores de freq��ncia, tamb�m chamados
de inversores ou conversores de freq��ncia, cuja fun��o b�sica � a de
proporcionar a varia��o de velocidades em motores de indu��o trif�sico.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'>Os inversores e conversores representam o
estado da arte em tecnologia para acionamento de motores de indu��o trif�sicas.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'>Utilizando as mais avan�adas t�cnicas de
controle vetorial de fluxo, permitem controlar a velocidade e tamb�m o torque
proporcionando:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><span style="mso-spacerun:
yes">�������������������� </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">�������������������� </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">�� </span>Elevada precis�o de velocidade;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">������������������ </span><span
style="mso-spacerun: yes">��</span></span><span style='font-family:Symbol;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-char-type:symbol;mso-symbol-font-family:Symbol;mso-bidi-font-weight:bold'><span
style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>�</span></span><span
style='mso-bidi-font-weight:bold'><span style="mso-spacerun: yes">�
</span>Elevada precis�o de torque;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">�������������������� </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">� </span>Otimiza��o do torque de partida;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">�������������������� </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">� </span>Excelente din�mica;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">�������������������� </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">� </span>Tempo de resposta extremamente reduzido;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyTextIndent><b style='mso-bidi-font-weight:normal'>Os variadores
s�o capazes de atingir desempenhos equivalentes aos tradicionais acionamentos
com motores de corrente continua. Aliados a vantagens dos motores de indu��o
trif�sicos .<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'>Podem ser aplicados em:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">������������������ </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">������������������� </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">� </span>Sistemas multimotores sincronizados;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">������������������� </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">� </span>Maquinas de papel;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">������������������� </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">� </span>Rebobinadeiras de papel;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">������������������� </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">� </span>Laminadores de a�o;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">������������������� </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">� </span>Guinchos, guindastes e pontes rolantes;<span
style="mso-spacerun: yes">� </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">������������������� </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">� </span>Elevadores e transportadores de carga ;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">������������������� </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">� </span>Splinde em maquinas ferramentas;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">������������������� </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">� </span>Bobinadeiras e desbobinadeiras;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">������������������� </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">� </span>Extrusoras de filme pl�stico;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">������������������� </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">� </span>Compressores;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">������������������� </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">� </span>Bombas;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">������������������� </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">� </span>Ventiladores;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">������� </span><span style="mso-spacerun:
yes">������������</span></span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol;mso-bidi-font-weight:bold'><span
style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>�</span></span><span
style='mso-bidi-font-weight:bold'><span style="mso-spacerun: yes">�
</span>Condensadores;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">������������������� </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">� </span>Outros;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'>Os variadores partem do principio de
controlar a velocidade de um motor, fazendo com que trabalhe exercendo a mesma
fun��o, porem com menos<span style="mso-spacerun: yes">� </span>rota��o. <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'>Esta fun��o proporciona menor consumo de energia,
uma vez que o regime de opera��o varia com a necessidade da maquina.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyTextIndent><b style='mso-bidi-font-weight:normal'>Os variadores
transformam a alimenta��o de entrada com freq��ncia fixa em uma sadia com
tens�o e freq��ncia vari�vel.<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'>A entrada � transformada para continua e
invertida para alternada com tens�o e freq��ncia vari�vel.<o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><!--[if gte vml 1]><v:shape
 id="_x0000_s1070" type="#_x0000_t75" style='position:absolute;left:0;
 text-align:left;margin-left:0;margin-top:-1.85pt;width:285.75pt;height:277.45pt;
 z-index:42;mso-wrap-edited:f;mso-position-horizontal:left' wrapcoords="-52 0 -52 21546 21600 21546 21600 0 -52 0">
 <v:imagedata src="./arquivos/image077.jpg" o:title="Image1"/>
 <w:wrap type="square"/>
</v:shape><![endif]--><![if !vml]><img width=381 height=370
src="./arquivos/image078.jpg" align=left hspace=12 v:shapes="_x0000_s1070"><![endif]><span
style='mso-bidi-font-weight:bold'><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><!--[if gte vml 1]><v:shape
 id="_x0000_s1071" type="#_x0000_t75" style='position:absolute;left:0;
 text-align:left;margin-left:0;margin-top:.25pt;width:210.75pt;height:177.75pt;
 z-index:43;mso-wrap-edited:f;mso-position-horizontal:left' wrapcoords="-77 0 -77 21509 21600 21509 21600 0 -77 0">
 <v:imagedata src="./arquivos/image079.jpg" o:title="Image4"/>
 <w:wrap type="square"/>
</v:shape><![endif]--><![if !vml]><img width=281 height=237
src="./arquivos/image080.jpg" align=left hspace=12 v:shapes="_x0000_s1071"><![endif]><span
style='mso-bidi-font-weight:bold'><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><!--[if gte vml 1]><v:shape
 id="_x0000_s1072" type="#_x0000_t75" style='position:absolute;left:0;
 text-align:left;margin-left:0;margin-top:7.65pt;width:251.25pt;height:211.5pt;
 z-index:44;mso-wrap-edited:f;mso-position-horizontal:left' wrapcoords="-64 0 -64 21523 21600 21523 21600 0 -64 0">
 <v:imagedata src="./arquivos/image081.jpg" o:title="Image5"/>
 <w:wrap type="square"/>
</v:shape><![endif]--><![if !vml]><img width=335 height=282
src="./arquivos/image082.jpg" align=left hspace=12 v:shapes="_x0000_s1072"><![endif]><span
style='mso-bidi-font-weight:bold'><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'>Os transistores funcionam como chaves,
produzindo pulsos com largura variando de forma a alcan�ar uma corrente media
senoidal. Os disparos sincronizados dos transistores produzem tr�s fases de 120
graus, formando um circuito trif�sico.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'>Com a rota��o do motor � diretamente
proporcional a freq��ncia enviada ao mesmo, ao variar a freq��ncia , varia-se �
velocidade do motor. <o:p></o:p></span></p>

<p class=MsoBodyTextIndent><b>A aplica��o dos variadores � a possibilidade de
se trabalhar com velocidades determinadas. Este fato ir� intervir diretamente
no consumo de energia de uma instala��o, uma vez que a energia � requerida de
acordo com a real necessidade, minimizando os desperd�cios. A cada 10% de
redu��o de velocidade do motor, � poss�vel economizar 30% DE ENERGIA. A raz�o �
c�bica : <o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">����������� </span></p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">����������� </span>Se reduzir a rota��o de 60 Hz para 54 Hz, a economia
ser� de 30%.</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun: yes">�
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>O motor
ligado ir� rodar a 100% , porem muitas vezes sem necessidade, onde poderia
rodar a 80% de sua capacidade. Com a aplica��o do variador, � poss�vel baixar
esta velocidade, podendo trabalhar na curva m�nima de consumo de energia,
adequando-se a instala��o �s suas reais necessidades.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>A varia��o de
velocidade permite a implanta��o de controles de vaz�o, temperatura, press�o e
outros, precisos e econ�micos.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-left:42.55pt;text-align:justify;text-indent:
-11.35pt;mso-list:l15 level1 lfo18;tab-stops:list 49.2pt'><![if !supportLists]><span
style='font-family:Wingdings'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]>Vantagens:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">��������������� </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style="mso-spacerun: yes">�� </span>Redu��o da
corrente de partida dos motores;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">��������������� </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style="mso-spacerun: yes">�� </span>Aumento da
durabilidade dos motores e da parte mec�nica;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">��������������� </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style="mso-spacerun: yes">�� </span>Redu��o de
ru�do dos motores;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">��������������� </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style="mso-spacerun: yes">�� </span>Redu��o de
velocidade do consumo de energia el�trica;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">��������������� </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style="mso-spacerun: yes">�� </span>Assegura
durabilidade dos equipamentos e componentes;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">��������������� </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style="mso-spacerun: yes">�� </span>Partida suave
do motor;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">��������������� </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style="mso-spacerun: yes">�� </span>Menor
manuten��o dos equipamentos</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun: yes">�
</span><span style="mso-spacerun: yes">��������������</span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol'><span
style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>�</span></span><span
style="mso-spacerun: yes">�� </span>Diminui o risco dos equipamentos, pois se
ligado diretamente na rede, h� um tranco mec�nico no momento da partida,
causando o desgaste de pe�as e fadiga do motor;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">��������������� </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style="mso-spacerun: yes">�� </span>Prote��o do
motor;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">��������������� </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style="mso-spacerun: yes">�� </span>Prote��o
t�rmica;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">��������������� </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style="mso-spacerun: yes">�� </span>Prote��o para
sobrecarga;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">��������������� </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>�</span></span><span style="mso-spacerun: yes">�� </span>Prote��o para
subcarga;</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>O variador
possui fun��o de desarmar o sistema el�trico, impedindo a sobretens�o de chegar
ao equipamento, e fazer a leitura indicando as falhas do tipo curto-circuito.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>Os variadores
quando devidamente dimensionados, possibilitam transformar redes alimenta��o
monof�sicas em redes trif�sicas.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-left:42.55pt;text-align:justify;text-indent:
-11.35pt;mso-list:l15 level1 lfo18;tab-stops:list 49.2pt'><![if !supportLists]><span
style='font-family:Wingdings'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]>Integra��o com os sistemas :</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>Atualmente no
mercado encontram � se dispon�veis diversos modelos que atendem v�rios n�veis
de pot�ncia.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>A variadores,
desde pot�ncias fracionais at� centenas de Cvs.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-left:42.55pt;text-align:justify;text-indent:
-11.35pt;mso-list:l15 level1 lfo18;tab-stops:list 49.2pt'><![if !supportLists]><span
style='font-family:Wingdings'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]>Tend�ncias : </p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>Guiados pela
crise de energia, os variadores est�o ganhando espa�o em instala��es de menor
porte.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>O mercado de
variadores de freq��ncia, em virtudes de suas vantagens, principalmente, pela
economia de energia e com pre�os reduzidos, acess�veis aos usu�rios que possuem
instala��es de menor porte.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>Em evolu��o
continua os variadores de freq��ncia, tornam-se<span style="mso-spacerun:
yes">� </span>cada vez menores e potentes, com maior efici�ncia e numero maior
de recursos.</p>

<p class=MsoNormal style='text-align:justify'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="_x0000_s1069" type="#_x0000_t75" style='position:absolute;left:0;
  text-align:left;margin-left:-13.05pt;margin-top:0;width:468pt;height:604.8pt;
  z-index:41' o:allowincell="f">
  <v:imagedata src="file://A:\Eduardo\Catalogo%203\Image6.JPG"/>
  <w:wrap type="topAndBottom"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
 relative;z-index:44;left:-17px;top:0px;width:624px;height:806px'><img
 width=624 height=806 src="file://A:\Eduardo\Catalogo%203\Image6.JPG" v:shapes="_x0000_s1069"></span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><b style='mso-bidi-font-weight:
normal'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></b></p>

<br style='mso-ignore:vglayout' clear=ALL>

<p class=MsoBodyText style='margin-left:1.05pt'><b><span style='font-size:14.0pt;
mso-bidi-font-size:10.0pt;font-family:"Times New Roman";mso-bidi-font-family:
Arial;color:black'>Chopper � Conversores CC / CC<o:p></o:p></span></b></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:1.05pt;tab-stops:5.0cm'><b><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Defini��o<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:12.0pt;text-indent:35.4pt'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="_x0000_s1073" type="#_x0000_t75" style='position:absolute;left:0;
  text-align:left;margin-left:132pt;margin-top:0;width:166.75pt;height:138.75pt;
  z-index:45'>
  <v:imagedata src="./arquivos/image083.jpg" o:title="Pro_KS45"/>
  <w:wrap type="topAndBottom"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0>
  <tr>
   <td width=176 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=222 height=185 src="./arquivos/image084.jpg" v:shapes="_x0000_s1073"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Em
muitas aplica��es industriais, � necess�rio converter uma fonte de tens�o CC
(corrente cont�nua) fixa em uma tens�o CC vari�vel. Um Chopper converte
diretamente de CC para CC e � conhecido como um conversor CC-CC. Um Chopper
pode ser considerado o equivalente CC de um transformador CA (corrente
alternada) com uma rela��o de espiras continuamente vari�vel. Da mesma maneira
que um transformador, ele pode ser utilizado para abaixar ou elevar a tens�o de
uma fonte CC. A figura 1.1 e 1.2 demonstram o detalhe de um Chopper.<o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><b><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Figura 1.1<o:p></o:p></span></b></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="_x0000_s1074" type="#_x0000_t75" style='position:absolute;left:0;
  text-align:left;margin-left:88.5pt;margin-top:0;width:241.5pt;height:140.9pt;
  z-index:46'>
  <v:imagedata src="./arquivos/image085.jpg" o:title="conversor_cc"/>
  <w:wrap type="topAndBottom"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0>
  <tr>
   <td width=118 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=322 height=188 src="./arquivos/image086.jpg" v:shapes="_x0000_s1074"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<b><span style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Figura
1.2<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:24.0pt;margin-right:0cm;margin-bottom:
12.0pt;margin-left:1.15pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Aplica��o<o:p></o:p></span></b></p>

<p class=MsoBodyText style='text-indent:21.3pt'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Os Choppers s�o amplamente utilizados para controle
de tra��o de motores em autom�veis el�tricos, trolebus (�nibus el�trico),
guindastes marinhos, empilhadeiras de almoxarifados e transportadores em minas.
Eles fornecem controle de acelera��o suave, alta efici�ncia e reposta din�mica
r�pida. Os Choppers podem ser usados na frenagem regenerativa de m�quinas de
corrente cont�nua (MCC), para devolver energia � fonte de alimenta��o. Os
Choppers s�o usados em reguladores de tens�o CC e tamb�m com um indutor pra
gerar uma fonte de corrente CC, especialmente para os inversores do tipo fonte
corrente.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:24.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:1.15pt;margin-bottom:.0001pt'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></p>

<p class=MsoBodyText style='margin-top:24.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:1.15pt;margin-bottom:.0001pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Vantagem do uso dos Choppers.<o:p></o:p></span></b></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Devolvem energia � fonte de alimenta��o resultando
em <b>economia de energia</b> para sistemas de transportes com paradas
freq�entes.<o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><b><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'>Principio da opera��o de um Chopper.<o:p></o:p></span></b></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-bottom:6.0pt'><u><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'>Abaixadora.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Este princ�pio � utilizado para quando h� a
necessidade de transformar uma tens�o CC em uma tens�o CC baixa.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Elevadora. <o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Este princ�pio � utilizado nos aparelhos de choque
da pol�cia, por exemplo. A tens�o CC de entrada do aparelho � menor do que a de
sa�da.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:1.15pt'><b><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'>Classifica��o dos Choppers.<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-left:1.15pt'><b><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoBodyText style='text-indent:1.0cm'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="_x0000_s1076" type="#_x0000_t75" style='position:absolute;left:0;
  text-align:left;margin-left:70.5pt;margin-top:0;width:306pt;height:225pt;
  z-index:48'>
  <v:imagedata src="./arquivos/image087.jpg" o:title="chopper - 3"/>
  <w:wrap type="topAndBottom"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0>
  <tr>
   <td width=94 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=408 height=300 src="./arquivos/image088.jpg" v:shapes="_x0000_s1076"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<span style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Dependendo
dos sentidos dos fluxos da corrente e da tens�o, os Choppers podem ser
classificados em cinco tipos, como mostrado na figura 5.1.<o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:21.3pt;text-align:center'><b><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Figura 5.1<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Classe A.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A corrente de carga flui �para dentro� da carga.
Ambas, a tens�o e a corrente da carga, s�o positivas, como mostrado na Figura
9.6(a). Este � um Chopper de um quadrante e diz-se que ele opera como um
retificador.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Esta classe pode ser usada quando queremos acelerar
uma m�quina de corrente cont�nua.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:17.85pt'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:17.85pt'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:17.85pt;text-indent:-17.85pt'><u><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'>Classe B. <o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A corrente flui �para fora� da carga. A tens�o da
carga � positiva, mas a corrente � negativa, como mostrado na figura 9.6(b).
Esse tamb�m � um Chopper de um quadrante, mas opera no segundo quadrante, e
diz-se que ele opera como um inversor.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Esta classe pode ser usada quando queremos frear
uma m�quina de corrente cont�nua.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Classe C.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A corrente da carga � tanto positiva quanto
negativa, como mostrado na Figura 9.6(c). A tens�o da carga � sempre positiva.
Este � conhecido como um Chopper de dois quadrantes. Os Choppers classes A e B
podem ser combinados para formar um Chopper classe C.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Esta classe pode ser usada para quando queremos
acelerar ou frear um carro el�trico.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Classe D.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A �nica diferen�a da classe C � que a corrente da
carga � positiva como mostrado na figura 9.6(d).<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Classe E.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A corrente da carga � tanto positiva quanto
negativa, como mostrado na figura 9.6(e).� conhecido como Chopper de quatro
quadrantes. Dois Choppers classe C podem ser combinados para formar um Chopper
de classe E.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A grande vantagem de se utilizar esta classe, � que
se h� uma invers�o de corrente ou de carga ele continua operado normalmente.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:24.0pt;margin-right:0cm;margin-bottom:
12.0pt;margin-left:1.15pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Reguladores chaveados<o:p></o:p></span></b></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Os Choppers CC podem ser utilizados como
reguladores chaveados para converter uma tens�o CC, em geral n�o regulada, em
uma tens�o CC regulada de sa�da.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A tens�o de sa�da � comparada com um valor de
refer�ncia, este erro gerado � amplificado, pois o a corrente de medi��o �
muito baixa, e � aplicada ao Chopper para regular esta tens�o de sa�da.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A figura 6.1 demonstra o diagrama em blocos fechado
de um regulador chaveado.<o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><b><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="_x0000_s1075" type="#_x0000_t75" style='position:absolute;left:0;
  text-align:left;margin-left:102.75pt;margin-top:0;width:223.9pt;height:130.3pt;
  z-index:47'>
  <v:imagedata src="./arquivos/image089.jpg" o:title="chopper - 2"/>
  <w:wrap type="topAndBottom"/>
 </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>
 <table cellpadding=0 cellspacing=0>
  <tr>
   <td width=137 height=0></td>
  </tr>
  <tr>
   <td></td>
   <td><img width=299 height=173 src="./arquivos/image089.jpg" v:shapes="_x0000_s1075"></td>
  </tr>
 </table>
 </span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<b><span style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Figura
6.1<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Regulador Buck.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Este tipo de regulador � utilizado quando se quer
regular uma tens�o da sa�da menor que a de entrada.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Regulador Boost.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Este tipo de regulador � utilizado quando se quer
regular uma tens�o da sa�da maior que a de entrada.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span lang=EN-US style='font-family:"Times New Roman";
mso-bidi-font-family:Arial;mso-ansi-language:EN-US'>Regulador Buck-Boost.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Este tipo de regulador � utilizado quando se quer
regular uma tens�o da sa�da menor ou maior que a de entrada com as mesmas
polaridades de tens�o de sa�da e entrada.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Regulador Cuk.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Este tipo de regulador � utilizado quando se quer
regular uma tens�o da sa�da menor ou maior que a de entrada, mas com as <span
style="mso-spacerun: yes">�</span>polaridades de tens�o de sa�da e entrada
invertidas.<o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoTitle align=left style='text-align:left'><span style='font-size:
14.0pt;mso-bidi-font-size:10.0pt'>Motores Ass�ncronos<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Princ�pio de
opera��o e caracter�stica<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Os motores ass�ncronos ou de indu��o, por serem
robustos e baratos, s�o os motores mais largamente empregados na industria.
Nestes motores, o campo girante roda a velocidade s�ncrona, como nas maquinas
s�ncronas:</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center;mso-layout-grid-align:
none;text-autospace:none'>ns =<span style='font-size:10.0pt;mso-bidi-font-size:
12.0pt'><!--[if gte vml 1]><v:shape id="_x0000_i1026" type="#_x0000_t75"
 style='width:33pt;height:16.2pt' o:ole="" fillcolor="window">
 <v:imagedata src="./arquivos/image090.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=44 height=22
src="./arquivos/image091.gif" v:shapes="_x0000_i1026"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="Equation.3" ShapeID="_x0000_i1026"
  DrawAspect="Content" ObjectID="_1067749874">
 </o:OLEObject>
</xml><![endif]--></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyText style='text-indent:35.45pt'>Teoricamente, para o motor
girando em vazio e sem perdas, o rotor teria tamb�m a velocidade s�ncrona.
Entretanto ao ser aplicado um conjunto externo ao motor, o seu rotor diminuir�
de velocidade na justa propor��o necess�ria para que a corrente induzida pela
diferen�a de rota��o entre o campo girante (s�ncrono) e o rotor, passe a
produzir um conjugado eletromagn�tico igual e oposto ao conjugado externamente
aplicado. O conjugado eletromagn�tico � proporcional ao fluxo produzido pelo
campo girante, e � corrente e fator de pot�ncia do rotor.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>A perda de rota��o do motor (necess�ria para que um
conjugado eletromagn�tico seja produzido), expressa por unidade da velocidade
s�ncrona, chama-se escorregamento:</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center;mso-layout-grid-align:
none;text-autospace:none'>s = ( n<span style='font-family:Romantic'>s</span> -
n )<span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><!--[if gte vml 1]><v:shape
 id="_x0000_i1027" type="#_x0000_t75" style='width:10.2pt;height:10.2pt'
 fillcolor="window">
 <v:imagedata src="./arquivos/image092.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=13 height=14
src="./arquivos/image093.gif" v:shapes="_x0000_i1027"><![endif]></span> n<span
style='font-family:Romantic'>s</span> = ( <span style='font-family:Symbol'>w</span>s
- <span style='font-family:Symbol'>w</span> ) <span style='font-size:10.0pt;
mso-bidi-font-size:12.0pt'><!--[if gte vml 1]><v:shape id="_x0000_i1028"
 type="#_x0000_t75" style='width:10.2pt;height:10.2pt' o:ole="" fillcolor="window">
 <v:imagedata src="./arquivos/image092.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=13 height=14
src="./arquivos/image094.gif" v:shapes="_x0000_i1028"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="Equation.3" ShapeID="_x0000_i1028"
  DrawAspect="Content" ObjectID="_1067749875">
 </o:OLEObject>
</xml><![endif]--></span><span style="mso-spacerun: yes">�</span><span
style='font-family:Symbol'>w</span>s</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>s = escorregamento (perda de rota��o do rotor)</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>n = velocidade do rotor</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='font-family:Symbol'>w</span> = velocidade
angular do rotor</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>O conjugado magn�tico pode ser expresso pela rela��o:</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center;mso-layout-grid-align:
none;text-autospace:none'>C = Pg <span style='font-size:10.0pt;mso-bidi-font-size:
12.0pt'><!--[if gte vml 1]><v:shape id="_x0000_i1029" type="#_x0000_t75"
 style='width:10.2pt;height:10.2pt' o:ole="" fillcolor="window">
 <v:imagedata src="./arquivos/image092.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=13 height=14
src="./arquivos/image095.gif" v:shapes="_x0000_i1029"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="Equation.3" ShapeID="_x0000_i1029"
  DrawAspect="Content" ObjectID="_1067749877">
 </o:OLEObject>
</xml><![endif]--></span><span style="mso-spacerun: yes">�</span><span
style='font-family:Symbol'>w</span>s</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>onde:</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>Pg � a pot�ncia do campo girante que gira a uma velocidade
angular s�ncrona <span style='font-family:Symbol'>w</span>s. Por outro lado, se
P � a pot�ncia mec�nica fornecida atrav�s do eixo, que gira a uma velocidade
angular <span style='font-family:Symbol'>w</span> radianos por segundo.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center;mso-layout-grid-align:
none;text-autospace:none'>C = P <span style='font-size:10.0pt;mso-bidi-font-size:
12.0pt'><!--[if gte vml 1]><v:shape id="_x0000_i1030" type="#_x0000_t75"
 style='width:10.2pt;height:10.2pt' o:ole="">
 <v:imagedata src="./arquivos/image092.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=14 height=13
src="./arquivos/image096.gif" v:shapes="_x0000_i1030"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="Equation.3" ShapeID="_x0000_i1030"
  DrawAspect="Content" ObjectID="_1067749878">
 </o:OLEObject>
</xml><![endif]--></span><span style="mso-spacerun: yes">�</span><span
style='font-family:Symbol'>w</span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>Portanto:</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center;text-indent:35.45pt;
mso-layout-grid-align:none;text-autospace:none'><span lang=EN-US
style='mso-ansi-language:EN-US'>P = Pg </span><span style='font-size:10.0pt;
mso-bidi-font-size:12.0pt'><!--[if gte vml 1]><v:shape id="_x0000_i1031"
 type="#_x0000_t75" style='width:9pt;height:10.2pt' o:ole="">
 <v:imagedata src="./arquivos/image097.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=12 height=14
src="./arquivos/image098.gif" v:shapes="_x0000_i1031"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="Equation.3" ShapeID="_x0000_i1031"
  DrawAspect="Content" ObjectID="_1067749879">
 </o:OLEObject>
</xml><![endif]--></span><span lang=EN-US style='mso-ansi-language:EN-US'><span
style="mso-spacerun: yes">�</span>( </span><span style='font-family:Symbol'>w</span><span
style='mso-ansi-language:EN-US'> </span><span style='font-size:10.0pt;
mso-bidi-font-size:12.0pt'><!--[if gte vml 1]><v:shape id="_x0000_i1032"
 type="#_x0000_t75" style='width:10.2pt;height:10.2pt' o:ole="">
 <v:imagedata src="./arquivos/image092.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=13 height=14
src="./arquivos/image099.gif" v:shapes="_x0000_i1032"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="Equation.3" ShapeID="_x0000_i1032"
  DrawAspect="Content" ObjectID="_1067749880">
 </o:OLEObject>
</xml><![endif]--></span><span style='mso-ansi-language:EN-US'><span
style="mso-spacerun: yes">�</span></span><span style='font-family:Symbol'>w</span><span
lang=EN-US style='mso-ansi-language:EN-US'>s ) = ( 1 - s ) </span><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><!--[if gte vml 1]><v:shape
 id="_x0000_i1033" type="#_x0000_t75" style='width:9pt;height:10.2pt' o:ole="">
 <v:imagedata src="./arquivos/image097.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=12 height=14
src="./arquivos/image100.gif" v:shapes="_x0000_i1033"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="Equation.3" ShapeID="_x0000_i1033"
  DrawAspect="Content" ObjectID="_1067749881">
 </o:OLEObject>
</xml><![endif]--></span><span lang=EN-US style='mso-ansi-language:EN-US'><span
style="mso-spacerun: yes">�</span>Pg<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'><span lang=EN-US style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>A pot�ncia cedida pelo eixo � igual � pot�ncia
dispon�vel no entreferro da maquina Pg (potencia do campo girante), menos a
parcela correspondente �s perdas no rotor s <span style='font-size:10.0pt;
mso-bidi-font-size:12.0pt'><!--[if gte vml 1]><v:shape id="_x0000_i1034"
 type="#_x0000_t75" style='width:9pt;height:10.2pt' o:ole="">
 <v:imagedata src="./arquivos/image097.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=12 height=14
src="./arquivos/image101.gif" v:shapes="_x0000_i1034"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="Equation.3" ShapeID="_x0000_i1034"
  DrawAspect="Content" ObjectID="_1067749882">
 </o:OLEObject>
</xml><![endif]--></span><span style="mso-spacerun: yes">�</span>Pg.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Um dos problemas das maquinas s�ncronas � que ela
toma sua corrente de magnetiza��o da mesma fonte que lhe fornece a pot�ncia
el�trica a ser transformada em mec�nica.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Desta forma ao analisar o funcionamento do motor, �
preciso trabalhar sempre com corrente absolvida da linha decomposta em duas
componentes:</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>A parcela corresponde � magnetiza��o do n�cleo da
m�quina (respons�vel da magnetiza��o do fluxo necess�rio aa convers�o
eletromec�nica da energia), e a parcela respons�vel pelo aprimoramento da for�a
motriz (a corrente que interage com o fluxo para produzir o conjugado).</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>No caso de n�cleos de ferromagn�ticos reais, a
permeabilidade finita vai exigir uma certa corrente de magnetiza��o I<span
style='font-family:Symbol'>m</span>, assim como as perdas no ferro
(transformadas em calor no processo) exigiram um componente ativa de corrente
Ip.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Vantagens dos
motores ass�ncronos <o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Pelas suas caracter�sticas, pre�o, robustez, o motor
de indu��o � preferido para a maior parte dos acionamentos.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Entretanto, h� de se destacar que o motor de indu��o
ideal est� na faixa de velocidade entre 900 a 1800rpm, e com pot�ncias
inferiores a alguns milhares de KW. Associado aos modernos conversores
eletr�nicos de tens�o e freq��ncia vari�veis, os motores de indu��o tendem a
assumir um papel quase que exclusivo nos acionamentos el�tricos.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Caracter�sticas de
acionamento<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Acionamento el�trico � um sistema capaz de converter
energia el�trica em mec�nica, produzindo trabalho e mantendo controle sobre tal
processo de convers�o. Um sistema de acionamento compreende o motor el�trico e
seu equipamento de comando e/ou controle, os �rg�os de transmiss�o (mec�nicos)
de energia do motor a maquina acionada e a pr�pria m�quina acionada, que
realiza a fun��o desejada.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Caracter�stica
conjugado versus velocidade de cargas mec�nicas <o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>Para um sistema dotado de movimento de rota��o</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center;mso-layout-grid-align:
none;text-autospace:none'>P = C <span style='font-size:10.0pt;mso-bidi-font-size:
12.0pt'><!--[if gte vml 1]><v:shape id="_x0000_i1035" type="#_x0000_t75"
 style='width:9pt;height:10.2pt' o:ole="">
 <v:imagedata src="./arquivos/image097.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=12 height=14
src="./arquivos/image102.gif" v:shapes="_x0000_i1035"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="Equation.3" ShapeID="_x0000_i1035"
  DrawAspect="Content" ObjectID="_1067749883">
 </o:OLEObject>
</xml><![endif]--></span><span style="mso-spacerun: yes">�</span><span
style='font-family:Symbol'>w</span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>onde:</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>P � a pot�ncia desenvolvida</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>C � o conjugado desenvolvido</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='font-family:Symbol'>w</span> � a velocidade
angular do movimento</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>( no sistema MKSI, P em watts, C em N<span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><!--[if gte vml 1]><v:shape
 id="_x0000_i1036" type="#_x0000_t75" style='width:9pt;height:10.2pt' o:ole=""
 fillcolor="window">
 <v:imagedata src="./arquivos/image097.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=12 height=14
src="./arquivos/image103.gif" v:shapes="_x0000_i1036"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="Equation.3" ShapeID="_x0000_i1036"
  DrawAspect="Content" ObjectID="_1067749884">
 </o:OLEObject>
</xml><![endif]--></span> m e <span style='font-family:Symbol'>w</span> em
rad/s ).</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Dizer que uma carga mec�nica requer uma determinada
pot�ncia P � equivalente a afirmar que tal carga necessita de um dado conjugado
C a uma dada velocidade de rota��o.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Matematicamente existem infinitas combina��es de C e <span
style='font-family:Symbol'>w</span> de modo a resultar no mesmo valor de P.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Fisicamente, contudo, uma especifica carga mec�nica
associada a um �nico par ( C, <span style='font-family:Symbol'>w</span> ) a
carga da pot�ncia P.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Em fun��o de suas caracter�sticas de conjugado versus
velocidade, as cargas mec�nicas podem ser divididos em seis grandes grupos:</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;tab-stops:36.0pt;mso-layout-grid-align:none;text-autospace:none'>1-<span
style='mso-tab-count:1'>�� </span>Conjugado constante, praticamente
independente da rota��o. Exemplos : gruas, guinchos, guindastes,
transportadores de correias sob carga constante.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-layout-grid-align:none;text-autospace:none'>2-<span
style='mso-tab-count:1'>�� </span>Conjugado que varia linearmente com a
rota��o. Exemplo : moinhos de rolos, bombas de pist�o, plainas e serras para
madeira.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-layout-grid-align:none;text-autospace:none'>3-<span
style='mso-tab-count:1'>�� </span>Conjugado que varia com o quadro de rota��o
(varia��o parab�lica). Exemplos : ventiladores, misturadores, centrifugas,
bombas centrifugas, exaustores, compressores.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-layout-grid-align:none;text-autospace:none'>4-<span
style='mso-tab-count:1'>�� </span>Conjugado que varia inversamente com a
rota��o, resultando em pot�ncia constante. Exemplos : maquinas operatrizes como
fresadoras e mandriladoras.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-layout-grid-align:none;text-autospace:none'>5-<span
style='mso-tab-count:1'>�� </span>Conjugado que varia de forma n�o uniforme com
a rota��o, n�o suficientemente acuradas aproxima��es por fun��es matem�ticas.
Exemplos : um forno rotativo de grande porte.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-layout-grid-align:none;text-autospace:none'>6-<span
style='mso-tab-count:1'>�� </span>Conjugado que n�o solicitam conjugados (
volantes ). O prop�sito do volante � liberar a maior parte da energia cin�tica
nele armazenada para suprir picos de demanda de energia por parte da maquina
acionada. O motor acionado deve deixar de atuar, isto �, transferir energia, em
condi��es de altos conjugados, porem tendo a fun��o de restaurar ao volante sua
velocidade original, o que � feito entre os picos de cargas. As prensas de
perfura��o e ou de estampagem profunda n�o hidr�ulica, constituem exemplos de
cargas que utilizam volantes dentro desse principio. </p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Caracter�stica
conjugado versus motores el�tricos<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent>� a curva que mostra a depend�ncia entre o conjugado
desenvolvido por este motor el�trico e a sua rota��o; em geral o comportamento
desta curva difere do daquela das cargas, pois, ao contrario das cargas
adicionais, os motores el�tricos tendem a apresentar um decr�scimo de conjugado
para velocidades crescentes.</p>

<p class=MsoBodyTextIndent>Defini-se regula��o de velocidade de um motor
el�trico, solicitado a fornecer a carga mec�nica um valor dado de pot�ncia, �
rela��o:</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal align=center style='text-align:center;mso-layout-grid-align:
none;text-autospace:none'>R = (n<span style='font-family:Symbol'>o</span> - n) <span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><!--[if gte vml 1]><v:shape
 id="_x0000_i1037" type="#_x0000_t75" style='width:10.2pt;height:10.2pt' o:ole=""
 fillcolor="window">
 <v:imagedata src="./arquivos/image092.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=14 height=14
src="./arquivos/image104.gif" v:shapes="_x0000_i1037"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="Equation.3" ShapeID="_x0000_i1037"
  DrawAspect="Content" ObjectID="_1067749885">
 </o:OLEObject>
</xml><![endif]--></span><span style="mso-spacerun: yes">�</span>n</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>onde :</p>

<p class=MsoNormal align=center style='text-align:center;mso-layout-grid-align:
none;text-autospace:none'>n<span style='font-family:Symbol'>o</span> = W<span
style='font-family:Symbol'>o</span><span style="mso-spacerun: yes">� </span><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><!--[if gte vml 1]><v:shape
 id="_x0000_i1038" type="#_x0000_t75" style='width:10.2pt;height:10.2pt' o:ole=""
 fillcolor="window">
 <v:imagedata src="./arquivos/image092.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=14 height=14
src="./arquivos/image105.gif" v:shapes="_x0000_i1038"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="Equation.3" ShapeID="_x0000_i1038"
  DrawAspect="Content" ObjectID="_1067749886">
 </o:OLEObject>
</xml><![endif]--></span><span style="mso-spacerun: yes">�</span>2<span
style='font-family:Symbol'>p</span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>rota��o do motor el�trico em vazio</p>

<p class=MsoNormal align=center style='text-align:center;mso-layout-grid-align:
none;text-autospace:none'>n = W <span style='font-size:10.0pt;mso-bidi-font-size:
12.0pt'><!--[if gte vml 1]><v:shape id="_x0000_i1039" type="#_x0000_t75"
 style='width:10.2pt;height:10.2pt' o:ole="" fillcolor="window">
 <v:imagedata src="./arquivos/image092.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=14 height=13
src="./arquivos/image106.gif" v:shapes="_x0000_i1039"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="Equation.3" ShapeID="_x0000_i1039"
  DrawAspect="Content" ObjectID="_1067749887">
 </o:OLEObject>
</xml><![endif]--></span><span style="mso-spacerun: yes">�</span>2<span
style='font-family:Symbol'>p</span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>velocidade do motor acionando a carga</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>A regula��o da velocidade � um par�metro para
caracteriza��o dos diferentes tipos de motores el�tricos, em fun��o dos valores
(pela regula��o de velocidade) para cada velocidade.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Motores ass�ncronos
<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Mais freq�entemente denominados de indu��o, s�o
motores cujo conjugado dispon�veis diminui na medida que a velocidade aumenta,
a partir de uma certa velocidade.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Motores de indu��o com rotor enrolado, o formato da
curva conjugado versus velocidade pode ser alterado pela inser��o da
resist�ncia externa no enrolamento ret�rico; � medida que a resist�ncia
inserida cresce, a rota��o onde se verifica o conjugado Maximo torna-se menor
sem que esse se altere significativamente, at� que o conjugado Maximo passe a
ocorrer na condi��o de partida(rota��o nula), a partir de onde, pela inser��o
de maior resist�ncia no rotor, passe a ocorrer um decr�scimo no conjugado de
partida.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>M�todos de partida
de motores<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Para diferenciar v�rios m�todos de partida de motores
de indu��o, aquele em que as tens�es aplicadas aos terminais do motor � da
rede, mas que o motor enxerga uma tens�o menor(estrela-triangulo e eenrolamento
dividido), e outro grupo em que a tens�o aplicada aos terminais � efetivamente
menor que a rede (autotransformador, resistor prim�rio, reator primario).</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>A partida a plena tens�o e a utiliza��o de
acoplamentos hidr�ulicos (quando a tens�o n�o � reduzida) constituem um grupo a
parte, enquanto motores de varias velocidades e de an�is constituem outro
grupo.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Em qualquer m�todo de partida em que ocorra a
utiliza��o de redu��o de tens�o tamb�m ocorrer� uma redu��o de tens�o do
conjugado do motor, aproximadamente: com o quadrado da varia��o de tens�o<span
style="mso-spacerun: yes">� </span>para o conjugado Maximo; e a potencia 2.2 da
varia��o de tens�o para o conjugado na partida.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Partida com chave
estrela- triangulo<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>� o m�todo mais conhecido e dos mais simples para
partida de motores de indu��o. Para que o m�todo possa ser aplicado, o motor
deve funcionar em liga��o estrela e possuir seis terminais acess�veis de forma
a poder ser ligado em estrela na partida, de tal forma que cada fase do motor
enxergue uma tens�o que � 1/<span style='font-size:10.0pt;mso-bidi-font-size:
12.0pt'><!--[if gte vml 1]><v:shape id="_x0000_i1040" type="#_x0000_t75"
 style='width:9pt;height:10.2pt' o:ole="">
 <v:imagedata src="./arquivos/image107.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=12 height=14
src="./arquivos/image108.gif" v:shapes="_x0000_i1040"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="Equation.3" ShapeID="_x0000_i1040"
  DrawAspect="Content" ObjectID="_1067749888">
 </o:OLEObject>
</xml><![endif]--></span>3 da tens�o nominal do motor. Dessa forma, a corrente
absolvida da linha fica reduzida 1/3 daquela em plena tens�o; por outro lado, o
conjugado ficam reduzidos tamb�m a 1/3 daquele a plena tens�o.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>4. Aplica��o de
motores em acionamentos de velocidade vari�vel<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Em muitas aplica��es os motores s�o operados
diretamente da rede, de acordo com sua proporia caracter�stica de conjugado �
velocidade e em condi��es de opera��o determinadas pela carga mec�nica.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Os motores s�o providos de um equipamento de controle
com o qual suas caracter�sticas podem ser ajustadas e suas condi��es de
opera��o variadas, de modo a atender particulares requisitos de carga mec�nica.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Em determinadas condi��es n�o h� necessidade de uma
varia��o continua da velocidade, sendo suficiente uma varia��o discreta. Nestes
casos a utiliza��o de motores de indu��o de m�ltiplas polaridades, apresentam
vantagens econ�micas diante da inexist�ncia de equipamentos de controle
elaborado, bastando na maioria dos casos uma chave triangulo-estrela (liga��o
Dahlander).</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Cada tipo de motor pode ser controlado de modo a
prover um ajustamento continuo de velocidade e conjugado com rela��o � carga
mec�nica.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>O equipamento de controle consiste de rel�s,
reatores, componentes magn�ticos e componentes de estado s�lidos, tais como
diodos, tiristores e transistores.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>A combina��o do motor e do equipamento de controle �
chamada de acionamento.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>O custo de um sistema de acionamento depende portanto
do tipo de motor utilizado e do equipamento para se obter o controle.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Motores de corrente alternadas, embora mais baratos e
robustos que os de CC, possuem um equipamento de controle mais caro.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Muitas aplica��es restringem o uso de maquinas CC
devido � umidade e temperatura do ambiente; impedimentos do uso de comutadores
e escovas devido � presen�a de ambientes agressivos ou perigosos; ou as
limita��es de velocidade perif�rica do comutador.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Num sistema de acionamento com v�rios motores, os
pre�os dos motores CA, podem tornar mais competitivo em rela��o aos de motores
CC. S�o tamb�m de dimens�es menores e manuten��o simples.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyText2>Princ�pios de controle de continuo de velocidades para
motores de corrente alternadas</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent>S�o m�todos de varia��o continua de velocidade em
fun��o dos diferentes tipos de motores de corrente alternada.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyText2>Freq��ncia ajust�vel </p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>� uma forma de se variar � velocidade s�ncronas
desses motores s�ncronos e ass�ncronos e � atrav�s da alimenta��o por uma fonte
de freq��ncia vari�vel.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Este tipo de controle � eficiente e, com motores
s�ncronos podem ser muitos precisos.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Controle de
freq��ncia com fluxo constate<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent>Se o fluxo for mantido constante, o conjugado do
motor tamb�m o ser�. Isto � conseguido variando concomitantemente U e f.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Tens�o ajust�vel<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>A freq��ncia permanece constante, e a varia��o ou
velocidade � obtida pela varia��o do escorregamento.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Reostato r�torico<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Para um motor de indu��o de rotor enrolado (rotor de
an�is) � poss�vel controlar a velocidade pela mudan�a da curva caracter�stica
conjugado versus rota��o, atrav�s de inser��o de resist�ncias no circuito do
rotor.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Recupera��o de
energia<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>As perdas do rotor de um motor de an�is podem ser
recuperadas atrav�s de um sistema de controle tristorizado, que consiste
basicamente em um retificador e um inversor.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>A tens�o r�torica, ao inv�s de ser jogada sobre a
resist�ncia, e retificada por obten��o de uma tens�o continua, cuja grandeza �
diretamente proporcional ao escorregamento s; um inversor tristorizado ligado
entre o barramento de CC e os terminais do estator devolve a potencia rot�rica
� fonte de alimenta��o. O inversor opera com uma freq��ncia fixa de sa�da,
igual � linha (60Hz) e a partir de qualquer n�vel de tens�o continua, desde
aproximadamente zero � plena velocidade do motor, ao Maximo valor quanto o
motor est� parado.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>O sistema � relativamente simples porque o sinal de
disparo do tiristor � formado � formado a partir da linha de alimenta��o, sem a
complicada l�gica de circuitos e reguladores de sistemas de freq��ncia
vari�vel.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style="mso-spacerun: yes">�</span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<h6><span style='font-size:14.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman"'>Protocolos de Comunica��o<o:p></o:p></span></h6>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-tab-count:1'>����������� </span>A
finalidade de um protocolo de comunica��o � o de determinar a maneira em que os
dados ser�o tratados para serem enviados de um lado para outro ou de um
servidor para um cliente.</p>

<p class=MsoNormal style='text-align:justify'><!--[if gte vml 1]><v:shape id="_x0000_s1077"
 type="#_x0000_t75" style='position:absolute;left:0;text-align:left;
 margin-left:128.65pt;margin-top:12.5pt;width:162pt;height:107.85pt;z-index:49'
 filled="t" fillcolor="#cff">
 <v:imagedata src="./arquivos/image109.png" o:title="comunicacao"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:49;left:0px;margin-left:172px;margin-top:17px;width:216px;
height:144px'><img width=216 height=144 src="./arquivos/image110.jpg"
v:shapes="_x0000_s1077"></span><![endif]><span style='mso-tab-count:1'>����������� </span></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h4><span style='font-size:9.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>Figura
1: Exemplo da aplica��o de um protocolo<o:p></o:p></span></h4>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h3 style='mso-pagination:none;mso-layout-grid-align:none;punctuation-wrap:
simple;text-autospace:none;vertical-align:baseline'><span style='font-family:
"Times New Roman"'><span style='mso-tab-count:1'>����������� </span>Dos
servi�os que um protocolo de comunica��o deve fazer, encontramos:<o:p></o:p></span></h3>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l30 level1 lfo19;
     tab-stops:list 36.0pt'><b>Endere�amento: </b>saber qual o endere�o ou IP
     por exemplo do destinat�rio dos dados<b><o:p></o:p></b></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l30 level1 lfo19;
     tab-stops:list 36.0pt'><b>Numera��o e seq��ncia: </b>como alguns
     protocolos trabalham em pacotes, ou seja, s�o enviados diversos peda�os
     com os dados ao inv�s de mandar todos os dados de uma vez, � necess�rio
     saber informa��es sobre a numera��o e seq��ncia de cada pacote enviado<b><o:p></o:p></b></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l30 level1 lfo19;
     tab-stops:list 36.0pt'><b>Estabelecimento da conex�o:</b> o protocolo deve
     saber se a conex�o com o destinat�rio est� ativa ou se ocorrer� mais tarde<b><o:p></o:p></b></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l30 level1 lfo19;
     tab-stops:list 36.0pt'><b>Confirma��o de recebimento: </b>cada pacote
     recebido, deve confirmar o recebimento ao remente atrav�s do protocolo<b><o:p></o:p></b></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l30 level1 lfo19;
     tab-stops:list 36.0pt'><b>Controle de erro:</b> caso exista algum erro
     durante a transmiss�o dos dados, � necess�rio o protocolo saber como
     dever� proceder para corrig�-los<b><o:p></o:p></b></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l30 level1 lfo19;
     tab-stops:list 36.0pt'><b>Retransmiss�o: </b>no caso de existir erros,
     como dever� acontecer a retransmiss�o dos dados<b><o:p></o:p></b></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l30 level1 lfo19;
     tab-stops:list 36.0pt'><b>Convers�o de c�digo: </b>o protocolo dever�
     saber como converter os dados, por exemplo, bit 1 e bit 0, para um
     determinado cabo el�trico, passa ou n�o passa energia<b><o:p></o:p></b></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l30 level1 lfo19;
     tab-stops:list 36.0pt'><b>Controle de fluxo: </b>o protocolo dever� saber
     de que maneira ocorrer� a conex�o, s� recebendo, s� enviando ou ambos, no
     caso de dados<span style='mso-fareast-font-family:"Arial Unicode MS";
     display:none;mso-hide:all'><o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent><span style='font-family:"Times New Roman"'>Abaixo
est�o relacionados os princiapis �rg�os respons�veis pela cria��o de novos
protocolos atualmente:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l0 level1 lfo20;
     tab-stops:list 36.0pt'><b><span lang=EN-US style='mso-ansi-language:EN-US'>ISO
     </span></b><span lang=EN-US style='mso-ansi-language:EN-US'>-
     International Organization for Standardization<span style='display:none;
     mso-hide:all'><o:p></o:p></span></span></li>
</ul>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l0 level1 lfo20;
     tab-stops:list 36.0pt'><b><span lang=EN-US style='mso-ansi-language:EN-US'>IEC
     </span></b><span lang=EN-US style='mso-ansi-language:EN-US'>-
     International Electrotechnical Commission<b><span style='display:none;
     mso-hide:all'><o:p></o:p></span></b></span></li>
</ul>

<p class=MsoNormal style='text-align:justify'><b><span lang=EN-US
style='display:none;mso-hide:all;mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><b><span style='display:none;
mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l0 level1 lfo20;
     tab-stops:list 36.0pt'><b><span lang=EN-US style='mso-ansi-language:EN-US'>ITU</span></b><span
     lang=EN-US style='mso-ansi-language:EN-US'> - International
     Telecommunications Union<o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='text-align:justify'><b><span style='display:none;
mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l0 level1 lfo20;
     tab-stops:list 36.0pt'><b><span lang=EN-US style='mso-ansi-language:EN-US'>IEEE</span></b><span
     lang=EN-US style='mso-ansi-language:EN-US'> - Institute of Electrical and
     Electronics Engineer</span><b><span lang=EN-US style='mso-fareast-font-family:
     "Arial Unicode MS";display:none;mso-hide:all;mso-ansi-language:EN-US'><o:p></o:p></span></b></li>
</ul>

<p class=MsoNormal style='text-align:justify'><b><span lang=EN-US
style='mso-fareast-font-family:"Arial Unicode MS";display:none;mso-hide:all;
mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<h6><span style='font-family:"Times New Roman"'>Defini��o RM-OSI</span><span
style='font-family:"Times New Roman";font-weight:normal'><o:p></o:p></span></h6>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><span style='mso-tab-count:1'>����������� </span>O RM-OSI -</span><span
style='font-family:"Times New Roman"'>Open Systems Interconnection Reference
Model, foi criado pela ISO em 1980 e � uma defini��o sobre protocolos, do ponto
de vista operacional. Ela<span style='display:none;mso-hide:all'><o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">�</span>dividide em 7 camadas (de protocolos) para tratar cada problema de
comunica��o separadamente, sendo que <span style='display:none;mso-hide:all'><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'>cada camada deve desempenhar uma
fun��o bem definida tendo em vista a defini��o de protocolos padr�es
internacionais e as fronteiras entre as camadas devem ser escolhidas de forma a
minimizar o fluxo de informa��es atrav�s das interfaces. Cada uma das camadas
ent�o representa um grupo de protocolos, respons�vel em satisfazer as necessidades
da camada, como descrito abaixo:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>F�SICA: </span></b><span
     style='mso-bidi-font-size:9.0pt'>especifica��es el�tricas, mec�nicas e
     outras sobre a forma de como um bit 1 ou 0 ser� transmitido, em rela��o ao
     valor da voltagem, frequ�ncia, etc;<span style='display:none;mso-hide:
     all'><o:p></o:p></span></span></li>
</ul>

<h3 style='mso-pagination:none;mso-layout-grid-align:none;punctuation-wrap:
simple;text-autospace:none;vertical-align:baseline'><span style='mso-bidi-font-size:
9.0pt;font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h3>

<h3 style='margin-left:36.0pt;text-indent:-18.0pt;mso-pagination:none;
mso-list:l16 level1 lfo21;tab-stops:list 36.0pt;mso-layout-grid-align:none;
punctuation-wrap:simple;text-autospace:none;vertical-align:baseline'><![if !supportLists]><span
style='mso-bidi-font-size:9.0pt;font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b><span style='mso-bidi-font-size:9.0pt;font-family:
"Times New Roman"'>ENLACE DE DADOS:</span></b><span style='mso-bidi-font-size:
9.0pt;font-family:"Times New Roman"'> interpreta e organiza os bits ou dados
recebidos pela camada f�sica<o:p></o:p></span></h3>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>REDE: </span></b><span
     style='mso-bidi-font-size:9.0pt'>organiza o pacote de roteamento dos dados
     e verifica se a rede destino, se os protocolos l�gicos aceitos ter�o mesma
     especifica��o como o tamanho dos pacotes<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>TRANSPORTE:</span></b><span
     style='mso-bidi-font-size:9.0pt'> organiza os pacotes na forma aceita pelo
     protocolo e gerencia a comunica��o entre redes quanto a velocidades
     diferentes<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>SESS�O:</span></b><span
     style='mso-bidi-font-size:9.0pt'> sincroniza as redes e gerencia<span
     style="mso-spacerun: yes">� </span>a dire��o do fluxo de dados<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>APRESENTA��O:</span></b><span
     style='mso-bidi-font-size:9.0pt'> cuida dos formato dos pacotes � serem
     entregues ao aplicativo, como por exemplo a convers�o de dados ASCII em
     EBCDIC<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>APLICA��O:</span></b><span
     style='mso-bidi-font-size:9.0pt'><span style="mso-spacerun: yes">�
     </span>cuida das convers�es de m�dia, como por exemplo diferentes layouts
     de telas em terminais, ou sistemas de arquivos diferentes<span
     style='display:none;mso-hide:all'><o:p></o:p></span></span></li>
</ul>

<p class=MsoNormal style='text-align:justify'><span style='display:none;
mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><!--[if gte vml 1]><v:shape id="_x0000_s1078"
 type="#_x0000_t75" style='position:absolute;left:0;text-align:left;
 margin-left:176.65pt;margin-top:3.8pt;width:198pt;height:142.7pt;z-index:50'>
 <v:imagedata src="./arquivos/image111.jpg" o:title="OSI"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=236 height=5></td>
 </tr>
 <tr>
  <td></td>
  <td><img width=264 height=190 src="./arquivos/image112.jpg" v:shapes="_x0000_s1078"></td>
 </tr>
</table>

</span><![endif]><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<br style='mso-ignore:vglayout' clear=ALL>

<h4><span style='font-family:"Times New Roman"'>Figura 2: M�todo de camadas da
RM-OSI usado em protocolos de comunica��o<o:p></o:p></span></h4>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><span
style='mso-tab-count:1'>����������� </span>Os protocolos do n�vel f�sico, cada
equipamento que usa este protocolo tamb�m deve ter um m�todo de acesso para
transa��es de comunica��es de dados:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h6 style='mso-pagination:widow-orphan;mso-layout-grid-align:auto;punctuation-wrap:
hanging;text-autospace:ideograph-numeric ideograph-other;mso-vertical-align-alt:
auto'><span lang=EN-US style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-ansi-language:EN-US'>M�todos
ass�ncronos</span><span lang=EN-US style='mso-bidi-font-size:10.0pt;font-family:
"Times New Roman";mso-fareast-font-family:"Times New Roman";mso-font-kerning:
0pt;mso-ansi-language:EN-US'><o:p></o:p></span></h6>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><span lang=EN-US style='mso-ansi-language:EN-US'>BTAM
     (Basic Telecomunications Access method )<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><span lang=EN-US style='mso-ansi-language:EN-US'>QTAM
     (Queud telecomunications Access Method )<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><span lang=EN-US style='mso-ansi-language:EN-US'>TCAM
     (Telecomunications Access Method )<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><span lang=EN-US style='mso-ansi-language:EN-US'>RJP
     ( Remote Job Processing )<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><span lang=EN-US style='mso-ansi-language:EN-US'>RJE
     (Remote Job Entry )<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><span lang=EN-US style='mso-ansi-language:EN-US'>CRJE
     ( Conversational Remote Job Entry )<o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='text-align:justify'><b><span style='display:none;
mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><b><span lang=EN-US
style='mso-ansi-language:EN-US'>M�todos s�ncronos<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><span lang=EN-US style='mso-ansi-language:EN-US'>ACF/VTAM
     (Advanced Communications Function / Virtual Telecommunication Access
     Method)<o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify'>A seguir uma
lista de alguns protocolos de comunica��o de cada camada:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h6><span style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman"'>Protocolos da Camada F�sica</span><span
style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";font-weight:normal'><o:p></o:p></span></h6>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'>Fam�lia X - X.25, X.3, etc<span style='display:
     none;mso-hide:all'><o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><span lang=EN-US style='mso-ansi-language:EN-US'>q
     Ethernet 10BASE-T, 100BASE-T (Fast Ethernet)<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><span lang=EN-US style='mso-ansi-language:EN-US'>Switches
     Ethernet, IEEE 802.9 (Ethernet Is�crona)<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><span lang=EN-US style='mso-ansi-language:EN-US'>Serial
     <o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><span lang=EN-US style='mso-ansi-language:EN-US'>Token
     Ring e Token Bus<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><span lang=EN-US style='mso-ansi-language:EN-US'>ARCnet
     (Attached Resource Computer Network )<o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<h6><span style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman"'>Protocolos da Camada de Enlace de
Dados<o:p></o:p></span></h6>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l4 level1 lfo22;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>BSC (Binary
     Synchronous Control) - permitir a transmiss�o s�ncrona entre computador e
     perif�ricos remotamente localizados<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l4 level1 lfo22;
     tab-stops:list 36.0pt'><i><span style='mso-bidi-font-size:9.0pt'>SDLC
     (Controle do Enlace de Dados S�ncrono) - regras que controlam as fun��es
     executadas na camada de controle do enlace de dados da SNA<o:p></o:p></span></i></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l4 level1 lfo22;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>HDLC (High
     Level Data Link Control) - protocolo orientado a bit para transmiss�o<span
     style="mso-spacerun: yes">� </span>de dados s�ncronos </span><span
     style="mso-spacerun: yes">�</span><span style='mso-bidi-font-size:9.0pt;
     mso-fareast-font-family:"Arial Unicode MS"'><o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l4 level1 lfo22;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>X.25 -
     protocolo de acesso para redes de comuta��o de pacotes<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l4 level1 lfo22;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>X.29 - usado
     em equipamentos de dados mais simples e de baixo custo, como � o caso dos
     terminais ass�ncronos<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l4 level1 lfo22;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>SLIP (Serial
     Line Internet Protocol) - comunica��o ponto-a-ponto entre conex�es
     seriais, utilizando TCP/IP<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l4 level1 lfo22;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>PPP
     (Point-to-Point Protocol) - protocolo para transmiss�o de pacotes atrav�s
     de linhas seriais s�ncronas e ass�ncronas<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l4 level1 lfo22;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>LLC (Logical
     Link Control) - implementa a interface com o n�vel de rede, fornece
     servi�os como multiplexa��o e o controle do fluxo e dos erros<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l4 level1 lfo22;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>LAP-M (Link
     Access Procedures for Modems) - protocolo de corre��o de erros e �
     especificado na norma V.42</span> <span style='mso-bidi-font-size:9.0pt'><o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<h6><span style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman"'>Protocolos da Camada de Rede<o:p></o:p></span></h6>

<p class=MsoBodyTextIndent2 style='margin-left:35.45pt;text-indent:-14.15pt;
mso-list:l4 level2 lfo22;tab-stops:list 72.0pt'><![if !supportLists]><span
style='font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='font-family:"Times New Roman"'>GGP
(Gateway to Gateway Protocol) - protocolo utilizado pelos primeiros Core
Gateways para propaga��o de rotas, utiliza o algoritmo &quot;Vector
Distance&quot;, sendo encapsulado num datagrama IP<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt'><span style='mso-bidi-font-size:9.0pt;display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt;mso-list:l4 level2 lfo22;tab-stops:list 72.0pt'><![if !supportLists]><span
style='mso-bidi-font-size:9.0pt;font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:9.0pt'>EGP (Exterior
Gateway Protocol) � gateways que trocam informa��es de roteamento com outros
gateways que n�o pertencem ao mesmo Sistema Aut�nomo</span> <span
style='mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt'><span style='mso-bidi-font-size:9.0pt;display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt;mso-list:l4 level2 lfo22;tab-stops:list 72.0pt'><![if !supportLists]><span
style='mso-bidi-font-size:9.0pt;font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:9.0pt'>RIP (Routing
Information Protocol) - envia mensagens de atualiza��o de rotas em broadcasting
a cada 30 segundos, mencionando as redes e suas respectivas dist�ncias
efetuando ent�o a atualiza��o de suas tabelas</span> <span style='mso-bidi-font-size:
9.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt'><span style='mso-bidi-font-size:9.0pt;display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt;mso-list:l4 level2 lfo22;tab-stops:list 72.0pt'><![if !supportLists]><span
style='mso-bidi-font-size:9.0pt;font-family:Symbol'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:9.0pt'>HELLO - mant�m o
sincronismo dos rel�gios de todos os gateways envolvidos e divulga alcance por
tempo referente a cada rede</span> <span style='mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt'><span style='mso-bidi-font-size:9.0pt;display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt;mso-list:l4 level2 lfo22;tab-stops:list 72.0pt'><![if !supportLists]><span
style='mso-bidi-font-size:9.0pt;font-family:Symbol;display:none;mso-hide:all'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:9.0pt'>OSPF (Open Shortest
Path First) - um protocolo que utiliza a t�cnica SPF (Shortest Path First),
tamb�m conhecida como &quot;Link State�, largamente utilizado e de alta
performance, inicializadas com um cabe�alho padr�o</span> <span
style='mso-bidi-font-size:9.0pt;display:none;mso-hide:all'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt'><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h6><span style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman"'>Protocolos da Camada de Transporte<o:p></o:p></span></h6>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l23 level1 lfo29;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>TCP
     (Transmission Control Protocol) - respons�vel por uma transmiss�o de
     dados, com conex�o orientada de confian�a e prov� servi�os de full -duplex</span>
     <span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:"Arial Unicode MS"'><o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l23 level1 lfo29;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>UDP (User
     Datagram Protocol) - para transferir dados entre agentes, em que um
     usu�rio pode enviar uma mensagem sem estabelecer uma conex�o com o
     receptor, isto �, o usu�rio simplesmente p�e a mensagem na rede com o
     endere�o de destino e espera que essa chegue</span> <span
     style='mso-bidi-font-size:9.0pt'><o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l23 level1 lfo29;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>IPX/SPX</span><span style='mso-bidi-font-size:9.0pt'> (Internetwork
     Packet Exchange) - utilizado numa rede juntamente com clientes NetWare ou
     com uma mistura de clientes Windows e servidor NetWare </span><span
     style="mso-spacerun: yes">�</span><span style='mso-bidi-font-size:9.0pt'><o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l23 level1 lfo29;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>NetBEUI -
     pequeno, r�pido e eficiente, n�o suporta roteamento, para redes Microsoft</span>
     <span style='mso-bidi-font-size:9.0pt'><o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h6><span style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman"'>Protocolos da Camada de Aplica��o<o:p></o:p></span></h6>

<p class=MsoBodyText style='margin-left:36.0pt;text-indent:-18.0pt;mso-pagination:
widow-orphan;mso-list:l23 level1 lfo29;tab-stops:list 36.0pt;mso-layout-grid-align:
auto;punctuation-wrap:hanging;text-autospace:ideograph-numeric ideograph-other;
mso-vertical-align-alt:auto'><![if !supportLists]><span style='font-family:
Symbol;mso-bidi-font-family:"Times New Roman"'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='font-family:"Times New Roman"'>DNS
(Sistema de nomes de dom�nio)<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:36.0pt;text-indent:-18.0pt;mso-pagination:
widow-orphan;mso-list:l23 level1 lfo29;tab-stops:list 36.0pt;mso-layout-grid-align:
auto;punctuation-wrap:hanging;text-autospace:ideograph-numeric ideograph-other;
mso-vertical-align-alt:auto'><![if !supportLists]><span style='font-family:
Symbol;mso-bidi-font-family:"Times New Roman"'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='font-family:"Times New Roman"'>Telnet
(Acesso remoto)<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:36.0pt;text-indent:-18.0pt;mso-pagination:
widow-orphan;mso-list:l23 level1 lfo29;tab-stops:list 36.0pt;mso-layout-grid-align:
auto;punctuation-wrap:hanging;text-autospace:ideograph-numeric ideograph-other;
mso-vertical-align-alt:auto'><![if !supportLists]><span style='mso-bidi-font-size:
9.0pt;font-family:Symbol;mso-bidi-font-family:"Times New Roman"'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><![endif]><span
style='font-family:"Times New Roman"'>FTP (File Transfer Protocol) � para
transfer�ncia de arquivos </span><span style='mso-bidi-font-size:9.0pt;
font-family:"Times New Roman"'><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:36.0pt;text-indent:-18.0pt;mso-pagination:
widow-orphan;mso-list:l23 level1 lfo29;tab-stops:list 36.0pt;mso-layout-grid-align:
auto;punctuation-wrap:hanging;text-autospace:ideograph-numeric ideograph-other;
mso-vertical-align-alt:auto'><![if !supportLists]><span style='font-family:
Symbol;mso-bidi-font-family:"Times New Roman"'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='font-family:"Times New Roman"'>Correio
eletr�nico - SMTP, POP, IMAP <o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:36.0pt;text-indent:-18.0pt;mso-pagination:
widow-orphan;mso-list:l23 level1 lfo29;tab-stops:list 36.0pt;mso-layout-grid-align:
auto;punctuation-wrap:hanging;text-autospace:ideograph-numeric ideograph-other;
mso-vertical-align-alt:auto'><![if !supportLists]><span style='font-family:
Symbol;mso-bidi-font-family:"Times New Roman"'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='font-family:"Times New Roman"'>Servi�o de
not�cias - usenet news <o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l23 level1 lfo29;
     tab-stops:list 36.0pt'><span lang=EN-US style='mso-bidi-font-size:9.0pt;
     mso-ansi-language:EN-US'>HTTP � p�gina da world wide web<span
     style='display:none;mso-hide:all'><o:p></o:p></span></span></li>
</ul>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='display:none;mso-hide:all;mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<h6><span style='font-family:"Times New Roman"'>Protocolo IP<o:p></o:p></span></h6>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><span
style='mso-tab-count:1'>����������� </span>O Protocolo IP (Internet Protocol) �
um dos mais importantes protocolos atualmente pois � amplamente usado em redes.
Ele � protocolo que faz o roteamento dos pacotes de dados para a rede atrav�s
dos n�meros IP, que na sua vers�o 4, � formado por um n�mero de 32 bits, divido
em quatro partes, como por exemplo 11010000 11110101 0011100 10100011 =
208.245.28.63. Cada octeto deste n�mero suporta n�meros de 1 a 255, formando no
m�ximo 4.228E9 pontos de rede poss�veis com este protocolo. Cada n�mero IP
representa um computador ou um ponto dentro da rede. Com a expans�o de redes
como a Internet, o protocolo IP est� em fase de atualiza��o na sua vers�o IPv6,
que ter� um n�mero de 128 bits e suportar� 3.19E38 pontos de rede.<o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h6><span style='font-family:"Times New Roman"'>Arquitetura TCP/IP<o:p></o:p></span></h6>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-tab-count:1'>����������� </span>Ao
contr�rio do que muitos pensam, TCP/IP � uma arquitetura de grupos de
protocolos baseados na RM-OSI, para transmiss�o de dados, sendo que os
principais protocolos usados s�o o TCP e o IP, mas n�o necessariamente. Ele foi
criado em 1977 e come�ou a operar em 1983, devido as conex�es de computadores
em rede serem centralizadas nos IMPs (Interface Message Processors), que eram
servidores na �poca em faculdades que faziam a conex�o em rede de computadores,
sendo que a cria��o do TCP/IP, que descentraliza a rede em diversos servidores,
contribuiu para o enorme crescimento da rede, como a Internet. Nas figuras
abaixo est�o a forma que o TCP/IP usa de camadas e os protocolos suportados.</p>

<p class=MsoNormal style='text-align:justify'><!--[if gte vml 1]><v:shape id="_x0000_s1079"
 type="#_x0000_t75" style='position:absolute;left:0;text-align:left;
 margin-left:10.9pt;margin-top:4.45pt;width:228pt;height:146.75pt;z-index:51'>
 <v:imagedata src="./arquivos/image113.jpg" o:title="TCPIP"/>
</v:shape><v:shape id="_x0000_s1080" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:238.15pt;margin-top:4.55pt;width:198pt;
 height:146.25pt;z-index:52'>
 <v:imagedata src="./arquivos/image114.jpg" o:title="estru"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=15 height=6></td>
 </tr>
 <tr>
  <td></td>
  <td><img width=567 height=195 src="./arquivos/image115.jpg" v:shapes="_x0000_s1079 _x0000_s1080"></td>
 </tr>
</table>

</span><![endif]><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<br style='mso-ignore:vglayout' clear=ALL>

<h4><span style='font-family:"Times New Roman"'>Figura 3: Camadas e protocolos
do TCP/IP<o:p></o:p></span></h4>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-tab-count:1'>����������� </span>Outro
detalhe importante sobre TCP/IP � o conceito de portas l�gicas. Como o TCP/IP
funciona atrav�s de pacotes de dados, e o computador usando estes protocolos
podem estar com diversos aplicativos abertos ao mesmo tempo, como por exemplo o
browser, o software de e-mail, de downloads, de chat, etc, as portas l�gicas
s�o uma forma de identificar o pacote recebido de dados para qual aplicativo
deve usar, sem elas os dados por exemplo de e-mail, seriam entregues ao
navegador. Uma analogia sobre portas l�gicas � imagine uma carta endere�ada �
algu�m que mora em um pr�dio. O n�mero do pr�dio (IP) seria igual para todos
moradores, por�m a carta deve ser entregue a um morador em espec�fico, de um
apartamento (que seria o n�mero da porta l�gica). Dentre as portas l�gicas mais
famosas, temos a 80 para HTTP, a 21 para FTP, e assim por diante.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><!--[if gte vml 1]><v:shape id="_x0000_s1081"
 type="#_x0000_t75" style='position:absolute;left:0;text-align:left;
 margin-left:.4pt;margin-top:1.85pt;width:3in;height:129.15pt;z-index:53'>
 <v:imagedata src="./arquivos/image116.jpg" o:title="TCPIP2"/>
</v:shape><v:shape id="_x0000_s1082" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:214.9pt;margin-top:2.6pt;width:228pt;
 height:128.6pt;z-index:54'>
 <v:imagedata src="./arquivos/image117.jpg" o:title="aplicacao"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=1 height=3></td>
 </tr>
 <tr>
  <td></td>
  <td><img width=590 height=172 src="./arquivos/image118.gif" v:shapes="_x0000_s1081 _x0000_s1082"></td>
 </tr>
</table>

</span><![endif]><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h4><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h4>

<br style='mso-ignore:vglayout' clear=ALL>

<h4><span style='font-family:"Times New Roman"'>Figura 4: Exemplos de aplica��o
do TCP/IP<o:p></o:p></span></h4>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h6><span style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman"'>Desenvolvimento de Protocolos para
Internet<o:p></o:p></span></h6>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-tab-count:1'>����������� </span>Abaixo
est�o os nomes dos �rg�os respons�veis por criar e administrar protocolos para
uso na Internet:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h3 style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l23 level1 lfo29;
tab-stops:list 36.0pt'><![if !supportLists]><span lang=EN-US style='font-family:
Symbol;mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><![endif]><b><span
lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'>IAB </span></b><span
lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'>(Internet
Architecture Board) � controla a Internet<o:p></o:p></span></h3>

<h3 style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l23 level1 lfo29;
tab-stops:list 36.0pt'><![if !supportLists]><span lang=EN-US style='font-family:
Symbol;mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><![endif]><b><span
lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'>IANA</span></b><span
lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'>
(Internet Assined Numbers Authority) � controla os IPs e DNS<o:p></o:p></span></h3>

<h3 style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l23 level1 lfo29;
tab-stops:list 36.0pt'><![if !supportLists]><span lang=EN-US style='mso-bidi-font-size:
9.0pt;font-family:Symbol;mso-bidi-font-family:"Times New Roman";mso-ansi-language:
EN-US'>�<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b><span lang=EN-US style='font-family:"Times New Roman";
mso-ansi-language:EN-US'>InterNIC</span></b><span lang=EN-US style='font-family:
"Times New Roman";mso-ansi-language:EN-US'> (Internet Network Information
Center) � controla documenta��o</span><span lang=EN-US style='mso-bidi-font-size:
9.0pt;font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p></o:p></span></h3>

<h3 style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l23 level1 lfo29;
tab-stops:list 36.0pt'><![if !supportLists]><span lang=EN-US style='font-family:
Symbol;mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><![endif]><b><span
lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'>IETF</span></b><span
lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'>
(Internet Engineering Task Force) � defini��o e padroniza��o<o:p></o:p></span></h3>

<h3 style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l23 level1 lfo29;
tab-stops:list 36.0pt'><![if !supportLists]><span lang=EN-US style='font-family:
Symbol;mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>�<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><![endif]><b><span
lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'>IRTF </span></b><span
lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'>(Internet
Research Task Force) � cria��o, projeto e propostas<o:p></o:p></span></h3>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-fareast-font-family:"Arial Unicode MS";mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><!--[if gte vml 1]><v:shape id="_x0000_s1083"
 type="#_x0000_t75" style='position:absolute;left:0;text-align:left;
 margin-left:119.65pt;margin-top:.15pt;width:197.05pt;height:121.15pt;
 z-index:55'>
 <v:imagedata src="./arquivos/image119.jpg" o:title="orgaos"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=160 height=0></td>
 </tr>
 <tr>
  <td></td>
  <td><img width=262 height=162 src="./arquivos/image120.jpg" v:shapes="_x0000_s1083"></td>
 </tr>
</table>

</span><![endif]><span lang=EN-US style='mso-fareast-font-family:"Arial Unicode MS";
mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-fareast-font-family:"Arial Unicode MS";mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-fareast-font-family:"Arial Unicode MS";mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-fareast-font-family:"Arial Unicode MS";mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-fareast-font-family:"Arial Unicode MS";mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-fareast-font-family:"Arial Unicode MS";mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-fareast-font-family:"Arial Unicode MS";mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-fareast-font-family:"Arial Unicode MS";mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-fareast-font-family:"Arial Unicode MS";mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<br style='mso-ignore:vglayout' clear=ALL>

<h4><span style='font-family:"Times New Roman"'>Figura 5: Forma��o dos �rg�os
de internet<o:p></o:p></span></h4>

<p class=MsoNormal style='text-align:justify'><span style='mso-fareast-font-family:
"Arial Unicode MS";display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>Tamb�m �
importante lembrar que sobre protocolos, eles s�o documentados da seguinte
forma: primeiro h� uma proposta para um novo protocolo, que ap�s documentado se
torna um <i>Draft Proposal</i>, que depois de aprovado, � feito um documento
que � o <i>RFC � Request for Coments</i>, onde existem nas seguintes
classifica��es: Proposed, Draft, Best Current Practices, Experimental,
Informational, Historic, e por fim um Internet Standard. Um protocolo n�o
precisa chegar ao n�vel de norma de internet para ser usado.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><!--[if gte vml 1]><o:wrapblock><v:shape
  id="_x0000_s1084" type="#_x0000_t75" style='position:absolute;left:0;
  text-align:left;margin-left:-9.9pt;margin-top:0;width:173.95pt;height:137.8pt;
  z-index:56;v-text-anchor:middle' fillcolor="#0c9" strokeweight="1pt">
  <v:imagedata src="./arquivos/image121.wmz" o:title=""/>
  <v:textbox style='mso-fit-shape-to-text:t' inset="90488emu,3.5pt,90488emu,3.5pt"/>
  <w:wrap type="topAndBottom"/>
 </v:shape><![if gte mso 9]><o:OLEObject Type="Embed" ProgID="Word.Document.8"
  ShapeID="_x0000_s1084" DrawAspect="Content" ObjectID="_1067749891">
 </o:OLEObject>
 <![endif]><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
 relative;z-index:56;left:-13px;top:0px;width:232px;height:184px'><img
 width=232 height=184 src="./arquivos/image122.gif" v:shapes="_x0000_s1084"></span><![endif]><!--[if gte vml 1]></o:wrapblock><![endif]--><br
style='mso-ignore:vglayout' clear=ALL>
<!--[if gte vml 1]><v:shape id="_x0000_s1085" type="#_x0000_t75" style='position:absolute;
 left:0;text-align:left;margin-left:177.9pt;margin-top:52.1pt;width:276pt;
 height:137.7pt;z-index:57'>
 <v:imagedata src="./arquivos/image123.png" o:title="nuvem"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:57;left:0px;margin-left:237px;margin-top:69px;width:368px;
height:184px'><img width=368 height=184 src="./arquivos/image124.gif"
v:shapes="_x0000_s1085"></span><![endif]><span style='mso-tab-count:1'>����������� </span>Ainda
sobre protocolos, temos dois importantes protocolos usados pelas empresas de
telecomunica��es para transmiss�o de dados, que s�o o ATM (Asynchronous
Transfer Mode) e o Frame Relay, protocolos geralmente para grandes bandas de
dados.</p>

<h4><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h4>

<h4><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h4>

<br style='mso-ignore:vglayout' clear=ALL>

<h4><span style='font-family:"Times New Roman"'>Figura 6: Na esquerda a
forma��o das camadas do ATM e na direita uma estrutura de rede com Frame Relay<o:p></o:p></span></h4>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-tab-count:1'>����������� </span>Abaixo
temos a figura 7 que mostra a estrutura da rede da RNP, usando protocolos ATM e
Frame Relay:</p>

<p class=MsoNormal style='text-align:justify'><!--[if gte vml 1]><v:shape id="_x0000_s1086"
 type="#_x0000_t75" style='position:absolute;left:0;text-align:left;
 margin-left:24.4pt;margin-top:12.4pt;width:384.25pt;height:336.2pt;z-index:58'>
 <v:imagedata src="./arquivos/image125.png" o:title="bkb_rnp2_20011008"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=33 height=16></td>
 </tr>
 <tr>
  <td></td>
  <td><img width=512 height=449 src="./arquivos/image126.gif" v:shapes="_x0000_s1086"></td>
 </tr>
</table>

</span><![endif]><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<br style='mso-ignore:vglayout' clear=ALL>

<h4><span style='font-family:"Times New Roman"'>Figura 7: Mapa da rede da RNP<o:p></o:p></span></h4>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h6><span style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman"'>Protocolo PROFIBUS<o:p></o:p></span></h6>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-tab-count:1'>����������� </span>O
Protocolo PROFIBUS � amplamente usado em automa��o de sistemas, pois � ele quem
faz a interface entre redes de computadores, de CLP�s e dos atuadores
controlados como v�lvulas, pist�es, etc. Abaixo est� uma descri��o dos tr�s tipos
de PROFIBUS:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l7 level1 lfo30;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>Profibus-DP</span></b><span
     style='mso-bidi-font-size:9.0pt'> � Otimizada para alta velocidade e baixo
     custo, esta vers�o � projetada para comunica��o entre sistemas de controle
     autom�ticos e I/Os distribu�dos. Pode ser utilizada para substituir
     qualquer sinal paralelo com 24Vdc ou 0 a 20 mA.<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l7 level1 lfo30;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>Profibus-PA</span></b><span
     style='mso-bidi-font-size:9.0pt'> � � projetada especialmente para a
     ind�stria de processos. Permite que sensores e atuadores sejam conectados
     em um �nico barramento mesmo em �reas intrinsecamente seguras,
     disponibilizando energia e dados no mesmo cabo.<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l7 level1 lfo30;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>Profibus-FMS</span></b><span
     style='mso-bidi-font-size:9.0pt'> � � uma solu��o de comunica��o de
     prop�sito geral. Seus recursos possibilitam grande flexibilidade sendo
     utilizada em tarefas extensas e complexas de comunica��o.</span></li>
</ul>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent3>Um exemplo dessa tecnologia, � a automa��o
realizada no porto de Paranagu� feita pela empresa NWM Sistemas de Automa��o. A
rede interliga sensores e atuadores nos terminais de carga dos navios, com a
configura��o conforme a figura 8.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><!--[if gte vml 1]><v:shape id="_x0000_s1087"
 type="#_x0000_t75" style='position:absolute;left:0;text-align:left;
 margin-left:98.65pt;margin-top:9.2pt;width:330pt;height:269.95pt;z-index:59'>
 <v:imagedata src="./arquivos/image127.png" o:title="arquitetura"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout'>

<table cellpadding=0 cellspacing=0 align=left>
 <tr>
  <td width=132 height=12></td>
 </tr>
 <tr>
  <td></td>
  <td><img width=440 height=360 src="./arquivos/image128.gif" v:shapes="_x0000_s1087"></td>
 </tr>
</table>

</span><![endif]><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<br style='mso-ignore:vglayout' clear=ALL>

<h4><span style='font-family:"Times New Roman"'>Figura 8: Mapa da rede do porto
de Paranagu�<o:p></o:p></span></h4>

<p class=MsoNormal style='text-align:justify'><span style='mso-tab-count:1'>����������� </span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><b><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal><b><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt'>FIELDBUS<o:p></o:p></span></b></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><b>Introdu��o<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Atualmente, a
empresa pioneira em Fieldbus � a <b><i>Smar</i></b> que desde 1993, ap�s o
lan�amento do primeiro chip Fieldbus no mundo, vem conquistando cada vez mais o
mercado.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>O Fieldbus foi
criado inicialmente para poder substituir o cabeamento que ligava sensores e
atuadores a seu sistema de controle, pois os mesmos utilizavam uma infinidade
de cabos e conex�es nas suas liga��es, por um �nico barramento que � capaz de
conectar os sensores e atuadores diretamente a seu sistema de controle que pode
ser um CLP, PC ou regulador.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Observando abaixo,
podemos conferir essa mudan�a de barramento de comunica��o entre os sensores e
atuadores e os devidos controladores:</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">������������� </span></p>

<p class=MsoNormal style='text-align:justify'><!--[if gte vml 1]><v:shape id="_x0000_i1041"
 type="#_x0000_t75" style='width:247.8pt;height:142.2pt' o:ole="">
 <v:imagedata src="./arquivos/image129.png" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=330 height=190
src="./arquivos/image130.jpg" v:shapes="_x0000_i1041"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="PI3.Image" ShapeID="_x0000_i1041"
  DrawAspect="Content" ObjectID="_1067749893">
 </o:OLEObject>
</xml><![endif]--></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Na figura
acima, podemos verificar que o CLP se comunica com os seus sensores e atuadores
atrav�s de cabos totalmente independentes um do outro, fazendo com que exista
uma grande quantidade de cabos, encarecendo muito a sua implanta��o.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>J� na pr�xima
figura podemos verificar como fica o sistema de comunica��o utilizando o
barramento Fieldbus, que reduz bruscamente o cabeamento entre o PLC e os
sensores e atuadores.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><!--[if gte vml 1]><v:shape id="_x0000_i1042"
 type="#_x0000_t75" style='width:231pt;height:131.4pt' o:ole="">
 <v:imagedata src="./arquivos/image131.png" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=308 height=175
src="./arquivos/image132.jpg" v:shapes="_x0000_i1042"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="PI3.Image" ShapeID="_x0000_i1042"
  DrawAspect="Content" ObjectID="_1067749895">
 </o:OLEObject>
</xml><![endif]--></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Mas o fieldbus
n�o � apenas um barramento capaz de reduzir o cabeamento entre estes
equipamentos, mas sim, um sistema de comunica��o digital bidirecional que permite
a interliga��o em rede de m�ltiplos instrumentos diretamente no campo
realizando fun��es de controle e monitora��o de processo e esta��es de opera��o
atrav�s de softwares supervis�rios. </p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><!--[if gte vml 1]><v:shape id="_x0000_i1043"
 type="#_x0000_t75" style='width:178.2pt;height:137.4pt' o:ole="">
 <v:imagedata src="./arquivos/image133.png" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=238 height=183
src="./arquivos/image134.jpg" v:shapes="_x0000_i1043"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="PI3.Image" ShapeID="_x0000_i1043"
  DrawAspect="Content" ObjectID="_1067749896">
 </o:OLEObject>
</xml><![endif]--></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Pela figura,
podemos verificar que a comunica��o � feita atrav�s de um �nico barramento que
possui uma comunica��o bidirecional e que � capaz de controlar in�meros
equipamentos diversos exercendo diferentes fun��es um do outro.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><b>Aplica��es <o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Devido ao
n�mero crescente de atualiza��es gra�as � tecnologia que vem surgindo ao longo
dos anos, o fieldbus come�ou a ser difundido em centenas de empresas ao redor
do mundo.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:18.0pt'>Hoje, o
fieldbus deixa marcas do seu sistema e do seu sucesso em grandes empresas, como
por exemplo:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l6 level1 lfo31;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Empresas de �leo e g�s (PETROBRAS) <span style='font-family:
Wingdings;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-char-type:symbol;mso-symbol-font-family:Wingdings'><span style='mso-char-type:
symbol;mso-symbol-font-family:Wingdings'>�</span></span> no controle de
plataformas, oleodutos, gasodutos, reatores, etc.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l6 level1 lfo31;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Minera��o <span style='font-family:Wingdings;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Wingdings'><span style='mso-char-type:symbol;mso-symbol-font-family:
Wingdings'>�</span></span> controle de fornos de calcina��o, beneficiamento de
min�rios, moinho de esferas, evaporadores e digestores.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l6 level1 lfo31;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Papel e Celulose <span style='font-family:Wingdings;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-char-type:symbol;mso-symbol-font-family:Wingdings'><span style='mso-char-type:
symbol;mso-symbol-font-family:Wingdings'>�</span></span> controle de
branqueamento, caldeira de recupera��o e prepara��o de massa.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l6 level1 lfo31;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Predial <span style='font-family:Wingdings;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Wingdings'><span style='mso-char-type:symbol;mso-symbol-font-family:
Wingdings'>�</span></span> controle das utilidades, elevadores, seguran�a, etc.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l6 level1 lfo31;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Metalurgia <span style='font-family:Wingdings;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Wingdings'><span style='mso-char-type:symbol;mso-symbol-font-family:
Wingdings'>�</span></span> controle de altos fornos, fundi��o continua,
sinteriza��o, linhas de recozimento, etc.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:18.0pt'>Atrav�s da
figura em anexo, podemos visualizar as diversas empresas que se utilizam do
Fieldbus, como descrevemos acima:</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">�</span></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><b>Benef�cios<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Menor Custo Inicial<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>O sistema
fieldbus dispensa grande parte de equipamentos que existem nos sistemas SDCDs.
Inicialmente h� uma certa diminui��o no numero de controladores e subsistemas
E/S, pela raz�o dos sistemas fieldbus serem conectados via rede digital, como
j� hav�amos falado antes. O fieldbus tamb�m � capaz de realizar fun��es de
controle e c�lculos complexos, diminuindo com isso os poss�veis gastos com
cart�es de controle e cabos.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>A constru��o e
a instala��o tamb�m ficam mais simples porque v�rios equipamentos podem ser
conectados a um �nico par de fios. O n�mero de cabos, bandejas de cabos e
arm�rios de rearranjo ficam bem menores, acarretando na melhor distribui��o de
espa�os na sala de controle. E mais uma vantagem, no sistema fieldbus o
controle n�o � feito por hardware, e sim por software, reduzindo os gastos com
engenharia.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Flexibilidade<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><u><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Devido a uma
demanda cada vez maior do mercado consumidor as ind�strias se sentem obrigadas
a implementarem modifica��es e expans�es em tempos cada vez menores. O sistema
Fieldbus consegue oferecer esta capacidade de expans�o, flexibilidade e
facilidade de configura��o, para atender a tais necessidades, gra�as a uma
variedade de op��es de interfaces e utiliza��o de tecnologias de redes que d�o
flexibilidade a plantas de todos os tamanhos. Essa flexibilidade faz com que os
sistemas se simplifiquem, deixando-o f�cil de ser configurado e adaptado a
aceitar amplia��es e modifica��es.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Maior Disponibilidade e
Integridade das Informa��es<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Com o in�cio
do uso do Fieldbus foi verificado que ele � capaz de controlar n�o somente
informa��es de se referem ao controle do processo, mas que � capaz de controlar
dados do status, dar diagn�sticos dos equipamentos, verificar configura��es e
calibra��o dos mesmos.Podendo tamb�m incluir fun��es como o Gerenciamento dos
instrumentos, reduzindo de maneira significativa as varia��es de processo e os
custos de manuten��o.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Sendo o
fieldbus mais robusto com rela��o aos sistemas anal�gicos, e totalmente
digital, a transmiss�o de sinais digitais � muito mais segura porque inclui
procedimentos de valida��o de dados e o mesmo possui uma excelente imunidade a
erros, permitindo que os operadores e engenheiros tomem decis�es com mais
seguran�a.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>A comunica��o
digital ainda permite o acesso a vari�veis m�ltiplas, possibilitando a cada
esta��o obter informa��es de qualquer um dos dispositivos, incluindo numero de
identifica��o, ajustes de faixa, materiais de constru��o e dados de calibra��o.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Menor Custo de Manuten��o<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Devido a uma
caracter�stica muito importante do Fieldbus que � o auto-diagn�stico, o sistema
possibilita a integra��o de programas de manuten��o preditiva e proativa.
Estat�sticas operacionais, como por exemplo, o deslocamento acumulado da haste
de uma v�lvula, proporciona informa��es que poder�o ser usadas para uma
previs�o de poss�veis falhas e com isso, o uso de manuten��o preditiva.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>O uso de
mecanismos Online, respons�veis pela notifica��o de falhas informam
imediatamente ao operador se um determinado equipamento ira vir a falhar. Tendo
essa previs�o, permite que seja tomada uma s�rie de provid�ncias, antes que a
produ��o seja afetada, contribuindo com isso, ma diminui��o nas paradas
inesperadas e de situa��es de risco. </p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Maior Qualidade do Produto<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>A redu��o do
n�mero de convers�es A/D e D/A, a integra��o do sinal, a valida��o de dados e
uma maior precis�o resultam em uma maior qualidade do produto.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Maior Facilidade de Opera��o<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:24.0pt'>Para treinar
os futuros operadores na utiliza��o dos equipamentos que ainda n�o est�o em
opera��o � caro e leva tempo. O padr�o Fieldbus garante um aprendizado
simplificado, reduzindo a chance de se cometer erros. O custo deste treinamento
� muito menor. O software trabalha no ambiente Windows e disp�e de fun��es de
ajuda e gr�ficos, que facilita a visualiza��o remota das condi��es de processo
e da atua��o baseada nessas informa��es.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Maior Seguran�a<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>A detec��o e
identifica��o de defeitos significar�o uma diminui��o nas situa��es perigosas.
Os diagn�sticos n�o s�o apenas comunicados aos operadores da planta, mas s�o
tamb�m usados pelos pr�prios dispositivos, garantindo paradas em condi��es mais
propicias mediante falha de instrumento sem a necessidade de informa��o ou a��o
dos controladores de alto n�vel.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Funcionalidade do Sistema<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Em geral,
todos os dispositivos do Fieldbus comunicam-se uns com os outros de modo <i>peer-to-peer</i>
ou <i>multi-peer</i>, adotando um modelo produto/consumidor para se ter um
maior sincronismo e efici�ncia. Uma rede fieldbus pode ter uma extens�o de at�
2 km sem a utiliza��o de repetidores e com o uso do mesmo, pode chegar a
dist�ncias maiores. O fieldbus fornece alimenta��o para os dispositivos de 2
fios e atua como meio para comunica��o digital.A exemplo disso, um sistema de
12 a 16 equipamentos alimentados pelo barramento, equivalente a cerca, de 6 a 8
malhas de controle, podem ser ligados ao fieldbus.</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun: yes">�
</span></p>

<p class=MsoNormal style='text-align:justify'><u>Opera��o<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>As interfaces
do usu�rio podem ser configuradas pelo pr�prio usu�rio, de modo que atenda as
necessidades de cada planta. O fabricante pode, opcionalmente, pr�-configurar
as telas de vista geral, de grupos e detalhes, bem como outras telas comuns,
tais como: telas sin�ticas, registro e sum�rio de alarmes, registro hist�rico,
gerenciamento da instrumenta��o, etc.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Conclus�o<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Podemos
concluir que atualmente o Fieldbus � o sistema mais adequado poss�vel para se
gerenciar e controlar uma instala��o, como por exemplo, uma plataforma de
petr�leo, onde possuem dezenas de sensores e atuadores respons�veis pelo
controles de press�o, vaz�o, temperatura, umidade, entre outros. E devido a
suas excelentes qualidades, o torna mais vi�vel do que o SDCD, pois tem a
chance de controlar maiores informa��es. </p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>O Custo de
aquisi��o se torna menor, facilitando a sua instala��o e manuten��o, podendo
receber in�meras atualiza��es no sistema sem nenhum problema. O fieldbus � um
sistema revolucion�rio que ir� melhorar o desempenho da instala��o, diminuindo
os problemas e falhas que existem em outros sistemas de controle.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><span style="mso-spacerun: yes">� </span></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><span style="mso-spacerun: yes">�</span></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;
mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;
mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;
mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;
mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;
mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;
mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;
mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;
mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;
mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;
mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;
mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;
mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;
mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;
mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;
mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;
mso-fareast-font-family:"Arial Unicode MS"'>Bibiliografia<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt;
mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'>&nbsp;</span><span
style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt'>- Redes de
Computadores</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt'>&nbsp;
CBPF-NT-004/98</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt'>&nbsp; Leonardo
Ferreira Carneiro, Nilton Costa Braga e Nilton Alves J�nior</span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt'>- Redes Locais e
TCP/IP</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt'>&nbsp; N�cleo de
Computa��o Eletr�nica - Universidade Federal do Rio de Janeiro</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt'>&nbsp;Jos� Carlos R.
Moreira</span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><strong><span style='mso-bidi-font-size:10.0pt;font-weight:
normal'>- Solu��es Microsoft para Redes Locais</span></strong></p>

<p class=MsoNormal><strong><span style='mso-bidi-font-size:10.0pt;font-weight:
normal'>&nbsp; Centro de Computa��o - UNICAMP</span></strong></p>

<p class=MsoNormal><strong><span style='mso-bidi-font-size:10.0pt;font-weight:
normal'>&nbsp; Denilson Giungi, Hans K. E. Liesenberg,&nbsp;F�tima Pires,
Rubens Queiroz de Almeida,<span style="mso-spacerun: yes">����� </span>Maria
Cristina Ussami</span></strong><strong><span style='font-weight:normal'><o:p></o:p></span></strong></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'>- Fieldbus
book 2001<o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'>SMAR - 1<sup>st</sup>
Edition<o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt'>- TOPOLOGIAS <em>DE
REDES</em></span><span style='mso-fareast-font-family:"Arial Unicode MS"'><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt'>&nbsp; UNICENTRO
NEWTON PAIVA</span></p>

<p class=MsoNormal>&nbsp;Agnaldo Lopes Martins e <span style='mso-bidi-font-size:
10.0pt'>Sandro Marani</span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><strong><span style='mso-bidi-font-size:13.5pt;font-weight:
normal'>- </span></strong><span style='mso-bidi-font-size:10.0pt;letter-spacing:
-.25pt'>Apostila de �Internet e Arquitetura TCP/IP�</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>&nbsp;PUC-RIO/CCE</span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>-
<strong><span style='font-weight:normal'>PROTOCOLOS</span></strong></span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>UNIVERSIDADE
VEIGA DE ALMEIDA</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>Tarcisio
Gon�alves Cabral</span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>-
</span><span style='mso-bidi-font-size:36.0pt;letter-spacing:-.25pt'>Tutorial:
Redes ATM</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:36.0pt;letter-spacing:-.25pt'>&nbsp;</span><span
style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>CBPF � NT � 005/99</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>&nbsp;&nbsp;
Carlil Gibran Fonseca de Macedo, Nilton C. N. da Costa Braga e Nilton Alves Jr.</span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>- Sistemas especialistas modulados e abrangentes para gest�o
de opera��es</p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'>Barrerlla,
wagner D. - 2000<o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal>- Eletr�nica de Pot�ncia</p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>-
Redes de Computadores e suas aplica��es na Educa��o</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>&nbsp;&nbsp;UFRGS
- <a href="http://penta.ufrgs.br/home_red.htm"><span style='color:windowtext;
text-decoration:none;text-underline:none'>http://penta.ufrgs.br/home_red.htm</span></a></span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>&nbsp;</span><strong><span
style='letter-spacing:-.25pt;font-weight:normal'>Temas de pesquisa
desenvolvidos nos �mbitos dos cursos da �rea de Redes</span></strong></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><strong><span style='letter-spacing:-.25pt;font-weight:normal'>-
NWM - Sistemas de Automa��o</span></strong></p>

<p class=MsoNormal><strong><span style='letter-spacing:-.25pt;font-weight:normal'>&nbsp;</span></strong><span
style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'><a
href="http://www.nwm-aut.com.br/"><span style='color:windowtext;text-decoration:
none;text-underline:none'>http://www.nwm-aut.com.br/</span></a></span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>-
PROFIBUS</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>&nbsp;<a
href="http://www.profibus.com.br"><span style='color:windowtext;text-decoration:
none;text-underline:none'>http://www.profibus.com.br</span></a></span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>-
Frame Relay</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'><a
href="http://www.framerelay.com.br"><span style='color:windowtext;text-decoration:
none;text-underline:none'>http://www.framerelay.com.br</span></a></span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>&nbsp;<o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt'>- RNP</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt'>&nbsp; </span><a
href="http://www.rnp.br"><span style='mso-bidi-font-size:10.0pt;color:windowtext;
text-decoration:none;text-underline:none'>www.rnp.br</span></a></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt'>- Telefonica</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt'>&nbsp;</span><a
href="http://www.telefonica.net.br"><span style='mso-bidi-font-size:10.0pt;
color:windowtext;text-decoration:none;text-underline:none'>www.telefonica.net.br</span></a></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt'>- Embratel</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt'>&nbsp; </span><a
href="http://www.embratel.com.br"><span style='mso-bidi-font-size:10.0pt;
color:windowtext;text-decoration:none;text-underline:none'>www.embratel.com.br</span></a></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'>-
SAP<span style='display:none;mso-hide:all'><o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun: yes">�
</span>www.sap.com</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'>www.cegoc.pt/02_inter/cursos/cap6/06c441.html</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'>www.idg.com.br/crm.asp</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'>www.pgg.pt/noticias/SI-03-CRM.html</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'>www.powersystems.com.br/erp.htm</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'>Telecurso 2000 - Introdu��o �
Automa��o</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><b>Cat�logos<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'>BPCS<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'>SAP<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'>Unygraphics<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'>Pro-e</p>

<p class=MsoNormal style='text-align:justify'>SMAR</p>

</div>

<?php
echo "<BR><BR>\n";
InsereRodape();
?>

</body>

</html>