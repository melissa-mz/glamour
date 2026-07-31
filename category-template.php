<?php
require_once __DIR__ . '/config.php';
require __DIR__ . '/header.php';
$cat = $categories[$cat_key];
$total_soins = count($cat['soins']);

// --- RÉCUPÉRATION DE L'IMAGE DE FOND DEPUIS CONFIG.PHP ---
$hero_bg = isset($hero_bg_images[$cat_key]) ? $hero_bg_images[$cat_key] : '';
?>

<!-- HERO WOW MODERNE (TYPO SOFT) AVEC PHOTO DE FOND -->
<section class="cat-hero-wow" style="<?php echo $hero_bg ? 'background-image:url(' . $hero_bg . ');background-size:cover;background-position:center;' : ''; ?>">  <div class="container">
    <div class="hero-wow-content">
      <!-- Cercles décoratifs (s'affichent seulement si PAS de photo) -->
      <?php if(!$hero_bg): ?>
      <div class="wow-circle-1"></div>
      <div class="wow-circle-2"></div>
      <?php endif; ?>
      
      
      <h1 class="wow-title">
        <?php echo $cat['titre']; ?>
      </h1>
      
      <p class="wow-intro"><?php echo $cat['intro']; ?></p>
      
      <div class="wow-actions">
        <a class="btn-wow-primary" href="#soins-liste">
          Explorer les soins
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
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