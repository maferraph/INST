<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns="http://www.w3.org/TR/REC-html40">

<HEAD><TITLE>Projeto de Instrumentação</TITLE>

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
  <o:Author>Daniel, Fernando, Gustavo, Eduardo, Maurício e Ricardo</o:Author>
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
style='font-size:14.0pt;mso-bidi-font-size:12.0pt'> - Instituto de Ciências
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
style='font-size:28.0pt;mso-bidi-font-size:12.0pt'>AUTOMAÇÃO E CONTROLE<o:p></o:p></span></i></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><i><span
style='font-size:28.0pt;mso-bidi-font-size:12.0pt'><span style="mso-spacerun:
yes"> </span><o:p></o:p></span></i></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><i><span
style='font-size:28.0pt;mso-bidi-font-size:12.0pt'>SISTEMAS DE GESTÃO<o:p></o:p></span></i></b></p>

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

<p class=MsoNormal>Daniel Savoy<span style='mso-tab-count:5'>                                                 </span>Nº.
118634-5</p>

<p class=MsoNormal>Eduardo F. B. Barbosa<span style='mso-tab-count:3'>                                  </span>Nº.
058760-5<span style='font-size:10.0pt;font-family:Palatia'> </span><span
style='display:none;mso-hide:all'><o:p></o:p></span></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal>Fernando Frasson Giusti<span style='mso-tab-count:3'>                                </span>Nº.
072993-0</p>

<p class=MsoNormal>Gustavo B. Bonanno<span style='mso-tab-count:4'>                                      </span>Nº.
091262-0</p>

<p class=MsoNormal>Maurício Fernandes Raphael<span style='mso-tab-count:3'>                         </span>Nº.
091495-9</p>

<p class=MsoNormal>Ricardo de Almeida Filó<span style='mso-tab-count:3'>                               </span>Nº.
090071-0</p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h1 style='text-align:justify'>INTRODUÇÃO</h1>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>A competição
entre empresas vem crescendo cada vez mais, tanto no mercado interno quanto no
mercado externo. Dois fatores principais contribuem para que as empresas pensem
em investir para ser competitiva.<span style="mso-spacerun: yes"> 
</span>Primeiro a estabilização da economia nacional e segundo, a abertura do
mercado de informática, onde temos mais empresas no ramo, aumentando a
concorrência e assim baixando custos. Paras sobreviver no mercado, as empresas
viram-se obrigadas a reduzir custos e aumentar os lucros de uma forma nunca
vista antes. Um dos meios utilizados é a automação.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><span
class=EstiloDeCorreioEletrnico15><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'>Existe uma diferença quando falamos de
mecanização, informatização e automação.<o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><span
class=EstiloDeCorreioEletrnico15><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><span
class=EstiloDeCorreioEletrnico15><b><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'>Mecanização</span></b></span><span
class=EstiloDeCorreioEletrnico15><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'> consiste simplesmente no uso de
máquinas para realizar trabalho, substituindo o esforço físico do homem.<o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><span
class=EstiloDeCorreioEletrnico15><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><span
class=EstiloDeCorreioEletrnico15><b><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'>Informatização</span></b></span><span
class=EstiloDeCorreioEletrnico15><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'> </span></span>consiste basicamente, no
uso da informática para facilitar algum trabalho<span
class=EstiloDeCorreioEletrnico15><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'>. Como exemplo, podemos citar o uso de
softwares editores de textos substituindo máquinas de escrever convencionais.<o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><span
class=EstiloDeCorreioEletrnico15><span style='mso-ansi-font-size:12.0pt;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-bidi-font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><b>Automação</b>
pode ser entendida como todo o esforço para transformar tarefas manuais
repetitivas em processos automáticos realizados por uma máquina, quase sem a
intervenção do homem. </p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>A tentativa de
mecanizar atividades realizadas pelo homem é extremamente remota, porém a
automação propriamente dita só ganhou destaque na sociedade a partir da segunda
metade do século XVIII, na Inglaterra, com a evolução industrial. Os sistemas totalmente
automáticos surgiram no início do século XX com a evolução da tecnologia,
quando foi possível contar com computadores, servomecanismos e controladores
programáveis. A partir de então os computadores tornaram-se o alicerce da
automação.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Em um exemplo
básico do dia-a-dia de como a automação está presente, podemos citar uma pessoa
que quer obter um extrato de sua conta bancária. Ao chegar a agência, o usuário
passa o seu cartão de banco e digita sua senha e a operação desejada. No caso a
operação desejada é a impressão do extrato bancário. Um computador lê as
informações de entrada e processa estas informações, imprimindo o extrato
bancário do usuário.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>A automação
pode ser classificada de acordo com suas diversas áreas de aplicação. </p>

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
12.0pt'>AUTOMAÇÂO COMERCIAL<o:p></o:p></span></h1>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Automação
comercial é a utilização de equipamentos para a integração, racionalização e
padronização de todas as rotinas operacionais da empresa, permitindo a
interação mais rápida e eficaz com fornecedores e clientes (internos e
externos). </p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>O uso da
informatização simplifica o trabalho ajudando a manter o controle de estoque,
controle de vendas e o controle financeiro. Em face disto muitos softwares,
hardwares e equipamentos periféricos surgiram.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>O uso da
automação comercial vem facilita não só o desenvolvimento das atividades da
empresa, como também melhora a forma de operação, percebida pelo cliente.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Estima-se que o
Brasil tenha investido US$1 bilhão até o ano de 2000 em automação comercial.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><span
style="mso-spacerun: yes"> </span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>O governo viu
na automação comercial um importante meio de fiscalização. Para isso foram
criadas regulamentações.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'>ICMS 24/86 - Convênio que
normatiza a utilização de máquinas registradoras;</p>

<p class=MsoNormal style='text-align:justify'>ICMS 122/94 - Alterações
realizadas no ICMS 24/86;</p>

<p class=MsoNormal style='text-align:justify'>ICMS 44/87 - Convênio que
normatiza a utilização de PDV's (Terminais de Ponto de Venda);</p>

<p class=MsoNormal style='text-align:justify'>ICMS 42/93 - Convênio que adota o
uso de memória fiscal;</p>

<p class=MsoNormal style='text-align:justify'>ICMS 47/93 - Convênio que
normatiza a homologação dos equipamentos fiscais;</p>

<p class=MsoNormal style='text-align:justify'>ICMS 82/93 - Convênio que
regulamenta a memória fiscal;</p>

<p class=MsoNormal style='text-align:justify'>ICMS 132/97 - Convênio que
regulamenta o uso de cupons fiscais;</p>

<p class=MsoNormal style='text-align:justify'>ECF 001/98 – Obriga o uso de
Emissores de cupons Fiscais ECF por todos os estabelecimentos de venda,
revenda, bens a varejo ou prestação de serviço;.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Apesar da boa
intenção do governo, a obrigatoriedade do uso do ECF não agradou aos lojistas
que encaram o uso do ECF como mais uma dificuldade em meio a crise que assola a
economia do país. Isto porque muitos não compreendem os benefícios que a
automação comercial pode proporcionar aos negócios. A automação acaba sendo
indispensável frente aos desafios impostos pela concorrência das grandes
cadeias de lojas.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Entre os
equipamentos que surgiram com a automação comercial para o comércio varejista
podemos citar:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l29 level1 lfo3;
     tab-stops:list 36.0pt'><b style='mso-bidi-font-weight:normal'>Caixas
     Registradoras<o:p></o:p></b></li>
</ul>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'>As caixas registradoras mecânicas e eletromecânicas
foram as precursoras da automação comercial, causando uma verdadeira revolução
na gestão do varejo. </p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'>Em seguida, acompanhando a evolução tecnológica,
surgiram as caixas registradoras eletrônicas. Sua função básica concentra-se na
operação de registro e totalização do valor das compras efetuadas. Através
delas, tanto o operador como o consumidor, podem acompanhar o que está sendo
registrado. Normalmente, ligados a elas existem dispositivos que armazenam
também o dinheiro e outras formas de pagamento, além de uma impressora do cupom
fiscal de caixa. Neste cupom estão listadas as quantidades e os preços dos
produtos comprados, permitindo ao consumidor que ele confira, se desejar, as
compras que fez. Em alguns modelos de maior porte, as caixas registradoras oferecem
também a opção de registro e fechamento do movimento diário, o que facilita ao
varejista a conferência das contas e do estoque. Este tipo de equipamento
apresenta como vantagem a obtenção de uma maior confiabilidade nas operações de
registro de dados e melhores perspectivas de manutenção, uma vez que o desgaste
apresentado é menor, se comparado aos equipamentos mecânicos utilizados
anteriormente.</p>

<p class=p1 align=center style='text-align:center;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p2 style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;
line-height:normal;mso-list:l29 level1 lfo3;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:12.0pt;font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'>Os PDV's (Pontos de Venda)</span></b><span
style='font-size:12.0pt'> <b style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>

<p class=p2 style='text-align:justify;line-height:normal'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Com a evolução da
tecnologia tornou-se possível a utilização de equipamentos mais sofisticados e
cujo princípio de funcionamento assemelha-se ao das caixas registradoras. Estes
novos equipamentos apresentam como vantagens principais uma maior flexibilidade
nas operações realizadas, possibilitando também a comunicação com outros equipamentos.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>São os chamados
PDV's, que nada mais são do que computadores cuja função é voltada para as
tarefas do caixa, apresentando características que tornam sua utilização
extremamente vantajosa em aplicações de automação Comercial, destacando-se as
seguintes:<o:p></o:p></span></p>

<p class=p4><span style='font-size:12.0pt'>Registro de vendas, quantidades e
preço com o código dos produtos;<o:p></o:p></span></p>

<p class=p4><span style='font-size:12.0pt'>Totalização de uma venda, de acordo
com a necessidade;<o:p></o:p></span></p>

<p class=p4><span style='font-size:12.0pt'>Visores especiais, programáveis de
acordo com o usuário;<o:p></o:p></span></p>

<p class=p4><span style='font-size:12.0pt'>Teclado próprio, programável de
acordo com a necessidade;<o:p></o:p></span></p>

<p class=p4><span style='font-size:12.0pt'>Totalizações diárias (relatórios por
produtos, quantidades, seção, etc.);<o:p></o:p></span></p>

<p class=p4><span style='font-size:12.0pt'>Impressora de cupons com melhor
resolução, permitindo a inserção de imagens;<o:p></o:p></span></p>

<p class=p4 style='margin-left:21.3pt;text-indent:0cm'><span style='font-size:
12.0pt'>Facilidade de ligação com outros periféricos (impressoras de notas
fiscais, scanners, impressoras de cheques, etc.);<o:p></o:p></span></p>

<p class=p4><span style='font-size:12.0pt'>Facilidade de ligação em rede,
melhorando o controle fora da área do caixa;.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;tab-stops:37.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Encontram-se
disponíveis no mercado diversos modelos de PDV's, aplicados de acordo com as
necessidades. Várias também são as opções conforme as características do
mostrador (monitor), teclado, disposição da caixa de dinheiro, interfaces
disponíveis, impressoras de cupons, entre outras. Dependendo da disponibilidade
e do interesse de cada varejista são fornecidas, inclusive, soluções modulares,
ou seja, o varejista adquire as partes que lhe interessam no momento, havendo a
possibilidade de uma expansão posterior.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os custos dos
PDV's dependem, basicamente, dos modelos e módulos que estarão presentes na
opção desejada.<o:p></o:p></span></p>

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
style='font-size:12.0pt;font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'>Preenchedores de Cheques<o:p></o:p></span></b></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Este equipamento
periférico nada mais é do que uma impressora inteligente, capaz de interpretar
os valores dos cheques e preenchê-los corretamente com o total por extenso,
além de informações de localidade e data de emissão. É um equipamento que pode
ser integrado a um PDV, cuja operação será facilitada, uma vez que o total a
ser preenchido é transferido automaticamente do PDV para o preenchedor,
evitando os erros de digitação.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os preenchedores
de cheques trouxeram inúmeras vantagens: aumento da confiabilidade no
preenchimento dos cheques, na conferncia da totalização e na diminuição do
tempo gasto na espera. Com isso, tanto os consumidores como os varejistas
sairam ganhando.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p2 style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;
line-height:normal;mso-list:l29 level1 lfo3;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:12.0pt;font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'>A</span></b><span style='font-size:12.0pt'> <b
style='mso-bidi-font-weight:normal'>Codificação dos Produtos<o:p></o:p></b></span></p>

<p class=p2 style='text-align:justify;line-height:normal'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>O processo de
automação deve ter como objetivos principais o aumento da produtividade e a melhoria
na qualidade do atendimento aos consumidores. Para facilitar o atendimento aos
clientes existe um procedimento em que cada produto recebe um código
pré-definido para melhorar sua caracterização e classificação dentro da loja.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Existem várias
maneiras para se codificar um produto.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Na primeira delas
é atribuído um nome próprio para cada produto. Apesar de ser um procedimento
fácil de ser realizado, por já existirem normas comerciais para cada produto,
ele ainda apresenta alguns problemas na entrada do código no computador,
dificultando a classificação posterior por categoria do produto. Uma segunda
forma de codificação é a utilização de códigos numéricos para cada produto,
onde cada um recebe um código próprio, que muitas vezes pode até coincidir com
o código utilizado pelo fabricante. Nestes códigos existem várias informações
sobre o produto: procedência, fabricante, tipo de produto, tamanho, quantidade,
entre outras.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Este tipo de
codificação apresenta como desvantagem, a necessidade de o operador do caixa
digitar o código dos produtos, tornando a tarefa demorada e sujeita a erros.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Uma terceira forma
de codificação dos produtos diz respeito a utilizarmos uma forma de codificação
que permita ao computador, a partir de um instrumento qualquer de leitura, identificar
automaticamente o produto com o qual se está trabalhando. Neste caso, existem
algumas formas possíveis.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A primeira delas é
o reconhecimento de caracteres, onde um reconhecedor faz a leitura e tradução
dos dados para informações reconhecidas pelo computador. Este método não foi
muito desenvolvido por problemas de padronização e do próprio reconhecimento
dos caracteres expostos.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Outra forma
utilizada é a de codificar os dados a partir de barras verticais representando
o código numérico característico de um determinado produto. Assim, cada produto
recebe uma codificação em barras, que é facilmente lida por um leitor óptico e
convertida em informações que podem ser processadas pelo computador.<o:p></o:p></span></p>

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
style='font-size:12.0pt;font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'>Código de Barras<o:p></o:p></span></b></p>

<p class=p2 style='text-align:justify;line-height:normal'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Juntamente com a
utilização de caixas eletrônicos e com o desenvolvimento da leitura óptica,
outro instrumento que vem contribuindo significativamente para o
desenvolvimento da automação varejista é o código de barras. Sua utilização tem
possibilitado a sistematização de inúmeras tarefas dentro do processo de
automação.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Trata-se de um
sistema que consiste basicamente em um conjunto de barras, representando 0's e
1's, formando uma combinação que permite a um leitor óptico (scanner)
reconhecer as características do produto, tais como procedência, tipo de
produto, marca, tamanho, entre outras.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:13.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Deste modo,
através de um simples processamento de informações, tem-se nas mãos um sistema
de reconhecimento de produtos vendidos nos caixas, traduzindo-se em valiosas
informações que auxiliam no processo de tomada de decisões.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:13.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Atualmente sao
utilizados alguns códigos que são padrões. No Brasil é utilizado o código EAN
cuja gestão é feita pela EAN - Brasil. Cada fomecedor tem o seu próprio código
inscrito na EAN - Brasil e nele estão contidas as informações sobre o país de
onde provém o produto, a empresa fabricante e o produto em si. Essa nova
tecnologia tem exercido um grande impacto sob o ponto de vista dos
consumidores, existindo, basicamente, quatro fatores influenciadores,
diretamente percebidos por eles.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p2 style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><span style="mso-spacerun:
yes"> </span>- O primeiro diz respeito aos serviços prestados no caixa, onde
essa tecnologia trouxe maior confiabilidade na operação realizada, diminuindo
os erros de digitação e o tempo gasto nos caixas e nas filas.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly;tab-stops:16.0pt 37.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=p2 style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><span style="mso-spacerun:
yes"> </span>- A segunda modificação percebida refere-se aos recibos emitidos
pelos caixas, que passaram a ser discriminados, permitindo que o<b
style='mso-bidi-font-weight:normal'> </b>consumidor confira, item por item, o<b
style='mso-bidi-font-weight:normal'> </b>que comprou.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly;tab-stops:16.0pt 37.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=p2 style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><span style="mso-spacerun:
yes"> </span>- O terceiro fator está relacionado a alguns beneficios adicionais
em termos do preço final dos produtos, onde é percebido um impacto de
diminuição dos preços, provocado pelo aumento da produtividade da operação na
loja.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly;tab-stops:16.0pt 37.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=p2 style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><span style="mso-spacerun:
yes"> </span>- O último fator refere-se ao problema dos preços que não
necessariamente estão marcados diretamente nos produtos, podendo encontrar-se
nas prateleiras. Esse fator pode ser visto como um inibidor da seleção de lojas
por parte dos consumidores, devido a dificuldade na sua utilização. Porém,
outros fatores já citados, principalmente aqueles relacionados a confiabilidade
e a rapidez nos caixas podem atuar como fatores compensadores, anulando uma
primeira impressão desfavorável.<o:p></o:p></span></p>

<p class=p2 style='text-align:justify;line-height:13.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:13.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Além dos quatro
fatores mencionados existem ainda fatores que não são percebidos diretamente
pelos consumidores, mas que possuem um forte impacto sobre o composto de uma
loja a eles oferecido.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:13.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>O varejista, ao
utilizar a tecnologia do código de barras, ligada a dos PDV's integrados terá,
num reduzido espaço de tempo, um controle mais apurado sobre os resultados
obtidos pela sua loja. Desta forma, ele poderá reconfigurar, de maneira mais
rápida, o composto de produtos oferecidos, adaptando-o as necessidades dos
consumidores. Esta utilização também possibilita ao varejista, repôr os seus
estoques nas prateleiras de maneira mais eficiente, a um custo mais reduzido.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:13.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Outro importante
fator que deve ser citado, relacionado a utilização do código de barras no
varejo, diz respeito diretamente a comunicação com o consumidor. Combinando-se
leitores ópticos com equipamentos multimídia, obtém-se como resultado uma
eficiente maneira de suprir os consumidores com informações adicionais sobre os
produtos e sobre a loja. Como exemplo é citado o caso de sistemas de informação
de preço, onde o consumidor &quot;passa&quot; o produto por um scanner e
visualiza imediatamente algumas características desse produto e seu respectivo
preço.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Para o varejista
que está pretendendo implantar o uso de código de barras é importante que se
faça algumas recomendações.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Verifique
inicialmente quantos fornecedores de seus produtos comercializados ja possuem
esta caracterização. Se alguns deles ainda não se utilizam deste sistema é
importante que seja prevista alguma forma de emitir as etiquetas com estes
códigos, caracterizando, deste modo, cada um dos produtos oferecidos aos
consumidores, para facilitar as operações no caixa.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>No caso de
varejistas que possuem produtos vendidos em quantidades variadas, como tecidos
por exemplo, é importante verificar como pode ser operacionalizado o registro
destes produtos no caixa. Em caso de dúvida consulte alguns fornecedores, que
poderão lhe oferecer soluções interessantes. Caso o varejista seja o
responsável direto pela impressão das etiquetas com os códigos de barras, é
necessário que sejam tomados alguns cuidados básicos. É importante que a
impressora utilizada tenha resolução suficiente para que o leitor óptico possa
entender claramente o código, evitando com isso problemas na sua interpretação.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A qualidade da
etiqueta e da sua impressão, são itens essenciais neste processo. Alguns
fornecedores oferecem opções quanto a impressoras especiais para a utilização
de etiquetas com códigos de barras. Por isso verifique antes se a impressora
que você possui é apropriada para esta utilização. Abaixo segue um exemplo de
código usado.<o:p></o:p></span></p>

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

<p class=MsoNormal>789 – Brasil (País)<span style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>

<p class=MsoNormal>4401 – Philips (fabricante)</p>

<p class=MsoNormal>00004 – Fita de vídeo T-120 S-2 (Produto)</p>

<p class=MsoNormal>1 – Digito verificador</p>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p2 style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;
line-height:normal;mso-list:l29 level1 lfo3;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:12.0pt;font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'>Os Leitores Ópticos<o:p></o:p></span></b></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A codificação
através das barras não terá nenhuma função se não houver um instrumento que
possa &quot;capturar&quot; as informações contidas nessas barras. Para que isso
ocorra, ou seja, para que exista esta interface, onde as informações sobre as
características de cada produto possam ser &quot;capturadas&quot;, codificadas
em um código de barras e transformadas em informações inteligíveis por um
computador ou um PDV, é necessário um instrumento de leitura óptica. Trata-se
de um equipamento cujo funcionamento esta baseado num conjunto de luzes que
podem ou não se refletir, de acordo com a presença ou ausência das barras.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A partir daí, a
informação é transformada em uma linguagem que o computador entenda e possa
processar, realizando a atribuição de preço ao produto, registrando a compra e
dando baixa no estoque, entre outras operações possíveis.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os leitores
ópticos, ou &quot;scanners&quot;, como são mais habitualmente conhecidos, são
basicamente emissores de luz, que utilizam ccd's ou laser e que, a partir da
reflexão desta luz, num conjunto de barras de duas cores diferentes, com
características distintas, decodifica a informação, disponibilizando-a para um
processamento posterior.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os scanners podem
ser móveis ou fixos.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;line-height:normal'><u><span
style='font-size:12.0pt'>Scanners móveis<o:p></o:p></span></u></p>

<p class=p3 style='margin-left:38.0pt;text-align:justify;line-height:normal'><span
style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>A leitura do
código é feita manualmente, através de duas formas diferentes:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'>1<span style='mso-tab-count:1'>          </span>Scanner
de contato: na forma de uma caneta, possui na extremidade um receptor emissor
de luz. A leitura do código acontece quando a ponta da caneta é deslocada sobre
o código. Seu custo é baixo, mas apresenta alguns problemas quanto à leitura,
dependendo da inclinação e da velocidade com que se usa a caneta.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly;tab-stops:19.0pt 37.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'>2.<span style='mso-tab-count:1'>         </span>Scanner
de aproximação: com ele não é necessário haver contato direto com o código,
basta uma aproximação mínima. Como vantagem ele diminui os erros na operação e
pode ser usado em superfícies irregulares. Pelas características que apresenta
é um equipamento de custo mais elevado.<o:p></o:p></span></p>

<p class=p2 style='text-align:justify;line-height:normal'><span
style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p2 style='text-align:justify;line-height:normal'><u><span
style='font-size:12.0pt'>Scanners fixos<o:p></o:p></span></u></p>

<p class=MsoNormal style='text-align:justify;tab-stops:37.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Além
dos móveis, existem também os scanners fixos. Neles, o reconhecimento do código
ocorre pela sua passagem em frente a um feixe de luz. São aparelhos mais caros,
mas apresentam maiores facilidades: rapidez, precisão e diminuição dos erros de
leitura são as principais.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Avaliando
as opções disponíveis, o varejista pode se defrontar com uma delicada questão:
qual dos equipamentos é o mais indicado para a sua aplicação?<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Para
obter a resposta, devem ser considerados, antes de mais nada, dois pontos
básicos:<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><span style='mso-tab-count:1'>            </span><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'>-<span style='mso-tab-count:1'>           </span>analisar
o volume de recursos disponível para a automação dos processos da loja, em
termos de equipamentos;<o:p></o:p></span></p>

<p class=p4 style='margin-left:0cm;text-align:justify;text-indent:0cm;
line-height:normal;tab-stops:18.0pt 37.0pt'><span style='font-size:12.0pt'>-<span
style='mso-tab-count:2'>           </span>verificar o tipo de produto que será
manipulado no registro do caixa.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Na
primeira situação o montante de recursos disponível poderá se constituir num
fator limitante para o uso de equipamentos mais sofisticados.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>No
segundo caso, a forma de manipulação e a localização das etiquetas e/ou código
de barras nos produtos poderá vir a determinar o tipo de scanner a ser
utilizado.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Caso
os produtos sejam de fácil manipulação, a escolha poderá recair em qualquer um
dos tipos de scanners disponíveis.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Havendo
a necessidade de leitura dos códigos em grande velocidade, no caso de lojas com
alta rotação de produtos, o scanner fixo é o mais apropriado. Se os produtos
forem de difícil manipulação, pesados ou de grande volume, Os scanners móveis
(manuais) são os mais indicados.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A
escolha do scanner mais apropriado dependerá sempre da aplicação específica que
ele terá em qualquer tipo de negócio.<o:p></o:p></span></p>

<p class=p5 align=center style='margin-left:0cm;text-align:center;text-indent:
0cm;line-height:normal'><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p5 style='text-align:justify;text-indent:-18.0pt;line-height:normal;
mso-list:l29 level1 lfo3;tab-stops:18.0pt list 36.0pt'><![if !supportLists]><span
style='font-size:12.0pt;font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'>As Balanças Eletrônicas<o:p></o:p></span></b></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:42.55pt;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>As
balanças eletrônicas com emissão de etiquetas em código de barras ou com o
preço do produto impresso fazem parte do conjunto de equipamentos periféricos
usados na Automação Comercial.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Estas
são capazes de emitir, automaticamente, etiquetas com informações sobre produtos
não codificados, que necessitam de pesagem para a fixação do preço. Isso é
muito útil, por exemplo, no caso da compra de frutas e verduras, onde o
comprador prefere, ele mesmo, escolher os produtos e as quantidades que serão
compradas e não adquirí-los já embalados.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Nesse caso, as
etiquetas tem duas funções principais. A primeira diz respeito a
cornpatibilização dos produtos vendidos ao sisterna de coleta de dados
utilizado no caixa.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A segunda se
refere à agilização no atendirnento da pesagern de alimentos, já que essa
operação tem sua velocidade aumentada pela utilização das balanças. As
características das balanças irão depender, essencialmente, das aplicações a
que se destinarem, principalmente no que diz respeito à capacidade de peso e a
cornunicação com outros sistemas, para a troca de infomações.<o:p></o:p></span></p>

<p class=p2 style='text-align:justify;line-height:normal'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p2 style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;
line-height:normal;mso-list:l29 level1 lfo3;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:12.0pt;font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'>A Transferência Eletrônica de Fundos<o:p></o:p></span></b></p>

<p class=p2 style='text-align:justify;line-height:normal'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Grande parte das
transações que o varejo realiza envolvemn o sistema bancário. Diariamnente o
varejista convive com ele, seja no recebimento de pagamentos, seja para saldar
dívidas, faturas, duplicatas e até mesmo no caso dos movimentos que realiza.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Para agilizar este
fluxo já existem disponíveis equipamentos que possibilitam o uso de formas de
pagamento automatizadas. Para se ter uma idéia das vantagens que esses equipamentos
trouxeram, imagine o número de cheques que você recebeu em troca das
mercadorias vendidas. Agora, tente percorrer mentalmente o caminho que estes
cheques fizeram até se transformarem em dinheiro, depositado na conta da sua
loja. Você não concorda que seria muito mais fácil e menos dispendioso realizar
esta operação diretamente?<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A Transferência
Eletrônica de Fundos foi desenvolvida justamente como uma solução para este
tipo de problema. Através dela os pagamentos podem ser efetuados através de
cartões magnéticos, (de bancos ou de crédito) e cuja operação requer,
normalmente, uma linha telefônica disponível e aparelhos especiais que cuidam
da comunicação.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os serviços de
transferência são oferecidos por prestadores que se encarregam de toda a
transferência do dinheiro entre bancos e entre contas correntes. O custo destas
operações limita-se, basicamente, ao aluguel do equipamento ou ao número de
consultas realizadas.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Por ser uma
solução altamente vantajosa para todas as partes envolvidas, aconselha-se a fazer
contato com alguns fornecedores para verificar o custo/beneficio desta solução.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os consumidores
serão beneficiados na medida em que não haverá a necessidade que levem dinheiro
ou cheques para realizarem suas compras. Com isso, haverá um aumento na confiabilidade
da operação e uma diminuição no tempo gasto para realizá-la.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>No caso dos
varejistas, eles perceberão uma diminuição nos custos das transações e evitarão
problemas com cheques devolvidos por razões diversas eliminando também a
necessidade de consultas sobre referências bancárias para aprovarem os
pagamentos.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os bancos terão
diminuidos os custos de compensação e de transação de cheques, facilitando com
isso a vida dos seus clientes, consumidores e varejistas.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Existem,
basicamente, duas formas para que se realizem as transações eletrônicas.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;text-indent:1.0cm;
line-height:14.0pt;mso-line-height-rule:exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A primeira delas
requer a utilização do cartão magnético do banco do cliente. Neste caso, Os
débitos são feitos automaticamente na conta corrente dos consumidores. Algumas
administradoras oferecem como opção um prazo para a compensação do pagamento,
como se fosse um cheque. Com isso é evitado o incômodo que o débito caia
imediatamente na conta do consumidor. Outras oferecem opções semelhantes ao do
cheque pré-datado, fixando datas para os débitos dos valores dos pagamentos.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A segunda forma
para que a transação seja realizada implica na utilização do cartão de crédito
do cliente. Neste caso, existem algumas regras de pagamento e recebimento das
contas, realizadas em datas pré-fixadas.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>A grande vantagem
oferecida pela utilização do sistema eletrônico refere-se a aprovação do
cartão, que ocorre &quot;on line&quot;, sem a necessidade de consulta as listas
de cartões bloqueados.<o:p></o:p></span></p>

<p class=p2 style='text-align:justify;line-height:normal'><b style='mso-bidi-font-weight:
normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=p2 style='margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;
line-height:normal;mso-list:l29 level1 lfo3;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:12.0pt;font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt'>Troca Eletrônica de Dados (EDI)<o:p></o:p></span></b></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'><b
style='mso-bidi-font-weight:normal'><span style="mso-spacerun: yes"> </span></b>A
utilização da tecnologia da comunicação de dados gerou para o varejo outra
interessante aplicação. Trata-se do EDI (Electronic Data Interchange),
responsável pela troca eletrônica de dados bidirecional.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Pode-se dizer
que a Troca Eletrônica de Fundos é uma forma particular do EDI aplicada ao
sistema bancário.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Deste modo o
lojista pode estabelecer uma comunicação direta com seus fornecedores,
diminuindo o tempo de colocação de pedidos e no tempo gasto para que eles sejam
processados, reduzindo, consequentemente, o tempo envolvido no processo de
reposição de estoques das empresas varejistas. Esta tecnologia abriu novas
perspectivas aos varejistas, permitindo-lhes a comunicação completa de todo o
seu sistema de dados, desde o caixa até o seu fomecimento.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Para que este
tipo de sistema seja possível, existem duas formas principais:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'>1.<span style='mso-tab-count:
1'>         </span>Troca de dados entre a matriz e as filiais de uma mesma
loja, feita através de uma linha telefônica e um modem, em determinados
períodos do dia.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'>2.<span style='mso-tab-count:
1'>         </span>A troca eletrônica de dados assume um papel de
intercomunicador entre empresas (fomecedores e compradores) permitindo também a
comunicação com vários fomecedores, quando for possível a utilização de um
padrão de comunicação comum.</p>

<p class=MsoNormal style='text-align:justify;tab-stops:19.0pt 37.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Este tipo de
equipamento permite também a comunicação com bancos possibilitando operações de
controle de cobranças de duplicatas e de depósitos. Esta tecnologia também é
acessível ao empresario do pequeno varejo, onde ele pode ligar sua filial a
matriz, através da comunicação de dados via rede telefônica. Com isso ele
estará facilitando o controle geral, centralizando suas operações num único
ponto, sem que sejam gerados custos adicionais elevados.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l29 level1 lfo3;
     tab-stops:list 36.0pt'><b style='mso-bidi-font-weight:normal'>Computadores
     e Redes de Computadores<o:p></o:p></b></li>
</ul>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Através do
desenvolvimento da tecnologia e da redução em seus preços, cada vez mais os
computadores estão se tomando acessíveis aos varejistas. Em suas mais diversas
opções os computadores estao alterando significativamente as atividades do
varejo através da velocidade de processamento, da facilidade de acesso aos
dados e da capacidade de armazenamento que possuem, principalmente nas
atividades de suporte, como controle de estoques, recebimento de mercadorias,
planejamento de exposição de produtos, simulações de elasticidade em vendas, em
relação a promoções, propaganda e displays, entre outras.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>Em varejos de
pequeno porte e com baixa rotação de produtos, o computador pode ser utilizado
também como um caixa eletrônico. Nos períodos de ociosidade, ele assume o papel
de suporte as atividades de Retaguarda, gerando relatórios de controle sobre
produtos, estoques, financeiro, etc. É importante ressaltar que estas tarefas
não sejam realizadas em períodos onde existam clientes na loja, caso contrário,
acabará tornando o processo de atendimento mais demorado, gerando mais
problemas do que soluções. Outra forma bastante difundida da utilização da
tecnologia a serviço do varejista são as LAN's (Local Area Network), ou Redes
Locais de Computadores. Neste caso, a troca de informações ocorre de modo mais
efetivo.</p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm'>As redes são as
responsáveis pela integração dos PDV's e scanners com o sistema central de
processamento da empresa, possibilitando as operações de verificação e controle
sobre os caixas e sobre o resultado geral obtido pela loja. A dimensão criada
para o varejista tornou-se agora mais abrangente pois, além de permitir o
controle direto dos produtos nos pontos-de-venda, permitiu a ele ter ainda um
feedback das informações, interagindo com os consumidores e criando uma nova
comunicação no caixa, na relação com os atendentes e com os consumidores. Essas
informações interessam tanto aos varejistas como também aos seus fornecedores.</p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>O que se percebe,
na prática, é que as redes de computadores são as grandes responsáveis pela
diminuição do ciclo de controle sobre as mercadorias. A utilização desta
tecnologia nao é percebida diretamente pelos consumidores, uma vez que ela está
mais relacionada com as atividades de suporte do varejo. Mais a frente
tornaremos a explicar o sistema de funcionamento de redes mais detalhadamente.<o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;line-height:normal'><span
style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p3 style='margin-left:0cm;text-align:justify;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt'>Os Terminais
Multimídia<o:p></o:p></span></b></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Dentro do processo
de estabelecimento de uma comunicacao mais eficiente com os clientes de uma
loja, estão sendo utilizados os terminais multimídia, ou São Tomés, como sao
mais conhecidos.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Estes terminais
tem acoplados a eles um sistema de leitura óptica (scanner), um monitor
colorido, um computador e alto-falantes, que possibilitam ao consumidor ter
acesso a informações sobre determinados produtos no que diz respeito a preços,
promoções, localização desses produtos, formas de pagamento e apresentação de
lançamentos.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Para que essa
tecnologia possa ser utilizada é necessário que exista uma infra­estrutura
tecnológica já organizada, uma vez que estes terminais normalmente estão
ligados na rede de computadores, que fomece as informações necessárias para que
a conexão seja realizada.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os monitores podem
ser utilizados nos caixas como uma forma adicional de comunicação com o
consumidor, onde são acoplados ao PDV, fornecendo ao cliente informações sobre
alguns produtos, sobre o subtotal da sua compra e sobre a totalização dessa
compra. Além disso, pode transmitir também algumas informações bastante úteis
quando o PDV estiver fora de uso.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Os terminais
multimídia podem também ser utilizados isoladamente na loja, com a finalidade
de fornecer aos clientes informações diversas, tais como promoções, descontos,
localização de produtos, etc., necessitando, porém, que essas informações sejam
previamente programadas.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Trata-se de uma
tecnologia bastante interessante, oferecendo inúmeras possibilidades de
interação com os clientes da loja, mas que ainda possui um custo um pouco
elevado, tornando-se de difícil acesso ao pequeno varejo, pelo menos
temporariamente.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;text-indent:1.0cm;line-height:14.0pt;
mso-line-height-rule:exactly'><span style='font-size:12.0pt'>Como os preços dos
equipamentos de informática estão sofrendo reduções significativas, futuramente
os terminais multimídia podem vir a tornar-se uma opção bastante interessante
para os varejistas dos pequenos estabelecimentos.<o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=p1 style='text-align:justify;line-height:14.0pt;mso-line-height-rule:
exactly'><span style='font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><b>Vantagens da Automação
comercial<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Agilidade e qualidade ao atendimento</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Confiabilidade, eliminando erros de digitação e contagem</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Controle de estoque, entrada de material, armazenagem e
distribuição, reposição, transferência de mercadorias entre setores</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Redução de estoques</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Redução de custos financeiros</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Conhecimento melhor do consumidor, melhorando o atendimento e
ganhando a credibilidade do cliente</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Agilidade na atualização de dados</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Reaproveitamento de pessoal, recolocação de funcionários</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l13 level1 lfo1;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Status para o estabelecimento e para o funcionário.</p>

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
  mso-line-height-rule:exactly'><b><span style='font-size:12.0pt'>Função<o:p></o:p></span></b></p>
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
  style='font-size:12.0pt'>leitor de código de barras<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt;height:17.0pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>identificar código de produtos<o:p></o:p></span></p>
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
  style='font-size:12.0pt'>imprimir cupom fiscal e imprimir código de barras<o:p></o:p></span></p>
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
  style='font-size:12.0pt'>permitir a comunicação entre empresas (fornecedores
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
  style='font-size:12.0pt'>melhorar as operações envolvidas na cadeia logística
  de comercialização de produtos<o:p></o:p></span></p>
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
  style='font-size:12.0pt'>gerência de categoria de produtos<o:p></o:p></span></p>
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
  style='font-size:12.0pt'>possibilita o suprimento contínuo de mercadorias
  pelo fornecedor com mínima interferência d ocliente<o:p></o:p></span></p>
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
  style='font-size:12.0pt'>Terminais multimídia<o:p></o:p></span></p>
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
  style='font-size:12.0pt'>fornece informações sobre produtos comercializados<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>Dinheiro eletrônico<o:p></o:p></span></p>
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
  style='font-size:12.0pt'>cartão com um chip que permite introduzir
  informações sobre uma conta corrente<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>TEF (Transferência eletrônica de fundos)<o:p></o:p></span></p>
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
  style='font-size:12.0pt'>permitir ao usuário pagar suas contas à um
  estabelecimento comercial com dinheiro que sai eletronicamente de sua conta<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width=171 style='width:102.75pt;border:solid windowtext .5pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>Coletores de rádio-frequência<o:p></o:p></span></p>
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
  style='font-size:12.0pt'>terminal portátil que transforma sinal de rádio em
  elétrico<o:p></o:p></span></p>
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
  style='font-size:12.0pt'>programas que atendem a área administrativa da
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
  style='font-size:12.0pt'>específicos<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>programas de automação de front office ou de
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
  style='font-size:12.0pt'>gerenciamento de gôndolas<o:p></o:p></span></p>
  </td>
  <td width=365 style='width:218.9pt;border-top:none;border-left:none;
  border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=p1 style='line-height:14.0pt;mso-line-height-rule:exactly'><span
  style='font-size:12.0pt'>programas voltados à administrar espaços em gôndolas
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
style='font-size:14.0pt;mso-bidi-font-size:13.0pt;font-family:"TimesNewRoman\,Bold"'>AUTOMAÇÃO
INDUSTRIAL<o:p></o:p></span></b></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt;font-family:"TimesNewRoman\,Bold"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt;font-family:"TimesNewRoman\,Bold"'>O que é
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
CAD – <i>Computer Aided Design </i>(Projeto Auxiliado por Computador) auxiliam
a criação, modificação, análise ou otimização de um projeto. O software desses
sistemas é baseado em interface gráfica orientada ao usuário. Podem ser
desenvolvidos prjetos mecânicos, elétricos, eletrônicos, de engenharia civil, aeronáutica,
naval, etc.<o:p></o:p></span></p>

<p class=MsoBodyTextIndent style='text-align:justify;text-indent:1.0cm'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent style='text-align:justify;text-indent:1.0cm'>A
dimensionalidade se refere ao tipo de geometria processada e armazenada num
sistema CAD. Com relação a essa característica os sistemas CAD podem ter as
seguintes representações:</p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b><i><span style='mso-bidi-font-size:13.0pt'>- Sistemas
de duas dimensões</span></i></b><i><span style='mso-bidi-font-size:13.0pt'> </span></i><span
style='mso-bidi-font-size:13.0pt'>(2D), equivalente ao desenho em papel. Cada
ponto é representado por dois números (p. ex. a distância horizontal em relação
à borda esquerda do papel e a distância vertical da borda inferior do papel).
Há representação também para segmentos, círculos, arcos e outras curvas planares.
Os primeiros sistemas CAD baseavam-se em representação 2D. Ainda hoje, apesar
do desenvolvimento de sistemas 3D, a representação em 2D é melhor para realizar
as atividades de documentação e detalhamento final de um projeto. Há limitações
sobretudo na visualização dos objetos.<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><i><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></i></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b><i><span style='mso-bidi-font-size:13.0pt'>- Sistemas
de duas e meia dimensões</span></i></b><i><span style='mso-bidi-font-size:13.0pt'>
</span></i><span style='mso-bidi-font-size:13.0pt'>(2 ½ D) , que acrescentam às
representações 2D a representação de objetos tridimensionais tais como uma
seção de corte arbitrária. Podem ser calculadas propriedades de objetos
sólidos, tais como o volume.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b><i><span style='mso-bidi-font-size:13.0pt'>- Sistemas
de três dimensões</span></i></b><i><span style='mso-bidi-font-size:13.0pt'> </span></i><span
style='mso-bidi-font-size:13.0pt'>(3D), <b><i>wire frame</i></b>, que utilizam
segmentos de reta, círculos, arcos e outras curvas em três dimensões e que
trabalham com múltiplas visões (de qualquer direção arbitrária) e perspectiva.
A representação de um paralelepípedo, por exemplo, é feita através de suas 12
bordas.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b><i><span style='mso-bidi-font-size:13.0pt'>- Sistemas
de três dimensões </span></i></b><span style='mso-bidi-font-size:13.0pt'>(3D), <b><i>superfícies</i></b>,
onde cada sólido é representado por seus limites, que consistem em superfícies
planares, cilíndricas, cônicas, esféricas. É a representação mais utilizada no
projeto de automóveis (sobretudo parte externa e painel).<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b><i><span style='mso-bidi-font-size:13.0pt'>- Sistemas
de três dimensões </span></i></b><span style='mso-bidi-font-size:13.0pt'>(3D), <b><i>sólidos</i></b>,
que trabalham de forma similar com a utilização de blocos para construir um
sistema sólido real. Possuem um conjunto de objetos primitivos e podem mover
(translação, rotação) estes objetos, além de combiná-los usando um conjunto de
operações básicas (união, intersecção, diferença). Estes sistemas permitem a
melhor visualização.<o:p></o:p></span></p>

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
méritos de cada dimensionalidade.<o:p></o:p></span></p>

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
  style='mso-bidi-font-size:13.0pt'>Mérito<o:p></o:p></span></b></p>
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
  style='mso-bidi-font-size:13.0pt'>Documentação<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Detalhamento<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Controle numérico 2D<b><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr>
  <td width=377 valign=top style='width:225.9pt;border:solid windowtext .5pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>2 ½ D<b><o:p></o:p></b></span></p>
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
  style='mso-bidi-font-size:13.0pt'>Extensão simples do 2D<b><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr>
  <td width=377 valign=top style='width:225.9pt;border:solid windowtext .5pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>3D superfícies<b><o:p></o:p></b></span></p>
  </td>
  <td width=377 valign=top style='width:225.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Remoção de linhas escondidas<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Controle numérico multieixo<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Especificações de superfícies<b><o:p></o:p></b></span></p>
  </td>
 </tr>
 <tr>
  <td width=377 valign=top style='width:225.9pt;border:solid windowtext .5pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>3D sólidos <b><o:p></o:p></b></span></p>
  </td>
  <td width=377 valign=top style='width:225.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext .5pt;border-right:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 3.5pt 0cm 3.5pt'>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Visualização<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Análise de elementos finitos<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
  style='mso-bidi-font-size:13.0pt'>Análise dinâmica<b><o:p></o:p></b></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>Uma tendência
dos sistemas CAD modernos é a inclusão de características de topologia, além
das de geometria. Entende-se por <b>geometria </b>a posição, orientação e o
tamanho de cada elemento geométrico no projeto de um objeto. <b>Topologia </b>é
a conectividade entre esses elementos geométricos.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>Os <b>sistemas
orientados apenas a geometria </b>(sistemas CAD clássicos) armazenam apenas a
geometria final.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>Os <b>sistemas
paramétricos </b>trabalham com topologia, armazenando os comandos usados pelo
usuário para definir a geometria. Por exemplo: quando um usuário especifica que
um arco pode ser criado com um dado raio, tangente ao final de um segmento
previamente definido e com um dado ângulo incluso, pode ser armazenada a
seqüência de operações executada para construção da geometria. Se o segmento
for modificado o sistema paramétrico pode recuperar a construção do arco
(apesar de ter sido alterada a geometria, que fará com que o ângulo interno
seja diferente).<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>Os <b>sistemas
variacionais </b>são ainda mais avançados, pois armazenam a topologia tanto
quanto a geometria. Por exemplo, um usuário entra com um arco, especifica que
possui um dado raio, tangente ao final de um segmento previamente definido e
com um dado ângulo. O sistema variacional guarda não somente a localização dos
pontos e do arco, mas também as regras para o arco. Se, mais tarde, o usuário
decide trocar a regra do ângulo interno por uma regra de tangência com outro
segmento, ele deve apenas selecionar a regra do ângulo incluso e trocá-la por
uma regra de tangência apropriada. O sistema recupera as outras regras sobre o
arco e automaticamente recalcula a geometria.<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'>CAID<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>Uma
especialidade de sistemas CAD tem se desenvolvido nos últimos anos, para
suportar as características especiais das atividades de concepção inicial de
modelos, antes do projeto propriamente dito: os sistemas CAID – <i>Computer
Aided Industrial Design </i>(Desenho Industrial Auxiliado por Computador). Os
recursos gráficos são, também aqui, muito utilizados, contando ainda com a
inclusão de recursos sofisticados de tratamento de cores e sombras, para
estudos da aparência do futuro produto.<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'>CAE<o:p></o:p></span></b></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>As atividades
de análise de engenharia são auxiliadas pelos sistemas CAE – <i>Computer Aided
Engineering </i>(Engenharia Auxiliada por Computador). Tendo-se desenvolvido um
projeto em CAD (mesmo que sem o detalhamento final), é possível realizar vários
estudos baseados na geometria estabelecida, acrescida com informações
adicionais relevantes para a análise a ser realizada (p.ex. tipo e densidade do
material, capacidade térmica, etc.). A análise pode envolver:<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l21 level1 lfo4;tab-stops:list 36.0pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-size:
13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>cálculo de
esforços;<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l21 level1 lfo4;tab-stops:list 36.0pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-size:
13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>cálculos de
transferência de calor;<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l21 level1 lfo4;tab-stops:list 36.0pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-size:
13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>uso de equações
diferenciais para descrever o comportamento dinâmico do sistema sendo projetado;
<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l21 level1 lfo4;tab-stops:list 36.0pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-size:
13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>simulação de
mecanismo;<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l21 level1 lfo4;tab-stops:list 36.0pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-size:
13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>prototipação
rápida através da estereolitografia, técnica que permite gerar um<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>modelo físico
real.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>Exemplo 1 – <i>Análise
de propriedades de massa</i>: podem ser fornecidas propriedades<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>de objetos sólidos
sendo analisados, tais como área de superfície, peso, volume, centro de
gravidade e momento de inércia. Para uma superfície plana (ou seção transversal
de um objeto sólido) pode incluir perímetro, área e propriedades de inércia.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>Exemplo 2 – <i>Análise
de elementos finitos</i>: o objeto é dividido em um grande número de elementos
finitos (usualmente de forma retangular ou triangular) que formam uma rede de
interconexão de nós. Usando computadores de grande capacidade computacional, o
objeto completo pode ser analisado em relação a esforços, transferência de
calor e outras características, através do cálculo do comportamento de cada nó.<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'>CAM<o:p></o:p></span></b></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>CAM – <i>Computer
Aided Manufacturing </i>(Fabricação Auxiliada por Computador) pode ser definido
como o uso de sistemas computacionais para planejar, gerenciar e controlar as
operações de uma planta de fabricação através de uma interface direta ou
indireta com os recursos de produção da planta. Há duas categorias de
aplicações:<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>1. Monitoramento e
controle do processo de fabricação: aplicações diretas em que o computador é
conectado diretamente ao processo.<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>2. Suporte à
fabricação: aplicações indiretas em que o computador é usado para suporte às
operações de produção da planta, sem que haja uma interface direta entre o
computador e o processo. Exemplos:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l21 level1 lfo4;tab-stops:list 36.0pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-size:
13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>preparação de
programas de controle numérico (através de pós-procesadores que geram código
para máquinas CNC a partir da base de dados do projeto em CAD);<o:p></o:p></span></p>

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
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>padrões de
trabalho gerados por computador (p.ex. tempos padrão);<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l21 level1 lfo4;
tab-stops:list 36.0pt;mso-layout-grid-align:none;text-autospace:none'><![if !supportLists]><span
style='mso-bidi-font-size:13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>programação da
produção;<o:p></o:p></span></p>

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
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>A integração
dos diversos processos de uma organização é uma necessidade. O conceito de CIM
– <i>Computer Integrated Manufacturing </i>(Fabricação Integrada por<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:1.0cm;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:13.0pt'>Computador)
está voltado exatamente para a disponibilização da informação necessária em
toda a empresa. Quanto maior a integração de informações e atividades, maior a
capacidade da empresa de melhorar seu espaço competitivo. As principais
vantagens buscadas são:<o:p></o:p></span></p>

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
antecipação e reação rápida a mudanças;<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l21 level1 lfo4;
tab-stops:list 36.0pt;mso-layout-grid-align:none;text-autospace:none'><![if !supportLists]><span
style='mso-bidi-font-size:13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>administração
eficaz de recursos.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;mso-layout-grid-align:none;
text-autospace:none'><span style='mso-bidi-font-size:13.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-size:13.0pt'>Para isso é necessário:<o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><span
style='mso-bidi-font-size:13.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l21 level1 lfo4;tab-stops:list 36.0pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportLists]><span style='mso-bidi-font-size:
13.0pt'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:13.0pt'>integrar
aplicações, ou seja, trabalhar com uma base de dados comum (ou pelo menos com
interfaces bem definidas) para projeto, análises de engenharia, preparação
técnica, planejamento, monitoramento e controle da produção. <o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l21 level1 lfo4;tab-stops:list 36.0pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportLists]>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]><span style='mso-bidi-font-size:13.0pt'>integrar hardware e
software, evitando incompatibilidades.</span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><b>Conceitos e exemplos de CAD/CAM/ CAE<o:p></o:p></b></p>

<p class=MsoNormal><b><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:24.0pt'>Projeto
assistido por computador (<b><i>Computer Aided Design – CAD</i></b>) /
Engenharia assistida por computador (<b><i>Computer Aided Engineering</i></b> <b><i>-
CAE</i></b>) Manufatura Assistida por Computador (<b><i>Computer Aided
Manufacturing - CAM</i></b>).</p>

<p class=MsoNormal style='text-align:justify;text-indent:24.0pt'>O CAD inclui
um grupo de aplicações que permitem aos escritórios técnicos, designers e
engenheiros conceber, testar, avaliar e definir um produto para fabricação no
menor tempo possível (Tempo para comercializar). O conceito de CAD, então, não
só se refere ao conceito de representação gráfica é matemática, mais que tudo
isso, o CAD excede este significado na sua simultaneidade e integração no
processo de desenvolvimento, velocidade de projetação e distribuição de
informações (<b><i>Figura 1</i></b>).</p>

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
O modelamento sólido através de <b>features</b> é bastante intuitivo, pois a
partir de um sólido inicial o projetista segue adicionando e removendo material
até chegar à peça final. O desenho 3D realiza-se no contexto da montagem, e o
detalhamento é facilitado com a geração automática de vistas e cortes.</span></em><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='mso-layout-grid-align:none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent2 style='text-align:justify'><span style='font-family:
"Times New Roman"'>Os softwares de sistema CAD trabalham objetos
tridimensionais por meio do qual pode ser levada projeção bidimensional,
volumétricas, descrições, montagens, cálculo de elementos finitos, de simulação
de programas CNC, ou de exportação &quot;de arquivos STL&quot; para máquinas de
prototipagem rápida. Ao mesmo tempo eles possuem bancos de dados de
propriedades (materiais, bibliotecas, tolerâncias específicas, etc.).<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.0pt;mso-layout-grid-align:
none;text-autospace:none'><span style='mso-bidi-font-size:7.5pt'>A evolução do
cálculo estrutural voltado para o dimensionamento de estruturas e componentes
mecânicos é um bom exemplo da automatização na engenharia pelo CAE. Sem o
computador, os cálculos eram executados manualmente através de métodos
analíticos, e era necessário reduzir ao mínimo a quantidade de operações.
Diversas características do problema real não podiam ser consideradas, poucas
alternativas de projeto eram analisadas e a utilização de altos coeficientes de
segurança resultava em estruturas superdimensionadas. A tecnologia de CAE mudou
radicalmente este cenário, pois tal ferramenta permite a realização de uma
grande quantidade de cálculos em tempo reduzido. O projetista fica liberado do
trabalho braçal, concentrando-se na atividade de projetar com mais criatividade.
A simulação computacional de um modelo permite a avaliação de um maior número
de variações do projeto, com custos e prazos menores - reduzindo a necessidade
de construção de vários protótipos.<o:p></o:p></span></p>

<p class=MsoBodyTextIndent2 style='text-align:justify'><span style='font-family:
"Times New Roman"'>Os softwares de CAE utilizam modelos digitais para simular
fenômenos reais através de métodos numéricos (<b><i>figura 2</i></b>). Os
sistemas CAE atualmente mais difundidos são baseados no método dos elementos
finitos, o qual discretiza o desenho de CAD em</span><span style='font-size:
7.5pt;font-family:"Times New Roman";color:silver'> </span><span
style='font-family:"Times New Roman"'>muitas partes pequenas, resolvendo então
um conjunto de equações algébricas para obter os resultados desejados em função
do carregamento e das condições de contorno. Os softwares de CAE baseados em
análise por elementos finitos (FEA) são largamente utilizados para o cálculo de
tensões, deslocamentos, vibração, transferência de calor, escoamento de
fluidos, instalações industriais e outras aplicações.<o:p></o:p></span></p>

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
7.5pt'>Figura 2</span></b></em><em><span style='font-size:10.0pt'> - Simulação
de uma lâmina submetida à flambagem pela ação de uma mecanismo. Este software
combina análises cinemática e dinâmica de corpos rígidos/flexíveis com análises
de tensões lineares e não-lineares por elementos finitos. A integração do
sistema permite a visualização dos resultados através de uma animação realista.<o:p></o:p></span></em></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-indent:1.0cm'><span style='mso-bidi-font-size:7.5pt'>Além
da análise por elementos finitos, existem outros programas CAE que também
realizam simulações em protótipos virtuais para a análise cinemática (<b><i>Figura
3</i></b>) e dinâmica de mecanismos no ambiente Windows, em 2 ou 3 dimensões.
Este sistema reproduz no computador o funcionamento real de uma montagem
projetada em CAD, gerando gráficos de parâmetros e animações na tela.<o:p></o:p></span></p>

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
10.0pt'> - Análise cinemática e dinâmica de um mecanismo, realizada com o
software WORKING MODEL. Estão sendo considerados também efeitos de colisão e
gravidade. As peças foram modeladas no software de CAD mecânico SOLID EDGE</span></em><em><span
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
cortantes para um material e determinar a velocidade da operação através da
rotina que propicia o melhor rendimento. O software gera uma imagem de exibição
chamada de <b><i>toolpath</i></b>, isso mostra como a ferramenta cortará o
material, muito parecido com o demonstrativo de pré-impressão em exibições de
programas associados a impressoras, que dá um preview da página antes de ser
impressa. O sistema CAM junto ao computador ligado e sincronizado a uma
ferramenta elétrica, como uma broca ou um torno mecânico, cria e determina o
melhor processo de manufatura, seja ela um modelamento de uma peça ou a
estampagem e furação em uma chapa de aço. O CAM determina os melhores
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
10.0pt'>Figura 4</span></b></em><em><span style='font-size:10.0pt'> - Simulação
de uma usinagem, em ambiente PC/Windows. Existem módulos para a programação de
diversos tipos de usinagem CNC, de 2 até 5 eixos.</span></em><span
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
passos neste processo de ferramentas integradas para o projeto com auxílio de
computador compreendem o uso de Desenhos feitos no software para capturar as
idéias de design iniciais e produzir desenhos de engenharia precisos, fazendo
desde a modelagem até documentação técnica precisa do produto ou objeto (CAD).
Logo, os engenheiros usam software de análise (CAE) para assegurar que a peça,
objeto ou produto é bastante forte. Na seqüência os dados são manipulados para
a produção de um protótipo, ou modelo. No passo final o software de CAM
controla a máquina que produz a peça, objeto ou produto.</p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;text-indent:1.0cm'>Na fase de concepção, são combinadas
técnicas de construção e gráficos de computador para produzir modelos de
objetos. Os desenhistas manipulam e testam estes modelos em telas de exibição
de vídeo até que tenham o melhor equilíbrio de características, inclusive
facilidade de produção e custo. A informação de CAD é <span style='mso-bidi-font-size:
7.5pt'>Na fase de concepção, são combinadas técnicas de construção e gráficos
de computador para produzir modelos de objetos. Os desenhistas manipulam e
testam estes modelos em telas de exibição de vídeo até que tenham o melhor
equilíbrio de características, inclusive facilidade de produção e custo. A
informação de CAD é combinada então com CAE e procedimentos de CAM por bancos
de dados compartilhados. Hoje, é possível executar o processo integralmente por
computador<o:p></o:p></span></p>

<p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify'><b><u><span style='font-size:14.0pt;mso-bidi-font-size:
12.0pt'>Aplicação de CAE na Medicina<o:p></o:p></span></u></b></p>

<p class=MsoNormal style='text-align:justify'><b><u><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></u></b></p>

<p style='margin-top:0cm;text-align:justify;text-indent:30.0pt'><span
style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>O modelamento
computacional do corpo humano, os sofisticados sistemas de diagnóstico por
imagens, o projeto e a fabricação de equipamentos médico-hospitalares são
apenas alguns exemplos de como a medicina tem sido intensamente beneficiada
pelos recentes avanços da informática. A Engenharia Biomédica é portanto uma
típica área para a aplicação de sistemas CAD/CAE/CAM, onde as mais avançadas
tecnologias são colocadas a serviço da saúde. Descreveremos neste artigo alguns
estudos de casos que ilustram aplicações de sistemas CAE na medicina, abordando
mais especificamente a análise de tensões por elementos finitos.<o:p></o:p></span></p>

<p style='margin-top:0cm'><u><span style='font-family:"Times New Roman"'>Otimização
de órtese ortopédica na AACD<o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify'><span
style='font-family:"Times New Roman"'>A Associação de Assistência à Criança
Defeituosa (AACD) é uma das mais renomadas entidades filantrópicas do Brasil,
prestando relevantes serviços à comunidade através de suas instalações
hospitalares e oficinas. O Engenheiro Milton Seigui Oshiro, coordenador do
Laboratório de Pesquisas em Bioengenharia da AACD, tem utilizado sistemas
CAD/CAE/CAM para projeto, otimização e fabricação de órteses e próteses
ortopédicas, bem como para o desenvolvimento de equipamentos destinados ao
teste de tais componentes.<o:p></o:p></span></p>

<p class=MsoBodyTextIndent3>Um dos trabalhos desenvolvidos pela AACD foi a
análise estrutural de uma órtese, a qual constitui-se num aparelho ortopédico
utilizado no suporte a um membro deficiente. Após o modelamento tridimensional
em CAD da haste inferior do joelho da órtese, uma análise de tensões com o
software ALGOR mostrou o efeito de um furo na concentração de tensões do
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

<p class=MsoBodyTextIndent3><em>Análise de tesões em órtese da AACD (Brasil),
para o estudo da concentração de tensões e otimização do projeto. Outros
projetos estão em andamento com o uso de sistemas CAD/CAE/CAM.</em></p>

<p class=MsoBodyTextIndent3 style='text-indent:0cm'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent3><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent3><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent3><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent3><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt'><u><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt'><u><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt'><u><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt'><u><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt'><u><span style='font-family:"Times New Roman"'>Análise
das causas e tratamentos da escoliose<o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt'><u><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify'><span
style='font-family:"Times New Roman"'>A escoliose é uma deformidade da coluna
vertebral que se desenvolve durante a fase de crescimento, consistindo-se numa
curvatura lateral da coluna vertebral e numa rotação axial da vértebra. A
escoliose pode ser tratada com a utilização de um aparelho durante vários anos,
ou através de cirurgia. Muitos pesquisadores têm tentado responder três
questões centrais sobre a escoliose:<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt'><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l25 level1 lfo5;
     tab-stops:list 36.0pt'>Qual é a causa da doença? </li>
 <li class=MsoNormal style='text-align:justify;mso-list:l25 level1 lfo5;
     tab-stops:list 36.0pt'>Quais são os fatores mecânicos responsáveis pela
     evolução da doença até uma deformidade grave? </li>
 <li class=MsoNormal style='text-align:justify;mso-list:l25 level1 lfo5;
     tab-stops:list 36.0pt'>As técnicas cirúrgicas atuais poderiam ser aperfeiçoadas
     através da aplicação dos princípios da mecânica? </li>
</ul>

<p class=MsoNormal style='margin-left:18.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:24.0pt'><span
style='font-family:"Times New Roman"'>Uma equipe de pesquisadores da
Universidade de Vermont utilizou o software <i>Algor</i> de análise por
elementos finitos na procura de respostas para estas questões, através do
desenvolvimento de uma série de três modelos de elementos finitos.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:24.0pt'><span
style='font-family:"Times New Roman"'>O primeiro modelo objetivou o estudo da
origem e das causas da escoliose. Diversos estudos clínicos com raio-X
demonstraram que muitos pacientes possuem costelas mais longas no lado convexo
da escoliose, sugerindo que este crescimento anormal possa ser uma causa da
doença. O modelo de elementos finitos foi desenvolvido para demonstrar os
efeitos que o crescimento assimétrico de costelas pode ter sobre a curvatura da
coluna vertebral. O segundo modelo foi desenvolvido para estudar diversas
hipóteses sobre os mecanismos da progressão da escoliose, e os seus efeitos
sobre a geometria da coluna vertebral. O terceiro modelo foi idealizado para
simular o tratamento cirúrgico da escoliose.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:24.0pt'><span
style='font-family:"Times New Roman"'>O desenho de CAD com a geometria do
modelo foi elaborado a partir de imagens de raio-X obtidas de pacientes com
escoliose. Foram utilizados elementos de viga para representar as costelas, o
esterno e a cartilagem costal que os conecta; os ligamentos intercostais foram
representados por elementos de barra. O efeito do crescimento do paciente foi
modelado através de analogias com efeitos de dilatação térmica e forças atuando
nos elementos do modelo. Os resultados preliminares dos dois primeiros modelos
mostraram que o efeito isolado das deformações elásticas não poderia produzir
as deformidades encontradas na escoliose, embora um crescimento assimétrico das
costelas possa iniciar este problema. A equipe prosseguia trabalhando no
terceiro modelo para a obtenção de outros resultados.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:36.0pt'><b><span
style='font-size:14.0pt;mso-bidi-font-size:7.5pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p style='margin:0cm;margin-bottom:.0001pt'><u><span style='font-family:"Times New Roman"'>Aperfeiçoamento
no diagnóstico do câncer de mama<o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>O número de mortes por câncer de mama em
mulheres tem diminuído significativamente nos últimos anos, em parte devido a
uma ampla utilização de técnicas para a detecção da doença em sua fase inicial.
Os métodos tradicionalmente indicados para o diagnóstico precoce do câncer de
mama são a mamografia com raio-X e o exame de toque da mama, os quais possuem
entretanto algumas limitações. A mamografia por raio-X não é eficiente em
mulheres jovens, e a confiabilidade do exame de toque depende da sensibilidade
da própria mulher ou do médico; além disto, certos nódulos não podem ser
sentidos devido ao seu tamanho reduzido ou à sua posição. O ultrassom tem sido
estudado ultimamente como um método eficiente de diagnóstico do câncer da mama,
possuindo a vantagem adicional de ser isento de efeitos colaterais.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>Uma equipe da Universidade de Kansas está
desenvolvendo uma extensa pesquisa para o aprimoramento das técnicas de análise
e processamentos das imagens de ultrassom para o diagnóstico precoce do câncer
de mama.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>Os aparelhos de ultrassom utilizam um
sensor que é passado diversas vezes sobre a superfície do corpo para a
construção da imagem. Um dos objetivos desta pesquisa foi estabelecer se os
tumores podem ser detectados mais facilmente quando a mama é colocada entre
duas placas, como é feito na mamografia tradicional. Foi desenvolvido então um
modelo computacional para a análise estática linear de tensões pelo método dos
elementos finitos, para a pesquisa do deslocamento do tumor e a sua deformação
dentro da mama sob tais condições.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>A figura mostra o resultado da análise de
tensões do modelo bidimensional de um tumor; o qual foi representado como sendo
nove vezes mais rígido do que os tecidos vizinhos. A superfície foi comprimida
em 1,5% para uma análise do campo de tensões, e foram aplicadas condições de
contorno adequadas. O tumor teve a sua geometria circular deformada, e
apareceram quatro &quot;asas&quot; características no campo de tensões em sua
volta. Esta análise de elementos finitos ajudou a equipe de pesquisadores a
entender melhor tais efeitos, os quais também estão presentes em imagens
clínicas. A continuação deste estudo levará os pesquisadores a importantes
progressos na compreensão e no processamento das imagens obtidas com exames de
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
style='font-family:"Times New Roman"'>Pesquisa para aprimoramento na detecção
do câncer de mama por meio de ultrassom. A figura mostra a análise de tensões
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
joelhos, além de outros tipos de reconstrução utilizando tecidos naturais. Os
ligamentos são componentes passivos sujeitos a tensão, que controlam a
separação entre as extremidades dos ossos e a cinemática da junta durante a
locomoção. Os ligamentos possuem uma geometria tridimensional complexa, e são compostos
por materiais não-homogênios.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>O modelamento do joelho foi feito em CAD
tridimensional, através da reconstrução da geometria dos ossos a partir de
imagens obtidas por tomografia computadorizada. A geometria dos ligamentos foi
digitalizada com o auxílio de um equipamento especialmente desenvolvido para
esta finalidade. Foram realizados experimentos <i>in vitro</i> para a
determinação das propriedades mecânicas dos ligamentos. Com o auxílio de
softwares de elementos finitos e softwares de simulação de movimentos, este
trabalho resultou em uma nova metodologia para o ensaio virtual das próteses de
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
style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>O lançamento do
primeiro PC pela IBM, em 1981, mudou a forma de muitos engenheiros, projetistas
e desenhistas trabalharem. Com o advento do computador pessoal, desenhos
técnicos, cálculos estruturais e simulações deixaram de ser executados
manualmente nas empresas que não podiam arcar com os custos de computadores de
grande porte. Durante os últimos anos, uma nova geração de softwares nativos
para <i>Windows </i>tem se destacado por trazer ao usuário de PC recursos
tecnológicos antes somente encontrados em sistemas <i>high-end</i>.</span><span
style='font-family:"Times New Roman"'><o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.05pt'><span
style='font-family:"Times New Roman"'>Um exemplo de CAD mecânico tridimensional
nativo para Windows é o SOLID EDGE, desenvolvido pela Unigraphics Solutions
(EUA), que integra módulos para modelamento sólido e de superfície, desenho de
montagens em 3D, peças em chapa dobrada e ambiente de detalhamento para a
geração automática de desenhos 2D. O <i>Solid Edge</i> utiliza a tecnologia de <i>features</i>
para o modelamento sólido paramétrico e variacional, sendo esta a maneira mais
atual, rápida e intuitiva de geração de desenhos tridimensionais. A partir de
um sólido inicial, o projetista segue adicionando e removendo material através
de operações do tipo <i>feature</i>, até chegar à peça final. As principais <i>feature
</i>encontradas no <i>Solid Edge</i> são: extrusão, protusão de revolução,
helicoidal, rasgo, nervura, arredondamento, geração de parede fina, sólido de
seção variável e outras. Algumas características importantes do modelamento
sólido no <i>Solid Edge</i> são descritas a seguir.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.05pt'><span
style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-12.0pt;mso-list:l2 level1 lfo6;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><![endif]>Possibilidade
de criação de peças no contexto da montagem, utilizando peças existentes como
referenciais para o projeto da nova peça. </p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-12.0pt;mso-list:l2 level1 lfo6;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><![endif]>Completa
parametrização do modelo assim que este é criado, facilitando futuras
alterações e permitindo a geração de famílias de componentes similares. </p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-12.0pt;mso-list:l2 level1 lfo6;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><![endif]>Menu
<i>Pathfinder</i> com o histórico de todas as etapas realizadas na construção
da peça. </p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-12.0pt;mso-list:l2 level1 lfo6;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><![endif]>Aproveitamento
de desenhos já existentes em 2D como perfis para a geração de novos desenhos em
3D, facilitando a transição do sistema CAD antigo para o <i>Solid Edge</i>. </p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-12.0pt;mso-list:l2 level1 lfo6;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><![endif]>Capacidade
de leitura e gravação em formatos de arquivos universais, tais como IGES, DXF,
DGN, STL, SAT, EMS e outros. </p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-12.0pt;mso-list:l2 level1 lfo6;tab-stops:list 36.0pt'><![if !supportLists]><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt;font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span><![endif]>Grande
facilidade de uso e aprendizado, com comandos inteligentes e auto-explicativos.
Quando uma <i>feature</i> é ativada, apenas os comandos necessários para aquela
operação são apresentados na tela, e uma barra de ícones orienta o usuário
sobre as etapas que devem ser cumpridas. </p>

<p class=MsoNormal style='margin-left:24.0pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'>Avançados
recursos de visualização dos modelos, permitindo a aplicação de luzes, cores,
texturas, reflexos e imagens de fundo para a geração de imagens com elevado
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
do tipo feature para o modelamento tridimensional, com operações sucessivas de
adição e remoção de material.</em> </p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify'><span
style='font-family:"Times New Roman"'>Um dos recursos mais versáteis do <i>Solid
Edge</i> é o menu <i>Pathfinder</i>, que lista todas as operações realizadas na
geração do modelo. As vantagens do <i>Pathfinder</i> são inúmeras:<o:p></o:p></span></p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l5 level1 lfo8;tab-stops:list 36.0pt'>Edição
     de qualquer operação executada anteriormente, sendo que as operações
     posteriores se ajustam automaticamente. </li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l5 level1 lfo8;tab-stops:list 36.0pt'>Reordenamento
     das operações executadas, resultando em novas possibilidades de
     modelamento. </li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l5 level1 lfo8;tab-stops:list 36.0pt'>Supressão
     temporária de operações anteriores, permitindo, por exemplo, a eliminação
     de detalhes geométricos irrelevantes para a realização de uma análise por
     elementos finitos. <i><o:p></o:p></i></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l5 level1 lfo8;tab-stops:list 36.0pt'><i>Playback</i>
     de todas as operações realizadas, permitindo que um projetista entenda
     perfeitamente o trabalho de outro profissional para dar continuidade ao
     seu serviço. </li>
</ul>

<p class=MsoNormal style='text-align:justify;text-indent:30.05pt'>Além do
ambiente <i>Part</i> para modelamento sólido e de superfície, o <i>Solid Edge</i>
possui ainda o <i>Assembly</i> para o projeto de montagens em 3D, o <i>Sheet
Metal</i> para projeto e desenvolvimento de chapas dobradas, e o <i>Draft</i>
para geração automática de vistas, cortes e detalhamentos. Além disto, o <i>Solid
Edge</i> possui recursos de gerenciamento de desenhos e integra-se
perfeitamente com todos os outros aplicativos para Windows.</p>

<p style='text-align:justify;text-indent:30.0pt'><span style='font-family:"Times New Roman"'>A
utilização de sistemas CAD/CAE/CAM nas diferentes áreas da engenharia é uma
exigência do atual mercado globalizado altamente competitivo, onde as empresas
necessitam produzir cada vez mais, melhor e com custos reduzidos. Embora os
sistemas CAD tradicionais de desenho em duas dimensões ainda sejam os mais
utilizados no Brasil, cada vez mais empresas despertam para a necessidade de se
manterem atualizadas e competitivas com o uso de sistemas tridimensionais mais
eficazes. O <i>Solid Edge</i> destaca-se como uma solução de CAD mecânico que
consegue aliar poderosos recursos de modelamento com uma grande facilidade de
uso.<o:p></o:p></span></p>

<p><strong><u><span style='font-size:13.5pt;font-family:Arial'>Comparativo de
Tecnologias <i>CAE</i></span> :</u></strong><span style='font-size:13.5pt;
font-family:Arial'><o:p></o:p></span></p>

<p><span style='font-size:13.5pt;font-family:Arial'>Simulação de Eventos
Mecânicos <b>x </b>Análise Estática Linear de Tensões<o:p></o:p></span></p>

<p><u><span style='font-family:"Times New Roman"'>Prototipagem virtual<o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.05pt'><span
style='font-family:"Times New Roman"'>Em determinada fase do processo de
pesquisa e desenvolvimento de um novo produto, o engenheiro depara-se com a
necessidade de prever o comportamento real de seu projeto. Encontramos esta
situação quando projetamos uma nova suspensão de veículo, um quadro de
bicicleta, uma estrutura metálica sujeita a cargas dinâmicas, e em muitos
outros casos. Uma solução tradicional seria a construção de protótipos ou
modelos reduzidos para ensaios em laboratórios, onde instrumentos de medição
estrategicamente distribuídos coletariam dados de tensões, deformações,
velocidades, forças, etc. Entretanto, a metodologia de construção e ensaio de
diversos protótipos costuma consumir mais tempo e recursos do que seria o
desejável, não sendo portanto a solução ideal.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.05pt'><span
style='font-family:"Times New Roman"'>O atual estágio de desenvolvimento
tecnológico já permite que softwares baseados na plataforma PC/Windows simulem
situações físicas reais de maneira bastante completa, resultando em verdadeiros
protótipos virtuais. Dentro deste conceito, vamos analisar e comparar dois
cenários distintos: a <i>Análise Estática Linear de Tensões</i> tradicional, e
a nova tecnologia de <i>Simulação de Eventos Mecânicos</i>. <o:p></o:p></span></p>

<p><u><span style='font-family:"Times New Roman"'>Análise estática linear de
tensões por elementos finitos<o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>Os softwares de CAE (Engenharia Assistida
por Computador) utilizam modelos digitais para simular fenômenos físicos reais
através de métodos numéricos aproximados. Os sistemas CAE mais difundidos
atualmente são baseados no método dos elementos finitos, o qual discretiza um
modelo de CAD em muitas partes pequenas, resolvendo então um conjunto de
equações algébricas para obter os resultados desejados, em função do
carregamento e das condições de contorno aplicados.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>Os sistemas CAE já são razoavelmente
difundidos entre os engenheiros mecânicos e civis, principalmente para a
realização de cálculos estruturais envolvendo tensões estáticas lineares.
Entretanto, existem inúmeras situações mais complexas em que este tipo de cálculo
acarreta dificuldades práticas e imprecisões importantes, como podemos ver no
exemplo a seguir.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>Por exemplo, para se analisar a
resistência mecânica do quadro de uma bicicleta com o uso de um sistema CAE
tradicional, seguiríamos as seguintes etapas: desenhar a geometria da
bicicleta, definir os materiais envolvidos, definir as forças externas que a
estrada exerce sobre a bicicleta enquanto esta se movimenta, definir as
condições de contorno, processar os cálculos e interpretar os resultados. Tal
exemplo evidencia uma pergunta inerente a este tipo de análise - &quot;Quais
são os valores das forças exercidas pela estrada sobre as rodas da bicicleta
enquanto esta se movimenta?&quot; A resposta a esta questão frequentemente não
está prontamente disponível, exigindo a realização de experiências práticas ou
a adoção de hipóteses simplificadoras. Com a recente tecnologia de simulação de
eventos mecânicos, não existe mais a necessidade de se encontrar uma resposta a
esta pergunta para se executar a análise de tensões por elementos finitos.<o:p></o:p></span></p>

<p><u><span style='font-family:"Times New Roman"'>Simulação de eventos
mecânicos <o:p></o:p></span></u></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>A tecnologia de Simulação de Eventos
Mecânicos (MES) adiciona movimento à análise tradicional de elementos finitos,
dispensando assim o conhecimento prévio das forças envolvidas. Em outras
palavras, as forças atuantes são calculadas internamente pelo software, de
maneira transparente para o usuário. Voltando ao exemplo anterior, não seria
necessário descobrir quais são as forças externas que a estrada exerce sobre a
bicicleta enquanto esta se movimenta; bastaria entrarmos com a velocidade da
bicicleta e o perfil da estrada (os quais são parâmetros conhecidos), e o
software nos forneceria os resultados desejados. Além de calcular as tensões e
deformações, as eventuais falhas do material seriam apresentadas visualmente
através de animações bastante intuitivas. <o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.0pt'><span
style='font-family:"Times New Roman"'>Para entender mais tecnicamente como a
simulação de eventos mecânicos elimina a necessidade do conhecimento prévio das
forças atuantes para o processo de análise, vamos relembrar rapidamente algumas
equações básicas da física:<o:p></o:p></span></p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l20 level1 lfo9;tab-stops:list 36.0pt'>A
     análise tradicional de tensões estáticas lineares por elementos finitos
     baseia-se na lei de Hooke (F=kd), onde a força (F) e a constante elástica
     (k) devem ser conhecidas previamente para o cálculo do deslocamento (d).
     As tensões são uma conseqüência dos deslocamentos em cada ponto. </li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l20 level1 lfo9;tab-stops:list 36.0pt'>A
     análise dinâmica de corpos rígidos é baseada na segunda lei de Newton
     (F=ma), onde a aceleração (a) é calculada em função das forças (F) e da
     massa (m). </li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l20 level1 lfo9;tab-stops:list 36.0pt'>A
     simulação de eventos mecânicos combina a lei de Hooke com a segunda lei de
     Newton, eliminando portanto a variável força (ma=kd). </li>
</ul>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.05pt'><span
style='font-family:"Times New Roman"'>A tabela comparativa da próxima página
apresenta os benefícios desta síntese de equações.<o:p></o:p></span></p>

<p style='margin:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:30.05pt'><span
style='font-family:"Times New Roman"'>A tecnologia da Simulação de Eventos
Mecânicos (MES) reúne em um único sistema a análises de tensões por elementos
finitos, a análise cinemática e a análise dinâmica de corpos rígidos/flexíveis.
Temos assim um sistema de simulação computacional permitindo que uma série de
protótipos e ensaios de laboratórios sejam substituídos por simulações
virtuais. O engenheiro testará um maior número de alternativas de projeto, com
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
    <p align=center style='margin:0cm;margin-bottom:.0001pt;text-align:center'><b>Simulação
    Convencional</b></p>
    </td>
    <td width=136 rowspan=2 valign=top style='width:81.75pt;border:inset .75pt;
    background:aqua;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p align=center style='margin:0cm;margin-bottom:.0001pt;text-align:center'><b>Simulação
    de Eventos Mecânicos (MES)</b></p>
    </td>
   </tr>
   <tr>
    <td width=113 valign=top style='width:67.55pt;border:inset .75pt;
    background:aqua;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p align=center style='margin:0cm;margin-bottom:.0001pt;text-align:center'>Cinemática</p>
    </td>
    <td width=119 valign=top style='width:71.55pt;border:inset .75pt;
    background:aqua;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p align=center style='margin:0cm;margin-bottom:.0001pt;text-align:center'>Análise
    Estática de Tensões</p>
    </td>
    <td width=151 valign=top style='width:90.3pt;border:inset .75pt;background:
    aqua;padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p align=center style='margin:0cm;margin-bottom:.0001pt;text-align:center'>Análise
    Dinâmica de Tensões</p>
    </td>
   </tr>
   <tr style='height:15.45pt'>
    <td width=211 valign=top style='width:126.75pt;border:inset .75pt;
    background:yellow;padding:3.0pt 3.0pt 3.0pt 3.0pt;height:15.45pt'>
    <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>1.
    Equação básica</span><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt;
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
    Realiza análise de tensões</span><span style='font-size:10.0pt;mso-bidi-font-size:
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
    Não requer especificação das forças</span><span style='font-size:10.0pt;
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
    Não requer especificação da rigidez</span><span style='font-size:10.0pt;
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
    Testa resistência dos materiais</span><span style='font-size:10.0pt;
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
    Mostra ocorrência de impactos</span><span style='font-size:10.0pt;
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
    Analisa impacto entre múltiplos objetos</span><span style='font-size:10.0pt;
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
    Analisa comportamento de materiais não-lineares</span><span
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
    Erros de entrada dos dados são óbvios</span><span style='font-size:10.0pt;
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
    Fornece curvas Tensão x Tempo</span><span style='font-size:10.0pt;
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
    <p class=MsoNormal><strong><span style='font-family:Arial'>NÃO</span></strong><span
    style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>
    </td>
   </tr>
   <tr>
    <td width=735 colspan=5 valign=top style='width:440.7pt;border:inset .75pt;
    padding:3.0pt 3.0pt 3.0pt 3.0pt'>
    <p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-size:12.0pt'>*
    Onde a massa multiplicada pela aceleração iguala a soma das forças,
    incluindo amortecimento. <o:p></o:p></span></p>
    <p style='margin:0cm;margin-bottom:.0001pt'><span style='font-size:10.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Times New Roman"'>** O engenheiro
    deve especificar as curvas de Carga x Tempo ou Deslocamento x Tempo.<o:p></o:p></span></p>
    <p style='margin:0cm;margin-bottom:.0001pt'><span style='font-size:10.0pt;
    mso-bidi-font-size:12.0pt;font-family:"Times New Roman"'>*** Requer
    software especial de análise não-linear.</span></p>
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
style='font-family:"Times New Roman"'>Resultado do cálculo de tensões pelo
método dos elementos finitos, realizado pelo software ALGOR. As simulações
otimizam a utilização dos materiais compostos, para a obtenção da máxima
resistência com o menor peso possível.</span></em><span style='font-family:
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
"Times New Roman"'>A Unigraphics Solutions lança a versão 16 do Unigraphics.</span></strong><span
style='font-size:14.0pt;mso-bidi-font-size:12.0pt;font-family:"Times New Roman"'><o:p></o:p></span></p>

<p><strong><span style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>O
software para CAD/CAE/CAM é completamente desenvolvido na plataforma Windows
NT.</span></strong><span style='font-family:"Times New Roman"'><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.0pt'><span
style='mso-bidi-font-size:10.0pt'>Recentemente a Unigraphics lançou a mais nova
versão de seu software para CAD/CAE/CAM: o Unigraphics V16, completamente
desenvolvido na plataforma Windows NT, o que lhe confere o título de Software
Nativo Windows.</span><br>
<span style='mso-bidi-font-size:10.0pt'>A interface nativa Windows do
Unigraphics mantém os padrões Windows de layout, caixas de diálogo, serviços de
impressão, ícones coloridos, barras de tarefas customizáveis (toolbars), o novo
mecanismo Microsoft HTML HELP e o processo de instalação simples.Além diso, a
versão 16 possuirá integração com o Microsoft Excel, para controle e otimização
de dados paramétricos, interagindo com mecanismos e análise de dados.</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.0pt'><span
style='mso-bidi-font-size:10.0pt'>A novidade destina-se a processos produtivos
de alta complexidade. Apresen- tado em módulos, permite às empresas adquirí-lo
por etapas, segundo suas necessidades e cultura organizacional, sem qualquer
dificuldade para a integração posterior com outros módulos, incluindo softwares
da Unigraphics Solutions, como o Solid Edge e o IMAN. </span><br>
<span style='mso-bidi-font-size:10.0pt'>O Unigraphics V16 é um modelador
híbrido, paramétrico e variacional. Híbrido porque abrange sólidos e
superfícies. Os sistemas paramétricos permitem modificar o projeto de um
produto já concebido. Variacional porque, a partir de dados paramétricos,
pode-se compor famílias de produtos sem modificar sua aparência.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.0pt'><span
style='mso-bidi-font-size:10.0pt'>&quot;O modelamento sólido da Unigraphics
Solutions veio exatamente para criar a possibilidade de esculpir na tela do
computador o produto desejado.&quot; diz Roberto Trinconi, diretor presidente
da Unigrphics Solutions para a América Latina.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.0pt'><span
style='mso-bidi-font-size:10.0pt'>A Unigraphics Solutions direciona seu
investimento anual de R$ 100 milhões para desenvolvimento de aplicativos e
soluções virtuais para eliminar retrabalho, antecipar resultados e aumentar
produtividade industrial.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.0pt'><span
style='mso-bidi-font-size:10.0pt'>Uma das líderes em tecnologia e soluções
CAD/CAE/CAM e PDM, a empresa desenvolve, vende, implementa e dá suporte a
aplicativos de modelamento sólido e de gerenciamento de processos de engenharia
e de manufatura, que permitem às indústrias, virtualmente, desenvolver
produtos, prever resultados e gerenciar a produção, eliminando a confecção de
protótipos ou a grande quantidade de processos inconsistentes ou duplicados.
Isso significa em termos práticos maior produtividade e rapidez.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.0pt'><span
style='mso-bidi-font-size:10.0pt'>A redução de tempo se tornou possível porque,
agora com um simples clique no mouse, os engenheiros deixam de refazer à mão o
desenho de cada peça não aprovada, eliminam protótipos e passam a testar
virtualmente no próprio computador os tipos de materiais e suas propriedades de
expansão, distenção, variância e dilatação, além de reestruturar e prever os
processos produtivos envolvidos.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:30.0pt'><span
style='mso-bidi-font-size:10.0pt'>Tudo isso é possível através dos aplicativos:
Unigraphics CAD/CAM/CAE, Solid Edge e Parasolid (plataforma de facto para
modelagem sólido) e pelo software IMAN (de gerenciamento de processos e
informações), que rodam em plataformas Unix e Windows NT, são modulares, mantêm
interface amigável entre si e com aplicativos de outros fabricantes somados a
serviços de consultoria, suporte e treinamento oferecidos pela empresa.<o:p></o:p></span></p>

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

<h5><span style='font-family:"Times New Roman"'>Introdução<o:p></o:p></span></h5>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify;text-indent:
36.0pt'>Nos últimos dois séculos, podemos dizer que a humanidade foi dividida
em três períodos marcantes: o da invenção de grandes máquinas mecânicas durante
a Revolução Industrial, a máquina à vapor e por fim a disseminação das
informações, através da invenção do rádio, televisão, computadores, satélites e
redes interligando todos.</p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><span
style='mso-tab-count:1'>            </span>Com esses fatos vemos a importância
das redes atualmente, pois sem elas seria como se as grandes invenções
eletrônicas não tivessem alma. O homem sempre teve necessidade de se comunicar,
seja por sinais de fumaça, pombo-correio, código Morse, e outros, e com as
redes, a intenção era de conectar dois ou mais pontos, para se comunicarem e
compartilharem recursos através de um sistema de comunicação.</p>

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
1: Alguns tipos de comunicação de dados como sinais de fumaça, correio,
pombo-correio e código morse<o:p></o:p></span></h4>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h5><span style='font-family:"Times New Roman"'>Histórico<o:p></o:p></span></h5>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><span
style='mso-tab-count:1'>            </span>A primeira rede de computadores,
teve seu projeto iniciado em 1966 pela agência DARPA (Defense Advanced Research
Projects Agency) do Departamento de Defesa do governo americano, da qual
desejava conectar quatro computadores através de uma linha telefônica, com o
objetivo de criar um sistema de comunicação e controle distribuído com fins
militares, entre centros militares e de pesquisa em universidades, projeto este
que recebeu o nome de ARPANET. Mais tarde, esta rede foi dividida em duas
partes, a MILNET com a porção militar e a ARPANET continuou o meio acadêmico,
com seus projetos de pesquisa concentrados na Universidade da Califórnia -
Berkeley, sendo que depois da invenção do TCP/IP, com o início do seu uso em
1983 foi possível ampliar a rede de forma ordenada, e em 1986, a NSF (Network
Science Foundation) passou a operar o backbone americano formando a NSFNet,
interligando diversas redes regionais de institutos acadêmicos e de pesquisa,
dentre eles a CSNET (Computer Science Net), HEPNet (High Energy Physics Net),
SPAN (Nasa Space Physics Network) e outras, até que em 1988 a NSFNet foi
integrada à redes de outros países, formando a Internet, que foi difundida em
1993 com a criação dos protocolos HTTP e o browser Mosaic, dando origem ao WWW
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
style='mso-tab-count:1'>            </span>Podemos classificar as redes da
seguinte maneira:</p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='margin-right:5.35pt;text-align:justify;mso-list:
     l17 level1 lfo10;tab-stops:list 36.0pt'><b>LAN </b>(<i>Local Area Network</i>):
     redes onde os computadores se localizam em uma faixa de poucos metros até
     alguns quilômetros</li>
 <li class=MsoNormal style='margin-right:5.35pt;text-align:justify;mso-list:
     l17 level1 lfo10;tab-stops:list 36.0pt'><b>MAN </b>(<i>Metropolitan Area
     Network</i>): redes onde os computadores se localizam em cidades
     diferentes<b><o:p></o:p></b></li>
 <li class=MsoNormal style='margin-right:5.35pt;text-align:justify;mso-list:
     l17 level1 lfo10;tab-stops:list 36.0pt'><b>WAN </b>(<i>Wide Area Network</i>):
     redes onde os computadores se localizam em países ou continentes
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
  style='mso-ansi-language:ES-TRAD'>Prédios<o:p></o:p></span></p>
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
  style='mso-ansi-language:EN-US'>Países<o:p></o:p></span></p>
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
2: Um exemplo de conexão LAN<o:p></o:p></span></h4>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify;text-indent:
36.0pt'>Ainda sobre tipos de redes, podemos classifica-las em:</p>

<p class=MsoNormal style='margin-right:5.35pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='margin-right:5.35pt;text-align:justify;mso-list:
     l17 level1 lfo10;tab-stops:list 36.0pt'><b>Internet</b>: rede pública com
     milhões de computadores compartilhando informações de diversas
     especialidades em diversos tipos de mídia;</li>
 <li class=MsoNormal style='margin-right:5.35pt;text-align:justify;mso-list:
     l17 level1 lfo10;tab-stops:list 36.0pt'><b>Intranet</b>: rede particular
     como de uma empresa ou universidade, onde os aplicativos e documentos de
     departamentos diferentes são disponibilizados em forma de páginas de
     internet (html);</li>
 <li class=MsoNormal style='margin-right:5.35pt;text-align:justify;mso-list:
     l17 level1 lfo10;tab-stops:list 36.0pt'><b>Extranet</b>: é uma rede
     intranet, porém expande seu acesso à clientes, fornecedores, parceiros,
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
style='mso-tab-count:1'>            </span>Para montar um rede, é necessário um
sistema operacional que tenha ferramentas que ajude a administrar a rede.
Dentre os diversos softwares no mercados, alguns dos mais conhecidos são:
Microsoft Windows NT, Linux (mais de 70 versões), Novell Netware, e diversos
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
style='mso-tab-count:1'>            </span>Depois de decidir qual sistema
operacional deverá ser usado, o administrador da rede irá configurar os
computadores fazendo o papel de servidores da rede, que são os computadores que
compartilharão seus recursos com os clientes ou estações, de acordo com as suas
necessidades. Alguns tipos de servidores possíveis de configurar:<o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>ARQUIVOS: gerencia documentos compartilhados<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>CORREIO ELETRÔNICO: gerencia contas de e-mails da rede (POP3,SMTP)<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>IMPRESSÃO: gerencia fila de impressão de documentos da rede<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>BOOT REMOTO: gerencia aplicativos de estações (sem disco)<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>BANCO DE DADOS: gerencia o banco de dados usado na rede<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>FIREWALL: filtro de acessos externos à rede<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>ROTEADOR: responsável pelas rotas do IP´s da rede interna<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>INTERNET: gerencia páginas de internet da rede<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>INTRANET: gerencia aplicativos e documentos da intranet<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>BACKUP: responsável pelas cópias de segurança da rede<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>PROXY: acelera acesso à páginas de internet – guarda páginas
     estáticas<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>PPP: gerencia acessos remotos através de uma conexão dial-up<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>DNS: controla cadastro de IP´s x Domínios<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l14 level1 lfo11;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>COMUNICAÇÃO: ou gateway, gerencia mídias externas (celulares, fax,
     máquinas, etc)<o:p></o:p></span></li>
</ul>

<h6><span style='font-family:"Times New Roman"'>Equipamentos para redes<o:p></o:p></span></h6>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-size:
9.0pt;mso-fareast-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-size:
9.0pt;mso-fareast-font-family:Arial'><span style='mso-tab-count:1'>            </span>Para
montar a rede, é necessários alguns equipamentos para poder ligar os computadores
uns aos outros. Abaixo uma lista de equipamentos e suas finalidades:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-size:
9.0pt;mso-fareast-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo12;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:8.0pt'>SWITCH: divide uma rede grande em
     diversas LAN´s, aumentando a performance da rede<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo12;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:8.0pt'>PRINT SERVERS: gerenciam as filas de
     impressões; é um conversor de rede como Rj45 para paralelo<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo12;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:8.0pt'>BRIDGES: interligam LAN´s, com diferentes
     meios de transmissão, como de fibra óptica para cabo coaxial<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo12;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:8.0pt'>HUBS: conecta os computadores da rede,
     uma espécie de “benjamim” de computador<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo12;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:8.0pt'>ROUTERS: faz o papel dos bridges, além de
     filtrar os dados e direcioná-los ao seu destino correto, seja na LAN ou na
     WAN<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l11 level1 lfo12;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:8.0pt'>REPETIDORES: trabalha como um
     amplificadores de sinais, repetindo os dados enviados<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l11 level1 lfo12;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:8.0pt'>SERVERSWITCH: usado por administradores
     de redes, liga por exemplo 10 servidores remotamente à um único
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
5: Fotos ilustrativas de alguns equipamentos – da esquerda para direita:
switch, print servers, bridges, hubs, routers<o:p></o:p></span></h4>

<p class=MsoNormal style='margin-left:18.0pt'><span style='mso-bidi-font-size:
8.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='mso-bidi-font-size:
8.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoHeading7><span style='font-family:"Times New Roman"'>Meios de
Transmissão<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='mso-bidi-font-size:
8.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='mso-bidi-font-size:
8.0pt'><span style='mso-tab-count:1'>      </span>Para conectar os equipamentos
e computadores, dispomos de alguns meios de transmissão de dados. Alguns deles:<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:18.0pt'><span style='mso-bidi-font-size:
8.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<h3><span style='font-family:"Times New Roman"'>Uso Geral</span><span
style='font-family:"Times New Roman";mso-fareast-font-family:"Arial Unicode MS";
mso-font-kerning:0pt'><o:p></o:p></span></h3>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'>Par Trançado – transmissões até 100Mbps</li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'>Cabo Coaxial – transmissões até 10Mbps</li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'>Fibra Óptica – transmissões ate 10Gbps (quarta
     geração)</li>
</ul>

<p class=MsoNormal style='text-align:justify'><span style='display:none;
mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'>Uso
Específico:<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'>Rádio Difusão – como as usadas por rádios e
     televisões (grandes distâncias e tráfego)</li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'>Microondas – entre duas parabólicas, para
     distâncias entre 10 e 100 km</li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'>Enlace de Satélites – cobre todo o globo com imenso
     tráfego</li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'>Infravermelho – à laser, como controles remotos,
     até 155 Mbps</li>
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
style='mso-tab-count:1'>            </span>São usados para conectar todos
equipamentos em uma rede através dos meios de transmissão de dados. Dentre os
cabos, temos o RJ45 e coaxial, normalmente usado em dispositivos de rede,
paralelo, serial ou usb em dispositivos ligados a computador como impressoras,
ou o mais usado em equipamentos eletrônicos conectados em computadores como um
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
style="mso-spacerun: yes"> </span><b><span style='color:#000099;display:none;
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
6: Fotos ilustrativas de alguns cabos – da esquerda para direita: coaxial,
RJ45, USB, serial DB9, fibra óptica, serial RS232 e paralelo DB25<o:p></o:p></span></h4>

<p class=MsoNormal style='text-align:justify'><span style='mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoHeading7 style='mso-pagination:none;mso-layout-grid-align:none;
punctuation-wrap:simple;text-autospace:none;vertical-align:baseline'><span
style='font-family:"Times New Roman"'>Topologia de Redes<o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><span style='mso-tab-count:1'>            </span>Um outro
assunto amplamente discutido entre administradores de redes é a melhor forma de
conectar os computadores, ou seja, a topologia da rede. Mesmo que uma empresa
compre os melhores equipamentos do mercado para rede, se a estrutura da rede
não estiver bem organizada, a rede ficará lenta da mesma forma devido as
características de cada topologia, sendo que estas devem ser analisadas para
atender cada caso. É possível também montar uma rede com diversos tipos de
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
7: Mostra algumas possíveis formações de redes – em cima do lado esquerdo em
estrela, do lado direito em barra e embaixo em anel<o:p></o:p></span></h4>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-size:
8.0pt;font-family:Wingdings;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Wingdings'><span
style='mso-char-type:symbol;mso-symbol-font-family:Wingdings'>è</span></span><span
style='mso-bidi-font-size:8.0pt'> ESTRELA<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Alto custo
     com cabos<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Mais
     tolerante à falhas<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Fácil de
     instalar usuários<o:p></o:p></span></li>
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
style='mso-char-type:symbol;mso-symbol-font-family:Wingdings'>è</span></span><span
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
     estação para, todas param junto<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Problemas
     difíceis de isolar<o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='text-align:justify'><span style='display:none;
mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-size:
8.0pt;font-family:Wingdings;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Wingdings'><span
style='mso-char-type:symbol;mso-symbol-font-family:Wingdings'>è</span></span><span
style='mso-bidi-font-size:8.0pt'> BARRAMENTO</span><span style='mso-bidi-font-size:
8.0pt;mso-fareast-font-family:"Arial Unicode MS"'><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Fácil
     instalação<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Requer menos
     cabos<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Rede lenta
     em períodos com uso intenso<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Problemas
     difíceis de isolar<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l3 level1 lfo13;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:8.0pt'>Todos nós
     tem acesso a mesmo informação<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoHeading7 style='mso-pagination:none;mso-layout-grid-align:none;
punctuation-wrap:simple;text-autospace:none;vertical-align:baseline'><span
style='font-family:"Times New Roman"'>Exemplo de aplicação – Visita técnica<o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><span style='mso-tab-count:1'>            </span>A empresa
visitada foi a Conesteel Válvulas e Conexões Industriais Ltda., onde foi
desenvolvido o sistema SISCOVAL, aplicativo este que é usado em toda a rede, de
qualquer parte da fábrica. No exemplo, é conectado ao torno CNC um cabo serial
RS232, ligado à um computador com o sistema instalado. O sistema funciona da
seguinte maneira: um vendedor faz a cotação de preços, depois importa para
pedidos, que analisa automaticamente se existem peças em estoque, caso
afirmativo, envia um romaneio à expedição, senão verifica a possibilidade de
fabricação emitindo uma ordem de fabricação, e ordem de compra se for
necessário. Ainda no caso de válvulas, é necessário emitir uma ordem de montagem
com as ordens de fabricação de cada componente separadamente. Na fábrica, o
responsável pelos tornos CNC analisa a ordem de fabricação, por ela abre o
programa de desenhos da peça, o de layout da montagem da máquina para aquela
peça, o de processos (furação, usinagem, etc) daquela peça, e por fim abre o
Gerenciador de CNC, com o programa do torno daquela peça gravado no banco de
dados, que é possível pelo sistema alterar, simular graficamente como no torno,
e ainda trabalha como um DNC – software que transmite o programa ao torno.<o:p></o:p></span></p>

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
8: Foto do<span style="mso-spacerun: yes">  </span>torno com o cabo RS232 e do
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
mso-bidi-font-size:12.0pt;text-transform:uppercase'>SIStemas de getsão<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><b>Sistema (ou Software) de
Gestão<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'>“ Programa de computador que
auxilia na administração , total ou parcial, da empresa, podendo ser composto
de vários módulos, cada qual com uma finalidade.” ( Extraído da tese de
Doutorado de Wagner Däumichen Barrella ).</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>A arquitetura
de softwrae mais conhecida no mercado é a ERP ( Enterprise Resource Planning ).<span
style='font-family:"Arial Unicode MS"'><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>ERP é definido como uma arquitetura de
software que facilita o fluxo de informações entre todas as atividades da
empresa como fabricação, logística, finanças e recursos humanos. É um sistema
amplo de soluções e informações. Um banco de dados único, operando em uma
plataforma comum que interage com um conjunto integrado de aplicações,
consolidando todas as operações do negócio em um simples ambiente
computacional. Idealmente, a vantagem de um sistema ERP é a habilidade de
necessitar a entrada de informações uma única vez. Por exemplo, um
representante de vendas grava um pedido de compra no sistema ERP da empresa.
Quando a fábrica começa a processar a ordem, o faturamento e a expedição podem
checar o status da ordem de produção e estimar a data de embarque. O estoque
pode checar se a ordem pode ser suprida pelo saldo e podem então notificar a
produção com uma ordem que apenas complemente a quantidade de itens
requisitados. Uma vez expedida, a informação vai direto a relatório de vendas
para gerenciamento superior. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>O ERP emprega a tecnologia
cliente/servidor. Isto significa que o usuário do sistema (cliente) roda uma
aplicação (rotina de um módulo do sistema) que acessa as informaçãoes de um
sistema de gerenciamento de uma base de dados única (servidor). Isto, ao
contrário do antigo sistema de mainframe, reflete o conceito de computação
descentralizada. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>O sistema opera então com uma base de
dados comum, no coração do sistema. O banco de dados interage com todos o
aplicativos do sistema, desta forma, elimina-se a redundância e redigitação de
dados, o que assegura a integridade das informações obtidas. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Cada sistema de ERP oferece um conjunto de
módulos (aplicativos) para aquisição. Estes são os pacotes funcionais,
individualizados para cada unidade de negócio dentro da organização
(financeiro, engenharia, PCP, administração de materiais, contabilidade, etc.).
<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-fareast-font-family:
"MS Mincho"'>Muitos sistemas ERP são comercializados em um pacote com os
módulos básicos para a gestão do negócio e então oferecem módulos adicionais
que podem ser adquiridos individualmente em função do interesse e estratégia da
empresa. Todos esses aplicativos são completamente integrados a fim de
propiciar consistência e visibilidade para todas as atividades inerentes ao
processo da organização. Entretanto, o sistema ERP requer do usuário o
cumprimento dos procedimentos e processos como descrito pelo aplicativo. Os
vendedores de ERP também oferecem aplicativos especializados em gerir processos
diferenciados de atividades específicas. Tais módulos atendem a mercados
verticais assim como repartições públicas, planos de saúde, financeiras, etc.
Por exemplo a empresa SAP, oferece um módulo específico para o gerenciamento de
planos de saúde e convênios, que apoiam processos orientados ao paciente dentro
do hospital. A tendência atual mostra as vendas movendo-se mais ainda para
áreas específicas assim como gerenciamento do chão-de-fábrica, logística e
automação de marketing direto.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='font-family:Arial;
mso-fareast-font-family:"MS Mincho"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify'><b><span style='font-size:
12.0pt;mso-bidi-font-size:10.0pt;font-family:Arial;mso-fareast-font-family:
"MS Mincho"'>Benefícios do Sistema ERP<o:p></o:p></span></b></p>

<p class=MsoPlainText style='text-align:justify'><b><span style='font-size:
14.0pt;mso-bidi-font-size:10.0pt;font-family:Arial;mso-fareast-font-family:
"MS Mincho"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Tradicionalmente, as empresas
proliferaram-se com a utilização de sistemas incompatíveis, como CAD e sistemas
MRP, os quais armazenavam dados vitais, sem mecanismos de busca e acesso a tais
dados ou transferência entre sistemas. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Sistemas ERP funcionam com a utilização de
uma base de dados comum.<span style="mso-spacerun: yes">  </span>Assim, decisões
que envolvem análise de custos, por exemplo, podem ser calculadas com o rateio
de todos os custos na empresa com melhor performance do que com o levantamento
parcial em cada unidade. Além de evitar a conciliação manual das informações
obtidas entre as interfaces dos diferentes aplicativos. Um sistema integrado
oferece a possibilidade melhoria de relatórios, fidelidade de dados,
consistência e comparação de dados, devido à utilização de um critério único em
todas as atividades da empresa. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Impulsionado pelo processo de
re-engenharia do negócio, a implementação do ERP reduz redundância de
atividades na organização. Com departamentos utilizando aplicativos integrados
e compartilhando a mesma base de dados, não existe a necessidade de repetição
de atividades tais como reentrada de dados de um aplicativo para outro.
Estatisticamente, em sistemas não integrados, uma informação pode residir em
até 6 diferentes lugares [John H. Sheridan]. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>O sistema ERP identifica o tempo como uma
variável crítica de restrição, é a informação que norteia a tecnologia dos
negócios e a tecnologia da informação. A redução do tempo de cíclo é obtida via
minimização na obtenção e disseminação das informações. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Decisões ao longo dos processos da empresa
também são possíveis graças ao ERP. Isto resulta em economia de tempo, donínio
sobre as operações e também a eliminação daquelas supérfluas, as quais o
cliente não paga. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Elaine L. Appleton em seu livro &quot;How
to survive ERP&quot; cita o caso das indústrias PAR na cidade de Moline
(Illinois) em em um ano de implementação de ERP conseguiram reduzir o lead time
com o cliente de 6 para 2 semanas, as entregas na data da programação
aumentaram de 60% para 95%, os níveis de reserva de materiais e inventários
caiu em quase 60% e a tramitação dos documentos de uma ordem de produção no
chão de fábrica caiu de semanas para horas. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Reconhecendo as necessidades das empresas
em reduzir o tempo de resposta ao mercado de produtos e serviços, os sistemas
ERP são desenvolvidos para responder instantaneamente o surgimento de novas
necessidades não previstas. As operações podem facilmente mudar ou expandir sem
romper com as atividades em curso. Daí, o tempo para desdobrar e otimizar os
processos é severamente reduzido. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>As empresas estão sempre buscando novos
nichos de mercado. Um negócio não envolverá necessáriamente, sempre o mesmo
produto. Internamente</span><span style='font-size:12.0pt;mso-bidi-font-size:
10.0pt;font-family:Arial;mso-fareast-font-family:"MS Mincho"'> </span><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>teremos novas necessidades de processos,
então devemos estar preparados para tanto. <o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Um aspecto importante atualmente é o Bug
do ano 2.000. Devido a ser um sistema de última geração, a base de dados
relacional dos sistemas ERP suporta ano com 4 dígitos, o que não acontece em
antigos sistemas ainda remanecentes dos main-frames. Parece um fato de pouca
importância, mas muitas empresas</span><span style='font-size:12.0pt;
mso-bidi-font-size:10.0pt;font-family:Arial;mso-fareast-font-family:"MS Mincho"'>
</span><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:
"Times New Roman";mso-fareast-font-family:"MS Mincho"'>terão surpresas
desagradáveis com emissão de títulos, faturas, boletos, etc. na virada do ano.</span><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:Arial;mso-fareast-font-family:
"MS Mincho"'> </span><span style='font-size:12.0pt;mso-bidi-font-size:10.0pt;
font-family:"Times New Roman";mso-fareast-font-family:"MS Mincho"'><o:p></o:p></span></p>

<p class=MsoPlainText style='text-align:justify;text-indent:35.4pt'><span
style='font-size:12.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"MS Mincho"'>Outro detalhe importante é o surgimento de
novas moedas, assim como o Euro. Em um sistema ERP, a simples ação de converter
a moeda na base de dados atualizará todo o sistema e documentos derivados. O
mesmo pode significar uma atividade com semanas de duração em sistemas não
integrados. <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-fareast-font-family:
"MS Mincho"'>Muitos sistemas de ERP já possuem dualidade de moeda como
ferramenta inerente ao sistema, isto pode gerar uma transição confortável e
automática em uma situação de mudança de moeda. Quem administra o CPD de uma
grande corporação, sabe contabilizar as horas ou dias de desespero que poderão
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

<p class=MsoNormal>Os principais módulos do software SAP<span
style="mso-spacerun: yes">  </span>R/3 são:</p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><span style='font-size:11.0pt'>• Recursos Humanos<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>• Materiais<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>• Contabilidade Financeira<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>• Controladoria<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>• Projetos<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>• Investimentos de Capital<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>• Produção <o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>• Tesouraria<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>• Produção em indústria de Processos<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>• Vendas e Distribuição<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>• Controle de Empresa<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>• Manutenção<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:11.0pt'>• Workflow<o:p></o:p></span></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal>Estes softwares incorporam diversas soluções estratégicas em
seu conteúdo.<span style='display:none;mso-hide:all'><o:p></o:p></span></p>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='display:none;mso-hide:all;
mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes"> </span>Entre eles podemos citar:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><span
style="mso-spacerun: yes"> </span>- Supply Chain Management </span><span
lang=EN-US style='font-family:"Arial Unicode MS";mso-ansi-language:EN-US'><o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><span
style="mso-spacerun: yes"> </span>- CRM (Customer Relationship Management )<o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><span
style="mso-spacerun: yes"> </span>- E-Procurement <o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><span
style="mso-spacerun: yes"> </span>- E-Marketplace <o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><span
style="mso-spacerun: yes"> </span>- Business Intelligence <o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><span
style="mso-spacerun: yes"> </span>- Financials <o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><span
style="mso-spacerun: yes"> </span>- Product Lifecycle Management <o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-fareast-font-family:"Arial Unicode MS";
mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-fareast-font-family:"Arial Unicode MS";
mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'>Abaixo
daremos uma explicação básica sobre as soluções encontradas nestes softwares.
Cada softwrae coloca uma nomenclatura para sua solução, mas todos possuem o
mesmo conceito, que é o tentaremos mostrar.<o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><u>Supply Chain Management</u> </p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'>Os melhores produtos nem sempre são os
vencedores, mas as melhores redes de distribuição sim. A vantagem competitiva
não depende mais somente do produto ou da empresa. O que tem se mostrado
imbatível é integrar a Cadeia Produtiva para dinamizar e personalizar o
processo de fazer negócios com clientes alvo. <o:p></o:p></span></p>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'>O gerenciamento da Cadeia Produtiva (Supply
Chain Management - SCM) é mais do que apenas um novo modismo no mundo dos
negócios. É puro ouro. As empresas estão vislumbrando um aumento mensurável e
signifitivo dos lucros através dos recursos da Cadeia Produtiva (SCM).<o:p></o:p></span></p>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'>Existem dois lados na moeda do SCM: planejamento
e execução. O planejamento acelera a tomada de decisão, o que é vital para se
passar do &quot;e se&quot;... para &quot;o que é melhor&quot;... no
planejamento da transição de produtos desde a fonte até o seu uso final. Mas os
principais propulsores para maioria dos negócios baseiam-se na execução:<o:p></o:p></span></p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l9 level1 lfo14;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Maior participação de mercado <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l9 level1 lfo14;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Serviço de atendimento a clientes de
     padrão internacional <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l9 level1 lfo14;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Lançamento rápido de novos produtos <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l9 level1 lfo14;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Logística totalmente integrada <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l9 level1 lfo14;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Ciclo de fluxo de caixa acelerado <o:p></o:p></span></li>
</ul>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'>Portanto, não é de se estranhar que a execução
de uma Cadeia Produtiva voltada para o cliente tenha surgido como um fator
chave para uma vantagem competitiva e para o crescimento. A excelência na
execução significa estar o mais próximo possível de seu cliente, estar
totalmente sintonizado com suas exigências, as quais mudam constantemente, e,
então, adaptar o seu negócio para atender a essas exigências.<o:p></o:p></span></p>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'>A solução Supply Chain, permite capacitá-lo para
executar de forma dinâmica redes de distribuição orientadas ao cliente. Uma
abrangente rede central de computadores de funcionalidade compartilhada via
distribuição facilita realizar negócios da maneira que o cliente quer. <o:p></o:p></span></p>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'>O Supply Chain da J. D. Edwards amplia o sistema
de informações limitado do ERP, transformando-o em uma Cadeia Produtiva
ampliada que apoia a tomada de decisões. O banco de dados de informações do
cliente e de produtos (que possibilita uma comunicação &quot;de interface e
imagem de dados únicas&quot; através de aplicações tradicionais de ERP). É
ampliado para incluir a execução de funções centrais de distribuição, tais
como:<o:p></o:p></span></p>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l8 level1 lfo15;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Gerenciamento de preços e promoções <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l8 level1 lfo15;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Planejamento e programação antecipados <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l8 level1 lfo15;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Gerenciamento de pedidos com
     configuração de pedidos de vendas <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l8 level1 lfo15;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Automatização da força de vendas <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l8 level1 lfo15;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Gerenciamento de estoque <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l8 level1 lfo15;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Gerenciamento de transporte <o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     text-align:justify;mso-list:l8 level1 lfo15;tab-stops:list 36.0pt'><span
     style='mso-bidi-font-size:10.0pt'>Gerenciamento do serviço de atendimento
     ao cliente <o:p></o:p></span></li>
</ul>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'>Ao usar recursos comerciais eletrônicos
eficazes, você mantém a coerência estratégica e a integridade dos dados, a
medida que você expande o raio de ação de seus negócios para incluir parceiros
comerciais. O J.D. Edwards Supply Chain da J.D. Edwards possibilita a troca
eletrônica de dados (EDI - Electronic Data Interchange) e é compatível com a
Web, de forma que você possa compartilhar, de forma colaborativa, as
informações sobre oferta e procura e acessar telas com informações sobre
transações de solicitações e pedidos para seus fornecedores e clientes.<o:p></o:p></span></p>

<p style='text-align:justify'><span style='mso-bidi-font-size:10.0pt;
font-family:"Times New Roman"'>Resumidamente, você tem condições de receber um
pedido, determinar o preço, produzir ou suprir, embalar e enviar o produto da
forma que seu cliente deseja. Você pode oferecer a opção de uma assistência
pós-venda através de uma linha direta, pedido de conserto ou assistência
técnica no local. Você poderá emitir faturas no formato, ciclo de faturamento,
idioma e moeda que o cliente preferir. E toda essa flexibilidade está integrada
a um único sistema de serviço personalizado,
&quot;one-face-to-the-customer&quot;, em qualquer estágio da Cadeia Produtiva.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-fareast-font-family:
"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><u><span lang=EN-US
style='mso-fareast-font-family:"Arial Unicode MS";mso-ansi-language:EN-US'>CRM
- </span></u><u><span lang=EN-US style='mso-ansi-language:EN-US'>Customer
Relationship Management<o:p></o:p></span></u></p>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Customer
Relationship Management ou Gerenciamento do Relacionamento, como o próprio nome
indica é a integração entre o Marketing e a tecnologia da Informação para
prover a empresa de meios mais eficazes e integrados para atender, reconhecer e
cuidar do cliente, em tempo real e transformar estes dados em informações que
disseminadas pela organização permitem que o cliente seja “conhecido” e cuidado
por todos e não só pelas operadoras do <a href="..\..\TEMP\call_center.htm"><span
style='color:windowtext;text-decoration:none;text-underline:none'>Call Center</span></a>.<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Além
de estar preparado para atender no primeiro toque, é preciso responder o e-mail
ou o fax assim que chega a empresa, e incorporar todos os dados de contato no <a
href="..\..\TEMP\data_base.htm"><span style='color:windowtext;text-decoration:
none;text-underline:none'>Database Marketing</span></a> para gerar uma
comunicação continuada e com pertinência por qualquer meio (telefone, mala
direta, e-mail e pessoal). Além disso a captura centralizada desses dados,
transmitida para o banco de dados de marketing permite conhecer o perfil do
cliente, detectar as ameaças e oportunidades sinalizadas através de uma
reclamação (ameaça), de um pedido de mais informações (oportunidade), de um
pedido acompanhado de uma referência ao preço diferenciado do concorrente
(ameaça), de uma insinuação que o concorrente está prestando mais serviços
(ameaça), ou de que a empresa está ampliando a sua produção
(oportunidade).&nbsp;<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>O CRM
é a combinação da filosofia do <a href="..\..\TEMP\estrat_mark.htm"><span
style='color:windowtext;text-decoration:none;text-underline:none'>marketing de
Relacionamento</span></a>, que ensina a importância de cultivar os clientes e
estabelecer com os mesmo um relacionamento estável e duradouro através do uso
intensivo da informação, aliado a tecnologia da informação que prove os
recursos de informática e telecomunicações integrados de uma forma singular que
transcende as possibilidades dos <a href="..\..\TEMP\call_center.htm"><span
style='color:windowtext;text-decoration:none;text-underline:none'>Call Center</span></a>s
atuais.&nbsp;<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Essa
integração singular pressupõe que a empresa esteja disposta a manter um
relacionamento suportado por processos operacionais mais ágeis e selecione a
tecnologia adequada, e isto requer metodologia, expertise e experiência
comprovada neste tipo de solução. É uma grande virada no conceito de
atendimento ao cliente, que extrapola a prática existente em qualidade, e
possibilidade de aumentar a fidelidade do cliente e consequentemente a
rentabilidade.&nbsp;<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Também
é preciso que os recursos humanos sejam treinados e capacitados, em todos os
níveis, não só para melhorar a qualidade do atendimento, mas também para usar
adequadamente as informações que transformam possibilidades de negócios em
lucros.&nbsp;<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Caso
prático: Uma empresa de gases industriais, para ser bem sucedida no
gerenciamento do relacionamento com o cliente transformou o seu serviço de
atendimento ao cliente, de um estágio de triagem receptivas das ligações, sem
autonomia para o estágio de alavancagem, incorporando as atividades de <a
href="..\..\TEMP\telemarketing.htm"><span style='color:windowtext;text-decoration:
none;text-underline:none'>telemarketing</span></a> ativo para identificar novas
oportunidades de negócios, vendas e cobrança, visando a fidelidade do cliente.
O novo Contact Center, totalmente informatizado, integrou-se a um sistema de
informações sobre o cliente totalmente integrado e operando em tempo real. Este
sistema será usado pelas unidades de negócios, pelo marketing, vendas e serviço
de atendimento ao cliente no dia a dia e coletar muitos dados sobre o
comportamento do clienter, para entender as questões referentes à elasticidade
ao preço, percepção da marca, propensão a consumir outros produtos da empresa
(cross-selling), etc.&nbsp;<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Portanto,
para melhorar a habilidade para capturar dados, tratamento e uso das
informações para gerar mais retorno foi preciso dotar a empresa, além da
tecnologia adequada (equipamento de telecomunicações com DAC, <a
href="..\..\TEMP\call_center.htm"><span style='color:windowtext;text-decoration:
none;text-underline:none'>0800</span></a>, gerenciador de WEB e fax, de uma
estratégia de relacionamento com o cliente, que definiu as políticas de
comercialização, autonomia das operadoras nas negociações do pedido e formas de
comunicação por marketing direto. A Estratégia foi definida a partir de uma
pesquisa realizada com os clientes e a contratação da <a
href="..\..\TEMP\index.htm"><span style='color:windowtext;text-decoration:none;
text-underline:none'>Bretzke</span></a> Consultoria que desenvolveu um projeto
de processo do cliente, que mapeou como os clientes contatam a empresa e como
desejam ser atendidos e que realizou o redesenho dos processos através do fluxo
do pedido e informações. Também foram redefinidos os perfil das profissionais
do Contact Center, que passaram a ter nível universitário e foram treinadas
através de um programa formal de treinamento com mais de 120 horas de cursos em
produtos e as suas aplicações técnicas, na qualidade do atendimento e no
próprio negócio dos clientes da empresa. Os resultados começaram a aparecer
mesmo antes do projeto estar completamente implantado, pois com a revisão dos
processos e mudança nos recursos humanos a qualidade do atendimento foi
imediata, houve redução no tempo que os vendedores dedicavam a solução de
problemas e atendimento aos clientes por problemas relacionados a parte
administrativa do pedido.&nbsp;<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Nesse
contexto hoje existe uma bom número de soluções a disposição, mas também está
se formando uma torre de babel em torno do que significa <a
href="..\..\TEMP\estrat_mark.htm"><span style='color:windowtext;text-decoration:
none;text-underline:none'>Marketing de Relacionamento</span></a> e CRM e que
tecnologia é apropriada. No quadro abaixo definimos o escopo de cada solução e
seus principais fornecedores e como a empresa precisa visualizar a integração
das diversas soluções. Ë preciso derrubar o mito de que uma única solução possa
suprir a necessidade de gerenciamento do relacionamento. No quadro a baixo
verificamos que o gerenciamento do cliente é composto de uma parte da solução
típica de <a href="..\..\TEMP\call_center.htm"><span style='color:windowtext;
text-decoration:none;text-underline:none'>Call Center</span></a> mais a solução
de <a href="..\..\TEMP\data_base.htm"><span style='color:windowtext;text-decoration:
none;text-underline:none'>database marketing</span></a>, e que uma complementa
a outra, que por sua vez se integram aos demais sistemas operacionais.<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Finalmente,
é recomendável a contratação de uma empresa com metodologia de implantação de
projetos que faça o papel de integrador, atuando em conjunto com a área de
tecnologia da informação e marketing e que concilie os interesses das áreas sob
a égide da filosofia de <a href="..\..\TEMP\estrat_mark.htm"><span
style='color:windowtext;text-decoration:none;text-underline:none'>Marketing de
Relacionamento</span></a><o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>As
empresas, integrando o Marketing e a tecnologia da informação no esforço para
manterem a sua posição competitiva, estão concentrado-se em oferecer cada vez
mais serviços aos seus clientes, pois entendem de que a lealdade dos clientes
diminui a sua dependência da inovação de produtos e serviços, as torna menos
suscetível a guerra de preços, e coloca o diferencial competitivo na lealdade
do cliente investindo em <a href="..\..\TEMP\call_center.htm"><span
style='color:windowtext;text-decoration:none;text-underline:none'>Call Centers</span></a>.&nbsp;<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Portanto,
adotar o quanto antes o método do CRM (Customer Relatioship Management) é uma
questão de manter a competitividade, pois os clientes foco da atenção de tantas
empresas aumentaram as suas expectativas e não se contentam simplesmente com um
acesso rápido e fácil, a qualquer hora às centrais de atendimento.&nbsp;<o:p></o:p></span></p>

<p style='text-align:justify'><span style='font-family:"Times New Roman"'>Por
isso, é preciso ir além. É preciso transformar o seu <a
href="..\..\TEMP\call_center.htm"><span style='color:windowtext;text-decoration:
none;text-underline:none'>Call Center</span></a> num Contact Center, onde o
típico acesso telefônico gratuito está sendo substituído por acessos
alternativos, por e-mail, fax, e Internet, e cada que as atendentes tem
autonomia plena para resolver qualquer problema do cliente na primeira chamada,
ou em tempo hábil. Além disso, é preciso que toda a empresa esteja preparada
para prestar o atendimento e reconhecimento que o cliente deseja e - que a
empresa promete- , e isso só é preciso se for disponibilizado o mesmo “front
office” (software com a ficha do cliente e todos os dados de relacionamento) do
Contact Center para qualquer departamento da empresa com a finalidade de
auxiliar o crescimento e manutenção desse forte relacionamento que se
transformará em receitas e lucros crescentes.&nbsp;</span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<h3><u><span style='font-family:"Times New Roman"'>Business Intelligence<o:p></o:p></span></u></h3>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p style='margin-right:2.45pt;text-align:justify'><span style='font-family:
"Times New Roman";mso-fareast-font-family:"Times New Roman"'>Inteligência é o
resultado de um processo que começa com a coleta de dados. Esses dados são
organizados e transformados em informação que, depois de analisada e
contextualizada, transforma-se em inteligência. Essa, por sua vez, quando
aplicada a processos de decisão, gera vantagem competitiva para a organização.<o:p></o:p></span></p>

<p style='margin-right:2.45pt;text-align:justify'><span style='font-family:
"Times New Roman";mso-fareast-font-family:"Times New Roman"'>Business
Intelligence é um conjunto de conceitos e metodologias que, fazendo uso de
acontecimentos (fatos) e sistemas baseados nos mesmos, apóia a tomada de
decisões em negócios. Aplicações BI incluem sistemas de suporte a decisões,
ferramentas para</span><span style='font-family:"Times New Roman"'> pesquisas e
relatórios, análises estatísticas e previsões. <o:p></o:p></span></p>

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
font-family:"Times New Roman";mso-bidi-font-family:Arial'>Atuadores Elétricos<o:p></o:p></span></b></p>

<p class=MsoBodyText><b><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-left:1.05pt'><b><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'>Definição:<o:p></o:p></span></b></p>

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
elétrico é um conjunto de motor elétrico + controle que tem como principal
objetivo a motorização de válvulas, dampers, comportas entre outros
equipamentos similares á distância. A figura 1.1 demonstra uma válvula com um
atuador elétrico acoplado. <o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-top:6.0pt;margin-right:0cm;
margin-bottom:0cm;margin-left:21.25pt;margin-bottom:.0001pt;text-align:center'><b><span
style='font-size:11.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Figura 1.1<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:24.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:1.15pt;margin-bottom:.0001pt'><b><u><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'>Funcionamento de um atuador
elétrico e seus sensores<o:p></o:p></span></u></b></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Funcionamento</span></b><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'><o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Um CLP, por exemplo, manda um sinal para o painel
de controle do atuador, o painel de controle pega este sinal e transforma em
movimento para o motor que atuará na cadeia mecânica do equipamento. Se o
atuador estiver operando com servo motor esta cadeia mecânica não será mais
necessária, pois o servomotor conserva o torque mesmo parado.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Sensores.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Um atuador elétrico possui sensores de torque e
posição/movimento. O sensor de torque que vai dizer com que força que o motor
elétrico está atuando e o de posição/movimento a onde que o equipamento parou
ou onde ele está quando em movimento.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A figura 5.1 mostrará a localização destes
sensores, do motor e da cadeia mecânica de um atuador elétrico.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:24.0pt;margin-right:0cm;margin-bottom:
12.0pt;margin-left:1.15pt'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Opções de controle:<o:p></o:p></span></u></p>

<p class=MsoBodyText style='margin-left:1.05pt'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:37.15pt;text-indent:-18.0pt;mso-list:
l12 level1 lfo17;tab-stops:list 37.15pt'><![if !supportLists]><span
style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'>Standard.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:6.0pt;text-indent:1.0cm'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Compostos
basicamente pelo conjunto mecânico, motor e sensores. Toda a parte de controle
é realizado externamente através de CLP, por exemplo.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Neste tipo de controle o equipamento é utilizado
com atuações limitadas de ação, ou seja, o equipamento não é controlado por
multi voltas na cadeia mecânica, mas sim por número de voltas limitadas. A
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
tab-stops:list 37.15pt'><![if !supportLists]><span style='font-family:Symbol'>·<span
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
<span style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>A única
diferença, em relação ao Standard é que a parte de controle e comando está
acoplada ao equipamento. A figura 2.2.1. demonstra a planta de um controle
integral.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<br style='mso-ignore:vglayout' clear=ALL>

<p class=MsoBodyText align=center style='margin-left:49.65pt;text-align:center'><b><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Figura 2.2.1<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:37.15pt;text-indent:-18.0pt;mso-list:l12 level1 lfo17;
tab-stops:list 37.15pt'><![if !supportLists]><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><![endif]><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Modulante.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A única diferença em relação ao Standard e o
Integral e que o equipamento pode ser modulado sem número limitado de atuação,
ou seja, pode ser controlado para atuar de 0 – 100% através de sinal analógico
que na figura 2.3.1. mostra como sendo de 4 – 20 mA.<o:p></o:p></span></p>

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
tab-stops:list 37.15pt'><![if !supportLists]><span style='font-family:Symbol'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><![endif]><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Inteligente.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Utilizado para controle de vários equipamentos ao
mesmo tempo, interligados a redes de comunicação e uma estação mestra como
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
Arial'>Redes de comunicação abertas e normalizadas;<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.55pt;text-indent:-17.85pt;
line-height:150%;mso-list:l10 level1 lfo16;tab-stops:list 19.05pt left 42.55pt'><![if !supportLists]><span
style='font-family:"Times New Roman"'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'>Protocolos de comunicação;<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.55pt;text-indent:-17.85pt;
line-height:150%;mso-list:l10 level1 lfo16;tab-stops:list 19.05pt left 42.55pt'><![if !supportLists]><span
style='font-family:"Times New Roman"'>-<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'>Interoperabilidade com equipamento de diversos fabricantes.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:49.65pt;text-indent:-1.0cm;tab-stops:
49.65pt'><span style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>OBS:<span
style='mso-tab-count:1'> </span>Estes sistemas de controles serão melhor
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
funções:<o:p></o:p></span></b></p>

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
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>    </span>Motor
elétrico: principal componente do atuador, pois é ele que vai atuar na cadeia
mecânica.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>2-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>    </span>Cadeia
Mecânica: transforma a energia elétrica em mecânica.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>3-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>    </span>Operação
Manual: serve para manipular manualmente o equipamento quando há um problema
com a eletrônica (uma perda de comunicação com o equipamento, por exemplo)<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>4-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>    </span>Acoplamento
de saída: seve para a introdução de um redutor quando ha necessidade de grandes
torques de trabalho do equipamento.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>5-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>    </span>Invólucro:
carcaça do equipamento para proteção do mesmo.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>6-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>    </span>Unidade de
controle.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>7-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>    </span>Placa de
comunicação: mandar informações para centrais de rede, protocolos dentre outros
tipos de comunicação<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>8-<span style='mso-tab-count:1'>    </span></span></b><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Indicador
mecânico de posição: serve para visualizar a posição em que o equipamento parou
no caso de falta de energia, por exemplo.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>9-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>    </span>Sensor
eletrônico de torque: célula de carga para medição dinâmica e real do torque de
saída aplicado.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>10-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>  </span>Sensor
eletrônico de posição e movimento: mesma idéia do sensor de torque.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:42.5pt;text-indent:-21.25pt;line-height:
16.0pt;tab-stops:42.55pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>11-</span></b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style='mso-tab-count:1'>  </span>Terminal de
bornes: saída do equipamento para a rede, por exemplo, e entrada de energia
para o funcionamento do equipamento.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:24.0pt;margin-right:0cm;margin-bottom:
12.0pt;margin-left:0cm'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Exemplos de processos onde atuam atuadores elétricos<o:p></o:p></span></b></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'>Usinas.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:6.0pt'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><span style="mso-spacerun: yes"> </span>-
Caldeiras;<o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'><span style="mso-spacerun: yes"> </span>- Comportas, dentre outros<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'>Redes hidráulicas.<o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'><span style="mso-spacerun: yes"> </span>- Fan coils (ar condicionado);<o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'><span style="mso-spacerun: yes"> </span>- Sistemas de distribuição de
combustível, dentre outros<o:p></o:p></span></p>

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
14.0pt;mso-bidi-font-size:10.0pt'>Variadores de Freqüência<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><b style='mso-bidi-font-weight:
normal'><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'>Os variadores de freqüência, também chamados
de inversores ou conversores de freqüência, cuja função básica é a de
proporcionar a variação de velocidades em motores de indução trifásico.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'>Os inversores e conversores representam o
estado da arte em tecnologia para acionamento de motores de indução trifásicas.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'>Utilizando as mais avançadas técnicas de
controle vetorial de fluxo, permitem controlar a velocidade e também o torque
proporcionando:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><span style="mso-spacerun:
yes">                     </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                     </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">   </span>Elevada precisão de velocidade;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                   </span><span
style="mso-spacerun: yes">  </span></span><span style='font-family:Symbol;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-char-type:symbol;mso-symbol-font-family:Symbol;mso-bidi-font-weight:bold'><span
style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>·</span></span><span
style='mso-bidi-font-weight:bold'><span style="mso-spacerun: yes"> 
</span>Elevada precisão de torque;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                     </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">  </span>Otimização do torque de partida;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                     </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">  </span>Excelente dinâmica;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                     </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">  </span>Tempo de resposta extremamente reduzido;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyTextIndent><b style='mso-bidi-font-weight:normal'>Os variadores
são capazes de atingir desempenhos equivalentes aos tradicionais acionamentos
com motores de corrente continua. Aliados a vantagens dos motores de indução
trifásicos .<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'>Podem ser aplicados em:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                   </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                    </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">  </span>Sistemas multimotores sincronizados;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                    </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">  </span>Maquinas de papel;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                    </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">  </span>Rebobinadeiras de papel;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                    </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">  </span>Laminadores de aço;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                    </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">  </span>Guinchos, guindastes e pontes rolantes;<span
style="mso-spacerun: yes">  </span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                    </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">  </span>Elevadores e transportadores de carga ;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                    </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">  </span>Splinde em maquinas ferramentas;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                    </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">  </span>Bobinadeiras e desbobinadeiras;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                    </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">  </span>Extrusoras de filme plástico;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                    </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">  </span>Compressores;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                    </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">  </span>Bombas;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                    </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">  </span>Ventiladores;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">        </span><span style="mso-spacerun:
yes">            </span></span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol;mso-bidi-font-weight:bold'><span
style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>·</span></span><span
style='mso-bidi-font-weight:bold'><span style="mso-spacerun: yes"> 
</span>Condensadores;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-bidi-font-weight:
bold'><span style="mso-spacerun: yes">                    </span></span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style='mso-bidi-font-weight:bold'><span
style="mso-spacerun: yes">  </span>Outros;<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'>Os variadores partem do principio de
controlar a velocidade de um motor, fazendo com que trabalhe exercendo a mesma
função, porem com menos<span style="mso-spacerun: yes">  </span>rotação. <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'>Esta função proporciona menor consumo de energia,
uma vez que o regime de operação varia com a necessidade da maquina.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyTextIndent><b style='mso-bidi-font-weight:normal'>Os variadores
transformam a alimentação de entrada com freqüência fixa em uma sadia com
tensão e freqüência variável.<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'>A entrada é transformada para continua e
invertida para alternada com tensão e freqüência variável.<o:p></o:p></span></p>

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
produzindo pulsos com largura variando de forma a alcançar uma corrente media
senoidal. Os disparos sincronizados dos transistores produzem três fases de 120
graus, formando um circuito trifásico.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'><span
style='mso-bidi-font-weight:bold'>Com a rotação do motor é diretamente
proporcional a freqüência enviada ao mesmo, ao variar a freqüência , varia-se à
velocidade do motor. <o:p></o:p></span></p>

<p class=MsoBodyTextIndent><b>A aplicação dos variadores é a possibilidade de
se trabalhar com velocidades determinadas. Este fato irá intervir diretamente
no consumo de energia de uma instalação, uma vez que a energia é requerida de
acordo com a real necessidade, minimizando os desperdícios. A cada 10% de
redução de velocidade do motor, é possível economizar 30% DE ENERGIA. A razão é
cúbica : <o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">            </span></p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">            </span>Se reduzir a rotação de 60 Hz para 54 Hz, a economia
será de 30%.</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun: yes"> 
</span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>O motor
ligado irá rodar a 100% , porem muitas vezes sem necessidade, onde poderia
rodar a 80% de sua capacidade. Com a aplicação do variador, é possível baixar
esta velocidade, podendo trabalhar na curva mínima de consumo de energia,
adequando-se a instalação às suas reais necessidades.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>A variação de
velocidade permite a implantação de controles de vazão, temperatura, pressão e
outros, precisos e econômicos.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-left:42.55pt;text-align:justify;text-indent:
-11.35pt;mso-list:l15 level1 lfo18;tab-stops:list 49.2pt'><![if !supportLists]><span
style='font-family:Wingdings'>Ø<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]>Vantagens:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">                </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style="mso-spacerun: yes">   </span>Redução da
corrente de partida dos motores;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">                </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style="mso-spacerun: yes">   </span>Aumento da
durabilidade dos motores e da parte mecânica;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">                </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style="mso-spacerun: yes">   </span>Redução de
ruído dos motores;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">                </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style="mso-spacerun: yes">   </span>Redução de
velocidade do consumo de energia elétrica;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">                </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style="mso-spacerun: yes">   </span>Assegura
durabilidade dos equipamentos e componentes;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">                </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style="mso-spacerun: yes">   </span>Partida suave
do motor;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">                </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style="mso-spacerun: yes">   </span>Menor
manutenção dos equipamentos</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun: yes"> 
</span><span style="mso-spacerun: yes">              </span><span
style='font-family:Symbol;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:
"Times New Roman";mso-char-type:symbol;mso-symbol-font-family:Symbol'><span
style='mso-char-type:symbol;mso-symbol-font-family:Symbol'>·</span></span><span
style="mso-spacerun: yes">   </span>Diminui o risco dos equipamentos, pois se
ligado diretamente na rede, há um tranco mecânico no momento da partida,
causando o desgaste de peças e fadiga do motor;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">                </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style="mso-spacerun: yes">   </span>Proteção do
motor;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">                </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style="mso-spacerun: yes">   </span>Proteção
térmica;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">                </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style="mso-spacerun: yes">   </span>Proteção para
sobrecarga;</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">                </span><span style='font-family:Symbol;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Symbol'><span style='mso-char-type:symbol;mso-symbol-font-family:
Symbol'>·</span></span><span style="mso-spacerun: yes">   </span>Proteção para
subcarga;</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>O variador
possui função de desarmar o sistema elétrico, impedindo a sobretensão de chegar
ao equipamento, e fazer a leitura indicando as falhas do tipo curto-circuito.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>Os variadores
quando devidamente dimensionados, possibilitam transformar redes alimentação
monofásicas em redes trifásicas.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-left:42.55pt;text-align:justify;text-indent:
-11.35pt;mso-list:l15 level1 lfo18;tab-stops:list 49.2pt'><![if !supportLists]><span
style='font-family:Wingdings'>Ø<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]>Integração com os sistemas :</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>Atualmente no
mercado encontram – se disponíveis diversos modelos que atendem vários níveis
de potência.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>A variadores,
desde potências fracionais até centenas de Cvs.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-left:42.55pt;text-align:justify;text-indent:
-11.35pt;mso-list:l15 level1 lfo18;tab-stops:list 49.2pt'><![if !supportLists]><span
style='font-family:Wingdings'>Ø<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]>Tendências : </p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>Guiados pela
crise de energia, os variadores estão ganhando espaço em instalações de menor
porte.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>O mercado de
variadores de freqüência, em virtudes de suas vantagens, principalmente, pela
economia de energia e com preços reduzidos, acessíveis aos usuários que possuem
instalações de menor porte.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>Em evolução
continua os variadores de freqüência, tornam-se<span style="mso-spacerun:
yes">  </span>cada vez menores e potentes, com maior eficiência e numero maior
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
Arial;color:black'>Chopper – Conversores CC / CC<o:p></o:p></span></b></p>

<p class=MsoBodyText align=center style='margin-left:1.05pt;text-align:center'><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial;color:blue'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:1.05pt;tab-stops:5.0cm'><b><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Definição<o:p></o:p></span></b></p>

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
muitas aplicações industriais, é necessário converter uma fonte de tensão CC
(corrente contínua) fixa em uma tensão CC variável. Um Chopper converte
diretamente de CC para CC e é conhecido como um conversor CC-CC. Um Chopper
pode ser considerado o equivalente CC de um transformador CA (corrente
alternada) com uma relação de espiras continuamente variável. Da mesma maneira
que um transformador, ele pode ser utilizado para abaixar ou elevar a tensão de
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
mso-bidi-font-family:Arial'>Aplicação<o:p></o:p></span></b></p>

<p class=MsoBodyText style='text-indent:21.3pt'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Os Choppers são amplamente utilizados para controle
de tração de motores em automóveis elétricos, trolebus (ônibus elétrico),
guindastes marinhos, empilhadeiras de almoxarifados e transportadores em minas.
Eles fornecem controle de aceleração suave, alta eficiência e reposta dinâmica
rápida. Os Choppers podem ser usados na frenagem regenerativa de máquinas de
corrente contínua (MCC), para devolver energia à fonte de alimentação. Os
Choppers são usados em reguladores de tensão CC e também com um indutor pra
gerar uma fonte de corrente CC, especialmente para os inversores do tipo fonte
corrente.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:24.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:1.15pt;margin-bottom:.0001pt'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></u></p>

<p class=MsoBodyText style='margin-top:24.0pt;margin-right:0cm;margin-bottom:
0cm;margin-left:1.15pt;margin-bottom:.0001pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Vantagem do uso dos Choppers.<o:p></o:p></span></b></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Devolvem energia à fonte de alimentação resultando
em <b>economia de energia</b> para sistemas de transportes com paradas
freqüentes.<o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><b><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'>Principio da operação de um Chopper.<o:p></o:p></span></b></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-bidi-font-family:
Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-bottom:6.0pt'><u><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'>Abaixadora.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Este princípio é utilizado para quando há a
necessidade de transformar uma tensão CC em uma tensão CC baixa.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Elevadora. <o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Este princípio é utilizado nos aparelhos de choque
da polícia, por exemplo. A tensão CC de entrada do aparelho é menor do que a de
saída.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:1.15pt'><b><span style='font-family:
"Times New Roman";mso-bidi-font-family:Arial'>Classificação dos Choppers.<o:p></o:p></span></b></p>

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
dos sentidos dos fluxos da corrente e da tensão, os Choppers podem ser
classificados em cinco tipos, como mostrado na figura 5.1.<o:p></o:p></span></p>

<p class=MsoBodyText align=center style='margin-left:21.3pt;text-align:center'><b><span
style='font-family:"Times New Roman";mso-bidi-font-family:Arial'>Figura 5.1<o:p></o:p></span></b></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Classe A.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A corrente de carga flui “para dentro” da carga.
Ambas, a tensão e a corrente da carga, são positivas, como mostrado na Figura
9.6(a). Este é um Chopper de um quadrante e diz-se que ele opera como um
retificador.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Esta classe pode ser usada quando queremos acelerar
uma máquina de corrente contínua.<o:p></o:p></span></p>

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
mso-bidi-font-family:Arial'>A corrente flui “para fora” da carga. A tensão da
carga é positiva, mas a corrente é negativa, como mostrado na figura 9.6(b).
Esse também é um Chopper de um quadrante, mas opera no segundo quadrante, e
diz-se que ele opera como um inversor.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Esta classe pode ser usada quando queremos frear
uma máquina de corrente contínua.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Classe C.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A corrente da carga é tanto positiva quanto
negativa, como mostrado na Figura 9.6(c). A tensão da carga é sempre positiva.
Este é conhecido como um Chopper de dois quadrantes. Os Choppers classes A e B
podem ser combinados para formar um Chopper classe C.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Esta classe pode ser usada para quando queremos
acelerar ou frear um carro elétrico.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Classe D.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A única diferença da classe C é que a corrente da
carga é positiva como mostrado na figura 9.6(d).<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Classe E.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A corrente da carga é tanto positiva quanto
negativa, como mostrado na figura 9.6(e).É conhecido como Chopper de quatro
quadrantes. Dois Choppers classe C podem ser combinados para formar um Chopper
de classe E.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A grande vantagem de se utilizar esta classe, é que
se há uma inversão de corrente ou de carga ele continua operado normalmente.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:24.0pt;margin-right:0cm;margin-bottom:
12.0pt;margin-left:1.15pt'><b><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Reguladores chaveados<o:p></o:p></span></b></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Os Choppers CC podem ser utilizados como
reguladores chaveados para converter uma tensão CC, em geral não regulada, em
uma tensão CC regulada de saída.<o:p></o:p></span></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>A tensão de saída é comparada com um valor de
referência, este erro gerado é amplificado, pois o a corrente de medição é
muito baixa, e é aplicada ao Chopper para regular esta tensão de saída.<o:p></o:p></span></p>

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
mso-bidi-font-family:Arial'>Este tipo de regulador é utilizado quando se quer
regular uma tensão da saída menor que a de entrada.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Regulador Boost.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Este tipo de regulador é utilizado quando se quer
regular uma tensão da saída maior que a de entrada.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span lang=EN-US style='font-family:"Times New Roman";
mso-bidi-font-family:Arial;mso-ansi-language:EN-US'>Regulador Buck-Boost.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Este tipo de regulador é utilizado quando se quer
regular uma tensão da saída menor ou maior que a de entrada com as mesmas
polaridades de tensão de saída e entrada.<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-top:12.0pt;margin-right:0cm;margin-bottom:
6.0pt;margin-left:0cm'><u><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Regulador Cuk.<o:p></o:p></span></u></p>

<p class=MsoBodyText style='text-indent:1.0cm'><span style='font-family:"Times New Roman";
mso-bidi-font-family:Arial'>Este tipo de regulador é utilizado quando se quer
regular uma tensão da saída menor ou maior que a de entrada, mas com as <span
style="mso-spacerun: yes"> </span>polaridades de tensão de saída e entrada
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
14.0pt;mso-bidi-font-size:10.0pt'>Motores Assíncronos<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Princípio de
operação e característica<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Os motores assíncronos ou de indução, por serem
robustos e baratos, são os motores mais largamente empregados na industria.
Nestes motores, o campo girante roda a velocidade síncrona, como nas maquinas
síncronas:</p>

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
girando em vazio e sem perdas, o rotor teria também a velocidade síncrona.
Entretanto ao ser aplicado um conjunto externo ao motor, o seu rotor diminuirá
de velocidade na justa proporção necessária para que a corrente induzida pela
diferença de rotação entre o campo girante (síncrono) e o rotor, passe a
produzir um conjugado eletromagnético igual e oposto ao conjugado externamente
aplicado. O conjugado eletromagnético é proporcional ao fluxo produzido pelo
campo girante, e à corrente e fator de potência do rotor.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>A perda de rotação do motor (necessária para que um
conjugado eletromagnético seja produzido), expressa por unidade da velocidade
síncrona, chama-se escorregamento:</p>

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
</xml><![endif]--></span><span style="mso-spacerun: yes"> </span><span
style='font-family:Symbol'>w</span>s</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>s = escorregamento (perda de rotação do rotor)</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>n = velocidade do rotor</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='font-family:Symbol'>w</span> = velocidade
angular do rotor</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>O conjugado magnético pode ser expresso pela relação:</p>

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
</xml><![endif]--></span><span style="mso-spacerun: yes"> </span><span
style='font-family:Symbol'>w</span>s</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>onde:</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>Pg é a potência do campo girante que gira a uma velocidade
angular síncrona <span style='font-family:Symbol'>w</span>s. Por outro lado, se
P é a potência mecânica fornecida através do eixo, que gira a uma velocidade
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
</xml><![endif]--></span><span style="mso-spacerun: yes"> </span><span
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
style="mso-spacerun: yes"> </span>( </span><span style='font-family:Symbol'>w</span><span
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
style="mso-spacerun: yes"> </span></span><span style='font-family:Symbol'>w</span><span
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
style="mso-spacerun: yes"> </span>Pg<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'><span lang=EN-US style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>A potência cedida pelo eixo é igual à potência
disponível no entreferro da maquina Pg (potencia do campo girante), menos a
parcela correspondente às perdas no rotor s <span style='font-size:10.0pt;
mso-bidi-font-size:12.0pt'><!--[if gte vml 1]><v:shape id="_x0000_i1034"
 type="#_x0000_t75" style='width:9pt;height:10.2pt' o:ole="">
 <v:imagedata src="./arquivos/image097.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=12 height=14
src="./arquivos/image101.gif" v:shapes="_x0000_i1034"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="Equation.3" ShapeID="_x0000_i1034"
  DrawAspect="Content" ObjectID="_1067749882">
 </o:OLEObject>
</xml><![endif]--></span><span style="mso-spacerun: yes"> </span>Pg.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Um dos problemas das maquinas síncronas é que ela
toma sua corrente de magnetização da mesma fonte que lhe fornece a potência
elétrica a ser transformada em mecânica.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Desta forma ao analisar o funcionamento do motor, é
preciso trabalhar sempre com corrente absolvida da linha decomposta em duas
componentes:</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>A parcela corresponde à magnetização do núcleo da
máquina (responsável da magnetização do fluxo necessário aa conversão
eletromecânica da energia), e a parcela responsável pelo aprimoramento da força
motriz (a corrente que interage com o fluxo para produzir o conjugado).</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>No caso de núcleos de ferromagnéticos reais, a
permeabilidade finita vai exigir uma certa corrente de magnetização I<span
style='font-family:Symbol'>m</span>, assim como as perdas no ferro
(transformadas em calor no processo) exigiram um componente ativa de corrente
Ip.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Vantagens dos
motores assíncronos <o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Pelas suas características, preço, robustez, o motor
de indução é preferido para a maior parte dos acionamentos.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Entretanto, há de se destacar que o motor de indução
ideal está na faixa de velocidade entre 900 a 1800rpm, e com potências
inferiores a alguns milhares de KW. Associado aos modernos conversores
eletrônicos de tensão e freqüência variáveis, os motores de indução tendem a
assumir um papel quase que exclusivo nos acionamentos elétricos.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Características de
acionamento<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Acionamento elétrico é um sistema capaz de converter
energia elétrica em mecânica, produzindo trabalho e mantendo controle sobre tal
processo de conversão. Um sistema de acionamento compreende o motor elétrico e
seu equipamento de comando e/ou controle, os órgãos de transmissão (mecânicos)
de energia do motor a maquina acionada e a própria máquina acionada, que
realiza a função desejada.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Característica
conjugado versus velocidade de cargas mecânicas <o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>Para um sistema dotado de movimento de rotação</p>

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
</xml><![endif]--></span><span style="mso-spacerun: yes"> </span><span
style='font-family:Symbol'>w</span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>onde:</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>P é a potência desenvolvida</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>C é o conjugado desenvolvido</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style='font-family:Symbol'>w</span> é a velocidade
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
none;text-autospace:none'>Dizer que uma carga mecânica requer uma determinada
potência P é equivalente a afirmar que tal carga necessita de um dado conjugado
C a uma dada velocidade de rotação.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Matematicamente existem infinitas combinações de C e <span
style='font-family:Symbol'>w</span> de modo a resultar no mesmo valor de P.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Fisicamente, contudo, uma especifica carga mecânica
associada a um único par ( C, <span style='font-family:Symbol'>w</span> ) a
carga da potência P.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Em função de suas características de conjugado versus
velocidade, as cargas mecânicas podem ser divididos em seis grandes grupos:</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;tab-stops:36.0pt;mso-layout-grid-align:none;text-autospace:none'>1-<span
style='mso-tab-count:1'>   </span>Conjugado constante, praticamente
independente da rotação. Exemplos : gruas, guinchos, guindastes,
transportadores de correias sob carga constante.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-layout-grid-align:none;text-autospace:none'>2-<span
style='mso-tab-count:1'>   </span>Conjugado que varia linearmente com a
rotação. Exemplo : moinhos de rolos, bombas de pistão, plainas e serras para
madeira.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-layout-grid-align:none;text-autospace:none'>3-<span
style='mso-tab-count:1'>   </span>Conjugado que varia com o quadro de rotação
(variação parabólica). Exemplos : ventiladores, misturadores, centrifugas,
bombas centrifugas, exaustores, compressores.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-layout-grid-align:none;text-autospace:none'>4-<span
style='mso-tab-count:1'>   </span>Conjugado que varia inversamente com a
rotação, resultando em potência constante. Exemplos : maquinas operatrizes como
fresadoras e mandriladoras.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-layout-grid-align:none;text-autospace:none'>5-<span
style='mso-tab-count:1'>   </span>Conjugado que varia de forma não uniforme com
a rotação, não suficientemente acuradas aproximações por funções matemáticas.
Exemplos : um forno rotativo de grande porte.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-layout-grid-align:none;text-autospace:none'>6-<span
style='mso-tab-count:1'>   </span>Conjugado que não solicitam conjugados (
volantes ). O propósito do volante é liberar a maior parte da energia cinética
nele armazenada para suprir picos de demanda de energia por parte da maquina
acionada. O motor acionado deve deixar de atuar, isto é, transferir energia, em
condições de altos conjugados, porem tendo a função de restaurar ao volante sua
velocidade original, o que é feito entre os picos de cargas. As prensas de
perfuração e ou de estampagem profunda não hidráulica, constituem exemplos de
cargas que utilizam volantes dentro desse principio. </p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Característica
conjugado versus motores elétricos<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent>É a curva que mostra a dependência entre o conjugado
desenvolvido por este motor elétrico e a sua rotação; em geral o comportamento
desta curva difere do daquela das cargas, pois, ao contrario das cargas
adicionais, os motores elétricos tendem a apresentar um decréscimo de conjugado
para velocidades crescentes.</p>

<p class=MsoBodyTextIndent>Defini-se regulação de velocidade de um motor
elétrico, solicitado a fornecer a carga mecânica um valor dado de potência, à
relação:</p>

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
</xml><![endif]--></span><span style="mso-spacerun: yes"> </span>n</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>onde :</p>

<p class=MsoNormal align=center style='text-align:center;mso-layout-grid-align:
none;text-autospace:none'>n<span style='font-family:Symbol'>o</span> = W<span
style='font-family:Symbol'>o</span><span style="mso-spacerun: yes">  </span><span
style='font-size:10.0pt;mso-bidi-font-size:12.0pt'><!--[if gte vml 1]><v:shape
 id="_x0000_i1038" type="#_x0000_t75" style='width:10.2pt;height:10.2pt' o:ole=""
 fillcolor="window">
 <v:imagedata src="./arquivos/image092.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=14 height=14
src="./arquivos/image105.gif" v:shapes="_x0000_i1038"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="Equation.3" ShapeID="_x0000_i1038"
  DrawAspect="Content" ObjectID="_1067749886">
 </o:OLEObject>
</xml><![endif]--></span><span style="mso-spacerun: yes"> </span>2<span
style='font-family:Symbol'>p</span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>rotação do motor elétrico em vazio</p>

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
</xml><![endif]--></span><span style="mso-spacerun: yes"> </span>2<span
style='font-family:Symbol'>p</span></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'>velocidade do motor acionando a carga</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>A regulação da velocidade é um parâmetro para
caracterização dos diferentes tipos de motores elétricos, em função dos valores
(pela regulação de velocidade) para cada velocidade.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Motores assíncronos
<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Mais freqüentemente denominados de indução, são
motores cujo conjugado disponíveis diminui na medida que a velocidade aumenta,
a partir de uma certa velocidade.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Motores de indução com rotor enrolado, o formato da
curva conjugado versus velocidade pode ser alterado pela inserção da
resistência externa no enrolamento retórico; à medida que a resistência
inserida cresce, a rotação onde se verifica o conjugado Maximo torna-se menor
sem que esse se altere significativamente, até que o conjugado Maximo passe a
ocorrer na condição de partida(rotação nula), a partir de onde, pela inserção
de maior resistência no rotor, passe a ocorrer um decréscimo no conjugado de
partida.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Métodos de partida
de motores<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Para diferenciar vários métodos de partida de motores
de indução, aquele em que as tensões aplicadas aos terminais do motor é da
rede, mas que o motor enxerga uma tensão menor(estrela-triangulo e eenrolamento
dividido), e outro grupo em que a tensão aplicada aos terminais é efetivamente
menor que a rede (autotransformador, resistor primário, reator primario).</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>A partida a plena tensão e a utilização de
acoplamentos hidráulicos (quando a tensão não é reduzida) constituem um grupo a
parte, enquanto motores de varias velocidades e de anéis constituem outro
grupo.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Em qualquer método de partida em que ocorra a
utilização de redução de tensão também ocorrerá uma redução de tensão do
conjugado do motor, aproximadamente: com o quadrado da variação de tensão<span
style="mso-spacerun: yes">  </span>para o conjugado Maximo; e a potencia 2.2 da
variação de tensão para o conjugado na partida.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Partida com chave
estrela- triangulo<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>É o método mais conhecido e dos mais simples para
partida de motores de indução. Para que o método possa ser aplicado, o motor
deve funcionar em ligação estrela e possuir seis terminais acessíveis de forma
a poder ser ligado em estrela na partida, de tal forma que cada fase do motor
enxergue uma tensão que é 1/<span style='font-size:10.0pt;mso-bidi-font-size:
12.0pt'><!--[if gte vml 1]><v:shape id="_x0000_i1040" type="#_x0000_t75"
 style='width:9pt;height:10.2pt' o:ole="">
 <v:imagedata src="./arquivos/image107.wmz" o:title=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=12 height=14
src="./arquivos/image108.gif" v:shapes="_x0000_i1040"><![endif]><!--[if gte mso 9]><xml>
 <o:OLEObject Type="Embed" ProgID="Equation.3" ShapeID="_x0000_i1040"
  DrawAspect="Content" ObjectID="_1067749888">
 </o:OLEObject>
</xml><![endif]--></span>3 da tensão nominal do motor. Dessa forma, a corrente
absolvida da linha fica reduzida 1/3 daquela em plena tensão; por outro lado, o
conjugado ficam reduzidos também a 1/3 daquele a plena tensão.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>4. Aplicação de
motores em acionamentos de velocidade variável<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Em muitas aplicações os motores são operados
diretamente da rede, de acordo com sua proporia característica de conjugado –
velocidade e em condições de operação determinadas pela carga mecânica.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Os motores são providos de um equipamento de controle
com o qual suas características podem ser ajustadas e suas condições de
operação variadas, de modo a atender particulares requisitos de carga mecânica.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Em determinadas condições não há necessidade de uma
variação continua da velocidade, sendo suficiente uma variação discreta. Nestes
casos a utilização de motores de indução de múltiplas polaridades, apresentam
vantagens econômicas diante da inexistência de equipamentos de controle
elaborado, bastando na maioria dos casos uma chave triangulo-estrela (ligação
Dahlander).</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Cada tipo de motor pode ser controlado de modo a
prover um ajustamento continuo de velocidade e conjugado com relação à carga
mecânica.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>O equipamento de controle consiste de relés,
reatores, componentes magnéticos e componentes de estado sólidos, tais como
diodos, tiristores e transistores.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>A combinação do motor e do equipamento de controle é
chamada de acionamento.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>O custo de um sistema de acionamento depende portanto
do tipo de motor utilizado e do equipamento para se obter o controle.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Motores de corrente alternadas, embora mais baratos e
robustos que os de CC, possuem um equipamento de controle mais caro.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Muitas aplicações restringem o uso de maquinas CC
devido à umidade e temperatura do ambiente; impedimentos do uso de comutadores
e escovas devido à presença de ambientes agressivos ou perigosos; ou as
limitações de velocidade periférica do comutador.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Num sistema de acionamento com vários motores, os
preços dos motores CA, podem tornar mais competitivo em relação aos de motores
CC. São também de dimensões menores e manutenção simples.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyText2>Princípios de controle de continuo de velocidades para
motores de corrente alternadas</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent>São métodos de variação continua de velocidade em
função dos diferentes tipos de motores de corrente alternada.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyText2>Freqüência ajustável </p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>È uma forma de se variar à velocidade síncronas
desses motores síncronos e assíncronos e é através da alimentação por uma fonte
de freqüência variável.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Este tipo de controle é eficiente e, com motores
síncronos podem ser muitos precisos.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Controle de
freqüência com fluxo constate<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent>Se o fluxo for mantido constante, o conjugado do
motor também o será. Isto é conseguido variando concomitantemente U e f.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Tensão ajustável<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>A freqüência permanece constante, e a variação ou
velocidade é obtida pela variação do escorregamento.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Reostato rótorico<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>Para um motor de indução de rotor enrolado (rotor de
anéis) é possível controlar a velocidade pela mudança da curva característica
conjugado versus rotação, através de inserção de resistências no circuito do
rotor.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><b style='mso-bidi-font-weight:normal'>Recuperação de
energia<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>As perdas do rotor de um motor de anéis podem ser
recuperadas através de um sistema de controle tristorizado, que consiste
basicamente em um retificador e um inversor.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>A tensão rótorica, ao invés de ser jogada sobre a
resistência, e retificada por obtenção de uma tensão continua, cuja grandeza é
diretamente proporcional ao escorregamento s; um inversor tristorizado ligado
entre o barramento de CC e os terminais do estator devolve a potencia rotórica
à fonte de alimentação. O inversor opera com uma freqüência fixa de saída,
igual à linha (60Hz) e a partir de qualquer nível de tensão continua, desde
aproximadamente zero à plena velocidade do motor, ao Maximo valor quanto o
motor está parado.</p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt;mso-layout-grid-align:
none;text-autospace:none'>O sistema é relativamente simples porque o sinal de
disparo do tiristor é formado é formado a partir da linha de alimentação, sem a
complicada lógica de circuitos e reguladores de sistemas de freqüência
variável.</p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;mso-layout-grid-align:none;
text-autospace:none'><span style="mso-spacerun: yes"> </span></p>

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
mso-fareast-font-family:"Times New Roman"'>Protocolos de Comunicação<o:p></o:p></span></h6>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-tab-count:1'>            </span>A
finalidade de um protocolo de comunicação é o de determinar a maneira em que os
dados serão tratados para serem enviados de um lado para outro ou de um
servidor para um cliente.</p>

<p class=MsoNormal style='text-align:justify'><!--[if gte vml 1]><v:shape id="_x0000_s1077"
 type="#_x0000_t75" style='position:absolute;left:0;text-align:left;
 margin-left:128.65pt;margin-top:12.5pt;width:162pt;height:107.85pt;z-index:49'
 filled="t" fillcolor="#cff">
 <v:imagedata src="./arquivos/image109.png" o:title="comunicacao"/>
</v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;position:
absolute;z-index:49;left:0px;margin-left:172px;margin-top:17px;width:216px;
height:144px'><img width=216 height=144 src="./arquivos/image110.jpg"
v:shapes="_x0000_s1077"></span><![endif]><span style='mso-tab-count:1'>            </span></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h4><span style='font-size:9.0pt;mso-bidi-font-size:10.0pt;font-family:"Times New Roman"'>Figura
1: Exemplo da aplicação de um protocolo<o:p></o:p></span></h4>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h3 style='mso-pagination:none;mso-layout-grid-align:none;punctuation-wrap:
simple;text-autospace:none;vertical-align:baseline'><span style='font-family:
"Times New Roman"'><span style='mso-tab-count:1'>            </span>Dos
serviços que um protocolo de comunicação deve fazer, encontramos:<o:p></o:p></span></h3>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l30 level1 lfo19;
     tab-stops:list 36.0pt'><b>Endereçamento: </b>saber qual o endereço ou IP
     por exemplo do destinatário dos dados<b><o:p></o:p></b></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l30 level1 lfo19;
     tab-stops:list 36.0pt'><b>Numeração e seqüência: </b>como alguns
     protocolos trabalham em pacotes, ou seja, são enviados diversos pedaços
     com os dados ao invés de mandar todos os dados de uma vez, é necessário
     saber informações sobre a numeração e seqüência de cada pacote enviado<b><o:p></o:p></b></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l30 level1 lfo19;
     tab-stops:list 36.0pt'><b>Estabelecimento da conexão:</b> o protocolo deve
     saber se a conexão com o destinatário está ativa ou se ocorrerá mais tarde<b><o:p></o:p></b></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l30 level1 lfo19;
     tab-stops:list 36.0pt'><b>Confirmação de recebimento: </b>cada pacote
     recebido, deve confirmar o recebimento ao remente através do protocolo<b><o:p></o:p></b></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l30 level1 lfo19;
     tab-stops:list 36.0pt'><b>Controle de erro:</b> caso exista algum erro
     durante a transmissão dos dados, é necessário o protocolo saber como
     deverá proceder para corrigí-los<b><o:p></o:p></b></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l30 level1 lfo19;
     tab-stops:list 36.0pt'><b>Retransmissão: </b>no caso de existir erros,
     como deverá acontecer a retransmissão dos dados<b><o:p></o:p></b></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l30 level1 lfo19;
     tab-stops:list 36.0pt'><b>Conversão de código: </b>o protocolo deverá
     saber como converter os dados, por exemplo, bit 1 e bit 0, para um
     determinado cabo elétrico, passa ou não passa energia<b><o:p></o:p></b></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l30 level1 lfo19;
     tab-stops:list 36.0pt'><b>Controle de fluxo: </b>o protocolo deverá saber
     de que maneira ocorrerá a conexão, só recebendo, só enviando ou ambos, no
     caso de dados<span style='mso-fareast-font-family:"Arial Unicode MS";
     display:none;mso-hide:all'><o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent><span style='font-family:"Times New Roman"'>Abaixo
estão relacionados os princiapis órgãos responsáveis pela criação de novos
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

<h6><span style='font-family:"Times New Roman"'>Definição RM-OSI</span><span
style='font-family:"Times New Roman";font-weight:normal'><o:p></o:p></span></h6>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman";mso-fareast-font-family:
"Arial Unicode MS"'><span style='mso-tab-count:1'>            </span>O RM-OSI -</span><span
style='font-family:"Times New Roman"'>Open Systems Interconnection Reference
Model, foi criado pela ISO em 1980 e é uma definição sobre protocolos, do ponto
de vista operacional. Ela<span style='display:none;mso-hide:all'><o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes"> </span>dividide em 7 camadas (de protocolos) para tratar cada problema de
comunicação separadamente, sendo que <span style='display:none;mso-hide:all'><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'>cada camada deve desempenhar uma
função bem definida tendo em vista a definição de protocolos padrões
internacionais e as fronteiras entre as camadas devem ser escolhidas de forma a
minimizar o fluxo de informações através das interfaces. Cada uma das camadas
então representa um grupo de protocolos, responsável em satisfazer as necessidades
da camada, como descrito abaixo:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>FÍSICA: </span></b><span
     style='mso-bidi-font-size:9.0pt'>especificações elétricas, mecânicas e
     outras sobre a forma de como um bit 1 ou 0 será transmitido, em relação ao
     valor da voltagem, frequência, etc;<span style='display:none;mso-hide:
     all'><o:p></o:p></span></span></li>
</ul>

<h3 style='mso-pagination:none;mso-layout-grid-align:none;punctuation-wrap:
simple;text-autospace:none;vertical-align:baseline'><span style='mso-bidi-font-size:
9.0pt;font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h3>

<h3 style='margin-left:36.0pt;text-indent:-18.0pt;mso-pagination:none;
mso-list:l16 level1 lfo21;tab-stops:list 36.0pt;mso-layout-grid-align:none;
punctuation-wrap:simple;text-autospace:none;vertical-align:baseline'><![if !supportLists]><span
style='mso-bidi-font-size:9.0pt;font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b><span style='mso-bidi-font-size:9.0pt;font-family:
"Times New Roman"'>ENLACE DE DADOS:</span></b><span style='mso-bidi-font-size:
9.0pt;font-family:"Times New Roman"'> interpreta e organiza os bits ou dados
recebidos pela camada física<o:p></o:p></span></h3>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>REDE: </span></b><span
     style='mso-bidi-font-size:9.0pt'>organiza o pacote de roteamento dos dados
     e verifica se a rede destino, se os protocolos lógicos aceitos terão mesma
     especificação como o tamanho dos pacotes<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>TRANSPORTE:</span></b><span
     style='mso-bidi-font-size:9.0pt'> organiza os pacotes na forma aceita pelo
     protocolo e gerencia a comunicação entre redes quanto a velocidades
     diferentes<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>SESSÃO:</span></b><span
     style='mso-bidi-font-size:9.0pt'> sincroniza as redes e gerencia<span
     style="mso-spacerun: yes">  </span>a direção do fluxo de dados<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>APRESENTAÇÃO:</span></b><span
     style='mso-bidi-font-size:9.0pt'> cuida dos formato dos pacotes à serem
     entregues ao aplicativo, como por exemplo a conversão de dados ASCII em
     EBCDIC<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>APLICAÇÃO:</span></b><span
     style='mso-bidi-font-size:9.0pt'><span style="mso-spacerun: yes"> 
     </span>cuida das conversões de mídia, como por exemplo diferentes layouts
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

<h4><span style='font-family:"Times New Roman"'>Figura 2: Método de camadas da
RM-OSI usado em protocolos de comunicação<o:p></o:p></span></h4>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><span
style='mso-tab-count:1'>            </span>Os protocolos do nível físico, cada
equipamento que usa este protocolo também deve ter um método de acesso para
transações de comunicações de dados:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h6 style='mso-pagination:widow-orphan;mso-layout-grid-align:auto;punctuation-wrap:
hanging;text-autospace:ideograph-numeric ideograph-other;mso-vertical-align-alt:
auto'><span lang=EN-US style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman";mso-ansi-language:EN-US'>Métodos
assíncronos</span><span lang=EN-US style='mso-bidi-font-size:10.0pt;font-family:
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
style='mso-ansi-language:EN-US'>Métodos síncronos<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><span lang=EN-US style='mso-ansi-language:EN-US'>ACF/VTAM
     (Advanced Communications Function / Virtual Telecommunication Access
     Method)<o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='text-align:justify'><span lang=EN-US
style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify'>A seguir uma
lista de alguns protocolos de comunicação de cada camada:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h6><span style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman"'>Protocolos da Camada Física</span><span
style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman";mso-fareast-font-family:
"Times New Roman";font-weight:normal'><o:p></o:p></span></h6>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'>Família X - X.25, X.3, etc<span style='display:
     none;mso-hide:all'><o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><span lang=EN-US style='mso-ansi-language:EN-US'>q
     Ethernet 10BASE-T, 100BASE-T (Fast Ethernet)<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l16 level1 lfo21;
     tab-stops:list 36.0pt'><span lang=EN-US style='mso-ansi-language:EN-US'>Switches
     Ethernet, IEEE 802.9 (Ethernet Isócrona)<o:p></o:p></span></li>
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
     Synchronous Control) - permitir a transmissão síncrona entre computador e
     periféricos remotamente localizados<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l4 level1 lfo22;
     tab-stops:list 36.0pt'><i><span style='mso-bidi-font-size:9.0pt'>SDLC
     (Controle do Enlace de Dados Síncrono) - regras que controlam as funções
     executadas na camada de controle do enlace de dados da SNA<o:p></o:p></span></i></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l4 level1 lfo22;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>HDLC (High
     Level Data Link Control) - protocolo orientado a bit para transmissão<span
     style="mso-spacerun: yes">  </span>de dados síncronos </span><span
     style="mso-spacerun: yes"> </span><span style='mso-bidi-font-size:9.0pt;
     mso-fareast-font-family:"Arial Unicode MS"'><o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l4 level1 lfo22;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>X.25 -
     protocolo de acesso para redes de comutação de pacotes<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l4 level1 lfo22;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>X.29 - usado
     em equipamentos de dados mais simples e de baixo custo, como é o caso dos
     terminais assíncronos<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l4 level1 lfo22;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>SLIP (Serial
     Line Internet Protocol) - comunicação ponto-a-ponto entre conexões
     seriais, utilizando TCP/IP<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l4 level1 lfo22;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>PPP
     (Point-to-Point Protocol) - protocolo para transmissão de pacotes através
     de linhas seriais síncronas e assíncronas<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l4 level1 lfo22;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>LLC (Logical
     Link Control) - implementa a interface com o nível de rede, fornece
     serviços como multiplexaçáo e o controle do fluxo e dos erros<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l4 level1 lfo22;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>LAP-M (Link
     Access Procedures for Modems) - protocolo de correção de erros e é
     especificado na norma V.42</span> <span style='mso-bidi-font-size:9.0pt'><o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<h6><span style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman"'>Protocolos da Camada de Rede<o:p></o:p></span></h6>

<p class=MsoBodyTextIndent2 style='margin-left:35.45pt;text-indent:-14.15pt;
mso-list:l4 level2 lfo22;tab-stops:list 72.0pt'><![if !supportLists]><span
style='font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='font-family:"Times New Roman"'>GGP
(Gateway to Gateway Protocol) - protocolo utilizado pelos primeiros Core
Gateways para propagação de rotas, utiliza o algoritmo &quot;Vector
Distance&quot;, sendo encapsulado num datagrama IP<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt'><span style='mso-bidi-font-size:9.0pt;display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt;mso-list:l4 level2 lfo22;tab-stops:list 72.0pt'><![if !supportLists]><span
style='mso-bidi-font-size:9.0pt;font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:9.0pt'>EGP (Exterior
Gateway Protocol) – gateways que trocam informações de roteamento com outros
gateways que não pertencem ao mesmo Sistema Autônomo</span> <span
style='mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt'><span style='mso-bidi-font-size:9.0pt;display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt;mso-list:l4 level2 lfo22;tab-stops:list 72.0pt'><![if !supportLists]><span
style='mso-bidi-font-size:9.0pt;font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:9.0pt'>RIP (Routing
Information Protocol) - envia mensagens de atualização de rotas em broadcasting
a cada 30 segundos, mencionando as redes e suas respectivas distâncias
efetuando então a atualização de suas tabelas</span> <span style='mso-bidi-font-size:
9.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt'><span style='mso-bidi-font-size:9.0pt;display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt;mso-list:l4 level2 lfo22;tab-stops:list 72.0pt'><![if !supportLists]><span
style='mso-bidi-font-size:9.0pt;font-family:Symbol'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:9.0pt'>HELLO - mantêm o
sincronismo dos relógios de todos os gateways envolvidos e divulga alcance por
tempo referente a cada rede</span> <span style='mso-bidi-font-size:9.0pt'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt'><span style='mso-bidi-font-size:9.0pt;display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:35.45pt;text-align:justify;text-indent:
-14.15pt;mso-list:l4 level2 lfo22;tab-stops:list 72.0pt'><![if !supportLists]><span
style='mso-bidi-font-size:9.0pt;font-family:Symbol;display:none;mso-hide:all'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='mso-bidi-font-size:9.0pt'>OSPF (Open Shortest
Path First) - um protocolo que utiliza a técnica SPF (Shortest Path First),
também conhecida como &quot;Link State“, largamente utilizado e de alta
performance, inicializadas com um cabeçalho padrão</span> <span
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
     (Transmission Control Protocol) - responsável por uma transmissão de
     dados, com conexão orientada de confiança e provê serviços de full -duplex</span>
     <span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:"Arial Unicode MS"'><o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l23 level1 lfo29;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>UDP (User
     Datagram Protocol) - para transferir dados entre agentes, em que um
     usuário pode enviar uma mensagem sem estabelecer uma conexão com o
     receptor, isto é, o usuário simplesmente põe a mensagem na rede com o
     endereço de destino e espera que essa chegue</span> <span
     style='mso-bidi-font-size:9.0pt'><o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l23 level1 lfo29;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt;mso-fareast-font-family:
     Arial'>IPX/SPX</span><span style='mso-bidi-font-size:9.0pt'> (Internetwork
     Packet Exchange) - utilizado numa rede juntamente com clientes NetWare ou
     com uma mistura de clientes Windows e servidor NetWare </span><span
     style="mso-spacerun: yes"> </span><span style='mso-bidi-font-size:9.0pt'><o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l23 level1 lfo29;
     tab-stops:list 36.0pt'><span style='mso-bidi-font-size:9.0pt'>NetBEUI -
     pequeno, rápido e eficiente, não suporta roteamento, para redes Microsoft</span>
     <span style='mso-bidi-font-size:9.0pt'><o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h6><span style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman"'>Protocolos da Camada de Aplicação<o:p></o:p></span></h6>

<p class=MsoBodyText style='margin-left:36.0pt;text-indent:-18.0pt;mso-pagination:
widow-orphan;mso-list:l23 level1 lfo29;tab-stops:list 36.0pt;mso-layout-grid-align:
auto;punctuation-wrap:hanging;text-autospace:ideograph-numeric ideograph-other;
mso-vertical-align-alt:auto'><![if !supportLists]><span style='font-family:
Symbol;mso-bidi-font-family:"Times New Roman"'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='font-family:"Times New Roman"'>DNS
(Sistema de nomes de domínio)<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:36.0pt;text-indent:-18.0pt;mso-pagination:
widow-orphan;mso-list:l23 level1 lfo29;tab-stops:list 36.0pt;mso-layout-grid-align:
auto;punctuation-wrap:hanging;text-autospace:ideograph-numeric ideograph-other;
mso-vertical-align-alt:auto'><![if !supportLists]><span style='font-family:
Symbol;mso-bidi-font-family:"Times New Roman"'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='font-family:"Times New Roman"'>Telnet
(Acesso remoto)<o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:36.0pt;text-indent:-18.0pt;mso-pagination:
widow-orphan;mso-list:l23 level1 lfo29;tab-stops:list 36.0pt;mso-layout-grid-align:
auto;punctuation-wrap:hanging;text-autospace:ideograph-numeric ideograph-other;
mso-vertical-align-alt:auto'><![if !supportLists]><span style='mso-bidi-font-size:
9.0pt;font-family:Symbol;mso-bidi-font-family:"Times New Roman"'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><![endif]><span
style='font-family:"Times New Roman"'>FTP (File Transfer Protocol) – para
transferência de arquivos </span><span style='mso-bidi-font-size:9.0pt;
font-family:"Times New Roman"'><o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:36.0pt;text-indent:-18.0pt;mso-pagination:
widow-orphan;mso-list:l23 level1 lfo29;tab-stops:list 36.0pt;mso-layout-grid-align:
auto;punctuation-wrap:hanging;text-autospace:ideograph-numeric ideograph-other;
mso-vertical-align-alt:auto'><![if !supportLists]><span style='font-family:
Symbol;mso-bidi-font-family:"Times New Roman"'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='font-family:"Times New Roman"'>Correio
eletrônico - SMTP, POP, IMAP <o:p></o:p></span></p>

<p class=MsoBodyText style='margin-left:36.0pt;text-indent:-18.0pt;mso-pagination:
widow-orphan;mso-list:l23 level1 lfo29;tab-stops:list 36.0pt;mso-layout-grid-align:
auto;punctuation-wrap:hanging;text-autospace:ideograph-numeric ideograph-other;
mso-vertical-align-alt:auto'><![if !supportLists]><span style='font-family:
Symbol;mso-bidi-font-family:"Times New Roman"'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><span style='font-family:"Times New Roman"'>Serviço de
notícias - usenet news <o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l23 level1 lfo29;
     tab-stops:list 36.0pt'><span lang=EN-US style='mso-bidi-font-size:9.0pt;
     mso-ansi-language:EN-US'>HTTP – página da world wide web<span
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
style='mso-tab-count:1'>            </span>O Protocolo IP (Internet Protocol) é
um dos mais importantes protocolos atualmente pois é amplamente usado em redes.
Ele é protocolo que faz o roteamento dos pacotes de dados para a rede através
dos números IP, que na sua versão 4, é formado por um número de 32 bits, divido
em quatro partes, como por exemplo 11010000 11110101 0011100 10100011 =
208.245.28.63. Cada octeto deste número suporta números de 1 a 255, formando no
máximo 4.228E9 pontos de rede possíveis com este protocolo. Cada número IP
representa um computador ou um ponto dentro da rede. Com a expansão de redes
como a Internet, o protocolo IP está em fase de atualização na sua versão IPv6,
que terá um número de 128 bits e suportará 3.19E38 pontos de rede.<o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoBodyText><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h6><span style='font-family:"Times New Roman"'>Arquitetura TCP/IP<o:p></o:p></span></h6>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-tab-count:1'>            </span>Ao
contrário do que muitos pensam, TCP/IP é uma arquitetura de grupos de
protocolos baseados na RM-OSI, para transmissão de dados, sendo que os
principais protocolos usados são o TCP e o IP, mas não necessariamente. Ele foi
criado em 1977 e começou a operar em 1983, devido as conexões de computadores
em rede serem centralizadas nos IMPs (Interface Message Processors), que eram
servidores na época em faculdades que faziam a conexão em rede de computadores,
sendo que a criação do TCP/IP, que descentraliza a rede em diversos servidores,
contribuiu para o enorme crescimento da rede, como a Internet. Nas figuras
abaixo estão a forma que o TCP/IP usa de camadas e os protocolos suportados.</p>

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

<p class=MsoNormal style='text-align:justify'><span style='mso-tab-count:1'>            </span>Outro
detalhe importante sobre TCP/IP é o conceito de portas lógicas. Como o TCP/IP
funciona através de pacotes de dados, e o computador usando estes protocolos
podem estar com diversos aplicativos abertos ao mesmo tempo, como por exemplo o
browser, o software de e-mail, de downloads, de chat, etc, as portas lógicas
são uma forma de identificar o pacote recebido de dados para qual aplicativo
deve usar, sem elas os dados por exemplo de e-mail, seriam entregues ao
navegador. Uma analogia sobre portas lógicas – imagine uma carta endereçada à
alguém que mora em um prédio. O número do prédio (IP) seria igual para todos
moradores, porém a carta deve ser entregue a um morador em específico, de um
apartamento (que seria o número da porta lógica). Dentre as portas lógicas mais
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

<h4><span style='font-family:"Times New Roman"'>Figura 4: Exemplos de aplicação
do TCP/IP<o:p></o:p></span></h4>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h6><span style='mso-bidi-font-size:10.0pt;font-family:"Times New Roman";
mso-fareast-font-family:"Times New Roman"'>Desenvolvimento de Protocolos para
Internet<o:p></o:p></span></h6>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-tab-count:1'>            </span>Abaixo
estão os nomes dos órgãos responsáveis por criar e administrar protocolos para
uso na Internet:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<h3 style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l23 level1 lfo29;
tab-stops:list 36.0pt'><![if !supportLists]><span lang=EN-US style='font-family:
Symbol;mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><![endif]><b><span
lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'>IAB </span></b><span
lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'>(Internet
Architecture Board) – controla a Internet<o:p></o:p></span></h3>

<h3 style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l23 level1 lfo29;
tab-stops:list 36.0pt'><![if !supportLists]><span lang=EN-US style='font-family:
Symbol;mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><![endif]><b><span
lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'>IANA</span></b><span
lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'>
(Internet Assined Numbers Authority) – controla os IPs e DNS<o:p></o:p></span></h3>

<h3 style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l23 level1 lfo29;
tab-stops:list 36.0pt'><![if !supportLists]><span lang=EN-US style='mso-bidi-font-size:
9.0pt;font-family:Symbol;mso-bidi-font-family:"Times New Roman";mso-ansi-language:
EN-US'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><![endif]><b><span lang=EN-US style='font-family:"Times New Roman";
mso-ansi-language:EN-US'>InterNIC</span></b><span lang=EN-US style='font-family:
"Times New Roman";mso-ansi-language:EN-US'> (Internet Network Information
Center) – controla documentação</span><span lang=EN-US style='mso-bidi-font-size:
9.0pt;font-family:"Times New Roman";mso-ansi-language:EN-US'><o:p></o:p></span></h3>

<h3 style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l23 level1 lfo29;
tab-stops:list 36.0pt'><![if !supportLists]><span lang=EN-US style='font-family:
Symbol;mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><![endif]><b><span
lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'>IETF</span></b><span
lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'>
(Internet Engineering Task Force) – definição e padronização<o:p></o:p></span></h3>

<h3 style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l23 level1 lfo29;
tab-stops:list 36.0pt'><![if !supportLists]><span lang=EN-US style='font-family:
Symbol;mso-bidi-font-family:"Times New Roman";mso-ansi-language:EN-US'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><![endif]><b><span
lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'>IRTF </span></b><span
lang=EN-US style='font-family:"Times New Roman";mso-ansi-language:EN-US'>(Internet
Research Task Force) – criação, projeto e propostas<o:p></o:p></span></h3>

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

<h4><span style='font-family:"Times New Roman"'>Figura 5: Formação dos órgãos
de internet<o:p></o:p></span></h4>

<p class=MsoNormal style='text-align:justify'><span style='mso-fareast-font-family:
"Arial Unicode MS";display:none;mso-hide:all'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.45pt'>Também é
importante lembrar que sobre protocolos, eles são documentados da seguinte
forma: primeiro há uma proposta para um novo protocolo, que após documentado se
torna um <i>Draft Proposal</i>, que depois de aprovado, é feito um documento
que é o <i>RFC – Request for Coments</i>, onde existem nas seguintes
classificações: Proposed, Draft, Best Current Practices, Experimental,
Informational, Historic, e por fim um Internet Standard. Um protocolo não
precisa chegar ao nível de norma de internet para ser usado.</p>

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
v:shapes="_x0000_s1085"></span><![endif]><span style='mso-tab-count:1'>            </span>Ainda
sobre protocolos, temos dois importantes protocolos usados pelas empresas de
telecomunicações para transmissão de dados, que são o ATM (Asynchronous
Transfer Mode) e o Frame Relay, protocolos geralmente para grandes bandas de
dados.</p>

<h4><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h4>

<h4><span style='font-family:"Times New Roman"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></h4>

<br style='mso-ignore:vglayout' clear=ALL>

<h4><span style='font-family:"Times New Roman"'>Figura 6: Na esquerda a
formação das camadas do ATM e na direita uma estrutura de rede com Frame Relay<o:p></o:p></span></h4>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><span style='mso-tab-count:1'>            </span>Abaixo
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

<p class=MsoNormal style='text-align:justify'><span style='mso-tab-count:1'>            </span>O
Protocolo PROFIBUS é amplamente usado em automação de sistemas, pois é ele quem
faz a interface entre redes de computadores, de CLP’s e dos atuadores
controlados como válvulas, pistões, etc. Abaixo está uma descrição dos três tipos
de PROFIBUS:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='text-align:justify;mso-list:l7 level1 lfo30;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>Profibus-DP</span></b><span
     style='mso-bidi-font-size:9.0pt'> – Otimizada para alta velocidade e baixo
     custo, esta versão é projetada para comunicação entre sistemas de controle
     automáticos e I/Os distribuídos. Pode ser utilizada para substituir
     qualquer sinal paralelo com 24Vdc ou 0 a 20 mA.<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l7 level1 lfo30;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>Profibus-PA</span></b><span
     style='mso-bidi-font-size:9.0pt'> – É projetada especialmente para a
     indústria de processos. Permite que sensores e atuadores sejam conectados
     em um único barramento mesmo em áreas intrinsecamente seguras,
     disponibilizando energia e dados no mesmo cabo.<o:p></o:p></span></li>
 <li class=MsoNormal style='text-align:justify;mso-list:l7 level1 lfo30;
     tab-stops:list 36.0pt'><b><span style='mso-bidi-font-size:9.0pt'>Profibus-FMS</span></b><span
     style='mso-bidi-font-size:9.0pt'> – É uma solução de comunicação de
     propósito geral. Seus recursos possibilitam grande flexibilidade sendo
     utilizada em tarefas extensas e complexas de comunicação.</span></li>
</ul>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoBodyTextIndent3>Um exemplo dessa tecnologia, é a automação
realizada no porto de Paranaguá feita pela empresa NWM Sistemas de Automação. A
rede interliga sensores e atuadores nos terminais de carga dos navios, com a
configuração conforme a figura 8.</p>

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
de Paranaguá<o:p></o:p></span></h4>

<p class=MsoNormal style='text-align:justify'><span style='mso-tab-count:1'>            </span></p>

<p class=MsoNormal><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal><b><span style='mso-fareast-font-family:"Arial Unicode MS"'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></b></p>

<p class=MsoNormal><b><span style='font-size:14.0pt;mso-bidi-font-size:12.0pt'>FIELDBUS<o:p></o:p></span></b></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><b>Introdução<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Atualmente, a
empresa pioneira em Fieldbus é a <b><i>Smar</i></b> que desde 1993, após o
lançamento do primeiro chip Fieldbus no mundo, vem conquistando cada vez mais o
mercado.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>O Fieldbus foi
criado inicialmente para poder substituir o cabeamento que ligava sensores e
atuadores a seu sistema de controle, pois os mesmos utilizavam uma infinidade
de cabos e conexões nas suas ligações, por um único barramento que é capaz de
conectar os sensores e atuadores diretamente a seu sistema de controle que pode
ser um CLP, PC ou regulador.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Observando abaixo,
podemos conferir essa mudança de barramento de comunicação entre os sensores e
atuadores e os devidos controladores:</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes">              </span></p>

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
através de cabos totalmente independentes um do outro, fazendo com que exista
uma grande quantidade de cabos, encarecendo muito a sua implantação.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Já na próxima
figura podemos verificar como fica o sistema de comunicação utilizando o
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
não é apenas um barramento capaz de reduzir o cabeamento entre estes
equipamentos, mas sim, um sistema de comunicação digital bidirecional que permite
a interligação em rede de múltiplos instrumentos diretamente no campo
realizando funções de controle e monitoração de processo e estações de operação
através de softwares supervisórios. </p>

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
podemos verificar que a comunicação é feita através de um único barramento que
possui uma comunicação bidirecional e que é capaz de controlar inúmeros
equipamentos diversos exercendo diferentes funções um do outro.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><b>Aplicações <o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Devido ao
número crescente de atualizações graças à tecnologia que vem surgindo ao longo
dos anos, o fieldbus começou a ser difundido em centenas de empresas ao redor
do mundo.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:18.0pt'>Hoje, o
fieldbus deixa marcas do seu sistema e do seu sucesso em grandes empresas, como
por exemplo:</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l6 level1 lfo31;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Empresas de óleo e gás (PETROBRAS) <span style='font-family:
Wingdings;mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-char-type:symbol;mso-symbol-font-family:Wingdings'><span style='mso-char-type:
symbol;mso-symbol-font-family:Wingdings'>à</span></span> no controle de
plataformas, oleodutos, gasodutos, reatores, etc.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l6 level1 lfo31;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Mineração <span style='font-family:Wingdings;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Wingdings'><span style='mso-char-type:symbol;mso-symbol-font-family:
Wingdings'>à</span></span> controle de fornos de calcinação, beneficiamento de
minérios, moinho de esferas, evaporadores e digestores.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l6 level1 lfo31;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Papel e Celulose <span style='font-family:Wingdings;
mso-ascii-font-family:"Times New Roman";mso-hansi-font-family:"Times New Roman";
mso-char-type:symbol;mso-symbol-font-family:Wingdings'><span style='mso-char-type:
symbol;mso-symbol-font-family:Wingdings'>à</span></span> controle de
branqueamento, caldeira de recuperação e preparação de massa.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l6 level1 lfo31;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Predial <span style='font-family:Wingdings;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Wingdings'><span style='mso-char-type:symbol;mso-symbol-font-family:
Wingdings'>à</span></span> controle das utilidades, elevadores, segurança, etc.</p>

<p class=MsoNormal style='margin-left:36.0pt;text-align:justify;text-indent:
-18.0pt;mso-list:l6 level1 lfo31;tab-stops:list 36.0pt'><![if !supportLists]>-<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span><![endif]>Metalurgia <span style='font-family:Wingdings;mso-ascii-font-family:
"Times New Roman";mso-hansi-font-family:"Times New Roman";mso-char-type:symbol;
mso-symbol-font-family:Wingdings'><span style='mso-char-type:symbol;mso-symbol-font-family:
Wingdings'>à</span></span> controle de altos fornos, fundição continua,
sinterização, linhas de recozimento, etc.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:18.0pt'>Através da
figura em anexo, podemos visualizar as diversas empresas que se utilizam do
Fieldbus, como descrevemos acima:</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun:
yes"> </span></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><b>Benefícios<o:p></o:p></b></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Menor Custo Inicial<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>O sistema
fieldbus dispensa grande parte de equipamentos que existem nos sistemas SDCDs.
Inicialmente há uma certa diminuição no numero de controladores e subsistemas
E/S, pela razão dos sistemas fieldbus serem conectados via rede digital, como
já havíamos falado antes. O fieldbus também é capaz de realizar funções de
controle e cálculos complexos, diminuindo com isso os possíveis gastos com
cartões de controle e cabos.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>A construção e
a instalação também ficam mais simples porque vários equipamentos podem ser
conectados a um único par de fios. O número de cabos, bandejas de cabos e
armários de rearranjo ficam bem menores, acarretando na melhor distribuição de
espaços na sala de controle. E mais uma vantagem, no sistema fieldbus o
controle não é feito por hardware, e sim por software, reduzindo os gastos com
engenharia.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Flexibilidade<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><u><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Devido a uma
demanda cada vez maior do mercado consumidor as indústrias se sentem obrigadas
a implementarem modificações e expansões em tempos cada vez menores. O sistema
Fieldbus consegue oferecer esta capacidade de expansão, flexibilidade e
facilidade de configuração, para atender a tais necessidades, graças a uma
variedade de opções de interfaces e utilização de tecnologias de redes que dão
flexibilidade a plantas de todos os tamanhos. Essa flexibilidade faz com que os
sistemas se simplifiquem, deixando-o fácil de ser configurado e adaptado a
aceitar ampliações e modificações.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Maior Disponibilidade e
Integridade das Informações<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Com o início
do uso do Fieldbus foi verificado que ele é capaz de controlar não somente
informações de se referem ao controle do processo, mas que é capaz de controlar
dados do status, dar diagnósticos dos equipamentos, verificar configurações e
calibração dos mesmos.Podendo também incluir funções como o Gerenciamento dos
instrumentos, reduzindo de maneira significativa as variações de processo e os
custos de manutenção.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Sendo o
fieldbus mais robusto com relação aos sistemas analógicos, e totalmente
digital, a transmissão de sinais digitais é muito mais segura porque inclui
procedimentos de validação de dados e o mesmo possui uma excelente imunidade a
erros, permitindo que os operadores e engenheiros tomem decisões com mais
segurança.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>A comunicação
digital ainda permite o acesso a variáveis múltiplas, possibilitando a cada
estação obter informações de qualquer um dos dispositivos, incluindo numero de
identificação, ajustes de faixa, materiais de construção e dados de calibração.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Menor Custo de Manutenção<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Devido a uma
característica muito importante do Fieldbus que é o auto-diagnóstico, o sistema
possibilita a integração de programas de manutenção preditiva e proativa.
Estatísticas operacionais, como por exemplo, o deslocamento acumulado da haste
de uma válvula, proporciona informações que poderão ser usadas para uma
previsão de possíveis falhas e com isso, o uso de manutenção preditiva.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>O uso de
mecanismos Online, responsáveis pela notificação de falhas informam
imediatamente ao operador se um determinado equipamento ira vir a falhar. Tendo
essa previsão, permite que seja tomada uma série de providências, antes que a
produção seja afetada, contribuindo com isso, ma diminuição nas paradas
inesperadas e de situações de risco. </p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Maior Qualidade do Produto<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>A redução do
número de conversões A/D e D/A, a integração do sinal, a validação de dados e
uma maior precisão resultam em uma maior qualidade do produto.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Maior Facilidade de Operação<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:24.0pt'>Para treinar
os futuros operadores na utilização dos equipamentos que ainda não estão em
operação é caro e leva tempo. O padrão Fieldbus garante um aprendizado
simplificado, reduzindo a chance de se cometer erros. O custo deste treinamento
é muito menor. O software trabalha no ambiente Windows e dispõe de funções de
ajuda e gráficos, que facilita a visualização remota das condições de processo
e da atuação baseada nessas informações.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Maior Segurança<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>A detecção e
identificação de defeitos significarão uma diminuição nas situações perigosas.
Os diagnósticos não são apenas comunicados aos operadores da planta, mas são
também usados pelos próprios dispositivos, garantindo paradas em condições mais
propicias mediante falha de instrumento sem a necessidade de informação ou ação
dos controladores de alto nível.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Funcionalidade do Sistema<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Em geral,
todos os dispositivos do Fieldbus comunicam-se uns com os outros de modo <i>peer-to-peer</i>
ou <i>multi-peer</i>, adotando um modelo produto/consumidor para se ter um
maior sincronismo e eficiência. Uma rede fieldbus pode ter uma extensão de até
2 km sem a utilização de repetidores e com o uso do mesmo, pode chegar a
distâncias maiores. O fieldbus fornece alimentação para os dispositivos de 2
fios e atua como meio para comunicação digital.A exemplo disso, um sistema de
12 a 16 equipamentos alimentados pelo barramento, equivalente a cerca, de 6 a 8
malhas de controle, podem ser ligados ao fieldbus.</p>

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun: yes"> 
</span></p>

<p class=MsoNormal style='text-align:justify'><u>Operação<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>As interfaces
do usuário podem ser configuradas pelo próprio usuário, de modo que atenda as
necessidades de cada planta. O fabricante pode, opcionalmente, pré-configurar
as telas de vista geral, de grupos e detalhes, bem como outras telas comuns,
tais como: telas sinóticas, registro e sumário de alarmes, registro histórico,
gerenciamento da instrumentação, etc.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><u>Conclusão<o:p></o:p></u></p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>Podemos
concluir que atualmente o Fieldbus é o sistema mais adequado possível para se
gerenciar e controlar uma instalação, como por exemplo, uma plataforma de
petróleo, onde possuem dezenas de sensores e atuadores responsáveis pelo
controles de pressão, vazão, temperatura, umidade, entre outros. E devido a
suas excelentes qualidades, o torna mais viável do que o SDCD, pois tem a
chance de controlar maiores informações. </p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify;text-indent:35.4pt'>O Custo de
aquisição se torna menor, facilitando a sua instalação e manutenção, podendo
receber inúmeras atualizações no sistema sem nenhum problema. O fieldbus é um
sistema revolucionário que irá melhorar o desempenho da instalação, diminuindo
os problemas e falhas que existem em outros sistemas de controle.</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><span style="mso-spacerun: yes">  </span></p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><span style="mso-spacerun: yes"> </span></p>

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
Ferreira Carneiro, Nilton Costa Braga e Nilton Alves Júnior</span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt'>- Redes Locais e
TCP/IP</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt'>&nbsp; Núcleo de
Computação Eletrônica - Universidade Federal do Rio de Janeiro</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt'>&nbsp;José Carlos R.
Moreira</span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><strong><span style='mso-bidi-font-size:10.0pt;font-weight:
normal'>- Soluções Microsoft para Redes Locais</span></strong></p>

<p class=MsoNormal><strong><span style='mso-bidi-font-size:10.0pt;font-weight:
normal'>&nbsp; Centro de Computação - UNICAMP</span></strong></p>

<p class=MsoNormal><strong><span style='mso-bidi-font-size:10.0pt;font-weight:
normal'>&nbsp; Denilson Giungi, Hans K. E. Liesenberg,&nbsp;Fátima Pires,
Rubens Queiroz de Almeida,<span style="mso-spacerun: yes">      </span>Maria
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
-.25pt'>Apostila de “Internet e Arquitetura TCP/IP”</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>&nbsp;PUC-RIO/CCE</span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>-
<strong><span style='font-weight:normal'>PROTOCOLOS</span></strong></span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>UNIVERSIDADE
VEIGA DE ALMEIDA</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>Tarcisio
Gonçalves Cabral</span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>-
</span><span style='mso-bidi-font-size:36.0pt;letter-spacing:-.25pt'>Tutorial:
Redes ATM</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:36.0pt;letter-spacing:-.25pt'>&nbsp;</span><span
style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>CBPF – NT – 005/99</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>&nbsp;&nbsp;
Carlil Gibran Fonseca de Macedo, Nilton C. N. da Costa Braga e Nilton Alves Jr.</span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>- Sistemas especialistas modulados e abrangentes para gestão
de operações</p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'>Barrerlla,
wagner D. - 2000<o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='mso-ansi-language:EN-US'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></span></p>

<p class=MsoNormal>- Eletrônica de Potência</p>

<p class=MsoNormal><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>-
Redes de Computadores e suas aplicações na Educação</span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>&nbsp;&nbsp;UFRGS
- <a href="http://penta.ufrgs.br/home_red.htm"><span style='color:windowtext;
text-decoration:none;text-underline:none'>http://penta.ufrgs.br/home_red.htm</span></a></span></p>

<p class=MsoNormal><span style='mso-bidi-font-size:10.0pt;letter-spacing:-.25pt'>&nbsp;</span><strong><span
style='letter-spacing:-.25pt;font-weight:normal'>Temas de pesquisa
desenvolvidos nos âmbitos dos cursos da área de Redes</span></strong></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><strong><span style='letter-spacing:-.25pt;font-weight:normal'>-
NWM - Sistemas de Automação</span></strong></p>

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

<p class=MsoNormal style='text-align:justify'><span style="mso-spacerun: yes"> 
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

<p class=MsoNormal style='text-align:justify'>Telecurso 2000 - Introdução à
Automação</p>

<p class=MsoNormal style='text-align:justify'><![if !supportEmptyParas]>&nbsp;<![endif]><o:p></o:p></p>

<p class=MsoNormal style='text-align:justify'><b>Catálogos<o:p></o:p></b></p>

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