<?php // if ( isset($research['nome'] ) ) : ?>
<?php // foreach ( $researches as $research ) : ?>

<section class="research-dashboard">
  <h2>Nome do Teste<?php //echo $research['nome']; ?></h2>
  <button class="edit-btn">
    <img src="<?php asset( 'images.editar.png' ); ?>" alt="Editar">
  </button>

  <article class="researches">
    <div class="research-card">
      <div class="research-head">
        <img src="" alt="">
        <h3>Treinamento<?php //echo $research['']; ?></h3>
        <span>Tipo<?php //echo $research['']; ?></span>
      </div>
      <div class="research-body">
        <span><?php //echo $research['']; ?>5 tentativas</span>
        <span><?php //echo $research['']; ?>120 segundos para apresentação</span>
        <span><?php //echo $research['']; ?>30 segundos por tentativa</span>
        <span><?php //echo $research['']; ?>30 segundos para erro</span>
        <span><?php //echo $research['']; ?>10 segundos de recompensa</span>
      </div>
      <div class="card-actions">
        <a href="">Editar</a>
      </div>
      <form class="edit-form" action="" method="">
        <a href="" class="back-button">
          <img src="<?php asset('images.seta voltar.png'); ?>" alt="">
        </a>
        <input type="text" name="tentativas" value="<?php //echo $research['']; ?>">
        <input type="text" name="apresentacao" value="<?php //echo $research['']; ?>">
        <input type="text" name="tentativaTempo" value="<?php //echo $research['']; ?>">
        <input type="text" name="erro" value="<?php //echo $research['']; ?>">
        <input type="text" name="recompensa" value="<?php //echo $research['']; ?>">
        <button class="send-btn" type="submit">Enviar</button>
      </form>
    </div>

    <div class="add-new-card">
      <a href="" class="overlay">
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

<section class="research-dashboard">
  <h2>Nome do Teste<?php //echo $research['nome']; ?></h2>
  <button class="edit-btn">
    <img src="<?php asset( 'images.editar.png' ); ?>" alt="Editar">
  </button>

  <article class="researches">
    <div class="research-card">
      <div class="research-head">
        <img src="" alt="">
        <h3>Treinamento<?php //echo $research['']; ?></h3>
        <span>Tipo<?php //echo $research['']; ?></span>
      </div>
      <div class="research-body">
        <span><?php //echo $research['']; ?>5 tentativas</span>
        <span><?php //echo $research['']; ?>120 segundos para apresentação</span>
        <span><?php //echo $research['']; ?>30 segundos por tentativa</span>
        <span><?php //echo $research['']; ?>30 segundos para erro</span>
        <span><?php //echo $research['']; ?>10 segundos de recompensa</span>
      </div>
      <div class="card-actions">
        <a href="">Editar</a>
      </div>
      <form class="edit-form" action="" method="">
        <a href="" class="back-button">
          <img src="<?php asset('images.seta voltar.png'); ?>" alt="">
        </a>
        <input type="text" name="tentativas" value="<?php //echo $research['']; ?>">
        <input type="text" name="apresentacao" value="<?php //echo $research['']; ?>">
        <input type="text" name="tentativaTempo" value="<?php //echo $research['']; ?>">
        <input type="text" name="erro" value="<?php //echo $research['']; ?>">
        <input type="text" name="recompensa" value="<?php //echo $research['']; ?>">
        <button class="send-btn" type="submit">Enviar</button>
      </form>
    </div>

    <div class="add-new-card">
      <a href="" class="overlay">
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

<?php // endforeach; ?>
<?php // endif; ?>