let dropElements = document.querySelectorAll("div.filter__item");
let dropDownElements = document.querySelectorAll("div.filter__dropdown");

dropElements.forEach((item, index) => {
  item.onclick = (e) => {
    for (i = 0; i < dropDownElements.length; i++) {
      if (i == index) {
        continue;
      }
      dropDownElements[i].classList.remove("active");
    }

    let dropdown = item.querySelector(".filter__dropdown");
    dropdown.classList.toggle("active");
  };
});
