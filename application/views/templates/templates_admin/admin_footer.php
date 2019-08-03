</section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/js/ckeditor.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/dashgum/theme/assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/dashgum/theme/assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url()?>assets/dashgum/theme/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url()?>assets/dashgum/theme/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url()?>assets/dashgum/theme/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url()?>assets/dashgum/theme/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/dashgum/theme/assets/js/jquery.sparkline.js"></script>

    <script src="<?php echo base_url()?>assets/page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url()?>assets/dashgum/theme/assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url()?>assets/dashgum/theme/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/dashgum/theme/assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url()?>assets/dashgum/theme/assets/js/sparkline-chart.js"></script>    
	<script src="<?php echo base_url()?>assets/dashgum/theme/assets/js/zabuto_calendar.js"></script>	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
    <script type="text/javascript">
    function tampilkanPreview(userfile, idpreview)
    {
        var gb = userfile.files;
        for (var i = 0; i < gb.length; i++)
        {
            var gbPreview = gb[i];
            var imageType = /image.*/;
            var preview = document.getElementById(idpreview);
            var reader = new FileReader();
            if (gbPreview.type.match(imageType))
            {
                //jika tipe data sesuai
                preview.file = gbPreview;
                reader.onload = (function (element)
                {
                    return function (e)
                    {
                        element.src = e.target.result;
                    };
                })(preview);
                //membaca data URL gambar
                reader.readAsDataURL(gbPreview);
            } else
            {
                //jika tipe data tidak sesuai
                alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
            }
        }
    }
</script>
  

  </body>
</html>
