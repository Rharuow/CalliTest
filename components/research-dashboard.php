<style>
  .research-dashboard {
    overflow: auto;
    padding: 20px 40px;
    width: 80%;
  }

  .research-dashboard h2 {
    font-size: 2rem;
    margin-bottom: 1.3rem;
    color: #666;
  }

  .research-dashboard .researches {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }

  .research-dashboard .researches .research-card,
  .research-dashboard .researches .add-new-card {
    background-color: #ffffff;
    color: #212121;
    box-shadow: 0 0 6px #aaa;
    width: 30%;
    margin-right: 40px;
    margin-bottom: 30px;
  }

  .research-dashboard .researches .add-new-card {
    margin-right: 0;
    height: 431px;
    position: relative;
  }

  .research-dashboard .researches .add-new-card .overlay {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    background-color: #eee;
    color: #ffffff;
    text-decoration: none;
    width: 100%;
    height: 100%;
    padding: 120px 0;
    text-align: center;
    transition: all 0.4s;
    position: absolute;
    top: 0;
    left: 0;
  }

  .research-dashboard .researches .add-new-card .overlay.fade {
    animation: fade 1s ease-in 0s 1 normal;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    -ms-animation-fill-mode: forwards;
    -o-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }

  .research-dashboard .researches .add-new-card .overlay:hover {
    background-color: #aaa;
  }

  .research-dashboard .researches .add-new-card .overlay h3 {
    font-size: 1.8rem;
    text-shadow: 0 0 4px #333;
  }

  .research-dashboard .researches .add-new-card .overlay .fab {
    font-size: 3rem;
    border-radius: 50%;
    background-color: #aaa;
    padding: 10px 20px;
  }

  .research-dashboard .researches .add-new-card form {
    padding: 20px;
    display: flex;
    flex-direction: column;
  }

  .research-dashboard .researches .add-new-card form h3 {
    font-size: 1.2rem;
    margin-bottom: 1.1rem;
  }

  .research-dashboard .researches .add-new-card form input {
    margin-bottom: 0.9rem;
    height: 40px;
    padding: 0 10px;
    font-size: 1.05rem;
    color: #333;
    background-color: #ccc;
    border: none;
    transition: all 0.4s;
  }

  .research-dashboard .researches .add-new-card form input:focus {
    box-shadow: 0 0 7px #2255ff;
  }

  .research-dashboard .researches .add-new-card form select {
    margin-bottom: 0.9rem;
    border: none;
    font-size: 1.1rem;
    height: 35px;
    background-color: #ccc;
    padding: 0 13px;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background-image: url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSdibGFjaycgaGVpZ2h0PScyNCcgdmlld0JveD0nMCAwIDI0IDI0JyB3aWR0aD0nMjQnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zyc+PHBhdGggZD0nTTcgMTBsNSA1IDUtNXonLz48cGF0aCBkPSdNMCAwaDI0djI0SDB6JyBmaWxsPSdub25lJy8+PC9zdmc+);
    background-repeat: no-repeat;
    background-position: top 50% right 5px;
    transition: all 0.4s;
  }

  .research-dashboard .researches .add-new-card form select::-ms-expand {
    display: none;
  }

  .research-dashboard .researches .add-new-card form select:focus {
    box-shadow: 0 0 4px #2255ff;
  }

  .research-dashboard .researches .add-new-card form button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: #ccc;
    border: none;
    padding: 8px 10px;
    width: 30%;
    font-size: 1.1rem;
    align-self: flex-end;
    transition: all 0.4s;
  }
  
  .research-dashboard .researches .add-new-card form button:hover {
    background-color: #999;
  }

  .research-dashboard .researches .research-card:nth-child(3n + 0) {
    margin-right: 0;
  }

  .research-dashboard .researches .research-card .research-head {
    width: 100%;
    min-height: 170px;
    background-color: #bbb;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    color: #fff;
    padding: 35px 0;
    background-image: url('interface/background.jpg');
    background-size: cover;
    background-position: center;
  }

  .research-dashboard .researches .research-card .research-head h3 {
    font-size: 2rem;
  }

  .research-dashboard .researches .research-card .research-head span {
    font-size: 1.5rem;
  }

  .research-dashboard .researches .research-card .research-head img {
    width: 100%;
    object-fit: cover;
    object-position: center;
  }

  .research-dashboard .researches .research-card .research-body {
    padding: 20px;
    text-align: center;
  }

  .research-dashboard .researches .research-card .research-body span {
    font-size: 1.1rem;
    display: block;
    margin-bottom: 1.4rem;
  }

  .research-dashboard .researches .research-card .research-body span:last-child {
    margin-bottom: 0;
  }

  .research-dashboard .researches .research-card .card-actions {
    margin: 0 15px 0 15px;
    padding: 15px 5px;
    border-top: 1px solid #aaa;
  }

  .research-dashboard .researches .research-card .card-actions a {
    text-decoration: none;
    transition: all 0.3s;
  }

  .research-dashboard .researches .research-card .card-actions a:visited {
    color: #0000FF;
  }

  .research-dashboard .researches .research-card .card-actions a:hover {
    color: #2c76d0;
  }

  @-webkit-keyframes fade {
    0% {opacity: 1}
    100% {opacity: 0}
  }

  @keyframes fade {
    0% {opacity: 1}
    100% {opacity: 0}
  }
</style>

<section class="research-dashboard">
  <h2>Nome do teste</h2>
  
  <article class="researches">
    <div class="research-card">
      <div class="research-head">
        <h3>Treinamento 0</h3>
        <span>Tipo</span>
      </div>
      <div class="research-body">
        <span>5 tentativas</span>
        <span>120 segundos para apresentação</span>
        <span>30 segundos por tentativa</span>
        <span>30 segundos para erro</span>
        <span>10 segundos de recompensa</span>
      </div>
      <div class="card-actions">
        <a href="#">Editar</a>
      </div>
    </div>

    <div class="add-new-card">
      <a href="#" class="overlay">
        <h3>Adicionar Bateria/Treinamento</h3>
        <div class="fab">+</div>
      </a>
      <form method="post" action="">
        <h3>Adicionar Bateria/Treinamento</h3>
        <select name="tipo">
          <option value="default">Tipo</option>
          <option value="treinamento">Treinamento</option>
          <option value="bateria">Bateria</option>
        </select>
        <input type="text" name="tentativas" placeholder="Número de tentativas">
        <input type="text" name="apresentacao" placeholder="Tempo de apresentação">
        <input type="text" name="tentativa" placeholder="Tempo de cada tentativa">
        <input type="text" name="erro" placeholder="Tempo para erro">
        <input type="text" name="recompensa" placeholder="Tempo para recompensa">
        <button type="submit">Criar</button>
      </form>
    </div>
  </article>
</section>

<script>
  var overlay = document.querySelector('.overlay')
  
  overlay.addEventListener('click', function(event) {
    event.preventDefault();
    overlay.classList.add("fade");
    setTimeout(function() {
      overlay.parentNode.removeChild(overlay);
    }, 1100);
  }, false);
</script>
