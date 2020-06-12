<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .text-center{padding: 15px; background-color: #007808; color: #fff;border-radius: 50%;}
  .text-center img{border-radius: 50%; margin-top: 15px; }
  .info{padding: 15px; margin-bottom: 15px}
  </style>
</head>
<body>

<div class="container" style="margin-top:30px">
  <div class="row">

    <div class="col-sm-12">
        <div class="text-center">
            <h2 >Informations de {{$username}}</h2>

          <img class="" width="100" src="{{storage_path('app/public/images/users/'.$image)}}" alt="">
          <br>
          <p>{{$username}}</p>
          <p>{{Auth::user()->email}}</p>
        </div>


      <!--div class="info">
          <h5>Ville de naissance:</h5>
          <p> {{$birth_city}}</p>
      </div-->

      <div class="info">
            <h5>Pays d'origine:</h5>
            <p> {{$birth_country}}</p>
      </div>

      <div class="info">
            <h5>Métier:</h5>
            <p> {{$job}}</p>
      </div>

      <div class="info">
          <h5>Pays de résidence:</h5>
            <p> {{$living_country}}</p>
      </div>

      <!--div class="info">
          <h5>Etat de résidence:</h5>
          <p> {{$living_state}}</p>
      </div-->

      <div class="info">
          <h5>Ville de résidence:</h5>
          <p> {{$living_city}}</p>
      </div>

    <div class="info">
        <h5>Code Postal:</h5>
        <p> {{$zip_code}}</p>
    </div>

    <div class="info">
        <h5>Situation matrimonial:</h5>
        <p> {{$marital_status}}</p>
    </div>

    <div class="info">
        <h5>Nombre d'enfant:</h5>
        <p> {{$children_number}}</p>
    </div>

    <div class="info">
        <h5>Numéro de téléphone:</h5>
        <p> {{$mobile_tel}}</p>
    </div>



      <h2 class="text-center">Info sur le père</h2>

      <div class="info">
          <h5>Nom du père:</h5>
          <p> {{$father_traditional_first_name}}</p>
      </div>

      <div class="info">
          <h5>Prénoms du père:</h5>
          <p> {{$father_last_name}}</p>
      </div>

      <!--div class="info">
          <h5>Autre noms du père:</h5>
          <p> {{$father_other_name}}</p>
      </div-->

      <div class="info">
          <h5>Nationalité du père:</h5>
          <p> {{$father_birth_country}}</p>
      </div>

      <div class="info">
          <h5>Village du père:</h5>
          <p> {{$father_town}}</p>
      </div>

      <div class="info">
          <h5>Nombre d'enfant du père:</h5>
          <p> {{$father_children_number}}</p>
      </div>


      <h2 class="text-center">Info sur la Mère</h2>

      <div class="info">
          <h5>Nom de la Mère:</h5>
          <p> {{$mother_traditional_first_name}}</p>
      </div>

      <div class="info">
          <h5>Prénoms de la Mère:</h5>
          <p> {{$mother_last_name}}</p>
      </div>

      <!--div class="info">
          <h5>Autre noms de la Mère:</h5>
          <p> {{$mother_other_name}}</p>
      </div-->

      <div class="info">
          <h5>Nationalité de la Mère:</h5>
          <p> {{$mother_birth_country}}</p>
      </div>

      <div class="info">
          <h5>Village de la Mère:</h5>
          <p> {{$mother_town}}</p>
      </div>

      <div class="info">
          <h5>Nombre d'enfant de la Mère:</h5>
          <p> {{$mother_children_number}}</p>
      </div>


    </div>
  </div>
</div>

</body>
</html>
