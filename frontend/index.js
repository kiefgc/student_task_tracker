function showAll() {
  document.getElementById("all").style.display = "block";
  document.getElementById("pending").style.display = "none";
  document.getElementById("inprogress").style.display = "none";
  document.getElementById("completed").style.display = "none";
}

function showPending() {
  document.getElementById("all").style.display = "none";
  document.getElementById("pending").style.display = "block";
  document.getElementById("inprogress").style.display = "none";
  document.getElementById("completed").style.display = "none";
}

function showInProgress() {
  document.getElementById("all").style.display = "none";
  document.getElementById("pending").style.display = "none";
  document.getElementById("inprogress").style.display = "block";
  document.getElementById("completed").style.display = "none";
}

function showCompleted() {
  document.getElementById("all").style.display = "none";
  document.getElementById("pending").style.display = "none";
  document.getElementById("inprogress").style.display = "none";
  document.getElementById("completed").style.display = "block";
}

document.addEventListener("DOMContentLoaded", () => {
  const createTaskButton = document.querySelector(".create-task-button");
  createTaskButton.addEventListener("click", showPopup);
});

function showPopup() {
  document.getElementById("taskPopup").style.display = "flex";
}

function closePopup() {
  document.getElementById("taskPopup").style.display = "none";
}
