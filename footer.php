<?php require_once __DIR__ . '/config.php'; ?>
<footer>
  <div class="container">
    <div class="footer-grid">
      <!-- Colonne 1 : Logo -->
      <div>
        <div class="logo">GLAMOUR <span>CLINIC</span></div>
        <p>Centre de médecine esthétique, anti-âge et laser dirigé par le Dr. Draoui Sadjia, à <?php echo $address_short; ?>.</p>
      </div>

      <!-- Colonne 2 : Navigation -->
      <div>
        <h4>Navigation</h4>
        <ul>
          <li><a href="index.php#about">Dr. Draoui</a></li>
          <li><a href="index.php#soins">Nos soins</a></li>
          <li><a href="index.php#location">Nous trouver</a></li>
        </ul>
      </div>

      <!-- Colonne 3 : Nos soins -->
      <div>
        <h4>Nos soins</h4>
        <ul>
          <li><a href="botox.php">Botox</a></li>
          <li><a href="filler.php">Filler</a></li>
          <li><a href="lasers.php">Lasers</a></li>
          <li><a href="skincare.php">Skincare</a></li>
        </ul>
      </div>

      <!-- Colonne 4 : Contact + Icônes en dessous -->
      <div>
        <h4>Contact</h4>
        <ul>
          <li><?php echo $phone_1; ?></li>
          <li><?php echo $phone_2; ?></li>
          <li><?php echo $phone_3; ?></li>
        </ul>

        <!-- VRAIES ICÔNES RÉSEAUX SOCIAUX -->
        <div class="footer-socials" style="margin-top:20px;">
          <div class="social-links">
            <a href="<?php echo $instagram_url; ?>"
               target="_blank"
               rel="noopener"
               aria-label="Instagram"
               class="social instagram">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="<?php echo wa_link($whatsapp_number, $msg_default); ?>"
               target="_blank"
               rel="noopener"
               aria-label="WhatsApp"
               class="social whatsapp">
              <i class="fa-brands fa-whatsapp"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer bottom -->
    <div class="footer-bottom">
      <div>© <?php echo $year; ?> Glamour Clinic — <?php echo $address_short; ?></div>
      <div>Dr. Draoui Sadjia</div>
    </div>
  </div>
</footer>

<!-- Bouton WhatsApp flottant (en bas à droite) -->
<a class="wa-float"
   href="<?php echo wa_link($whatsapp_number, $msg_default); ?>"
   target="_blank"
   rel="noopener"
   aria-label="Contacter sur WhatsApp">
  <i class="fa-brands fa-whatsapp"></i>
</a>

<!-- ============================================================
     SCRIPT — FIX DÉFINITIF POUR LE RÉVÉLATEUR (.reveal)
     ============================================================ -->
<script>
  // 1. FORCER la classe .js sur <html> pour activer le mode animé
  document.documentElement.classList.add('js');

  // 2. Une fois le DOM chargé, on initialise l'observateur
  document.addEventListener('DOMContentLoaded', function() {

    // Sécurité : on remet .js au cas où
    document.documentElement.classList.add('js');

    // --- Gestion du header scroll (conservé) ---
    const header = document.getElementById('mainHeader');
    if (header) {
      window.addEventListener('scroll', function() {
        header.classList.toggle('scrolled', window.scrollY > 30);
      });
    }

    // --- Révélateur (reveal) ---
    const revealElements = document.querySelectorAll('.reveal');

    if ('IntersectionObserver' in window && revealElements.length > 0) {
      const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('in');
            // On peut arrêter d'observer après l'apparition pour économiser
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.15,
        rootMargin: '0px 0px -20px 0px'
      });

      revealElements.forEach(function(el) {
        observer.observe(el);
      });
    } else {
      // FALLBACK : si IntersectionObserver n'est PAS supporté
      // on affiche TOUT tout de suite
      revealElements.forEach(function(el) {
        el.classList.add('in');
      });
    }
  });
</script>

</body>
</html>