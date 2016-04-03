
<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8"/>
        <title>Miaww Me - Rechercher un membre</title>
        <link rel="stylesheet" href='style.css'/>
    </head>
<body>
<?php include("menu.php");?>
    <h3>Rechercher un membre</h3>
    
    <form name="membre" method="POST" action="">
        <p><input type="text" name="recherche_membre" id="search_membre"/></p>
    
        <div id="resultat_membre">
            <ul>
            </ul>
        
        </div>
    
    </form>

    <form name="localisation" method="POST" action="">
        <p><input type="text" name="recherche_localisation" id="search_localisation"/></p>
    
        <div id="resultat_localisation">
            <ul>
            </ul>
        
        </div>
    
    </form>
    
<script src="jquery.js"></script>
<script src="func.js"></script>
</body>
    
</html>

