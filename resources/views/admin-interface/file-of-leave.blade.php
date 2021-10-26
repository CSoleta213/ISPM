<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/favicon-01-01.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/side-nav.css">
    <link rel="stylesheet" href="/css/main-content.css">
    <style>
      * {
        margin: 0;
        padding: 0;
        text-decoration: none;
      }
      body {
        box-sizing: border-box;
        background-color: #FFF5E1;
        font-family: 'Montserrat', sans-serif;
      }
      /* Main Body */
      .main .icon img {
        width: 50px;    
        vertical-align: middle;
        padding-left: 10px;
      }
      .main h1{
        padding: 20px;
        color: #492827;
        display: inline-block;
        font-weight: bold;
        font-family: 'Dela Gothic One';
      }
      .main .btn {
        border: none;
        outline: none;
        padding: 10px 20px;
        cursor: pointer;
        background-color: #FFF5E1;
        font-style: normal;
        font-weight: bold;
        color:black;    
        text-shadow: 1px 0 black;
        letter-spacing:1px;
      }
      .main .active, .main .btn:hover {
        background-color: #FFCE65;
        color: white;
        width: auto;
      }
      .main li {
        display: inline-block;
      }
      /* Applicant Nav */
      div.applicant-nav ul{
        display: inline-block;
      }
      ul.ajp-right {
        float: right;
        margin-right: 20px;
      }
      /* Job Container */
      div .job-container {
        display: block;
        padding: 0px;
      }
      div .job-container .my-request {
        box-sizing: border-box;
        /* box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 1px 3px 0 rgba(0, 0, 0, 0.19); */
        /* border-radius: 25px; */
        width: 350px;
        height: 100%;
        background-color: #FFF5E1;
        display: inline-block;
        padding-left: 30px;
        margin: 0px 30px 0px 20px;
        font-size: 13px;
      }

      /* File of Leave Complete Info Container */
      div .fol-comp-info-container {
        position: absolute;
        top: 123px;
        display: block;
        padding: 0px;
        margin-left: 27%;
      }
      div .fol-comp-info-container .comp-info {
        box-sizing: border-box;
        /* box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 1px 3px 0 rgba(0, 0, 0, 0.19); */
        /* border-radius: 25px; */
        width: 350px;
        height: 100%;
        background-color: #FFF5E1;
        display: inline-block;
        padding-left: 30px;
        margin: 0px 30px 0px 20px;
        font-size: 13px;
      }

      .see-more {
        font-family: 'Montserrat', sans-serif;
        color: #ffffff;
        background-color: #FFCE65;
        border: none;
        border-radius: 6px;
        padding: 5px;
        padding-top: 2.5px;
        cursor: pointer;
      }

      .see-more:hover {
        background-color: #FFB30F;
      }
  
      #fullname {
        /* position: absolute; */
        width: 162px;
        height: 22px;
        left: 464px;
        top: 198px;
        font-family: 'Montserrat', sans-serif;
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 22px;
        /* identical to box height */
        color: #FFB71E;
      }
  
      div .job {
        display: block;
        margin-top: 15px;
        font-style: normal;
        font-weight: bold;
        color:black;    
        text-shadow: 1px 0 black;
        letter-spacing:1px;
      }
  
      div .my-request-content {
        position: absolute;
        /* display: block; */
        margin-top: 10px;
        margin-left: 20px;
        font-style: normal;
        color:black;    
        /* text-shadow: 1px 0 black; */
        letter-spacing:1px;
      }
  
                  #nature_of_leave label {
                      margin-left: 60px;
                  }
  
                  #button input {
                      color: #fff;
                      background-color: #FFCE65;
                      border: none;
                      border-radius: 10px;
                      padding: 10px;
                      font-weight: bold;
                      font-family: 'Montserrat', sans-serif;
                  }
  
                  #status {
                      /* position: absolute; */
                      width: 69px;
                      height: 30px;
                      margin-left: -170px;
                      margin-top: -50px;
  
                      background: #FFCE65;
                      border-radius: 10px;
                  }
  
                  table {
                      margin-top: 10px;
                  }
  
                  table, th, td {
                      width: 100%;
                      padding-left: 20px;
                      padding-bottom: 20px;
                      /* border: 1px solid black; */
                      border-collapse: collapse;
                  }
  
                  tr:nth-child(odd) {
                      background-color: white;
                  }
  
                  td img {
                      margin-top: 12px;
                      margin-bottom: -12px;
                  }
  
          #pending-request {
              /* position: absolute; */
                  width: 269px;
                  height: 37px;
                  margin-left: 50px;
                  top: 136px;
  
                  font-family: 'Montserrat', sans-serif;
                  font-style: normal;
                  font-weight: 600;
                  font-size: 20px;
                  line-height: 37px;
                  /* identical to box height */
  
  
                  color: #000000;
  
                  }
  
                  .dot {
          height: 10px;
          width: 10px;
          background-color: #E64C4A;
          border-radius: 50%;
          display: inline-block;
          margin-left: 10px;
          }
    </style>
    <title>Hive: File of Leave: Form</title>
  </head>
  <body>
    <div class="side-nav">
      <a href="/admin/home">
        <img id="logo" src="/images/Logoo-01.png" alt="Logo">
      </a>
      <ul class="nav">
        <li>
          <a href="/admin/home">
            <button class="btn">
              <i class="icon">
                <img src="/images/Home-01.png" alt="Home">
              </i>
              <span>
                Home
              </span>
            </button>
          </a>
        </li>
        <li>
          <a href="/admin/dashboard">
            <button class="btn">
              <i id="dashboard" class="icon">
                <img src="/images/dashboard2-01.png" alt="Home">
              </i>
              <span>
                Dashboard
              </span>
            </button>
          </a>
        </li>
        <li>
          <a href="/admin/applicants/jobs">
            <button class="btn">
              <i class="icon">
                <img src="/images/Applicant-01.png" alt="Home">
              </i>
              <span>
                Applicants
              </span>
            </button>
          </a>
        </li>
        <li>
          <a href="/admin/employees">
            <button class="btn">
              <i class="icon">
                <img src="/images/Employee-01.png" alt="Employees">
              </i>
              <span>
                Employees
              </span>
            </button>
          </a>
        </li>
        <li>
          <a href="/admin/file-of-leave">
            <button class="btn active">
              <i class="icon">
                <img src="/images/Leave-01.png" alt="Home">
              </i>
              <span>
                File of Leave
              </span>
            </button>
          </a>
        </li>
        <li>
          <a href="/admin/coe-requests">
            <button class="btn">
              <i id="coe" class="icon">
                <img src="/images/COE-01.png" alt="Home">
              </i>
              <span>
                COE Requests
              </span>
            </button>
          </a>
        </li>
        <br><br>
        <hr>
        <br><br>
        <li>
          <a href="/dashboard">
            <button class="btn">
              <i id="dashboard" class="icon">
                <img src="/images/dashboard2-01.png" alt="Hive">
              </i>
              <span>
                Employees' View
              </span>
            </button>
          </a>
        </li>
        <li>
          <a href="/logout-admin">
            <button class="btn">
              <i id="logout" class="icon">
                <img src="/images/admin-logout.png" alt="Home">
              </i>
              <span>
                Logout
              </span>
            </button>
          </a>
        </li>
      </ul>
    </div>
    <div class="main">
      <div class="applicant-nav">
        <ul>
          <li>
            <h1>
              File of Leave
            </h1>
          </li>
        </ul>
        <div class="account-dropdown">
          <a href="#">
            <i class="icon">
              <img src="/images/notif-icon.png">
            </i>
            <span id="email">
              {{session('email')}}
            </span>
            <div class="hex center">
              <div class="hex__shape">
                <div class="hex__shape">
                  <div class="hex__shape">
                    <img src="/images/Akoko 1.png" alt="Profile">
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <hr>
      </div>
      <h4 id="pending-request">
        Pending Request
      </h4>
      <div class="job-container">
        <div class="my-request">
          @foreach($requests as $request)
            <table>
              <tr>
                <td>
                  <img src="/images/Akoko 1.png" alt="Profile">
                  <span class="my-request-content">
                    <span id="fullname">
                      {{ $request['fullname'] }}
                    </span><br>
                    {{ $request['updated_at'] }}<br>
                    @if($request['days'] > 1)
                      {{ $request['days'] }} Days
                      @else
                      {{ $request['days'] }} Day
                    @endif
                    <span class="dot"></span>
                    {{ $request['natures_of_leave'] }}
                  </span><br><br>
                  <button class="see-more" type="button" onclick="document.getElementById('demo').style.display='block'">see more</button>
                </td>
              </tr>
            </table>
          @endforeach
        </div>
      </div>
      <div id="demo" class="fol-comp-info-container" style="display:none">
        <div class="comp-info">
          @foreach($requests as $request)
            <table>
              <tr>
                <td>
                  <img src="/images/Akoko 1.png" alt="Profile">
                  <span class="my-request-content">
                    <span id="fullname">
                      {{ $request['fullname'] }}
                    </span><br>
                    {{ $request['updated_at'] }}<br>
                    @if($request['days'] > 1)
                      {{ $request['days'] }} Days
                      @else
                      {{ $request['days'] }} Day
                    @endif
                    <span class="dot"></span>
                    {{ $request['natures_of_leave'] }}
                  </span><br><br>
                  <button class="see-more" type="button" onclick="document.getElementById('demo').style.display='none'">hide</button>
                </td>
              </tr>
            </table>
          @endforeach
        </div>
      </div>
    </div>
  </body>
</html>