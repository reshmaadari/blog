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
                            <a style="margin-left:0.3cm" class="nav-link active" href="{{url('dashboard')}}">

                                <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"
                                        clip-rule="evenodd" /></svg>
                               <label style="font-size:28px;"> <u>Home</u></label>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('create_post')}}">
                                <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"
                                        clip-rule="evenodd" /></svg>
                             Create Post
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('posts')}}">
                                <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"
                                        clip-rule="evenodd" /></svg>
                                Posts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('profile')}}">
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
                <p>{{session('status')}}</p>
                <div class="card">
  <div class="card-header">
    Total Posts
  </div>
  <div class="card-body">
    <h5 class="card-title">
        <?php 
        $json=json_encode($users, JSON_FORCE_OBJECT);;
        $js=json_decode($json,1);
        $cont=count($js);
        echo $cont;
        ?>


</h5>
  </div>
</div>
<div class="card">
<div class="card-header">
    Approved Posts
  </div>
  <div class="card-body">
    <h5 class="card-title"> <?php 
        $json=json_encode($users, JSON_FORCE_OBJECT);;
        $js=json_decode($json,1);
        $cont=count($js);
        $count=0;
        for($i=0;$i<$cont;$i++){
            $status=$js[$i]['status'];
            if($status== "s"){
                $count++;
            }
        }
        echo $count;
        
        ?>   </h5>
  </div>
</div>
<div class="card">
<div class="card-header">
    Pending Posts
  </div>
  <div class="card-body">
    <h5 class="card-title">
    <?php 
        $json=json_encode($users, JSON_FORCE_OBJECT);;
        $js=json_decode($json,1);
        $cont=count($js);
        $count=0;
        for($i=0;$i<$cont;$i++){
            $status=$js[$i]['status'];
            if($status== "no"){
                $count++;
            }
        }
        echo $count;
        
        ?>        

</h5>
  </div>
</div>
<!-- <div class="card-header">
    Pending Posts
  </div>
  <div class="card-body">
    <h5 class="card-title">Pending </h5>
  </div>
</div> -->
                <!-- <hr> -->
                <!-- <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Position</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>John</td>
                                <td>Doe</td>
                                <td>Back-end developer</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Raghunandan</td>
                                <td>Vempati</td>
                                <td>JS developer</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Suresh</td>
                                <td>Mohan</td>
                                <td>Project Manager</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Syam</td>
                                <td>Babu</td>
                                <td>Scrum master</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Karthik</td>
                                <td>Ravichandran</td>
                                <td>Back-end developer</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3>Invoice</h3> -->
                <!-- <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Invoice #184382</h5>
                                <p class="card-text">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor
                                    mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                <a href="#" class="btn btn-info">Print</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Invoice #184386</h5>
                                <p class="card-text">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor
                                    mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                <a href="#" class="btn btn-info">Print</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Invoice #184389</h5>
                                <p class="card-text">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor
                                    mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                <a href="#" class="btn btn-info">Print</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Invoice #184391</h5>
                                <p class="card-text">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor
                                    mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                                <a href="#" class="btn btn-info">Print</a>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script></script>
</body>

</html>