<?php include 'header.php'; ?>
<style>
    body{
        background-color: #062c33;
    }
</style>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card ">
                    <div class="card-header text-center bg-warning font-weight-bolder">Sum of Series</div>

                    <div class="card-body bg-info text-white">

<!--                        --><?php //session_start(); unset($_SESSION['name']); ?>
                        <form action="action.php" method="POST">

                            <div class="form-group row">
                                <label for="" class="col-md-3">Starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="starting_number" required class="form-control" value = "<?php echo $result['starting_number']; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="ending_number" required class="form-control" value="<?php echo $result['ending_number']; ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" readonly ><?php echo isset($result['result']) ? $result['result'] : '' ?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="series_btn" class="btn btn-success btn-block" value="Submit" >
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>
