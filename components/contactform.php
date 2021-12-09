<form method="post" id="form" action="mailto:">
                <label class="titre"><b><u>Formulaire de contact:</u></b><br></label>
                </br>
                <div>
                    <label for="mail"><u>Email:</u><br></label>
                    </br>
                    <input type="email" name="mail" placeholder="Email" required />
                    </br>
                </div>
                <div>
                    </br>
                        <label for="subject"><u>Sujet:</u><br></label>
                    </br>
                    <select name="subject" id="subject" required>
                        <option value="">- - - - - - - - - - - - - - - -</option>
                        <option value="1">Informations</option>
                        <option value="2">Probleme Inscription</option>
                        <option value="3">Probleme Connexion</option>
                        <option value="4">Sponsoring</option>
                        <option value="5">Presse</option>
                    </select>
                    </br>
                </div>
                <div>
                    </br>
                    <label for="message"><u>Message:</u><br></label>
                    </br>
                    <textarea class="message" name=”message” required></textarea>
                    </br>
                </div>
                <div>
                    </br>
                    <center><button type="submit">Envoyer</button></center>
                    </br>
                </div>
            </form>

<style>
textarea 
    {
    width: 95%;
    height: 250px;
    resize: none;
    }
label
    {
    font-size:larger;
    }
.titre
    {
    font-size: xx-large;
    }
</style>            

<?php
    if($_POST["message"]) 
        {
        mail("my@email.address", "subject line",
        $_POST["user message here"]. "From: user@email.address");
        }
?>