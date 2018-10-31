<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Pagination</title>
    <style>
    body{ background-color: silver; }
    .container{
        padding: 50px 25px;
        background-color: #fff;
        margin-top: 50px;
        box-shadow: 0 4px 10px 10px rgba(0,0,0,.3);
        border-radius: 4px;
    }
    .nav-pills .nav-link {
    border-radius: 0; 
    }
    </style>
</head>
<body>
    <div class="container">
        <?=$this->template?>
    </div>
</body>
</html>