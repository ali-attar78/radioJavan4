<?php include "header_main.php";
include "dataBase.php";
$genres=$db->query("SELECT * FROM genres");


?>


    <div class="container">
        <h2 class="text-light mt-3" >Genres</h2>
        <hr class="text-light">
        <div class="row mt-3">
            <?php foreach ($genres as $genre):?>
            <div class="col-lg-2 col-md-4 col-sm-6 d-flex justify-content-center mt-3 objectAnimation">

                <a 
                <?php if ($genre["id"]==9):?>
                    href="artists.php"
                    <?php else:?>
                href="genre_musics.php?genre_id=<?php echo $genre["id"];  ?>"
                <?php endif;?>
                >
                    <img src="<?php echo $genre["image"]; ?>" style="width:200px" class="rounded-4">
                    <h6 class="text-light mt-1 subname"><?php echo $genre["name"];?></h6>
                </a>

            </div>
            <?php endforeach; ?>
        </div>

    </div>


<?php include "footer_main.php"; ?>