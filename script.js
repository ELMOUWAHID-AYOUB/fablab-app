// Ouvrir le modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Fermer le modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

// Fermer le modal lorsque l'utilisateur clique en dehors du modal
window.onclick = function(event) {
  var modal = document.getElementById("myModal");
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
