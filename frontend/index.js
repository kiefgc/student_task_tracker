function showAll() {
  document.getElementById("all").style.display = "block";
  document.getElementById("pending").style.display = "none";
  document.getElementById("inprogress").style.display = "none";
}

function showPending() {
  document.getElementById("all").style.display = "none";
  document.getElementById("pending").style.display = "block";
  document.getElementById("inprogress").style.display = "none";
}

function showInProgress() {
  document.getElementById("all").style.display = "none";
  document.getElementById("pending").style.display = "none";
  document.getElementById("inprogress").style.display = "block";
}
