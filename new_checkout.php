<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
        ul.breadcrumb li+li:before {
            padding: 8px;
            color: black;
            content: ">";
        }
    </style>
    <title></title>
</head>

<body>
    <section class="container px-5">
        <div class="row">
            <div class="col-md-6 px-5">
                <ul class="breadcrumb bg-white pt-5">
                    <li><a href="#" class="text-secondary">Cart</a></li>
                    <li><a href="#" class="text-secondary">Information</a></li>
                    <li><a href="#" class="text-secondary">Shipping</a></li>
                    <li>Payment</li>
                </ul>

                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="address">Contact Information</label>
                        <input type="number" class="form-control" id="mobile" placeholder="MOBILE NUMBER" required />
                        <div class="invalid-feedback">
                            Please enter your mobile number.
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Keep me up to date.</label>
                        </div>
                    </div>
                    <p>Shipping Address</p>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" id="firstName" placeholder="FIRST NAME" value="" required />
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" id="lastName" placeholder="LAST NAME" value="" required />
                            <div class="invalid-feedback">Valid last name is required.</div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" id="address" placeholder="COMPLETE ADDRESS" required />
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" id="landmark" placeholder="NEAREST LANDMARK" />
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="number" class="form-control" id="mobile2" placeholder="2nd MOBILE NUMBER" value="" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" id="city" placeholder="CITY" value="" required />
                            <div class="invalid-feedback">required.</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <select class="custom-select d-block w-100" id="country" required>
                            <option value="">Philippines</option>
                            <option>China</option>
                            <option>United States</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" id="mobile" placeholder="PHONE" required />
                        <div class="invalid-feedback">
                            Please enter your mobile number.
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Save information for later.</label>
                        </div>
                </form>
                <div class="pt-2">
                    <a href="">Return to cart</a>
                    <button class="btn btn-primary pull-right">Continue Shopping</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 pt-5 px-5" style="border-left: 1px solid #DCDCDC;">
            <div class="product-detail">
                <table class="table table-borderless text-right">
                    <tbody>
                        <tr>
                            <td><img src="http://localhost/fivedads_revision/images/new-combo-2box-eva-1box-tck.jpg" alt="" height="100" width="100" class="pull-left">
                                <span class="pull-left font-weight-bold pl-3">Eva Gluthathione</span>
                            </td>
                            <td class="font-weight-bold">₱6,500.00</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <p>Subtotal<span class="pull-right font-weight-bold">₱6,500.00</span></p>
                <p>Shipping<span class="pull-right"><small>Calculated at next step</small></span></p>
                <hr>
                <p>Total<span class="pull-right font-weight-bold">₱6,500.00</span></p>
            </div>
        </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>