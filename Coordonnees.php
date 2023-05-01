<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Vos coordonnées</title>
		<link href="Styles.css" rel="stylesheet" type="text/css">
	</head>
    <header>
	   <nav>
			<label for="menu-mobile" class="menu-mobile"><b>Menu</b></label>
			<input type="checkbox" id="menu-mobile" role="button">
			   <ul>
				   <li class="menu-html"><a href= "Index.html"><b><i>Accueil</i></b></a>
					   <ul class="submenu">
						  <li><a href="HTML.html">Mon portofolio</a></li>
						  <li><a href="Monstage.html">Mon stage en entreprise</a></li>
						  <li><a href="Maformation.html">Ma formation</a></li>
						  <li><a href="Mon expérience.html">Mon expérience</a></li>
					   </ul>
				   </li>			   
				   <li class="menu-css"><a href= "CSS.html"><b><i>À propos</i></b></a>
						<ul class="submenu">
						  <li><a href="Creativecloud.html">Mon "Creative Cloud"</a></li>
						  <li><a href="Mesprojets.html">Mes projets</a></li>
						  <li><a href="Monweb.html">Mon web design</a></li>
						</ul>
				   </li> 
				   <li class="menu-Javascript"><a href= "Javascript.html"><b><i>Galerie</i></b></a>
					  <ul class="submenu">
						  <li><a href="Monbook.html">Mon book</a></li>
						  <li><a href="Photoshop.html">Photoshop</a></li>						  
					  </ul>
				   </li>
				  <li class="menu-Contact"><a href="Contactezmoi !.html"><b><i>Contact</i></b></a>
					  <ul class="submenu">
						  <li><a href="Coordonnees.html">Vos coordonnées</a></li>
					  </ul>
				   </li> 
				   <li class="menu-Nous"><a href= "Nous.php"><b><i>Développement professionnel</i></b></a>
					 <ul class="submenu">
				   <li><a href="Veilletechnologique.html">Veille technologique</a></li>						  						  
					</ul>
				  </li>	
			  </ul>			 
		 </nav>
	</header>
	<br>	
	<br>
	<br>
	<br>
	<br>
	<h1><b><i><u>Coordonnées</u></i></b></h1>
	<br>
    <br>	
	<body1>
	 <form method="POST" action="Target.php">
	 <fieldset id="section1">
		<legend><b>Informations personnelles:</b></legend>   
		<label for="nom"><b>Entrez votre nom:</b></label>
		 <input type="text" name="nom" id="nom" required="required" autofocus="on"><br>
		 		 
		<br><label for="prenom"><b>Entrez votre prénom:</b></label>
	    <input type="text" name="prenom" id="prenom" required="required" autocomplete="on" placeholder="Ex: Pierre"><br>
		 
		 <br><label for="pseudo"><b>Choisissez votre pseudonyme:</b></label>
		 <input type="text" name="pseudo" id="pseudo"><br>
		 
		 <br><label for="pass"><b>Entrez votre mot de passe:</b></label>
		 <input type="passeword"  name="pass" id="pass"><br>
		 
		 <br><label for="naissance"><b>Votre date de naissance:</b></label>
		 <input type="date" name="naissance" id="naissance"><br>
		 
	  </fieldset> 
	  <br>	 
	  <fieldset id="section2">
		 <legend><b>Informations suplémentaires:</b></legend>  
		 <br><label for="email"><b>Entrez votre email:</b></label>
		 <input type="email" name="email" id="email" ><br>
		 
		 <br><label for="site"><b>Entrez votre site:</b></label>
		 <input type="url" name="site" id="site"><br>
		 
		 <br><label for="tel"><b>Entrez votre numéro de téléphone:</b></label>
		 <input type="number" name="tel" id="tel"><br>
		 
		 <input type="radio" name="sexe" id="homme"  value="homme" checked="checked">
		 <label for="homme">Un homme</label><br>
		 
		 <input type="radio" name="sexe" id="femme" value="femme">
		 <label for="femme">Une femme</label><br><br>
		 
		 <p7><b>Majeur ou mineur ?</b></p7><br>
		 <input type="radio" id="majeur" name="age" value="majeur">
		 <label for="majeur">Majeur</label><br>
		 
		 <input type="radio" name="age" id="mineur" value="mineur">
		 <label for="mineur">Mineur</label><br><br>
		 
		 <label for="nombre"><p7><b>Choisissez un chiffre entre 1 et 10:</b></p7></label>
		 <input type="number" name="nombre" id="nombre"  min="1" max="10"><br>
		 
		 <p7><b>Quels sont vos loisirs ?</b></p7><br>
		 <input type="checkbox" name="hobbies" id="" required="required" value="informatique" checked="checked">
		 <label for="inf">Informatique</label><br>
		 
		 <input type="checkbox" name="hobbies" id="sport"  value="sport">
		 <label for="sport">Sport</label><br>
		 
		 <input type="checkbox" name="hobbies" id="voyages" value="voyages">
		 <label for="voyages">Voyages</label><br>
		 
		 <input type="checkbox" name="hobbies" id="musique" value="musique">
		 <label for="musique">Musique</label><br>
		 
		 <p7><b>Où habitez-vous ?</b></p7>
		 <select name="pays">
		    <optgroup label="Europe">
			    <option value="france">France</option>
			    <option value="belgique">Belgique</option>
			 </optgroup>
			 <optgroup label="Amérique">
			    <option value="canada" selected="selected">Canada</option>
				<option value="californie">Californie</option>
			 </optgroup>
			 <optgroup label="Afrique">
				<option value="comores">Comores</option>
				 <option value="madagascar">Madagascar</option>
			    <option value="maroc">Maroc</option>
				<option value="tunisie">Tunisie</option>
				<option value="algerie">Algérie</option>
				<option value="togo">Togo</option> 
			 </optgroup>
		  </select>
		 <br>  
		 <br><label for="prez">Une petite présentation ?</label>
		 <textarea name="presentation" id="prez"></textarea><br>
		 
		 <center><input type="submit" value="Envoyer"></center>
		</fieldset>   
	   </form>	
	</body1>
</html>
