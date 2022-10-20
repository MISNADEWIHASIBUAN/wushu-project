<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competition - Medals</title>
    <link rel="stylesheet" href="{{ asset('/') }}css/style1.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

    <x-navbar />

    <header class="medal">
        <div class="d-flex justify-content-center align-items-center h-100 text-light fw-bold">       
            <h1 class="news text-uppercase">MEDALS</h1>
        </div>
    </header>

    <section id="medal">
        <div class="container mt-5">
            <div class="p-5 ">

                <div class="schadule">
                    <div class="d-flex justify-content-center mb-5">
                        <h2 class="h2A fw-bold">
                            <span>MEDAL</span>
                        </h2>
                      </div>
                      <div class="table-responsive">
                        <table class="table-medal table text-center table-bordered border-dark  w-100 fw-bold">
                          <thead>
                              <tr>
                                <th class="" style="vertical-align: middle;" rowspan="2">RANK</th>
                                <th class="" style="vertical-align: middle;" rowspan="2">COUNTRY</th>
                                <th class="" colspan="4">MEDAL</th>
                              </tr>
                              <tr>
                                <th class="" >Gold🥇</th>
                                <th class="">Silver🥈</th>
                                <th class="">Bronze🥉</th>
                                <th class="">Total</th>
                              </tr>
                            </thead>
                            <tbody class="">
                              <tr>
                                <td class="">1</td>
                                <td class=" text-start">
                                  <img src="{{ asset('/') }}img/indonesia.svg" class="img-fluid" alt="">
                                  INDONESIA 
                                </td>
                                <td class="">10</td>
                                <td class="">20</td>
                                <td class="">5</td>
                                <td class="">35</td>
                              </tr>
                              <tr>
                                <td class="">2</td>
                                <td class=" text-start">
                                  <img src="{{ asset('/') }}img/china.svg" class="img-fluid" alt="">
                                  CHINA
                                </td>
                                <td class="">10</td>
                                <td class="">20</td>
                                <td class="">4</td>
                                <td class="">34</td>
                              </tr>
                              <tr>
                                <td class="">3</td>
                                <td class=" text-start">
                                  <img src="{{ asset('/') }}img/MALAYSIA.svg" class="img-fluid" alt="">
                                  MALAYSIA
                                </td>
                                <td class="">10</td>
                                <td class="">20</td>
                                <td class="">3</td>
                                <td class="">33</td>
                              </tr>
                              <tr>
                                <td class="">4</td>
                                <td class=" text-start">
                                  <img src="{{ asset('/') }}img/singapore.svg" class="img-fluid" alt="">
                                  SINGAPORE
                                </td>
                                <td class="">10</td>
                                <td class="">20</td>
                                <td class="">2</td>
                                <td class="">32</td>
                              </tr>
                              <tr>
                                <td class="">5</td>
                                <td class=" text-start">
                                  <img src="{{ asset('/') }}img/venezuela.svg" class="img-fluid" alt="">
                                  VENEZUELA
                                </td>
                                <td class="">10</td>
                                <td class="">20</td>
                                <td class="">1</td>
                                <td class="">31</td>
                              </tr>
                              <tr>
                                <td class="">6</td>
                                <td class=" text-start">
                                  <img src="{{ asset('/') }}img/Layer 25.svg" class="img-fluid" alt="">
                                  ITALY
                                </td>
                                <td class="">10</td>
                                <td class="">10</td>
                                <td class="">0</td>
                                <td class="">20</td>
                              </tr>
                              <tr>
                                <td class="">7</td>
                                <td class=" text-start">
                                  <img src="{{ asset('/') }}img/Layer 18.svg" class="img-fluid" alt="">
                                  Germany
                                </td>
                                <td class="">10</td>
                                <td class="">8</td>
                                <td class="">0</td>
                                <td class="">18</td>
                              </tr>
                              <tr>
                                <td class="">8</td>
                                <td class=" text-start">
                                  <img src="{{ asset('/') }}img/spain.svg" class="img-fluid" alt="">
                                  SPAIN
                                </td>
                                <td class="">10</td>
                                <td class="">7</td>
                                <td class="">0</td>
                                <td class="">17</td>
                              </tr>
                              <tr>
                                <td class="">9</td>
                                <td class=" text-start">
                                  <img src="{{ asset('/') }}img/_x30_2_x2C__United_States_x2C__country_x2C__national_x2C__flag_x2C__world_flag.svg" class="img-fluid" alt="">
                                  USA
                                </td>
                                <td class="">10</td>
                                <td class="">6</td>
                                <td class="">0</td>
                                <td class="">16</td>
                              </tr>
                              <tr>
                                <td class="">10</td>
                                <td class=" text-start">
                                  <img src="{{ asset('/') }}img/vietnam.svg" class="img-fluid" alt="">
                                  VIETNAM
                                </td>
                                <td class="">10</td>
                                <td class="">5</td>
                                <td class="">0</td>
                                <td class="">15</td>
                              </tr>
                              
                            </tbody>
  
                      </table>
                      </div>
                </div>

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
