<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        const dropdownItems = document.querySelectorAll(".dropdown-item");
        const dropdownToggle = document.getElementById("languageDropdown");
        const flagIcon = dropdownToggle.querySelector(".flag-icon");
        dropdownItems.forEach(function(item, index) {
            item.addEventListener("click", function(event) {
                event.preventDefault();
                const selectedLanguage = item.innerText;
                var selectedFlag = item.querySelector(".flag-icon").className;
                const parts = selectedFlag.split('flag-icon ');
                selectedFlag = parts.join('');
                const newFlagElement = document.createElement("span");
                console.log(index);
                if (index <= 1) {
                    newFlagElement.classList.add("flag-icon", selectedFlag, 'me-1');
                } else {
                    newFlagElement.classList.add("flag-icon", selectedFlag);
                }
                dropdownToggle.innerHTML = '';
                dropdownToggle.appendChild(newFlagElement);
                dropdownToggle.innerHTML += selectedLanguage;
            });
        });
        document.querySelectorAll("#list_lang1 a.dropdown-item, #list_lang2 a.dropdown-item").forEach(function(
            item) {
            item.addEventListener("click", function(event) {
                event.preventDefault();
                var language = item.getAttribute("data-lang")
                console.log(language);
                $.ajax({
                    type: "POST",
                    url: "/ajax/language.php",
                    data: "language=" + language,
                    success: function() {
                        location.reload();
                    }
                })
            });
        });
    });
</script>
<!--   Core JS Files   -->
<script src=".{{ asset('assets') }}/js/core/popper.min.js" type="text/javascript"></script>
<script src=".{{ asset('assets') }}/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src=".{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
<!--  Plugin for TypedJS, full documentation here: https://github.com/mattboldt/typed.js/ -->
<script src=".{{ asset('assets') }}/js/plugins/typedjs.js"></script>
<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src=".{{ asset('assets') }}/js/plugins/countup.min.js"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src=".{{ asset('assets') }}/js/plugins/tilt.min.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src=".{{ asset('assets') }}/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the GlideJS Carousel, full documentation here: http://kenwheeler.github.io/slick/ -->
<script src=".{{ asset('assets') }}/js/plugins/glidejs.min.js" type="text/javascript"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        }
        if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
                countUp1.start();
            } else {
                console.error(countUp1.error);
            }
        }
        if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp2.error) {
                countUp2.start();
            } else {
                console.error(countUp2.error);
            };
        }
    })
</script>

