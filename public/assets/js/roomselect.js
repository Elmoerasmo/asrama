const container = document.querySelector(".room-box");
const beds = container.querySelectorAll(".room-row .bed:not(.booked)");
const submitBtn = document.getElementById("submitBtn");
const bedForm = document.getElementById("bedForm");


// Function to update the selected count
function updateSelectedCount() {
  const selectedBeds = container.querySelectorAll(".bed.selected:not(.booked)");
  const selectedCount = selectedBeds.length;
  console.log(`Selected Beds: ${selectedCount}`);
}

// Bed click event
container.addEventListener("click", (e) => {
  if (e.target.classList.contains("bed") && !e.target.classList.contains("booked")) {
    e.target.classList.toggle("selected");
    updateSelectedCount();
  }
});

// Submit button click event
submitBtn.addEventListener("click", () => {
  const selectedBeds = container.querySelectorAll(".bed.selected:not(.booked)");

  // Extract bed data
  const bedData = Array.from(selectedBeds).map((bed) => parseInt(bed.getAttribute('data-bed-id')));
    

  // Update the hidden input fields with the selected bed data
  const hiddenInputs = bedForm.querySelectorAll('input[name="selected_beds[]"]');
  hiddenInputs.forEach((input, index) => {
    if (index < bedData.length) {
      input.value = bedData[index];
    }
  }); 

  selectedBeds.forEach((bed) => {
    bed.classList.add("booked");
  });

  // Submit the form
  bedForm.submit();
});


