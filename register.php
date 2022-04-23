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
                  <form autocomplete="off">
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="firstName" class="form-control form-control-lg" autocomplete="off" required/>
                          <label class="form-label" for="firstName">First Name</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="lastName" class="form-control form-control-lg" required/>
                          <label class="form-label" for="lastName">Last Name</label>
                        </div>
      
                      </div>
                    </div>
      
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
      
                            <div class="form-outline">
                              <input type="tel" id="phoneNumber" class="form-control form-control-lg"  required/>
                              <label class="form-label" for="phoneNumber">Phone Number</label>
                            </div>
          
                          </div>
                          <div class="col-md-6 mb-4 pb-2">
      
                            <div class="form-outline">
                              <input type="email" id="emailAddress" class="form-control form-control-lg"  required/>
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
                          <input type="file" id="ProfileImage" class="form-control form-control-lg"  required/>
                          <label class="form-label" for="phoneNumber">Profile Image</label>
                        </div>
      
                      </div>
                    </div>


                    <!-- password -->
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
      
                            <div class="form-outline">
                              <input type="password" id="password" class="form-control form-control-lg"  required/>
                              <label class="form-label" for="password">Password</label>
                            </div>
          
                          </div>
                          <div class="col-md-6 mb-4 pb-2">
      
                            <div class="form-outline">
                              <input type="password" id="confirmPassword" class="form-control form-control-lg"  required/>
                              <label class="form-label" for="password">Confirm Password</label>
                            </div>
                          </div>
                      
                      
                    </div>
      
                    <div class="mt-1 pt-1">
                      <button class="btn btn-primary btn-lg" type="submit" value="Register" id="register">Register</button>
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