<?php
$auto = filter_input(INPUT_POST, "auta");
$spz = filter_input(INPUT_POST, "spz");
$submit = filter_input(INPUT_POST, "submit");
$types = array("osobní","nákladní","autobus","karavan","trolejbus")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset ($submit)) { ?>
    Typ:<?= $auto ?> <br>
    SPZ:<?= $spz ?>
    <?php
}    else {  ?>   
    <form action="index.php" method="post">
        Typ vozidla:<select name="auta" id="auta">
     <option value="osobní">osobní</option>
     <option value="nákladní">nákladní</option>
     <option value="autobus">autobus</option>
     <option value="karavan">karavan</option>
     <option value="trolejbus">trolejbus</option>
    </select> 
    <br>
SPZ   
   <input type="text" name="spz"><br>
   <input type="submit" name="submit" value="odeslat">
</form>
<?php
} ?>
    
  
</body>
</html>