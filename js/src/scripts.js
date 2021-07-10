document.addEventListener("DOMContentLoaded", function() {
    AOS.init();

    // Change AOS data for mobile
    var itemImages = document.querySelectorAll('.portfolio-item .img');
    var itemMeta = document.querySelectorAll('.portfolio-item .meta');
    function setMobileAosData() {
        for (var i = 0; i < itemImages.length; i++) {
            itemImages[i].setAttribute('data-aos', 'fade-up')
        }
        for (var i = 0; i < itemMeta.length; i++) {
            itemMeta[i].setAttribute('data-aos', 'fade-in')
        }
    }
    function setDesktopAosData() {
        for (var i = 0; i < itemImages.length; i++) {
            itemImages[i].setAttribute('data-aos', 'fade-right')
        }
        for (var i = 0; i < itemMeta.length; i++) {
            itemMeta[i].setAttribute('data-aos', 'fade-left')
        }
    }
    if (window.innerWidth <= 800) {
        setMobileAosData()
    }
    window.addEventListener("resize", function () {
        if (window.innerWidth <= 800) {
            setMobileAosData()
        } else {
            setDesktopAosData()
        }
    });
})