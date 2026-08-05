<?php

require_once __DIR__ . '/config.php';
$page_title = "Glamour Clinic — Dr. Draoui Sadjia | Médecine Esthétique & Laser, Réghaïa";
require __DIR__ . '/header.php';
?>
<!-- ============================================================
     HERO — effet escalier avec phrases percutantes
     ============================================================ -->
<section class="hero-glamour">
  <div class="hero-glamour-inner">

    <!-- Colonne gauche : texte en escalier -->
    <div class="hero-glamour-stair">
      <p class="stair-line1">Révélez votre</p>
      <p class="stair-line2">beauté naturelle</p>
      <p class="stair-line3">avec l'excellence médicale</p>
      <span class="stair-divider"></span>
      <a href="#soins" class="btn-hero-glamour">
        Découvrir les soins
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
    </div>

    <!-- Colonne droite : vidéo -->
    <div class="hero-glamour-video-frame">
      <video src="videos/vd.mp4" autoplay muted loop playsinline class="hero-glamour-video"></video>
    </div>

  </div>
</section>

<div class="strip">
  <div class="strip-track">
    <span>Botox</span>
    <span>Filler</span>
    <span>Lasers Épilatoires &amp; CO2</span>
    <span>Skincare Médical</span>
    <span>Programme Future Mariée</span>
    <span>Botox</span>
    <span>Filler</span>
    <span>Lasers Épilatoires &amp; CO2</span>
    <span>Skincare Médical</span>
  </div>
</div>
<section class="about-editorial" id="about">
  <div class="container about-editorial-grid">

    <!-- Partie gauche : Photo simple -->
    <div class="about-image-area reveal">
      <div class="about-image-simple">
        <img 
          src="<?php echo $img_docteur; ?>" 
          alt="Dr. Draoui Sadjia - Médecine esthétique" 
          class="about-doctor-simple"
          loading="lazy"
        >
      </div>
    </div>

    <!-- Partie droite : Texte -->
    <div class="about-text-editorial reveal">
      <div class="about-eyebrow">À propos</div>
      <h2>Dr. <strong>Draoui</strong> Sadjia</h2>
      <div class="about-underline"></div>
      <p class="about-bio">
        Fondatrice de Glamour Clinic, le Dr. Draoui Sadjia accompagne une clientèle exigeante à la recherche de résultats naturels, avec des protocoles médicaux précis et une écoute attentive de chaque projet esthétique.
      </p>
      
      <blockquote class="about-quote">
        “ L’élégance d’un soin se mesure à la subtilité du résultat. ”
      </blockquote>

      <div class="about-signature-editorial">
        <span>Dr. S. Draoui</span>
      </div>

      <!-- Trois piliers -->
      <div class="about-pillars">
        <div class="pillar">
          <span class="pillar-icon">✦</span>
          <span class="pillar-text">Résultats naturels</span>
        </div>
        <div class="pillar">
          <span class="pillar-icon">✦</span>
          <span class="pillar-text">Suivi personnalisé</span>
        </div>
        <div class="pillar">
          <span class="pillar-icon">✦</span>
          <span class="pillar-text">Technologies de pointe</span>
        </div>
      </div>
    </div>

  </div>
</section>
<section class="services-showcase" id="soins">
  <div class="container">
    <div class="section-head reveal" style="text-align:center;margin:0 auto 70px;max-width:640px;">
      <div class="eyebrow">Nos soins</div>
      <h2>Des soins pensés pour <strong>vous</strong></h2>
    </div>

    <div class="grands-carres-grid">

      <!-- BOTOX -->
      <div class="grand-carre reveal">
        <div class="grand-carre-image" style="background-image:url('<?php echo $img_botox; ?>');background-size:cover;background-position:center;"></div>
        <div class="grand-carre-content">
          <span class="grand-tag">Botox</span>
          <h3>Lisser les rides d'expression</h3>
          <p>Des injections précises pour un résultat naturel, sans figer votre mobilité.</p>
          <a class="grand-btn" href="botox.php">Découvrir →</a>
        </div>
      </div>

      <!-- FILLER -->
      <div class="grand-carre reveal">
        <div class="grand-carre-image" style="background-image:url('<?php echo $img_filler; ?>');background-size:cover;background-position:center;"></div>
        <div class="grand-carre-content">
          <span class="grand-tag">Filler</span>
          <h3>Remodelage sur mesure</h3>
          <p>Acide hyaluronique de dernière génération pour un équilibre parfait.</p>
          <a class="grand-btn" href="filler.php">Découvrir →</a>
        </div>
      </div>

      <!-- LASERS -->
      <div class="grand-carre reveal">
        <div class="grand-carre-image" style="background-image:url('<?php echo $img_lasers; ?>');background-size:cover;background-position:center;"></div>
        <div class="grand-carre-content">
          <span class="grand-tag">Lasers</span>
          <h3>Technologies de pointe</h3>
          <p>Épilation durable et resurfaçage cutané d'une précision exceptionnelle.</p>
          <a class="grand-btn" href="lasers.php">Découvrir →</a>
        </div>
      </div>

      <!-- SKINCARE -->
      <div class="grand-carre reveal">
        <div class="grand-carre-image" style="background-image:url('<?php echo $img_skincare; ?>');background-size:cover;background-position:center;"></div>
        <div class="grand-carre-content">
          <span class="grand-tag">Skincare</span>
          <h3>Protocoles sur mesure</h3>
          <p>De l'éclat immédiat à la régénération profonde, pour chaque type de peau.</p>
          <a class="grand-btn" href="skincare.php">Découvrir →</a>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="why-us-modern">
  <div class="container">
    <div class="why-us-head reveal">
      <div class="eyebrow">Pourquoi nous choisir</div>
      <h2>Pourquoi choisir <strong>Glamour</strong> Clinic</h2>
      <p>Chez Glamour Clinic, chaque étape compte — du premier échange à la dernière retouche.</p>
    </div>
    
    <div class="why-us-cards">
      
      <div class="why-card reveal">
        <div class="why-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 12h-4l-3 9H9l-3-9H2"/>
            <path d="M5 6h14"/>
            <path d="M8 3h8"/>
          </svg>
        </div>
        <h3>Expertise médicale</h3>
        <p>Chaque protocole est conduit par un médecin, avec la rigueur et la sécurité d'un acte médical.</p>
      </div>

      <div class="why-card reveal">
        <div class="why-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 6v6l4 2"/>
          </svg>
        </div>
        <h3>Technologies de pointe</h3>
        <p>Laser Clarity II, exosomes, PRP : des équipements et protocoles à la pointe de l'esthétique médicale.</p>
      </div>

      <div class="why-card reveal">
        <div class="why-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 21s-8-4.5-8-11a5 5 0 019-3 5 5 0 019 3c0 6.5-8 11-8 11z"/>
          </svg>
        </div>
        <h3>Résultats naturels</h3>
        <p>Des retouches subtiles qui respectent vos traits, jamais un visage figé ou artificiel.</p>
      </div>

      <div class="why-card reveal">
        <div class="why-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
            <circle cx="12" cy="7" r="4"/>
          </svg>
        </div>
        <h3>Suivi personnalisé</h3>
        <p>Un accompagnement à l'écoute, du premier échange jusqu'au résultat final.</p>
      </div>

    </div>
  </div>
</section>


<section class="testimonials">
  <div class="container">
    <div class="section-head reveal" style="margin:0 auto 50px;text-align:center;">
      <div class="eyebrow">Elles témoignent</div>
      <h2>La confiance de nos <strong>patientes</strong></h2>
    </div>
    <div class="testimonials-grid">
      <div class="testimonial-card reveal">
        <div class="testimonial-stars">★★★★★</div>
        <p>Un accueil chaleureux et un résultat très naturel pour mon soin filler. Le Dr. Draoui prend vraiment le temps d'expliquer chaque étape.</p>
        <div class="testimonial-author">
          <div class="testimonial-avatar"></div>
          <div>
          </div>
        </div>
      </div>
      <div class="testimonial-card reveal">
        <div class="testimonial-stars">★★★★★</div>
        <p>J'ai fait mon épilation laser ici depuis plusieurs mois, les résultats sont impressionnants et l'équipe est toujours très professionnelle.</p>
        <div class="testimonial-author">
          <div class="testimonial-avatar"></div>
          <div>
          </div>
        </div>
      </div>
      <div class="testimonial-card reveal">
        <div class="testimonial-stars">★★★★★</div>
        <p>Le programme future mariée était exactement ce qu'il me fallait avant mon mariage. Ma peau n'a jamais été aussi belle !</p>
        <div class="testimonial-author">
          <div class="testimonial-avatar"></div>
          <div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="location" id="location">
  <div class="container">
    <div class="section-head reveal">
      <div class="eyebrow">Nous trouver</div>
      <h2>Au cœur de <?php echo $address_short; ?></h2>
    </div>
  </div>
  <div class="container" style="padding:0 40px;">
    <div class="location-grid">
      <div class="map-frame reveal">
        <iframe src="<?php echo $maps_embed_url; ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="loc-card reveal">
  <div>
    <div class="loc-brand">Glamour Clinic</div>
    <h3 class="loc-title"><?php echo $address_short; ?></h3>
    <div class="loc-list">
      <div><b>Adresse</b><span><?php echo $address_full; ?></span></div>
      <div><b>Téléphone</b><span><?php echo $phone_1; ?> · <?php echo $phone_2; ?> · <?php echo $phone_3; ?></span></div>
      <div><b>Instagram</b><span>
        <a class="loc-insta" href="<?php echo $instagram_url; ?>" target="_blank" rel="noopener">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.6"/><circle cx="17.3" cy="6.7" r="1.1" fill="currentColor"/></svg>
          <?php echo $instagram_handle; ?>
        </a>
      </span></div>
    </div>
  </div>
  <div class="loc-actions">
    <a class="btn-wa-pill" href="<?php echo wa_link($whatsapp_number, $msg_default); ?>" target="_blank" rel="noopener">
      <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.87.5 3.62 1.44 5.13L2 22l5.13-1.55a9.87 9.87 0 004.91 1.32h.01c5.46 0 9.91-4.45 9.91-9.91S17.5 2 12.04 2zm0 18.06a8.1 8.1 0 01-4.15-1.14l-.3-.18-3.09.93.93-3.02-.19-.31a8.11 8.11 0 01-1.26-4.32c0-4.49 3.65-8.14 8.14-8.14s8.14 3.65 8.14 8.14-3.65 8.04-8.22 8.04zm4.47-6.1c-.24-.12-1.44-.71-1.66-.79-.22-.08-.39-.12-.55.12s-.63.79-.78.95c-.14.16-.29.18-.53.06-.24-.12-1.02-.38-1.94-1.2-.72-.64-1.2-1.43-1.34-1.67-.14-.24-.02-.37.11-.49.11-.11.24-.29.36-.43.12-.14.16-.24.24-.4.08-.16.04-.31-.02-.43-.06-.12-.55-1.32-.75-1.81-.2-.48-.4-.41-.55-.42h-.47c-.16 0-.43.06-.65.31-.22.24-.86.84-.86 2.05s.88 2.38 1 2.54c.12.16 1.73 2.64 4.2 3.7.59.25 1.05.4 1.41.52.59.19 1.13.16 1.55.1.47-.07 1.44-.59 1.65-1.16.2-.57.2-1.06.14-1.16-.06-.11-.22-.17-.46-.29z"/></svg>
      Écrire sur WhatsApp
    </a>
    <a class="btn-insta-solid" href="<?php echo $instagram_url; ?>" target="_blank" rel="noopener">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.6"/><circle cx="17.3" cy="6.7" r="1.1" fill="currentColor"/></svg>
      <span>Suivre sur Instagram</span>
    </a>
  </div>
</div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>