<?php
require_once __DIR__ . '/config.php';
require __DIR__ . '/header.php';
$cat = $categories[$cat_key];
$total_soins = count($cat['soins']);

// --- RÉCUPÉRATION DE L'IMAGE DE FOND DEPUIS CONFIG.PHP ---
$hero_bg = isset($hero_bg_images[$cat_key]) ? $hero_bg_images[$cat_key] : '';


// --- PHRASE D'ACCROCHE PROPRE À CHAQUE UNIVERS ---
$cat_taglines = [
  'botox'    => "Le geste juste, pour un regard qui reste le vôtre.",
  'filler'   => "L'art du détail, au service de votre harmonie.",
  'lasers'   => "La précision de la lumière, la douceur du résultat.",
  'skincare' => "Une peau qui respire, un éclat qui dure.",
];
$cat_tagline = isset($cat_taglines[$cat_key]) ? $cat_taglines[$cat_key] : '';

// --- FORME DE PHOTO PROPRE À CHAQUE UNIVERS (le coin coupé change de côté) ---
$cat_shapes = [
  'botox'    => '14% 50% 50% 50%',
  'filler'   => '50% 14% 50% 50%',
  'lasers'   => '50% 50% 14% 50%',
  'skincare' => '50% 50% 50% 14%',
];
$cat_shape = isset($cat_shapes[$cat_key]) ? $cat_shapes[$cat_key] : '14% 50% 50% 50%';

// --- ICÔNE PROPRE À CHAQUE UNIVERS ---
$cat_icons = [
  'botox'    => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2c3 4 6 8 6 12a6 6 0 01-12 0c0-4 3-8 6-12z"/></svg>',
  'filler'   => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6-6 6 6-6 13-6-13z"/><path d="M6 9h12"/></svg>',
  'lasers'   => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v3M12 19v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M2 12h3M19 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1"/></svg>',
  'skincare' => '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l1.8 5.6L19 10l-5.2 1.4L12 17l-1.8-5.6L5 10l5.2-1.4L12 3z"/></svg>',
];
$cat_icon = isset($cat_icons[$cat_key]) ? $cat_icons[$cat_key] : '';
?>

<!-- ========================================================== -->
<!-- HERO ÉDITORIAL SPLIT — texte + grand chiffre / photo blob   -->
<!-- ========================================================== -->
<section class="cat-split-hero">
  <div class="container csh-grid">
    <div class="csh-text">
     
      <h1 class="csh-title"><?php echo $cat['titre']; ?></h1>
      <?php if ($cat_tagline): ?>
        <p class="csh-tagline"><?php echo $cat_tagline; ?></p>
      <?php endif; ?>
      <div class="csh-actions">
        <a class="btn-wow-primary" href="#soins-liste">
          Explorer les soins
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
        
      </div>
    </div>

    <div class="csh-visual">
      <div class="csh-orbit"></div>
      <div class="csh-frame-line" style="border-radius:<?php echo $cat_shape; ?>;"></div>
      <?php if ($hero_bg): ?>
        <img class="csh-photo" style="border-radius:<?php echo $cat_shape; ?>;" src="<?php echo $hero_bg; ?>" alt="<?php echo $cat['titre']; ?>">
      <?php else: ?>
        <div class="csh-photo csh-photo-placeholder" style="border-radius:<?php echo $cat_shape; ?>;">
          <span class="no-photo-label">Photo à ajouter</span>
        </div>
      <?php endif; ?>
      <div class="csh-plate">
        <b><?php echo $cat['titre']; ?></b>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================== -->
<!-- GRILLE SOINS GRANDS CARRÉS                                  -->
<!-- ========================================================== -->
<section class="services-grands-carres" id="soins-liste">
  <div class="container">
    <div class="section-head reveal">
      <div class="eyebrow">Nos prestations</div>
      <h2>Chaque détail compte</h2>
    </div>
    
    <div class="grands-carres-grid">
      <?php foreach ($cat['soins'] as $soin): ?>
      <div class="grand-carre reveal">
        
        <!-- PHOTO DU SOIN (MASQUÉE SEULEMENT POUR BOTOX) -->
        <?php if($cat_key !== 'botox'): ?>
        <div class="grand-carre-image" style="background-image:url('<?php echo $soin['image']; ?>');background-size:cover;background-position:center;"></div>
        <?php endif; ?>
        
        <div class="grand-carre-content">
          <span class="grand-tag"><?php echo $cat['titre']; ?></span>
          <h3><?php echo $soin['nom']; ?></h3>
          <p><?php echo $soin['desc']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ========================================================== -->
<!-- BOUTON UNIQUE & MODALE (POP-UP) DE RENDEZ-VOUS             -->
<!-- ========================================================== -->
<div class="container" style="text-align:center; margin-top:40px; padding-bottom:80px;">
  <button id="openModalBtn" class="btn-wow-primary" style="cursor:pointer;">
    Prendre un rendez-vous
  </button>
</div>

<!-- MODALE (POP-UP) -->
<div id="rdvModal" class="modal-overlay" style="display:none;">
  <div class="modal-box">
    <span class="modal-close" onclick="closeModal()">&times;</span>
    <h3>Prendre un rendez-vous</h3>
    <p style="color:var(--gris); margin-bottom:20px;">Remplissez ce formulaire pour réserver votre soin.</p>
    
    <form id="rdvForm" action="https://wa.me/<?php echo $whatsapp_number; ?>?text=" method="get" target="_blank" onsubmit="return buildWhatsAppMessage(this)">
      <div class="form-group">
        <input type="text" name="nom" placeholder="Votre nom *" required>
      </div>
      <div class="form-group">
        <input type="text" name="prenom" placeholder="Votre prénom *" required>
      </div>
      <div class="form-group">
        <input type="tel" name="telephone" placeholder="Votre numéro de téléphone *" required>
      </div>
      <div class="form-group">
        <select name="soin" required>
          <option value="">Sélectionnez un soin *</option>
          <?php foreach ($cat['soins'] as $s): ?>
          <option value="<?php echo $s['nom']; ?>"><?php echo $s['nom']; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <button type="submit" class="modal-submit-btn">Envoyer sur WhatsApp</button>
    </form>
  </div>
</div>

<!-- ========================================================== -->
<!-- SCRIPTS                                                    -->
<!-- ========================================================== -->
<script>
// Révélation des éléments au scroll
const revealEls = document.querySelectorAll('.reveal');
const io = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('in');
      io.unobserve(e.target);
    }
  });
}, { threshold: 0.15 });
revealEls.forEach(el => io.observe(el));

// Ouvrir la modale
document.getElementById('openModalBtn').addEventListener('click', function() {
  document.getElementById('rdvModal').style.display = 'flex';
  document.body.style.overflow = 'hidden';
});

// Fermer la modale
function closeModal() {
  document.getElementById('rdvModal').style.display = 'none';
  document.body.style.overflow = 'auto';
}

// Fermer en cliquant sur le fond gris
document.getElementById('rdvModal').addEventListener('click', function(e) {
  if (e.target === this) {
    closeModal();
  }
});

// Construction du message WhatsApp
function buildWhatsAppMessage(form) {
  let nom = form.nom.value.trim();
  let prenom = form.prenom.value.trim();
  let telephone = form.telephone.value.trim();
  let soin = form.soin.value;

  let message = `Bonjour, je souhaite prendre un rendez-vous à Glamour Clinic.\n\n`;
  message += `Nom : ${nom}\n`;
  message += `Prénom : ${prenom}\n`;
  message += `Téléphone : ${telephone}\n`;
  message += `Soin souhaité : ${soin}\n\n`;
  message += `Merci de me confirmer la disponibilité.`;

  form.action = `https://wa.me/<?php echo $whatsapp_number; ?>?text=` + encodeURIComponent(message);
  return true;
}
</script>

<!-- ========================================================== -->
<!-- CSS DE LA MODALE (ajouté directement ici)                   -->
<!-- ========================================================== -->
<style>
.modal-overlay {
  position: fixed;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(0,0,0,0.5);
  backdrop-filter: blur(8px);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 9999;
}

.modal-box {
  background: #fff;
  padding: 40px;
  border-radius: 24px;
  max-width: 440px;
  width: 90%;
  box-shadow: 0 30px 80px rgba(0,0,0,0.2);
  position: relative;
  animation: modalFade 0.3s ease;
}

@keyframes modalFade {
  from { opacity: 0; transform: translateY(20px) scale(0.95); }
  to { opacity: 1; transform: translateY(0) scale(1); }
}

.modal-close {
  position: absolute;
  top: 16px;
  right: 20px;
  font-size: 28px;
  cursor: pointer;
  color: var(--gris);
  transition: color 0.3s;
}
.modal-close:hover { color: var(--charbon); }

.modal-box h3 {
  font-family: 'Jost', sans-serif;
  font-size: 1.6rem;
  font-weight: 400;
  margin-bottom: 4px;
  color: var(--charbon);
}

.form-group {
  margin-bottom: 14px;
}

.form-group input,
.form-group select {
  width: 100%;
  padding: 14px 16px;
  border: 1px solid #e0e0e0;
  border-radius: 12px;
  font-size: 0.95rem;
  font-family: 'Work Sans', sans-serif;
  background: #fafafa;
  transition: border-color 0.3s;
  outline: none;
}

.form-group input:focus,
.form-group select:focus {
  border-color: var(--bordeaux);
  background: #fff;
}

.modal-submit-btn {
  width: 100%;
  padding: 16px;
  background: var(--bordeaux);
  color: #fff;
  border: none;
  border-radius: 12px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.3s;
  margin-top: 6px;
}

.modal-submit-btn:hover {
  background: var(--or);
}

@media (max-width: 480px) {
  .modal-box { padding: 30px 24px; }
  .modal-box h3 { font-size: 1.3rem; }
}
</style>

<?php require __DIR__ . '/footer.php'; ?>