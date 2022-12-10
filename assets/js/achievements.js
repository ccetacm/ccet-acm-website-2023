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

// ================READ MORE BUTTONS=================

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

// make single function for all read more buttons with class read-more-btn using event listener
document.querySelectorAll(".read-more-btn").forEach(function (el) {
  el.addEventListener("click", (e) => {
    const id =
      Array.from(document.querySelectorAll(".read-more-btn")).indexOf(
        e.target
      ) + 1;
    const dots = document.getElementById(`dots${id}`);
    const moreText = document.getElementById(`more${id}`);

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      e.target.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      e.target.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  });
});