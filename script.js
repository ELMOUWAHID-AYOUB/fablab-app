// Ouvrir le modal
function openModal(id) {
  document.getElementById("myModal"+id).style.display = "block";
}

// Fermer le modal
function closeModal(id) {
  document.getElementById("myModal"+id).style.display = "none";
}

// Fermer le modal lorsque l'utilisateur clique en dehors du modal
window.onclick = function(event) {
  var modal = document.getElementById("myModal"+id);
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
