// DROPDOWN MENU

let dropdown = document.querySelectorAll(".btn-dropdown");
const dropdownContent = document.querySelectorAll(".content-dropdown");
let dropdownIcon = document.querySelectorAll(".btn-dropdown img");

function dropdownText(index) {
  console.log(dropdownContent);
  dropdownContent[index].classList.toggle("content-dopdown-active");
}
function dropdownRotate(index) {
  console.log(dropdownIcon);
  dropdownIcon[index].classList.toggle("btn-dropdown-active");
}

for (let index = 0; index < dropdown.length; index++) {
  dropdown[index].addEventListener("click", function () {
    console.log([index]);
    dropdownText(index);
    dropdownRotate(index);
  });
}

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

// document
//   .querySelector(".select-wrapper")
//   .addEventListener("click", function () {
//     this.querySelector(".select").classList.toggle("open");
//   });

// for (const option of document.querySelectorAll(".custom-option")) {
//   option.addEventListener("click", function () {
//     if (!this.classList.contains("selected")) {
//       this.parentNode
//         .querySelector(".custom-option.selected")
//         .classList.remove("selected");
//       this.classList.add("selected");
//       this.closest(".select").querySelector(
//         ".select__trigger span"
//       ).textContent = this.textContent;
//     }
//   });
// }

// window.addEventListener("click", function (e) {
//   const select = document.querySelector(".select");
//   if (!select.contains(e.target)) {
//     select.classList.remove("open");
//   }
// });
