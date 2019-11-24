VANTA.WAVES({
    el: "#intro",
    color: 0x3d454a
})
document.addEventListener("DOMContentLoaded", function() {
    var portfolioSelectors = document.querySelectorAll('#workCategories span');
    function portfolioClickHandler(e) {
        var portfolioItems = document.querySelectorAll('.portfolio-item');
        var targetItems = document.querySelectorAll('.' + e.target.id + '-project');
        for (var i = 0; i < portfolioSelectors.length; i++) {
            portfolioSelectors[i].classList.remove('active');
        }
        for (var i = 0; i < portfolioItems.length; i++) {
            portfolioItems[i].classList.remove('show');
        }
        for (var i = 0; i < targetItems.length; i++) {
            targetItems[i].classList.add('show');
            document.getElementById(e.target.id).classList.add('active');
        }
    }
    for (var i = 0; i < portfolioSelectors.length; i++) {
        portfolioSelectors[i].onclick= portfolioClickHandler;
    }
})