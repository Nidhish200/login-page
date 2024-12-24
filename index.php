<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

<body class="container">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
        <a class="navbar-brand" href="#">WELCOME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-top: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <!-- Login Section -->
                <div id="loginSection">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Login</h4>
                        </div>
                        <div class="card-body">
                            <form  action="register.php" method="POST">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Password"
                                        required>
                                </div>
                                <button type="submit" class="btn btn-secondary btn-block">Login</button>
                            </form>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" onclick="toggleSections()">You don't have an account? Sign Up</a>
                    </div>
                </div>

                <!-- Register Section -->
                <div id="registerSection" style="display: none;">
                    <div class="alert alert-success d-none" id="successAlert"></div>
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Register</h4>
                        </div>
                        <div class="card-body">
                            <form action="register.php" method="POST">

                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text"name="firstname"  class="form-control" id="firstname" placeholder="First Name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="regemail">Email:</label>
                                    <input type="email" name="regemail" class="form-control" id="regemail" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="regpassword">Password</label>
                                    <input type="password" name="regpassword" class="form-control" id="regpassword" placeholder="Password"
                                        required>
                                </div>

                                <button type="submit" name="btn" class="btn btn-secondary btn-block">Register</button>
                            </form>
                            <div class="text-center mt-3">
                                <a href="#" onclick="toggleSections()">Already have an account? Login</a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="card bg-secondary text-white mt-5 py-2">
        <div class="card-body"></div>
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-12">
                    <p>&copy; 2024 Your Company. All Rights Reserved.</p>
                    <p>
                        <a href="#" class="text-white">Privacy Policy</a> |
                        <a href="#" class="text-white">Terms of Service</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function toggleSections() {
            var loginSection = document.getElementById("loginSection");
            var registerSection = document.getElementById("registerSection");
            if (loginSection.style.display === "none") {
                loginSection.style.display = "block";
                registerSection.style.display = "none";
            } else {
                loginSection.style.display = "none";
                registerSection.style.display = "block";
            }
        }

        document.addEventListener("DOMContentLoaded", function () {
            const registrationForm = document.getElementById('registrationForm');

            registrationForm.addEventListener('submit', async function (event) {
                event.preventDefault(); // Prevent the default form submission

                let firstname = document.getElementById('firstname').value;
                let lastname = document.getElementById('lastname').value;
                let regemail = document.getElementById('regemail').value;
                let regpassword = document.getElementById('regpassword').value;

                // Here you would typically send this data to your server
                // For demonstration, we will just show a success message

                // Simulate successful registration
                   const successAlert = document.getElementById('successAlert');
                    successAlert.classList.remove('d-none'); // Show success alert
                    successAlert.innerHTML = "Registered Successfully!"; // Set success message

                // Optional: Reset the form fields
                  //  registrationForm.reset();
            });
        });
    </script>

</body>

</html>
