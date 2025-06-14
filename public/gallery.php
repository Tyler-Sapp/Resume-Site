<?php include __DIR__ . '/src/header.php'; ?>

<div class="container">
  <section id="gallery">
    <h2>Secret Shobu Gallery</h2>
    <div class="gallery-grid">
      <?php
        // Grab all images from public/assets/gallery/
        $images = glob(__DIR__ . '/assets/gallery/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
        foreach ($images as $imgPath):
          // Convert server path to web path
          $url = str_replace($_SERVER['DOCUMENT_ROOT'], '', $imgPath);
      ?>
        <div class="gallery-item">
          <img src="<?php echo $url; ?>" alt="">
        </div>
      <?php endforeach; ?>
      <?php if (empty($images)): ?>
        <p>No images found. Upload your photos into <code>public/assets/gallery/</code>.</p>
      <?php endif; ?>
    </div>
  </section>
</div>

<!-- Lightbox modal -->
<div id="lightbox" class="lightbox hidden">
  <div class="lightbox-content">
    <span id="lightbox-close" class="lightbox-close">&times;</span>
    <img id="lightbox-img" src="" alt="Expanded Photo">
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const closeBtn = document.getElementById('lightbox-close');

    // Open lightbox on thumbnail click
    document.querySelectorAll('.gallery-item img').forEach(img => {
      img.addEventListener('click', () => {
        lightboxImg.src = img.src;
        lightbox.classList.remove('hidden');
      });
    });

    // Close when clicking overlay or close button
    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox || e.target === closeBtn) {
        lightbox.classList.add('hidden');
      }
    });

    // Close on ESC key
    document.addEventListener('keyup', e => {
      if (e.key === 'Escape') {
        lightbox.classList.add('hidden');
      }
    });
  });
</script>

<?php include __DIR__ . '/src/footer.php'; ?>
