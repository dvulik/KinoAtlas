<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>KinoAtlas</title>
  <link rel="icon" href="logo/final.png" type="image/png">
</head>
<body>
  <div class="container">
    <nav class="navbar">
      <div class="logo">
        <img src="logo/final.png" width="85px" height="57px" alt="Logo">
      </div>
      <form action="vyhledavani.php" method="get" class="search-form">
        <input type="text" name="q" placeholder="Hledat film nebo herce...">
        <button type="submit">Hledat</button>
      </form>
      <ul class="links">
        <li><a href="index.php">Domů</a></li>
        <li><a href="filmy.php">Filmy</a></li>
        <li><a href="herci.php">Herci</a></li>
        <li><a href="watchlist.php">Watchlist</a></li>
      </ul>
    </nav>
    <h1>Přehled filmů</h1>
    <div class="carousel">
      <button class="carousel-doleva" onclick="moveCarousel(-1)">&#8592;</button>
      <div class="carousel-track">
        <img src="nahledovky/HQ/1.jpg" class="carousel-img" style="display:block;">
        <img src="nahledovky/HQ/2.jpg" class="carousel-img" style="display:none;">
        <img src="nahledovky/HQ/3.jpg" class="carousel-img" style="display:none;">
        <img src="nahledovky/HQ/4.jpg" class="carousel-img" style="display:none;">
        <img src="nahledovky/HQ/5.jpg" class="carousel-img" style="display:none;">
        <img src="nahledovky/HQ/6.jpg" class="carousel-img" style="display:none;">
        <img src="nahledovky/HQ/7.jpg" class="carousel-img" style="display:none;">
        <img src="nahledovky/HQ/8.jpg" class="carousel-img" style="display:none;">
        <img src="nahledovky/HQ/9.jpg" class="carousel-img" style="display:none;">
        <img src="nahledovky/HQ/10.jpg" class="carousel-img" style="display:none;">
      </div>
      <button class="carousel-doprava" onclick="moveCarousel(1)">&#8594;</button>
    </div>
  </div>
</body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    
}

body{
    background: linear-gradient(to right, #ece9e6, #ffffff);
}

h1{
    text-align: center;
    margin: 48px 0 0 0;
}

header {
    position: sticky;
    top: 0;
    z-index: 1000;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #1e1e1e;
    color: #fff;
    padding: 10px 20px;
}

.links {
    list-style: none;
    display: flex;
    gap: 40px;
}

.links a {
    color: #fff;
    text-decoration: none;
    transition: color 0.2s;
}

.links a:hover {
    color: #e9d311ff;
}

.search-form {
    display: flex;
    gap: 8px;
    flex: 1 1 0;
    justify-content: center;
}

.search-form input {
    padding: 6px 18px;
    border: none;
    border-radius: 5px;
    width: 550px;
    height: 35px;
}

.search-form button {
    padding: 6px 22px;
    border: none;
    border-radius: 5px;
    background: #b6a617ff;
    color: white;
    cursor: pointer;
    height: 35px;
    transition: background 0.2s;
}

.container {
    max-width: 1500px;
    width: 99vw;
    min-height: 98vh;
    margin: 32px auto 32px auto;
    background: #fff;
    box-shadow: 0 8px 32px rgba(0,0,0,0.12);
    padding: 0 0 28px 0;
    border-radius: 16px;
}

.carousel {
    position: relative;
    width: 100%;
    max-width: 400px;
    margin: 32px auto;
    overflow: hidden;
    background: transparent;
    border-radius: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 520px;
    padding: 0 32px;
}

.carousel-img {
    width: 336px;
    height: 520px;
    object-fit: cover;
    border-radius: 8px;
    display: block;
    margin: 0 auto;
}

.carousel-doleva, .carousel-doprava {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.22);
    color: white;
    border: 2px solid #fff;
    padding: 10px 16px;
    cursor: pointer;
    z-index: 10;
    font-size: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.18);
    transition: box-shadow 0.2s, border-color 0.2s;
}

.carousel-doleva {
    left: 12px;
}

.carousel-doprava {
    right: 12px;
}
</style>

<script>
let currentIndex = 0;
const images = document.querySelectorAll('.carousel-img');
function moveCarousel(direction) {
  images[currentIndex].style.display = 'none';
  currentIndex = (currentIndex + direction + images.length) % images.length;
  images[currentIndex].style.display = 'block';
}
</script>
</html>