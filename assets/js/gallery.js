document.querySelectorAll(".g-img-container").forEach(function (el) {
  el.addEventListener("click", showPreview);
});

var curImg;

function showPreview() {
  curImg && curImg.css("border", "none");

  // only show if this element is visible
  if ($(this).css("display") !== "none") {
    curImg = $(this).children("img");
    var src = curImg.attr("src");
    var src = $(this).children("img").attr("src");
    $("#previewImg").children("img").attr("src", src);

    curImg.css("border", "3px solid #896eff");

    document
      .getElementById("previewContainer")
      .classList.add("preview-container-show");

    document.getElementById("gallery").style.width = "75%";
  }
  // else hide the preview
  else {
    document
      .getElementById("previewContainer")
      .classList.remove("preview-container-show");

    document.getElementById("gallery").style.width = "100%";
  }
}

function prevImg() {
  var prev = curImg.parent().parent().prev().children();
  var index = curImg.parent().index();
  if (prev.length) {
    showPreview.call(prev[index]);
  } else {
    var lastRow = curImg.parent().parent().parent().children().last();
    var lastImg = lastRow.children();
    index = curImg.parent().index();
    if (lastImg[index - 1]) showPreview.call(lastImg[index - 1]);
  }
}

function nextImg() {
  var next = curImg.parent().parent().next().children();
  var index = curImg.parent().index();
  if (next.length) {
    showPreview.call(next[index]);
  } else {
    var firstRow = curImg.parent().parent().parent().children().first();
    var firstImg = firstRow.children();
    index = curImg.parent().index();
    if (firstImg[index + 1]) showPreview.call(firstImg[index + 1]);
  }
}

function closePreview() {
  document.getElementById("gallery").style.width = "100%";
  curImg.css("border", "none");
  document
    .getElementById("previewContainer")
    .classList.remove("preview-container-show");
}
