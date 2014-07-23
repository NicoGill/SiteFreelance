<div class="row title-line">
        <div class="col-lg-12">
            <h1 class="text-center"><span class="icon-contacts icon-section"></span></h1>
            <p class="text-center">Formulaire de contact</p>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form name="contactform" id="contactform" action="mailer.php" method="POST" role="form">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="nom"> Nom</label>
                            <input type="text" class="form-control" name="ngNom" id="nom" required="required" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="email">Adresse Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="icon-envelope-o"></span></span>
                                <input type="email" class="form-control" name="ngMail" id="email" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="sujet">Sujet</label>
                            <input type="text" class="form-control" name="ngSujet" id="sujet" required="required" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="ngMessage" id="message" class="form-control" rows="10" cols="25" required="required"></textarea>
                        </div>
                    </div>
                    <span class="reponse-contact"></span>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-info btn-lg" id="btnContactNG">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <p class="lead">Une idée ? Un projet ? Discutons.</p>
            <address>
                <strong>Nicolas Gillium</strong><br>
                <span id="map-input">03 allée Alexis Carrel<br>
                Méréville, 54850</span><br>
                0777038767
            </address>
            <address>
                <p><span class="icon-at contact-icon"></span></p>
                <a href="mailto:contact@nicolas-gillium.fr">contact@nicolas-gillium.fr</a>
            </address>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <p><span class="icon-skype contact-icon"></span></p>
                    <span>lou.koum64</span>
                </div>
                <div class="col-md-12 col-xs-12">
                    <p><span class="icon-social-twitter contact-icon"></span></p>
                    <a href="https://twitter.com/NGillium" target="_blank">NGillium</a>
                </div>
            </div>
        </div>
    </div>
</div>