<?php
session_start();
?>
<?php if ($_SESSION["login_admin_status"] !=null && $_SESSION["login_admin_status"]==true ):
    include "header_admin.php";
include "dataBase.php";
$artists=$db->query("SELECT * FROM artists");
    ?>

    <div class="container d-flex justify-content-center mt-5 card_update" >

        <div class="container py-5 h-100 " >
            <div class="row d-flex justify-content-center align-items-center h-25" >
                <div class="col-12 col-md-9 col-lg-7 col-xl-8" >
                    <div class="card  text-light card_add card_login" >
                        <div class="card-body p-5 text-center">

                            <form method="post" action="add_album_process.php" enctype="multipart/form-data">
                                <h2 class="mb-5 mt-5">Add New Album</h2>
                                <!-- Email input -->

                                <div class="input-container mb-5">
                                    <input type="text" name="name" required=""/>
                                    <label>Name</label>
                                </div>
                                <div class="input-container mb-5" >
                                    <input type="file" name="image" required=""/>
                                    <label id="margin_label">image source</label>
                                </div>


                                <div class="input-container mb-5" >

                                    <select class="form-select bg-dark text-light" aria-label="Default select example" name="artists_id" >
                                        <?php foreach ($artists as $artist):?>
                                        <option value="<?php echo $artist["id"];?>" class="text-light" selected><?php echo $artist["name"];?></option>
                                        <?php endforeach;?>
                                    </select>

                                </div>



                        </div>

                        <!-- 2 column grid layout for inline styling -->

                        <div class="d-flex justify-content-center button_add_position">
                            <input type="submit" class="btn btn-secondary btn-block mb-5 add_button" value="ADD" </input>

                        </div>
                        <!-- Submit button -->




                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


<?php else:
    header("Location:index.php");
endif;
?>


<?php include "footer_admin.php";?>
