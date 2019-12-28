<form action="{{route('updater_produit',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">


   @csrf
   @method('patch')
   <div><input type="text" name="name_product" class="form-control" placeholder="le nom du produit" value="{{$product->name_product}}"></div>
   <div><input type="text" name="prix_product" class="form-control" placeholder="Le prix du produit" value="{{$product->prix_product}}"> </div>
   <div> <textarea name="description_product" id="description" cols="30" rows="10" class="form-control" placeholder="La description"value="{{$product->description_product}}"></textarea> </div>
   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
