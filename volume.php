<?php

    require_once ('includes/functions.php');
    $from_value = '';
    $from_unit = '';
    $to_unit = '';
    $to_value = '';

    if ($_POST['submit']) {
        $from_value = $_POST['from_value'];
        $from_unit = $_POST['from_unit'];
        $to_unit = $_POST['to_unit'];

        $to_value = convert_volume($from_value, $from_unit, $to_unit);
    }

    $volume_options = array(
            'Cubic inches',
            'Cubic feet',
            'Imperial gallons',
            'Imperial quartz',
            'Imperial pints',
            'Imperial cups',
            'Imperial ounces',
            'Imperial tablespoons',
            'Imperial teaspoons',
            'US gallons',
            'US quarts',
            'US pints',
            'US cups',
            'US ounces',
            'US tablespoons',
            'US teaspoons',
            'Cubic centimeters',
            'Cubic meters',
            'liters',
            'milliliters'

    );

?>


<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <title>Convert Volume</title>
      <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  <div class="container">
      <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
              <h1 class="text-center">Convert Volume</h1>
              <form action="" method="post">
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="from_value"><strong>From</strong></label>
                          <input type="text" class="form-control" name="from_value" value="<?php echo float_to_string($from_value)?>" placeholder="Convert from...">
                      </div>
                      <div class="form-group col-md-6">
                          <select class="custom-select text-center" name="from_unit">
                              <?php
                              foreach ($volume_options as $unit) {
                                  $opt = optionize($unit);
                                  echo "<option value=\"{$opt}\"";
                                  if ($from_unit == $opt) { echo " selected"; }
                                  echo ">{$unit}</option>";
                              }
                              ?>
                          </select>
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="to_-value"><strong>To</strong></label>
                          <input type="text" class="form-control" name="to_value" value="<?php echo float_to_string($to_value) ?>" placeholder="Convert To...">
                      </div>
                      <div class="form-group col-md-6">
                          <select class="custom-select text-center" name="to_unit">
                              <?php
                              foreach ($volume_options as $unit) {
                                  $opt = optionize($unit);
                                  echo "<option value=\"{$opt}\"";
                                  if ($to_unit == $opt) { echo " selected"; }
                                  echo ">{$unit}</option>";
                              }
                              ?>
                          </select>
                      </div>
                  </div>
                  <div class="text-center spacer">
                      <input class="btn btn-success" type="submit" name="submit" value="Submit" />
                  </div>
              </form>

              <br />
              <a href="index.php">Return to menu</a>
          </div>
      </div>
  </div>
  </body>
</html>
