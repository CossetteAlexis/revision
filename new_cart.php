<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
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
    </style>
    <title></title>
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
    <section class="container">
        <div class="container pt-5">
            <h4>Your Cart<a href="/shop/new_cart/checkout" class="btn btn-primary pull-right my-3"><i class="fa fa-check-circle pr-1" aria-hidden="true"></i>PROCEED TO CHECKOUT</a>
                </span>
            </h4>
            <table class="table text-right">
                <thead>
                    <tr>
                        <th class="py-3">Product</th>
                        <th class="py-3">Quantity</th>
                        <th class="py-3">Price</th>
                        <th class="py-3">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="item">
                        <td><img src="http://localhost/fivedads_revision/images/new-normal-1-eva.jpg" alt="Product Image" height="100" width="100" class="pull-left">
                            <span>
                                Eva Gluthathione
                            </span>
                            <br><br>
                            <button class="btn btn-sm btn-outline-danger remove">Remove</button>
                        </td>
                        <td class="quantity">
                            <div class="container">
                                <button class="minus"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                <input type="text" value="1" />
                                <button class="plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </div>
                        </td>
                        <td>₱6,500.00</td>
                        <td>₱6,500.00</td>
                    </tr>
                </tbody>
            </table>
            <hr class="" style="border:0.1px solid #DCDCDC;">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="comment">Add a note to your order</label>
                        <textarea class="form-control" rows="2" cols="55" id="note" style="width:auto"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="float-right">
                        <p class="text-dark ">Grand Total<span class="text-primary pull-right">₱6,500.00</span></p>
                        <p><em class="">Shipping & taxes calculated at checkout</em></p>
                        <p class="pull-right">The cart expires in <span class="text-danger">01:22:29</span></p>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a type="button" class="btn btn-outline-dark btn-block">CONTINUE SHOPPING</a>
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-6 text-right">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-outline-dark btn-block">UPDATE</button>
                        </div>
                        <div class="col-md-6">
                            <a href="/shop/new_cart/checkout" type="button" class="btn btn-primary btn-block"><i class="fa fa-check-circle pr-1" aria-hidden="true"></i>PROCEED TO CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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

        $(document).ready(function() {
            $('.minus, .plus').focus(function() {
                this.blur();
            });
        });

        $(document).ready(function() {
            $(".remove").click(function() {
                $(".item").remove();
            });
        });
    </script>
</body>

</html>