
<section>
    <div class="container py-5 w-75">
        <div class="row">

            <div class="card" >
                <img class="card-img-top h-50" src="<?php echo $_GET['img']; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_GET['name']; ?></h5>
                    <p class="card-text"><?php echo $_GET['des']; ?></p>
                    <br>
                    <a href="router.php?page=portpholio" class="card-link btn btn-dark text-uppercase">Go Back <i class="carousel-control fa-solid fa-arrow-left text-success fs-3"></i></a>

                </div>

            </div>
        </div>
    </div>
</section>

