<style>
  body {
    min-height: 100vh;
  }

  .carousel {
    position: relative;
    max-width: 100%;
    min-height: 300px;
  }

  .carousel-items {
    display: flex;
    align-items: center;
    min-width: 100%;
    overflow: hidden;
  }

  .carousel-item {
    display: inherit;
    min-width: 100%;
    overflow: hidden;
  }

  .slide-image {
    width: 100%;
    background-color: #ffffff;
    user-select: none;
    -webkit-animation: fade 1.5s ease-in 0s 1 normal;
    animation: fade 1.5s ease-in 0s 1 normal;
  }

  .controls {
    position: absolute;
    top: 45%;
    left: 0;
    width: 100%;
    font-size: 1.5rem;
    display: flex;
    justify-content: space-between;
    user-select: none;
    z-index: 1;
  }

  .controls a {
    text-decoration: none;
  }

  .prev {
    margin-left: 1.5rem;  
  }

  .next {
    margin-right: 1.5rem;
  }

  .prev, .next {
    position: relative;
    background-color: #fff;
    border-radius: 50%;
    padding: 15px 20px;
    color: #000;
    transition: 0.6s ease;
    box-shadow: 0 0 6px #000;
    cursor: pointer;
  }
 
  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
    color: #fff;
  }

  .prev:hover, .next:hover,
  .prev:active, .next:active,
  .prev:focus, .next:focus {
    outline: 0;
  }

  .caption {
    position: absolute;
    top: 42%;
    left: 50%;
    text-align: center;
    color: #fff;
    max-width: 40%;
    transform: translateX(-45%);
    word-break: break-all;
  }

  .caption h4 {
    font-size: 1.8rem;
    margin-bottom: 1.2rem;
  }

  .caption p {
    font-size: 1.4rem;
  }

  @-webkit-keyframes fade {
    from {opacity: 0.4} 
    to {opacity: 1}
  }

  @keyframes fade {
    from {opacity: 0.4} 
    to {opacity: 1}
  }
</style>

<div class="carousel">
  <div class="controls">
    <a href="#" class="prev">A</a> <!-- icone-anterior -->
    <a href="#" class="next">P</a> <!-- icone-próximo -->
  </div>

  <div class="carousel-items">
    <div class="carousel-item">
      <img class="slide-image" src="interface/background.jpg" alt="">
      <div class="caption">
        <h4>AAAAAAAAAAAAAAAAAAAAAAAAAA</h4>
        <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="slide-image" src="interface/background.jpg" alt="">
      <div class="caption">
        <h4>BBBBBBBBBBBBBBBBBBBBBBBBBB</h4>
        <p>bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="slide-image" src="interface/background.jpg" alt="">
      <div class="caption">
        <h4>CCCCCCCCCCCCCCCCCCCCCCCCCCC</h4>
        <p>ccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="slide-image" src="interface/background.jpg" alt="">
      <div class="caption">
        <h4>DDDDDDDDDDDDDDDDDDDDDD</h4>
        <p>dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>
      </div>
    </div>
  </div>
</div>

<script>
  var slideIndex = 0,
      prev = document.querySelector('.prev'),
      next = document.querySelector('.next'),
      slides = document.querySelectorAll(".carousel-item"),
      slidesLength = slides.length;
  showSlide();

  prev.addEventListener('click', function(event) {
    clearTimeout(window.t);
    event.preventDefault();
    slideIndex -= 2;
    showSlide();
  }, false);

  next.addEventListener('click', function(event) {
    clearTimeout(window.t);
    event.preventDefault();
    showSlide();
  }, false);

  function showSlide() {
    if (slideIndex > slidesLength-1) slideIndex = 0
    else if (slideIndex < 0) slideIndex = slidesLength-1;

    Array.from(slides).forEach(function(slide) {
      slide.style.display = "none";
    });

    slides[slideIndex].style.display = "block";
    slideIndex++;
    window.t = setTimeout(showSlide, 5000);
  }
</script>
