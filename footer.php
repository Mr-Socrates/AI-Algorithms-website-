<!DOCTYPE html>
<html lang="en">
<body>
    <footer class="footer text-center">
        <!--<FREELANCE FOOTER-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h5 class="text-uppercase mb-3">Development of Internet Systems and Applications</h5>
                    <p class="mb-2">Is a bachelor program that focuses on the design and development of systems & dynamic applications where a significant part of them is running server-side. Goal is also to understand the methods for developing Web 2.0+ as well as advanced architectures for the development of Internet based systems and apps.</p>
                    <p class="mb-4"> <a href="https://sites.google.com/site/adiseteithe/">Course detail online</a> &nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="https://www.it.teithe.gr/">Department of Informatics</a>
                    </p>
                    <h6 class="text-uppercase mb-2">Project documentation</h6>
                    <p class=" mb-0">
                        <a href="https://github.com/Mr-Socrates/AI-Algorithms-website-/blob/master/README.md"
                           target="_blank">Technical </a>
                        &nbsp;&nbsp;|&nbsp;&nbsp; <a href="https://app.asana.com/0/880550799150518/880550799150518"
                                                     target="_blank">Work</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <p class="mb-2">2018 <span class="copyleft">&copy;</span> Panu Reijonen, Dan Šilhavý & Inez Sprilaska &nbsp;|&nbsp; <a href="http://www.teithe.gr" target="_blank">A.T.E.I.T.H.</a>
        </div>
    </div>
    <script> // FIX for Modal Close and Open
        $('body').on('click', '#loginModal', function (event) {
            // event.preventDefault();
            if (!$(event.target).closest('.form').length) {
                if ($('#loginModal').is(":visible")) {
                    console.log("jQuery Close Modal :: Click outside of modal");
                    $('#loginModal').hide();
                    $('.modal-backdrop.show').hide();
                }
            }
        });
        $('body').on('click', '.navbar-login', function (event) {
            if (!$(event.target).closest('.form').length) {
                if ($('#loginModal').is(":hidden")) {
                    console.log("jQuery Open Modal");
                    $('#loginModal').show();
                    $('.modal-backdrop.show').show();
                }
            }
        });
    </script>
</body>
</html>