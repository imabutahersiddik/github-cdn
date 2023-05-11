<footer class="mt-5">
  <div class="container-fluid bg-light">
    <div class="row">
      <div class="col-12 text-center">
        <p>Developed by Abu Taher Siddik with ❤️ using Vercel and Bootstrap 5</p>
      </div>
    </div>
  </div>
</footer>
    <script>
      const menuToggle = document.getElementById('menuToggle');
      const menuContainer = document.getElementById('menuContainer');

      // Toggle menu on click
      menuToggle.addEventListener('click', () => {
        menuContainer.classList.toggle('show');
      });

      // Close menu on click outside of menu
      document.addEventListener('click', (event) => {
        if (menuContainer.classList.contains('show') && !menuContainer.contains(event.target) && event.target !== menuToggle) {
        menuContainer.classList.remove('show');
      }
    });
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
