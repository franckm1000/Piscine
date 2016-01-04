<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Formulaire de contact pour construire-sa-piscine.com</title>

<!-- Import de la feuille de style CSS -->
<link href="feuille.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="favicon.ico">

<meta name="DESCRIPTION" content="Formulaire de Contact pour le site Construire-sa-piscine.com. Les internautes peuvent laisser leurs questions sur ce formulaire">
<meta name="KEYWORDS" content="piscine, construire une piscine, construire sa piscine, construction piscine, entretien piscine, piscines, construire piscine, forum piscine">

<meta name=”robots” content=”none”>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta NAME="language" CONTENT="fr">
<meta name="AUTHOR" content="franck mercier">
<meta name="CREATED" content="20061117;7000921">
<meta name="verify-v1" content="r0CMa2BCxghtrl3FZ57EMHh64abTuSbyP8KHGk0zykI=" >
<meta http-equiv="Content-Language" content="fr">
<meta name="reply-to" content="contact@construire-sa-piscine.com">
<meta name="category" content="Famille">
<meta name="distribution" content="global">
<meta name="copyright" content="franck mercier">
<meta name="identifier-url" content="http://www.construire-sa-piscine.com">
<meta name="expires" content="never">
<meta name="Date-Creation-yyyymmdd" content="20060110">
<meta name="Date-Revision-yyyymmdd" content="20080720">

<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="js/lightbox.js"></script>

<SCRIPT language="JavaScript"><!--

var imgs = new Array( "
background_menu2.png", "background_menu.png" );

for( var i = 0 ; i < imgs.length ; i++ )
{
var tmp = imgs[ i ];
(imgs[ i ] = new Image()).src = tmp;
}

//--></script>

<script type="text/javascript" language="Javascript" >
<!--
function verification()
{
 if(document.formulaire.nom.value == "")  {
   alert("Votre nom est obligatoire !");
   document.formulaire.nom.focus();
   return false;
  }
   else
 if(document.formulaire.prenom.value == "") {
   alert("Votre prénom est obligatoire !");
   document.formulaire.prenom.focus();
   return false;
  }
   else
 if(document.formulaire.email.value == "") {
   alert("Votre adresse email est obligatoire !");
   document.formulaire.email.focus();
   return false;
  }
  else
 if(document.formulaire.email.value.indexOf('@') == -1) {
   alert("Votre adresse email n'est pas valide !");
   document.formulaire.email.focus();
   return false;
  }
  else
    sujetoption = -1
    for (i=0; i<formulaire.sujet.length; i++)
    {
    if(document.formulaire.sujet[i].checked){
    sujetoption = i
    }
   }
    if (sujetoption == -1) {
   alert("Vous devez choisir le sujet de votre message !");
   return false;
  }
  else
 if(document.formulaire.texte.value == "") {
   alert("Vous ne pouvez envoyer un message vide !");
   document.formulaire.texte.focus();
   return false;
  }
return true
}
//-->
</script>

</head>
<body>

<div id="conteneur_page">

	<div class="bloc_header_1">&nbsp;</div>
    <div class="bloc_header_2">&nbsp;</div>
    <div class="bloc_header_3">&nbsp;</div>
    <div class="bloc_header_4">&nbsp;</div>
    
    <div id="conteneur_menu">
    	<div class="bloc_menu_1"></div>
        
        <ul id="menu">
            <li><a href="/index.html" style="background-image:url(images/background_menu2.png)"><div class="titre_blanc_header">Accueil</div></a></li>
<li><a href="/forum/" ><div class="titre_blanc_header">Forum Piscine</div></a></li>
<li><a href="/communiques_piscine/" ><div class="titre_blanc_header">Articles piscine</div></a></li>
<li><a href="/devis/" ><div class="titre_blanc_header">Devis piscine</div></a></li>
<li><a href="/recherche-piscine/" ><div class="titre_blanc_header">Recherche piscine</div></a></li>
<li><a href="page6.php" ><div class="titre_blanc_header">Contact</div></a></li>
        </ul>
        
        <div class="bloc_menu_2"></div>
    </div>
    
    <div class="bloc_header_5"></div>
 
 	<div class="bloc_header_6">&nbsp;</div>
    
    <div id="conteneur_contenu">
    
    	<div class="bloc_contenu_1" align="center">
    	  <div id="conteneur_menu_vertical"></div>
            
          <div align="center"><a href="http://www.construire-sa-piscine.com/blog-piscine/rss.php"><img src="images/RSS.png" border="0" /></a></div>
        
      </div>
        <div class="bloc_contenu_2">

          	<div class="titre_page">Formulaire de contact :</div>
            
            	<br />
            
            	<form name="formulaire" action="traitement_email.php" method="post" onSubmit="return verification()">
                
                <table width="550">
                <tr><td width="200"><p class="text_contenu">Votre nom : </p></td><td><input name='nom' type='text' class='input_contact'></td></tr>
                <tr><td><p class="text_contenu">Votre pr&eacute;nom : </p></td><td><input name='prenom' type='text' class='input_contact'></td></tr>
                <tr><td><p class="text_contenu">Votre email</p></td><td><input name='email' type='text' class='input_contact'>
                N'oubliez pas votre e-mail merci!!!!!</td></tr>
                <tr><td><p class="text_contenu">Le motif de <br />votre message</p></td><td><p class="text_contenu"><input name='sujet' type='radio' value='renseignements'>Renseignements<br />
                <input name='sujet' type='radio' value='bugs sur le site'> Bugs sur le site<br />
                <input name='sujet' type='radio' value='partenariat et publicité'>Partenariat / publicité<br />
                <input name='sujet' type='radio' value='autres'>Autres ...</p></td></tr>
                <tr><td><p class="text_contenu">Votre message</p></td><td><textarea name='texte' cols='40' rows='10' class='input_contact'></textarea></td></tr>
                <tr><td height="50">&nbsp;</td><td>
                <input name='soumettre' type='image' src="images/button_submit.png" height="26" width="100"></td></tr>
                </table>
                
                </form>
           
			
        
        </div>
    
    </div> 
    
    <div class="bloc_footer_1">
    
    
    
    </div>
    
</div>
<?php include('footer.php'); ?>

</body>
</html>
