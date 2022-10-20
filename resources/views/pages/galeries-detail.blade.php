<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeries - {{$detailGalery->title ?? 'Untitle Galeries'}}</title>
    <link rel="stylesheet" href="{{ asset('/') }}css/style1.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

    <x-navbar/>

    <header class="gallery">
        <div class="d-flex justify-content-center align-items-center h-100 text-light fw-bold">
            <h1 class="news">Galeries</h1>
        </div>
    </header>

    <section id="gallery">
        <div class="container mt-5">
            <div class="p-4 text-upppercase">
                <h5>8th World Junior Wushu Championships Day 1</h5>
                <div class="row mt-5">
                    <div class="col-md-4 col-6">
                        <div class="card mb-5 shadow border" style="max-width: 700px;">
                            <img src="{{ asset('img/nasa-Q1p7bh3SHj8-unsplash (1).png') }}" class="card-img-top rounded" alt="-">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card mb-5 shadow border">
                            <img src="{{ asset('img/image 12.png') }}" class="card-img-top rounded " alt="-">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card mb-5 shadow border">
                            <img src="{{ asset('img/nasa-Q1p7bh3SHj8-unsplash (3) (1).png') }}" class="card-img-top rounded" alt="-">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card mb-5 shadow border">
                            <img src="{{ asset('img/nasa-Q1p7bh3SHj8-unsplash (1).png') }}" class="card-img-top rounded" alt="-">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card mb-5 shadow border">
                            <img src="{{ asset('img/nasa-Q1p7bh3SHj8-unsplash (3) (1).png') }}" class="card-img-top rounded" alt="-">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card mb-5 shadow border">
                            <img src="{{ asset('img/image 12.png') }}" class="card-img-top rounded " alt="-">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card mb-5 shadow border">
                            <img src="{{ asset('img/image 12.png') }}" class="card-img-top rounded " alt="-">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card mb-5 shadow border">
                            <img src="{{ asset('img/nasa-Q1p7bh3SHj8-unsplash (1).png') }}" class="card-img-top rounded " alt="-">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card mb-5 shadow border">
                            <img src="{{ asset('img/nasa-Q1p7bh3SHj8-unsplash (3) (1).png') }}" class="card-img-top rounded " alt="-">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card mb-5 shadow border">
                            <img src="{{ asset('img/nasa-Q1p7bh3SHj8-unsplash (1).png') }}" class="card-img-top rounded " alt="-">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card mb-5 shadow border">
                            <img src="{{ asset('img/image 12.png') }}" class="card-img-top rounded " alt="-">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card mb-5 shadow border">
                            <img src="{{ asset('img/nasa-Q1p7bh3SHj8-unsplash (3) (1).png') }}" class="card-img-top rounded " alt="-">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card mb-5 shadow border">
                            <img src="{{ asset('img/nasa-Q1p7bh3SHj8-unsplash (3) (1).png') }}" class="card-img-top rounded " alt="-">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card mb-5 shadow border">
                            <img src="{{ asset('img/nasa-Q1p7bh3SHj8-unsplash (1).png') }}" class="card-img-top rounded " alt="-">
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="card mb-5 shadow border">
                            <img src="{{ asset('img/image 12.png') }}" class="card-img-top rounded " alt="-">
                        </div>
                    </div>
                </div>
                
                <nav class="d-flex justify-content-center" aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    
    <section id="Global" class="text-center mt-5 mb-5">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item carousel-global active" data-bs-interval="1500">
                    <img src="{{ asset('/') }}img/Global.png" class=" img-fluid" alt="..."">
                </div>
                <div class="carousel-item carousel-global" data-bs-interval="1500">
                    <img src="{{ asset('/') }}img/global2.png" class=" img-fluid" alt="..."">
                </div>
                <div class="carousel-item carousel-global">
                    <img src="{{ asset('/') }}img/global3.png" class=" img-fluid" alt="..."">
                </div>
            </div>
        </div>
    </section>

    <x-footer />

    <script  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>
