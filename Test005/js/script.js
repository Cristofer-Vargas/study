var displayPrincipal = document.getElementById('principal-page')
var displayDetalhes = document.getElementById('detalhes-page')


function ClicarDetalhes() {
  displayPrincipal.style.display = "none"
  displayDetalhes.style.display = "block"
}

function ClicarProduto() {
  displayDetalhes.style.display = "none"
  displayPrincipal.style.display = "grid"
}