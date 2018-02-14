<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form test</title>
</head>
<body>
Hello
  <?php if (isset($_GET['submitted'])) { ?>
   <div style="border:1px solid red; backgraund-color: yellow; border-radius: <?php echo htmlspecialchars($_GET['range']); ?> ">
    <h1>The server had accepted:</h1>
    <p>radio: <?php echo htmlspecialchars($_GET['radio']); ?></p>
    <p>text: <?php echo htmlspecialchars($_GET['name']); ?></p>
    <p>textarea: <?php echo htmlspecialchars($_GET['textarea']); ?></p>
    <p>select: <?php echo htmlspecialchars($_GET['select']); ?></p>
    <p>color: <?php echo htmlspecialchars($_GET['my-color']); ?> : color <span style="background-color: <?php echo htmlspecialchars($_GET['my-color']); ?>;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span> </p>
	</div>
    <p>Try again? <a href="/index.php">Yes!</a></p>
  <?php } ?>

  <?php if (!isset($_GET['submitted'])) { ?>
  
  <h1>Play with the HTML form</h1>
  <form style="border: 1px solid green;" action="/index.php">
    <input type="hidden" name="submitted" value="yes">
    <p>
      <label for="my-radio-yes">radio Yes: </label>
      <input id="my-radio-yes" name="radio" type="radio" required value="Yes">
      <label for="my-radio-no">radio No: </label>
      <input id="my-radio-no" name="radio" type="radio" required value="No"></p>
    <br>
      <p>
	<label for="surname">Имя: </label>
        <input id="surname" type="text" name="name"><br>
      </p>
      <textarea name="textarea" id="text1"></textarea><br>
      <p>
			<label  for="my-color">color: </label>
			<input name="my-color" id="my-color" type="color">
	</p>
	  <p>
			<label for="my-select">select: </label>
			<select name="select" id="my-select" size="1" required>
				<option value="">--------</option>
				<option value="1">Первая</option>
				<option value="2" selected>Вторая</option>
			</select>
	</p>
	  <p>
			<label for="my-range">range: </label>
			<input name="range" id="my-range" type="range" min="0" max="10">
		</p>
      
    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
  </form>

  <?php } ?>

</body>
</html>
