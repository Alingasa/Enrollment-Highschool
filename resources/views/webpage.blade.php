<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Enrollment - HighSchool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="webpage/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="webpage/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="webpage/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="webpage/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="webpage/css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="#" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-users me-2"></i>MLG-HighSchool  </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto py-0">
                    <li class="nav-item"><a href="#home" class="nav-link active">Home</a></li>
                    <li class="nav-item"><a href="#1" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#2" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="#3" class="nav-link">Contact Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Prints
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/studentlist">Students List</a>
                            <a class="dropdown-item" href="#">Teachers List</a>
                            <a class="dropdown-item" href="#">Sections List</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="default_images/mlg.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">MLG COLLGE OF LEARNING INC.</h1>
                            <a href="{{url('/Enroll')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Enroll Now</a>
                            <a href="#3" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="default_images/mlg2.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">MLG COLLGE OF LEARNING INC.</h1>
                            <a href="{{url('/Enroll')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Enroll Now</a>
                            <a href="#3" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Total Students</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{$students}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Enrolled</h5>
                            <h1 class="mb-0" data-toggle="counter-up">{{$Enrolled}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Strands</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">{{$strand}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div id="1" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">Enrollment for HighSchool students in MLG College of Learning</h1>
                    </div>
                    <p class="mb-4">The High School Enrollment System is designed to streamline and simplify the student enrollment process. It facilitates the registration of new students, the re-enrollment of existing students, and the management of student data. </p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Transferee</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Old Students</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>New Students</h5>
                            {{-- <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Enrollments</h5> --}}
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">


                    </div>
                    <a href="{{url('/Enroll')}}" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Enroll Now</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="default_images/enrollment.png" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div id="2" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                <h1 class="mb-0">HighSchool Enrollments</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Security</h4>

                        {{-- <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">Graph</h4>
                        {{-- <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p> --}}
                        {{-- <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Development</h4>
                        {{-- <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a> --}}
                    </div>
                </div>

    </div>
    <!-- Service End -->

    <!-- Quote Start -->
    <div id="3" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                        <h1 class="mb-0">Feel Free to Contact Us</h1>
                    </div>

                        <p class="mb-4">We are committed to providing you with the best assistance possible and ensuring a smooth enrollment process. </p>

                </div>

                <div class="col-lg-5">


                    <script>

                        @if(session('sent_success'))
                        Swal.fire({
                            icon: 'success',
                            title: 'Sent',
                            showConfirmButton: false,
                            timer: 2500
                        });
                        @endif
                     </script>
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form action="{{url('/messages')}}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0 @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0 @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" placeholder="Your Email" style="height: 55px;">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0 @error('messages') is-invalid @enderror" name="messages" rows="3"value="{{old('messages')}}" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Send a Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What Our Students Say About Our School Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="webpage/img/testimonial-2.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Jandel Lopez</h4>
                            <small class="text-uppercase">BSIT-3</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Enrolling at MLG College of Learning has been a transformative experience for me. The dedicated faculty, comprehensive curriculum, and supportive community have truly exceeded my expectations. I feel well-prepared and confident as I pursue my academic and career goals. Thank you, MLG College of Learning, for fostering an environment where students thrive!"
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="webpage/img/testimonial-1.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Sheila Alimorin</h4>
                            <small class="text-uppercase">BSED-4</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        "Choosing MLG College of Learning was one of the best decisions I've made. The faculty's expertise and personalized attention have been invaluable in shaping my academic journey. The resources and opportunities provided here have not only broadened my knowledge but also prepared me for future challenges. I'm grateful for the enriching experience and supportive community at MLG College of Learning!"
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="webpage/img/testimonial-3.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Daniel Padilla</h4>
                            <small class="text-uppercase">BSIT-1</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        "Attending MLG College of Learning has been an incredible journey filled with growth and opportunity. The dedicated staff and enriching curriculum have equipped me with the knowledge and skills I need to succeed. I'm grateful for the supportive community that encourages both personal and academic development. MLG College of Learning truly sets a high standard for education!"
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="webpage/img/testimonial-4.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Bini Mhika</h4>
                            <small class="text-uppercase">BEED</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        "Enrolling at MLG Collage of Learning has been a game-changer for me. The faculty's commitment to excellence and the vibrant learning environment have inspired me to push my boundaries and achieve more than I thought possible. I'm thankful for the invaluable experiences and lifelong friendships I've gained here. MLG College of Learning has truly set me on a path to success!"
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->




   <!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-12 col-md-6 justify-content-center">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Get In Touch</h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">Brgy. Atabay Hilongos, Leyte 6524</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">mlgcl@example.com</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Quick Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href=""><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-light mb-2" href="#1"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-light mb-2" href="#2"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                            <a class="text-light mb-2" href="#3"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid text-white" style="background: linear-gradient(135deg, #061429 0%, #212121 100%);">
    <div class="container text-center py-4">
        <p class="mb-0">&copy; 2024 <a class="text-white" href="#">MLG High School</a>. All Rights Reserved.</p>
        {{-- <p class="mb-0">Designed with <i class="bi bi-heart-fill text-danger"></i> by <a class="text-white" href="https://yourwebsite.com">Your Students</a></p> --}}
    </div>
</div>
<!-- Footer End -->



    <!-- Back to Top -->
    <a href="#spinner" onclick="backtotop()" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="webpage/lib/wow/wow.min.js"></script>
    <script src="webpage/lib/easing/easing.min.js"></script>
    <script src="webpage/lib/waypoints/waypoints.min.js"></script>
    <script src="webpage/lib/counterup/counterup.min.js"></script>
    <script src="webpage/lib/owlcarousel/owl.carousel.min.js"></script>



    <!-- Template Javascript -->
    <script src="webpage/js/main.js"></script>



    <script>

        function backtotop(){
            window.location.href = "http://newenrollmentforhighschool.test/";
        }

        </script>
</body>

</html>
