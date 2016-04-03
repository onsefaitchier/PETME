fichier post.php

<?php

include('connect.php');
    if (isset($_POST['search_membre'])&& !empty($_POST['search_membre'])){
    
        $search_membre = mysql_real_escape_string(htmlentities($_POST['search_membre']));
        $query_membre = mysql_query("SELECT nom FROM nomdb WHERE nom LIKE '$search_membre%'" )or die(mysql_error());
        while($rows=mysql_fetch_assoc($query_membre)){
            echo"<li><a href='#'>".$rows['nom']."</a></li>";
        }
    
    }
    
        if (isset($_POST['search_localisation'])&& !empty($_POST['search_localisation'])){
    
        $search_localisation = mysql_real_escape_string(htmlentities($_POST['search_localisation']));
        $query_localisation = mysql_query("SELECT ville, departement FROM nomdb WHERE ville LIKE '$search_localisation%'|| departement LIKE '$search_localisation%')or die(mysql_error());
        while($rows=mysql_fetch_assoc($query_localisation)){
            echo"<li><a href='#'>".$rows['ville']."</a></li>";
        }
    
    }
    
    

