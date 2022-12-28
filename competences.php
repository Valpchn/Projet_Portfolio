<?php include "php/header.php"?>

<?php include "php/navbar.php"?>
	
<link href="css/competences.css" rel="stylesheet">
		<link type="css/competences.css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:500" />

<title>Compétences</title>

<header>
		<h6>Compétences</h6>
</header>

<section class="section3">
		<div class="container4">
			<div class="card">
				<div>
					<i class="fas fa-paint-brush"></i>
</div>

				<div id="box_competences">
    <?php 
        $donnee=yaml_parse_file("Yaml/competences.yaml");
        foreach ($donnee as $titre => $tbCompetences) {
            echo "<h2>" . $titre . "</h2>";
            foreach ($tbCompetences as $competence) { ?>
            <div class="competence">
                <div class="titre_competence">
                    <?php echo $competence["nom"] ?>
                </div>
                <div class="graphique">
                    <div class="pourcent"><?php echo $competence["niveau"] ?> %</div>
                    <div class="barre">
                        <div class="progression" style="width: <?php echo $competence["niveau"] ?>%"></div>
                    </div>
                </div>               
            </div>
    <?php }
        } ?>

</div>
			</div>


			<div class="card">
				<div>
					<i class="fas fa-chart-line"></i>
				</div>
				

				<div id="box_competences">
    <?php 
        $donnee=yaml_parse_file("Yaml/competences2.yaml");
        foreach ($donnee as $titre => $tbCompetences) {
            echo "<h2>" . $titre . "</h2>";
            foreach ($tbCompetences as $competence) { ?>
            <div class="competence">
                <div class="titre_competence">
                    <?php echo $competence["nom"] ?>
                </div>
                <div class="graphique">
                    <div class="pourcent"><?php echo $competence["niveau"] ?> %</div>
                    <div class="barre">
                        <div class="progression" style="width: <?php echo $competence["niveau"] ?>%"></div>
                    </div>
                </div>               
            </div>
    <?php }
        } ?>

	</div>


			</div>
			<div class="card">
				<div>
					<i class="fas fa-code"></i>
				</div>
				

				<div id="box_competences">
    <?php 
        $donnee=yaml_parse_file("Yaml/competences1.yaml");
        foreach ($donnee as $titre => $tbCompetences) {
            echo "<h2>" . $titre . "</h2>";
            foreach ($tbCompetences as $competence) { ?>
            <div class="competence">
                <div class="titre_competence">
                    <?php echo $competence["nom"] ?>
                </div>
                <div class="graphique">
                    <div class="pourcent"><?php echo $competence["niveau"] ?> %</div>
                    <div class="barre">
                        <div class="progression" style="width: <?php echo $competence["niveau"] ?>%"></div>
                    </div>
                </div>               
            </div>
    <?php }
        } ?>


			</div>
		</div>
	</section>

	
</body>

<?php include "php/footer.php"?>

</html>
    