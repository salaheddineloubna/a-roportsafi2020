<!DOCTYPE html>
<HTML lang="fr">
  <HEAD>	
<?php include('head.php'); 
      ?>
      <style>
body  {
  background-image: url("louu/AE");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100%;
}
</style>
  </HEAD>
  <BODY>
    <!-- entete -->	
    <?php include('entete.php'); ?>
    <!-- Contenu -->
  <section>
    <HR color="blue">
    <article class="form1">
        <FORM method="post" action="liste_reservations.php">	
          <P>	
            <LABEL>Nom</LABEL>	
            <INPUT type="text" name="nom" required>	
            <LABEL>Prénom </LABEL>	
            <INPUT type="text" name="prenom" required>    
            <LABEL>Adresse</LABEL>    
            <INPUT type="text" name="adresse">	
            <LABEL>Ville</LABEL>    
            <INPUT type="text" name="ville" required>	
            <LABEL>Téléphone</LABEL>    
            <INPUT type="text" name="tel" required>    
            <LABEL>Email</LABEL>    
            <INPUT type="email" name="email">     	
             <LABEL>Code Vol</LABEL>    
            <INPUT type="text" name="codevol" required>     	
            <LABEL>Classe </LABEL>	
            <SELECT name="classe" required>	
              <OPTION value="CE">Classe économique</OPTION>	
              <OPTION value="CA">Classe affaires</OPTION>	
              <OPTION value="CP">Première classe</OPTION>	
            </SELECT>	 	
            
            <INPUT type="submit" id="btvalider" name="btvalider" value="Valider votre réservation">
            </BUTTON>
        </FORM>
  </article>
</section>
    <!-- pied -->	
    <?php include('pied.php'); ?>
  </BODY>
</HTML>