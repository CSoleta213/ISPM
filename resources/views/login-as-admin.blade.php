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
            box-sizing: border-box;
            background-color: #FFF5E1;
            /* color: #EA6E6E; */
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

/* humble-01 1 */
#caption {
        position: absolute;
        width: 545px;
        height: 263.63px;
        left: 300px;
        top: 200px;
      }

      #hive {
        position: absolute;
        width: 140px;
        height: 215px;
        left: 326px;
        top: 50px;

        background: url(Hive-01.png);
        transform: matrix(-1, 0, 0, 1, 0, 0);
      }

      #bee {
        position: absolute;
        width: 40px;
        height: 40px;
        left: 90px;
        top: 240px;

        background: url(bee-01.png);
        transform: rotate(-134.28deg);
      }

      form {
        position: absolute;
        width: 465px;
        height: 625px;
        left: 900px;
        top: 0px;
        background: #FFCE64;
        
        text-align: center;
        z-index: -1;
      }

      .line1 {
        width: 50px;
        height: 20px;
        z-index: -1;
        background: transparent;
        border: none;
        border-top: dashed 2px #492727;
        border-radius: 50%;
        margin-top: 200px;
        margin-left: 290px;
        transform: rotate(-84.28deg);
      }

      .line2 {
        width: 60px;
        height: 30px;
        z-index: -1;
        background: transparent;
        border: none;
        border-bottom: dashed 2px #492727;
        border-radius: 0 0 50% 50%;
        margin-top: 0px;
        margin-left: 265px;
        transform: rotate(-200deg);
      }

      .line3 {
        width: 135px;
        height: 70px;
        z-index: -1;
        background: transparent;
        border: none;
        border-bottom: dashed 2px #492727;
        border-radius: 0 0 35% 50%;
        margin-top: -52px;
        margin-left: 129.5px;

        transform: rotate(-5deg);
      }

      .line4 {
        width: 50px;
        height:25px;
        z-index: -1;
        background: transparent;
        border: none;
        border-bottom: dashed 2px #492727;
        border-radius: 0 0 50% 50%;
        margin-top: -40px;
        margin-left: 80px;
        transform: rotate(-180deg);
      }

      form label, input {
        height: 16px;

        font-family: 'Montserrat', sans-serif;
        font-style: normal;
        font-weight: 300;
        font-size: 15px;
        line-height: 14px;

        color: #000000;

        margin-top: 0;
      }

      form h4 {
          margin-top: -120px;
          text-align: left;
          margin-left: 40px;
          margin-bottom: 20px;
          font-family: Dela Gothic One;
      }

      form div {
        font-size: 15px;
        line-height: 20px;
        color: #000000;

        margin-top: 80px;
        margin-left: 50px;
        text-align: left;
      }

      form input {
        width: 350px;
        height: 45px;

        border: none;
        padding-left: 20px;
        border-radius: 10px;
      }

      form div label a {
        color: #3F8CFF;

        margin-left: 165px;
      }

      form a {
        text-decoration: none;
      }
    </style>
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
                    <button class="btn active">
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
    <h1>Login as admin</h1>
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
    <img id="caption" src="/images/humble-01.png" alt="Caption">
    <!-- <img id="pulot" src="/images/Pulot-01.png" alt=""> -->
    <form action="/loginme-as-admin" method="post">
      @csrf
      <div class="cropped">
        <img id="hive" src="/images/Hive-01_Cutted.png" alt="Hive">
      </div>
      <div id="wrapper">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
        <div class="line4"></div>
      </div>
      <!-- <h2>LOGIN</h2> -->
      <h4>Please login your admin account!</h4><br>
      <img id="bee" src="/images/bee-01.png" alt="Bee">
      <div>
        <label for="email" style="color: #000000;">Email</label><br>
        <input type="email" name="email" required><br><br>
        <label for="password" style="color: #000000;">Password <a href='/login/forgot'>Forgot password?</a></label><br>
        <input type="password" name="password" required><br><br><br>
        <input type="submit" value="Sign in" style="font-family: Dela Gothic One; font-size: 25px; color: #FFFFFF; background-color: #FFB30F; border: none; cursor: pointer;">
      </div>
      <br><br>
      <p class="warning">{{ session('warning') }}</p>
    </form>
    <div id="messenger">
      <a href="https://m.me/104273485117574?ref=Flow"><i class="fab fa-facebook-messenger" target="_blank"></i></a>
    </div>
  </body>
</html>
