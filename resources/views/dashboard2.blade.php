<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <link rel="stylesheet" href="./styles.css">
    <title>Dashboard</title>
    <style>
        .form-control-primary {
    margin: 10px;
    opacity: 0.2;
    border-radius: 2px;
  }

  .sidebar {
    position: fixed;
    left: 0;
    bottom: 0;
    top: 0;
    z-index: 100;
    padding: 70px 0 0 10px;
    border-right: 1px solid #d3d3d3;
  }
  
  .left-sidebar {
    position: sticky;
    top:0;
    height: calc(100vh - 70px)
  }
  
  .sidebar-nav li .nav-link {
    color: #333;
    font-weight: 500;
  }

  main {
    padding-top: 90px;
  }
  main .card {
    margin-bottom: 20px;
  }
.navbar-brand{
  margin:10px;
  
}
        </style>
</head>

<body>
    <nav class="navbar navbar-dark fixed-top bg-info flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Dashboard</a>
        <input type="text" class="form-control form-control-primary w-100" placeholder="Search...">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="{{url('logout')}}">Logout</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 bg-light d-none d-md-block sidebar">
                <div class="left-sidebar">
                    <ul class="nav flex-column sidebar-nav">
                        <li class="nav-item">
                            <a style="margin-left:0.7cm" class="nav-link active" href="{{url('dashboard2')}}">

                                <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"
                                        clip-rule="evenodd" /></svg>
                               <label style="font-size:28px;"> <u>Home</u></label>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="margin-left:0.3cm" class="nav-link" href="{{url('users')}}">
                                <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"
                                        clip-rule="evenodd" /></svg>
                                        Users
                            </a>
                        </li>
                        
                        </li>
                        <li class="nav-item">
                            <a style="margin-left:0.3cm" class="nav-link" href="{{url('profile2')}}">
                                <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"
                                        clip-rule="evenodd" /></svg>
                                        Profile
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h3>Hello {{session('username')}}</h3>
                {{session('status')}}
                <table  class="table table-striped">
                <thead>
                    <tr>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Category</td>
                        <td>Created by</td>
                        <td>Approve</td>
                        <td>Refuse</td>
</tr>
</thead>
<tbody>
@foreach($users as $user)
<?php 
  $a=$user->status;
  if($a!= "s" && $a!="ref"){
  ?>
    <tr>
    <td>{{$user->title}}</td>
    <td>{{$user->description}}</td>
    <td>{{$user->category}}</td>
    <td>{{$user->created_by}}</td>
    <td><a href="/approve/{{$user->id}}">approve</a></td>
    <td><a href="/refuse/{{$user->id}}">refuse</a></td>
</tr>
<?php } ?>
@endforeach
</tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script></script>
</body>

</html>