<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- 3 party -->
    <link href="includes/normalize.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet"> 
    <!-- Solution style -->
    <link href="styles/main.css" rel="stylesheet">
   <title>Nordlid</title>
</head>
<body>
    
    <header>
    <!-- Logo -->
    <div class="container">
        <nav class="mt-4 mb-4">
            <a href="/"><img height="25" src="images/logo.png" alt="Logo"></a>
        </nav>
    </div>
    </header>
    <!-- Carousel -->
    <div class="mb-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url('images/slide1.jpg')">
                    <div class="container d-flex align-items-center h-100">
                        <div class="row">
                            <div class="col-10 offset-1">        
                                <span class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua.</span>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('images/slide2.jpg')">
                    <div class="container d-flex align-items-center h-100">
                        <div class="row">
                            <div class="col-10 offset-1">        
                                <span class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua.</span>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('images/slide3.jpg')">
                    <div class="container d-flex align-items-center h-100">
                        <div class="row">
                            <div class="col-10 offset-1">        
                                <span class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua.</span>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Forrige</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Næste</span>
                </a>
        </div>
    </div>
    <!-- Tekst -->
        <div class="container mb-5">
            <div class="row">
                    <div class="col-12">
                        <p class="intro mb-5">
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua.
                           Reprehenderit in voluptate velit esse cillum dolore eu fugiatnulla pariatur.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <p class="pt-2">
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna aliqua.
                           Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                           nisi ut aliquip ex ea commodo consequat.
                           <br><br>
                           Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                           nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                           reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                    <div class="col-md-6 offset-md-1">
                            <form class="needs-validation" method="POST" action="https://s2331.t.eloqua.com/e/f2" novalidate>
                                <div class="form-group input-box">
                                  <input type="text" class="form-control pl-0" placeholder="Navn" name="fullName" required>
                                  <div class="valid-feedback"></div>
                                  <div class="invalid-feedback">
                                        UPS! Du mangler at udfylde noget
                                    </div>
                                </div>
                                <div class="form-group input-box">
                                  <input type="text" class="form-control pl-0" placeholder="E-mail" name="emailAddress" required>
                                  <div class="invalid-feedback">
                                        UPS! Du mangler at udfylde noget
                                    </div>
                                </div>
                                <div class="form-group input-box">
                                  <input type="text" class="form-control pl-0" placeholder="Tlf" name="mobilePhone" required>
                                  <div class="invalid-feedback">
                                        UPS! Du mangler at udfylde noget
                                    </div>
                                </div>
                                <div class="form-group form-check">
                                  <input type="checkbox" class="form-check-input" name="permission" id="permission" required> 
                                  <div class="invalid-feedback">
                                    </div>
                                  <label class="form-check-label" for="permission">Jeg giver hermed tilladelse til, at Nordlid må gemme og bruge min data til interne projekter, jeg kan til hver en tid tilbagekalde min accept.</label>
                                </div>
                                    <input type="hidden" name="elqFormName" value="cph-business">
                                    <input type="hidden" name="elqSiteID" value="2331">
                                    <button type="submit" class="btn btn-primary">Send</button>
                          </form>
                    </div>
            </div>    
    </div>

    <!-- Ikoner  -->
    <div class="pt-5 pb-5 bg-icons">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a class="d-flex justify-content-center" href="/"><img height="75" src="images/icon-light-bulb.png" alt="Logo"></a>
                    <p class="text-center text-white m-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div class="col-md-4">
                    <a class="d-flex justify-content-center" href="/"><img height="75" src="images/icon-speech-bubble.png" alt="Logo"></a>
                    <p class="text-center text-white m-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div class="col-md-4">
                    <a class="d-flex justify-content-center" href="/"><img height="75" src="images/icon-gold-medal.png" alt="Logo"></a>
                    <p class="text-center text-white m-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>    
    </div>

    <!-- Contact -->
    <footer>
        <div class="bg-dark pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <img src="images/footer_contact.png" alt="">   
                </div>
                <div class="col-md-6 align-items-md-end justify-content-md-end d-flex">
                    <img class="mt-4" height="40" src="images/some-icons.png" alt="">                
                </div>
            </div>
        </div>
        </div>
    </div>
    </footer>

            <!-- Bootstrap javascript -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="javascript.js"></script>
</body>
</html>