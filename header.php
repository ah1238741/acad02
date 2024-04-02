<section class="header">
    <nav class="navbar2 navbar-expand-lg navbar-dark mynavbar">
        <div class="container">
            <a class="navbar-brand dp-logo" href="#"><img src="images/logo.svg" alt="" srcset=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div>
                    <a class="navbar-brand dp-logo2" href="#"><img src="images/logo.svg" alt="" srcset=""></a>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="assignment-writing.php">Assignment</a></li>
                            <li><a class="dropdown-item" href="dissertation.php">Dissertation</a></li>
                            <li><a class="dropdown-item" href="thesis.php">Thesis</a></li>
                            <li><a class="dropdown-item" href="couresework.php">Couresework</a></li>
                            <li><a class="dropdown-item" href="research.php">Research Paper</a></li>
                            <li><a class="dropdown-item" href="exam.php">Online Exam</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Blog
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="blog.php">Blog</a></li>
                            <li><a class="dropdown-item" href="blog-inner.php">Blog Inner</a></li>
                        </ul>

                    </li>
                </ul>
                <div class="btn2">
                    <a href="#" class="btn-get" data-bs-toggle="modal" data-bs-target="#exampleModal">Get Started <i
                            class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </nav>

</section>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <!--<h4>Sign Up And Avail Discount Upto 30%</h4>-->
                <h4>Get Free quote for the writing services</h4>
                <form class="row g-3" method="post" action="#">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" pattern="[A-Za-z ]+" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Phone No.</label>
                        <input type="tel" class="form-control" name="phone" pattern="^\d{11}$" required>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4"
                            pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" required>
                    </div>

                    <div class="mb-3 col-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Send Us Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="resize:none"
                            name="message" required></textarea>
                    </div>


                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn_yellow">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>