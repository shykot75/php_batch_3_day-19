<?php include 'header.php';

?>


<style>
    body{
        background-color: #5a6268;
    }
</style>

    <section class="py-5">
      <div class="container">
          <div class="row">
              <div class="col-md-8 mx-auto">
                  <div class="card">
                      <div class="card-header bg-info text-center font-weight-bold">Prime Number</div>

                      <div class="card-body bg-dark text-white">
<!--                        --><?php //session_start(); echo $_SESSION['id']; ?>
                          <form action="action.php" method="POST">
                              <div class="form-group row">
                                  <label for="" class="col-md-3">Enter Number</label>
                                  <div class="col-md-9">
                                      <input type="number" name="given_number" class="form-control">
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label for="" class="col-md-3">Result</label>
                                  <div class="col-md-9">
                                      <input type="text"  class="form-control" value="<?php echo isset($result) ? $result : ''  ?>">
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label for="" class="col-md-3"></label>
                                  <div class="col-md-9">
                                      <input type="submit" name="btn" class="btn btn-success btn-block" value="Submit" >
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
