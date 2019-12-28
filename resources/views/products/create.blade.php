<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> E-Commerce </title>

  <!-- Bootstrap core CSS -->
  
  <link href="{{asset('css/app.css')}}" rel="stylesheet" />
  <link href="{{asset('css/all.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho&effect=fire-animation|3d-float|neon|canvas-print 	
">
  <!-- Custom styles for this template -->
  <H1>    AJOUT DE NOUVEAUX PRODUITS </H1>
<div class="container">
    <form action="{{route('store_products')}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                @endif
            
                    
                    <select name="category_id" id="category_id" class="form-control">
                       <option value=""></option>
                       @foreach($categories as $key => $value)
                       <option value="{{$key}}">{{$value}}</option>
                       @endforeach
                       </select>
                       
            </select>

               <div>
                   <input type="text" name="name_product"  id="name_product" class="form-control" placeholder="le nom du produit">
               </div>
               <div>
                   <input type="text" name="prix_product" id="prix_product" class="form-control" placeholder="Le prix du produit">
               </div>
               <div>
                   <textarea name="description_product" id="description_product" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
               </div>
               <div>
               <input type="file" name="image_product" class="form-control">
               </div>

               
               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
              
              
               <div>
            </form>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="{{asset('js/app.js')}}"></script>
      <script src="{{asset('js/bootstrap.js')}}"></script>
     

</body>

</html>           