
//Script de filtrage des clichés du portofolio en jQuery

$('.filtres li').click(function(e) {
  e.preventDefault(); // facultatif : pour ne pas afficher de message d'erreur ???
  $('.filtres li').removeClass('active');
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
});
