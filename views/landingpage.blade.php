<!DOCTYPE html>
<html>

<head>
    <title>Website Music</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!----hero Section start---->

    <div class="hero"> 
        <nav>
            <h2 class="logo">Online<span>Music</span></h2>
            <ul>
				<li><a href="#">Home</a></li>
                <li><a href="#">Listen Now</a></li>
                <li><a href="#">Artist</a></li>
                <li><a href="#">Albums</a></li>
                <li><a href="#">My Library</a></li>
            </ul>
            <a href="#" class="btn">Login</a>
        </nav>

        <section id="home" class="mt-5">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-md-6 order-md-1 text-md-end mb-5 mb-md-0" data-aos="zoom-in" data-aos-delay="100ms">
                        <img src="img/music.png" alt="" width="450px">
                    </div>
                    <div class="col-md-6 order-md-0 info">
                        <h4>Hello, ini adalah website untuk membantu anda mendengarkan music online dengan mudah</h4>
                        <h1>A<span>MINOR</span></h1>
                        <h3>Enjoy the Music</h3>
                    </div>
                </div>
            </div>
        </section>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
		  AOS.init();
		</script>
		<script src="/vendor/jquery/jquery.slim.min.js"></script>
		<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
