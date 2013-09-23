<?php
# -- BEGIN LICENSE BLOCK ---------------------------------------
#
# This file is part of Dotclear 2.
#
# Copyright (c) 2003-2013 Olivier Meunier & Association Dotclear
# Licensed under the GPL version 2.0 license.
# See LICENSE file or
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
#
# -- END LICENSE BLOCK -----------------------------------------

require dirname(__FILE__).'/../inc/admin/prepend.php';

dcPage::check('usage,contentadmin');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="ROBOTS" content="NOARCHIVE,NOINDEX,NOFOLLOW" />
	<meta name="GOOGLEBOT" content="NOSNIPPET" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Bibliothèque de styles - Dotclear - 2.6</title>
	<link rel="icon" type="image/png" href="images/favicon.png" />
	<!--[if lt IE 9]>
	<script type="text/javascript" src="js/ie7/IE9.js"></script>
	<link rel="stylesheet" type="text/css" href="style/iesucks.css" />
	<![endif]-->
	<link rel="stylesheet" href="style/default.css" type="text/css" media="screen" />
	<style type="text/css">
		#content > h2 {padding-top: 2.5em;}
		#content > h2:first-child {padding-top: 0}
		.one-box .box {border: 1px solid #ddd; padding: 2px .5em;}
	</style>
	<script type="text/javascript" src="js/jquery/jquery.js"></script>
	<script type="text/javascript" src="js/jquery/jquery.pageTabs.js"></script>
	<script type="text/javascript" src="js/jquery/jquery.biscuit.js"></script>
	<script type="text/javascript" src="js/jquery/jquery.bgFade.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
	<script type="text/javascript" src="js/prelude.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		dotclear.img_plus_alt = 'dévoiler';
		dotclear.img_minus_alt = 'cacher';
		dotclear.img_menu_on = 'images/menu_on.png';
		dotclear.img_menu_off = 'images/menu_off.png';
		dotclear.msg.help = 'Aide pour cette page';
		dotclear.msg.help_hide = 'Masquer';
		dotclear.msg.error = 'Erreur :';
	//]]>
	</script>
	<script type="text/javascript">
	//<![CDATA[
		dotclear.unfolded_sections = {'dc_favorites_menu':true,'dc_system_menu':true};
	//]]>
	</script>
	<script type="text/javascript">
	//<![CDATA[
		$(function() {
			$.pageTabs('two-boxes');
		});
	//]]>
	</script>
</head>

<body id="dotclear-admin" class="no-js">
		<ul id="prelude">
			<li><a href="#content">Aller au contenu</a></li>
			<li><a href="#main-menu">Aller au menu</a></li>
			<li><a href="#qx">Aller à la recherche</a></li>
		</ul>
	<div id="header">
		<h1><a href="./index.php"><span class="hidden">Dotclear</span></a></h1>
		<div id="top-info-blog">
				<p>Bibliothèque de styles - Dotclear - 2.6+</p>
		</div>
		<ul id="top-info-user"><li>Octobre 2013</li></ul>
	</div><!-- /header -->

	<div id="wrapper" class="clearfix">
		<div class="hidden-if-no-js collapser-box"><a href="#" id="collapser">
		<img class="collapse-mm" src="images/collapser-hide.png" alt="Cacher le menu" />
		<img class="expand-mm" src="images/collapser-show.png" alt="Montrer le menu" />
		</a></div>'.
		<div id="main">
			<div id="content" class="clearfix">

				<h2><span class="page-title">Typographie</span></h2>
				<h3 id="texte">Textes</h3>
					<p>La font-size de base est à 1.2rem (la valeur <code>1rem</code> correspond à 10px). Si vous utilisez l'unité <code>rem</code> pensez à faire précéder la déclaration par son équivalent 
					en pixels pour rester compatible avec Internet Explorer. L'interlignage courant est à 1.5.</p>
					<p>La liste suivante est de class <code>"nice"</code>. Elle est semblable aux listes ordinaires mais avec des puces carrées.</p>
					<ul class="nice">
						<li>Les textes courants sont en Arial, Helvetica ou sans-serif. </li>
						<li>Le code adopte la fonte Andale Mono, Courier New ou monospace.</li>
						<li>Les liens ont des aspects différents au focus et au survol. Il faut conserver cette distinction, nécessaire à l'accessibilité et l'ergonomie.</li>
					</ul>

					<h3 id="titres">Titre h3</h3>
						<p>Le titre de niveau h1 est réservé au titre du site-admin. Le titre de niveau h2 est réservé au breadcrumb/titre de la page courante. On utilise les titres de niveau h3 en premier niveau de titre à l'intérieur des pages, comme sur la page Import/Export.</p>
						<p>Il ne faut pas choisir un niveau de titre en fonction de son aspect mais respecter une hiérarchie cohérente. On peut obtenir visuellement l'aspect d'un titre h3 en donnant à l'élément la class <code>"as_h3"</code>.</p>
					<h4>Titre de niveau h4</h4>
						<p>On peut obtenir visuellement l'aspect d'un titre h4 en donnant à l'élément la class <code>"as_h4"</code>.</p>
					<h5>Titre de niveau h5</h5>
						<p>Le titre de niveau h5 est assez peu employé mais son style est prévu. Dans une admin de base, on utilise les niveaux
						h5 pour certains éléments du sidebar du billet, mais un style particulier leur est alors appliqué pour ressembler aux autres
						items de ce sidebar.</p>
					<div class="fieldset">
						<h4>Titres des encadrés</h4>
							<p>Les titres de boîte encadrées (div de class <code>"fieldset"</code>, comme ici) se présentent comme ci-dessus.</p>
							<p>On peut utiliser, quel que soit le niveau hx de cet intertitre la class <code>"pretty-title"</code> pour obtenir l'effet ci-dessus.</p>
					</div>
					<h4 class="smart-title">Autre variante</h4>
						<p>On dispose également d'une class <code>"smart-title"</code> pour obtenir une présentation comme celle du titre de ce paragraphe.</p>

				<h2><span class="page-title">Layouts</span></h2>

				<h3 id="onglets">Onglets</h3>
				<p>Les descriptions des constructions en multi-colonnes ci-dessous présentent un exemple de répartition en onglets.</p>

				<h3 id="multi-colonnage">Multi-colonnage</h3>
				<div id="one-box" class="multi-part" title="One-box">
					<h4>Boîtes distribuées horizontalement</h4>
					<div class="one-box">
						<div class="box">
							<p><span class="step">1</span> Toutes les boîtes de class <code>"box"</code> placées à l'intérieur d'une boîte de class <code>"one-box"</code> se distribuent horizontalement (imaginez que chaque boîte est un mot dans un paragraphe). Si les largeurs de ces boîtes ne sont pas spécifiquement définies dans la CSS, elle s'ajustent à leur contenu.</p>
						</div>
						<div class="box">
							<p><span class="step">2</span> Voici une petite boîte.</p>
						</div>
						<div class="box">
							<p><span class="step">3</span> Une autre petite boîte.</p>
						</div>
						<div class="box">
							<p><span class="step">4</span> Par défaut les « lignes »  de boîtes <code>"box"</code> sont justifiées au sein de la boîte <code>"one-box"</code> et l'espacement se répartit entre elles.</p>
						</div>
						<div class="box">
							<p><span class="step">5</span> Si vous souhaitez un autre alignement des boîtes entre elles vous pouvez ajouter les class :</p>
							<ul class="nice clear">
								<li><code>"txt-left"</code>,</li>
								<li><code>"txt-right"</code></li> 
								<li>ou <code>"txt-center"</code></li>
							</ul>
							<p>à la class <code>"one-box"</code>.</p>
						</div>
						<div class="box">
							<p><span class="step">6</span> Le cadre placé ici autour de chaque boîte ne fait pas partie des styles par défaut.</p>
						</div>
					</div>
				</div>
				<div id="two-boxes" class="multi-part" title="Two-boxes">
					<h4>Boîtes distribuées deux par deux</h4>
					<div>
						<div class="two-boxes odd">
							<p><span class="step">1</span> Les boîtes de class <code>"two-boxes"</code> ont une règle CSS <code>display:inline-block;</code>. Elles se rangent alternativement à gauche et à droite. Pour plus de clarté, les blocs sont ici numérotés avec leur ordre dans le flux.</p>
						</div><!--
						--><div class="two-boxes even">
							<p><span class="step">2</span> S'il n'y a que deux boîtes, une autre class n'est pas nécessaire. S'il y en a plusieurs, il est conseillé de leur attribuer alternativement les class <code>"odd"</code> et <code>"even"</code> pour que les marges se placent correctement.</p>
						</div><!--
						--><div class="two-boxes odd">
							<p><span class="step">3</span> Attention, il faut soit ne pas retourner à la ligne entre la fermeture d'une boîte <code>"two-boxes"</code> et l'ouverture de la suivante soit adopter la méthode de commentaire vide mise en place ici et expliquée chez <a href="http://www.alsacreations.com/astuce/lire/1432-display-inline-block-espaces-indesirables.html">Alsacréations</a> («&nbsp;Méthode 2&nbsp;»).</p>
						</div><!--
						--><div class="two-boxes even">
							<div class="box">
								<p><span class="step">4</span> Toutes les boîtes de class <code>"box"</code><br />
								 placées au sein d'une boîte <code>"two-boxes"</code>…</p>
							</div>
							<div class="box">
								<p><span class="step">4 bis</span>… se distribuent horizontalement comme dans <br />
									une boîte <code>"one-box"</code>.</p>
							</div>
						</div>
					</div>
				</div>
				<div id="three-boxes" class="multi-part" title="Three-boxes">
					<h4>Boîtes distribuées trois par trois</h4>
					<div>
						<div class="three-boxes">
							<div class="box">
								<p>Sur le même principe que les « two-boxes » on peut utiliser des boîtes de class <code>"three-boxes"</code> pour répartir les contenus sur trois colonnes de 30% chacune (le reste est occupé par les marges).</p>
							</div>
						</div><!--
						--><div class="three-boxes">
							<div class="box">
								<p>Comme pour les "two-boxes" il faut soit ne pas laisser d'espace ou de retour à la ligne entre les boîtes, soit adopter la méthode recommandée plus haut.</p>
							</div>
						</div><!--
						--><div class="three-boxes">
							<div class="box">
								<p>Dans les « two-boxes » comme dans les « three-boxes », on peut placer à l'intérieur plusieurs autres div de class="box" qui s'afficheront les unes à côté des autres ou l'une en dessous de l'autre selon la place dont elles disposent.</p>
							</div>
						</div>
					</div>
				</div>
				<div id="two-cols-50-50" class="multi-part" title="Two-cols (50/50)">
					<h4>Deux colonnes flottantes de largeurs égales</h4>
					<div class="two-cols clearfix">
						<div class="col">
							<p>La div englobante porte la class <code>"two-cols"</code>, chacune de ses div porte la class <code>"col"</code>.
							Sans autre précision les deux colonnes sont d'égale largeur.</p>
						</div>
						<div class="col">
							<p>Attention : ces colonnes sont construites avec des flottants, il faut donc penser à mettre une class <code>clear</code> à l'élément suivant ou ajouter la class <code>"clearfix"</code> à la <code>div class="two-cols"</code>.</p>
						</div>
					</div>
				</div>
				<div id="two-cols-70-30" class="multi-part" title="Two-cols (70/30)">
					<h4>Deux colonnes flottantes de largeurs inégales</h4>
					<div class="two-cols clearfix">
						<div class="col70">
							<p><span class="step">col70</span> La div englobante porte la class <code>"two-cols"</code>.
							Pour obtenir des colonnes inégales, on dispose des classes <code>"col70"</code> et <code>col30</code> à attribuer à l'une ou à l'autre de ses colonnes.</p>
						</div>
						<div class="col30">
							<p><span class="step">col30</span> Penser à mettre une class <code>"clear"</code> à l'élément suivant ou ajouter la class <code>"clearfix"</code> <code>div class="two-cols"</code>.</p>
						</div>
					</div>
				</div>
				<div id="three-cols" class="multi-part" title="Three-cols (deprecated)">
					<h4>Trois colonnes flottantes de largeurs égales</h4>
					<p class="warning"><strong>Deprecated.</strong> Ces règles sont conservées dans la 2.6 par souci de rétro-compatibilité mais il est recommandé d'utiliser désormais le colonnage <a href="#three-boxes">three-boxes</a>.</p>
					<div class="three-cols clearfix">
						<div class="col">
							<h5>Colonne 1</h5>
							<p>La div englobante porte la class <code>"three-cols"</code>, chacune de ses div porte la class <code>"col"</code>. Les trois colonnes sont d'égale largeur.</p>
						</div>
						<div class="col">
							<h5>Colonne 2</h5>
							<p>Voici une deuxième colonne. N'oubliez pas d'ajouter la class <code>"clearfix"</code> à la class <code>"three-cols"</code> ou un élément de class <code>"clear"</code> après cet élément.</p>
						</div>
						<div class="col">
							<h5>Colonne 3</h5>
							<p>Voilà la troisième colonne.</p>
						</div>
					</div>
				</div>
				<hr />
				<p><strong>Note :</strong> dans les exemples les valeurs et les numérotations sont placées dans un <code>span class="step"</code> (et ressortent donc dans un petit bloc à fond gris).</p>

				<h2><span class="page-title">Interactions</span></h2>

				<h3 id="elements">Éléments de formulaire</h3>
					<form class="two-cols clearfix" action="#">
						<div class="col">
							<p><label for="ex1">Label simple + input text :</label><input id="ex1" type="text" /></p>
							<p class="form-note">p class="form-note".</p>
							<p><label for="ex2" class="required"><abbr title="'.__('Required field').'">*</abbr> Label class="required" :</label> <input id="ex2" type="text" /></p>
							<p><label for="ex3">Input class="maximal" :</label> <input id="ex3" type="text" class="maximal" /></p>
							<p><label for="ex4" class="classic">Label class="classic" :</label> <input id="ex4" type="text" /></p>
						</div>
						<div class="col">
							<p class="field"><label for="ex5">p.field label + input :</label><input id="ex5" type="text" /></p>
							<p class="field"><label for="ex6">p.field label + select :</label>
							<select id="ex6"><option value="opt2">Option 2</option><option selected="selected" value="opt2">Option 2</option></select>
							</p>
							<p><label class="classic" for="ex7"><input type="checkbox" checked="checked" id="ex7" value="1" name="ex7" />
								Checkbox (label.classic)</label></p>
							<p><label class="classic" for="ex8-1"><input type="radio" checked="checked" id="ex8-1" value="ex8-1" name="ex8-1" />
							 Bouton radio 1 (label.classic)</label></p>
							 <p><label class="classic" for="ex8-2"><input type="radio" id="ex8-2" value="ex8-2" name="ex8-2" />
							 Bouton radio 2 (label.classic)</label></p>
							 <p class="form-note">Les checkboxes et les boutons radio sont dans la balise &lt;label&gt;.</p>
						</div>
					</form>
					<form action="#" class="clear">
						<fieldset>
						<legend>Légende de fieldset</legend>
							<p>Attention: Les fieldsets ne doivent être utilisés que pour isoler un groupe de champs au sein d'un formulaire.</p>
						</fieldset>
					</form>

				<h3 id="boutons">Boutons</h3>
					<div class="clearfix">
					<p><a class="button add">a.button.add</a> Se place en haut à droite (dans un p.top-add)</p>
						<p><input type="button" value="Type button" /> <a href="#" class="button">a.button</a> <input type="reset" value="Type reset" /> <a href="#" class="button reset">a.reset</a></p>
						<p><input type="submit" value="Type submit" /> <input type="submit" class="delete" value="Type submit class delete" /> <a href="#" class="button delete">a.button delete</a></p>
						<p><input type="submit" value="Type submit class disabled" class="disabled" /></p>
					</div>

				<h3 id="messages">Messages</h3>
				<h4 class="smart-title">Messages système</h4>
					<p>Il existe quatre types de messages système auxquels correspondent des classes CSS : .error, .message, .success, .warning-msg. Ils s'affichent en haut de page, sous le titre/breadcrumb.</p>
					<div class="message">
						<p>Message simple. Le plus souvent horodaté dcPage::message</p>
					</div>
					<div class="success">
						<p>Message de succès. Le plus souvent horodaté dcPage::success</p>
					</div>
					<div class="warning-msg">
						<p>Message warning. Non horodaté dcPage::warning</p>
					</div>
					<div class="error">
						<p>Message d'erreur. Non horodaté dcPage::error</p>
					</div>
					<p>La classe .static-msg peut être utilisée directement pour affichage en haut de page :</p>
					<div class="static-msg">
						<p>Comme le message simple mais sans effets de transition.</p>
					</div>
					<p>Un type de message réservé à Dotclear peut s'afficher en haut de la page :</p>
					<div class="dc-update">
						<h3>Dotclear 42 est disponible</h3>
						<p><a class="button submit" href="#">Mettre à jour maintenant</a>
						<a class="button" href="u#">Me le rappeler plus tard</a></p>
						<p class="updt-info"><a href="#">Informations sur cette version</a></p>
					</div>
				<h4 class="smart-title">Messages contextuels</h4>
					<p class="warn">Paragraphe de message d'alerte class warn ou warning.</p>
					<p class="info">Paragraphe de message de class info.</p>
					<p>Ces messages sont en display:inline-block. Le fond s'adapte à la longueur du message.</p>

				<h2><span class="page-title">Navigation</span></h2>

				<h3 id="direct">Selecteur d'accès direct</h3>
					<p>Sur des pages longues et denses comme les pages about:config ou about:preferences, on peut utiliser un sélecteur pour faciliter l'accès direct aux sections.</p>
					<p class="anchor-nav">
						<label class="classic" for="lp_nav">Aller à : </label> 
						<select id="lp_nav" name="lp_nav">
							<option value="#l_accessibility">accessibility</option>
							<option value="#l_dashboard">dashboard</option>
							<option value="#l_dmhostingmonitor">dmhostingmonitor</option>
							<option value="#l_dmpending">dmpending</option>
							<option value="#l_favorites">favorites</option>
							<option value="#l_filters">filters</option>
							<option value="#l_interface">interface</option>
							<option value="#l_lists">lists</option>
							<option value="#l_toggles">toggles</option>
						</select>
						<input type="submit" id="lp_submit" value="Ok" style="display: none;" />
						<input type="hidden" value="aboutConfig" name="p" />
					</p>
				<h3 id="prevnext">Navigation contextuelle</h3>
					<p><a title="Titre du lien (nouvelle fenêtre)" onclick="window.open(this.href);return false;" href="http://fr.dotclear.org/blog" class="onblog_link">Lien vers le blog <img alt="" src="images/outgoing-blue.png" /></a></p>
					<p class="nav_prevnext"><a title="Titre de l'élément précédente" href="post.php?id=4145">«&nbsp;Élément précédent</a> | <a title="Titre de l'élément suivant" href="#">Élément suivant&nbsp;»</a></p>

			</div><!-- /content -->
		</div><!-- /main -->
		<div id="main-menu">
			<form id="search-menu" action="search.php" method="get">
				<p><label for="qx" class="hidden">Chercher : </label><input type="text" size="30" name="qx" id="qx" maxlength="255"  /><input type="submit" value="OK" /></p>
			</form>
			<div id="favorites-menu">
				<h3>Typo</h3>
				<ul>
					<li><a href="#texte">Texte</a></li>
					<li><a href="#titres">Titres hx</a></li>
				</ul>
			</div><!-- /favorites-menu -->
			<div id="blog-menu">
				<h3>Layouts</h3>
				<ul>
					<li><a href="#onglets">Onglets</a></li>
					<li><a href="#multi-colonnage">Multi-colonnage</a></li>
				</ul>
			</div><!-- /blog-menu -->
			<div id="system-menu">
				<h3>Interactions</h3>
				<ul>
					<li><a href="#elements">Éléments de formulaire</a></li>
					<li><a href="#boutons">Boutons</a></li>
					<li><a href="#messages">Messages</a></li>
				</ul>
			</div><!-- /system-menu -->
			<div id="plugins-menu">
				<h3>Navigation</h3>
				<ul>
					<li><a href="#direct">Accès direct</a></li>
					<li><a href="#prevnext">Précédent, suivant</a></li>
				</ul>
			</div><!-- /plugins-menu -->
		</div><!-- /main-menu -->

		<div id="footer">
			<a href="http://dotclear.org/" title="Merci de manger des clafoutis."><img src="style/dc_logos/w-dotclear90.png" alt="Merci d'utiliser Dotclear 2.6-dev." /></a>
		</div><!-- /footer -->
												<!-- 
												                  .
												               ,;:'`'::
												            __||
												      _____/LLLL\_
												      \__________"|
												    ~^~^~^~^~^~^~^~^~^~
												 -->
	</div><!-- /wrapper -->
</body>
</html>