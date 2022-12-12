<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mainStyle.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"crossorigin="anonymous"/>
      <link rel="stylesheet" href="HomePage.css">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>The Website NETFLIX</title>
    <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
legend{
    margin-bottom: -30px;
    margin-left: 130px;
    color:#fff;
    width: auto;
    padding:5px;
    box-shadow: 5px 3px #53010e;
    background-color: #79a7d8;
}

.card-title{color: #79a7d8;}
.card-text{
    font-weight: 600;
    color: black;

}

button{
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    border-radius: 20px;
    border: none;
    font-size: 16px;
    font-weight: 400;
    color:#fff;
    background-color: #79a7d8;
}

.btnRead{
    width: 40%;
    padding: 10px;
    margin-top: 20px;
    border-radius: 20px;
    border: none;
    font-size: 16px;
    font-weight: 400;
    color:#fff;
    background-color: #79a7d8;
}

.bg{
    background-color:#79a7d8;
}

.navbar{
    padding:auto;
}

.navbar-toggler:focus{
    box-shadow: none;
}
@media(max-width:767px){
     .ul-bg{
    background-color:rgb(4, 93, 93);
  }
}

@media(max-width:768px){
    .footer .footer-col{
        width: 33.3%;
        padding: 0 15px;
        margin-bottom: 33.3px;
  }
}

@media(max-width:574px){
    .footer .footer-col{
        width: 100%;
  }
}

.d{
    margin-bottom:30%;
    color: rgb(250, 45, 45);
}

.h{
    color: #f5f5f5;
}

.p{
    font-size: 26px;
    color:#bf0621;
}

.section{
    width: 100%;
}

.content{
    float: left;
    width: 40%;
}

.Plorem{
    width: 55%;
}

.contactus-section{
    float: right;
    margin-right: 33rem;
}

.social{
    margin-left: 3rem;
}

.social svg{
    color: #fff;
    font-size: 22px;
    border-radius: 50%;
    line-height: 45px;
    text-align: center;
    margin: 0px 5px;
}

p{
    display: inline-block;
}
h6{
    display: inline-block;
}

.form-inner input,
.form-inner textarea{
    display: block;
    width: 80%;
    padding: 5px;
    border: none;
    border-radius: 17px;
    background: #fff;
}

.footer-col .form-inner input::placeholder{
    padding-left: 20px;
}

.form-inner textarea {
    resize: none;
}
.container{
    max-width: 1170px;
    margin: auto;
}

.row{
    display: flex;
    flex-wrap: wrap;
}
ul{
    list-style:none;
}

.footer{
    background-color: black;
    padding: 70px 0;

}

.footer-col{
    width: 33.3%;
    padding: 0 15px;
}

.footer-col h5,p,h3,h6{
    color: #fafbfb;
}

.footer-col h5{
    margin-left: 30px;
}

.footer-col p{
    width: auto;
}
.social-links a{
    padding-left: 30px;
}

.social-links a i{
color: #bf0621;
font-size: 30px;
margin-left: 6px;
border-radius: 50%;
border: 1px solid #79a7d8;
background-color: #79a7d8;
}
#but{
    margin:-55px -75px 10px 250px ;
}
      </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg fixed-top">
    <form action="{{route('search.Medication')}}" method="post">
        @csrf
      <input class="form-control mr-sm-4" type="search" placeholder="Enter Name Medication.." aria-label="Search" name="name_medication">
      <input type="submit" value="Search" id="but" class="btn btn-primary">
    </form>
      <a href="" cmg src="C:\Users\ASUS\Desktop\Test\public\Netflix_logo.svg.png" alt="logo" style="width:100px"  ></a>
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"data-bs-target="#btn">
      <i class='bx bx-menu'></i>
    </button>
    <div class="collapse navbar-collapse ul-bg" id="btn">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="route('logout')" class="nav-link mx-3 text-white"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
</a>
                                </form>
        </li>

        <li class="nav-item">
          <a href="{{route('Buy.create')}}" class="nav-link mx-3 text-white">Basket</a>
        </li>

        <li class="nav-item">
        <a  class="nav-link mx-3 text-white"  href="{{route('profile.edit',Auth::id())}}">Edit Profile</a>
        </li>
        <li class="nav-item">
        <a href="{{url('/' . ($page = 'solution'))}}" class="nav-link mx-3 text-white">Notification</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link mx-3 text-white">{{auth()->user()->name}}</a>
        </li>
      </ul>
    </div>
  </nav>
  <img src="C:\Users\ASUS\Desktop\Test\public\rer.jpg" class="d-block w-100 ta col-12 col-md-6 col-lg-4 " alt="Photo Netflix..">
 <div class="carousel-caption">
  <div class="d">
    <h1 class="h"></h1>
  </div>
</div>
@if($statues=="add")
<div class="alert alert-success d-flex align-items-center" role="alert" style="height:100px; margin:100px 0px 0px 0px;">
  <div><a href="{{route('dashboard')}}" style="color:green;text-decoration:none;">
  Your problem has been sent and will be answered as soon as possible
</a> </div>
</div>
@endif
<br><br>
<div class="btn-group" role="group" aria-label="Basic example">
    @foreach($categories as $c)
    <a href="{{route('search.category',$c->id)}}" style="color:#fff;font-weight:bold; text-decoration: none;"><button type="submit" class="btn btn-primary">{{$c->name}}</button></a>
    @endforeach
    <a href="{{route('dashboard')}}" style="color:#fff;font-weight:bold; text-decoration: none;"><button type="submit" class="btn btn-primary">all</button></a>
</div><br><br>
  <div class="container">
    <div class="row">
        @if($statues =="not found")
                        <h1 style="color:red;">{{$statues}}</h1>
                        @endif
        @foreach($medications as $m)
        @if($m->count>0)
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
          <img src="{{asset('imgs/' . $m->picture)}}" alt="Friends" style="height:235px;" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">{{$m->name}}<br>{{ $m->company }}</h5>
              <p class="card-text">
              Price:{{ $m->price }}<br>
              Production Date:{{ $m->production_date }}<br>
             Name Category:{{ $m->category->name }}<br>
              Information :<br> {{ $m->information }}<br>
               Count:{{$m->count}}</p><br>
               <p class="text-card">
                @if($m->medical_prescription=="No")
                <lable style="color:green;font-size: larger; ">Does not need a prescription</lable>
                @endif
                @if($m->medical_prescription=="Yes")
                <lable style="color:red;font-size: larger;">Does need a prescription</lable>
                @endif
                </p>
    <a href="{{route('Buy_store',$m->id)}}" style="color:#fff;font-weight:bold; text-decoration: none;">
                 <button>buy</button></a>
            </div>
          </div>
        </div>
        @endif
        @endforeach
  </div>
  <br><br>
    <legend>Get in touch</legend>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h5>About Us</h5>
          <ul>
            <li> <p class="Plorem">This project is a pharmacy through this site you can search for 
                a particularly drug and find out great onformation about it as when using it and how much do you are a day and how much it rate and buy ,
            </p></li>
            <li> <p class="Plorem">Or you can consuit the pharmacy about any problem you experience.</p></li>
          </ul>
        </div>

        <div class="footer-col">
          <h5>Contact Us</h5>
          <ul>
            <li><h3>+963 938 787 722</h3></li>
            <li><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#79a7d8" class="bi bi-telephone" viewBox="0 0 16 16">
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg><h6>+963 938 787 722</h6>
  <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#79a7d8" class="bi bi-envelope" viewBox="0 0 16 16">
              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
            </svg><h6>louaykabbara@gmail.com</h6>
  <br>
           <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#79a7d8" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
           <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
           </svg><h6>Syrai, Damascus </h6>
  <br></li>
  <div class="social-links">
    <a href=""><i class="fab fa-twitter"></i></a>
    <a href=""><i class="fab fa-facebook-f"></i></a>
    <a href=""><i class="fab fa-instagram"></i></a>
    <a href=""><i class="fab fa-youtube"></i></a>
  </div>
      </div>
        <div class="footer-col">
          <div class="form-inner">
            <form action="{{route('problem.store')}}" method="post">
              @csrf
            <h5>Send Problem to Pharamcy</h5><br><br>
          <ul>
            <!-- <li><input type="text" placeholder="Your Name"><br></li>
            <li><input type="text" placeholder="Your Email Address"><br></li> -->
            <li><textarea cols="40" rows="5" placeholder="Your Message" name="problem"></textarea></li>

            <li> <button class="btnRead">Send</button></li>
          </ul></form>
        </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.bundle.min.js.map"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"crossorigin="anonymous"></script>
  </body>
</html>
