
<html lang="en-us">
    <head>
      <title>Smiths Car Rental</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{asset('css/form/form-user.css')}}">
    </head>
  <body>
          <div class="form">
    <header>
      <h1>form</h1>
    </header>
    <form action="" method="POST">
      <input type="text" placeholder="nama barang" id="firstname" name="firstname">
      <input type="text" placeholder="Last Name" id="lastname" name="lastname">
      <input type="email" placeholder="Email" id="email" name="firstname">
      <input type="tel" placeholder="#Number" id="phone" name="phone">
      <input type="license" placeholder="License Number" id="license" name="license">
      <label for="cars">Select Your Vehicle</label>
      <select name="cars" id="cars">
        <option value="Lamborghini">Lamborghini</option>
    <option value="Porsche">Porsche</option>
    <option value="Ferrari">Ferrari</option>
    <option value="McLaren">McLaren</option>
      </select>
      <label for="laps">Price/Laps</label>
      <select name="cars" id="cars">
        <option value="1 Lap">1 Lap $100</option>
    <option value="2 Laps">2 Laps $200</option>
    <option value="3 Laps">3 Laps $300</option>
    <option value="5 Laps">5 Laps $425</option>
      </select>
      <input type="submit" value="Submit">
    </form>
           <footer>
    
  </footer>   
    </div>
  </body>
</html>