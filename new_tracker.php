<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .html {
            scroll-behavior: smooth;
        }

        .btn {
            border-radius: 0;
            font-family: Roboto;
        }

        input {
            box-shadow: 0 2px 12px 2px #ddd;
            font-size: 10;
        }

        .states {
            padding: 10% 0;
            overflow-x: hidden;
        }

        .state img {
            background-color: rgb(220, 220, 220);
        }

        .line {
            height: 1px;
            flex: 1;
            margin-top: 40px;
        }

        .track-line {
            width: 1px;
            height: auto;
            background-color: black;
        }

        .point {
            height: 20px;
            width: 20px;
            background-color: #bbb;
            border-radius: 50%;
            margin-left: -9px;
        }

        .infos {
            /* padding: 5% 0; */
            padding-bottom: 10%;
        }
    </style>
</head>

<body>
    <div class="container content">
        <div class="row justify-content-center" id="nav">
            <div class="col-md-6 text-center mt-5">
                <div data-aos="fade-down" data-aos-offset="400" data-aos-duration="1000">
                    <a class="btn btn-primary ml-3" href="">Track & Trace</a>
                    <a class="btn btn-primary ml-3" href="">Shipping Rates</a>
                    <a class="btn btn-primary ml-3" href="">Find Branches</a>
                </div>
                <div data-aos="zoom-in">
                    <form action="#">
                        <div class="input-group py-5">
                            <input type="text" class="form-control" placeholder="Please enter your waybill number.">
                            <div class="input-group-append">
                                <a href="#states" class="btn btn-secondary search">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row info-image justify-content-center">
            <div class="col-md-8 mt-5 text-center">
                <div data-aos="fade-up">
                    <img src="http://localhost/fivedads_revision/images/box-location.png" alt="">
                </div>
            </div>
        </div>
        <div class="row states justify-content-center" id="states">
            <div class="col text-center">
                <div class="d-flex" data-aos="zoom-out">
                    <div class="state round-circle">
                        <img src=" http://localhost/fivedads_revision/images/pickup.png" alt="" class="rounded-circle border border-primary" height="80" width="80">
                        <figcaption class="pt-3">Pick Up</figcaption>
                    </div>
                    <div class="line bg-primary"></div>
                    <div class="state">
                        <img src="http://localhost/fivedads_revision/images/processing.png" alt="" class="rounded-circle border border-primary" height="80" width="80">
                        <figcaption class="pt-3">Processing</figcaption>
                    </div>
                    <div class="line bg-primary"></div>
                    <div class="state">
                        <img src="http://localhost/fivedads_revision/images/ondelivery.png" alt="" class="rounded-circle border border-primary" height="80" width="80">
                        <figcaption class="pt-3">On Delivery</figcaption>
                    </div>
                    <div class="line bg-primary"></div>
                    <div class="state">
                        <img src="http://localhost/fivedads_revision/images/delivered.png" alt="" class="rounded-circle border border-primary" height="80" width="80">
                        <figcaption class="pt-3">Delivered</figcaption>
                    </div>
                </div>
            </div>
        </div>
        <div class="row infos justify-content-center" id="infos">
            <div class="col-md-8 mt-5">
                <!-- Loop Here -->
                <div class="info d-flex justify-content-center">
                    <div data-aos="fade-left">
                        <div class="time text-right mr-5 pb-5">
                            <time>2008-02-14 20:00</time>
                            <br>
                            <time>14:52:02</time>
                        </div>
                    </div>
                    <div class="track-line">
                        <div class="point"></div>
                    </div>
                    <div data-aos="fade-right">
                        <div class="location text-left ml-5 pb-5">
                            <span>Drop Point Camiling-1</span>
                            <br>
                            <span>City：CAMILING</span>
                            <br>
                            <span>Delivered to Transfiguration</span>
                        </div>
                    </div>
                </div>
                <!-- End of Loop -->
                <div class="info d-flex justify-content-center">
                    <div data-aos="fade-left">
                        <div class="time text-right mr-5 pb-5">
                            <time>2008-02-14 20:00</time>
                            <br>
                            <time>14:52:02</time>
                        </div>
                    </div>
                    <div class="track-line">
                        <div class="point"></div>
                    </div>
                    <div data-aos="fade-right">
                        <div class="location text-left ml-5 pb-5">
                            <span>Drop Point Camiling-1</span>
                            <br>
                            <span>City：CAMILING</span>
                            <br>
                            <span>Delivered to Transfiguration</span>
                        </div>
                    </div>
                </div>
                <div class="info d-flex justify-content-center">
                    <div data-aos="fade-left">
                        <div class="time text-right mr-5 pb-5">
                            <time>2008-02-14 20:00</time>
                            <br>
                            <time>14:52:02</time>
                        </div>
                    </div>
                    <div class="track-line">
                        <div class="point"></div>
                    </div>
                    <div data-aos="fade-right">
                        <div class="location text-left ml-5 pb-5">
                            <span>Drop Point Camiling-1</span>
                            <br>
                            <span>City：CAMILING</span>
                            <br>
                            <span>Delivered to Transfiguration</span>
                        </div>
                    </div>
                </div>
                <div class="info d-flex justify-content-center">
                    <div data-aos="fade-left">
                        <div class="time text-right mr-5 pb-5">
                            <time>2008-02-14 20:00</time>
                            <br>
                            <time>14:52:02</time>
                        </div>
                    </div>
                    <div class="track-line">
                        <div class="point"></div>
                    </div>
                    <div data-aos="fade-right">
                        <div class="location text-left ml-5 pb-5">
                            <span>Drop Point Camiling-1</span>
                            <br>
                            <span>City：CAMILING</span>
                            <br>
                            <span>Delivered to Transfiguration</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        $('.states').hide();
        $('.infos').hide();

        $(document).ready(function() {
            $('.search').click(function() {
                $('.states').show();
                $('.infos').show();
                $('.info-image').hide();
                AOS.refresh();
            });
        });

        var point = $('.track-line').last().contents();
        $('.track-line').last().replaceWith(point);
        $('.point').last().css('margin-right', '-9px');
    </script>
</body>

</html>