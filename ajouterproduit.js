function verif ()
        	 {
        	 	var nom = document.getElementById("nom").value ;
        	 	var dispo  = document.getElementById("dispo").value ;
        	    
        	   
if (nom == "")

	alert ("champ vide !") ;

if (nom.length > 60)

	alert ("nom supérieur à 60 caractères !") ;
if (dispo!=0 || dispo!=1)
	alert ("valeur du champ disponiblite non valide") ;

        	 }