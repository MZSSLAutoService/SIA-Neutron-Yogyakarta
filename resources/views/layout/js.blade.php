    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <!-- <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script> -->

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- TinyMCE -->
    <script src="plugins/tinymce/tinymce.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <!-- <script src="js/pages/index.js"></script> -->
    <script src="js/pages/tables/jquery-datatable.js"></script>
    <script src="js/pages/forms/advanced-form-elements.js"></script>
    <!-- <script src="js/pages/forms/editors.js"></script> -->

    <!-- Demo Js -->
    <script src="js/demo.js"></script>

    <script type="text/javascript">
        //* Fungsi untuk mendapatkan nilai latitude longitude
        function updateMarkerPosition(latLng) {
        document.getElementById('latitude').value = [latLng.lat()]
            document.getElementById('longitude').value = [latLng.lng()]
        }
            
        var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: new google.maps.LatLng(-7.781921,110.364678),
        mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        //posisi awal marker   
        var latLng = new google.maps.LatLng(-7.781921,110.364678);
        
        /* buat marker yang bisa di drag lalu 
        panggil fungsi updateMarkerPosition(latLng)
        dan letakan posisi terakhir di id=latitude dan id=longitude
        */
        var marker = new google.maps.Marker({
            position : latLng,
            title : 'lokasi',
            map : map,
            draggable : true
        });
        
        updateMarkerPosition(latLng);
        google.maps.event.addListener(marker, 'drag', function() {
        // ketika marker di drag, otomatis nilai latitude dan longitude
        //menyesuaikan dengan posisi marker 
            updateMarkerPosition(marker.getPosition());
        });
    </script>

    <script type="text/javascript">
        //* Fungsi untuk mendapatkan nilai latitude longitude
        function updateMarkerPosition(latLng) {
        document.getElementById('latitude').value = [latLng.lat()]
            document.getElementById('longitude').value = [latLng.lng()]
        }
            
        var map = new google.maps.Map(document.getElementById('map-edit'), {
        zoom: 12,
        center: new google.maps.LatLng(-7.781921,110.364678),
        mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        //posisi awal marker   
        var latLng = new google.maps.LatLng(-7.781921,110.364678);
        
        /* buat marker yang bisa di drag lalu 
        panggil fungsi updateMarkerPosition(latLng)
        dan letakan posisi terakhir di id=latitude dan id=longitude
        */
        var marker = new google.maps.Marker({
            position : latLng,
            title : 'lokasi',
            map : map,
            draggable : true
        });
        
        updateMarkerPosition(latLng);
        google.maps.event.addListener(marker, 'drag', function() {
        // ketika marker di drag, otomatis nilai latitude dan longitude
        //menyesuaikan dengan posisi marker 
            updateMarkerPosition(marker.getPosition());
        });
    </script>

@yield('js')