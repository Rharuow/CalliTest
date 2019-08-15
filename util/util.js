var $ = function(selector) {
  var sel = document.querySelectorAll(selector);
  sel.prototype.test = "teste";
  return sel.length > 1 ? sel : sel[0];
}