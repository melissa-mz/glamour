<?php

require_once __DIR__ . '/config.php';
$page_title = "Glamour Clinic — Dr. Draoui Sadjia | Médecine Esthétique & Laser, Réghaïa";
require __DIR__ . '/header.php';
?>
<section class="hero">
  <div class="container hero-grid">
    <div>
      <div class="eyebrow hero-eyebrow">Médecine esthétique · anti-âge · laser — <?php echo $address_short; ?></div>
      <h1>Révélez votre éclat naturel.</h1>
      <div class="hero-actions">
        <a class="btn-primary" href="#soins">
          Découvrir les soins
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      </div>
    </div>


    <!-- Côté visuel : image d'ambiance dans la forme organique -->
<div class="hero-visual-ambiance" style="background-image: url('<?php echo $img_hero_ambiance; ?>'); background-size: cover; background-position: center;">
  <div class="hero-ambiance-overlay"></div>
  <div class="hero-ambiance-circle"></div>
  <div class="hero-ambiance-text">
  </div>
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

    <!-- Partie gauche : Photo avec forme organique -->
    <div class="about-image-area reveal">
      <div class="about-image-blob">
        <img 
          src="<?php echo $img_docteur; ?>" 
          alt="Dr. Draoui Sadjia - Médecine esthétique" 
          class="about-doctor-editorial"
          loading="lazy"
        >
      </div>
      <!-- Petit cercle décoratif en fond -->
      <div class="about-orb"></div>
      <!-- Badge discret -->
      
    </div>

    <!-- Partie droite : Texte -->
    <div class="about-text-editorial reveal">
      <div class="about-eyebrow">À propos</div>
      <h2>Dr. Draoui Sadjia</h2>
      <div class="about-underline"></div>
      <p class="about-bio">
        Fondatrice de Glamour Clinic, le Dr. Draoui Sadjia accompagne une clientèle exigeante à la recherche de résultats naturels, avec des protocoles médicaux précis et une écoute attentive de chaque projet esthétique.
      </p>
      
      <!-- Citation mise en avant -->
      <blockquote class="about-quote">
        “ L’élégance d’un soin se mesure à la subtilité du résultat. ”
      </blockquote>

      <div class="about-signature-editorial">
        <span>Dr. S. Draoui</span>
      </div>

      <!-- Trois piliers avec des icônes très fines -->
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
    <div class="section-head reveal">
      <div class="eyebrow">Nos soins</div>
      <h2>L'excellence en carrés</h2>
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
      <h2>Le soin, pensé jusque dans les moindres détails</h2>
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
      <h2>La confiance de nos patientes</h2>
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
          <div class="eyebrow" style="color:var(--or);">Glamour Clinic</div>
          <h3 style="margin-top:14px;font-size:1.8rem;color:var(--blanc);"><?php echo $address_short; ?></h3>
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
          <a class="btn-primary" style="justify-content:center;background:var(--or);" href="<?php echo wa_link($whatsapp_number, $msg_default); ?>" target="_blank" rel="noopener">Écrire sur WhatsApp</a>
          <a class="btn-insta-solid" href="<?php echo $instagram_url; ?>" target="_blank" rel="noopener">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.6"/><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.6"/><circle cx="17.3" cy="6.7" r="1.1" fill="currentColor"/></svg>
            Suivre sur Instagram
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>