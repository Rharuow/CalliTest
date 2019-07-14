<section class="profile-dashboard">
  <h2>Pesquisas</h2>
  
  <article class="researches">
    <?php foreach ($researches as $research) : ?>
    <div class="research-card">
      <figure class="research-head">
        <img src="<?php echo $research['icon']; ?>" alt="">
      </figure>
      <div class="research-body">
        <h3><?php echo $research['name']; ?></h3>
        <span><?php echo $research['begin'] . ' — ' . $research['end'];; ?></span>
      </div>
      <div class="card-actions">
        <a href="">Abrir</a>
      </div>
    </div>
    <?php endforeach; ?>
  </article>

  <h2>Equipe</h2>

  <article class="team">
    <?php foreach ($team as $member) : ?>
    <div class="member-card">
      <figure class="member-head">
        <img src="<?php echo $member['icon']; ?>" alt="">
      </figure>
      <div class="member-body">
        <h3><?php echo $member['nome']; ?></h3>
        <span><?php echo $member['matricula']; ?></span>
        <span><?php echo $member['curso']; ?></span>
      </div>
      <div class="card-actions">
        <a href="">Abrir</a>
      </div>
    </div>
    <?php endforeach; ?>
  </article>

  <h2>Animais</h2>

  <article class="animals">
    <?php foreach ($animals as $animal) : ?>
    <div class="animal-card">
      <figure class="animal-head">
        <img src="<?php echo $animal['icon']; ?>" alt="">
      </figure>
      <div class="animal-body">
        <h3><?php echo $animal['nome']; ?></h3>
        <span><?php echo $animal['codigo']; ?></span>
        <span><?php echo $animal['gaiola']; ?></span>
      </div>
      <div class="card-actions">
        <a href="">Abrir</a>
      </div>
    </div>
    <?php endforeach; ?>
  </article>
</section>
