<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product list page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <div class="row align-items-end mt-2">
        <div class="col-8"><h2>Product List</h2></div>
        <div class="col-4 text-end">
          <a href="/addproduct.php"><button type="button" class="btn btn-primary">ADD</button></a>
          <a><button type="button" class="btn btn-danger" id="#delete-product-btn">MASS DELETE</button></a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-3 mb-3">
          <div class="card">
            <div class="card-body">
                <input type="checkbox">
                <div class="text-center">
                <p>ID</p> 
                <p>name</p>
                <p>Price</p>
                <p>Sizes</p>
                </div>
            </div>
          </div>
        </div>
      </div>  
      <hr>
    <div class="row">
      <div class="col-12 text-center">Scandiweb Test assignment</div>
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>