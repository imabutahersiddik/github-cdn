<!DOCTYPE html>
<html lang="en">

<?php
// Load environment variables
require_once(__DIR__ . '/../vendor/autoload.php');
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Github CDN Link Generation Tool</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
  <script>
    function copyLink() {
      var copyText = document.getElementById("modalLink");
      copyText.select();
      copyText.setSelectionRange(0, 99999);
      document.execCommand("copy");
    }
  </script>
  <style>
   /* In an external CSS file or within <style> tags in the header */
.navbar-brand {
  font-size: 1.5rem;
  font-weight: bold;
}

.navbar-toggler {
  border: none;
  outline: none;
}

.navbar-icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  margin-bottom: 4px;
  background-color: rgba(0, 0, 0, 0.5);
  border-radius: 1px;
}

.navbar-toggler:focus .navbar-icon-bar {
  background-color: rgba(0, 0, 0, 0.7);
}

.navbar-toggler:hover .navbar-icon-bar {
  background-color: rgba(0, 0, 0, 0.7);
}
  </style>
</head>

<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">CDN Link Generator</a>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menuContainer">
        <span class="navbar-icon-bar"></span>
        <span class="navbar-icon-bar"></span>
        <span class="navbar-icon-bar"></span>
      </button>

      <div class="collapse navbar-collapse" id="menuContainer">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about.php">About</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container mt-4 mb-4">