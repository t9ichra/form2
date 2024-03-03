<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Purple and Grey Form</title>
<style>
body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f2f2f2;
}

.form-container {
  width: 400px;
  margin: 50px auto;
  padding: 30px;
  border-radius: 10px;
  background-color: #e0e0e0;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  color: #555;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #555;
}

input[type="text"],
input[type="email"],
select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: #773377;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #662266;
}
</style>
</head>
<body>
<div class="form-container">
  <h1>Formulaire d'inscription</h1>
  <form action="" method="post">
    <div class="form-group">
     
      <input type="text" name="nom" placeholder="Saisir votre nom">
    </div>
    <div class="form-group">
    
      <input type="text"  name="prenom" placeholder="Saisir votre prenom">
    </div>
    <div class="form-group">
    
    <input type="email"  name="email" placeholder="Saisir votre email">
  </div>

  <div class="form-group">
    <label>Sexe</label>
  <input type="radio" name="sexe" value="Masculin">Masculin
  <input type="radio" name="sexe" value="Feminin">Feminin 
  </div>

  <div class="form-group">
      <label></label>
      <select  name="Pays[]" >
      <?php
      $pays = ["Lithuania","Thailand","Bangladesh","Jordan","Slovakia","Ecuador"];
      foreach ($pays as $key ) {
        echo "<option> $key </option>";
      }
      ?>

      </select>
    </div>

    <div class="form-group">
      <label>Les langages preferes:</label>
      <select  name="lang[]" multiple = "m">
      <?php
      $lang = ["Java","C","C++","PHP","HTML"];
      foreach ($lang as $key ) {
        echo "<option> $key </option>";
      }
      ?>
      </select>
    </div>
      <p>(Pour faire plusieurs choix maintenir la touche CTRL enfoncee)</p><input type="radio" name ="idk" value="Informatique">Informatique<input type="radio" name ="idk" value="Gestion">Gestion<input type="radio" name ="idk" value="Pedagogie">Pedagogie
    <div class="form-group">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</body>
</html>
<?php
if(isset($_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["sexe"],$_POST["Pays"],$_POST["lang"],$_POST["idk"])){
$n =  $_POST["nom"]; //done
$p =  $_POST["prenom"]; //done
$e =  $_POST["email"]; //done
$s =  $_POST["sexe"];  //done
$y =  $_POST["Pays"]; //done
$l =  $_POST["lang"]; //done
$d =  $_POST["idk"]; //done

foreach ($y as $key ) {   
  switch ($key) {
    case "Lithuania":
      $i = "Lithuania";
      break;
      case "Thailand":
        $i = "Thailand";
        break;
        case "Bangladesh":
          $i = "Bangladesh";
          break;
          case "Jordan":
            $i = "Jordan";
            break;
            case "Slovakia":
              $i = "Slovakia";
              break;
              case "Ecuador":
                $i = "Ecuador";
                break;
    default:
      # code...
      break;
  }
}
$t = implode("<br>+",$l);



echo"<center>";echo "<h1> Infos :</h1><br>";
echo "Nom , Prenom , email , sexe et  branche: $n $p , $e , $s ,$d "."<br>";
echo "Pays :".$i."<br>";
echo "Langages preferes : + $t"."<br>";echo"</center>";
}else echo" ";
?>