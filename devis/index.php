<?
// Fonction d'interogation
function interoge_vud($url, $post='')
        {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.9; MBVUD) Gecko/2008052906 Firefox/3.0");
        if(!empty($post))
                {
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                }
        $page = curl_exec($ch);
        //echo " ----- $page";
        curl_close($ch);
        return $page;
	}

// Methode
$methode = $_SERVER["REQUEST_METHOD"];
	
// Constante
define("PART_ID", 126); // Partenaire
define("BASE_URL", 'http://www.construire-sa-piscine.com/devis/'); // URL de base
define("HIGHLIGHT", '6'); // Famille à mettre en avant
define("CAT_HIGHLIGHT", '0'); // Catégorie à mettre en avant
define("DEPT", '0'); // Gestion de la localisation

$variables = 'highlight='.HIGHLIGHT.'&chl='.CAT_HIGHLIGHT.'&dept='.DEPT.'&part_id='.PART_ID.'&base_url='.urlencode(BASE_URL).'&data=';
if($methode == "POST")
	{
	$variables .= urlencode(serialize($_POST));
	$vud_data = interoge_vud('http://www.viteundevis.com/mb.php', $variables);
	}
elseif($methode == "GET")
	{
	$variables .= urlencode(serialize($_GET));
	$vud_data = (interoge_vud('http://www.viteundevis.com/mb.php?'.$variables));
	}
$vud_data = unserialize($vud_data);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Devis piscine: devis pour construction piscine, abris piscine, accessoires piscine <? echo $vud_data[titre]; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="http://www.construire-sa-piscine.com/devis/style.css" rel="stylesheet" type="text/css" />
<link href="http://www.construire-sa-piscine.com/devis/layout.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="http://www.construire-sa-piscine.com/favicon.ico" />

<meta name="description" lang="fr" content="Recevez 3 devis de professionnels de la piscine de votre région en 48 heures. Gratuit  et sans engagement." />
<meta name="KEYWORDS" content="piscine, construire une piscine, construire sa piscine, construction piscine, entretien piscine, piscines, construire piscine, forum piscine, devis piscine, travaux piscine," />

<!--[if lt IE 7]>
  <script type="text/javascript" src="ie_png.js"></script>
  <script type="text/javascript">
  ie_png.fix('.png');
  </script>
<![endif]-->
<script src="http://www.construire-sa-piscine.com/Scripts/swfobject_modified.js" type="text/javascript"></script>

		<style type="text/css">
		#principal
			{
			width:880px;
			margin-left:auto;
			margin-right:auto;
			}
			
		#principal td
			{
			font-family: arial;
			font-size: 14px;
			}
		
		/* GAUCHE */	
		
		#principal #cell_gauche
			{
			vertical-align: top;
			color:#000000;
			padding-right:10px;
			}
		
		#principal #cell_gauche a
			{
			text-decoration: none;
			}
		
		#principal #cell_gauche #text_page
			{
	font-weight: bold;
	font-size: 28px;
	margin-bottom:10px;
	line-height: 25px;
			}
		
		#principal #cell_gauche #text_page strong
			{
			color:#0e3ec3;
			}
		
		#principal #cell_gauche #slogan
			{
			color:#ffffff;
			font-size: 14px;
			padding:5px 5px 5px 15px;
			font-weight: bold;
			background: #144982;
			-moz-border-radius: 5px;
			}
		
		#principal #cell_gauche #navibar
			{
			font-size: 12px;
			margin-top:10px;
			}
		
		#principal #cell_gauche h2
			{
			color:#404F18;
			font-size: 19px;
			}
		
		#principal #cell_gauche fieldset
			{
			background:#E7EFD1;
			border:0px;
			padding:15px;
			margin-bottom:10px;
			-moz-border-radius:10px;
			border-radius:10px;
			}
		
		#principal #cell_gauche fieldset legend
			{
			color:#252F09;
			font-size:16px;
			padding-top:25px
			}
			
		/* DROITE */
			
		#principal #cell_droite
			{
			width:300px;
			vertical-align: top;
			}
			
		#principal #cell_droite #bloc_arrondi
			{
			vertical-align: top;
			background:#428DDC;
			color:#ffffff;
			-moz-border-radius:10px;
			padding:5px
			}
			
		#principal #cell_droite #bloc_arrondi fieldset
			{
			margin-top:15px;
			background:#B7CF74;
			padding:5px;
			border:0px;
			font-size:16px;
			}
			
		#principal #cell_droite #bloc_arrondi fieldset legend
			{
			color:#FBFFEF;
			font-size:22px;
			font-weight:bold;
			}
			
		#principal #cell_droite #bloc_arrondi fieldset ul
			{
			list-style-type: none;
			}
			
		#principal #cell_droite #bloc_arrondi fieldset strong
			{
			font-size:19px;
			color:#4C5F17;
			}
			
		</style>

</head>


<body id="page1" onload="new ElementMaxHeight();">
<!-- ad6média -->
<script type="text/javascript">
/* <![CDATA[ */
var ad6_url = 'http://zonezu2fku.s.ad6media.fr/?d='+((new Date()).getTime())+'&r='; try { ad6_url+=escape(top.document.referrer); } catch (e) {ad6_url+=escape(document.referrer);} document.write('<scr'+'ipt typ'+'e="text/javas'+'cript" src="'+ad6_url+'"></scr'+'ipt>');
/* ]]> */
</script>
<script type="text/javascript">
/* <![CDATA[ */
var ad6_url = 'http://fwl1ez5vbf.s.ad6media.fr/?d='+((new Date()).getTime())+'&r='; try { ad6_url+=escape(top.document.referrer); } catch (e) {ad6_url+=escape(document.referrer);} document.write('<scr'+'ipt typ'+'e="text/javas'+'cript" src="'+ad6_url+'"></scr'+'ipt>');
/* ]]> */
</script>
<!-- ad6media -->
<div id="main-bg">
  <div id="main">
    <!-- header -->
    <div id="header">
     <div>
      <!--Valid flash version 8.0-->
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="944" height="459" id="FlashID" title="piscine">
        <param name="movie" value="http://www.construire-sa-piscine.com/flash/header_v8_devis.swf" />
        <param name="quality" value="high" />
        <param name="wmode" value="transparent" />
        <param name="swfversion" value="6.0.65.0" />
        <!-- Cette balise <param> invite les utilisateurs de Flash Player en version 6.0 r65 et ultérieure à télécharger la version la plus récente de Flash Player. Supprimez-la si vous ne voulez pas que cette invite soit visible. -->
        <param name="expressinstall" value="Scripts/expressInstall.swf" />
        <!-- La balise <object> suivante est destinée aux navigateurs autres qu'IE. Supprimez-la d'IE à l'aide d'IECC. -->
        <!--[if !IE]>-->
        <object type="application/x-shockwave-flash" data="http://www.construire-sa-piscine.com/flash/header_v8_devis.swf" width="944" height="459">
          <!--<![endif]-->
          <param name="quality" value="high" />
          <param name="wmode" value="transparent" />
          <param name="swfversion" value="6.0.65.0" />
          <param name="expressinstall" value="http://www.construire-sa-piscine.com/Scripts/expressInstall.swf" />
          <!-- Le navigateur affichera le contenu alternatif suivant pour les utilisateurs d'un lecteur Flash de version 6.0 ou de versions plus anciennes. -->
          <div>
            <h4>Le contenu de cette page n&eacute;cessite une version plus r&eacute;cente d'Adobe Flash Player.</h4>
            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtenir le lecteur Adobe Flash" width="112" height="33" /></a></p>
          </div>
          <!--[if !IE]>-->
        </object>
        <!--<![endif]-->
      </object>
     </div>
    </div>
    <!-- content -->
    <div id="content">
      
      <div class="wrapper">
        <div class="col-1" style="float:right; padding:0 0 0 14px;width:100%;">
          <div class="box">
            <div class="corner-top-left png">
              <div class="corner-top-right png">
                <div class="border-top"></div>
              </div>
            </div>
            <div class="box-content">
              <div class="inner">
                <div class="wrapper">
                  <div>
                    <table id="principal">
		<tr>
			<td id="cell_gauche">
				<div id="text_page"><?php echo $vud_data['titre_page']; ?></div>
				<div id="slogan"><?php echo $vud_data['slogan']; ?></div>
				<div id="navibar"><a href="/">Accueil</a> > <?
					for($a=0;$a<count($vud_data['navibar']);$a++)
						{
						if($a > 0)
							echo " > ";
						echo $vud_data['navibar'][$a];
						}
				?></div>
				<div id="content"><? echo $vud_data['html']; ?></div>
			</td>
			<td id="cell_droite">
                <div id="bloc_arrondi">
                    <center>
                    <h1><? echo $vud_data['h1']; ?></h1>
                    <h2 class="h1">Comment &ccedil;a marche ?</h2><img src="<? echo $vud_data['logo']; ?>" alt="<? echo $vud_data['h1']; ?>" ><img src="http://www.construire-sa-piscine.com/devis/droite_explication.png" alt="Devis piscine" ></center>
                </div>
            </td>


		</tr>
	</table>
                    <h2>Devis piscine: devis pour travaux piscine</h2>
                    
                  </div>
<div class="clear"></div>
                </div>
              </div>
            </div>
            <div class="corner-bot-left png">
              <div class="corner-bot-right png">
                <div class="border-bot"></div>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
      <div class="wrapper" style="margin-top:10px">
        <div class="col-1" style="float:right; padding:0 0 0 14px;width:100%;">
          <div class="box">
            <div class="corner-top-left png">
              <div class="corner-top-right png">
                <div class="border-top"></div>
              </div>
            </div>
            <div class="box-content">
              <div class="inner">
                <div class="wrapper">
                  <div>
                    <h2>Devis piscine: devis pour travaux piscine</h2>
                    <p>Sur cette page, vous pouvez déposer une demande de <em><strong>devis/travaux</strong></em> pour votre <em><strong>piscine</strong></em>. Cette demande peut concerner plusieurs souhaits:</p>
                    <ul>
                      <li><em><strong>Construction d'une piscine</strong></em></li>
                      <li><strong><em>Construction d'un abris piscine</em></strong></li>
                      <li><strong><em>Véranda pour piscine</em></strong></li>
                      <li><strong><em>Piscine en kit</em></strong></li>
                      <li><strong><em>Dallage ou pavage de piscine</em></strong></li>
                      <li><strong><em>Entretien de piscine</em></strong><em></em></li>
                    </ul>
                    <p style="margin-top:30px;"><em>construire-sa-piscine.com</em> se propose d'être votre intérmediaire pour votre projet piscine. Vous déposez votre <em><strong>devis piscine</strong></em> ou <em><strong>devis travaux piscine</strong></em>, et vous recevez des<em><strong> devis</strong></em> de prestataires dans ce domaine.</p>
                    <p>Ce service est entièrement gratuit et ne vous engage en rien du tout. </p>
                    <p>Si vous souhait&eacute; un <em><strong>devis travaux </strong></em>dans des domaines aussi vari&eacute; que le <em>gros oeuvre</em> (ma&ccedil;onnerie, tuile, couverture, charpente, construction) le <em>second oeuvre</em> (fen&ecirc;tres, menuiserie, am&eacute;nagement ext&eacute;rieur...) ou les finitions (pose carrelage), visitez le site <em><strong>devis travaux</strong></em> o&ugrave; vous pourrez d&eacute;poser votre demande de <em><strong>devis travaux</strong></em> de la m&ecirc;me fa&ccedil;on. Le site propose &eacute;galement des devis pour la pose de <em>panneaux photovolta&iuml;ques</em> et de <em>chauffage solaire</em>.</p>
                   
                    
                  </div>
<div class="clear"></div>
                </div>
              </div>
            </div>
            <div class="corner-bot-left png">
              <div class="corner-bot-right png">
                <div class="border-bot"></div>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
      
    </div>
    
    <!-- footer -->
    <div id="footer">
      <p>Site crée par CrCom,<a href="http://www.crcom.fr" title="creation site internet" target="_blank">creation site internet</a> &copy; <?php echo date('Y'); ?>
      </p>
    </div>
    <div class="partenaires">
    <a href="http://www.xiti.com/xiti.asp?s=475245" title="WebAnalytics" target="_top">
<script type="text/javascript">
<!--
Xt_param = 's=475245&p=';
try {Xt_r = top.document.referrer;}
catch(e) {Xt_r = document.referrer; }
Xt_h = new Date();
Xt_i = '<img width="80" height="15" border="0" alt="" ';
Xt_i += 'src="http://logv1.xiti.com/bcg.xiti?'+Xt_param;
Xt_i += '&hl='+Xt_h.getHours()+'x'+Xt_h.getMinutes()+'x'+Xt_h.getSeconds();
if(parseFloat(navigator.appVersion)>=4)
{Xt_s=screen;Xt_i+='&r='+Xt_s.width+'x'+Xt_s.height+'x'+Xt_s.pixelDepth+'x'+Xt_s.colorDepth;}
document.write(Xt_i+'&ref='+Xt_r.replace(/[<>"]/g, '').replace(/&/g, '$')+'" title="Internet Audience">');
//-->
</script>
<noscript>
Mesure d'audience ROI statistique webanalytics par <img width="80" height="15" src="http://logv1.xiti.com/bcg.xiti?s=475245&p=" alt="WebAnalytics" />
</noscript></a>



</div>

  </div>
  
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>

  

	

</body>
</html>
