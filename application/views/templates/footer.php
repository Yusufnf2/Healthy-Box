<footer class="p-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <p>Copyright @ 2023 | Healthy Box</p>
                </div>
                
            </div>
        </div>
    </footer>

    

    <script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $(window).on("scroll", function(){
                if ( $(window).scrollTop() > 30){
                    $(".sticky-top").addClass("chanco");
                }
                else {
                    $(".sticky-top").removeClass("chanco");
                }
        });
    });
    </script>
    
</body>

</html>