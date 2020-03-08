<!DOCTYPE html>
<HTML lang="fr">
  <HEAD>	
    <?php include('head.php'); ?>
  </HEAD>
  <BODY>
    <!-- entete -->	
    <?php include('entete.php'); ?>
		<!-- Contenu -->
<section>
    <HR color="blue">
<article>
<?php
$date = date("Y/m/d");
if(isset($_POST['btvalider'])){
	try {
    // On se connecte à MySQL
    $db = new PDO('mysql:host=localhost;dbname=db_reservation', 'root', '');
    }
    catch(Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
        echo 'Problème de connexion à la base de données'.'<br>';
        die('Erreur connexion to data : '.$e->getMessage());
    }

    $sql = "INSERT INTO reservation 
		VALUES(NULL,'".$date."','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['adresse']."','".$_POST['ville']."','".$_POST['tel'].
		"','".$_POST['email']."','".$_POST['codevol']."','".$_POST['classe']."')";
	$db->exec($sql);
	
	echo '<P>';
	echo '<H3 style=\"text-align:center;\">Votre réservation a été bien enregistrée</H3>';
	


	$resultat = $db->query("SELECT * from reservation order by numR");
    echo '
    <P>
    <TABLE class="table3"> 
    <THEAD>
      <TR> <TH>N°</TH> <TH>Date</TH> <TH>Nom</TH> <TH>Prénom</TH> <TH>Adresse</TH> <TH>Ville</TH> <TH>Tél</TH> <TH>Email</TH> <TH>Code Vol</TH> <TH>Classe</TH> </TR>
    </THEAD>
    <TBODY>';
    while($ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {
        $chainehtml='
        <TR>
        <TD>'.$ligne["numR"].'</TD>
        <TD>'.$ligne["dateR"].'</TD>
        <TD>'.$ligne["nom"].'</TD>
        <TD>'.$ligne["prenom"].'</TD>
        <TD>'.$ligne["adresse"].'</TD>
        <TD>'.$ligne["ville"].'</TD>
        <TD>'.$ligne["tel"].'</TD>
        <TD>'.$ligne["email"].'</TD>
        <TD>'.$ligne["codevol"].'</TD>
        <TD>'.$ligne["classe"].'</TD>
        </TR>
        ';
        echo $chainehtml;
    }
    echo '
    </TBODY>
    </TABLE>
    <P>';
    
}


?>
      </article>
</section>
    <!-- pied -->	
    <?php include('pied.php'); ?>
  </BODY>
</HTML>