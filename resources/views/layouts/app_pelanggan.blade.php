<!doctype html>
<html lang="en">
<head> 
    <?php
    $session_id    = session()->getId();
    $session = Session::get('session_id'); 
  
    ?>

    <title>Kambing Guling Lampung</title> 
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/image/favicon.png')}}" />
    <link rel="icon" type="image/png" href="{{asset('/image/favicon.png')}}" /> 
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>

    <meta content="width=device-width" name="viewport"/>
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="{{ asset('css/material-kit.css?v=1.2.0')}}" rel="stylesheet"/>
    <link href="{{ asset('assets/assets-for-demo/vertical-nav.css')}}" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"/>

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    <!-- MINIFIED -->
    {!! SEO::generate(true) !!}
    <!-- LUMEN -->
    {!! app('seotools')->generate() !!}
    <style type="text/css">

.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td{
padding: 1px;
}
</style>
<style>
  #map {
    height: 315px;
    width: 560px;
   }
.list-produk {

    padding-left: 5px;
    padding-right: 10px;

}
.card .card-image{

    height: auto; /*this makes sure to maintain the aspect ratio*/
    margin-top: 0px;
}
.card-pricing {
    margin-bottom: 20px;
}
.tombolBeli {
    padding: 10px 0px;
    margin:0px;
}
.card-pricing .card-content {
    padding: 10px !important;
}
</style>

</head>
 
<body class="blog-posts">

    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
        @if(Agent::isMobile())
            @else
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header"> 
          
                <a class="navbar-brand" href="{{ url('/') }}"><b>Kambing Guling & Aqiqah Lampung</b></a>
           
            </div> 
            @endif
        </div>
    </nav>
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('image/logo.jpg');">
    @if(Agent::isMobile())
    <div class="container"> 
            <div class="ml-auto mr-auto text-center">
                <h2 class="title">Kambing Guling & Aqiqah Lampung</h2> 
                <p>"Rajanya Kambing Guling dan Aqiqah Lampung"</p><a href="{{ $tentang->whatsapp }}" target="_blank" class="btn btn-block buttonColor" rel="tooltip"> Pesen Sekarang</a>
            </div> <br><br><br>
    </div>
    @endif
    </div>
                    @yield('content') 
    </div>

        <footer class="footer footer-black footer-big" style="bottom: 0;">
            <div class="container">
                <div class="content"> 
                    <div class="row">
                        <div class="col-md-4">
                            <h5 style="font-size: 15px;">
                                Tentang Kami
                            </h5> 
                            <p>
                                {{ $tentang->tentang_kami }}
                            </p> 
                        </div>
                        <div class="col-md-4">
                            <h5 style="font-size: 15px; mar">
                                Hubungi Kami
                            </h5>
                            <div class="social-feed">
                                <div class="feed-line"> 
                                    <a href="mailto:kambinggulinglampung@gmail.com" target="_blank">
                                        <i class="fa fa-envelope fa-5x">
                                        </i>
                                        <p>
                                           kambinggulinglampung@gmail.com
                                        </p>
                                    </a>
                                </div>
                                <div class="feed-line">
                                    <a href="{{ $tentang->facebook }}" target="_blank">
                                        <i class="fa fa-facebook-square fa-5x">
                                        </i>
                                        <p>
                                           Kambing Guling Lampung
                                        </p>
                                    </a>
                                </div> 
                                <div class="feed-line">
                                    <a href="{{ $tentang->instagram }}" target="_blank">
                                    <i class="fa fa-instagram fa-5x">
                                    </i>
                                    <p>
                                       Kambinggulinglampung
                                    </p>
                                    </a>
                                </div>  
                                <div class="feed-line">
                                    <a href="{{ $tentang->whatsapp }}" target="_blank">
                                    <i class="fa fa-whatsapp fa-5x">
                                    </i>
                                    <p>
                                    +62 812 7141 8417
                                    </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h5 style="font-size: 15px;">
                                Alamat (1)
                            </h5> 
                            <p>
                            Jl. Tenam blok O.26 Rajabasa permai Bandar Lampung.
                            </p> 
                            <h5 style="font-size: 15px;">
                                Alamat (2)
                            </h5> 
                            <p>
                            Jl. Soemantri Brodjonegoro no 13 gedung meneng Rajabasa bandar Lampung.
                            </p> 
                        </div>
                    </div>
                </div>

            </footer>


    <script>
      function initMap() {
        var uluru = {lat: -5.3791173, lng: 105.2412983};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    @yield('scripts')
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUfTCdFiOgiKp6LSPAVfIZL1r3NE-dJ2Y&callback=initMap">
    </script>@yield('scripts')

    <!-- Include Dexie -->
    <script src="https://unpkg.com/dexie@latest/dist/dexie.js"></script>

    <!--   Core JS Files   -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('js/material.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}">
    </script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript">
    </script>
    <!-- Library for adding dinamically elements -->
    <script src="{{ asset('js/arrive.min.js') }}" type="text/javascript">
    </script>
    <!-- Forms Validations Plugin -->
    <script src="{{ asset('js/jquery.validate.min.js') }}">
    </script>
    <!-- Promise Library for SweetAlert2 working on IE -->
    <script src="{{ asset('js/es6-promise-auto.min.js') }}">
    </script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="{{ asset('js/moment.min.js') }}">
    </script>
    <!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
    <script src="{{ asset('js/chartist.min.js') }}">
    </script>
    <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="{{ asset('js/jquery.bootstrap-wizard.js') }}">
    </script>
    <!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
    <script src="{{ asset('js/bootstrap-notify.js') }}">
    </script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="{{ asset('js/bootstrap-datetimepicker.js') }}">
    </script>
    <!--    Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select   -->
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="{{ asset('js/jquery-jvectormap.js') }}">
    </script>
    <!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
    <script src="{{ asset('js/nouislider.min.js') }}">
    </script>
    <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{ asset('js/jquery.select-bootstrap.js') }}">
    </script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
    <script src="{{ asset('js/jquery.dataTables.js') }}">
    </script>
    <!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.5/sweetalert2.all.min.js" type="text/javascript">
    </script>
    <!-- Sertakan polibill untuk Prompt ES6 (opsional) untuk browser IE11 dan Android -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js">
    </script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ asset('js/jasny-bootstrap.min.js') }}">
    </script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="{{ asset('js/fullcalendar.min.js') }}">
    </script>
    <!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{ asset('js/jquery.tagsinput.js') }}">
    </script>
    <script src="{{ asset('js/material-dashboard.js?v=1.2.0') }}">
    </script>
    <script src="{{ asset('js/demo.js') }}">
    </script>
    <script src="{{ asset('js/selectize.min.js') }}">
    </script>
    <script src="{{ asset('js/custom.js') }}">
    </script>
    <script src="{{ asset('js/material-kit.js?v=1.2.0')}}" type="text/javascript">
    </script>
    {{-- lazy load image --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/10.3.5/lazyload.min.js">
    </script>
    <script type="text/javascript">
        var myLazyLoad = new LazyLoad();
    </script>
    <script type="text/javascript">


        $(document).on('click', '#btnBeliSekarang', function(){
            alert();
        });

        function alert(){
         swal({
            text :  "Produk Berhasil Di Tambahkan Ke Keranjang Belanja",
            showConfirmButton :  false,
            type: "success",
            timer: 10000,
            onOpen: () => {
              swal.showLoading()
          }
      });
     }


 </script>
 @yield('scripts')  
 </html>