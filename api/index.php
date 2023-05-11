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

    $parsedUrl = parse_url($link);
    $pathParts = explode('/', $parsedUrl['path']);
    $username = $pathParts[1];
    $repository = $pathParts[2];
    $filePath = implode('/', array_slice($pathParts, 4));
    $cdnLink = "https://cdn.jsdelivr.net/gh/$username/$repository@$filePath";

    

// Display form and errors
require_once __DIR__ . '/../src/header.php';

echo <<<EOT
  <div class="container mt-4 mb-4">
    <h2 class="text-center mb-4">Easy CDN Link Generation Tool</h2>
    <div class="row justify-content-center">
      <div class="col-md-6">
EOT;

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
        <button type="submit" class="btn btn-primary">Get CDN Link</button>
     </form>
    </div>
  </div>';
  
  // Display CDN link and "Copy Link" button after form submission if link is valid
    echo '<div class="alert alert-success mt-4 mb-4">';
    echo '<p>CDN link:</p><input type="text" class="form-control" id="cdnLinkInput" value="' . $cdnLink . '" readonly></div>';
    echo '<button type="button" class="btn btn-primary" onclick="copyCdnLink()">Copy Link</button>';
    echo '</div>';
  }
}

require_once __DIR__ . '/../src/footer.php';

?>

<!-- script to copy CDN link to clipboard -->
<script>
function copyCdnLink() {
  const cdnLinkInput = document.getElementById("cdnLinkInput");
  cdnLinkInput.select();
  cdnLinkInput.setSelectionRange(0, 99999);
  document.execCommand("copy");
}
</script>

<style>
  .container {
    background-color: #fafafa;
    border-radius: 10px;
    padding: 30px;
    box-shadow: rgba(0, 0, 0, 0.12) 0px 4px 20px;
  }

  .btn-primary {
    margin-top: 20px;
  }
</style>
