<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

    <x-navbar/>

    <div>
        <div class="ops">
            <div class="row d-flex align-items-center ssx" id="header">
                <div class="col-md-4 order-md-first">
                </div>
                <div class="col-md-8 text-light text-center fw-bold mt-5">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item mb-4 active" data-bs-interval="1500">
                                <div id="capt-carousel">
                                    <h3 class="title-h3">The 8th World Junior Wushu Championships event start</h3>
                                    <h1 class="time">
                                        99 : 99 : 99 : 99
                                    </h1>
                                    <h1 class="day">
                                        Days Hours Minutes Seconds
                                    </h1>
                                </div>
                            </div>
                            <div class="carousel-item carousel-img mb-4 text-start" data-bs-interval="1500">
                                <img src="{{ asset('/') }}img/Fagu7VrUsAEeEVu 1.png" class=" img-fluid" alt="...">
                                <img src="{{ asset('/') }}img/image 2.png" class=" img-fluid" alt="...">
                                <img src="{{ asset('/') }}img/image 3.png" class=" img-fluid" alt="...">
                                <h3 class="title-h3">The 8th World Junior Wushu Championships event start</h3>
                                <h5 class="title-h5">Tangerang, Banten, Indonesia</h5>
                                <h5 class="title-h5">2 - 10 December 2022</h5>
                            </div>
                            
                        </div>
                        <h1>
                            We are the future!
                        </h1>
                        <h3>
                            See you in Indonesia
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <img src="{{ asset('/') }}img/maskot wushu kejurdun 2022 - vector 1.png" class="img-home" alt="">
    
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-7">
            <section id="sponsor">
                <div class="container text-black">
                    <div class="row text-center gy-5 gx-0">
                        <div class="col-md-3">
                            <h6 class="mb-4 fw-bold text-uppercase">Global PARTNER</h6>
                            <img src="{{ asset('/') }}img/1 Global Partner1 Global Partner ºăÔ´Ïélogo 1.png"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-md-3">
                            <h6 class="mb-4 fw-bold text-uppercase">Global SUPPORT</h6>
                            <img src="{{ asset('/') }}img/2-Global Sponsor 安踏LOGO 1.png" class="img-fluid"
                                alt="">
                        </div>
                        <div class="col-md-6">
                            <h6 class="mb-4 fw-bold text-uppercase">Global SUPPLIER</h6>
                            <div class="mx-auto" style="max-width: 180px">
                                <img src="{{ asset('/') }}img/3 1.png" class="img-fluid mb-3" alt="">
                                <img src="{{ asset('/') }}img/3 2.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <x-footer/>


    <script  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>
