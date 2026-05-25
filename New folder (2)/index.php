<<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MK-Cosmetics</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card {
      height: 100%;
      transition: transform 0.2s;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .card:hover {
      transform: scale(1.02);
    }

    .card-img-top {
      height: 250px;
      object-fit: cover;
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
    }

    .card-body {
      padding: 1.5rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    footer {
      height: 80px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
  <link rel="icon" type="image/x-icon" href="fav.jpg">
</head>
<body>

  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height: 80px;">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="logoo.webp" alt="Cosmetics Logo" height="50"></a>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Deals</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="cart.php">🛒 Cart (<span id="cart-count">0</span>)</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide w-100" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="slide3.webp" class="d-block w-100" alt="Slide 1" style="height: 600px; object-fit: cover;">
      </div>
      <div class="carousel-item">
        <img src="slide2.webp" class="d-block w-100" alt="Slide 2" style="height: 600px; object-fit: cover;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Main Product Section -->
  <div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php
        $products = [
          ["image1.jfif", "Brightening Face Serum", 5000, "Hydrogenated Didecene, Isododecane, Mica..."],
          ["image2.webp", "Liquid Lust Illuminator", 6000, "Hydrogenated Didecene, Mica, Polyisobutene..."],
          ["image3.jfif", "All Care Toner Serum", 1000, "Soothes skin and refreshes. Removes irritants."],
          ["image4.webp", "Matte Lipstick", 2500, "Long-lasting, rich color matte lipstick for all-day wear."],
          ["image5.webp", "Glow Face Mist", 1800, "Hydrates and refreshes skin for a radiant glow."],
          ["image6.webp", "Vitamin C Cleanser", 3200, "Gently cleanses and boosts skin clarity with Vitamin C."]
        ];

        foreach ($products as $p) {
          echo '
          <div class="col">
            <div class="card h-100 p-2">
              <img src="' . $p[0] . '" class="card-img-top mb-3" alt="Product">
              <div class="card-body d-flex flex-column justify-content-between">
                <div>
                  <h5 class="card-title">' . $p[1] . '<br>Price Rs.' . $p[2] . '</h5>
                  <p class="card-text">' . $p[3] . '</p>
                </div>
                <button class="btn btn-primary add-to-cart mt-3" data-name="' . $p[1] . '" data-price="' . $p[2] . '">Add to Cart</button>
              </div>
            </div>
          </div>';
        }
      ?>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">&copy; 2025 MK-Cosmetics. All rights reserved.</p>
  </footer>

  <!-- Add to Cart Script -->
  <script>
    document.querySelectorAll('.add-to-cart').forEach(button => {
      button.addEventListener('click', () => {
        const name = button.getAttribute('data-name');
        const price = parseInt(button.getAttribute('data-price'));

        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        if (!cart.some(item => item.name === name)) {
          cart.push({ name, price });
          localStorage.setItem('cart', JSON.stringify(cart));
        }

        window.location.href = 'cart.php';
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
