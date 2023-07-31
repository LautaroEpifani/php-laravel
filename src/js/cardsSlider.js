let slideIndexTwo = 0;

let slides_two = document.querySelectorAll(".filter-container");
let dots = document.querySelectorAll(".dot");

let viewPort;
let timeoute = null;

function removeStylesFeatures() {
  let i;
  for (i = 0; i < slides_two.length; i++) {
    slides_two[i].style.display = "none";
    dots[i].style.backgroundColor = "#EDEDED";
  }
}

function addStylesFeatures() {
  let i;
  for (i = 0; i < slides_two.length; i++) {
    slides_two[i].style.display = "block";
  }
}

function autoSlideFeautres() {
  if (window.innerWidth < 1200) {
    removeStylesFeatures();
    if (slideIndexTwo !== slides_two.length - 1) {
      slideIndexTwo = slideIndexTwo + 1;
    } else {
      slideIndexTwo = 0;
    }
    slides_two[slideIndexTwo].style.display = "block";
    dots[slideIndexTwo].style.backgroundColor = "#BEAD8E";
    clearTimeout(timeoute);
    timeoute = setTimeout(autoSlideFeautres, 3000);
  }
}

window.addEventListener("resize", function (event) {
  viewPort = window.innerWidth;
  if (viewPort < 1200) {
    removeStylesFeatures();
    addOnLoad(autoSlideFeautres());
  }
  if (viewPort > 1200) {
    addStylesFeatures();
  }
});

function addOnLoad(myfunc) {
  if (window.addEventListener) window.addEventListener("load", myfunc, false);
  else if (window.attachEvent) window.attachEvent("onload", myfunc);
}
