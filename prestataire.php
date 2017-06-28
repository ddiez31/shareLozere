<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulaire prestataire</title>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/style.css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </head>
    <body>
    <header>
    <img src="./style/logoShareLozere.png" alt="logo">
    </header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-6 " id='titre'>
          <h2>Formulaire Prestataire</h2>
          </div>
            <form method="post" action="prestataire.php">
              <div class="panel panel-default background">
                <div class="col-xs-6 background">
                  <div class="form-group">
                    <label for="name">Nom:</label>
                      <input type="name" class="form-control" id="name" name="name">
                  </div>
              </div>
              <div class="row" id='top'>
             </div>
                <div class="col-xs-6 background">
                  <div class="form-group">
                    <label for="tel">Téléphone:</label>
                      <input type="tel" class="form-control" id="tel" name="tel">
                  </div>
                </div>
            <div class="row background">
                <div class="col-xs-6 background">
                    <div class="form-group">
                        <label for="mail">Email:</label>
                        <input type="mail" class="form-control" id="mail" name="mail">
                    </div>
                </div>
            </div>
                <div class="row "id="main" >
                  <div class="col-xs-12 col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-3 background">
                    <div class="panel panel-default">
<!-- Default panel contents -->
                    <div class="panel-heading">Compétences:</div>
<!-- List group -->
                    <ul class="list-group">
                      <li class="list-group-item">html
                        <div class="material-switch pull-right">
                        <input id="someSwitchOptionDefault" name="checkbox[]" type="checkbox" value="html"/>
                        <label for="html" class="label-default"></label>
                        </div>
                      </li>
                      <li class="list-group-item">css
                        <div class="material-switch pull-right">
                        <input id="someSwitchOptionPrimary" name="checkbox[]" type="checkbox" value="css"/>
                        <label for="css" class="label-primary"></label>
                        </div>
                      </li>
                      <li class="list-group-item">wordpress
                        <div class="material-switch pull-right">
                        <input id="someSwitchOptionSuccess" name="checkbox[]" type="checkbox" value="wordpress"/>
                        <label for="wordpress" class="label-success"></label>
                        </div>
                      </li>
                      <li class="list-group-item">magento
                        <div class="material-switch pull-right">
                        <input id="someSwitchOptionInfo" name="checkbox[]" type="checkbox" value="magento"/>
                        <label for="magento" class="label-info"></label>
                        </div>
                      </li>
                      <li class="list-group-item">photo
                        <div class="material-switch pull-right">
                        <input id="someSwitchOptionWarning" name="checkbox[]" type="checkbox" value="photo"/>
                        <label for="photo" class="label-warning"></label>
                        </div>
                      </li>
                      <li class="list-group-item">marketing
                        <div class="material-switch pull-right">
                        <input id="someSwitchOptionDanger" name="checkbox[]" type="checkbox" value="marketing"/>
                        <label for="marketing" class="label-danger"></label>
                        </div>
                      </li>
                      <li class="list-group-item">referencement
                        <div class="material-switch pull-right">
                        <input id="someSwitchOptionDanger" name="checkbox[]" type="checkbox" value="referencement"/>
                        <label for="referencement" class="label-danger"></label>
                        </div>
                      </li>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 background">
                  <div class="">
                      <li class="list-group-item">javascript
                        <div class="material-switch pull-right">
                        <input id="someSwitchOptionDanger" name="checkbox[]" type="checkbox" value="javascript"/>
                        <label for="javascript" class="label-danger"></label>
                        </div>
                      </li>
                      <li class="list-group-item">php
                        <div class="material-switch pull-right">
                        <input id="someSwitchOptionDanger" name="checkbox[]" type="checkbox" value="php"/>
                        <label for="php" class="label-danger"></label>
                        </div>
                      </li>
                      <li class="list-group-item">python
                        <div class="material-switch pull-right">
                        <input id="someSwitchOptionDanger" name="checkbox[]" type="checkbox" value="python"/>
                        <label for="python" class="label-danger"></label>
                        </div>
                      </li>
                      <li class="list-group-item">formation
                        <div class="material-switch pull-right">
                        <input id="someSwitchOptionDanger" name="checkbox[]" type="checkbox" value="formation"/>
                        <label for="formation" class="label-danger"></label>
                        </div>
                      </li>
                      <li class="list-group-item">conseil
                        <div class="material-switch pull-right">
                        <input id="someSwitchOptionDanger" name="checkbox[]" type="checkbox" value="conseil"/>
                        <label for="conseil" class="label-danger"></label>
                        </div>
                      </li>
                      <li class="list-group-item">design
                        <div class="material-switch pull-right">
                        <input id="someSwitchOptionDanger" name="checkbox[]" type="checkbox" value="design"/>
                        <label for="design" class="label-danger"></label>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <button type="submit" value="submit">Envoyer</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <footer>
            <p>Vous êtes connecté en tant que <span><strong>Marc Fleurs</strong></span></p>
        </footer>
        <?php
        include ("connexion.php");
        $mysql->set_charset("utf8");

        // on teste si les variables du formulaire sont bien déclarées
        if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['tel'])) {

        	$sql = 'INSERT INTO prestataire (name, tel,  mail)
            VALUES  ("'.$_POST['name'].'", "'.$_POST['tel'].'", "'.$_POST['mail'].'")';
            var_dump($sql);
            $mysql->query($sql);

            foreach ($_POST['checkbox'] as $valeur){
// todo sql injection:
                $sql = "UPDATE prestataire SET $valeur=1 WHERE mail='".$_POST['mail']."'";
                $mysql->query($sql);
            }
            $mysql->close();

        echo "<script type='text/javascript'>document.location.replace('validation_formulaire_prestataire.php');</script>";
        }

        ?>
    </body>
</html>
