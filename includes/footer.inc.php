<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script type="text/javascript">
    const POSTERS_PER_ROW = 12;
    const RING_RADIUS = 200;

    function setup_posters(row) {
        var posterAngle = 360 / POSTERS_PER_ROW;
        for (var i = 0; i < POSTERS_PER_ROW; i++) {
            var poster = document.createElement('div');
            poster.className = 'poster';
            // compute and assign the transform for this poster
            var transform = 'rotateY(' + (posterAngle * i) + 'deg) translateZ(' + RING_RADIUS + 'px)';
            poster.style.webkitTransform = transform;
            // setup the number to show inside the poster
            var content = poster.appendChild(document.createElement('img'));
            content.setAttribute("src", "./assets/images/apple.png");
            content.className = "small-size";
            // add the poster to the row
            row.appendChild(poster);
        }

    }

    function init() {
        setup_posters(document.getElementById('ring-1'));
        setup_posters(document.getElementById('ring-2'));
        setup_posters(document.getElementById('ring-3'));
        setup_posters(document.getElementById('ring-4'));
        setup_posters(document.getElementById('ring-5'));
    }

    // call init once the document is fully loaded
    window.addEventListener('load', init, false);
</script>
<script src="../assets/js/wow.min.js"></script>
<script>
    
    // new WOW().init();
    const swiper = new Swiper('.swiper', {
  // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
    });
</script>
</body>

</html>