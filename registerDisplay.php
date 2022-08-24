<?php
         $creditCardTypes = array(
            array("name" => "visa",     "value" => "visaCard",     "label" => "Carte Visa"),
            array("name" => "master",   "value" => "masterCard",   "label" => "Carte Master Card"),
            array("name" => "electron", "value" => "electronCard", "label" => "Carte Electron"),
            array("name" => "gold",     "value" => "goldCard",     "label" => "Carte Gold"),
        );

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Forms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
    <form class="payment" method="post" action="register.php">
        <span id="title"><h1>Payment Forms</h1></span>
        <span id="title"><h4>Required field are followed by *</h4></span>
        <span id="title"><h1>Contact Information</h1></span>
            <div class="select">
                <span>Title</span>
                <input type="checkbox" id="Ace" name="Ace" value="Ace">
                <label for="Ace"> Ace</label><br>
                <input type="checkbox" id="King" name="King" value="King">
                <label for="King"> King</label><br>
                <input type="checkbox" id="Queen" name="Queen" value="Queen">
                <label for="Queen"> Queen</label>
            </div>

            <div class="contact">      
                <div class="name">     
                <label  for="Name">Name: *</label>
                <input minlength="15" maxlength="15" oninput="this.value = this.value.replace(/[^A-z.]/g, '').replace(/(\..*?)\..*/g, '$1');" required="required" name="name" type="text" id="name" placeholder="Name">
                </div> 
                <label for="Name">Email: *</label>
                <input required="required" name="email" type="text" id="email" placeholder="Email">

                <label id="pass"for="Name">Password: *</label>
                <input required="required" name="password" type="password" id="password" placeholder="Password">
            </div>

            <div class="card_information">
                <span><h1>Payment Information</h1></span>
                <div class="card_type">
                <label for="Card_Type">Card Type:</label>
                <select name="card_type" id="card_type">
                <?php
                    foreach ($creditCardTypes as $cardType) {
                        echo "<option name='" . $cardType['name'] . "' value='" . $cardType['value'] . "'>" . $cardType['label'] . "</option>";
                    }
                    ?>
                </select>
            </div>
                <label for="card_number">Card Number: *</label>
                <input required="required" type="text" type="text"  minlength="15" maxlength="15" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="card_number" id="card_number" placeholder="Card Number">

                <label for="expiration_date">Expiration Date: *</label>
                <input required="required" type="month" name="expiration_date" id="expiration_date" placeholder="Expiration Date">

            </div>
            <button type="submit">Validate the payment</button>
    </form>
</div>
</body>
</html>