
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Enrollment form</title>
    <link rel="stylesheet" href="enroll_style.css" />
  </head>
  <body>
    <section class="container">
      <header>Enrollment Form</header>
      <form class="form" action="validate.php" method="post">
        <div class="input-box">
          <label>FIRST NAME</label>
          <input type="text" placeholder="ENTER FIRST NAME"  name="firstname" required />
        </div>




  <div class="input-box">
          <label>Guardine's Name</label>
          <input type="text" placeholder="Enter Guardien's Name" name="prefix" disabled />
        </div>



        <div class="input-box">
          <label>LAST NAME</label>
          <input type="text" placeholder="ENTER LAST NAME " name="lastname" required />
        </div>

        <div class="input-box">
          <label>Guardine's Name</label>
          <input type="text" placeholder="Enter Guardien's Name" name="guardianN" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Guardine's Phone Number</label>
            <input type="text" placeholder="Enter phone number" name="guardianNo" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" name="dob" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" value="Male" checked />
              <label for="check-male">Male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" value="Female" />
              <label for="check-female">Female</label>
            </div>
            
          </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" placeholder="Enter catchment area" name="catchAr" required />
          <input type="text" placeholder="Enter house GPS" name="housegps" required />
          <div class="column">
            <div class="select-box">
              <select name="section">
                <option name="section" hidden>Section</option>
                <option name="section">PREMPEH</option>
                <option name="section" >YAA ASANTEWAA</option>
                <option name="section">OSEI TUTU</option>
                <option name="section">AFIA KOBI</option>
              </select>
            </div>
            <input type="text" placeholder="Enter your class" name="class" required />
          </div>
          <div class="column">
            <input type="text" placeholder="Enter medical condition" name="MedicalC" required />
             
          </div>
        </div>
        <button>Submit</button>
      </form>
    </section>
  </body>
</html>
