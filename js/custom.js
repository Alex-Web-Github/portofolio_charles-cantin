
//TODO: 'Améliorer en JS le clic sur le menu mobile et sa fermeture quand on clique à l'extérieur'*/

//Script de filtrage des clichés du portofolio en jQuery

$('.filtres a').click(function(e) {
  $('.filtres a').removeClass('active');
  $(this).addClass('active');
  // on récupère la valeur de l'attribut 'href' du lien 'a' cliqué
  var href = $(this).attr('href');
  // pour retirer le signe '#' au début de la valeur de l'attribut 'href'
  var filtre = href.substring(1, href.lenght); 
  // on cache tous les clichés dès qu'on clique sur le filtre
  $('.projet').hide();
  // affiche tous les clichés si on clique 'Tous'
  if (filtre == 'all'){
    $('.projet').show();
  } else {
    // sinon n'affichez que les clichés dont le 'data-filtre' est égal à la valeur 'href' du bouton cliqué 
    $('.projet[data-filtre="' + filtre + '"]').show();
  }
  
  e.preventDefault(); // facultatif : pour ne pas afficher de message d'erreur ???

});
