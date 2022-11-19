document.querySelectorAll(".page-link").forEach(function (el) {
  if (el.innerHTML.match(/^[0-9]+$/)) {
    el.addEventListener("click", getSelectedPage);
  }
});

function getSelectedPage() {
  const nextPageNum = Number($(this).text());
  const nextPage = "ach-" + nextPageNum;

  if (nextPageNum) {
    document.querySelectorAll(".ach-container").forEach((e) => {
      e.classList.add("hidden");
    });

    document.querySelectorAll(".page-item").forEach(function (el) {
      el.children[0].innerHTML == nextPageNum
        ? el.classList.add("active")
        : el.classList.remove("active");
    });

    document.getElementById(nextPage).classList.remove("hidden");
    document
      .getElementById(nextPage)
      .parentElement.parentElement.scrollIntoView();
  }
}

function getPreviousPage() {
  const curPageNum = $(".page-item.active > button").text();

  if (curPageNum > 1) {
    document.querySelectorAll(".ach-container").forEach((e) => {
      e.classList.add("hidden");
    });

    document
      .getElementById("ach-" + Number(curPageNum - 1))
      .classList.remove("hidden");
    document
      .getElementById("ach-" + Number(curPageNum - 1))
      .parentElement.parentElement.scrollIntoView();

    document.querySelectorAll(".page-item").forEach(function (el) {
      el.children[0].innerHTML == curPageNum - 1
        ? el.classList.add("active")
        : el.classList.remove("active");
    });
  }
}

function getNextPage() {
  const curPageNum = $(".page-item.active > button").text();
  const lastPageNum = $(".page-item").length - 2;

  if (curPageNum < lastPageNum) {
    document.querySelectorAll(".ach-container").forEach((e) => {
      e.classList.add("hidden");
    });

    console.log("ach-" + Number(Number(curPageNum) + 1));
    document
      .getElementById("ach-" + Number(Number(curPageNum) + 1))
      .classList.remove("hidden");
    document
      .getElementById("ach-" + Number(Number(curPageNum) + 1))
      .parentElement.parentElement.scrollIntoView();

    document.querySelectorAll(".page-item").forEach(function (el) {
      el.children[0].innerHTML == Number(Number(curPageNum) + 1)
        ? el.classList.add("active")
        : el.classList.remove("active");
    });
  }
}

// ======================== READ MORE BUTTONS=======================

function myFunction1() {
  var dots = document.getElementById("dots1");
  var moreText = document.getElementById("more1");
  var btnText = document.getElementById("myBtn1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}

function myFunction2() {
  var dots = document.getElementById("dots2");
  var moreText = document.getElementById("more2");
  var btnText = document.getElementById("myBtn2");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}

function myFunction3() {
  var dots = document.getElementById("dots3");
  var moreText = document.getElementById("more3");
  var btnText = document.getElementById("myBtn3");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}

function myFunction4() {
  var dots = document.getElementById("dots4");
  var moreText = document.getElementById("more4");
  var btnText = document.getElementById("myBtn4");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}

function myFunction5() {
  var dots = document.getElementById("dots5");
  var moreText = document.getElementById("more5");
  var btnText = document.getElementById("myBtn5");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}

function myFunction6() {
  var dots = document.getElementById("dots6");
  var moreText = document.getElementById("more6");
  var btnText = document.getElementById("myBtn6");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}

function myFunction7() {
  var dots = document.getElementById("dots7");
  var moreText = document.getElementById("more7");
  var btnText = document.getElementById("myBtn7");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}

function myFunction8() {
  var dots = document.getElementById("dots8");
  var moreText = document.getElementById("more8");
  var btnText = document.getElementById("myBtn8");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}

function myFunction9() {
  var dots = document.getElementById("dots9");
  var moreText = document.getElementById("more9");
  var btnText = document.getElementById("myBtn9");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}