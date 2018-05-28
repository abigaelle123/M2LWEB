<?php $title = 'Accueil'?>
    <div id="main">
        <section id="contact" class="four">
            <div class="container">
                <header>
                    <h2>Envoyer un message</h2> </header>
                <p>Veuillez bien remplir les instructions à fin d'envoyer un message</p>
                <form class="form-signin" action="#" method="post">
                    <label for="inputEmail" class="sr-only">Email du destinataire</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Adresse Email" name="destinataire">
                    <br/>
                    <label for="inputTitre" class="sr-only">titre</label>
                    <input type="text" id="inputTitre" class="form-control" placeholder="titre" name="titre">
                    <br/>
                    <label for="inputContenu" class="sr-only">Contenu</label>
                    <textarea id="ckeditor" name="contenu" rows="8" cols="80"></textarea>
                    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
                    <script>
                        CKEDITOR.replace("ckeditor");
                    </script>
                    <br/>
                    <button class="btn btn-lg btn-primary btn-block signbtn" type="submit" name="submit">Envoyer</button>
                </form>
                <br />
                <header>
                    <h2>Vos messages</h2> </header>
                <p>Tout vos messages sont afficher ci-dessous, ouvrez les, peut-être que c'est important !</p>
            </div>
        </section>
    </div>