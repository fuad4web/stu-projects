<?php 
    include '../subprojects/header.php';
    $admin_id = $_SESSION['admin_id'];
    $admin = $getFromS->userData($admin_id);
    $get_dept =  $getFromS->getAllDept();

    if($getFromS->loggedIn() === false) {
        echo '<script>window.location.href = "admin_register/admin_signin.php";</script>';
    }

?>
<br><br><br><br><br>
    <div id="notification">
      <div id="notify">
          <h5 id="yescontent"></h5>
          <h5 id="nocontent"></h5>
      </div>
    </div>
    <div class="slide-images">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../images/hero-6.jpg" alt="First slide">
        <div class="contents">
            <div class="heading">
                <h2>First Slider</h2>
            </div>
            <div class="des">
                <p>First Slider that is capable of doing many things, don't just be surprisde with what you will be seeing now o</p>
            </div>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../images/hero-8.jpg" alt="Second slide">
      <div class="contents">
            <div class="heading">
                <h2>First Slider</h2>
            </div>
            <div class="des">
                <p>First Slider that is capable of doing many things, don't just be surprisde with what you will be seeing now o</p>
            </div>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../images/hero-9.jpg" alt="Third slide">
      <div class="contents">
            <div class="heading">
                <h2>First Slider</h2>
            </div>
            <div class="des">
                <p>First Slider that is capable of doing many things, don't just be surprisde with what you will be seeing now o</p>
            </div>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
    <?php 
        if(isset($error)) {
            echo '<div class="alert alert-danger alert-center">
                    <div class="text-center">'.$error.'</div>
                  </div>';
        }
    ?>
    <div class="logout">
        <button name="button" class="btn_logout"><a href="admin_logout.php">LOGOUT</a></button>
    </div>

        <form class="admin-edit mx-5" action="admin_formvalid.php" enctype="multipart/form-data" method="POST">
        <h3>You are Welcome, <?=@ $admin->fullname ?></h3>
                <h3><label for="inputCity">Departments with Topics</label></h3>
                <select id="custom-select" name="dept" class="form-control custom-select" style="width: 200px;" required>
                <option value=""></option>
                <?php foreach($get_dept as $see_dept): ?>
                    <option value="<?=@$see_dept->dept_id;?>"><?=@$see_dept->dept_name;?></option>
                <?php endforeach; ?>
                </select>

                <div class="form-group mt-3">
                    <h3 class="text-center"><label for="inputAddress2">Project Topics</label></h3>
                    <input type="text" name="topic" class="form-control" id="projectTopics" placeholder="Input Projects Topic" required>
                </div>
                
                <div class="form-row mt-5">
                    <div class="form-group col-md-6">
                    <h3><label for="inputCity">Amount</label></h3>
                    <input type="text" name="strike_price" class="form-control" id="inputCity" placeholder="Strike Price" required>
                    </div>
                    <div class="form-group col-md-6">
                    <h3><label for="inputState">Actual Price</label></h3>
                    <input type="text" name="price" class="form-control" placeholder="Actual Price" id="price" required>
                    </div>
                </div>
                <div class="form-group mt-5">
                    <h3 class="text-center"><label for="inputAddress2">Chapter One</label></h3>
                    <textarea style="height: 200px;" type="text" name="chapter" class="form-control" id="projectTopics" placeholder="Chapter One(1)"></textarea>
                </div>
                <div class="form-group">
                    <div class="form-row mt-5">
                        <div class="form-group col-md-3">
                            <h5><label for="inputState">Upload Avater</label></h5>
                                <input name="avater_img" class="uploadImage" type="file" id="uploadImage" required>
                        </div>
                        <div class="form-group col-md-3">
                            <h5><label for="inputState">Upload Prev_Image</label></h5>
                                <input name="prev_img" class="uploadImage" type="file" id="uploadImage" required>
                        </div>
                        <div class="form-group col-md-3">
                            <h5><label for="inputState">Upload WriteUp</label></h5>
                                <input name="writeup" class="uploadDocument mr-5" type="file" id="uploadDocument" required>
                        </div>
                        <div class="form-group col-md-3">
                            <h5><label for="inputState">Upload Software</label></h5>
                                <input name="software" class="uploadDocument mr-5" type="file" id="uploadDocument" required>
                        </div>
                    </div>
                </div>
                <div class="submit text-center">
                    <button type="submit" name="addInfo" class="btn btn-md btn-rose tra-black-hover submit">Add  Data</button>
                </div>
                <br><br>
        </form>

        <form action="admin_formvalid.php" method="POST">
                <div class="mx-5 my-5">
                    <div class="form-group col-md-6">
                        <h3><label for="inputState">New Department Name</label></h3>
                        <input type="text" name="dept" class="form-control" placeholder="Add New Department" id="newDept" required>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <h3><label for="inputCity">Department Description</label></h3>
                        <input type="text" name="dept_description" class="form-control" id="dept_description" placeholder="Department Description">
                    </div>
                    <div class="submit text-center mb-3">
                        <button type="submit" name="addDept" class="btn btn-md btn-rose tra-black-hover submit">Add  New Department</button>
                    </div>
                </div>
        </form>

        <?php 
        if(isset($_GET['successful'])) {
            echo '<script>
                    yescontent = document.getElementById("yescontent");
                    noContent = document.getElementById("nocontent");
                    function displaySuccess() {
                        yescontent.innerHTML = "Successfully Added";
                        noContent.style.display = "none";
                    }
                    setTimeout(() => {
                        yescontent.remove();
                    }, 2000);
                    //setTimeout("displaySuccess()", 2000);
                 </script>';
        } elseif(isset($_GET['unsuccessful'])) {
            echo '<script>
                    yescontent = document.getElementById("yescontent");
                    noContent = document.getElementById("nocontent");
                    function displayError() {
                        noContent.innerHTML = "Not Successful";
                        yescontent.style.display = "none";
                    }
                    setTimeout("displayError()", 2000);
                 </script>';
        } elseif(isset($_GET['projectExisting'])) {
            echo '<script>
                    yescontent = document.getElementById("yescontent");
                    noContent = document.getElementById("nocontent");
                    function displayError() {
                        noContent.innerHTML = "Project Existing";
                        yescontent.style.display = "none";
                    }
                    setTimeout("displayError()", 2000);
                 </script>';
        } else {
            echo '<script>
            yescontent = document.getElementById("yescontent");
            noContent = document.getElementById("nocontent");
            function displayError() {
                noContent.innerHTML = "Fill the Form";
                yescontent.style.display = "none";
            }
            setTimeout(() => {
                noContent.remove();
                yescontent.remove();
            }, 2000);
            // setTimeout("displayError()", 2000);
            // setTimeout("displayError()", 4000);
         </script>';
        }
    ?>

<?php 
    include '../subprojects/footer.php';
?>
