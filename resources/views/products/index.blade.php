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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rancho&effect=fire-animation|3d-float|neon">
</head>
  <!-- Custom styles for this template -->
  
  
 


<table class="table table-striped">
       <tr>
           <th>#</th>          <th>Nom Produit</th>           <th>Prix Produit</th><th>Image </th><th></th>
       </tr>
       @foreach($products as $product)
           <tr>
               <th>#</th>
               <th>{{$product->name_product}}</th>
               <th>{{$product->prix_product}} {{ $product->category->name ?? '' }}</th>
               <th>{{$product->image_product}}</th>
               <th><img src="{{$product->image_product ? asset($product->image_product) : asset('uploads/images/default.png')}}" alt="{{$product->name}}" width="100"></th>
               <th></th>
        
            
               
               
               <th>
               
<p><a href="{{route('editer_produit',['id'=>$product->id])}}"><button type="button" class="btn btn-primary">Editer</button></a>
<br>

</p>

   

    <form action="product/{{$product->id}}" method="post">
    @csrf
    @method('delete')
    <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
    </form>
    
   <div class="col-6 text-right"><img src="{{asset($product->images)}}" alt="{{$product->name}}" width="100"></div><div class="col-6"><h3>Chargez une autre image pour remplacer celle-ci</h3></div>
</div>
<div>
   <input type="file" name="image_product" class="form-control">

</th>

       </tr>
       @endforeach
   </table>
