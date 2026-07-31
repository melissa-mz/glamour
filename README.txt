GLAMOUR CLINIC — Site multi-pages
==================================

STRUCTURE
  index.php              -> page d'accueil
  filler.php              -> page détail Filler (5 soins + tarifs + avant/après)
  lasers.php               -> page détail Lasers (2 soins)
  skincare.php             -> page détail Skincare (6 soins)
  category-template.php    -> template partagé utilisé par filler/lasers/skincare.php (ne pas supprimer)
  header.php / footer.php -> nav + footer partagés sur toutes les pages
  config.php               -> TOUTES les infos modifiables (téléphone, WhatsApp, textes, prix, images)
  css/style.css            -> tous les styles du site
  images/                  -> dépose ici tes photos (voir noms exacts dans config.php)

CE QUE TU DOIS FAIRE
  1. Copie tout ce dossier dans ton www/ WAMP (ex: www/glamour-clinic/)
  2. Ouvre config.php et remplace :
     - les numéros / WhatsApp si besoin
     - les prix ("Tarif sur devis" -> ton vrai prix, ex: "À partir de 15 000 DA")
     - dépose tes photos dans images/ avec les noms indiqués (docteur.jpg, filler.jpg,
       filler-levres-avant.jpg, filler-levres-apres.jpg, etc.)
  3. Ouvre index.php dans le navigateur via WAMP (http://localhost/glamour-clinic/)

Pour ajouter/retirer un soin : modifie juste le tableau $categories dans config.php,
rien à toucher dans le HTML.
