<section class="py-5 bg-cover bg-gray">
    <div class="container py-5">
        <h1 class="lined">Contact</h1>
    </div>
</section>

<section class="py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 col-md-6 mb-4">
                        <div class="icon mb-4"><i class="pe-7s-map-2"></i></div>
                        <h5 class="lined mb-4">Address</h5>
                        <p class="text-muted mb-0 text-small">Marathon Chouk </p>
                        <p class="text-muted mb-0 text-small">Near KTHM Collage, Gangapur Road </p>
                        <p class="text-muted mb-0 text-small">Nashik </p>
                    </div>
                    <div class="col-lg-12 col-md-6 mb-4">
                        <div class="icon mb-4"><i class="pe-7s-phone"></i></div>
                        <h5 class="lined mb-4"> Mobile Number </h5>
                        <p class="text-muted font-weight-bold">4534-65465-56546</p>
                    </div>
                    <div class="col-lg-12 col-md-6 mb-4">
                        <div class="icon mb-4"><i class="pe-7s-mail-open"></i></div>
                        <h5 class="lined mb-4">Gmail</h5>
                        <ul>
                            <li><a href="#" class="font-weight-bold text-small">AnandZooNashik@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
           
                    <?php
                    if (isset($_GET['msg'])) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">' . $_GET['msg'] . '
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                         </div>';
                    } ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <script src="vendor/lightbox2/js/lightbox.min.js"></script> -->
<!-- <script src="vendor/leaflet/leaflet.js"></script> -->
<!-- <script src="js/front.js"></script> -->