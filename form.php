
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>form</title>
</head>
<body>


    <div class="formbold-main-wrapper">
    
        <div class="formbold-form-wrapper">
          
          
      
          <form id='form' action="#" method="POST">
            <div class="formbold-form-title">
              <h2 class="">Admission Form</h2>
              
            </div>
      
            <div class="formbold-input-flex">
              <div>
                <label for="name" class="formbold-form-label">
                  Name
                </label>
                <span id="Nerror" style="border-bottom:2px solid pink; color:red;font-size:10px;" >
                 
                </span>
                <input
                  type="text"
                  name="name"
                  id="name"
                  class="formbold-form-input"
                />
              </div>
              <div>
                <label for="fathername" class="formbold-form-label"> Father Name </label>
                <span id="FNerror" style="border-bottom:2px solid pink; color:red;font-size:10px;" >
                 
                </span>
                <input
                  type="text"
                  name="fathername"
                  id="fathername"
                  class="formbold-form-input"
                />
              </div>
            </div>
      
            <div class="formbold-input-flex">
              <div>
                <label for="email" class="formbold-form-label"> Email </label>
                <span id="Eerror" style="border-bottom:2px solid pink; color:red;font-size:10px;" >
                 
                </span>
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="formbold-form-input"
                />
              </div>
              <div>
                <label for="phone" class="formbold-form-label"> Phone number </label>
                <span id="Perror" style="border-bottom:2px solid pink; color:red;font-size:10px;" >
                 
                </span>
                <input
                  type="text"
                  name="phone"
                  id="phone"
                  class="formbold-form-input"
                />
              </div>
            </div>
      
            <div class="formbold-mb-3">
              <label for="address" class="formbold-form-label">
                 Address
              </label>
              <span id="Aerror" style="border-bottom:2px solid pink; color:red;font-size:10px;" >
                 
                </span>
              <input
                type="text"
                name="address"
                id="address"
                class="formbold-form-input"
              />
            </div>
      
           
      
            <div class="formbold-input-flex">
              <div>
                <label for="classno" class="formbold-form-label"> Class No </label>
                <span id="Cerror" style="border-bottom:2px solid pink; color:red;font-size:10px;" >
                 
                </span>
                <input
                  type="text"
                  name="classno"
                  id="classno"
                  class="formbold-form-input"
                />
              </div>
              <div>
                <label for="department" class="formbold-form-label"> Department </label>
                <span id="Derror" style="border-bottom:2px solid pink; color:red;font-size:10px;" >
                 
                </span>
                <input
                  type="text"
                  name="department"
                  id="department"
                  class="formbold-form-input"
                />
              </div>
            </div>
      
            <div class="formbold-input-flex">
              <div>
                <label for="Semester" class="formbold-form-label"> Semester</label>
                <span id="Serror" style="border-bottom:2px solid pink; color:red;font-size:10px;" >
                 
                </span>
                <input
                  type="text"
                  name="semester"
                  id="semester"
                  class="formbold-form-input"
                />
              </div>
              <div>
               
            </div>
      
            
      
            <button class="formbold-btn">Register Now</button>
          </form>
        </div>
      </div>


      <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $fathername = $_POST['fathername'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $classno = $_POST['classno'];
    $department = $_POST['department'];
    $address = $_POST['address'];
    $semester = $_POST['semester'];
    $msg='Fill This Field';
    if (empty($name)) {
      
      echo '<script>document.getElementById("Nerror").innerHTML = "' . $msg . '";</script>';
    } 

    if (empty($fathername)) {
      
        echo '<script>document.getElementById("FNerror").innerHTML = "' . $msg . '";</script>';
    }  
    if (empty($email)) {
      
      echo '<script>document.getElementById("Eerror").innerHTML = "' . $msg . '";</script>';
  } 
  if (empty($phone)) {
      
    echo '<script>document.getElementById("Perror").innerHTML = "' . $msg . '";</script>';
} 
if (empty($address)) {
      
  echo '<script>document.getElementById("Aerror").innerHTML = "' . $msg . '";</script>';
} 
if (empty($semester)) {
      
  echo '<script>document.getElementById("Serror").innerHTML = "' . $msg . '";</script>';
} 
if (empty($department)) {
      
  echo '<script>document.getElementById("Derror").innerHTML = "' . $msg . '";</script>';
} 
if (empty($classno)) {
      
  echo '<script>document.getElementById("Cerror").innerHTML = "' . $msg . '";</script>';
} 

 }
?>
      
</body>
</html>
