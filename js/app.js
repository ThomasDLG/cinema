// ACCORDION

const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute("aria-expanded");

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute("aria-expanded", "false");
  }

  if (itemToggle == "false") {
    this.setAttribute("aria-expanded", "true");
  }
}

items.forEach((item) => item.addEventListener("click", toggleAccordion));

// RADIO DATE BUTTON

// let radioDate = document.querySelectorAll(".radio-date input[type=radio]");
// let radioText = document.querySelector(".radio-text");

// radioDate.array.forEach(button => {
//   if (button.checked) {
//     radioText.classList.add("text-light")
//   } else {
//     radioText.classList.add("text-dark")
//   }
// });

// SEARCHING POPUP

let search = document.getElementById("searching");
let popup = document.querySelector(".searching-popup");
let closed = document.querySelector(".close-searching-popup");

search.addEventListener("click", function (evt) {
  popup.classList.add("search-open");
});

closed.addEventListener("click", function (evt) {
  popup.classList.remove("search-open");
});

// PLUS MENU

plusIcon = document.querySelector(".plusbtn");
plusMenu = document.getElementById("plus");

plusIcon.addEventListener("click", function (evt) {
  plusMenu.classList.toggle("plus-show");
});

// SELECT GENRE

// let selected = (document.getElementById(".select__trigger span").innerHTML =
//   "Filtrer par genres");
let select = document.querySelector(".select");
let optionContainer = document.querySelector(".option-container");
let option = document.querySelector(".option-select");

select.addEventListener("click", function () {
  console.log("click");
  optionContainer.classList.toggle("option-active");
});



