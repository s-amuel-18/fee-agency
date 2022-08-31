    <!-- pie de pagina -->
    <Footer>


        <div class="container py-5">
            <div class="row">
                <div class="col-12 d-block d-lg-none text-center py-3"><a class="" href="#home"><img width="200" src="./assets/Logos/Recurso 8.png" alt="Agency Fee logo"></a>
                </div>

                <div class="col-4 order-2 order-lg-1 py-3">
                    <a class="d-none d-lg-block pb-2 " href="#home"><img width="150" src="./assets/Logos/Recurso 8.png" alt="Agency Fee logo"></a>
                    <p class=" text-muted pt-5 pt-lg-4 mt-1 "><small>All Reserved Desing 2020</small> </p>
                </div>

                <div class="col-4 order-1 order-lg-2">
                    <h6 class="font-weight-bold py-3">Contact</h6>
                    <p class=" text-muted py-2"><small>info@agencyfree.com</small></p>
                    <div class=" d-none d-lg-flex justify-content-between text-muted footer-link">
                        <a class="text-muted" href="#"><small>ABOUT</small></a>
                        <a class="text-muted" href="#"><small>SERVICE</small></a>
                        <a class="text-muted" href="#"><small>GALLERIES</small> </a>
                        <a class="text-muted" href="#"><small>CONTACT</small></a>
                    </div>
                </div>

                <div class="col-4 order-3">
                    <h6 class="font-weight-bold py-3">Social Media</h6>
                    <div class="justify-items-center align-items-center d-lg-flex py-2">
                        <a href="" class="text-center"><img class="social-link" src="./assets/images/facebook.svg" alt=""></a>
                        <a href="" class="text-center  mx-0 mx-lg-1"><img class="social-link" src="./assets/images/twitter.svg" alt=""></a>
                        <a href="" class="text-center"><img class="social-link" src="./assets/images/instagram.svg" alt=""></a>
                        <a href="" class="text-center mx-0 mx-lg-1"><img class="social-link" src="./assets/images/google-plus.svg" alt=""></a>
                    </div>
                    <span class="text-muted mt-3 d-none d-lg-block"> Start Your New Experience With Us</span>
                </div>

            </div>
        </div>
    </Footer>

    <!-- Modal pop-up Cookies -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-xl " style="width:90%">
            <div class="modal-content">

                <div class="bg-primary w-100">
                    <div class="container  d-flex align-items-center text-white py-3">
                        <i class="fa-solid fa-3x fa-cookie-bite pr-3"></i>
                        <h5>Esta web utiliza cookies propias para facilitar la navegación y cookies de terceros para obtener
                            estadísticas de uso y satisfacción.</h5>
                        <div class=""><a name="" data-dismiss="modal" id="" class="btn btn-light text-secondary" href="#" role="button">
                                Aceptar</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- scripts -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./assets/js/custom-file-input.js"></script>
    <script src="./assets/lib/jquery/jquery-3.6.0.min.js"></script>
    <script src="./assets/lib/bootstrap-4/js/bootstrap.bundle.min.js"></script>
    <!-- intl-tel-input -->
    <!-- <input type="tel" id="phone"> -->
    <script src="./assets/lib/intl-tel-input/js/intlTelInput.min.js"></script>
    <script src="./assets/lib/FitText.js-1.2.0/jquery.fittext.js"></script>
    <!-- Google Translate -->
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script src="./assets/lib/google-translate.js"></script>

    <script>
        let activeSelector = document.getElementsByClassName('flag_link')

        for (var i = 0; i < activeSelector.length; i++) {
            activeSelector[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active_selector");

                if (current.length > 0) {
                    current[0].className = current[0].className.replace(" active_selector", "");
                }

                this.className += " active_selector";
            });
        }
        // for (let i = 0; i < activeSelector.length; i++) {
        //     activeSelector[i].addEventListener("click", function() {
        //         let current = document.getElementsByClassName("active_selector");
        //         current[0].className = current[0].className.replace(" active_selector", "");
        //         this.className += "active_selector";
        //     });
        // }
    </script>
    <script type="text/javascript">
        $(".fittext1").fitText(3);
        $(".fittext2").fitText(1.5);
        $(".fittext3").fitText(2.2, {
            minFontSize: '20px',
            maxFontSize: '30px'
        });
        $(".fittext4").fitText(2.2, {
            minFontSize: '45px',
            maxFontSize: '100px'
        });
    </script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {

        });
    </script>
    <script>
        $(document).ready(function() {
            // $("#myModal").modal('show');

        });
    </script>
    <!-- end scripts -->
</body>

</html>