<style>
        @media (min-width: 576px) and (max-width: 767px) {
            .col-sm-4 {
                max-width: 100%;
                flex: auto;
            }
            .authfy-panel-left,
            .authfy-panel-right {
                float: left;
            }
        }

        @media (min-width: 320px) and (max-width: 375px) {
            body {
                background-size: cover;
            }
        }

        body,
        html {
            background-color: #f0f2f5;
            /* background-image: url("https://1.bp.blogspot.com/-fd1WXKk-TAc/XyqfngP4PiI/AAAAAAAAVMw/umQz3tkxtg43uPIy8W5og6gAkpCfjaTvACLcBGAsYHQ/w1563-h1563/bg-snell.png"); */
            background-repeat: no-repeat;
            background-color: #fff;
            background-size: cover;
            background-position: 100%;
            height: 100vh;
            text-rendering: optimizeLegibility;
        }

        .dust-paarticle {
            position: absolute;
            width: 100%;
        }

        #snell {
            position: absolute;
            top: 0;
            width: 100%;
        }

        #eye1 {
            animation: swing ease-in-out .6s infinite alternate;
            transform-origin: bottom;
            transform-box: fill-box;
            left: calc(52% - .0rem);
        }

        #eye2 {
            animation: swing ease-in-out .5s infinite alternate;
            transform-origin: bottom;
            transform-box: fill-box;
            left: calc(40% - .0rem);
        }

        #dust-paarticle path {
            transform-box: fill-box;
            transform-origin: center;
        }
        /*************swing************/

        @keyframes swing {
            0% {
                transform: rotate(8deg);
            }
            100% {
                transform: rotate(-8deg);
            }
        }

        .position-set {
            position: absolute;
            top: 5%;
        }
        /*--------------------*/
        /* 02. Common CSS */
        /*--------------------*/

        body {
            font-size: 14px;
            font-weight: 400;
            color: #44525f;
        }

        ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        a {
            text-decoration: none;
            color: #2d385e;
        }

        a:focus {
            outline: none;
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Titillium Web', sans-serif;
            color: #2d385e;
        }

        a,
        a:hover,
        a:focus {
            color: #4f77ff;
        }

        .btn-primary {
            background-color: #4f77ff;
            border-color: #4f77ff;
        }

        .btn-primary:hover,
        .btn-primary:active:hover,
        .btn-primary:focus,
        .btn-primary:active:focus,
        .btn-primary:active,
        .btn-primary.active {
            background-color: #486ff2;
            border-color: #486ff2;
        }

        .authfy-login .btn.btn-lg {
            border-radius: 3px;
            box-shadow: 0px 2px 3px #9c9c9c;
        }

        .brand-logo {
            margin-top: -100px;
            margin-bottom: 35px;
            font-size: 28px;
            font-weight: 500;
            text-align: center;
        }
        /*--------------------*/
        /* 03. Section Panel UI CSS */
        /*--------------------*/

        .authfy-container {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .authfy-panel-left {
            background-color: #ff523b;
            color: #ffffff;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
            -webkit-box-shadow: 0px 3px 6px #1d2030;
            box-shadow: 0px 3px 6px #1d2030;
        }

        .authfy-panel-right {
            background-color: #ffffff;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            -webkit-box-shadow: 0px 2px 6px 0px #1d2030;
            box-shadow: 0px 2px 6px 0px #1d2030;
        }

        .authfy-login,
        .authfy-panel-left .brand-col {
            height: 460px;
        }

        .authfy-panel-left .brand-col {
            display: table;
            width: 100%;
            /* padding: 25px; */
            text-align: center;
        }

        .authfy-panel-left .brand-col .headline {
            display: table-cell;
            vertical-align: middle;
        }

        .authfy-panel-left .brand-col .headline h1,
        .authfy-panel-left .brand-col .headline h2,
        .authfy-panel-left .brand-col .headline h3 {
            color: #fff;
            font-size: 48px;
            font-weight: 700;
        }

        .authfy-login {
            position: relative;
            top: 0;
            left: 0;
            overflow: hidden;
        }

        .authfy-panel {
            padding: 20px 30px;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition: all .5s ease;
            opacity: 0;
            transform: translateX(-100%);
            -webkit-transform: translateX(-100%);
        }

        .authfy-panel .authfy-heading {
            margin-bottom: 30px;
        }

        .authfy-login .auth-title {
            font-weight: 700;
        }

        .authfy-login .authfy-panel.active {
            opacity: 1;
            transform: translateX(0);
            -webkit-transform: translateX(0);
        }

        .brand-col .social-buttons a {
            color: #ffffff;
            margin-top: 15px;
        }

        .brand-col .social-buttons a:hover {
            color: white;
            opacity: 0.9;
        }

        .brand-col .social-buttons .btn-facebook {
            background: #3b5998;
        }

        .brand-col .social-buttons .btn-twitter {
            background: #00aced;
        }

        .brand-col .social-buttons .btn-google {
            background: #c32f10;
        }

        .brand-col .social-buttons a>span {
            /* padding-left: 5px; */
            padding-right: 5px;
        }

        .panel-login {
            margin-top: 20px;
        }

        .panel-login .remember-row {
            margin-bottom: 10px;
        }

        .panel-login .remember-row label {
            font-weight: normal;
            position: relative;
            cursor: pointer;
            color: #666;
            padding-left: 24px;
        }

        .authfy-login .forgotPwd {
            text-align: right;
            margin-top: 10px;
        }

        .panel-login .form-control,
        .panel-signup .form-control,
        .panel-forgot .form-control {
            background-color: #fff;
            color: #333333;
            font-size: 18px;
            height: 50px;
            margin-bottom: 20px;
            padding: 12px 22px;
            border-radius: 3px;
            border: solid 1px #bcc2ce;
            outline: none;
            -webkit-box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.1), 0 0 2px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.1), 0 0 2px 0 rgba(0, 0, 0, 0.1);
        }

        .authfy-panel.panel-forgot {
            padding-top: 40px;
        }

        .panel-login .form-control:focus,
        .panel-signup .form-control:focus,
        .panel-forgot .form-control:focus {
            border-color: #4f77ff;
            z-index: 2;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
        }

        .pwdMask {
            position: relative;
        }

        .pwdMask .pwd-toggle {
            color: #cccccc;
            position: absolute;
            z-index: 2;
        }

        .panel-login .pwdMask .pwd-toggle,
        .panel-signup .pwdMask .pwd-toggle {
            top: 15px;
            right: 15px;
        }

        .pwdMask .pwd-toggle:hover,
        .pwdMask .pwd-toggle:focus {
            cursor: pointer;
        }

        .pwdMask .pwd-toggle:hover,
        .pwdMask .pwd-toggle:focus,
        .pwdMask .pwd-toggle.fa-eye {
            color: #4f77ff;
        }

        .panel-signup .term-policy a {
            text-decoration: underline;
        }
        /*--------------------*/
        /* 04. Check box UI CSS */
        /*--------------------*/

        .checkbox input[type="checkbox"] {
            position: absolute;
            right: 9000px;
        }

        .checkbox input[type="checkbox"]+.label-text:before,
        .checkbox input[type="checkbox"]+.label-text:after {
            font-size: 11px;
            display: inline-block;
            width: 17px;
            height: 17px;
            padding: 2px;
            margin-left: 0;
            position: absolute;
            top: 2px;
            left: 0;
        }

        .checkbox input[type="checkbox"]+.label-text:before {
            content: "";
            background-color: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 3px;
            cursor: pointer;
            -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
            transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
        }

        .checkbox input[type="checkbox"]+.label-text:after {
            background-color: #4f77ff;
            color: #ffffff;
            border-radius: 2px;
            border-color: #4f77ff;
            line-height: 1.4;
        }

        .checkbox input[type="checkbox"] {
            opacity: 0;
            z-index: 1;
            cursor: pointer;
        }

        .checkbox input[type="checkbox"]:focus+.label-text:before {
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        .checkbox input[type="checkbox"]:checked+.label-text:after {
            font-family: "FontAwesome";
            content: "\f00c";
        }
        /*--------------------*/
        /* 05. Responsive CSS */
        /*--------------------*/

        @media (min-width: 768px) {
            .authfy-panel {
                padding: 20px;
            }
        }

        @media (max-width: 767px) {
            .authfy-panel-left,
            .authfy-panel-right {
                box-shadow: none;
            }
            .authfy-panel-left {
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
                border-bottom-left-radius: 0px;
                border-bottom-right-radius: 0px;
            }
            .authfy-panel-right {
                border-top-left-radius: 0px;
                border-top-right-radius: 0px;
                border-bottom-left-radius: 4px;
                border-bottom-right-radius: 4px;
            }
            .authfy-panel-left .brand-col {
                height: 300px;
                text-align: center;
            }
            .term-policy {
                font-size: 75%;
            }
        }

        @media (min-width: 320px) and (max-width: 375px) {
            body {
                background-size: cover;
            }
            .authfy-login .authfy-panel {
                padding: 20px;
            }
            .panel-login .remember-row {
                margin-bottom: 10px;
                font-size: 14px;
            }
        }

        @media (max-width: 320px) {
            .authfy-login {
                height: 480px;
            }
            .authfy-heading p {
                font-size: 14px;
            }
            .remember-row .col-sm-6 {
                width: 100%;
            }
            .authfy-login .forgotPwd {
                text-align: left;
                margin-top: 0px;
            }
        }

        @media (min-width: 1200px) {
            .col-lg-offset-3 {
                margin-left: 25%;
            }
            .col-lg-6 {
                width: 50%;
            }
            .col-lg-1,
            .col-lg-10,
            .col-lg-11,
            .col-lg-12,
            .col-lg-2,
            .col-lg-3,
            .col-lg-4,
            .col-lg-5,
            .col-lg-6,
            .col-lg-7,
            .col-lg-8,
            .col-lg-9 {
                float: left;
            }
        }

        @media (min-width: 768px) {
            .col-sm-1,
            .col-sm-10,
            .col-sm-11,
            .col-sm-12,
            .col-sm-2,
            .col-sm-3,
            .col-sm-4,
            .col-sm-5,
            .col-sm-6,
            .col-sm-7,
            .col-sm-8,
            .col-sm-9 {
                float: left;
            }
        }
</style>

<div class="dust-paarticle">

    <svg width="100%" id="dust-paarticle" height="100%" viewBox="0 0 885 455" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M678.1 394.1C679.923 394.1 681.4 392.622 681.4 390.8C681.4 388.977 679.923 387.5 678.1 387.5C676.277 387.5 674.8 388.977 674.8 390.8C674.8 392.622 676.277 394.1 678.1 394.1Z" stroke="#F4CD39" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path opacity="0.46" d="M880.3 342.9C882.123 342.9 883.6 341.423 883.6 339.6C883.6 337.777 882.123 336.3 880.3 336.3C878.477 336.3 877 337.777 877 339.6C877 341.423 878.477 342.9 880.3 342.9Z" stroke="#F4CD39" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path opacity="0.46" d="M282.2 7.69997C284.023 7.69997 285.5 6.2225 285.5 4.39996C285.5 2.57742 284.023 1.09998 282.2 1.09998C280.377 1.09998 278.9 2.57742 278.9 4.39996C278.9 6.2225 280.377 7.69997 282.2 7.69997Z" stroke="#F4CD39" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M598.3 207.8C601.061 207.8 603.3 205.561 603.3 202.8C603.3 200.039 601.061 197.8 598.3 197.8C595.539 197.8 593.3 200.039 593.3 202.8C593.3 205.561 595.539 207.8 598.3 207.8Z" stroke="#FDB130" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M48.7 442.7C50.4121 442.7 51.8 441.312 51.8 439.6C51.8 437.888 50.4121 436.5 48.7 436.5C46.9879 436.5 45.6 437.888 45.6 439.6C45.6 441.312 46.9879 442.7 48.7 442.7Z" stroke="#E03F8D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M489.7 311.7C491.909 311.7 493.7 309.909 493.7 307.7C493.7 305.491 491.909 303.7 489.7 303.7C487.491 303.7 485.7 305.491 485.7 307.7C485.7 309.909 487.491 311.7 489.7 311.7Z" stroke="#1DB7C2" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M373.8 225C375.623 225 377.1 223.523 377.1 221.7C377.1 219.877 375.623 218.4 373.8 218.4C371.977 218.4 370.5 219.877 370.5 221.7C370.5 223.523 371.977 225 373.8 225Z" stroke="#FDB130" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M844.1 453.7C846.309 453.7 848.1 451.909 848.1 449.7C848.1 447.491 846.309 445.7 844.1 445.7C841.891 445.7 840.1 447.491 840.1 449.7C840.1 451.909 841.891 453.7 844.1 453.7Z" stroke="#1DB7C2" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M151 254.6C152.16 254.6 153.1 253.66 153.1 252.5C153.1 251.34 152.16 250.4 151 250.4C149.84 250.4 148.9 251.34 148.9 252.5C148.9 253.66 149.84 254.6 151 254.6Z" stroke="#FDB130" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M3.6 315.9C4.7598 315.9 5.7 314.96 5.7 313.8C5.7 312.64 4.7598 311.7 3.6 311.7C2.4402 311.7 1.5 312.64 1.5 313.8C1.5 314.96 2.4402 315.9 3.6 315.9Z" stroke="#9E3FB7" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M768.2 366.7H775.5" stroke="#9E3FB7" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M771.8 363.1V370.4" stroke="#9E3FB7" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <g opacity="0.6">
    <path opacity="0.6" d="M696.4 40.5H703.8" stroke="#9E3FB7" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path opacity="0.6" d="M700.1 36.8V44.2" stroke="#9E3FB7" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    </g>
    <path d="M630.3 284.1H636" stroke="#E03F8D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M633.2 281.2V286.9" stroke="#E03F8D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M414.9 104.5H420.6" stroke="#E03F8D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M417.8 101.7V107.3" stroke="#E03F8D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M203.7 290.8H211.5" stroke="#E03F8D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M207.6 286.9V294.6" stroke="#E03F8D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M165.9 402.7H176.2" stroke="#1DB7C2" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M171 397.5V407.9" stroke="#1DB7C2" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M252.1 346.8C253.2 345.3 254.8 346.4 255.9 344.9C257 343.4 255.4 342.2 256.5 340.7C257.6 339.2 259.2 340.3 260.3 338.8C261.4 337.3 259.8 336.1 260.9 334.5C262 333 263.6 334.1 264.7 332.6" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <g opacity="0.4">
    <path opacity="0.4" d="M36.3 391.2C35.7 389.4 37.5 388.7 36.9 387C36.3 385.2 34.4 385.9 33.7 384.1C33.1 382.3 34.9 381.6 34.3 379.9C33.7 378.1 31.8 378.8 31.1 377C30.5 375.2 32.3 374.5 31.7 372.8" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    </g>
    <path d="M732.3 292.1C730.6 291.2 731.5 289.5 729.8 288.6C728.1 287.7 727.2 289.5 725.5 288.7C723.8 287.8 724.7 286.1 723 285.2C721.3 284.3 720.4 286.1 718.7 285.3C717 284.4 717.9 282.7 716.2 281.8" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <g opacity="0.53">
    <path opacity="0.53" d="M282.7 439.7C281.5 440.4 280.5 438.7 279.3 439.4C278.1 440.1 279.1 441.8 278 442.5C276.8 443.2 275.8 441.5 274.6 442.2C273.4 442.9 274.4 444.6 273.3 445.3C272.2 446 271.1 444.3 269.9 445" stroke="#1DB7C2" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    </g>
    <path d="M819.6 253.6C821.4 253 822 255 823.8 254.4C825.6 253.8 825 251.9 826.8 251.4C828.6 250.8 829.2 252.8 831 252.2C832.8 251.6 832.2 249.7 834 249.2C835.8 248.7 836.4 250.6 838.2 250" stroke="#9E3FB7" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M487.9 207.4C489.7 206.8 490.3 208.8 492.1 208.2C493.9 207.6 493.3 205.7 495.1 205.2C496.9 204.6 497.5 206.6 499.3 206C501.1 205.4 500.5 203.5 502.3 203C504.1 202.5 504.7 204.4 506.5 203.8" stroke="#9E3FB7" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>

</div>

    <div class="container-fluid">
        <div class="row">
            <div class="authfy-container col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                <div class="col-sm-5 authfy-panel-left">
                    <div class="brand-col">
                    <div class="headline">
                            <div class="brand-logo">
                                VuxPhone
                            </div>
                            <div class="row social-buttons">
                                <img src="https://img.icons8.com/color/512/group.png" alt="" width="130px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 authfy-panel-right">
                    <div class="authfy-login">
                        <div class="authfy-panel panel-login text-center active">
                            <div class="authfy-heading">
                                <h3 class="auth-title">Đặt Lại Mật Khẩu</h3>
                                <p>Bạn đã có tài khoản ? <a class="lnk-toggler" data-panel=".panel-signup" href="index.php?controller=login">Đăng nhập !</a></p>
                                <?php
                                    if (isset($thongbao)) {
                                        echo $thongbao;
                                    }
                                ?>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <form name="loginForm" class="loginForm" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control email" name="passnew" placeholder="Nhập mật khẩu ...">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control email" name="re_passnew" placeholder="Nhập lại mật khẩu ...">
                                        </div>
                                        <div class="form-group">
                                            <p><?php 
                                                if ($success) {
                                                    echo $success;
                                                } elseif ($fail) {
                                                    echo $fail;
                                                }
                                                ?></p>
                                            <button class="btn btn-lg btn-primary btn-block" name="complete">Xác Nhận</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
