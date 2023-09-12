const container = document.querySelector(".room-container");
const rooms = document.querySelectorAll(".room-row .room:not(.sold)");
const count = document.getElementById("count");
const total = document.getElementById("total");
const movieSelect = document.getElementById("movie");

populateUI();

let ticketPrice = +movieSelect.value;

// Save selected movie index and price
// function setMovieData(movieIndex, moviePrice) {
  localStorage.setItem("selectedMovieIndex", movieIndex);
//   localStorage.setItem("selectedMoviePrice", moviePrice);
// }

// Update total and count
// function updateSelectedCount() {
//   const selectedRooms = document.querySelectorAll(".room-row .room.selected");

//   const roomsIndex = [...selectedRooms].map((room) => [...rooms].indexOf(room));

//   localStorage.setItem("selectedRooms", JSON.stringify(roomsIndex));

//   const selectedRoomsCount = selectedRooms.length;

//   count.innerText = selectedRoomsCount;
//   total.innerText = selectedRoomsCount * ticketPrice;

//   setMovieData(movieSelect.selectedIndex, movieSelect.value);
// }


// Get data from localstorage and populate UI
function populateUI() {
  const selectedRooms = JSON.parse(localStorage.getItem("selectedRooms"));

  if (selectedRooms !== null && selectedRooms.length > 0) {
    rooms.forEach((room, index) => {
      if (selectedRooms.indexOf(index) > -1) {
        console.log(room.classList.add("selected"));
      }
    });
  }

  const selectedMovieIndex = localStorage.getItem("selectedMovieIndex");

  if (selectedMovieIndex !== null) {
    movieSelect.selectedIndex = selectedMovieIndex;
    console.log(selectedMovieIndex)
  }
}
console.log(populateUI())
// Movie select event
// movieSelect.addEventListener("change", (e) => {
//   ticketPrice = +e.target.value;
//   setMovieData(e.target.selectedIndex, e.target.value);
//   updateSelectedCount();
// });

// Seat click event
container.addEventListener("click", (e) => {
  if (
    e.target.classList.contains("room") &&
    !e.target.classList.contains("sold")
  ) {
    e.target.classList.toggle("selected");

    updateSelectedCount();
  }
});

// Initial count and total set
updateSelectedCount();
