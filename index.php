<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="assets/css/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website</title>
</head>

<body>
  <div id="container">
    <div id="header">
      <img src="https://via.placeholder.com/350x350" alt="" />
      <h1>Semih</h1>
    </div>
    <div id="content">
      <h2>Over Mij</h2>
      <div id="intro">
        Ik ben Semih Tulek ik woon in Utrecht met mijn ouders en zus 
      </div>
      <div id="overig">
      Mijn hobbies Computeren, gamen en (voet)ballen
      </div>
      <div id="kennis">
        <ul>
          <li>Ik heb een beetje ervaring met HTML/CSS</li>
          <li>Ik heb ook een beetje ervaring met PHP Deze code is dan ook met HTML, CSS, en PHP</li>
          <li>Ik heb ook nog een paar keer met SCSS gewerkt maar ik heb er niet heel veel verstand van</li>
        </ul>
      </div>
    </div>
    <div id="expirimental">
      <p>Expirimental zone</p>
      
      <form action="./assets/include/Utility.inc.php" method="POST">
    
        <div class="form__field">
              <label class="material-icons" for="register__username">
                <span class="hidden">voornaam</span></label>
              <input autocomplete="username" id="register__username" type="text" name="voornaam" class="form__input" placeholder="voornaam" required>
            </div>
            <div class="form__field">
              <label class="material-icons" for="register__password">
                </svg><span class="hidden">achternaam</span></label>
              <input id="register__password" type="text" name="achternaam" class="form__input" placeholder="achternaam" required>
            </div>
            <div class="form__field">
              <label class="material-icons" for="register__password">
                </svg><span class="hidden">postcode</span></label>
              <input id="register__password" type="text" name="postcode" class="form__input" placeholder="postcode" required>
            </div>
            <div class="form__field">
              <input type="submit" name="submit" value="versturen">
            </div>
          </form>
    <table style="width:100%">
    <tr>
    <td>voornaam</td>
    <td>achternaam</td>
    <td>postcode</td>
    </tr>

          <?php
          include './assets/classes/db.class.php';
          include './assets/classes/Utility.class.php';
          include './assets/controllers/Utility.cont.php';
  //show all invites in html
  $users = new UtilityController();
  //loop through all users and display info accordingly
     foreach($users->selectUsers() as $user) {
  ?>

  <tbody>

    <tr>
      <td><?php echo $user['voornaam']; ?></td>
      <td><?php echo $user['achternaam']; ?></td>
      <td><?php echo $user['postcode']; ?></td>
    </tr>


  </tbody>
    

  <?php
  }
  ?>

</table>
        

    </div>
    <div id="footer">
      &copy; 2022
      <br />
      <ul>
      <li>
        <a href="#" title="Instagram"><img class="instagram" src="assets/img/instagram.png" alt="Instagram" /></a>
        </li>
        <li>
         <a href="#" title="Youtube"><img class="youtube" src="assets/img/youtube.png" alt="Youtube" /></a>
      </li>
      </ul>
    </div>
  </div>
</body>

</html>