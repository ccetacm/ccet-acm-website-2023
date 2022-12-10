var $cell = $(".c-card");

//open and close card when clicked on card
$cell.find(".js-expander").click(function () {
  var $thisCell = $(this).closest(".c-card");

  if ($thisCell.hasClass("is-collapsed")) {
    $cell
      .not($thisCell)
      .removeClass("is-expanded")
      .addClass("is-collapsed")
      .addClass("is-inactive");

    setTimeout(function () {
      $thisCell.removeClass("is-collapsed").addClass("is-expanded");
      // scroll to nearest c-card__expander element
      $("html, body").animate(
        {
          scrollTop: $thisCell.find(".c-card__expander").offset().top - 200,
        },
        500
      );
    }, 300);

    if ($cell.not($thisCell).hasClass("is-inactive")) {
      $cell.not($thisCell).removeClass("is-inactive");
    } else {
      $cell.not($thisCell).addClass("is-inactive");
    }
  } else {
    $thisCell.removeClass("is-expanded").addClass("is-collapsed");
    $cell.not($thisCell).removeClass("is-inactive");
  }
});

//close card when click on cross
$cell.find(".js-collapser").click(function () {
  var $thisCell = $(this).closest(".c-card");

  $thisCell.removeClass("is-expanded").addClass("is-collapsed");
  $cell.not($thisCell).removeClass("is-inactive");
});