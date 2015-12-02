$(document).ready(function(){

	$('.tableauUser > tr').click(function(event){
		// On récupère l'id en cliquant sur la ligne du tableau
		var idUser = $(event.target).parent().attr('id');
		// On redirige vers le page view en lui plançant en parametre
		// l'id de l'user que l'on vient de récupérer.
		document.location.href="index.php?uc=user&action=view&id="+idUser;
	});
});
