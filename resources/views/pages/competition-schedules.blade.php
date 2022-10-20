<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competition - Schedules</title>
    <link rel="stylesheet" href="{{ asset('/') }}css/style1.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

    <x-navbar />

    <header class="schadule-report">
        <div class="d-flex justify-content-center align-items-center h-100 text-light fw-bold">
            <h1 class="news text-uppercase">Schedule & Result</h1>
        </div>
    </header>

    <section id="schadule-report">
        <div class="container mt-5">
            <div class="p-5 ">

                <div class="schadule">
                    <div class="d-flex justify-content-center mb-5">
                        <h2 class="h2A fw-bold">
                            <span>GENERAL PROGRAM</span>
                        </h2>
                      </div>
                      <div class=" ">
                        <table class="table table-bordered border-dark  w-100">
                          <thead>
                              <tr>
                                <th class="">DATE</th>
                                <th class="">TIME</th>
                                <th class="">CONTENT</th>
                                <th class="">VENUE</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="">Saturday Dec 3rd</td>
                                <td class="">whole Day</td>
                                <td class="">Teams Arrival & Registration
                                  Judges’ Arrival & Registration</td>
                                <td class="">TBA</td>
                              </tr>
                              <tr>
                                <td class="">Saturday Dec 3rd</td>
                                <td class="">whole Day</td>
                                <td class="">Judges’ Refresher Course
                                  Team Training</td>
                                <td class="">TBA</td>
                              </tr>
                              <tr>
                                <td class="">Sunday Dec 4rd</td>
                                <td class="">TBA</td>
                                <td class="">Weigh-In
                                  Team Training
                                  Judges Refresher Course
                                  Technical Meeting
                                  Drawing of Lots</td>
                                <td class="">TBA</td>
                              </tr>
                              <tr>
                                <td class="">Monday Dec 5th</td>
                                <td class="">TBA</td>
                                <td class="">
                                  Taolu & Sanda Competition
                                  <a href="#!" class="text-decoration-none">Download Schedule</a>
                                  <a href="#!" class="text-decoration-none"> Download Result</a>
                                </td>
                                <td class="">Hall 5 & 6 – ICE BSD City</td>
                              </tr>
                              <tr>
                                <td class="">Tuesday Dec 6th</td>
                                <td class="">TBA</td>
                                <td class="">
                                  Taolu & Sanda Competition
                                  <a href="#!" class="text-decoration-none">Download Schedule</a>
                                  <a href="#!" class="text-decoration-none"> Download Result</a>
                                </td>
                                <td class="">Hall 5 & 6 – ICE BSD City</td>
                              </tr>
                              <tr>
                                <td class="">Wednesday Dec 7th</td>
                                <td class="">TBA</td>
                                <td class="">
                                  Taolu & Sanda Competition
                                  <a href="#!" class="text-decoration-none">Download Schedule</a>
                                  <a href="#!" class="text-decoration-none"> Download Result</a>
                                </td>
                                <td class="">Hall 5 & 6 – ICE BSD City</td>
                              </tr>
                              <tr>
                                <td class="">Thursday Dec 8th</td>
                                <td class="">TBA</td>
                                <td class="">
                                  Taolu & Sanda Competition
                                  <a href="#!" class="text-decoration-none">Download Schedule</a>
                                  <a href="#!" class="text-decoration-none"> Download Result</a>
                                </td>
                                <td class="">Hall 5 & 6 – ICE BSD City</td>
                              </tr>
                              <tr>
                                <td class="">Friday Dec 9th</td>
                                <td class="">TBA</td>
                                <td class="">Taolu & Sanda Competition
                                  Wushu Champion Gala Show
                                  Closing Ceremony
                                  Taolu & Sanda Competition
                                  Download Schedule
                                  Download Result</td>
                                <td class="">Hall 5 & 6 – ICE BSD City</td>
                              </tr>
                              <tr>
                                <td class="">Saturday Dec 10th</td>
                                <td class="">TBA</td>
                                <td class="">Departure</td>
                                <td class=""></td>
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
