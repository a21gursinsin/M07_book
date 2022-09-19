<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Llibres JSON</title>
    <link rel="stylesheet" href="style.css">
    </head>

	  <body>
      <?php
      if(file_exists('./books.json'))
      {
        $filename = 'books.json';
        $data = file_get_contents($filename); //data read from json file
        $users = json_decode($data);  //decode a data
        $message = "<h1>no trobat el fitxer de JSON</h1>";
      }
    ?>
      <h1><span class="blue"></span>Fitxer de<span class="blue"></span> <span class="yellow">JSON</pan></h1>
      <div class="table-container">
        <?php
        if(isset($message)){}else {$message;}
        ?>
       </div>
       <table class="container">
          
        <thead>
            <tr>
              <th><h1>Author</h1></th>
              <th><h1>Country</h1></th>
              <th><h1>ImageLink</h1></th>
              <th><h1>language</h1></th>
              <th id="link"><h1>link</h1></th>
              <th><h1>pages</h1></th>
              <th><h1>title</h1></th>
              <th><h1>year</h1></th>
            </tr>
       </thead>
            <?php foreach ($users as $s) { ?>
        <tbody>
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
            <tbody>
            <?php 
            }
          
            ?>
          </tbody>
        </table>
      
  
</body>
</html>
