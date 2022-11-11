document.querySelectorAll(".g-img-container").forEach(function (el) {
  el.addEventListener("click", showPreview);
});

function showPreview() {
  var src = $(this).children("img").attr("src");
  $("#previewImg").children("img").attr("src", src);

  document
    .getElementById("previewContainer")
    .classList.add("preview-container-show");

  document.getElementById("gallery").style.width = "75%";
}

function closePreview() {
  document.getElementById("gallery").style.width = "100%";
  document
    .getElementById("previewContainer")
    .classList.remove("preview-container-show");
}
