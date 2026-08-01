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

        <!-- =============================== -->
        <!-- VRAIES ICÔNES RÉSEAUX SOCIAUX   -->
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

<script>
  // Seul et unique endroit où ces scripts sont déclarés sur toute la page.
  const header = document.getElementById('mainHeader');
  if (header) {
    window.addEventListener('scroll', () => header.classList.toggle('scrolled', window.scrollY > 30));
  }
  const revealEls = document.querySelectorAll('.reveal');
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => { if(e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target); } });
  }, {threshold:0.15});
  revealEls.forEach(el => io.observe(el));
</script>

</body>
</html>