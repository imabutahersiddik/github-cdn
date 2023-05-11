<footer class="mt-5">
  <div class="container-fluid bg-light">
    <div class="row">
      <div class="col-12 text-center">
        <p>Developed by Abu Taher Siddik with ❤️ using Vercel and Bootstrap 5</p>
        <p>If you find this tool helpful and would like to support its development, you can do so in the following ways:</p>
          <p><a href="https://patreon.com/KiasK?utm_medium=clipboard_copy&utm_source=copyLink&utm_campaign=creatorshare_creator&utm_content=join_link" target="_blank">Become a patron on Patreon</a></p>
          <p>Send cryptocurrency to the following address:</p>
              <p>Ethereum, USDT, BUSD: 0x7c13a89b8E192e635ac24179B8DA6cC77101C651 on here</p>
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
