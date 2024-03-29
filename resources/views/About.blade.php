
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{setting('site.title')}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url("/Vendor/")}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{url("/Vendor/")}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{url("/Vendor/")}}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url("/Vendor/")}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url("/Vendor/")}}/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
    @php
        $Gtitle = "About";
        $Gdescription = "About Rumah Talenta BCA";
    @endphp

    @include("Compone.Navbar")
    @include("Compone.pots")
    @include("Compone.Slider")
    @include("Compone.Feature")
    @include("Compone.Team")
    @include("Compone.ARCP")
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url("/Vendor/")}}/lib/wow/wow.min.js"></script>
    <script src="{{url("/Vendor/")}}/lib/easing/easing.min.js"></script>
    <script src="{{url("/Vendor/")}}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{url("/Vendor/")}}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{url("/Vendor/")}}/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{url("/Vendor/")}}/js/main.js"></script>
  <script>
        var url = window.location;
        $('nav a[href="'+ url +'"]').addClass('active');
        $('nav a').filter(function() {
            return this.href == url;
        }).addClass('active');
    </script></body>

</html>
