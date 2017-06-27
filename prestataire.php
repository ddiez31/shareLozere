<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js">
        </script>
    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
          <h2>Formulaire Prestataire</h2>
          </div>
            <form method="post" action="liste.php">

              <div class="panel panel-default">
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="name">Nom:</label>
                      <input type="name" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="tel">téléphone:</label>
                      <input type="tel" class="form-control" id="tel">
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="mail">email:</label>
                      <input type="mail" class="form-control" id="mail">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                    <div class="panel panel-default">
<!-- Default panel contents -->
                    <div class="panel-heading">Compétences:</div>
<!-- List group -->
                    <ul class="list-group">
                      <li class="list-group-item">html
                        <div class="material-switch pull-right">
                        <input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox"/>
                        <label for="someSwitchOptionDefault" class="label-default"></label>
                        </div>
                      </li>
                      <li class="list-group-item">css
                        <div class="material-switch pull-right">
                        <input id="someSwitchOptionPrimary" name="someSwitchOption001" type="checkbox"/>
                        <label for="someSwitchOptionPrimary" class="label-primary"></label>
                        </div>
                      </li>
                      <li class="list-group-item">wordpress
                        <div class="material-switch pull-right">
                        <input id="someSwitchOptionSuccess" name="someSwitchOption001" type="checkbox"/>
                        <label for="someSwitchOptionSuccess" class="label-success"></label>
                        </div>
                      </li>
                      <li class="list-group-item">magento
                        <div class="material-switch pull-right">
                        <input id="someSwitchOptionInfo" name="someSwitchOption001" type="checkbox"/>
                        <label for="someSwitchOptionInfo" class="label-info"></label>
                        </div>
                                        </li>
                                        <li class="list-group-item">
                                            photo
                                            <div class="material-switch pull-right">
                                                <input id="someSwitchOptionWarning" name="someSwitchOption001" type="checkbox"/>
                                                <label for="someSwitchOptionWarning" class="label-warning"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            marketing
                                            <div class="material-switch pull-right">
                                                <input id="someSwitchOptionDanger" name="someSwitchOption001" type="checkbox"/>
                                                <label for="someSwitchOptionDanger" class="label-danger"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            referencement
                                            <div class="material-switch pull-right">
                                                <input id="someSwitchOptionDanger" name="someSwitchOption001" type="checkbox"/>
                                                <label for="someSwitchOptionDanger" class="label-danger"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            marketing
                                            <div class="material-switch pull-right">
                                                <input id="someSwitchOptionDanger" name="someSwitchOption001" type="checkbox"/>
                                                <label for="someSwitchOptionDanger" class="label-danger"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            javascript
                                            <div class="material-switch pull-right">
                                                <input id="someSwitchOptionDanger" name="someSwitchOption001" type="checkbox"/>
                                                <label for="someSwitchOptionDanger" class="label-danger"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            python
                                            <div class="material-switch pull-right">
                                                <input id="someSwitchOptionDanger" name="someSwitchOption001" type="checkbox"/>
                                                <label for="someSwitchOptionDanger" class="label-danger"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            formation
                                            <div class="material-switch pull-right">
                                                <input id="someSwitchOptionDanger" name="someSwitchOption001" type="checkbox"/>
                                                <label for="someSwitchOptionDanger" class="label-danger"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            conseil
                                            <div class="material-switch pull-right">
                                                <input id="someSwitchOptionDanger" name="someSwitchOption001" type="checkbox"/>
                                                <label for="someSwitchOptionDanger" class="label-danger"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            design
                                            <div class="material-switch pull-right">
                                                <input id="someSwitchOptionDanger" name="someSwitchOption001" type="checkbox"/>
                                                <label for="someSwitchOptionDanger" class="label-danger"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <button type="submit" class="btn btn-default btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
