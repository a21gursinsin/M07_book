<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Llibres JSON</title>
    <link rel="stylesheet" href="/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

      <style>
      #tbstyle {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 50%;
      }

      #tbstyle td, #tbstyle th {
        border: 3px solid transparent;
        padding: 8px;
        vertical-align: middle;
        text-align: center;
      }
      #tbstyle th {

      }


      #tbstyle tr:nth-child(even){background-color: #f2f2f2;}

      #tbstyle tr:hover {background-color:#ddd;}

      #tbstyle th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        color: white;
        vertical-align: middle;
      }
      h3{
        text-align: center;
        font-weight: bold;
      }
      </style>
    </head>
	  <body>
      <?php
      if(file_exists('./books.json'))
      {
        $filename = 'books.json';
        $data = file_get_contents($filename); //data read from json file
        $users = json_decode($data);  //decode a data
         $message = "<h3 class='text-success'>JSON file data</h3>";
      }else{
         $message = "<h3 class='text-danger'>JSON file Not found</h3>";
      }
  ?>

	  <div style="width:500px; margin:0 7%">
      <div class="table-container">
      <?php
			 if(isset($message))
			 {
				  echo $message;
			 ?>
        <table class="table table-hover" id="tbstyle" >
          <tbody>
            <tr class="table-dark">
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
