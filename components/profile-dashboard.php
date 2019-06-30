<style>
  .profile-dashboard {
    overflow: auto;
    padding: 20px 40px;
    width: 80%;
  }

  .profile-dashboard h2 {
    font-size: 2rem;
    margin-bottom: 1.3rem;
    color: #666;
  }

  .profile-dashboard .researches,
  .profile-dashboard .team,
  .profile-dashboard .animals {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }

  .profile-dashboard .researches .research-card,
  .profile-dashboard .team .member-card,
  .profile-dashboard .animals .animal-card {
    background-color: #ffffff;
    color: #212121;
    box-shadow: 0 0 6px #aaa;
    width: 30%;
    margin-right: 40px;
    margin-bottom: 30px;
  }

  .profile-dashboard .researches .research-card:nth-child(3n + 0),
  .profile-dashboard .team .member-card:nth-child(3n + 0),
  .profile-dashboard .animals .animal-card:nth-child(3n + 0) {
    margin-right: 0;
  }

  .profile-dashboard .researches .research-card .research-head,
  .profile-dashboard .team .member-card .member-head,
  .profile-dashboard .animals .animal-card .animal-head {
    width: 100%;
    min-height: 100px;
    background-color: #112233;
    display: flex;
    justify-content: center;
  }

  .profile-dashboard .researches .research-card .research-head img,
  .profile-dashboard .team .member-card .member-head img,
  .profile-dashboard .animals .animal-card .animal-head img {
    width: 100%;
    object-fit: cover;
    object-position: center;
  }

  .profile-dashboard .researches .research-card .research-body,
  .profile-dashboard .team .member-card .member-body,
  .profile-dashboard .animals .animal-card .animal-body {
    padding: 20px;
  }

  .profile-dashboard .researches .research-card .research-body h3,
  .profile-dashboard .team .member-card .member-body h3,
  .profile-dashboard .animals .animal-card .animal-body h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
  }

  .profile-dashboard .researches .research-card .research-body span,
  .profile-dashboard .team .member-card .member-body span,
  .profile-dashboard .animals .animal-card .animal-body span {
    font-size: 1.1rem;
    display: block;
    margin-bottom: 0.8rem;
  }

  .profile-dashboard .researches .research-card .research-body span:last-child,
  .profile-dashboard .team .member-card .member-body span:last-child,
  .profile-dashboard .animals .animal-card .animal-body span:last-child {
    margin-bottom: 0;
  }

  .profile-dashboard .researches .research-card .card-actions,
  .profile-dashboard .team .member-card .card-actions,
  .profile-dashboard .animals .animal-card .card-actions {
    margin: 0 15px 0 15px;
    padding: 15px 5px;
    border-top: 1px solid #aaa;
  }

  .profile-dashboard .researches .research-card .card-actions a,
  .profile-dashboard .team .member-card .card-actions a,
  .profile-dashboard .animals .animal-card .card-actions a {
    text-decoration: none;
    transition: all 0.3s;
  }

  .profile-dashboard .researches .research-card .card-actions a:hover,
  .profile-dashboard .team .member-card .card-actions a:hover,
  .profile-dashboard .animals .animal-card .card-actions a:hover {
    color: #2c76d0;
  }
</style>

<section class="profile-dashboard">
  <h2>Pesquisas</h2>
  
  <article class="researches">
    <div class="research-card">
      <figure class="research-head">
        <img src="interface/background.jpg" alt="">
      </figure>
      <div class="research-body">
        <h3>Nome da pesquisa</h3>
        <span>11/22/3344 — 11/22/3344</span>
      </div>
      <div class="card-actions">
        <a href="#">Abrir</a>
      </div>
    </div>
  </article>

  <h2>Equipe</h2>

  <article class="team">
    <div class="member-card">
      <figure class="member-head">
        <img src="interface/background.jpg" alt="">
      </figure>
      <div class="member-body">
        <h3>Nome do membro</h3>
        <span>Matrícula</span>
        <span>Curso</span>
      </div>
      <div class="card-actions">
        <a href="#">Abrir</a>
      </div>
    </div>
  </article>

  <h2>Animais</h2>

  <article class="animals">
    <div class="animal-card">
      <figure class="animal-head">
        <img src="interface/background.jpg" alt="">
      </figure>
      <div class="animal-body">
        <h3>Nome do animal</h3>
        <span>Código</span>
        <span>Gaiola</span>
      </div>
      <div class="card-actions">
        <a href="#">Abrir</a>
      </div>
    </div>
  </article>
</section>
