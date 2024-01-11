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
            <h2>About Us</h2>
        </div>
      </section>

      <section class="about py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="Images/about_intro.jpg" width="100%" height="auto" alt="">
            </div>
            <div class="col-md-6 d-flex justify-content-center flex-column">
              <h2>Our Journey</h2>
              <p>Established in 2013, Microcheck is Rajasthan's 1st Exclusive Medical Microbiology Lab and  NABL Accredited Lab. Dr. Shalini Gupta is a renowned microbiologist with  20+ years of expertise in the field. The lab has a well-trained team to handle all its operations. Micrcheklab has been conducting testing for clinical trials for pharmaceutical companies and academic researchers. We have set a benchmark with our wide range of services and quality.</p>
              <p>Microcheklab uses state-of-the-art equipment for mycobacterial culture (AFB culture) and susceptibility testing (PCR), Antibiotic resistance pattern testing and monitoring, Swine Flu (H1N1) Real-Time PCR, Dengue-Real Time, Chikungunya-Real Time PCR and many more. All tests are conducted according to current quality standards in compliance with Good Laboratory Practice.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="mission pb-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 d-flex justify-content-center flex-column">
              <h2>Mission</h2>
              <p>Microchek is committed to delivering the most dependable and timely results. We aim to improve our work quality, make more customers happy, and continue contributing to medical research and advancements.</p>
            </div>
            <div class="col-lg-6">
              <img src="Images/mission.jpg" width="100%" height="auto" alt="">
            </div>
          </div>
        </div>
      </section>

      <section class="vission pb-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <img src="Images/vission.jpg" width="100%" height="auto" alt="">
            </div>
            <div class="col-lg-6 d-flex justify-content-center flex-column">
                <h2>Vission</h2>
                <p>Becoming a centre of excellence in the field of medical microbiology, setting the highest national standards, and providing affordable diagnostic solutions to our country. </p>
            </div>
          </div>
        </div>
      </section>

      <section class="slide">
            <div class="container">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active text-center" data-bs-interval="1800">
                            <img src="Images/quote.png" alt="">
                            <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            <p><span>Mosan Cameron,</span>Executive of fedex</p>
                        </div>
                        <div class="carousel-item text-center" data-bs-interval="1800">
                            <img src="Images/quote.png" alt="">
                            <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            <p><span>Mosan Cameron,</span>Executive of fedex</p>
                        </div>
                        <div class="carousel-item text-center" data-bs-interval="1800">
                            <img src="Images/quote.png" alt="">
                            <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            <p><span>Mosan Cameron,</span>Executive of fedex</p>
                        </div>
                    </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button> -->
                </div>
            </div>
        </section>

        <section class="form py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 d-flex justify-content-center flex-column">
                        <div class="form_box">
                            <h2>Make an Appointment</h2>
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
                                    <textarea name="" placeholder="Message" class="col-12" id="" cols="30" rows="10"></textarea>
                                </div>
                                <!-- Submit button -->
                                <button><a href="">Submit</a></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img src="Images/form.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="bg_video py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>View our History</h2>
                        <a href=""><i class="bi bi-play-circle-fill"></i></a>
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