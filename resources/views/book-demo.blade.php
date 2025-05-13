<!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Fri Apr 18 2025 09:24:10 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="67effaf7b7f4ff8926a2a3b2" data-wf-site="67effaf7b7f4ff8926a2a31f" lang="en">
<head>
    <meta charset="utf-8">
    <title>Consultation page</title>
    <meta content="Consultation page" property="og:title">
    <meta content="Consultation page" property="twitter:title">
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
                        <a href="{{ route('login') }}" class="button-login max-width w-inline-block">
                            <div>Log in</div>
                        </a>
                    </div>
                </div>
            </nav>
            <div class="nav-right-col">
                <a href="{{ route('book-demo') }}" aria-current="page" class="button-black header w-inline-block w--current">
                    <div>Book a demo</div>
                </a>
                <a href="{{ route('login') }}" class="button-login header w-inline-block">
                    <div>Log in</div>
                </a>
            </div>
            <div class="language-block"></div>
            <a href="{{ route('book-demo') }}" aria-current="page" class="button-black mobi-v w-inline-block w--current">
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
        <div class="h1-block center-aling">
            <h1>Book your free Discovery Session</h1>
            <div class="subheader width-600">Book a convenient date and time for a call and get afree, with no-obligation:</div>
        </div>
        <div class="w-layout-grid grid-check">
            <div class="grid-icon">
                <div class="wrapper-check-icon more-s">
                    <div class="icon-check more-s w-embed"><svg width="100%" height="100%" viewbox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.096 0.390037L3.93602 7.30004L2.03602 5.27004C1.68602 4.94004 1.13602 4.92004 0.736015 5.20004C0.346015 5.49004 0.236015 6.00004 0.476015 6.41004L2.72602 10.07C2.94602 10.41 3.32601 10.62 3.75601 10.62C4.16601 10.62 4.55602 10.41 4.77602 10.07C5.13602 9.60004 12.006 1.41004 12.006 1.41004C12.906 0.490037 11.816 -0.319963 11.096 0.380037V0.390037Z" fill="currentcolor"></path>
                        </svg></div>
                </div>
                <div class="check-text">AI Capsules functionality Demonstration</div>
            </div>
            <div class="grid-icon">
                <div class="wrapper-check-icon more-s">
                    <div class="icon-check more-s w-embed"><svg width="100%" height="100%" viewbox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.096 0.390037L3.93602 7.30004L2.03602 5.27004C1.68602 4.94004 1.13602 4.92004 0.736015 5.20004C0.346015 5.49004 0.236015 6.00004 0.476015 6.41004L2.72602 10.07C2.94602 10.41 3.32601 10.62 3.75601 10.62C4.16601 10.62 4.55602 10.41 4.77602 10.07C5.13602 9.60004 12.006 1.41004 12.006 1.41004C12.906 0.490037 11.816 -0.319963 11.096 0.380037V0.390037Z" fill="currentcolor"></path>
                        </svg></div>
                </div>
                <div class="check-text">AI Capsules Use Cases for your Business</div>
            </div>
            <div class="grid-icon">
                <div class="wrapper-check-icon more-s">
                    <div class="icon-check more-s w-embed"><svg width="100%" height="100%" viewbox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.096 0.390037L3.93602 7.30004L2.03602 5.27004C1.68602 4.94004 1.13602 4.92004 0.736015 5.20004C0.346015 5.49004 0.236015 6.00004 0.476015 6.41004L2.72602 10.07C2.94602 10.41 3.32601 10.62 3.75601 10.62C4.16601 10.62 4.55602 10.41 4.77602 10.07C5.13602 9.60004 12.006 1.41004 12.006 1.41004C12.906 0.490037 11.816 -0.319963 11.096 0.380037V0.390037Z" fill="currentcolor"></path>
                        </svg></div>
                </div>
                <div class="check-text">Expert Advice for the best AI Implementation</div>
            </div>
        </div>
        <div class="wrapper-calendar"></div>
        <div class="w-layout-grid contact-us">
            <div class="contact-left-content">
                <div class="h2-block-2 left-aling">
                    <h2>Don&#x27;t want to book a call but want more info?</h2>
                    <div class="h1-subheader">Fill out the form or message us, and we will be in touch shortly</div>
                    <a href="mailto:hello@getcapsules.ai" class="link-big">hello@getcapsules.ai</a>
                    <a href="https://wa.me/" class="link-big">WhatsApp us</a>
                </div>
                <div class="wrap-form-contact">
                    <div class="form-contact-block w-form">
                        <form method="POST" action="{{ route('requests.store') }}" name="email-form" data-name="Email Form" class="form-contact"
                              data-wf-page-id="67effaf7b7f4ff8926a2a3b2" data-wf-element-id="2243e8b9-4ee8-3daa-e809-119951457412">
                            @csrf
                            <input type="hidden" name="request_type" value="consultation">

                            <input class="text-field hover-second w-input" maxlength="256" name="user_name" data-name="Name 2"
                                   placeholder="Name*" type="text" id="name-2" required="">

                            <input class="text-field hover-second w-input" maxlength="256" name="email" data-name="Email 2"
                                   placeholder="Email*" type="email" id="email-2" required="">

                            <input class="text-field hover-second w-input" maxlength="256" name="phone" data-name="Phone"
                                   placeholder="Phone" type="tel" id="Phone">

                            <textarea id="Message-3" name="message" maxlength="5000" data-name="Message"
                                      placeholder="Your message" class="text-field hover-second message w-input"></textarea>

                            <input type="submit" data-wait="Please wait..." class="button-black max-width w-button" value="Submit">

                            <div class="check-box-block">
                                <label class="w-checkbox checkbox-field">
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox w--redirected-checked"></div>
                                    <input type="checkbox" name="Checkbox" id="Checkbox" data-name="Checkbox" required="" style="opacity:0;position:absolute;z-index:-1" checked="">
                                    <span class="checkbox-text w-form-label" for="Checkbox">Accept <a href="{{ route('privacy-policy') }}" target="_blank" class="link-black">Privacy Policy</a>
                                    </span>
                                </label></div>
                        </form>
                        <div class="success-message w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="error-message-2 w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer-white">
    <div class="container footer">
        <div class="w-layout-grid footer-grid">
            <div id="w-node-_23367ff5-f907-0a59-0b8e-135fe55d3eeb-e55d3ee8" class="footer-logo-block">
                <a href="{{ route('welcome') }}" class="footer-logo-link w-inline-block"><img loading="lazy" src="{{ asset('images/logo_1.svg') }}" alt="" class="logo-footer"></a>
                <div class="title-text">Ultimate AI Agents for boosting<br>business workflows</div>
            </div>
            <div class="footer-link-block">
                <div class="heading-footer">Company</div>
                <div class="flex-vertical gap-12">
                    <a href="{{ route('ai-capsules') }}" class="footer-link">AI Capsules</a>
                    <a href="{{ route('request-capsule') }}" class="footer-link">Request AI Capsules</a>
                    <a href="{{ route('partners') }}" class="footer-link">Developers</a>
                </div>
                <div class="flex-vertical gap-12 margin-top">
                    <a href="{{ route('privacy-policy') }}" target="_blank" class="footer-link">Privacy Policy</a>
                    <a href="{{ route('user-agreement') }}" target="_blank" class="footer-link">User agreement</a>
                    <a href="{{ route('cookies') }}" target="_blank" class="footer-link">Cookies</a>
                </div>
            </div>
            <div class="footer-link-block">
                <div class="heading-footer">Contact</div>
                <a href="mailto:hello@getcapsules.ai" class="footer-link email">hello@getcapsules.ai</a>
                <div class="wrapper-button gap-16 margin-top flex-vert">
                    <a href="{{ route('book-demo') }}" aria-current="page" class="button-black w-inline-block w--current">
                        <div>Book a demo</div>
                    </a>
                    <a href="{{ route('login') }}" class="button-login w-inline-block">
                        <div>Log in</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=67effaf7b7f4ff8926a2a31f') }}" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ asset('js/webflow.js') }}" type="text/javascript"></script>
</body>
</html>