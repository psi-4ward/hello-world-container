<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Hello World">
<title>Hello World</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
<style>
body {
  padding-top: 20px;
}
/* Layout */
.jumbotron {
  font-size: 21px;
  font-weight: 200;
  line-height: 2.1428571435;
  color: inherit;
  padding: 10px 0px;
  text-align: center;
  background-color: transparent;
}
.masthead, .body-content, {
  padding-left: 15px;
  padding-right: 15px;
}
/* Colors */
.green {color:#5cb85c;}
.orange {color:#f0ad4e;}
.red {color:#d9534f;}
</style>
</head>
<body>
<div class="container">
  <div class="jumbotron">
    <h1><i class="fa fa-hand-peace-o green"></i> Hello World</h1>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          Request HEADER
        </div>
        <div class="panel-body">
          <pre><?php print_r(getallheaders()); ?></pre>
        </div>
      </div>
    </div>
    <div class="col-xs-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          $_SERVER
        </div>
        <div class="panel-body">
          <pre><?php print_r($_SERVER); ?></pre>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          $_GET
        </div>
        <div class="panel-body">
          <pre><?php print_r($_GET); ?></pre>
        </div>
      </div>
    </div>
    <div class="col-xs-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          $_POST
        </div>
        <div class="panel-body">
          <pre><?php print_r($_GET); ?></pre>
        </div>
      </div>
    </div>
  </div>  
</div>
</body>
</html>
