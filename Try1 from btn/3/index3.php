<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>FORM Ajax</title>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="magic.js"></script>

</head>

<body>
    <form method="post" id="ajax_form" action="" >
        <input type="text" name="namo" placeholder="NAME" /><br>
        <input type="text" name="phonenumber" placeholder="YOUR PHONE" /><br>
        <input type="button" id="btn" value="Отправить" />
    </form>

    <br>

    <div id="result_form"></div> 
</body>
</html>