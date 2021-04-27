<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animal Care</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/style.css">
  <link rel="sortcut icon" href="./img/patas.png" type="image/x-icon" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar bg-light;">
      <img class="patasimg" src="./img/patas.png"><img class="tittleimg" src="./img/titulo.png">
    </nav>
  </header>
  <section>
    <h3 style="font-size: 4.0vh"><strong>Lista dos Pets <img class="ossoimg" src="./img/osso.png"> :</strong></h3>
  </section>
  <div class="divtable">
    <div>
      <table class="table table-striped tables">
        <thead>
          <tr class="headertable">
            <th scope="row">Id</th>
            <th scope="row">Nome do Proprietário</th>
            <th scope="row">Nome do Pet</th>
            <th scope="row">Tipo</th>
            <th scope="row">Peso</th>
          </tr>
        </thead>
        <tbody id="tableBody" class="bodytable">
        <?php foreach($pets as $pet){ ?> 
          <tr>
            <td><strong><?=$pet->id?></strong></td>
            <td><?=$pet->nomeDono?></td>
            <td><?=$pet->nomeAnimal?></td>
            <td><?=$pet->tipoAnimal?></td>
            <td><?=$pet->peso?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <footer>
    <p>© 2020 Animal Care - All rights reserved.</p>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>