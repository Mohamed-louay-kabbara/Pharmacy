
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT MEDICATION</title>
    <style>
        img {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            /* background: url('Reacciones-adversas.jpg'); */
            background-size: cover;
            width:80rem;
            height:39rem;
        }
        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            height:550px;
            padding: 40px;
            background: rgba(0, 0, 0, 0.562);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }

        .box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: white;
            text-align: center;
        }

        .box .inputbox {
            position: relative;
        }

        .box .inputbox input {
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
        .box .inputbox textarea {
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


        .box .inputbox label {
            position: absolute;
            top: 0;
            left: 0%;
            padding: 10px 0;
            font-size: 16px;
            pointer-events: none;
            color: white;
            transition: 0.5s all;
        }

        .box .inputbox input:focus~label,
        .box .inputbox input:valid~label {
            top: -18px;
            left: 0;
            color: #03a9f4;
            font-size: 14px;
        }

        .box input[type="submit"] {
            background: transparent;
            border: none;
            outline: none;
            color: white;
            background: #03a9f4;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-left: 7.5rem;
        }
        .text{
            color:#fff;
        }
        .select{
            height: 20px;
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #000;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            background: transparent;

        }
    </style>
</head>
<div class=""><img src="{{ asset('OIP.jpg')}}" alt="" srcset="" class="img"></div>
<body>

    <div class="box">
        <h2>EDIT PROFILE</h2>
        <form method="POST" action="{{ route('profile.update',$users->id)}}" class="decor" enctype="multipart/form-data">
        @method('PUT')
            @csrf
            <div class="inputbox">
                <input class="@error('name') is-invalid @enderror" type="text" name="name" required="" value="{{$users->name}}">
                <label>Name</label>
                @error('name')
                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="inputbox">
                <input class="@error('email') is-invalid @enderror" type="text" name="email" required="" value="{{$users->email}}">
                <label>Email</label>
                @error('email')
                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="inputbox">
                <input class="@error('address') is-invalid @enderror" type="text" name="address" required="" value="{{$users->address}}">
                <label>Address</label>
                @error('address')
                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="inputbox"><input type="number" name="phone" required value="{{$users->phone}}"> <label>Phone</label>
            </div>
            <div class="inputbox"><input type="password" name="password" required value="{{$users->password}}"> <label>password</label>
            </div>
<div class="text"><br><div>
            <input type="submit" name="" value="Edit">
        </form>
    </div>
</body>
</html>
