<?php  ?>


<section class="">
    <!-- left side  -->
    <div class="row">
        <div class="col-md-4 bg-left d-block position-fixed">
            <div class="img-parent-div">
                <div class="img-child-div">
                    <img   src="<?php img("myphoto.jpg");?>" alt="">

                </div>

            </div>
            <div >
                <p class="text-capitalize  text-center fs-5 fw-semibold p-0 wow fadeInLeftBig " data-wow-duration="3s">md rumman hossain juwel</p>
            </div>
            <div class="pb-5">
                <ul class="navbar navbar-nav pb-5 text-uppercase">
                    <li ><a class="nav-item text-decoration-none active  hov fs-5"  href="#">Home</a></li>
                    <li ><a class="nav-item text-decoration-none  hov fs-5" href="#about">About</a></li>
                    <li ><a class="nav-item text-decoration-none  hov fs-5" href="#service">Services</a></li>
                    <li ><a class="nav-item text-decoration-none  hov fs-5" href="#portpholio">Portfolio</a></li>
                    <li ><a class="nav-item text-decoration-none  hov fs-5" href="#contact">Contact</a></li>
                </ul>
            </div>

            <div class="text-white text-center  wow fadeInUp " data-wow-duration="3s">
                <i class="hov3 fa-brands fa-facebook p-2 fs-3 wow fadeInLeft" data-wow-duration="3s"></i>
                <i class="hov3 fa-brands fa-instagram p-2 fs-3 wow fadeInRight" data-wow-duration="3s"></i>
                <i class="hov3 fa-solid fa-envelope fs-3 p-2 wow fadeInUp" data-wow-duration="3s"></i>
            </div>

        </div>
        <!-- reight side  -->
        <div class="col-md-8 py-2 h-100" style="    margin-left: 358px;">
            <div class="row">
                <div class="col-md-5">
                    <h3 class="fw-bold fs-1 p-lg-2">Hi, I'm Juwel</h3>
                    <h3 class="fw-bold fs-1 p-lg-2">Creative Designer</h3>
                    <h3 class="fw-bold fs-1 p-lg-2">Based on Laravel</h3>

                    <div class="py-2 px-1">
                        <p >I'm a Laravel based web designer &amp; front‑end developer </p>
                    </div>
                    <div class="py-5">
                        <a href="#" class="btn btn bg-btn hov1">Got a project</a>
                        <a href="#" class="btn btn bg-btn  bg-white text-black hov2  "> Let's talk</a>
                    </div>

                    <div class="py-5">
                        <ul class=" navbar-nav " style="border-left: 2px solid brown;">
                            <li><a class="nav-item text-decoration-none  fw-semibold aa " href="#">+880 1689048113</a></li>
                            <li><a class="nav-item text-decoration-none  fw-semibold aa" href="#">mdjuwel016@gmail.com</a></li>
                            <li><a class="nav-item text-decoration-none  fw-semibold aa" href="#">Mirpur, at Dhaka in Bangladesh</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <img class="tranparentImg wow fadeInRightBig " data-wow-duration="5s" src="<?php img("bgtransprent.png");?>" alt="">
                </div>
            </div>



        </div>


        <!-- about  -->
        <div id="about" class="col-md-8 py-4 h-100" style="    margin-left: 358px;">
            <div class="row">
                <div class="col-md-4 py-2" >
                    <div class="py-5 p-lg-2">
                        <p class="text-uppercase fs-4 pt-5"> - about me</p>
                        <h3>MRH Juwel</h3>
                        <p>Creative Laravel Developer </p>
                        <a href="#" class=" bg-btn hov1 btn"> got a project? </a>

                    </div>

                </div>
                <div class="col-md-8 py-5" >
                    <div class="py-5 p-lg-2">
                        <p class=" fs-5 pt-5"> Hello my name is Md Rumman Hossain Juwel. I'm a web designer and developer based on Larvel framework <br>
                            and I'm very passionate and dedicated to my work.</p>

                        <p class=" fs-5 pt-2"> A professional a graphic designer, I have acquired the skills and knowledge necessary to make your project a success. I enjoy every step of the design process, from discussion and collaboration.</p>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 border-1  skills-div">
                    <div class="sikls-child">
                        <h3>2+</h3>
                        <p> years of experience</p>
                    </div>
                </div>
                <div class="col-md-4 border-1 bg-info-subtle skills-div">
                    <div class="sikls-child">
                        <h3>20+</h3>
                        <p> PROJECTS COMPLETED</p>
                    </div>
                </div>
                <div class="col-md-4 border-1  skills-div">
                    <div class="sikls-child">
                        <h3>15+</h3>
                        <p> HAPPY CLIENTS</p>
                    </div>
                </div>
            </div>



        </div>

        <!-- service  -->
        <div id="service" class="col-md-8 py-5  h-100" style="    margin-left: 358px;">
            <div class="row" >
                <div class="col-md-4">
                    <div class="">
                        <p class="text-uppercase ">-Services</p>
                        <h2 class="text-capitalize">my services</h2>
                    </div>
                </div><div class="col-md-4 ">
                    <div class="">
                    </div>
                </div><div class="col-md-4 ">
                    <div class="">
                        <h5 style="padding-top: 50px;" >support@juwel.com</h5>
                    </div>
                </div>
            </div>
            <!-- card ---------------- -->
            <div class="row " >
                <?php $i=1; foreach ($allservicess as $ser => $service) { ?>
                <div class="col-md-4  m-1" style="width: 31%;" >
                    <div class="card wow fadeInUp" data-wow-duration="3s">
                        <div class="card-body">
                            <p class="card-title">0<?php echo $i++ ?></p>
                            <h5 class="card-subtitle mb-2 "><?php echo $service['Name']; ?></h5>
                            <p class="card-text"><?php echo $service['des']; ?></p>
                            <a  href="router.php?page=card-details&name=<?php echo $service['Name'] ?>&des=<?php echo $service['des'] ?>&img=<?php echo $service['img']; ?>" class="card-link btn bg-btn "><?php echo $service['btn']; ?> <i class="fa-solid fa-arrow-right"></i></a>

                        </div>
                    </div>
                </div>

                <?php } ?>





            </div>



        </div>

        <!-- portpholio  -->
        <div id="portpholio" class="col-md-8 py-5  h-100" style="    margin-left: 358px; padding-bottom:130px !important;">
            <div class="row" >
                <div class="elisc_tm_portfolio_title w-full float-left flex items-end justify-between">
                    <div class="elisc_tm_title w-auto float-left">
                        <span class="w-full float-left font-medium uppercase inline-block text-uppercase">- my portpholio</span>
                        <h3 style="position: relative;" class="text-[40px] font-extrabold">Recent completed works</h3>

                    </div>

                </div>
            </div>
            <!-- Owl carousel ---------------- -->
            <div class="row slider-div " >
                <div class="col-md-12  m-1  "  >
                    <!-- boostrap self slider starting  -->
                    <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" id="slider">
                        <!-- data-bs-ride = carousel kore fastly ..... slide class slow kore.... interval time waiting kore slide hoy  -->
                        <div class="carousel-indicators">
                            <!-- data-bs-slide-to="0" hosse (- - - -) touri kore per imgae er jonno  -->
                            <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#slider" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#slider" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#slider" data-bs-slide-to="3"></button>
                            <button type="button" data-bs-target="#slider" data-bs-slide-to="4"></button>
                        </div>
                        <!-- carousel inner er moddhe amara image rakhi r text button etc rakhi  -->
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                <img src="<?php img("owl1.jpg"); ?>"class="w-100  " id="slider-img" alt="">
                                <div class="carousel-caption">
                                    <div class="row">

                                        <div class="col-md-6 offset-md-3  p-2">
                                            <button class="btn btn-success rounded-3 ">Read More..</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php img("owl2.jpg"); ?>" class="w-100 " id="slider-img" alt="">
                                <div class="carousel-caption">
                                    <button class="btn btn-success rounded-3 ">Read More..</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php img("owl3.jpg"); ?>" class="w-100 " id="slider-img" alt="">
                                <div class="carousel-caption">
                                    <button class="btn btn-success rounded-3 ">Read More..</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php img("owl4.jpg"); ?>" class="w-100 " id="slider-img" alt="">
                                <div class="carousel-caption">
                                    <button class="btn btn-success rounded-3 ">Read More..</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php img("owl5.jpg"); ?>" class="w-100 " id="slider-img" alt="">
                                <div class="carousel-caption">
                                    <button class="btn btn-success rounded-3 ">Read More..</button>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php img("owl2.jpg"); ?> " class="w-100 " id="slider-img" alt="">
                                <div class="carousel-caption">
                                    <button class="btn btn-success rounded-3 ">Read More..</button>
                                </div>
                            </div>

                        </div>

                        <a href="#slider"  class="carousel-control-prev" data-bs-slide="prev"><span class="carousel-control fa-solid fa-arrow-left text-success fs-3"></span></a>
                        <a href="#slider"  class="carousel-control-next" data-bs-slide="next"><span class="carousel-control fa-solid fa-arrow-right text-success fs-3"></span></a>

                    </div>
                </div>

            </div>





        </div>


        <!-- contact section  -->
        <div id="contact" class="col-md-8 pt-5 py-5 h-100" style="    margin-left: 358px;">
            <div class="row" >
                <div class="elisc_tm_portfolio_title w-full float-left flex items-end justify-between">
                    <div class="elisc_tm_title w-auto float-left">
                        <span class="w-full float-left font-medium uppercase inline-block text-uppercase">- contact with me</span>
                        <h3 style="position: relative;" class="text-[40px] font-extrabold">Give me your feedback--</h3>

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-8 offset-md-2 pt-5 pb-5 ">
                    <form>
                        <div class="form-group  ">
                            <label for="name">Name: </label>
                            <input class="form-control"  type="text" name="name" id="name" placeholder="your name please.. "> <br>
                        </div>

                        <div class="form-group  ">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div class="form-group">
                            <label for="textarea">Messages..</label> <br>
                            <textarea class="form-control" name="comments" id="textarea" cols="76" rows="10"></textarea>
                        </div>

                        <div class="form-check"><br>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div><br>
                        <button type="submit" class="btn btn-primary w-100 fs-4 text-uppercase">Submit</button>
                    </form>
                </div>
            </div>





        </div>

    </div>


</section>

