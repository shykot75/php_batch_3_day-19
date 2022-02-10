<?php include 'header.php'; ?>

<style>
    body{
        background-color: #495057;
    }
</style>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card ">
                    <div class="card-header text-center bg-info font-weight-bolder">Registration Form</div>

                    <div class="card-body bg-success text-white">
                        <form action="action.php" method="POST">

                            <div class="form-group row">
                                <label for="" class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="full_name" required class="form-control" value = "" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" required class="form-control" value="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3">Phone Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="number" required class="form-control" value="">
                                </div>
                            </div>

<!--                            <div class="form-group row">-->
<!--                                <label for="" class="col-md-3">Subject</label>-->
<!--                                <div class="col-md-9">-->
<!--                                    <label><input type="checkbox" name="subject[]" value="Bangla"> Bangla </label>-->
<!--                                    <label><input type="checkbox" name="subject[]" value="English"> English </label>-->
<!--                                    <label><input type="checkbox" name="subject[]" value="Math"> Math </label>-->
<!--                                    <label><input type="checkbox" name="subject[]" value="Math"> Physics </label>-->
<!--                                    <label><input type="checkbox" name="subject[]" value="Math"> Chemistry </label>-->
<!--                                </div>-->
<!--                            </div>-->



                            <div class="form-group row">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="register_btn" class="btn btn-danger btn-block" value="Submit" >
                                </div>
                            </div>
                            <h4 class="text-center"><?php echo isset($message) ? $message : '' ?></h4>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>
