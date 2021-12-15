var slideIndex = 1;

var myTimer;

var slideshowContainer;

// NEXT AND PREVIOUS CONTROL
function plusSlides(n) {
    clearInterval(myTimer);
    if (n < 0) {
        showSlides(slideIndex -= 1);
    } else {
        showSlides(slideIndex += 1);
    }

    //COMMENT OUT THE LINES BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME

    if (n === -1) {
        myTimer = setInterval(function () { plusSlides(n + 2) }, 4000);
    } else {
        myTimer = setInterval(function () { plusSlides(n + 1) }, 4000);
    }
};

//Controls the current slide and resets interval if needed
function currentSlide(n) {
    clearInterval(myTimer);
    myTimer = setInterval(function () { plusSlides(n + 1) }, 4000);
    showSlides(slideIndex = n);
};

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
};

pause = () => {
    clearInterval(myTimer);
};

resume = () => {
    clearInterval(myTimer);
    myTimer = setInterval(function () { plusSlides(slideIndex) }, 4000);
};

window.addEventListener('load', () => {
    let search_bar_icon = document.querySelector('#search_icon')
    let search_bar_container = document.querySelector('#search_form_container')
    let mobile_logo_container = document.querySelector('#mobile_logo_container')
    let search_form = document.querySelector('#search_form')
    search_bar_icon.onclick = () => {
        search_bar_container.classList.remove('d-none')
        search_bar_container.classList.add('row')
        mobile_logo_container.classList.add('d-none')
        search_form.focus()
    };
    search_form.onblur = () => {
        search_bar_container.classList.add('d-none')
        search_bar_container.classList.remove('row')
        mobile_logo_container.classList.remove('d-none')
    };
    showSlides(slideIndex);
    myTimer = setInterval(function () { plusSlides(1) }, 4000);

    //COMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
    slideshowContainer = document.getElementsByClassName('slideshow-inner')[0];

    //UNCOMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
    // slideshowContainer = document.getElementsByClassName('slideshow-container')[0];

    slideshowContainer.addEventListener('mouseenter', pause)
    slideshowContainer.addEventListener('mouseleave', resume)
})

let social_buttons = document.querySelectorAll('[social-link]')
let social_container = document.querySelector('.social-container')

if (social_container != null) {
    window.addEventListener('scroll', () => {
        var social_container_parent = social_container.parentElement
        if (social_container_parent.offsetTop - 700 < window.scrollY) {
            social_container.classList.remove('sticky')
        } else {
            social_container.classList.add('sticky')
        }
    })
}

social_buttons.forEach((e, i) => {
    social_buttons[i].onclick = () => {
        console.log(i)
        let url = e.getAttribute('social-link')
        openNewTab({
            url: url,
            params: `scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,
width=0,height=0,left=-1000,top=-1000`
        })
    }
})

function openNewTab({
    url = '',
    title = '',
    params = ''
}) {
    window.open(url, title, params);
}