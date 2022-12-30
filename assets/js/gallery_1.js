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
const footer = document.getElementById('footer')
// For isotope view 
window.onload = () => {
    var $grid = $('#images-container').isotope({
        itemSelector: '#images-container .gallery-img',
        layoutMode: 'masonry',
        masonry: {
            fitWidth: true
        }
    });

    $grid.imagesLoaded().progress( function() {
        $grid.isotope('layout');
      });

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
        var active = document.getElementsByClassName("active-gallery");
        active[0].className = active[0].className.replace(" active-gallery", "");
        this.className += " active-gallery";
        }, false)
    }

    $('.main-container .categories').on('click', '.category', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
        var elems = $grid.isotope('getItemElements')
        console.log(elems)
    })

    const updateActiveSupport = async() => {

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
    
        const switchInactive = async() => {
            var imgActive = document.getElementsByClassName("img-active");
    
            console.log(contentContainer.className)
            if (imgActive.length > 0) {
                imgActive[0].className = imgActive[0].className.replace(" img-active", "");
            }
        }
    
        const showAccordingToPosition = async() => {
            for (let i = 0; i < currentImages.length; i++) {
                if (positionMap[i]) {
                    currentImages[i].classList.add("img-active")
                }
            }
        }
    
        nextImageArrow.addEventListener("click", async function (event) {
            event.stopPropagation()
            console.log('next arrow clicked')
            await switchInactive()
            positionMap.unshift(false)
            positionMap.pop()
            await showAccordingToPosition()
            shifting = 0
            await updateActiveSupport()
        })
    
        lastImageArrow.addEventListener("click", async function (event) {
            event.stopPropagation()
            console.log('prev arrow clicked')
            await switchInactive()
            positionMap.push(false)
            positionMap.shift()
            await showAccordingToPosition()
            await updateActiveSupport()
        })
        console.log('finished!')
    }

    for (let i = 0; i < images.length; i++) {
        images[i].addEventListener("click", async function (event) {
            event.stopPropagation()
            var imgActive = document.getElementsByClassName("img-active");
            if (imgActive.length > 0) {
                imgActive[0].className = imgActive[0].className.replace(" img-active", "");
            }
            // Add inactive to all images
            for (var i = 0; i < allImages.length; i++) {
                allImages[i].classList.add('img-inactive')
            }
            console.log('opened')
            this.className += " img-active";
    
            contentContainer.classList.add("img-selected")
            document.getElementById('footer').style.display = 'none';
            await updateActiveSupport()
        }, false)
    }
}

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
        document.getElementById('footer').style.display = 'block';
    })
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
updateGallery()
// Hell ya baby thats a 180 gallery turn around what a giga chad gallery it looks like now