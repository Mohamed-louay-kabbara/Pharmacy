<html>
<head>
<link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mainStyle.css">
        <style>
        img {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            /* background: url('Reacciones-adversas.jpg'); */
            background-size: cover;
            width:84rem;
            height:40rem;
        }
        body{
            margin:0;
            padding:0;
            background:rgb(81, 179, 245);
            background-repeat: no-repeat;
            background-size:1360px ;
             font-family: sans-serif;
        }
        .loginBox{
            position:absolute;
            top:40%;
            left:70%;
            transform: translate(-50%, -50%);
            width:350px;
            height:250px;
            padding:10px 10px;
            box-sizing: border-box;
            background:rgba(0,0,0,0.5) ;
        }
        h2{
            margin:0;
            padding:0 0 20px;
            color:#fff;
            text-align:center;
        }
        .loginBox p{
            padding:0;
            margin:0;
            font-weight:bold;
            color:#fff;
        }
         .loginBox button{
            width:100%;
            margin-bottom: 20px;
        }
        .loginBox button{
            border:none;
            outline:none;
            height: 40px;
            color:#fff;
            font-size:16px;
            background:royalblue;
            border-radius:20px;
            transition: background,color 0.2s;
        }
        .loginBox button:hover{
            background: #1E90FF;
            cursor:pointer;
            color: #191919;
        }
        ::placeholder{
            color:rgba(255,255,255,0.5);
        }
        .loginBox .inputbox {
            position: relative;
        }
        .loginBox .inputbox input {
            height: 20px;
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: white;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            background: transparent;
        }
        </style>
        <title>edit category</title>
</head>
<div><img src="{{ asset('R.jpg')}}" alt="" srcset="" class="img"></div>
<br><br><br>
<div class="loginBox">
<form class="row g-3" action="{{route('cotigory.update',$edit->id)}}" method="post">
@csrf
@method('PUT')
    <h2>Name Catigory</h2>
    <div class="inputbox">
    <input type="text" class="form-control" id="input" style="font-size:20px;"name="name" value="{{$edit->name}}" required autofocus>
  <div><br>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Edit</button>
  </div>
  <div>
  <script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.bundle.min.js.map"></script>