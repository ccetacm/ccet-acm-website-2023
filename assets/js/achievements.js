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
