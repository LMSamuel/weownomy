<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Movies | Films</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <livewire:styles>
    <!--/ Styles -->
</head>

<body class="font-sans bg-blue-700 text-white">
  <nav class="bg-black border-b border-gray-800" id="app">
      <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-2 py-2">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{route('film.index')}}">
                        <img class="wt-27" src="{{asset('images/logo.png')}}" alt="">
                    </a>
                </li>

                <li class="md:ml-4 mt-3 md:mt-0">
                    <a href="{{route('film.index')}}" class="text-warning hover:text-gray">
                      <i class="fas fa-home"></i>
                      Home Page
                    </a>
                </li>

                <li class="md:ml-4 ml-3 md:mt-0">
                    <div class="dropdown mt-3">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown">
                          <i class="fas fa-film text-default"></i>
Latest Movies                        </button>
                        <div class="dropdown-menu" id="latest">
                        </div>
                      </div>
                </li>
            
                
  </nav>

  @yield('content')



<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <livewire:scripts>
<!--/ Scripts -->

</body>
<hr>
  <!-- Footer -->
  <footer class="page-footer">
    <div class="footer-copyright text-center py-3">TV Maze API
      <a href="" class="text-warning" target="_blank"> themoviedb API</a>
    </div>
</footer>
  <!-- Footer -->
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $.ajax({
      url : '/lespluscritiques',
      type : 'GET',
      success : function(data){
        var rows = data.latest;
        var chaine ='';
        if(rows.length == 0){
          chaine = "<p class=dropdown-item> Pas de critiques </p>";
          $("#latest").append(chaine);
        }
        else{
          $.each(rows,function(index,row){
            chaine = "<a class=dropdown-item" + " id = " + row.film_id + " href=/film/"+row.film_id+">" + row.film_titre + "</a>";
            $("#latest").append(chaine);

          });
        }
        
      }
    });
  });
</script>