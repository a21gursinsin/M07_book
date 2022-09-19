<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Llibres JSON</title>
    <link rel="stylesheet" href="style.scss">

    </head>
	  <body>
      <?php
      if(file_exists('./books.json'))
      {
        $filename = 'books.json';
        $data = file_get_contents($filename); //data read from json file
        $users = json_decode($data);  //decode a data
         $message = "<h1>Fitxer de JSON</h1>";
      }
  ?>

	  <div style="width:500px; margin:0 7%">
      <div class="table-container">
      <?php
			 if(isset($message))
			 {
				  echo $message;
			 ?>
        <table class="rwd-table">
          <tbody>
            <tr>
              <th>Author</th>
              <th>Country</th>
              <th>ImageLink</th>
              <th>language</th>
              <th id="link">link</th>
              <th>pages</th>
              <th>title</th>
              <th>year</th>
            </tr>
            <?php foreach ($users as $s) { ?>
            <tr>
              <td> <?= $s->author; ?> </td>
              <td> <?= $s->country; ?> </td>
              <td> <img src="<?= $s->imageLink; ?>"style="width:100%;"> </td>
              <td> <?= $s->language; ?> </td>
              <td> <a href="<?= $s->link; ?>"><?= $s->link; ?></a> </td>
              <td> <?= $s->pages; ?> </td>
              <td> <?= $s->title; ?> </td>
              <td> <?= $s->year; ?> </td>
            </tr>
            <?php 
            }
          }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  
</body>
</html>
