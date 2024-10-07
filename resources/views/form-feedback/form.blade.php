<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"  href="{{ asset('css/bootstrap-form.min.css')}}">
    <link rel="stylesheet"  href="{{ asset('css/form.css')}}">

     <script src="sweetalert2.js"></script>
    <title>Form</title>
  </head>
  <body>
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 m-2">
            <form class="form row shadow-lg p-3" method="post" action="{{route('form-feedback.store')}}">
              @csrf
           
                <h1 class="text-center">FEEDBACK FORM</h1>
                <hr>
              
               <!-- Name -->
               <div class="col-md-12 m-2">
                <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="name"
                  id="name"
                  name="Name"
                  required/>
                <div class="invalid-feedback">Please enter your name</div>
              </div>  
              <!-- Email and Phone -->
              <div class="col-md-12 m-2">
                <div class="row">
                  <!-- Email -->
                  <div class="col">
                    <label for="Email" class="form-label"
                      >Email<span class="text-danger">*</span></label>
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Email"
                      id="email"
                      name="Email"
                      required/>
                    <div class="invalid-feedback">
                      Please enter a valid Email
                    </div>
                  </div>
                  <!-- Phone -->
                  <div class="col">
                    <label for="Phone" class="form-label"
                      >Contact<span class="text-danger">*</span></label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Phone"
                      id="Phone"
                      name="Phone"
                      required
                    />
                    <div class="invalid-feedback">
                      Please enter a valid Phone 
                    </div>
                  </div>
                </div>
              </div>  
              <!-- radio button -->
              <div class="col-md-12 m-2">
                <label for="first-name" class="form-label"
                  >Rate you Experience<span class="text-danger">*</span></label>
                <div class="form-check">
                  <input
                    type="radio"
                    class="form-check-input"
                    id="radioCheck1"
                    name="Experience"
                    value="Excellent"
                    required/>
                  <label class="form-check-label" for="radioCheck1">Excellent</label>
                </div>
                <div class="form-check">
                  <input
                    type="radio"
                    class="form-check-input"
                    id="radioCheck2"
                    name="Experience"
                    value="Good"
                    required/>
                  <label class="form-check-label" for="radioCheck2">Good</label>
                </div>
                  <div class="form-check">
                  <input
                    type="radio"
                    class="form-check-input"
                    id="radioCheck3"
                    name="Experience"
                    value="Average"
                    required/>
                  <label class="form-check-label" for="radioCheck3">Average</label>
                </div>
                <div class="form-check">
                  <input
                    type="radio"
                    class="form-check-input"
                    id="radioCheck4"
                    name="Experience"
                    value="Poor"
                    required
                  />
                  <label class="form-check-label" for="radioCheck4"
                    >Poor</label
                  >
                  <div class="invalid-feedback">
                    Please select a valid option
                  </div>
                </div>
              </div>
     
                  <div class="col-md-12 m-2">
            
                          
   <div class="up">
            <label for="color" class="form-label">Rating <span class="text-danger">*</span></label>
   </div>

  <div class="rating">
  <input type="radio" id="star5" name="Rate" value="5" />
  <label for="star5" title="text"
    ><svg
      viewBox="0 0 576 512"
      height="1em"
      xmlns="http://www.w3.org/2000/svg"
      class="star-solid"
    >
      <path
        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
      ></path></svg></label>
  <input type="radio" id="star4" name="Rate" value="4" />
  <label for="star4" title="text"
    ><svg
      viewBox="0 0 576 512"
      height="1em"
      xmlns="http://www.w3.org/2000/svg"
      class="star-solid"
    >
      <path
        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
      ></path></svg></label>
  <input type="radio" id="star3" name="Rate" value="3" />
  <label for="star3" title="text"
    ><svg
      viewBox="0 0 576 512"
      height="1em"
      xmlns="http://www.w3.org/2000/svg"
      class="star-solid"
    >
      <path
        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
      ></path></svg></label>
  <input type="radio" id="star2" name="Rate" value="2" />
  <label for="star2" title="text"
    ><svg
      viewBox="0 0 576 512"
      height="1em"
      xmlns="http://www.w3.org/2000/svg"
      class="star-solid"
    >
      <path
        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
      ></path></svg></label>
  <input type="radio" id="star1" name="Rate" value="1" />
  <label for="star1" title="text"
    ><svg
      viewBox="0 0 576 512"
      height="1em"
      xmlns="http://www.w3.org/2000/svg"
      class="star-solid"
    >
      <path
        d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"
      ></path></svg></label>
</div>

                <div class="invalid-feedback">Please enter your name</div>
              </div>  
              <!-- select -->
              <div class="col-md-12 m-2">
                <label for="color" class="form-label"
                  >Feedback Category <span class="text-danger">*</span></label>
                <select name="Category" id="" class="form-select" required>
                  <option value="">Choose a Feedback</option>
                  <option value=" Product Quality"> Product Quality</option>
                  <option value=" Customer Service"> Customer Service</option>
                  <option value=" Website Experience"> Website Experience</option>
                </select>
                <div class="invalid-feedback">Please select a valid option</div>
              </div>
              
              <!-- textarea -->
              <div class="col-md-12 m-2">
               <label for="color" class="form-label"
                  >Feedback<span class="text-danger"> *</span></label>
                <textarea
                  class="form-control"
                  name="Message"
                  placeholder="Message"
                  cols="40"
                  rows="10"
                  required
                ></textarea>
                <div class="invalid-feedback">Please enter a message</div>
              </div>
              <!-- submit button -->
              <div class="col-md-12 m-2">
                <button id="submitBtn" name="submit" class="btn btn-dark" type="submit">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script>
    const form = document.querySelector("form");

    form.addEventListener(
      "submit",
      (e) => {
        if (!form.checkValidity()) {
          e.preventDefault();
        }
        form.classList.add("was-validated");
        console.log("submit");
      },
      false
    );
  </script>
</html>

