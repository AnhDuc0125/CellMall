function Gallery(path, ...nameFile) {
  let galleryContainer = document.querySelector("#gallery");
  let counter = 0;
  galleryContainer.innerHTML = `<div class="gallery">
                                    <ion-icon name="caret-back-circle-outline" class="prev__btn btn"></ion-icon>
                                    <img src="${path}${nameFile[counter]}" alt="" class="image">
                                    <ion-icon name="caret-forward-circle-outline" class="next__btn btn"></ion-icon>
                                </div>`;

  let btn = galleryContainer.querySelectorAll(".btn");
  let imgElement = galleryContainer.querySelector(".image");

  //automatic
  let auto = setInterval(() => {
    counter++;

    //fix counter > length of nameFile
    if (counter == nameFile.length) {
      counter = 0;
    }

    changeSrc(imgElement, path, nameFile, counter);
  }, 4000);

  btn.forEach((item) => {
    item.onclick = () => {
      if (item.classList.contains("next__btn")) {
        counter++;

        //fix counter > length of nameFile
        if (counter == nameFile.length) {
          counter = 0;
        }

        changeSrc(imgElement, path, nameFile, counter);
      } else {
        counter--;

        //fix counter < 0
        if (counter < 0) {
          counter = nameFile.length - 1;
        }

        changeSrc(imgElement, path, nameFile, counter);
      }

      clearInterval(auto);

      //re declare set auto
      auto = setInterval(() => {
        counter++;

        //fix counter > length of nameFile
        if (counter == nameFile.length) {
          counter = 0;
        }

        changeSrc(imgElement, path, nameFile, counter);
      }, 4000);
    };
  });
}

function changeSrc(imgElement, path, nameFile, counter) {
  imgElement.style.transition = "0.5s";
  imgElement.style.opacity = "0";

  //set src for gallery
  setTimeout(() => {
    imgElement.src = `${path}${nameFile[counter]}`;
    imgElement.style.opacity = "1";
  }, 500);
}
