<head>
    <title>ADD CATIGORY</title>
<link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mainStyle.css">
        <style>
           div{ margin-left:25rem;}

           body{
            background-image:url('R.jpg');
            background-size: 100rem;
            overflow:hidden;
            background-repeat: no-repeat;
        }
        </style>
</head>
<br><br><br>
<form class="row g-3" action="{{route('cotigory.store')}}" method="post">
@csrf
<div class="col-md-4"><h1 for="validationDefault01" class="form-label">Name Catigory</h1><br>
    <input type="text" class="form-control" id="validationDefault01" name="name" required autofocus>
  </div><br>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Add</button>
  </div>
  <script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.bundle.min.js.map"></script>