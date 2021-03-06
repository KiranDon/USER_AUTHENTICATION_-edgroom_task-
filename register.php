<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Register</title>
        <link rel="stylesheet" href="css/register.css">
        <style>
          <?php include("css/reregister.css") ?>
        </style>
        <script src="js/app.js" defer></script>
        
    </head>
</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                  <p class="errorMessage hidden" id="errorMessage"></p>
                  <form onsubmit="return validate()" method="POST" action="insert.php" autocomplete="off" enctype="multipart/form-data">
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="firstName" name="firstName" class="form-control form-control-lg" autocomplete="off" required/>
                          <label class="form-label" for="firstName">First Name</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="lastName" name="lastName" class="form-control form-control-lg" required/>
                          <label class="form-label" for="lastName">Last Name</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
      
                            <div class="form-outline">
                              <input type="tel" id="phoneNumber" name="phoneNumber" class="form-control form-control-lg"  required/>
                              <label class="form-label" for="phoneNumber">Phone Number</label>
                            </div>
          
                          </div>
                          <div class="col-md-6 mb-4 pb-2">
      
                            <div class="form-outline">
                              <input type="email" id="emailAddress" name="emailAddress" class="form-control form-control-lg"  required/>
                              <label class="form-label" for="emailAddress">Email</label>
                            </div>
          
                          </div>
                      
                      
                    </div>
      
                    <div class="row">
                        <div class="col-md-6 mb-4">
      
                            <h6 class="mb-2 pb-1">Gender: </h6>
          
                            <div class="form-check form-check-inline">
                              <input
                                class="genderInput"
                                type="radio"
                                name="gender"
                                id="female"
                                value="Female"
                                
                              />
                              <label class="form-check-label" for="femaleGender">Female</label>
                            </div>
          
                            <div class="form-check form-check-inline">
                              <input
                                class="genderInput"
                                type="radio"
                                name="gender"
                                id="male"
                                value="Male"
                                checked
                              />
                              <label class="form-check-label" for="maleGender">Male</label>
                            </div>
          
                          </div>
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="file" id="ProfileImage" name="ProfileImage" class="form-control form-control-lg"  required/>
                          <label class="form-label" for="ProfileImage">Profile Image</label>
                        </div>
      
                      </div>
                    </div>


                    <!-- password -->
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
      
                            <div class="form-outline">
                              <input type="password" id="password" name="password" class="form-control form-control-lg" required/>
                              <label class="form-label" for="password">Password</label>
                            </div>
          
                          </div>
                          <div class="col-md-6 mb-4 pb-2">
      
                            <div class="form-outline">
                              <input type="password" id="confirmPassword" name="confirmPassword" class="form-control form-control-lg"  required/>
                              <label class="form-label" for="password">Confirm Password</label>
                            </div>
                          </div>
                      
                      
                    </div>
      
                    <div class="mt-1 pt-1">
                      <input type="submit" class="btn btn-primary btn-lg" value="Register" id="register" name="register">
                    </div>
    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>