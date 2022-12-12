
<html>
    <head>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mainStyle.css">
<style>
        tr a {
            text-decoration: none;
            color: #5433ff;
            font-weight: bold;
        }
        #id{
            margin-right:25rem;
        }
        body{
            background:url('Pharmacy.jpg');
            overflow:hidden;
            background-repeat: no-repeat;
            background-size:400px;
                }
                #ta{
                    width:1000px;
                    margin-left:300px ;
                }
                

    </style>
    <title>solution</title>
</head>
<br><br>
<div class="card-body">
    <div class="table-responsive">
        <table class="table text-md-nowrap" id="ta" >
            <thead>

                <th class="wd-15p border-bottom-0">probleme</th>
                <th class="wd-15p border-bottom-0">solution</th>
                <th class="wd-10p border-bottom-0">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach (Auth::User()->unreadNotifications as $Notification)
                                    <td>{{$Notification->data['probleme']}}</td>
                                    <td>{{$Notification->data['message']}}</td>
                                   <td>
        <form action="{{route('notification.delete',$Notification->id)}}" method="post">
        <button class="btn btn-sm btn-danger" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg"
                                    width="25" height="25" fill="#fff" class="bi bi-trash"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg></button>
            </button>
	@csrf
    @method('DELETE')
    </form><td></tr>
    @endforeach
            <script src="js/all.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.bundle.min.js.map"></script>