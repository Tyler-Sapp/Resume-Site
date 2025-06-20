  <footer class="site-footer">
    <div class="container">
      <p>© <?php echo date('Y'); ?> Tyler Sapp</p>
      <div class="social-links">
        <a href="https://www.linkedin.com/in/tyler-c-sapp/" target="_blank">LinkedIn</a>
        <a href="https://github.com/Tyler-Sapp" target="_blank">GitHub</a>
      </div>
    </div>
  </footer>
  <!-- particles.js via CDN -->
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

<script>
  /* initialize */
  particlesJS("particle-bg", {
    particles: {
      number: { value: 60, density: { enable: true, value_area: 800 } },
      color: { value: "#ffffff" },
      shape: { type: "circle" },
      opacity: { value: 0.7 },
      size: { value: 3, random: true },
      line_linked: {
        enable: true,
        distance: 150,
        color: "#ffffff",
        opacity: 0.2,
        width: 1
      },
      move: { enable: true, speed: 2, out_mode: "bounce" }
    },
    interactivity: {
      detect_on: "canvas",
      events: {
        onhover: { enable: true, mode: "grab" },
        onclick: { enable: true, mode: "push" }
      },
      modes: {
        grab: { distance: 200, line_linked: { opacity: 0.3 }},
        push: { particles_nb: 4 }
      }
    },
    retina_detect: true
  });
</script>
<script>
  (function(){
    let lastScroll = 0;
    const header = document.querySelector('.site-header');

    window.addEventListener('scroll', () => {
      const current = window.pageYOffset;
      if (current <= 0) {
        header.classList.remove('hidden');
        return;
      }

      if (current > lastScroll && !header.classList.contains('hidden')) {
        // Scrolling down
        header.classList.add('hidden');
      }
      else if (current < lastScroll && header.classList.contains('hidden')) {
        // Scrolling up
        header.classList.remove('hidden');
      }
      lastScroll = current;
    });
  })();
</script>

</body>
</html>
