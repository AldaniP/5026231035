<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />

        <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Start Bootstrap</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="{{ route('ets') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('resume') }}">Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('projects') }}">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <!-- Contact Form -->
            <section class="py-5">
                <div class="container py-5">
                  <div class="mx-auto" style="max-width: 500px">
                    <h3 class="text-center mb-4">Get a Quote</h3>
                    <form onsubmit="return validasi();">
                      <div class="form-group">
                          <label for="name">Full Name</label>
                          <input type="text" id="name" class="form-control" placeholder="Enter Your Full Name Here" />
                      </div>
                      <div class="form-group">
                          <label for="email">Email Address</label>
                          <input type="email" id="email" class="form-control" placeholder="Enter Your Valid Email Adress Here" />
                      </div>
                      <div class="form-group">
                          <label for="phone">Phone Number</label>
                          <input type="tel" id="phone" class="form-control" placeholder="Enter Your Phone Number Here" />
                      </div>
                      <div class="form-group">
                          <label for="service">Which service would you like a quote for?</label>
                        <select id="service" class="form-control">
                          <option value="">Select a Service</option>
                          <option>Flat Roofing</option>
                          <option>Main Roof</option>
                          <option>Windows & Doors</option>
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="address">Address</label>
                        <input type="text" id="address" class="form-control" placeholder="Enter Your Address Here" />
                      </div>
                      <div class="form-group">
                          <label for="city">Post Code</label>
                        <input type="text" id="postcode" class="form-control" placeholder="Enter Post Code Here" />
                      </div>
                      <div class="form-group">
                          <label for="postcode">Message</label>
                        <textarea id="message" class="form-control" rows="3" placeholder="Leave your Message Here"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary btn-block">Send</button>
                    </form>
                  </div>
                </div>

                <!-- JS Libraries -->
                <script src="template.js"></script>
              </section>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
