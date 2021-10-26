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
        margin-left: 20px;
      }
      /* Requests Container */
      div .requests-container .my-request {
        box-sizing: border-box;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 1px 3px 0 rgba(0, 0, 0, 0.19);
        border-radius: 25px;
        background-color: white;
        display: inline-block;
        padding: 10px;
        margin: 10px 30px 0px 30px;
        text-align: center;
        font-size: 13px;
        height: 100%;
      }
      div .my-request-content {
        display: block;
        margin-top: 15px;
        font-style: normal;
        color:black;    
        text-shadow: 1px 0 black;
        letter-spacing:1px;
      }
      table {
        margin: 30px;
      }
      table, th, td {
        padding: 10px;
        border: 1px solid black;
        border-collapse: collapse;
      }
      tr:nth-child(odd) {
        background-color: #dddddd;
      }
    </style>
    <title>Hive: File of Leave: My Request</title>
  </head>
  <body>
    <div class="side-nav">
        <a href="/home"><img id="logo" src="/images/Logoo-01.png" alt="Logo"></a>
        <ul class="nav">
            <li>
                <a href="/home">
                    <button class="btn">
                        <i class="icon"><img src="/images/Home-01.png" alt="Home"></i>
                        <span>Home</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/dashboard">
                    <button class="btn">
                        <i id="dashboard" class="icon"><img src="/images/dashboard2-01.png" alt="Home"></i>
                        <span>Dashboard</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/file-leave-of-absence/request-form">
                    <button class="btn active">
                        <i class="icon"><img src="/images/Leave-01.png" alt="Home"></i>
                        <span>File Leave of Absence</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/request-a-coe">
                    <button class="btn">
                        <i id="coe" class="icon"><img src="/images/COE-01.png" alt="Home"></i>
                        <span>Request a COE</span>
                    </button>
                </a>
            </li>
            <br><br>
            <hr>
            <br><br>
            <li>
                <a href="/login-as-admin">
                    <button class="btn">
                        <i id="login" class="icon"><img src="/images/admin-login.png" alt="Home"></i>
                        <span>Login as admin</span>
                    </button>
                </a>
            </li>
            <li>
                <a href="/logout">
                    <button class="btn">
                        <i id="logout" class="icon"><img src="/images/admin-logout.png" alt="Home"></i>
                        <span>Logout</span>
                    </button>
                </a>
            </li>
        </ul>
    </div>

    <div class="main">
      <h1>File Leave of Absence</h1>
      <div class="account-dropdown">
        <a href="#">
          <i class="icon">
            <img src="/images/notif-icon.png">
          </i>
          <span id="email">{{session('email')}}</span>
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
      <div class="applicant-nav">
        <ul>
          <li>
            <a href="/file-leave-of-absence/request-form">
              <button class="btn">
                <span>Form</span>
              </button>
            </a>
          </li>
          <li>
            <a href="/file-leave-of-absence/my-request">
              <button class="btn active">
                <span>My Request</span>
              </button>
            </a>
          </li>
        </ul>
      </div>
      <div class="requests-container">
        <div class="my-request">
          <span class="my-request-content">
            <p class="confirmation">{{ session('confirmation') }}</p>
            <table>
              <tr>
                <th>ID</th>
                <th>Code Name</th>
                <th>Request for</th>
                <th>Nature of Leave</th>
                <th>From</th>
                <th>To</th>
                <th>Number of Days</th>
                <th>Date of Request</th>
              </tr>
              @foreach($requests as $fol)
                <tr>
                  <td>{{ $fol['id'] }}</td>
                  <td>{{ $fol['code_name'] }}</td>
                  <td>{{ $fol['requestFor'] }}</td>
                  <td>{{ $fol['natures_of_leave'] }}</td>
                  <td>{{ $fol['periodFrom'] }}</td>
                  <td>{{ $fol['periodTo'] }}</td>
                  <td>{{ $fol['days'] }}</td>
                  <td>{{ $fol['updated_at'] }}</td>
                </tr>
              @endforeach
            </table>
          </span>
        </div>
      </div>
    </div>
  </body>
</html>