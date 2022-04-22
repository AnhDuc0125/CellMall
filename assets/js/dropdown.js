let dropElements = document.querySelectorAll("div.filter__item");
let dropDownElements = document.querySelectorAll("div.filter__dropdown");

dropElements.forEach((item) => {
  item.onclick = (e) => {
    let dropdown = item.querySelector(".filter__dropdown");
    dropdown.classList.toggle("active");
  };
});
