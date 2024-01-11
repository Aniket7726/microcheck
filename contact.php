<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <header>
    <?php include("header.php");?>
    </header>

    <main>

        <section class="about_top">
            <div class="container d-flex justify-content-center align-items-center">
                <h2>Contact</h2>
            </div>
        </section>

        <section class="form_location">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 my-5">
                        <div class="box">
                            <h2>Get in Touch</h2>
                        <form>
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-4">
                                    <div class="col">
                                        <div  class="form-outline">
                                            <input type="text" id="" placeholder="Name" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div  class="form-outline">
                                            <input type="email" id="form3Example2" placeholder="Email" class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mb-4">
                                <select class="form-control" id="Select2">
                                        <option value="" selected="">Services</option>
                                        <option value="1">8 AM TO 10AM</option>
                                        <option value="1">10 AM TO 12PM</option>
                                        <option value="1">12PM TO 2PM</option>
                                        <option value="1">2PM TO 4PM</option>
                                        <option value="1">4PM TO 6PM</option>
                                        <option value="1">6PM TO 8PM</option>
                                        <option value="1">4PM TO 10PM</option>
                                        <option value="1">10PM TO 12PM</option>
                                    </select>
                                </div>

                                <!-- messagebox -->
                                <div  class="form-outline mb-4">
                                    <textarea name="" placeholder="Message" class="col-12 p-2" id="" cols="30" rows="10"></textarea>
                                </div>
                                <!-- Submit button -->
                                <button><a href="">Send Message</a></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 my-5 d-flex justify-content-center flex-column">
                        <ul>
                            <li class="d-flex justify-content-center flex-column">
                                <span>
                                    <i class="bi bi-house-door"></i>
                                </span>
                                <h6>Buttonwood, California.</h6>
                                <p>Rosemead, CA 91770</p>
                            </li>
                            <li class="d-flex justify-content-center flex-column">
                                <span>
                                    <i class="bi bi-phone"></i>
                                </span>
                                <h6>00 (440) 9865 562</h6>
                                <p>Mon to Fri 9am to 6pm</p>
                            </li>
                            <li class="d-flex justify-content-center flex-column">
                                <span>
                                    <i class="bi bi-envelope-at"></i>
                                </span>
                                <h6>support@colorlib.com</h6>
                                <p>Send us your query anytime!</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <?php include("footer.php");?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>