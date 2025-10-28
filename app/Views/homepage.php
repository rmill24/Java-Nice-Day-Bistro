<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />

  <style>
    * {
      font-family: 'Poppins', Arial, Helvetica, sans-serif;
    }

    .hero {
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url("https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      height: 100vh;
    }

    .hero-content {
      color: white;
    }

    .carousel-item div {
      background-color: black;
      padding: 2rem 4rem;
      border-radius: 15px;
      color: white;
      height: 250px;
    }
  </style>
</head>

<body>
  <?= $this->include('partials/header') ?>

  <section class="hero d-flex flex-column justify-content-center align-items-center text-center">
    <div class="hero-content w-75 w-md-50">
      <p>More Than Just Coffee, It's a Community</p>
      <h1>The Perfect Cup, Crafted Just For You</h1>
      <p>
        Welcome to our cozy corner of coffee bliss! We believe every cup should feel like a warm hug, a moment of peace
        in your busy day. From the first rich aroma to the last satisfying sip, we're here to make your coffee
        experience not just a habit, but a highlight. Come on in, and let's make your day a little brighter, one
        delicious cup at a time.
      </p>
      <a href="<?= url_to('login')?>"> <button type="button" class="btn btn-light mt-3">Buy Now</button></a>
    </div>
  </section>

  <main class="container my-5">

    <!-- Featured Products -->
    <section class="text-center">
      <h1 class="mb-5">Our Best Selling Drinks</h1>

      <!-- Product List -->
      <div class="d-flex flex-column gap-5">

        <!-- Each product -->
        <div class="row align-items-center">
          <div class="col-md-4 text-center">
            <img
              src="https://plus.unsplash.com/premium_photo-1723559972702-2659e41dbb5b?q=80&w=736&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt="Black Coffee" class="img-fluid object-fit-cover w-100" style="height: 300px; border-radius: 10%;" />
          </div>
          <div class="col-md-8 text-start">
            <h3>Signature Black Coffee</h3>
            <p>Bold and smooth, our Signature Black Coffee is brewed to perfection with premium beans...</p>
            <button class="btn btn-dark">Learn More</button>
          </div>
        </div>

        <div class="row align-items-center">
          <div class="col-md-4 text-center">
            <img
              src="https://images.unsplash.com/photo-1645243370596-11b97810976c?q=80&w=686&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt="Caramel Macchiato" class="img-fluid object-fit-cover w-100" style="height: 300px; border-radius: 10%;" />
          </div>
          <div class="col-md-8 text-start">
            <h3>Iced Salted Caramel Macchiato</h3>
            <p>A creamy blend of espresso, steamed milk, and buttery caramel...</p>
            <button class="btn btn-dark">Learn More</button>
          </div>
        </div>

        <div class="row align-items-center">
          <div class="col-md-4 text-center">
            <img
              src="https://images.unsplash.com/photo-1582785513054-8d1bf9d69c1a?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt="Matcha Latte" class="img-fluid object-fit-cover w-100" style="height: 300px; border-radius: 10%;" />
          </div>
          <div class="col-md-8 text-start">
            <h3>Matcha Latte</h3>
            <p>Earthy and vibrant, our Matcha Latte blends finely ground green tea with steamed milk...</p>
            <button class="btn btn-dark">Learn More</button>
          </div>
        </div>

        <div class="row align-items-center">
          <div class="col-md-4 text-center">
            <img
              src="https://plus.unsplash.com/premium_photo-1667210180343-3ed8d69d7e07?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt="Pumpkin Spice Latte" class="img-fluid object-fit-cover w-100" style="height: 300px; border-radius: 10%;" />
          </div>
          <div class="col-md-8 text-start">
            <h3>Pumpkin Spice Latte</h3>
            <p>A cozy seasonal favorite—rich espresso meets creamy milk and warm pumpkin spice flavors...</p>
            <button class="btn btn-dark">Learn More</button>
          </div>
        </div>

        <div class="row align-items-center">
          <div class="col-md-4 text-center">
            <img
              src="https://wearenotmartha.com/wp-content/uploads/Chocolate-Covered-Strawberry-Frappuccino-Featured.jpg"
              alt="Strawberry Frappuccino" class="img-fluid object-fit-cover w-100" style="height: 300px; border-radius: 10%;" />
          </div>
          <div class="col-md-8 text-start">
            <h3>Strawberry Frappuccino</h3>
            <p>Fruity, fun, and refreshingly sweet—our Strawberry Frappuccino is a creamy blended treat...</p>
            <button class="btn btn-dark">Learn More</button>
          </div>
        </div>

      </div>
    </section>

    <!-- Customer Reviews -->
    <section class="text-center my-5">
      <h1 class="mb-5">What Customers Say About Us</h1>
      <div id="carouselExampleIndicators" class="carousel slide w-100 mx-auto" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div>
              <h3>John Doe</h3>
              <p>⭐️⭐️⭐️⭐️⭐️</p>
              <p>"Warm Vibes & Even Better Coffee!"</p>
              <p>Absolutely love this place! The baristas are super friendly...</p>
            </div>
          </div>
          <div class="carousel-item">
            <div>
              <h3>Selcan Ezhil</h3>
              <p>⭐️⭐️⭐️⭐️⭐️</p>
              <p>"My Daily Happy Place"</p>
              <p>This coffee shop is a gem. Cozy interior, good music, and the nicest staff...</p>
            </div>
          </div>
          <div class="carousel-item">
            <div>
              <h3>Giselle Minerva</h3>
              <p>⭐️⭐️⭐️⭐️⭐️</p>
              <p>"Neighborhood Favorite!"</p>
              <p>Such a welcoming atmosphere! I stopped by on a whim and now I’m a regular...</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Signup -->
    <section class="signup-container row mt-5 align-items-center justify-content-center">
      <h1 class="col-md-5">Stay Up To Date On All News And Offers.</h1>
      <div class="col-md-5">
        <form class="p-4 p-md-5 border rounded-3 bg-body-light">
          <a href="<?= url_to('register') ?>" class="w-100 btn btn-lg btn-dark">Sign Up</a>
          <hr class="my-4" />
          <small class="text-body-secondary">You will be redirected to the registration page by clicking Sign Up.</small>
        </form>
      </div>
    </section>
  </main>

  <?= $this->include('partials/footer') ?>

</body>

</html>