<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <style>
        .box_quantity button {
            background-color: white;
            border: solid 0.1px rgb(220, 220, 220);
        }

        .box_quantity button:focus {
            background-color: black;
            color: white;
            outline: none;
        }

        .minus,
        .plus {
            display: inline-block;
            vertical-align: middle;
            text-align: center;
            background-color: white;
            border: none;
        }

        .minus:active,
        .plus:active {
            outline: solid 1px rgb(211, 211, 211);
        }

        input {
            height: 20px;
            width: 30px;
            text-align: center;
            font-size: 16px;
            border: none;
            display: inline-block;
            vertical-align: middle;
            vertical-align: middle;
        }

        input:focus {
            outline: solid 1px gray;
        }

        .thumbnail {
            height: 20%;
            width: 30%;
            display: block;
            padding: 2%;
        }

        .thumbnail img {
            height: 100%;
            width: 100%;
            border: solid 1px rgb(220, 220, 220);
            padding: 5% 10%;
        }

        .thumbnail img:focus {
            outline: solid 2px black;
        }

        .preview {
            width: 100%;
            display: inline-block;
        }

        .preview img {
            height: 100%;
            width: 100%;
            display: block;
        }

        .up,
        .down {
            background-color: rgb(220, 220, 220);
            text-decoration: none;
            cursor: pointer;
            border-radius: 50%;
            border: none;
        }

        .up:active,
        .down:active {
            background-color: gray;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 50%;
            outline: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Catalog</a>
                </li>
            </ul>
            <i class="fa fa-search" aria-hidden="true"></i>
            <div class="dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-flag" aria-hidden="true"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">PHP</a>
                    <a class="dropdown-item" href="#">USD</a>
                    <a class="dropdown-item" href="#">EURO</a>
                </div>
            </div>
        </div>
    </nav>
    <section class="container-fluid px-5">
        <div class="row">
            <div class="col-md-6 pt-5">
                <div class="d-flex">
                    <div class="thumbnail">
                        <div class="thumbnails">
                            <div class="">
                                <img class="autofocus-img tab" id="" onclick="preview(this.src)" src="http://localhost/fivedads_revision/images/new-combo-2box-eva-1box-tck.jpg" alt="Image 1" tabindex="1">
                            </div>
                            <div class="pt-2">
                                <img class="tab" onclick="preview(this.src)" id="" src="http://localhost/fivedads_revision/images/new-normal-1-eva.jpg" alt="Image 2" tabindex="2">
                            </div>
                            <div class="pt-2">
                                <img class="tab" onclick="preview(this.src)" id="" src="http://localhost/fivedads_revision/images/silver-eva-tck.jpg" alt="Image 3" tabindex="3">
                            </div>
                            <div class="pt-2">
                                <img class="tab" onclick="preview(this.src)" id="" src="http://localhost/fivedads_revision/images/10 boxex-tck.jpg" alt="Image 4" tabindex="4">
                            </div>
                        </div>
                        <div class="pt-5">
                            <div class="row">
                                <div class="col-sm-6">
                                    <button class="up" onclick="down()"><i class="fa fa-chevron-up"></i></button>
                                </div>
                                <div class="col-sm-6">
                                    <button class="down" onclick="down()"><i class="fa fa-chevron-down"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="preview mx-3">
                        <div>
                            <img class="preview-image" src="" alt="Product Image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pt-5">
                <h4 class="product_name">EVA GLUTHATHIONE</h4>
                <hr style="border: solid 1px black">
                <h5 class="price">₱ 1,485.00</h5>
                <div class="box_quantity">
                    <button>1 BOX</button>
                    <button>2 BOXES</button>
                    <button>3 BOXES</button>
                    <button>5 BOXES + 1</button>
                </div>
                <div class="row py-3">
                    <div class="col-md-3 my-2">
                        <button class="minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        <input type="text" value="1" />
                        <button class="plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-md-9">
                        <a class="btn btn-dark btn-block text-primary rounded-0 addtocart my-2">ADD TO CART</a>
                        <small class="text">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            Added to cart
                            <span>
                                <a href="">view cart </a>
                                or
                                <a href="">continue shopping</a>
                            </span>
                        </small>
                    </div>
                </div>
                <a class="btn btn-primary btn-block rounded-0 buy">BUY IT NOW</a>
                <div class="pt-5">
                    <p>PRODUCT DETAILS</p>
                    <hr class="px-0" style="border: solid 1px rgb(105,105,105)">
                    <h6>WHAT IS EVA GLUTHATHIONE IN A SACHET?</h6>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, unde porro, laborum sapiente eum commodi blanditiis fugit minus assumenda distinctio pariatur mollitia minima expedita officia dolorem voluptas inventore exercitationem. Quo!</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.minus').click(function() {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus').click(function() {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });
        });

        $('.text').hide();
        $(document).ready(function() {
            $('.addtocart').on('click', function() {
                var text = $('.addtocart').text();
                if (text === "ADD TO CART") {
                    $(this).html('THANK YOU');
                    $('.text').show();
                    $('.addtocart').prop('disabled', true);
                    $('.buy').prop('disabled', true);

                } else {
                    $(this).text('ADD TO CART');
                    $('.text').hide();
                }
            });
        });

        $(document).ready(function() {
            $('.minus, .plus, .up, .down').focus(function() {
                this.blur();
            });
        });

        $(document).ready(function() {
            $('.autofocus-img').click();
        })

        function preview(_src) {
            $source = _src;
            document.getElementsByClassName("preview-image")[0].src = $source;
        }

        $('.autofocus-img').focus();
        var elements;
        var current = 1;
        var max = 0;
        elements = document.getElementsByClassName('tab');
        max = elements.length;

        // function init() {
        //     elements = document.getElementsByClassName('tab');
        //     max = elements.length;
        //     document.getElementsByClassName('autofocus-img').focus();
        // }

        function down() {
            source = document.getElementsByClassName("tab")[current].src;
            document.getElementsByClassName("preview-image")[0].src = source;
            elements[current % max].focus();
            current = current + 1;
        }
    </script>
</body>

</html>