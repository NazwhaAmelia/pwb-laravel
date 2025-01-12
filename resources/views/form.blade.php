<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <title>Form pendaftaran</title>
  </head>
  <body>
     <h1>Buat Account Baru</h1>
     <h3>Sign Up Form</h3>
     <form action="/welcome" method="get">
        <label for="nisn">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal"><br><br>

        <p>First Name :</p>
          <input required type="text"
           name="namadepan" placeholder="Your Name Here...">
           <p>Last name :</p>
           <input required type="text"
           name="namabelakang" placeholder="Your Name Here..."><br><br>
        <label for="nisn">NISN </label><br><br>
        <input type="number" id="nisn" name="nisn"placeholder="Your NISN Here..."><br><br>
        

        <p>Gender</p>
           <input type="radio" id="gender1"
           name="gender" value="Male" >
           <label for="gender1">Male</label><br>
           <input type="radio" id="gender2"
           name="gender" value="Female" >
           <label for="gender2">Female</label><br>

        <p>Nationality</p>
           <select name="nation">
           <option value="id">Indonesia</option>
           <option value="other">English</option>
           <option value="other">Japanese</option>
           <option value="other">Germany</option>
           <option value="other">Other</option>
           </select>

        <p>Language Spoken</p>
           <input type="checkbox" id="bhs"
           name="language" value="language">
           <label for="language">Bahasa 
           Indonesia</label><br>
           <input type="checkbox" id="eng"
           name="language" value="language">
           <label for="language">English</label>
           </label><br>
           <input type="checkbox" id="jpg"
           name="language" value="language">
           <label for="language">Japanese</label>
           </label><br>
           <input type="checkbox" id="gmy"
           name="language" value="language">
           <label for="language">Germany</label>
           </label><br>
           <input type="checkbox" id="other"
           name="language" value="language">
           <label for="language">Other
           </label><br>
        <p>Bio</p>
            <textarea name="bio" cols="20"
            rows="15"></textarea><br>
            <input type="submit" id="sign" name="sign up" value="Sign Up">
     </form>

    
  </body>
</html>