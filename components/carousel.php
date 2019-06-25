<style>
  .carousel {
    position: relative;
    width: 100%;
    overflow: hidden;
  }

  .background-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #112233;
    object-fit: cover;
    object-position: center;
  }

  .controls {
    position: absolute;
    top: 45%;
    left: 0;
    width: 100%;
    font-size: 1.5rem;
  }

  .controls a {
    text-decoration: none;
    color: #ffffff;
  }

  .caption {
    
  }

  .caption h4 {
    font-size: 1.6rem;
  }

  .caption p {
    font-size: 1.2rem;
  }

  .indicators {
    position: absolute;
    display: flex;
    justify-content: space-between;
  }

  .indicators .indicator {

  }
</style>

<div class="carousel">
  <div class="controls">
    <a href="#" class="previous">icone-anterior</a>
    <a href="#" class="next">icone-próximo</a>
  </div>

  <img class="background-image" id="bg-" src="" alt="">

  <div class="caption" id="caption-">
    <h4></h4>
    <p></p>
  </div>

  <!--
    <div class="indicators">
    </div>
  -->
</div>