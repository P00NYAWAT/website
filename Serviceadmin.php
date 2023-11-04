<html lang="th"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title>Team Administrator </title>

        <!-- Favicons -->
        <link rel="icon" type="image/x-icon" href="image/os.png">

        <link rel="manifest" href="/manifest.json?v=1">
        <link rel="apple-touch-icon" href="/images/icons/Icon-152.png">
        <link rel="apple-touch-icon" sizes="152x152" href="image/os.png">
        <link rel="apple-touch-icon" sizes="180x180" href="image/os.png">
        <link rel="apple-touch-icon" sizes="167x167" href="image/os.png">
        <meta name="apple-mobile-web-app-title" content="iService">

        <link href="https://fonts.googleapis.com/css?family=Kanit:300,400,500|Google+Sans:400,500|Noto+Sans:400,400i&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/notosansthaiui.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" >
        <link rel="stylesheet" type="text/css" href="/components/animate.css/animate.min.css">
        
        
        <link rel="stylesheet" type="text/css" href="/components/sweetalert2/dist/sweetalert2.min.css">

        <!-- Bootstrap core CSS -->
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                font-family: 'Kanit', sans-serif;
                color: rgba(0, 0, 0, 0.7);
                padding: 0;
                margin: 0;
                font-size: 14px;
            }

            .font-kanit {
                font-family: 'Kanit', sans-serif;
            }

            .container {
                height: 100vh;
                background-image: url('image/Photo-home.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }

            .modal {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 60px;
                background: rgba(6, 12, 34, 0.5);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                transition: 0.4s;
            }
            .modal-container {
                display: flex;
                max-width: 720px;
                width: 100%;
                border-radius: 10px;
                overflow: hidden;
                position: absolute;
                opacity: 0;
                pointer-events: none;
                transition-duration: 0.3s;
                background: #fff;
                -webkit-transform: translateY(100px) scale(0.4);
                transform: translateY(100px) scale(0.4);
            }
            .modal-title {
                font-size: 26px;
                margin: 0;
                font-weight: 400;
                color: #55311c;
            }
            .modal-desc {
                font-size: 1rem;
                margin: 6px 0 30px 0;
                line-height: 1.5;
            }
            .modal-left {
                padding: 30px 30px 20px;
                background: #f4f4f4;
                flex: 1.5;
                transition-duration: 0.5s;
                -webkit-transform: translateY(80px);
                transform: translateY(80px);
                opacity: 0;
            }
            .modal-button {
                color: rgba(0, 0, 0, 0.6);
                font-family: 'Kanit', sans-serif;
                font-size: 18px;
                cursor: pointer;
                border: 0;
                outline: 0;
                padding: 10px 40px;
                border-radius: 30px;
                background: white;
                box-shadow: 0 10px 40px rgba(0, 0, 0, 0.16);
                transition: 0.3s;
            }
            .modal-button:hover {
                border-color: rgba(255, 255, 255, 0.2);
                background: rgba(255, 255, 255, 0.8);
            }
            .modal-right {
                flex: 1.6;
                font-size: 0;
                transition: 0.3s;
                overflow: hidden;
            }
            .modal-right img.bg {
                width: 100%;
                height: 100%;
                -webkit-transform: scale(2);
                transform: scale(2);
                -o-object-fit: cover;
                object-fit: cover;
                transition-duration: 1.2s;
            }
            .modal.is-open {
                height: 100%;
                background: rgba(6, 12, 34, 0.55);
            }
            .modal.is-open .modal-button {
                opacity: 0;
            }
            .modal.is-open .modal-container {
                opacity: 1;
                transition-duration: 0.6s;
                pointer-events: auto;
                -webkit-transform: translateY(0) scale(1);
                transform: translateY(0) scale(1);
            }
            .modal.is-open .modal-right img.bg {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            .modal.is-open .modal-left {
                -webkit-transform: translateY(0);
                transform: translateY(0);
                opacity: 1;
                transition-delay: 0.1s;
            }
            .modal-buttons {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .modal-buttons a {
                color: rgba(51, 51, 51, 0.6);
                font-size: 14px;
            }

            .contact {
                margin: 40px 0 0;
                font-size: 14px;
                text-align: center;
            }
            .contact a {
                color: #8c7569;
            }

            .input-button {
                min-width: 37px;
                padding: 10px 15px;
                outline: none;
                border: 0;
                color: #fff;
                border-radius: 4px;
                background: #673AB7;
                transition: 0.3s;
                cursor: pointer;
                font-family: 'Kanit', sans-serif;
                font-size: 0.95rem;
                line-height: 1;
            }
            .input-button:not([disabled]):not([type="submit"]):hover {
                background: #512DA8;
            }

            .input-button:disabled{
                opacity: 0.8;
            }

            .input-label {
                font-size: 11px;
                text-transform: uppercase;
                font-weight: 500;
                letter-spacing: 0.7px;
                color: rgba(0,0,0,0.6);
                transition: 0.3s;
            }

            .input-block {
                display: flex;
                flex-direction: column;
                padding: 10px 10px 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
                margin-bottom: 20px;
                transition: 0.3s;
                background: #fff;
            }
            .input-block input {
                outline: 0;
                border: 0;
                padding: 4px 0 0;
                font-size: 14px;
            }
            .input-block input::-webkit-input-placeholder {
                color: #ccc;
                opacity: 1;
            }
            .input-block input:-ms-input-placeholder {
                color: #ccc;
                opacity: 1;
            }
            .input-block input::-ms-input-placeholder {
                color: #ccc;
                opacity: 1;
            }
            .input-block input::placeholder {
                color: #ccc;
                opacity: 1;
            }
            .input-block:focus-within {
                border-color: #7E57C2;
            }
            .input-block:focus-within .input-label {
                color: #7E57C2;
            }

            .icon-button {
                outline: 0;
                position: absolute;
                right: 10px;
                top: 12px;
                width: 32px;
                height: 32px;
                border: 0;
                padding: 0;
                cursor: pointer;
                background: rgba(250,250,250,0.8);
                border-radius: 50%;
            }

            .scroll-down {
                position: fixed;
                top: 50%;
                left: 50%;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                color: #7d695e;
                font-size: 32px;
                font-weight: 800;
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }
            .scroll-down svg {
                margin-top: 16px;
                width: 52px;
                fill: currentColor;
            }

            @media (max-width: 750px) {
                .icon-button {
                    background: none;
                }

                .modal-container {
                    width: 90%;
                }

                .modal-right {
                    display: none;
                }
            }

            .checkbox input {
                margin-right: 10px;
            }

            .slogan {
                position: absolute;
                right: 11px;
                top: 20px;
                width: 355px;
                background: rgba(250,250,250,0.4);
                color: #E6332A;
                font-size: 1.5rem;
                text-align: center;
                padding: 10px 10px 2px 10px;
                border-radius: 5px;
            }

            .slogan .logo {
                height: 70px;
            }

            .announce {
                position: absolute;
                right: 11px;
                bottom: 10px;
                width: 318px;
                background: #213A8F;
                color: #fff;
                font-size: 0.95rem;
                text-align: center;
                padding: 10px;
                border-radius: 5px;
                line-height: 1.5rem;
            }

            .noty_theme__metroui.noty_type__error {
                border-radius: 4px;
            }

            .swal2-title,
            .swal2-confirm {
                font-family: 'Kanit', sans-serif;
                font-size: 0.98rem;
                font-weight: 400;
            }
        </style>
    </head>

    <body style="overflow: hidden;">
        <div class="container"></div>
        <div class="modal is-open">
            <div class="modal-container">
                <div class="modal-left">
                    <div style="text-align: center">
                        <img src="image/icon.png" height="110" style="margin-bottom: 10px;">
                        <h1 class="modal-title">PYW Studio</h1>
                        <p class="modal-desc">Team Administrator</p>
                    </div>
                    <div class="input-block animate__animated">
                        <label for="alumni_login_username" class="input-label">Username</label>
                        <input type="text" id="alumni_login_username" name="alumni_login_username" autocomplete="off" placeholder="Username" autofocus="" value="">
                    </div>
                    <div class="input-block animate__animated">
                        <label for="alumni_login_password" class="input-label">Password</label>
                        <input type="password" id="alumni_login_password" name="alumni_login_password" autocomplete="off" placeholder="Password" value="">
                    </div>
                    <form id="form-login" method="post" onsubmit="return false;">
                        <input type="hidden" name="b01sc05qWHMwVSttaUZjdXVLTHpmUT09" value="a2FFbFlLaGVsZDIzTUVCYzJhbkZpZz09" id="iservice_login_token">
                        <div class="modal-buttons">
                            <button id="btn-login-alumni" type="button" class="input-button">Login</button>
                        </div>
                    </form>
                    <p class="contact">พบปัญหา E-mail : PYWSTUDIO@126.com <br>แผนกการจัดการระบบสารสนเทศ</p>
                </div>
                <div class="modal-right">
                    <img src="image/Photo-login.jpg" class="bg">
            
                </div>
                <button class="icon-button close-button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <path d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L 32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z"></path>
                    </svg>
                </button>
            </div>
            <button class="modal-button">เข้าสู่ระบบ</button>
        </div>

        <!-- jQuery -->
        <script src="/components/jquery/dist/jquery.min.js"></script>

        <!-- Base64 -->
        <script src="/components/js-base64/base64.min.js"></script>

        <!-- jQuery Form -->
        <script src="/components/jquery-form/dist/jquery.form.min.js"></script>

        

        <!-- Sweetalert2 -->
        <script src="/components/sweetalert2/dist/sweetalert2.min.js"></script>

        <script>
            var base_url = "/";
            var module_url = "/alumni";

            const body = document.querySelector("body");
            const modal = document.querySelector(".modal");
            const modalButton = document.querySelector(".modal-button");
            const closeButton = document.querySelector(".close-button");
            let isOpened = false;

            const openModal = () => {
                modal.classList.add("is-open");
                body.style.overflow = "hidden";
            };

            const closeModal = () => {
                modal.classList.remove("is-open");
                body.style.overflow = "initial";
            };

            modalButton.addEventListener("click", openModal);
            closeButton.addEventListener("click", closeModal);

            document.onkeydown = evt => {
                evt = evt || window.event;
                evt.keyCode === 27 ? closeModal() : false;
            };

            openModal();
        </script>

        <script src="/js/login-alumni.js?v=2"></script>
    

</body></html>