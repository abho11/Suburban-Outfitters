<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
        .registration-form {
            border: 2px solid #dee2e6 !important;
            border-radius: 5px !important;
            padding: 20px !important;
            max-width: 600px !important;
            margin: 50px auto !important;
        }

        .form-group {
            margin-bottom: 15px !important;
        }

        .registration-form label {
            margin-bottom: 5px !important;
        }

        .registration-form input[type="checkbox"] {
            margin-top: 3px !important;
        }

        .registration-form button {
            width: unset !important;
        }

        .hidden {
            display: none !important;
        }

        .btn-primary {
            background-color: black !important;
        }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="homepage.php">
                    <img src="images/Suburban-gif.gif" width="50%" height="50%">
                </a>
                <h1 class="mx-auto">The Official Store of Suburban Outfitters</h1>
                <ul class="navbar-nav">
                    <li id="searchBox" class="nav-item">
                        <form class="d-flex">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            </div>
                        </form>
                    </li>
                    <li id="profileIcon" class="nav-item">
                          <a class="nav-link" href="login.php">
                            <img src="https://cdn-icons-png.flaticon.com/128/64/64572.png" width="30px" height="30px">
                        </a>
                    </li>
                    <li id="cartIcon" class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="https://cdn-icons-png.flaticon.com/128/253/253298.png" width="30px" height="30px">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
        <br>
        <br>
        <h2 class="text-center">Register Today</h2>
        <div class="registration-form">


            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" id="fname" name="fname" required>
                </div>

                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" id="lname" name="lname" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="address">Full Shipping Address:</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>

                <div class="form-group">
                    <input type="checkbox" id="emailOptIn" name="emailOptIn">
                    <label for="emailOptIn">Subscribe to Newsletter</label>
                </div>

                <div class="form-group">
                    <input type="checkbox" id="sameAddress" name="sameAddress" checked
                        onchange="toggleBillingAddress()">
                    <label for="sameAddress">Billing and Shipping Address are the same</label>
                </div>

                <!-- Billing Address Fields, initially hidden -->
                <div id="billingAddress" class="hidden">
                    <div class="form-group">
                        <label for="billingAddress">Full Billing Address:</label>
                        <input type="text" class="form-control" id="billingAddress" name="billingAddress">
                    </div>
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" required>
                </div>

                <div class="form-group">
                    <label for="cpwd">Confirm Password:</label>
                    <input type="password" class="form-control" id="cpwd" name="cpwd" required>
                </div>

                <button type="submit" class="btn btn-primary">Sign Up</button>
                <br><br>
                <p style="display: flex;"> Already have an account with us?
                    <button style="margin-left: 25px; margin-top: -6px;" type="submit"
                        class="btn btn-primary">Login</button>
                </p>


            </form>
        </div>
    </div>


    <footer>
        <div class="container py-4" style="text-align: center;">
            <div class="row">
                <div class="col-md-3">
                    <a href="#">Contact Us</a>
                </div>
                <div class="col-md-3">
                    <a href="#">Location and Hours</a>
                </div>
                <div class="col-md-3">
                    <a href="#">Privacy and Terms</a>
                </div>
                <div class="col-md-3">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>



    <script>
        function toggleBillingAddress() {
            var billingAddressDiv = document.getElementById('billingAddress');
            var sameAddressCheckbox = document.getElementById('sameAddress');
            billingAddressDiv.style.display = sameAddressCheckbox.checked ? 'none' : 'block';
        }

        window.onload = function () {
            const params = new URLSearchParams(window.location.search);
            if (params.get('registered') === 'true') {
                //  popup message
                alert('Successfully registered');
                history.replaceState(null, '', 'homepage.php');
            }
        };
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>