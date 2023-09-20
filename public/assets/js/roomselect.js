const container = document.querySelector(".room-box");
const rooms = document.querySelectorAll(".room-row .bed:not(.sold)");

// bed click event
container.addEventListener("click", (e) => {
  if (
    e.target.classList.contains("bed") &&
    !e.target.classList.contains("sold")
  ) {
    e.target.classList.toggle("selected");

    updateSelectedCount();
  }
});

// Initial count and total set
updateSelectedCount();
