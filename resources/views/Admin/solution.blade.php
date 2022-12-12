<!doctype html>
<html>
	<head>
		<title> solution </title>
		<link rel="stylesheet" href="style.css">
        <style>
        body{
            margin:0;
            padding:0;
            background:#c0c0c0;
            background-repeat: no-repeat;
            background-size:1360px ;
             font-family: sans-serif;
        }
        img {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            /* background: url('Reacciones-adversas.jpg'); */
            background-size: cover;
            width:40rem;
            height:35rem;
        }
        .loginBox{
            position:absolute;
            top:50%;
            left:70%;
            transform: translate(-50%, -50%);
            width:350px;
            height:300px;
            padding:80px 40px;
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
            background:green;
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
	</head>
	<body>
    <div class=""><img src="{{ asset('Pharmacy.jpg')}}" alt="" srcset="" class="img"></div>
	<div class="loginBox">
        <form action="{{route('problem.update',$id)}}" method="post">
	@csrf
    @method('PUT')
        <h2>send solution</h2>
        <div class="inputbox">
        <input type="text" name="solution" id="input" class="form-control" required="required" autofocus>      
    </div>  
        <button type="submit">send</button>
    </form>
	</div>
	</body>
</html>
