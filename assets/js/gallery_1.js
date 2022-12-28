$(function() {
    $('.gallery-img').lazy();
});

const galleryContainer = document.getElementById("images-container")
const images = galleryContainer.getElementsByClassName("gallery-img")
const allImages = document.getElementsByClassName("gallery-img")
const categoryContainer = document.getElementById("categories")
const categories = categoryContainer.getElementsByClassName("category")
const mainContainer = document.getElementById("main-container")

const crossButton = document.getElementsByClassName("cross-button")
const contentContainer = document.getElementById("content-container")

const nextImageArrow = document.getElementById("next-image-arrow")
const lastImageArrow = document.getElementById("last-image-arrow")

const updateActiveSupport = () => {
    console.log('ran')
    const currentImages = document.getElementsByClassName("show")
    const positionMap = []
    for (let i = 0; i < currentImages.length; i++) {
        if (currentImages[i].classList.contains('img-active')) {
            positionMap.push(true)
        }
        positionMap.push(false)
    }
    positionMap.pop()
    console.log(positionMap)

    if (positionMap[0] === true) {
        lastImageArrow.classList.add('hidden')
    } else {
        lastImageArrow.classList.remove('hidden')
    }

    if (positionMap[positionMap.length - 1] === true) {
        nextImageArrow.classList.add('hidden')
    } else {
        nextImageArrow.classList.remove('hidden')
    }

    const switchInactive = () => {
        // var imgInactive = document.getElementsByClassName("img-inactive")
        var imgActive = document.getElementsByClassName("img-active");

        console.log(contentContainer.className)
        // remove active-image class from active image
        if (imgActive.length > 0) {
            imgActive[0].className = imgActive[0].className.replace(" img-active", "");
        }
        // while (imgInactive.length) {
        //     imgInactive[0].className = imgInactive[0].className.replace(" img-inactive", "");
        // }
    }

    const showAccordingToPosition = () => {
        for (let i = 0; i < currentImages.length; i++) {
            if (positionMap[i]) {
                currentImages[i].classList.add("img-active")
            }
        }
    }

    nextImageArrow.addEventListener("click", function (event) {
        event.stopPropagation()
        console.log('next arrow clicked')
        switchInactive()
        positionMap.unshift(false)
        positionMap.pop()
        showAccordingToPosition()
        updateActiveSupport()
    })

    lastImageArrow.addEventListener("click", function (event) {
        event.stopPropagation()
        console.log('prev arrow clicked')
        switchInactive()
        positionMap.push(false)
        positionMap.shift()
        showAccordingToPosition()
        updateActiveSupport()
    })

    console.log('finished!')
}

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
        var imgInactive = document.getElementsByClassName("img-inactive")
        var imgActive = document.getElementsByClassName("img-active");
    
        contentContainer.classList.remove('img-selected')
    
        if (imgActive.length > 0) {
            imgActive[0].className = imgActive[0].className.replace(" img-active", "");
        }
        while (imgInactive.length) {
            imgInactive[0].className = imgInactive[0].className.replace(" img-inactive", "");
        }
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

        contentContainer.classList.add("img-selected")

        updateActiveSupport()
    }, false)
}
// mainContainer.addEventListener("click", function (event) {fullInactive(event)})
for (let i = 0; i < crossButton.length; i++) {
    crossButton[i].addEventListener("click", function (event) {
        event.stopPropagation()
        var imgInactive = document.getElementsByClassName("img-inactive")
        var imgActive = document.getElementsByClassName("img-active");
    
        contentContainer.classList.remove('img-selected')
    
        if (imgActive.length > 0) {
            imgActive[0].className = imgActive[0].className.replace(" img-active", "");
        }
        while (imgInactive.length) {
            imgInactive[0].className = imgInactive[0].className.replace(" img-inactive", "");
        }
    })
}

// run one time 
updateGallery()