<?php
/* =========================================================
   CONFIG GÉNÉRALE — modifie tout ici
   ========================================================= */
$whatsapp_number   = "213542714525"; // format international, sans le +
$phone_1           = "0542 71 45 25";
$phone_2           = "0542 73 02 59";
$phone_3           = "020 431 943";
$instagram_url     = "https://www.instagram.com/glamour_clinic_pro/";
$instagram_handle  = "@glamour_clinic_pro";
$address_short     = "Réghaïa, Alger";
$address_full      = "Réghaïa, Alger — à ~30 km à l'est de Bouzaréah";
$maps_query        = "Réghaïa, Alger, Algérie";
$year              = date("Y");

// Chemins des photos — dépose tes fichiers dans le dossier "images/"
$img_docteur   = "images/docteur.jpg";
$img_hero_ambiance = "images/hero.jpg";
$img_botox     = "images/botox.jpg";
$img_filler    = "images/filler.jpg";
$img_lasers    = "images/lasers.jpg";
$img_skincare  = "images/skincare.jpg";


// IMAGES DE FOND POUR LES PAGES CATÉGORIES (à ajouter dans images/)
$hero_bg_images = [
  'filler'   => 'images/hero-filler.jpg',
  'lasers'   => 'images/hero-lasers.png',
  'skincare' => 'images/hero-skincare.png',
  'botox'    => 'images/hero-botox.jpg',
];

function wa_link($number, $message) {
    return "https://wa.me/{$number}?text=" . urlencode($message);
}

$msg_default = "Bonjour, je souhaite prendre rendez-vous à Glamour Clinic.";
$msg_botox   = "Bonjour, je souhaite des infos sur le Botox.";
$msg_mariee  = "Bonjour, je suis future mariée et je souhaite des infos sur le programme dédié.";

$maps_embed_url = "https://www.google.com/maps?q=36.7626875,3.3658125&z=17&output=embed";

/* =========================================================
   CATALOGUE DES SOINS PAR CATÉGORIE
   ========================================================= */
$categories = [

  "botox" => [
    "titre" => "Botox",
    "intro" => "Injections de toxine botulique pour lisser les rides d'expression (front, pattes d'oie, glabelle), dans le respect de la mobilité naturelle du visage.",
    "soins" => [
      [
        "slug"  => "botox",
        "nom"   => "Botox",
        "desc"  => "Des injections précises pour un résultat naturel, sans figer votre mobilité.",
        "prix"  => "Tarif sur devis",
        "image" => "images/botox.jpg",
      ],
    ],
  ],

  "filler" => [
    "titre" => "Filler &amp; Comblement",

    "soins" => [
      [
        "slug"  => "filler-levres",
        "nom"   => "Filler lèvres",
        "desc"  => "Volume et définition du contour des lèvres, pour un résultat naturel et harmonieux.",
        "prix"  => "Tarif sur devis",
        "image" => "images/filler-levres.jpg",
      ],
      [
        "slug"  => "filler-cernes",
        "nom"   => "Filler cernes",
        "desc"  => "Comblement du sillon lacrymal pour atténuer les cernes creux et illuminer le regard.",
        "prix"  => "Tarif sur devis",
        "image" => "images/filler-cernes.jpg",
      ],
      [
        "slug"  => "filler-menton",
        "nom"   => "Filler menton",
        "desc"  => "Redéfinit et projette le menton pour un profil plus équilibré.",
        "prix"  => "Tarif sur devis",
        "image" => "images/filler-menton.jpg",
      ],
      [
        "slug"  => "filler-jawline",
        "nom"   => "Filler jaw line",
        "desc"  => "Sculpte la mâchoire pour un contour de visage plus structuré et affirmé.",
        "prix"  => "Tarif sur devis",
        "image" => "images/filler-jawline.jpg",
      ],
    ],
  ],

  "lasers" => [
    "titre" => "Lasers Épilatoires &amp; CO2",
    "intro" => "Des technologies laser de dernière génération, pour l'épilation durable comme pour le resurfaçage de la peau.",
    "soins" => [
      [
        "slug"  => "lasers-epilatoires",
        "nom"   => "Lasers Épilatoires",
        "desc"  => "Technologie Clarity II (Alexandrite &amp; Nd:YAG) pour une épilation durable, adaptée à tous les types de peau.",
        "prix"  => "Tarif sur devis",
        "image" => "images/lasers-epilatoires.jpg",
      ],
      [
        "slug"  => "lasers-co2",
        "nom"   => "Lasers CO2",
        "desc"  => "Laser CO2 fractionné pour le resurfaçage cutané : grain de peau affiné, cicatrices et ridules atténuées.",
        "prix"  => "Tarif sur devis",
        "image" => "images/lasers-co2.jpg",
      ],
    ],
  ],

  "skincare" => [
    "titre" => "Skincare Médical",
    "intro" => "Des protocoles de revitalisation cutanée en profondeur, pensés selon les besoins spécifiques de chaque peau.",
    "soins" => [
      [
        "slug"  => "skincare-exosomes",
        "nom"   => "Exosomes",
        "desc"  => "Régénération cellulaire de pointe pour une peau visiblement revitalisée.",
        "prix"  => "Tarif sur devis",
        "image" => "images/exosomes.jpg",
      ],
      [
        "slug"  => "skincare-nctf",
        "nom"   => "NCTF",
        "desc"  => "Cocktail de revitalisation (vitamines, acide hyaluronique, minéraux) pour un teint éclatant.",
        "prix"  => "Tarif sur devis",
        "image" => "images/nctf.jpg",
      ],
      [
        "slug"  => "skincare-skinbooster",
        "nom"   => "Skinbooster",
        "desc"  => "Stimule la régénération naturelle de la peau pour une meilleure fermeté.",
        "prix"  => "Tarif sur devis",
        "image" => "images/skinbooster.jpg",
      ],
      [
        "slug"  => "skincare-peelings",
        "nom"   => "Peelings",
        "desc"  => "Peelings médicaux pour affiner le grain de peau et unifier le teint.",
        "prix"  => "Tarif sur devis",
        "image" => "images/peelings.jpg",
      ],
      [
        "slug"  => "skincare-prp",
        "nom"   => "PRP",
        "desc"  => "Plasma riche en plaquettes pour stimuler la régénération naturelle de la peau.",
        "prix"  => "Tarif sur devis",
        "image" => "images/prp.jpg",
      ],
      [
        "slug"  => "skincare-hydrafacial",
        "nom"   => "Hydrafacial",
        "desc"  => "Nettoyage, exfoliation et hydratation en profondeur pour un teint frais immédiat.",
        "prix"  => "Tarif sur devis",
        "image" => "images/hydrafacial.jpg",
      ],
      [
        "slug"  => "skincare-hifu",
        "nom"   => "HIFU",
        "desc"  => "Ultrasons focalisés de haute intensité pour un effet lifting non-invasif et un raffermissement en profondeur.",
        "prix"  => "Tarif sur devis",
        "image" => "images/hifu.jpg",
      ],
      [
        "slug"  => "skincare-skinscrubber",
        "nom"   => "Skin Scrubber",
        "desc"  => "Exfoliation douce par ultrasons qui élimine les impuretés et prépare la peau à mieux absorber les soins.",
        "prix"  => "Tarif sur devis",
        "image" => "images/skin-scrubber.jpg",
      ],
    ],
  ],

];