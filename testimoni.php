<?php
require_once "core/init.php";

require_once "view/header.php";

$i = 0;

$tbl_testimoni = mysqli_query($conn, "SELECT customer.idCustomer, testimoni.kalimat, customer.name FROM testimoni INNER JOIN customer ON testimoni.idCustomer = customer.idCustomer ORDER BY id_testimoni DESC");
?>


        <div class="col mt-3" id="testimonial">
            <div class="row">
                <div class="testimonial">
                    <?php while ($i < 3) { ?>
                        <div class="card my-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <?php $testimoni = mysqli_fetch_assoc($tbl_testimoni) ?>
                                        <h5 class="card-title-b"> <?= $testimoni["name"]  ?></h5>
                                        <p class="card-text">
                                            <?= $testimoni["kalimat"] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php $i++; } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>