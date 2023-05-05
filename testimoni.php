<?php
require_once "core/init.php";

require_once "view/header.php";
$db = new firebaseRDB($databaseURL);

$i = 0;
$data = $db->retrieve("testimoni");
$data = json_decode($data, 1);

?>
<div class="col mt-3" id="testimonial">
    <div class="row">
        <div class="testimonial">
            <?php $data = array_reverse($data); 
            if(is_array($data)){
                foreach($data as $id => $testimoni){
                    if ($i < 3) { ?>
                        <div class="card my-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title-b"> <?= $testimoni["nama"] ?></h5>
                                        <p class="card-text">
                                            <?= $testimoni["kalimat"] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++;
                    }   
                }
            }?>
            <?php foreach ($data2 as $row) : ?>
                <?php if ($i < 3) { ?>
                    <div class="card my-4">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title-b"> <?= $row["nama"]  ?></h5>
                                    <p class="card-text">
                                        <?= $row["kalimat"] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $i++;
                } 
            endforeach; ?>
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