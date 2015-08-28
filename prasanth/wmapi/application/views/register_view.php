<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        .getApiKet{
            width: 400px;
            padding: 20px;
            margin: 0 auto;
            border-radius: 20px;
            background: #990000;
            color: #f9f9f9;
            cursor: pointer;
        }
    </style>
    <title><?php echo $titulo ?></title>
</head>
<body>
<?php echo form_open(base_url("register/newApiKey")) ?>
    <input type="hidden" name="miApiKey" value="get!" />
    <input type="submit" class="getApiKet" value="Obtener mi api key" />
<?php echo form_close() ?>
</body>
</html>