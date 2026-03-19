<?php
/**
 * Template Name: Home
 */
get_header(); ?>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-bg">
      <picture>
        <source media="(max-width: 1024px)" srcset="<?php echo obsidiana_upload('hero1.jpg') . '?v=1'; ?>">
        <img src="<?php echo obsidiana_upload('hero2.jpg') . '?v=3'; ?>" alt="Crypto meets real world assets">
      </picture>
    </div>
    <div class="hero-content hero-centered">
      <p class="hero-tagline reveal">Bridging the Gap Between Cryptos<br>and Real World Assets</p>
      <p class="hero-body reveal reveal-delay-1">In a landscape of digital volatility, the next frontier of finance is the tokenization of the physical world. Obsidiana TokenBridge bridges the gap between the &ldquo;On-Chain&rdquo; ecosystem and &ldquo;In-Ground&rdquo; value. We specialize in identifying, verifying, and structuring high-yield real-world assets for the world&rsquo;s largest digital asset holders.</p>
    </div>
  </section>

  <!-- SERVICES TEASER -->
  <section class="section">
    <div class="container">
      <div class="section-header reveal">
        <h2>Our Core <span class="gold">Services</span></h2>
        <p>We source, verify, and tokenize real assets so your token gains instant credibility and real revenue.</p>
      </div>
      <div class="services-grid">
        <!-- Card 1 -->
        <div class="service-card reveal reveal-delay-1">
          <div class="service-icon">
            <img src="<?php echo obsidiana_upload('icon-mining.png'); ?>" alt="Mining">
          </div>
          <h3>Mining-Backed Tokens</h3>
          <p>Proven gold, copper, and lithium reserves across Latin America &mdash; JORC/NI 43-101 audited, sourced from a 10+ year on-the-ground network.</p>
        </div>
        <!-- Card 2 -->
        <div class="service-card reveal reveal-delay-2">
          <div class="service-icon">
            <img src="<?php echo obsidiana_upload('icon-realestate.png'); ?>" alt="Real Estate">
          </div>
          <h3>Global Real-Estate Collateral</h3>
          <p>High-yield commercial and residential properties in North America, LATAM, Hong Kong, Dubai, and Europe with automatic rental distributions.</p>
        </div>
        <!-- Card 3 -->
        <div class="service-card reveal reveal-delay-3">
          <div class="service-icon">
            <img src="<?php echo obsidiana_upload('icon-tokenization.png'); ?>" alt="Tokenization">
          </div>
          <h3>End-to-End Tokenization Bridge</h3>
          <p>Full due diligence, regulatory structuring, smart-contract launch, and ongoing yield automation &mdash; from first call to live token in 6&ndash;10 weeks.</p>
        </div>
      </div>
      <div style="text-align:center; margin-top:40px;" class="reveal reveal-delay-4">
        <a href="<?php echo home_url('/services/'); ?>" class="btn-gold-outline">See All Services &rarr;</a>
      </div>
    </div>
  </section>

  <!-- OBSIDIANA EDGES -->
  <section class="section">
    <div class="container">
      <div class="section-header reveal">
        <h2>Obsidiana <span class="gold">Edges</span></h2>
      </div>
      <div class="edges-grid">
        <div class="edge-item reveal reveal-delay-1">
          <h3>10+ Years Real Mining Experience</h3>
          <p>All across LATAM and Andes.</p>
        </div>
        <div class="edge-item reveal reveal-delay-2">
          <h3>5+ Years Real Property Transactions in Global Hubs</h3>
          <p>First hand property market insights and assessments.</p>
        </div>
        <div class="edge-item reveal reveal-delay-3">
          <h3>&ldquo;Human Oracle&rdquo; Network Across the Americas, Europe and Asia</h3>
          <p>US, Hong Kong, Dubai, Madrid, M&eacute;xico DF, Santiago de Chile&hellip;</p>
        </div>
      </div>
    </div>
  </section>

  <!-- OBSIDIANA VALUES -->
  <section class="section">
    <div class="container">
      <div class="section-header reveal">
        <h2>Obsidiana <span class="gold">Values</span></h2>
        <p>What sets us apart in a crowded RWA space.</p>
      </div>
      <div class="values-grid">
        <div class="value-item reveal reveal-delay-1">
          <div class="value-icon">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"><circle cx="20" cy="20" r="18" stroke="#D4AF37" stroke-width="2"/><path d="M16 20l3 3 6-7" stroke="#D4AF37" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <h3>Verifiable Only</h3>
          <p>Every asset comes with third-party audits, title deeds, and live on-chain dashboards. No hype. No empty promises.</p>
        </div>
        <div class="value-item reveal reveal-delay-2">
          <div class="value-icon">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"><rect x="4" y="10" width="32" height="24" rx="3" stroke="#D4AF37" stroke-width="2"/><path d="M4 18h32" stroke="#D4AF37" stroke-width="2"/><path d="M20 4v6M14 7h12" stroke="#D4AF37" stroke-width="2" stroke-linecap="round"/></svg>
          </div>
          <h3>Full Regulatory Skin</h3>
          <p>We handle Latin American mining permits and international securities compliance (Reg D/S, MiCA-ready) so your token is exchange-ready and institution-friendly.</p>
        </div>
        <div class="value-item reveal reveal-delay-3">
          <div class="value-icon">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"><path d="M20 4L36 14v12L20 36 4 26V14L20 4z" stroke="#D4AF37" stroke-width="2"/><path d="M20 16v8M16 20h8" stroke="#D4AF37" stroke-width="2.5" stroke-linecap="round"/></svg>
          </div>
          <h3>Yield + Liquidity</h3>
          <p>Your holders receive real rental income or mineral revenue shares automatically while trading 24/7 on blockchain.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="cta-section">
    <div class="container reveal">
      <h2>Real Assets. Real Backing. Real <span class="gold">Crypto.</span></h2>
      <p>You bring the community and vision. We bring the proven reserves and properties. Together we create the next generation of asset-backed crypto &mdash; with real yields and real backing.</p>
      <a href="<?php echo home_url('/contact/'); ?>" class="btn-gold">Let's Talk &rarr;</a>
    </div>
  </section>

<?php get_footer(); ?>
