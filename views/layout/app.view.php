<!DOCTYPE html>
<html>
<head>
    <title><?= $data['title']; ?></title>
    <?php load_css('app'); ?>
</head>
<body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            App
            <!-- <img alt="Brand" src="..."> -->
          </a>
        </div>
      </div>
    </nav>
    <?php load_js('app'); ?>
</body>
</html>