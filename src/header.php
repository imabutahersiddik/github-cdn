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

  <!-- SEO meta tags -->
  <meta name="description" content="Generate CDN links for your Github projects with ease.">
  <meta name="keywords" content="Github, CDN, link generation, tool">

  <!-- Social cards -->
  <meta property="og:title" content="Github CDN Link Generation Tool">
  <meta property="og:description" content="Generate CDN links for your Github projects with ease.">
  <meta property="og:image" content="https://cdn.kiask.com/images/github-cdn-link-generation-tool.png">
  <meta property="twitter:card" content="summary_large_image">

  <!-- Schema markup -->
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebApplication",
      "name": "Github CDN Link Generation Tool",
      "description": "Generate CDN links for your Github projects with ease.",
      "url": "https://github-cdn.kiask.xyz/",
      "image": "https://cdn.kiask.xyz/github-cdn/images/github-cdn-link-generation-tool.png",
      "applicationCategory": "Web Development",
      "operatingSystem": "Web"
    }
  </script>

  <!-- CSS stylesheet -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/ki-ask/github-cdn@main/public/css/style.css">

  <!-- jQuery library -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Bootstrap JavaScript library -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

  <!-- Script for copying link -->
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
  font-size: 1rem;
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
.f-s {
  font-size: 9px; 
}
.btn.btn-primary.mr {
    margin: 0px auto;
}
  </style>
</head>

<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Github CDN Link Generator</a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuContainer" aria-controls="menuContainer" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menuContainer">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.kiask.xyz/?githubcdn">AI Search Engine & Chat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://decentralized-web.kiask.xyz/?githubcdn">Decentralized Web</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>