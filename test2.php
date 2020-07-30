<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        #container {
            width: 500px;
        }

        .item {
            width: 250px;
            float: left;
            display: none;
        }
    </style>
    <title>Hello, world!</title>
</head>

<body>
    <div id="container">
        <div class="item">
            <h1>A</h1>
        </div>
        <div class="item">
            <h1>B</h1>
        </div>
        <div class="item">
            <h1>C</h1>
        </div>
        <div class="item">
            <h1>D</h1>
        </div>
        <div class="item">
            <h1>E</h1>
        </div>
        <div class="item">
            <h1>F</h1>
        </div>
        <div class="item">
            <h1>G</h1>
        </div>
        <div class="item">
            <h1>H</h1>
        </div>
    </div>
    <button id="next">Next Items</button>
    <button id="back">Previous Items</button>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        //VERSION 2 WORKING
        var itemsArray = document.getElementsByClassName('item');
        var nextButton = document.getElementById('next');
        var backButton = document.getElementById('back');
        var i = 0;
        //on page load, set first two items to display block
        for (i; i < 1; i++) {
            itemsArray[i].style.display = 'block';
        };
        //reset counter to 0
        i = 0;
        //forward button
        nextButton.addEventListener('click', function() {
            //if i = 0 do this
            if (i === 0) {
                var l = i + 1;
                for (i; i < l; i++) {
                    itemsArray[i].style.display = 'none';
                };
                l = l + 1;
                for (i; i < l; i++) {
                    itemsArray[i].style.display = 'block';
                }
            }
            //if i = array length
            else if (i === itemsArray.length) {
                i = i - 1;
                l = itemsArray.length;
                for (i; i < l; i++) {
                    itemsArray[i].style.display = 'none';
                }
                itemsArray[0].style.display = 'block';
                itemsArray[1].style.display = 'block';
                //reset i to 0, so it's like the page just loaded
                i = 0;
            }
            //for all other counter values
            else {
                i = i - 1;
                var l = i + 1;
                for (i; i < l; i++) {
                    itemsArray[i].style.display = 'none';
                };
                l = l + 1;
                for (i; i < l; i++) {
                    itemsArray[i].style.display = 'block';
                }
            }
        });
        //back button
        backButton.addEventListener('click', function() {
            //if the first two items are showing
            if (i === 0) {
                l = 1;
                for (i; i < l; i++) {
                    itemsArray[i].style.display = 'none';
                }
                i = itemsArray.length - 1;
                l = itemsArray.length;
                for (i; i < l; i++) {
                    itemsArray[i].style.display = 'block';
                }
            } else if (i === 1) {
                i = 0;
                l = i + 1;
                for (i; i < l; i++) {
                    itemsArray[i].style.display = 'none';
                }
                i = itemsArray.length - 1;
                l = itemsArray.length;
                for (i; i < l; i++) {
                    itemsArray[i].style.display = 'block';
                }
            } else {
                i = i - 2;
                l = i + 2;
                for (i; i < l; i++) {
                    itemsArray[i].style.display = 'none';
                }
                i = i - 4;
                l = i + 2;
                for (i; i < l; i++) {
                    itemsArray[i].style.display = 'block';
                }
            }

        });
    </script>
</body>

</html>