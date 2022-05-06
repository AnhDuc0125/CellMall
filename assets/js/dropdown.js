let dropDownElements = document.querySelectorAll("div.filter__item");

dropDownElements.forEach((item, index) => {
  item.onclick = () => {
    if (item.classList.contains("active")) {
      item.classList.remove("active");
      console.log(1);
    } else {
      item.classList.add("active");
      for (i = 0; i < dropDownElements.length; i++) {
        if (i == index) {
          continue;
        }
        dropDownElements[i].classList.remove("active");
      }
    }
  };
});
