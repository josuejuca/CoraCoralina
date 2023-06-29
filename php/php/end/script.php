

<script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="../../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>
<script src="../../assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="../../assets/vendor/slick-carousel/slick/slick.min.js"></script>
<script src="../../assets/vendor/multilevel-sliding-mobile-menu/dist/jquery.zeynep.js"></script>
<script src="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="../../assets/js/hs.core.js"></script>
<script src="../../assets/js/components/hs.unfold.js"></script>
<script src="../../assets/js/components/hs.malihu-scrollbar.js"></script>
<script src="../../assets/js/components/hs.header.js"></script>
<script src="../../assets/js/components/hs.slick-carousel.js"></script>
<script src="../../assets/js/components/hs.selectpicker.js"></script>
<script src="../../assets/js/components/hs.show-animation.js"></script>


<script>
    $(document).on('ready', function() {
        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

        // initialization of slick carousel
        $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#header'));

        // initialization of malihu scrollbar
        $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

        // initialization of show animations
        $.HSCore.components.HSShowAnimation.init('.js-animation-link');

        // init zeynepjs
        var zeynep = $('.zeynep').zeynep({
            onClosed: function() {
                // enable main wrapper element clicks on any its children element
                $("body main").attr("style", "");

                console.log('the side menu is closed.');
            },
            onOpened: function() {
                // disable main wrapper element clicks on any its children element
                $("body main").attr("style", "pointer-events: none;");

                console.log('the side menu is opened.');
            }
        });

        // handle zeynep overlay click
        $(".zeynep-overlay").click(function() {
            zeynep.close();
        });

        // open side menu if the button is clicked
        $(".cat-menu").click(function() {
            if ($("html").hasClass("zeynep-opened")) {
                zeynep.close();
            } else {
                zeynep.open();
            }
        });
    });
</script>

<!-- Mascaras -->
<!-- <script src="../../assets/vendor/maskedinput/jquery-1.9.0.min.js"></script> -->
<script src="../../assets/vendor/maskedinput/jquery.maskedinput.js"></script>
<script>
    $(document).ready(function() {
        // Máscara para CPF
        $('#cpf-input').mask('999.999.999-99');

        // Máscara para RG
        $('#rg-input').mask('99.999.999-9');

        // Máscara para número de telefone
        $('#telefone-input').mask('(99) 9 9999-9999');
    });
</script>
<!-- Fim Mascara -->
</body>

</html>