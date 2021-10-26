<!DOCTYPE html>
<html>
  <head>
    <title>Hive</title>
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
        background-image: url('images/Homepagee.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        font-family: 'Montserrat', sans-serif;
      }

      .side-nav {
        background: #FFF5E1;
      }

      .side-nav .active, .btn:hover {
            background-color: #FFCE65;
            color: white;
        }

        .btn {
            background-color: #FFF5E1;
            color:black;    
            text-shadow: 1px 0 black;
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

        div.applicant-nav {
            margin-top: 20px;
        }
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
            padding: 20px;
        }
        div .job-container .cs-waiter {
            box-sizing: border-box;
            width: 200px;
            height: 280px;
            background-color: white;
            display: inline-block;
            padding: 20px;
            margin: 30px 15px 30px 30px;
            text-align: center;
            font-size: 13px;
        }
        div .job-container .t-data-sci {
            box-sizing: border-box;
            width: 200px;
            height: 280px;
            background-color: white;
            display: inline-block;
            padding: 20px;
            margin: 30px 15px 30px 30px;
            text-align: center;
            font-size: 13px;
        }
        div .job-container .ad-ux-des {
            box-sizing: border-box;
            width: 200px;
            height: 280px;
            background-color: white;
            display: inline-block;
            padding: 20px;
            margin: 30px 15px 30px 30px;
            text-align: center;
            font-size: 13px;
        }
        div .job-container .t-soft-dev {
            box-sizing: border-box;
            width: 200px;
            height: 280px;
            background-color: white;
            display: inline-block;
            padding: 20px;
            margin: 30px 15px 30px 30px;
            text-align: center;
            font-size: 13px;
        }
        div .job-container img {
            width: 120px;
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
    </style>
  </head>
  <body>
    <div class="side-nav">
        <a href="/home"><img id="logo" src="/images/Logoo-01.png" alt="Logo"></a>
        <ul class="nav">
            <li>
                <a href="/home">
                    <button class="btn active">
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
                    <button class="btn">
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
      <h1>Home</h1>
        <div class="account-dropdown">
            <a href="#">
              <i class="icon"><img src="/images/notif-icon.png"></i>
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
    </div>
  </body>
</html>
