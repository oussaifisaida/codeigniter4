<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Ajouter un agriculteur</title>
  </head>
  <body style="background-color: #7fcf95;">
  <br> <br><br>
  <h1 style="margin-left:100px">Ajouter un agriculteur</h1>
  <br><br>
    <div class="container" style="background-color: white">
       
       <form action="<?= base_url('/agriculteur/store') ?>" method="POST">

       <br>
       <div class="form-check form-check-inline">
  <input class="form-check-input" name="cvl" type="checkbox" id="mr" value="mr">
  <label class="form-check-label" for="inlineCheckbox1">Mr</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" name="cvl" type="checkbox" id="mme" value="mme">
  <label class="form-check-label" for="inlineCheckbox2">Mme</label>
</div>

        <div class="row">
        <div class="col">
        <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom">
        <label for="nom">Nom</label>
        </div>
        </div>
        <div class="col">
        <div class="form-floating mt-3 mb-3">
        <input type="text" class="form-control" id="prenom" placeholder="Prènom" name="prenom">
        <label for="prènom">Prènom</label>
        </div>
        </div>
        
        <div class="col" >
        <select name="tranche_age" class="form-select" aria-label="Default select example" style="height:55px;margin-top:18px">
        <option selected>Tranche d'age</option>
        <option value="40-50">40-50</option>
        <option value="30-40">30-40</option>
        
        </select>
        </div>
        </div>
        <button  type="submit" class="btn btn-primary" style="background-color:MediumSeaGreen";> Ajouter </button>

        
    <!-- Tableau ! -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">ID</th>
      <th scope="col">Cvl</th>
      <th scope="col">Nom</th>
      <th scope="col">Prènom</th>
      <th scope="col">Age</th>
    </tr>
  </thead>

  <tbody>
    <?php if($agriculteur): ?>
       <?php foreach($agriculteur as $item) :?>
		  <tr>
			  <th scope="row">X</th>
			  <td><?php echo $item['id']; ?></td>
        <td><?php echo $item['cvl']; ?></td>
			  <td><?php echo $item['prenom']; ?></td>
			  <td><?php echo $item['nom']; ?></td>
			  <td><?php echo $item['tranche_age']; ?></td>

			  
				
       </tr> 
         
       <?php endforeach; ?>
      <?php endif; ?>


     </tbody>
    </table>
  

        <form>
        
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>