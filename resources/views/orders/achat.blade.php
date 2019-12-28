<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>
    <div>
    <h1>DFGHJKLCCCCCC</h1>    
    <h1 style="text-align:center; color:green">
     ACHAT RAPIDE EN TROIS CLICS</h1>
        <h2 style= "color:black">Besoin de support ? Appelez le 33 827 27 27 ou 78 147 07 17</h1>
     
        <form action="">
         <input type="text" placeholder="Nom de l'acheteur"><br>
         <input type="text" placeholder="Prenom de l'acheteur"><br>
         <input type="text" placeholder="Localisation de l'acheteur "><br>
         <input type="text" placeholder="Telephone de l'acheteur"><br>
         <button style=" color:green">Commander</button>
     </form>   
    </div>
   
    <div id="main" class="row">

            @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
