<!doctype html>
<html>
	<head>
		<title> Admin </title>
		<link rel="stylesheet" href="style.css">
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
        </style>
	</head>
	<body>
    <div><img src="{{ asset('R1.jpg')}}" alt="" srcset="" class="img"></div>
	
<form method="POST" action="{{ route('Buy.update',$id)}}" class="decor" enctype="multipart/form-data">
<div class="loginBox">
@csrf
@method('PUT')
<h2> هذا الدواء لا يمكن اعطائه الى بوصفة طبية من دكتور مختص يرجى وضع صورة للوصفة الطبية</h2><br>
<input type="file" name="medical_prescription" id="" style="color:red"><br><br>
<button type="submit" class="btn btn-primary">button</button>
</div>
</form>
</html>
