<script src="page/student/js_script/student_action.js" type="text/javascript"></script>

<style type="text/css">
  .box_header,
  .box {
    background-color: var(--bg-color);
    color: #ffffff;
    padding: 15px;
    box-shadow: 4px 4px 5px 6px #ccc;
  }

  .box_under_body {
    padding: 15px;
    background-color: #dfe6e9;
  }

  .box_under_body,
  .box_header {
    border-style: solid;
    border-width: 1px;
    border-color: var(--bg-color);
  }

  .upload_body {
    background-color: var(--bg-color);
    padding: 15px;
    color: var(--font-color);
  }

  .box_btn {
    background-color: var(--bg-color);
    padding: 15px;
    color: var(--font-color);
    border-width: 0px;
    margin-top: 20px;
    width: 30%;
  }

  .img_up {
    height: 140px;
    width: 135px;
    margin-top: 15px;
    border-style: solid;
    border-color: #ffffff;
    border-width: 2px;
  }
</style>

<div id="output"></div>
<div class="row" id="add_body">
  <div class="col-xs-10 col-sm-12">
    <div class="boxz">
      <div class="box_bodyy">
        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

        <form action="" id="add_student" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6 border">
              <div class="box_header">
                <div class="panel-title">Personal Information</div>
              </div>

              <div class="box_under_body">
                <?php
                //$site->form_input($level,$name,$id,$type="text",$icon="exclamation-sign",$value="",$ex="",$req="yes")

                $site->form_input("Full Name", "insert_name", "name");
                $site->form_input("Nickname", "nick", "nick");
                $site->form_input("IC Number", "ic_num", "ic_num", "number");
                ?>

                <div class='form-group'>
                  <label class='control-label' for='inputName'><b>Gender</b></label>
                  <div class='input-group'>
                    <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span>
                    <select class='form-control' name='gender' id='brand_add' class='cs-select cs-skin-border' required="">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </div>

                <div class='form-group'>
                  <label class='control-label' for='inputName'><b>Race</b></label>
                  <div class='input-group'>
                    <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span>
                    <select class='form-control' name='race' id='brand_add' class='cs-select cs-skin-border' required="">
                      <option value="Malay">Malay</option>
                      <option value="Chinese">Chinese</option>
                      <option value="Indian">Indian</option>
                      <option value="Iban">Iban</option>
                      <option value="Bidayuh">Bidayuh</option>
                      <option value="Kadazan-Dusun">Kadazan-Dusun</option>
                      <option value="Bajau">Bajau</option>
                      <option value="Orang Asli">Orang Asli</option>
                      <option value="Other">Other</option>
                      <option value="No information">No information</option>
                      <option value="Not applicable">Not applicable</option>
                      <option value="Not specified">Not specified</option>
                    </select>
                  </div>
                </div>

                <div class='form-group'>
                  <label class='control-label' for='inputName'><b>Religion</b></label>
                  <div class='input-group'>
                    <span class='input-group-addon'><i class='glyphicon glyphicon-exclamation-sign'></i></span>
                    <select class='form-control' name='religion' id='brand_add' class='cs-select cs-skin-border' required="">
                      <option value="Islam">Islam</option>
                      <option value="Hinduism">Hinduism</option>
                      <option value="Buddhism">Buddhism</option>
                      <option value="Christianity">Christianity</option>
                      <option value="Atheism">Atheism</option>
                      <option value="Bahai">Bahai</option>
                      <option value="Sikhism">Sikhism</option>
                      <option value="Taoism">Taoism</option>
                      <option value="Confucianism">Confucianism</option>
                      <option value="Other">Other</option>
                      <option value="No information">No information</option>
                      <option value="Not applicable">Not applicable</option>
                      <option value="Not specified">Not specified</option>
                    </select>
                  </div>
                </div>

                <?php
                $site->form_input("Birthday", "birthday", "birthday", "date");
                $site->form_input("Address", "address", "address");
                $site->form_input("Email", "email", "email");
                $site->form_input("Phone Number", "student_mobile", "student_mobile", "number");
                $site->form_input("Father Name", "father_name", "father_name");
                $site->form_input("Father Phone Number", "father_mobile", "number", "number");
                $site->form_input("Mother Name", "mother_name", "mother_name");
                $site->form_input("Mother Phone Number", "mother_mobile", "mobile", "number");
                ?>
              </div>
            </div>

            <!-- Start Academic Information -->
            <div class="col-md-6 pt-6">
              <div class="form-group upload_body">
                <label class="control-label" for="inputName"><b>Upload Student Photo</b></label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-camera"></i></span>
                  <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="loadFile(event)" />
                  <br />
                </div>
                <div id="err_product_image" class="error"></div>
                <img id="add_thumbnil" class="img_up" style="" src="<?php echo "upload/student_photo/avatar.png"; ?>" alt="image" />
              </div>

              <script>
                var loadFile = function(event) {
                  var reader = new FileReader();
                  reader.onload = function() {
                    var output = document.getElementById('add_thumbnil');
                    output.src = reader.result;
                  };
                  reader.readAsDataURL(event.target.files[0]);
                };
              </script>

              <div class="box_header">
                <div class="panel-title">Academic Information</div>
              </div>

              <div class="box_under_body">
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <?php
                $site->form_input("School Name", "school_name", "school_name");
                $site->form_input("Student ID", "student_id", "student_id", "number");
                $site->form_input("Class", "class", "class");
                ?>
              </div>
            </div>
          </div>

          <center>
            <button class="box_btn" name="insert" type="submit" id="insert_btn">
              <span class="glyphicon glyphicon-floppy-save"></span>
              &nbsp;&nbsp;&nbsp;Save Information
            </button>
          </center>
        </form>
        <!-- end body -->
      </div>
    </div>
  </div>
</div>