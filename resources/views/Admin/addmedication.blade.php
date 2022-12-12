
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD MEDICATION</title>
    <style>
        img {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            /* background: url('Reacciones-adversas.jpg'); */
            background-size: cover;
            width:90rem;
            height:50rem;
        }
        .box {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            height:850px;
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
<div class=""><img src="{{ asset('Reacciones-adversas.jpg')}}" alt="" srcset="" class="img"></div>
<body>
    <div class="box">
        <h2>ADD MEDICATION</h2>
        <form method="POST" action="{{ route('Medication.store') }}" class="decor" enctype="multipart/form-data">
            @csrf
            <div class="inputbox">
                <input class="@error('name') is-invalid @enderror" type="text" name="name" required="">
                <label>Name</label>
                @error('name')
                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="inputbox">
                <input class="@error('company') is-invalid @enderror" type="text" name="company" required="">
                <label>company</label>
                @error('company')
                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="inputbox">
                <input class="@error('price') is-invalid @enderror" type="number" name="price" required="">
                <label>price</label>
                @error('price')
                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="inputbox"><input type="number" name="count" required><label>count</label>
            </div>
            <div class="inputbox"> <input type="file" name="picture" required> <label>picture</label>
            </div>
            <div class="inputbox"><input type="date" name="production_date" required> <label>production date</label>
            </div>
            <div class="text">
            <label>Name Category</label><br>
            <select name="cotigory_id" class="select">
                @foreach($Categories as $c)
                <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select><br><div>
            <p class="text">information</p>
            <div class="inputbox"><textarea name="information" id="" cols="3" rows="3"></textarea><br><br>
            </div>
<div class="text">
            <label>Does he need a medical report?</label><br>
            <select name="medical_prescription" class="select">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select><br><div>
            <input type="submit" name="" value="ADD">
        </form>
    </div>
</body>
</html>
