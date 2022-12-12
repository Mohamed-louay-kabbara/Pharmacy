<!DOCTYPE html>
<html>

<head>
    <title>Medication Basket</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <style>
    .T{
         color:green;
         font-size:25px;
     }
    </style>
</head>
<br>
<a href="{{ route('back') }}" class="btn btn-outline-primary">back</a>
<div class="card-body">
    <div class="table-responsive">
        <table class="table text-md-nowrap" id="example1">
            <thead>
                <th class="wd-15p border-bottom-0">Medication</th>
                <th class="wd-15p border-bottom-0">company</th>
                <th class="wd-15p border-bottom-0">Price</th>
                <th class="wd-15p border-bottom-0">count</th>
                <th class="wd-15p border-bottom-0">tatel</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brrow as $b)
                    <tr>
                        <th>{{ $b->medication->name }}</th>
                        <th>{{ $b->medication->company }}</th>
                        <th>{{ $b->medication->price }}</th>
                        <th>{{ $b->count }}</th>
                        <th>{{$b->count * $b->medication->price}}
                    </tr>
                @endforeach
              <th class="T">Final Total: {{ $total }}</th>
            </tbody>
        </table>
    </div>
</div>

<script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.bundle.min.js.map"></script>

</html>
