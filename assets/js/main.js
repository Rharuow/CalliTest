// carousel
var slideIndex = 0,
    prev = document.querySelector('.prev'),
    next = document.querySelector('.next'),
    slides = document.querySelectorAll(".carousel-item"),
    slidesLength = slides.length;

if (slides.length > 0) {
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
}

//

// research-dashboard

var overlay = document.querySelector('.overlay'),
    fab = document.querySelector('a.fab'),
    editBtn = document.querySelector('.edit-btn'),
    cardAnchor = document.querySelector('.researches > .research-card > .card-actions > a'),
    editBackBtn = document.querySelector('.edit-form > .back-button'),
    editSendBtn = document.querySelector('.edit-form > .send-btn'),
    addSubmitBtn = document.querySelector('.add-new-card > form > button');

if (cardAnchor !== undefined && cardAnchor !== null) {
  cardAnchor.addEventListener('click', function(event) {
    event.preventDefault();
  
    var researchBody = document.querySelector('.research-body'),
        cardAction = document.querySelector('.card-actions'),
        editForm = document.querySelector('.edit-form');
  
    researchBody.classList.add('slide');
    cardAction.classList.add('slide');
    editForm.classList.add('slide');
  });
}

if (editBackBtn !== undefined && editBackBtn !== null && editSendBtn !== undefined && editSendBtn !== null) {
  [editBackBtn, editSendBtn].forEach(function(btn) {
    btn.addEventListener('click', function(event) {
      event.preventDefault();
  
      var researchBody = document.querySelector('.research-body'),
        cardAction = document.querySelector('.card-actions'),
        editForm = document.querySelector('.edit-form');
  
      researchBody.classList.remove('slide');
      cardAction.classList.remove('slide');
      editForm.classList.remove('slide');
    }, false);
  });
}

if (overlay !== undefined && overlay !== null) {
  overlay.addEventListener('click', function(event) {
    event.preventDefault();
    overlay.classList.add("fade");
    setTimeout(function() {
      overlay.parentNode.removeChild(overlay);
    }, 1100);
  }, false);
}

if (addSubmitBtn !== undefined && addSubmitBtn !== null) {
  addSubmitBtn.addEventListener('click', function(event) {
    event.preventDefault();
  
    //post with xmlhttprequest (create util (ajax))
  
    // create a new card with the new data
  
  });
}

if (editBtn !== undefined && editBtn !== null) {
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
}

if (fab !== undefined && fab !== null) {
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
          setTimeout(function() {
            modalWrapper.parentNode.removeChild(modalWrapper);
          }, 2000);
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
}
