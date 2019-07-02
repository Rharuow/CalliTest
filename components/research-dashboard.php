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
    display: inline-block;
  }

  .research-dashboard .edit-btn {
    opacity: 0;
    transition: all 0.2s;
    color: #000;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background: transparent;
    border: 0;
    font-size: 1.2rem;
    vertical-align: text-bottom;
  }

  .research-dashboard h2:hover + .edit-btn.out,
  .research-dashboard .edit-btn.out,
  .research-dashboard .edit-btn.out:hover {
    opacity: 0;
    cursor: default;
  }

  .research-dashboard h2:hover + .edit-btn, .edit-btn:hover {
    opacity: 1;
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
    max-height: 68.63vh;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
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

  .research-dashboard .researches .research-card .edit-form {
    display: flex;
    flex-direction: column;
    padding: 7px 15px;
    transform: translateY(64%);
    /* translateX(-100%) */
    width: 100%;
    background-color: #fff;
  }

  .research-dashboard .researches .research-card .edit-form.slide {
  }

  .research-dashboard .researches .research-card .edit-form .back-button {
    width: 25px;
    margin-bottom: 8px;
  }

  .research-dashboard .researches .research-card .edit-form .back-button img {
    width: 100%;
  }

  .research-dashboard .researches .research-card .edit-form input {
    height: 30px;
    margin-bottom: 10px;
    padding: 0 10px;
    transition: all 0.4s;
    border: 1px solid #aaa;
  }

  .research-dashboard .researches .research-card .edit-form input:focus {
    box-shadow: 0 0 5px 0 #2255ff;
  }

  .research-dashboard .researches .research-card .edit-form .send-btn {
    text-decoration: none;
    transition: all 0.3s;
    font-size: 1.2rem;
    display: inline-block;
    width: 20%;
    margin-left: auto;
    margin-top: -4px;
    color: #0000FF;
  }

  .research-dashboard .researches .research-card .card-actions .send-btn:visited {
    color: #0000FF;
  }

  .research-dashboard .researches .research-card .card-actions .send-btn:hover {
    color: #2c76d0;
  }

  .research-dashboard .researches .modal-wrapper {
    width: 100vw;
    height: 100vh;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    animation: fade-in 0.5s ease-in 0s 1 normal;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    -ms-animation-fill-mode: forwards;
    -o-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }

  .research-dashboard .researches .modal-wrapper.fade-out {
    animation: fade 0.5s ease-in 0s 1 normal;
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    -ms-animation-fill-mode: forwards;
    -o-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
  }

  .research-dashboard .researches .modal {
    width: 40vw;
    height: 80vh;
    background-color: #fff;
    box-shadow: 0 0 9px #666;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    z-index: 2;
    padding: 25px 70px;
    display: flex;
    flex-direction: column;
  }

  .research-dashboard .researches .modal-wrapper .backdrop {
    position: absolute;
    top: 0;
    left: 0;
    content: " ";
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: -1;
  }

  .research-dashboard .researches .modal .close {
    text-decoration: none;
    color: #212121;
    font-size: 1.4rem;
    position: absolute;
    top: -2.5%;
    right: -2%;
    background-color: #eee;
    border-radius: 50%;
    padding: 5px 10px;
    transition: all 0.3s;
    z-index: 3;
  }

  .research-dashboard .researches .modal .close:hover {
    background-color: #333;
    color: #fff;
  }

  .research-dashboard .researches .modal h3 {
    font-size: 2.2rem;
    text-align: center;
    margin-bottom: 1.5rem;
  }

  .research-dashboard .researches .modal form {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .research-dashboard .researches .modal form input {
    height: 30px;
    margin-left: 8px;
    margin-bottom: 2rem;
    border: 1px solid #888;
    padding: 1rem;
    transition: all 0.3s;
  }

  .research-dashboard .researches .modal form input:focus {
    box-shadow: 0 0 5px 0 #2255ff;
  }

  .research-dashboard .researches .modal form button {
    width: 18%;
    -webkit-appearance: none;
    appearance: none;
    border: none;
    padding: 10px 12px;
    font-size: 1.1rem;
    background-color: #ccc;
    margin-left: auto;
    transition: all 0.2s;
  }

  .research-dashboard .researches .modal form button:hover {
    background-color: #999;
  }

  .research-dashboard .researches > .fab {
    border-radius: 50%;
    background-color: #2d2d2d;
    padding: 15px 22px;
    font-size: 2.3rem;
    text-decoration: none;
    color: #fff;
    box-shadow: 0 0 8px 0 #666;
    position: absolute;
    right: 2%;
    bottom: 2.5%;
    outline: none;
    user-select: none;
    transition: all 0.2s;
  }

  @-webkit-keyframes fade-in {
    0% {opacity: 0}
    100% {opacity: 1}
  }

  @keyframes fade-in {
    0% {opacity: 0}
    100% {opacity: 1}
  }

  @-webkit-keyframes fade {
    0% {opacity: 1}
    100% {opacity: 0}
  }

  @keyframes fade {
    0% {opacity: 1}
    100% {opacity: 0}
  }

  @-webkit-keyframes slide {
    0% {opacity: 1}
    100% {opacity: 0}
  }

  @keyframes slide {
    0% {opacity: 1}
    100% {opacity: 0}
  }
</style>

<section class="research-dashboard">
  <h2>Nome do teste</h2>
  <button class="edit-btn">Editar</button> <!-- Icone de editar -->

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
        <a href="">Editar</a>
      </div>
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
    <a href="" class="fab">+</a>
  </article>
</section>

<script>
  var overlay = document.querySelector('.overlay'),
      fab = document.querySelector('.researches > .fab'),
      editBtn = document.querySelector('.edit-btn'),
      cardAnchor = document.querySelector('.researches > .research-card > .card-actions > a');

  cardAnchor.addEventListener('click', function(event) {
    event.preventDefault();
    var researchBody = document.querySelector('.research-body'),
        cardAction = document.querySelector('.card-actions');
    
    researchBody.classList.add('slide');
    cardAction.classList.add('slide');

    var editForm = document.createElement('form'),
        tryInput = document.createElement('input'),
        presentationInput = document.createElement('input'),
        tryTimeInput = document.createElement('input'),
        errorInput = document.createElement('input'),
        rewardInput = document.createElement('input'),
        backBtn = document.createElement('a'),
        backBtnIcon = document.createElement('img'),
        sendBtn = document.createElement('a');

    editForm.classList.add('edit-form');
    tryInput.type = 'text',
    presentationInput.type = 'text',
    tryTimeInput.type = 'text',
    errorInput.type = 'text',
    rewardInput.type = 'text';
    backBtn.href = '';
    backBtn.classList.add('back-button');
    backBtnIcon.src = "assets/seta.png";
    backBtn.appendChild(backBtnIcon);
    sendBtn.href = '';
    sendBtn.classList.add('send-btn');
    sendBtn.appendChild(document.createTextNode('Enviar'));

    editForm.appendChild(backBtn);
    editForm.appendChild(tryInput);
    editForm.appendChild(presentationInput);
    editForm.appendChild(tryTimeInput);
    editForm.appendChild(errorInput);
    editForm.appendChild(rewardInput);
    editForm.appendChild(sendBtn);

    cardAction.insertAdjacentElement('afterend', editForm);
  });

  overlay.addEventListener('click', function(event) {
    event.preventDefault();
    overlay.classList.add("fade");
    setTimeout(function() {
      overlay.parentNode.removeChild(overlay);
    }, 1100);
  }, false);

  editBtn.addEventListener('click', function(event) {
    event.preventDefault();
    editBtn.classList.add('out');

    var testTitle = editBtn.parentNode.querySelector('h2');
        testTitle.setAttribute('contentEditable', 'true');

    if (typeof window.getSelection != "undefined" && typeof document.createRange != "undefined") {
      var range = document.createRange();
      range.selectNodeContents(testTitle);
      range.collapse(false);
      var sel = window.getSelection();
      sel.removeAllRanges();
      sel.addRange(range);
    } else if (typeof document.body.createTextRange != "undefined") {
      var textRange = document.body.createTextRange();
      textRange.moveToElementText(testTitle);
      textRange.collapse(false);
      textRange.select();
    }

    document.addEventListener('keyup', function(ev) {
      if (ev.key == 'Enter' || ev.keyCode === 13 || testTitle.innerHTML.length > 20) { // change limit
        ev.preventDefault();
        testTitle.blur();
        window.getSelection().removeAllRanges();
        testTitle.innerHTML = testTitle.innerHTML.slice(0, -1);
      }
    }, false);

    testTitle.addEventListener('focusout', function() {
      document.removeEventListener('keyup', function() {});
      testTitle.setAttribute('contentEditable', 'false');

      // var titleForm = document.createElement('form'),
      //     titleSubmitInput = document.createElement('input');
      // titleForm.action = "";
      // titleForm.method = "post";
      // titleSubmitInput.value = testTitle.innerHTML;
      // titleForm.submit();

      editBtn.classList.remove('out');
    }, false);
  }, false);

  fab.addEventListener('click', function(event) {
    event.preventDefault();

    // https://www.codexworld.com/how-to/convert-php-array-to-javascript-array/

    var modalWrapper = document.createElement('div');
        modalWrapper.classList.add('modal-wrapper');

    var backdrop = document.createElement('div');
        backdrop.classList.add('backdrop');
        backdrop.addEventListener('click', function(event) {
          event.preventDefault();
          modalWrapper.classList.add('fade-out');
          setTimeout(function() { modalWrapper.parentNode.removeChild(modalWrapper); }, 2000);
        }, false);
    modalWrapper.appendChild(backdrop);

    var modal = document.createElement('div');
        modal.classList.add('modal');

    var close = document.createElement('a');
        close.href = "";
        close.classList.add('close');
        close.appendChild(document.createTextNode('x'));
        close.addEventListener('click', function(event) {
          event.preventDefault();
          modalWrapper.classList.add('fade-out');
          setTimeout(function() { modalWrapper.parentNode.removeChild(modalWrapper); }, 2000);
        }, false);
    modal.appendChild(close);

    var title = document.createElement('h3');
        title.appendChild(document.createTextNode('Cadastro de teste'));
    modal.appendChild(title);

    var form = document.createElement('form');
        form.action = "";
        form.method = "post";

    var inp = document.createElement('input');
        inp.type = "text";
        inp.name = "";

    var inpinp = document.createElement('input');
        inpinp.type = "text";
        inpinp.name = "";

    var inpinpinp = document.createElement('input');
        inpinpinp.type = "text";
        inpinpinp.name = "";

    var inpinpinpinp = document.createElement('input');
        inpinpinpinp.type = "text";
        inpinpinpinp.name = "";

    var submit = document.createElement('button');
        submit.type = "submit";
        submit.appendChild(document.createTextNode('Enviar'));

    form.appendChild(inp);
    form.appendChild(inpinp);
    form.appendChild(inpinpinp);
    form.appendChild(inpinpinpinp);
    form.appendChild(submit);

    modal.appendChild(form);

    modalWrapper.appendChild(modal);

    fab.parentNode.insertBefore(modalWrapper, fab)
  }, false);
</script>
