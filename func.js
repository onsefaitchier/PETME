

alert('you are pretty');

$(document).ready(function(){

    $('#search_membre').keyup(function(){
    
        var search_membre =$(this).val();
        search_membre=$.trim(search_membre); <!-- trim sert à enlever tous les espaces au début de la string -->
        
        
        $('#resultat_membre').text(search_membre); <!-- permet d'afficher ce quon a écrit-->
        
        if(search_membre!==" "){
        
            $.post('post.php',{search_membre:search_membre},function(data){
            $('#resultat_membre ul').html(data);
            });
        }
        
    });
    
        $('#search_localisation').keyup(function(){
    
        var search_localisation= $(this).val();
        search_localisation=$.trim(search_localisation); <!-- trim sert à enlever tous les espaces au début de la string -->
        
        
        
        
        if(search_localisation!==" "){
        
            $.post('post.php',{search_localisation:search_localisation},function(data){
            $('#resultat_localisation ul').html(data);
            });
        }
        
    });

});

