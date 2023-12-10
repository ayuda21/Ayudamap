<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/final.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/transition.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/0a6c8de414.js" crossorigin="anonymous"></script>
    <title>AyudaMap</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">


    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand logo-text" href="#home"><img src="img/logo1.png" height="50px" width="90px">AyudaMap</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="log/login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <section id="home">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-10">
            
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="heading">
            <h1>About us</h1>
        </div>
        <div class="container">
            <div class="about">
                <div class="about-image">
                    <img src="img/logo1.png" alt="AyudaMap Logo">
                </div>
                <div class="about-content">
                    <h2>AyudaMap</h2>
                    <p>At AyudaMap, we are passionate about making a positive impact on the lives of Ayuda Beneficiaries through the power of Geographical Information Systems (GIS). Our mission is to provide a user-friendly, innovative, and accessible platform that empowers individuals and organizations to navigate, understand, and leverage spatial data to improve the lives and communities of the Beneficiaries.</p>

                    <p>We believe in the potential of GIS technology to revolutionize how Ayuda Beneficiaries access critical information, make informed decisions, and connect with essential resources. With AyudaMap, we aim to bridge the gap between geography and social welfare, creating a seamless experience that simplifies the complex world of spatial data for everyone.</p>
                </div>
            </div>

      

        </div>
    </section>

    <?php require('components/footer.inc.php'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script>
      
        document.querySelector('.navbar-toggler').addEventListener('click', function () {
      
            console.log('Navbar toggler clicked!');
        });
    </script>

</body>

</html>
