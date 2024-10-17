<?php
//RELICAT, code mis de coté pour correspondre au challenge
// if ($_POST) {
//     //NOT EMPTY
//     // AT LEAST 2 CHARACTERS
//     $errors = array();

//     //start validation
//     if (empty($_POST['user_firstname'])) {
//         $errors['user_firstname1'] = "Le prénom est obligatoire";
//     }
//     if (empty($_POST['user_lastname'])) {
//         $errors['user_lastname1'] = "Le nom est obligatoire";
//     }
//     if (empty($_POST['user_email'])) {
//         $errors['user_email1'] = "L'email est obligatoire";
//     }
//     if (empty($_POST['user_phone'])) {
//         $errors['user_phone1'] = "Le numero de téléphone est obligatoire";
//     }
//     if (empty($_POST['user_topic'])) {
//         $errors['user_topic1'] = "Le sujet est obligatoire";
//     }
//     if (empty($_POST['user_message'])) {
//         $errors['user_message1'] = "Le message est obligatoire";
//     }


//     //check errors
//     if (count($errors) == 0) {
//         //redirect to success pages
//         header('Location: thanks.php');
//     }
// }

?>

<form action="thanks.php" target="" method="post">
    <div>
        <label for="name">Nom :</label>
        <input required type="text" id="lastname" name="user_lastname" value="<?php if (isset($_POST['user_lastname'])) echo $_POST['user_lastname']; ?>" />
        <p><?php if (isset($errors['user_lastname1'])) echo $errors['user_lastname1']; ?> </p>
    </div>
    <div>
        <label for="name">Prénom :</label>
        <input required type="text" id="firstname" name="user_firstname" value="<?php if (isset($_POST['user_firstname'])) echo $_POST['user_firstname']; ?>" />
        <p><?php if (isset($errors['user_firstname1'])) echo $errors['user_firstname1']; ?> </p>
    </div>
    <div>
        <label for="email">Courriel :</label>
        <input required type="email" id="email" name="user_email" value="<?php if (isset($_POST['user_email'])) echo $_POST['user_email']; ?>" />
        <p><?php if (isset($errors['user_email1'])) echo $errors['user_email1']; ?> </p>
    </div>
    <div>
        <label for="name">Téléphone :</label>
        <input type="tel" id="phone" name="user_phone" value="<?php if (isset($_POST['user_phone'])) echo $_POST['user_phone']; ?>" />
        <p><?php if (isset($errors['user_phone1'])) echo $errors['user_phone1']; ?> </p>
    </div>
    <div>
        <label for="name">Sujet :</label>
        <select id="topic" name="user_topic">
            <option value="<?php if (isset($_POST['user_topic'])) echo $_POST['user_topic']; ?>"><?php if (isset($_POST['user_topic'])) echo $_POST['user_topic'];
                                                                                                    else echo 'Choisir' ?></option>
            <option value="nourriture">Nourriture</option>
            <option value="alimentation">Alimentation</option>
            <option value="sport">Sport</option>
            <option value="peinture">Peinture</option>
            <option value="danse">Danse</option>
            <option value="chant">Chant</option>
        </select>
        <p><?php if (isset($errors['user_topic1'])) echo $errors['user_topic1']; ?> </p>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
        <p><?php if (isset($errors['user_message1'])) echo $errors['user_message1']; ?> </p>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>