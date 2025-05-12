<!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Fri Apr 18 2025 09:24:10 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="67effaf7b7f4ff8926a2a3b1" data-wf-site="67effaf7b7f4ff8926a2a31f" lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta content="Login" property="og:title">
    <meta content="Login" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/t-caps-a6fe814030a93a3dec4ffb2ad601d3dd.webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('https://fonts.googleapis.com') }}" rel="preconnect">
    <link href="{{ asset('https://fonts.gstatic.com') }}" rel="preconnect" crossorigin="anonymous">
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js') }}" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:300,regular,500,600,700,800,900:cyrillic,cyrillic-ext,latin"]  }});</script>
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('images/webclip.png') }}" rel="apple-touch-icon">
</head>
<body class="body">
<div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease-out" data-easing2="ease-in-out" role="banner" class="navbar no-bottom-border w-nav">
    <div class="nav-container">
        <a href="{{ route('welcome') }}" class="nav-logo w-nav-brand"><img loading="lazy" src="{{ asset('images/logo_1.svg') }}" alt="" class="logo"></a>
        <div class="nav-container-col">
            <nav role="navigation" class="nav-menu w-nav-menu">
                <div class="nav-menu-block">
                    <a href="{{ route('ai-capsules') }}" class="nav-link-block mobi-center-aling w-inline-block">
                        <div>AI Capsules</div>
                    </a>
                    <a href="{{ route('request-capsule') }}" class="nav-link-block mobi-center-aling w-inline-block">
                        <div>Request AI Capsule</div>
                    </a>
                    <div class="button-nav-block mobi-v">
                        <a href="{{ route('login') }}" aria-current="page" class="button-login max-width w-inline-block w--current">
                            <div>Log in</div>
                        </a>
                    </div>
                </div>
            </nav>
            <div class="nav-right-col">
                <a href="{{ route('book-demo') }}" class="button-black header w-inline-block">
                    <div>Book a demo</div>
                </a>
                <a href="{{ route('login') }}" aria-current="page" class="button-login header w-inline-block w--current">
                    <div>Log in</div>
                </a>
            </div>
            <div class="language-block"></div>
            <a href="{{ route('book-demo') }}" class="button-black mobi-v w-inline-block">
                <div>Book a demo</div>
            </a>
            <div class="menu-btn w-nav-button">
                <div class="burger-icon">
                    <div data-w-id="40843895-b0b8-0a20-bcee-c3b504781a05" class="line-burger"></div>
                    <div data-w-id="40843895-b0b8-0a20-bcee-c3b504781a06" class="line-burger"></div>
                    <div data-w-id="40843895-b0b8-0a20-bcee-c3b504781a07" class="line-burger"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="hero-section min-height top-aling">
    <div class="container">
        <div data-w-id="78795549-880c-569d-71f1-96f409591285" style="opacity:0" class="login-block">
            <div class="heading-login-block">
                <div class="box-center-aling"><img src="{{ asset('images/logo-mark-2.svg') }}" loading="lazy" alt="" class="logo-mark"></div>
                <div class="text-block center-aling gap-12">
                    <div class="heading-login">Log in to your account</div>
                    <div class="standart-text">Welcome back! Enter your account information</div>
                </div>
            </div>
            <div class="form-login-wrapper w-form">
{{--                <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form-block" data-wf-page-id="67effaf7b7f4ff8926a2a3b1" data-wf-element-id="a2ab6eb9-5264-82c6-6692-e8862d162daa">--}}
{{--                    <div class="rows-form-block">--}}
{{--                        <div class="flex-vertical gap-6"><label for="Email-login" class="input-text">Email</label><input class="text-field w-input" maxlength="256" name="Email-login" data-name="Email-login" placeholder="Enter your e-mail" type="email" id="Email-login" required=""></div>--}}
{{--                        <div class="flex-vertical gap-6"><label for="password" class="input-text">Password</label><input class="text-field w-input" maxlength="256" name="password" data-name="password" placeholder="••••••••" type="password" id="password" required=""></div>--}}
{{--                        <div class="small-text gray-color center-aling">--}}
{{--                            <a href="#" class="forget-password-link">Forgot your password?</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="action-block"><input type="submit" data-wait="Please wait..." class="form-button w-button" value="Log in">--}}
{{--                        <div class="small-text gray-color center-aling">Read the <a href="{{ route('privacy-policy') }}" class="small-link">Privacy Policy</a> and <a href="{{ route('user-agreement') }}" class="small-link">Terms of Service</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--                <div class="w-form-done">--}}
{{--                    <div>Thank you! Your submission has been received!</div>--}}
{{--                </div>--}}
{{--                <div class="w-form-fail">--}}
{{--                    <div>Oops! Something went wrong while submitting the form.</div>--}}
{{--                </div>--}}
                <form method="POST" action="{{ route('login') }}" class="form-block">
                    @csrf

                    <div class="rows-form-block">
                        <!-- Email Address -->
                        <div class="flex-vertical gap-6">
                            <label for="email" class="input-text">Email</label>
                            <input class="text-field w-input" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="Enter your e-mail">
                            @error('email')
                            <div class="small-text error-text">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="flex-vertical gap-6">
                            <label for="password" class="input-text">Password</label>
                            <input class="text-field w-input" id="password" type="password" name="password" required autocomplete="current-password" placeholder="••••••••">
                            @error('password')
                            <div class="small-text error-text">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Forgot Password -->
                        <div class="small-text gray-color center-aling">
                            <a href="{{ route('password.request') }}" class="forget-password-link">Forgot your password?</a>
                        </div>
                    </div>

                    <div class="action-block">
                        <button type="submit" class="form-button w-button">Log in</button>
{{--                        <div class="small-text gray-color center-aling">--}}
{{--                            Доступ получают пользователи, подключившие хотя бы одну AI-Капсулу.--}}
{{--                            Самостоятельная регистрация недоступна.--}}
{{--                        </div>--}}
                        <div class="small-text gray-color center-aling">Read the <a href="{{ route('privacy-policy') }}" class="small-link">Privacy Policy</a> and <a href="{{ route('user-agreement') }}" class="small-link">Terms of Service</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="footer-section">
    <div class="container footer">
        <div class="w-layout-grid footer-grid">
            <div id="w-node-_1f0a659d-6d2e-bea8-4ca6-e4a4b756eab4-b756eab1" class="footer-logo-block">
                <div class="heading mirage-f">дщпщ</div>
                <a href="#" class="footer-logo-link w-inline-block"><img src="{{ asset('images/logo-capsules-ai-white.svg') }}" loading="lazy" alt="" class="logo-footer"></a>
            </div>
            <div class="footer-link-block">
                <div class="heading-footer">Navigation</div>
                <a href="#" class="footer-link">AI-capsules</a>
                <a href="#" class="footer-link">How it works</a>
                <a href="#" class="footer-link">Developers</a>
            </div>
            <div class="footer-link-block">
                <div class="heading-footer">Contacts</div>
                <a href="mailto:support@ruyou.ru" class="footer-link">support@ruyou.ru</a>
                <div class="footer-text">ИНН: 6658420044</div>
                <a href="#" class="social-block w-inline-block"><img src="{{ asset('images/whatsapp_social.svg') }}" loading="lazy" alt="" class="social-png"></a>
            </div>
            <div id="w-node-_1f0a659d-6d2e-bea8-4ca6-e4a4b756ead3-b756eab1" class="footer-link-block">
                <div class="wrapper-btn capsules-bl">
                    <a href="#" class="button-base footer w-button">Book a consultation</a>
                    <a href="#" class="button-base footer w-button">Log in</a>
                </div>
            </div>
        </div>
        <div class="bottom-footer-block">
            <div class="small-text-footer">© 2024 ООО &quot;РУ-Ю&quot;</div>
            <div class="legal-link-bl">
                <a href="#" class="legal-link">Privacy Policy</a>
                <a href="#" class="legal-link">Terms of Service</a>
            </div>
        </div>
    </div>
</section>
<section class="popup-section">
    <div class="popup-overflow">
        <div class="popup-bg"></div>
        <div class="popup-container">
            <div class="popup-form-grid">
                <div class="form-header-block">
                    <div class="form-heading">Development application</div>
                    <div class="standart-text center-aling">Fill in your details and choose the capsule you would like to work on or describe your idea</div>
                </div>
                <div class="popup-form-block w-form">
                    <form id="wf-form-Email-form" name="wf-form-Email-form" data-name="Email form" method="get" class="form-block" data-wf-page-id="67effaf7b7f4ff8926a2a3b1" data-wf-element-id="4ee6f207-47d2-888e-2b36-068482ba3c23">
                        <div class="form-row-grid">
                            <div class="field-block">
                                <div class="input-text">Name</div><input class="text-field w-input" maxlength="256" name="Name" data-name="Name" placeholder="Enter your name" type="text" id="Name" required="">
                            </div>
                            <div class="field-block">
                                <div class="input-text">Email</div><input class="text-field w-node-_4ee6f207-47d2-888e-2b36-068482ba3c27-82ba3c18 w-input" maxlength="256" name="Email" data-name="Email" placeholder="Enter your e-mail" type="email" id="Email" required="">
                            </div>
                            <div class="field-block">
                                <div class="input-text">Describe your idea</div><textarea placeholder="Description" maxlength="5000" id="Message" name="Message" data-name="Message" class="text-field message-field w-input"></textarea>
                            </div>
                        </div><input type="submit" data-wait="Please wait..." class="form-button w-button" value="Send">
                    </form>
                    <div class="success-messagge w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="error-message w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
            <div data-w-id="4ee6f207-47d2-888e-2b36-068482ba3c34" class="close-popup-btn">
                <div class="icon-close w-embed"><svg viewbox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                        <rect fill="none" height="100%" width="100%"></rect>
                        <line fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" x1="200" x2="56" y1="56" y2="200"></line>
                        <line fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" x1="200" x2="56" y1="200" y2="56"></line>
                    </svg></div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=67effaf7b7f4ff8926a2a31f') }}" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ asset('js/webflow.js') }}" type="text/javascript"></script>
</body>
</html>