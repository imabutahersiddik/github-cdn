<?php

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $link = $_POST['link'];

  if (empty($link)) {
    $errors[] = 'Please enter a Github file link';
  } else if (!preg_match('/^https:\/\/github.com\/.*\.(js|css)$/', $link)) {
    $errors[] = 'Please enter a valid Github file link ending with .js or .css';
  } else {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $fileContents = curl_exec($ch);
    curl_close($ch);

    $cdnLink = 'https://cdn.jsdelivr.net/gh/' . parse_url($link, PHP_URL_PATH);

    echo '<div class="modal fade" tabindex="-1" id="cdnModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">CDN Link</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                  <input type="text" class="form-control" id="modalLink" value="' . $cdnLink . '" readonly>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onclick="copyLink()">Copy Link</button>
                </div>
              </div>
            </div>
          </div>';

    echo '<script>
            function copyLink() {
              var copyText = document.getElementById("modalLink");
              copyText.select();
              copyText.setSelectionRange(0, 99999);
              document.execCommand("copy");
            }

            $(document).ready(function() {
              $("#cdnModal").modal("show");
            });
          </script>';
  }
}

// Display form and errors
require_once __DIR__ . '/../src/header.php';

if (!empty($errors)) {
  echo '<div class="alert alert-danger">';
  foreach ($errors as $error) {
    echo '<p>' . $error . '</p>';
  }
  echo '</div>';
}

echo '<form method="post">
        <div class="mb-3">
          <label for="inputLink" class="form-label">Github File Link</label>
          <input type="text" class="form-control" id="inputLink" name="link">
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".modal">Get CDN Link</button>
      </form>';

require_once __DIR__ . '/../src/footer.php';

