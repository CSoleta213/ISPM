<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/favicon-01-01.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
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
        .account-dropdown {
            box-sizing: border-box;
            float: right;
            padding-top: 20px;
            padding-right: 20px;
            align-items: center;
        }
        .account-dropdown a {
            color: #492726;
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

        .hex {
            position: absolute;
        max-width: 100%;
        width: 55.03px;
        /* height: 55.03px; */
        left: 1280.97px;
        top: 9px;
        }
        .hex:before {
        content: '';
        display: block;
        padding-bottom: 115%;
        }
        .hex img {
        left: 50%;
        position: relative;
        top: 50%;
        transform: translate(-50%,-50%);
        width: 115%;
        }
        .hex__shape {
        position: absolute;
        backface-visibility: hidden;
        left: 0;
        height: 100%;
        overflow: hidden;
        top: 0;
        transform: rotate(240deg);
        width: 100%;
        }

        #email {
            margin-right: 80px;
        }
    </style>
    <title>Hive: Dashboard</title>
</head>
<body>
    <div class="side-nav">
        <a href="/home"><img id="logo" src="/images/Logoo-01.png" alt="Logo"></a>
        
        <table class="nav">
            <tr>
            <a href="/home">
                <td>
                    <a href="/home">
                            <i class="icon"><img src="/images/Home-01.png" alt="Home"></i>
                    </a>
                </td>
                <td>
                    <a href="/home">
                            <span>Home</span>
                    </a>
                </td>
                </a>
            </tr>
            <tr>
                <a href="/dashboard">
                    <button class="btn active">
                        <td><i id="dashboard" class="icon"><img src="/images/dashboard2-01.png" alt="Home"></i></td>
                        <td><span>Dashboard</span></td>
                    </button>
                </a>
            </tr>
            <tr>    
                <a href="#">
                    <button class="btn">
                        <td><i id="coe" class="icon"><img src="/images/COE-01.png" alt="Home"></i></td>
                        <td><span>COE</span></td>
                    </button>
                </a>
            <tr>    
                <a href="/file-of-leave/request-form">
                    <button class="btn">
                        <td><i class="icon"><img src="/images/Leave-01.png" alt="Home"></i></td>
                        <td><span>File of Leave</span></td>
                    </button>
                </a>
        </table>
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
        <h1>Dashboard</h1>
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