$(function() {
    $('.gallery-img').lazy();
});

const galleryContainer = document.getElementById("images-container")
const images = galleryContainer.getElementsByClassName("gallery-img")
const allImages = document.getElementsByClassName("gallery-img")
const categoryContainer = document.getElementById("categories")
const categories = categoryContainer.getElementsByClassName("category")
const mainContainer = document.getElementById("main-container")

const updateGallery = (category = "") => {
    if (category === "") {
        // show all images
        for (var i = 0; i < allImages.length; i++) {
            allImages[i].classList.add('show')
        }
        return
    }
    // Remove show from all images
    for (var i = 0; i < allImages.length; i++) {
        allImages[i].classList.remove('show')
    }
    var categoryImages = document.getElementsByClassName(category)
    // Add show to images of category
    for (var i = 0; i < categoryImages.length; i++) {
        categoryImages[i].classList.add("show")
    }
    return
}
// Start here : Category ClassName Management
for (var i = 0; i < categories.length; i++) {
    categories[i].addEventListener("click", function () {
        // get active gallery from other elements
        var active = document.getElementsByClassName("active-gallery");
        // remove active gallery class from other elements 
        active[0].className = active[0].className.replace(" active-gallery", "");
        // set active gallery class on clicked element 
        this.className += " active-gallery";
    }, false)
}
for (let i = 0; i < images.length; i++) {
    images[i].addEventListener("click", function (event) {
        event.stopPropagation()
        var imgActive = document.getElementsByClassName("img-active");
        if (imgActive.length > 0) {
            imgActive[0].className = imgActive[0].className.replace(" img-active", "");
        }
        // Add inactive to all images
        for (var i = 0; i < allImages.length; i++) {
            allImages[i].classList.add('img-inactive')
        }

        // galleryContainer.insertBefore(img_active[0], galleryContainer.firstChild)
        console.log('opened')
        // img active takes priority over inactive as it's assigned after
        this.className += " img-active";
    }, false)
}
mainContainer.addEventListener("click", function () {
    var imgInactive = document.getElementsByClassName("img-inactive")
    var imgActive = document.getElementsByClassName("img-active");
    // remove active image from active image
    if (imgActive.length > 0) {
        imgActive[0].className = imgActive[0].className.replace(" img-active", "");
    }
    while (imgInactive.length) {
        imgInactive[0].className = imgInactive[0].className.replace(" img-inactive", "");
    }
})
// run one time 
updateGallery()