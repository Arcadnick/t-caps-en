<!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Fri Apr 18 2025 09:24:10 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="67effaf7b7f4ff8926a2a37d" data-wf-site="67effaf7b7f4ff8926a2a31f" lang="en">
<head>
    <meta charset="utf-8">
    <title>Auto-response page</title>
    <meta content="Auto-response page" property="og:title">
    <meta content="Auto-response page" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/t-caps-a6fe814030a93a3dec4ffb2ad601d3dd.webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
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
                <a href="{{ route('book-demo') }}" class="button-black header w-inline-block">
                    <div>Book a demo</div>
                </a>
                <a href="{{ route('login') }}" class="button-login header w-inline-block">
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
<div class="wrapper-block">
    <section data-w-id="45997f92-ae36-e406-96bb-e1c177f3833c" class="hero-section">
        <div class="hero-container">
            <div class="hero-shapes-wrapper"><img src="{{ asset('images/caps-1_3.png') }}" loading="lazy" alt="" class="hero-img"><img src="{{ asset('images/caps-small-3_1caps-small-3.png') }}" loading="lazy" alt="" class="hero-img small"><img src="{{ asset('images/caps-small-2.png') }}" loading="lazy" alt="" class="hero-img left-aling"><img src="{{ asset('images/caps-small-1.png') }}" loading="lazy" alt="" class="hero-img small _2-v"></div>
            <div data-w-id="696c1e16-ba6b-4170-72cf-81fcfc352401" style="opacity:0" class="h1-block">
                <h1>You&#x27;re all set! Launch AI Capsule and start automating</h1>
                <div class="subheader">You have selected a process that can be automated with an AI capsule. Now all that&#x27;s left is to activate it!</div>
                <div class="subheader">The ready-made AI assistant is already trained and tested - just<br>connect it to your tools.</div>
            </div>
            <div data-w-id="40d73393-22b4-d096-3a54-967fb7d7998d" style="opacity:0" class="hero-left-shapes">
                <div class="wrapper-hero-img"><img src="{{ asset('images/caps-2_4.png') }}" loading="lazy" data-w-id="7cf3eb8f-e337-8583-c65d-444fdc400f49" sizes="(max-width: 931px) 100vw, 931px" alt="" srcset="images/caps-2_4-p-500.png 500w, images/caps-2_4-p-800.png 800w, {{ asset('images/caps-2_4.png') }} 931w" class="hero-img _1-v"></div>
            </div>
            <div data-w-id="47c5de10-abc2-c2fc-2cea-72157c1a3eb2" style="opacity:0" class="hero-right-shapes">
                <div class="wrapper-hero-img"><img src="{{ asset('images/caps-small-3_1caps-small-3.png') }}" loading="lazy" data-w-id="47c5de10-abc2-c2fc-2cea-72157c1a3eb5" alt="" class="hero-img _2-v"><img src="{{ asset('images/caps-small-2.png') }}" loading="lazy" data-w-id="47c5de10-abc2-c2fc-2cea-72157c1a3eb6" alt="" class="hero-img left-aling"><img src="{{ asset('images/caps-small-1.png') }}" loading="lazy" data-w-id="47c5de10-abc2-c2fc-2cea-72157c1a3eb7" alt="" class="hero-img _3-v"></div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div data-w-id="663b2468-0223-0ab9-df01-307c6705376d" style="opacity:0" class="h2-block">
                <div class="flex-vertical center-aling">
                    <div class="shield-bl">
                        <div class="circle-color"></div>
                        <div>Pricing</div>
                    </div>
                    <h2 class="center-aling">How to connect and how much does it cost?</h2>
                </div>
            </div>
            <div data-w-id="f2d57f30-2b71-e5c2-8f17-5fcf6e110ca7" style="opacity:0" class="w-layout-grid price-grid">
                <div class="content-price-item">
                    <div class="flex-vertical gap-8">
                        <p class="focus-black">Self-connection</p>
                        <div class="price-heading">Free</div>
                        <div class="standart-text">Then 35€ per month</div>
                    </div>
                    <div class="block-included">
                        <div class="w-layout-grid item-included">
                            <div class="wrapper-check-icon">
                                <div class="icon-check w-embed"><svg width="100%" height="100%" viewbox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.096 0.390037L3.93602 7.30004L2.03602 5.27004C1.68602 4.94004 1.13602 4.92004 0.736015 5.20004C0.346015 5.49004 0.236015 6.00004 0.476015 6.41004L2.72602 10.07C2.94602 10.41 3.32601 10.62 3.75601 10.62C4.16601 10.62 4.55602 10.41 4.77602 10.07C5.13602 9.60004 12.006 1.41004 12.006 1.41004C12.906 0.490037 11.816 -0.319963 11.096 0.380037V0.390037Z" fill="currentcolor"></path>
                                    </svg></div>
                            </div>
                            <div class="standart-text">Log in to your personal account</div>
                        </div>
                        <div class="w-layout-grid item-included">
                            <div class="wrapper-check-icon">
                                <div class="icon-check w-embed"><svg width="100%" height="100%" viewbox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.096 0.390037L3.93602 7.30004L2.03602 5.27004C1.68602 4.94004 1.13602 4.92004 0.736015 5.20004C0.346015 5.49004 0.236015 6.00004 0.476015 6.41004L2.72602 10.07C2.94602 10.41 3.32601 10.62 3.75601 10.62C4.16601 10.62 4.55602 10.41 4.77602 10.07C5.13602 9.60004 12.006 1.41004 12.006 1.41004C12.906 0.490037 11.816 -0.319963 11.096 0.380037V0.390037Z" fill="currentcolor"></path>
                                    </svg></div>
                            </div>
                            <div class="standart-text">Choose the tools you are working with</div>
                        </div>
                        <div class="w-layout-grid item-included">
                            <div class="wrapper-check-icon">
                                <div class="icon-check w-embed"><svg width="100%" height="100%" viewbox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.096 0.390037L3.93602 7.30004L2.03602 5.27004C1.68602 4.94004 1.13602 4.92004 0.736015 5.20004C0.346015 5.49004 0.236015 6.00004 0.476015 6.41004L2.72602 10.07C2.94602 10.41 3.32601 10.62 3.75601 10.62C4.16601 10.62 4.55602 10.41 4.77602 10.07C5.13602 9.60004 12.006 1.41004 12.006 1.41004C12.906 0.490037 11.816 -0.319963 11.096 0.380037V0.390037Z" fill="currentcolor"></path>
                                    </svg></div>
                            </div>
                            <div class="standart-text">Follow these step-by-step instructions</div>
                        </div>
                    </div>
                    <div class="wrapper-btn margin-24">
                        <a href="{{ route('book-demo') }}" class="button-black w-inline-block">
                            <div class="icon-btn w-embed"><svg width="27" height="26" viewbox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.34783 2.0066C8.65601 1.10415 9.93234 1.10415 10.2405 2.0066L11.5688 5.89635C11.6689 6.18935 11.899 6.41948 12.192 6.51953L16.0818 7.84783C16.9842 8.15601 16.9842 9.43234 16.0818 9.74052L12.192 11.0688C11.899 11.1689 11.6689 11.399 11.5688 11.692L10.2405 15.5818C9.93234 16.4842 8.65601 16.4842 8.34783 15.5818L7.01953 11.692C6.91948 11.399 6.68935 11.1689 6.39635 11.0688L2.5066 9.74052C1.60415 9.43234 1.60415 8.15601 2.5066 7.84783L6.39635 6.51953C6.68935 6.41948 6.91948 6.18935 7.01953 5.89635L8.34783 2.0066Z" fill="white"></path>
                                    <path d="M19.429 12.1887C19.7236 11.2577 21.0411 11.2577 21.3357 12.1887L21.8803 13.9093C21.9785 14.2196 22.2216 14.4627 22.5319 14.5609L24.2525 15.1055C25.1835 15.4001 25.1835 16.7176 24.2525 17.0123L22.5319 17.5568C22.2216 17.6551 21.9785 17.8981 21.8803 18.2085L21.3357 19.929C21.0411 20.86 19.7236 20.86 19.429 19.929L18.8844 18.2085C18.7862 17.8981 18.5431 17.6551 18.2328 17.5568L16.5122 17.0123C15.5812 16.7176 15.5812 15.4002 16.5122 15.1055L18.2328 14.5609C18.5431 14.4627 18.7862 14.2196 18.8844 13.9093L19.429 12.1887Z" fill="white"></path>
                                    <path d="M11.8656 19.7535C11.9827 19.2334 12.7239 19.2334 12.8411 19.7535L13.0571 20.7124C13.0995 20.9007 13.2466 21.0478 13.435 21.0903L14.3938 21.3062C14.914 21.4234 14.914 22.1646 14.3938 22.2818L13.435 22.4978C13.2466 22.5402 13.0995 22.6873 13.0571 22.8757L12.8411 23.8345C12.7239 24.3547 11.9827 24.3547 11.8656 23.8345L11.6496 22.8757C11.6071 22.6873 11.46 22.5402 11.2717 22.4978L10.3128 22.2818C9.79268 22.1646 9.79268 21.4234 10.3128 21.3062L11.2717 21.0903C11.46 21.0478 11.6071 20.9007 11.6496 20.7124L11.8656 19.7535Z" fill="white"></path>
                                </svg></div>
                            <div>Start automation</div>
                        </a>
                    </div>
                </div>
                <div class="content-price-item">
                    <div class="flex-vertical gap-8">
                        <p class="focus-black">Order integration</p>
                        <div class="price-heading">{{ number_format($price, 0, ',', ' ') }}€</div>
{{--                        <div class="price-heading">450€</div>--}}
                        <div class="standart-text">Then 35€ per month</div>
                    </div>
                    <div class="block-included">
                        <div class="w-layout-grid item-included">
                            <div class="wrapper-check-icon">
                                <div class="icon-check w-embed"><svg width="100%" height="100%" viewbox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.096 0.390037L3.93602 7.30004L2.03602 5.27004C1.68602 4.94004 1.13602 4.92004 0.736015 5.20004C0.346015 5.49004 0.236015 6.00004 0.476015 6.41004L2.72602 10.07C2.94602 10.41 3.32601 10.62 3.75601 10.62C4.16601 10.62 4.55602 10.41 4.77602 10.07C5.13602 9.60004 12.006 1.41004 12.006 1.41004C12.906 0.490037 11.816 -0.319963 11.096 0.380037V0.390037Z" fill="currentcolor"></path>
                                    </svg></div>
                            </div>
                            <div class="standart-text">We will connect the AI Capsule to your business tools</div>
                        </div>
                        <div class="w-layout-grid item-included">
                            <div class="wrapper-check-icon">
                                <div class="icon-check w-embed"><svg width="100%" height="100%" viewbox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.096 0.390037L3.93602 7.30004L2.03602 5.27004C1.68602 4.94004 1.13602 4.92004 0.736015 5.20004C0.346015 5.49004 0.236015 6.00004 0.476015 6.41004L2.72602 10.07C2.94602 10.41 3.32601 10.62 3.75601 10.62C4.16601 10.62 4.55602 10.41 4.77602 10.07C5.13602 9.60004 12.006 1.41004 12.006 1.41004C12.906 0.490037 11.816 -0.319963 11.096 0.380037V0.390037Z" fill="currentcolor"></path>
                                    </svg></div>
                            </div>
                            <div class="standart-text">Customize automation for your business process</div>
                        </div>
                        <div class="w-layout-grid item-included">
                            <div class="wrapper-check-icon">
                                <div class="icon-check w-embed"><svg width="100%" height="100%" viewbox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.096 0.390037L3.93602 7.30004L2.03602 5.27004C1.68602 4.94004 1.13602 4.92004 0.736015 5.20004C0.346015 5.49004 0.236015 6.00004 0.476015 6.41004L2.72602 10.07C2.94602 10.41 3.32601 10.62 3.75601 10.62C4.16601 10.62 4.55602 10.41 4.77602 10.07C5.13602 9.60004 12.006 1.41004 12.006 1.41004C12.906 0.490037 11.816 -0.319963 11.096 0.380037V0.390037Z" fill="currentcolor"></path>
                                    </svg></div>
                            </div>
                            <div class="standart-text">Let&#x27;s check the correctness of work</div>
                        </div>
                    </div>
                    <div class="wrapper-btn margin-24">
                        <a href="{{ route('book-demo') }}" class="button-black w-inline-block">
                            <div class="icon-btn w-embed"><svg width="27" height="26" viewbox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.34783 2.0066C8.65601 1.10415 9.93234 1.10415 10.2405 2.0066L11.5688 5.89635C11.6689 6.18935 11.899 6.41948 12.192 6.51953L16.0818 7.84783C16.9842 8.15601 16.9842 9.43234 16.0818 9.74052L12.192 11.0688C11.899 11.1689 11.6689 11.399 11.5688 11.692L10.2405 15.5818C9.93234 16.4842 8.65601 16.4842 8.34783 15.5818L7.01953 11.692C6.91948 11.399 6.68935 11.1689 6.39635 11.0688L2.5066 9.74052C1.60415 9.43234 1.60415 8.15601 2.5066 7.84783L6.39635 6.51953C6.68935 6.41948 6.91948 6.18935 7.01953 5.89635L8.34783 2.0066Z" fill="white"></path>
                                    <path d="M19.429 12.1887C19.7236 11.2577 21.0411 11.2577 21.3357 12.1887L21.8803 13.9093C21.9785 14.2196 22.2216 14.4627 22.5319 14.5609L24.2525 15.1055C25.1835 15.4001 25.1835 16.7176 24.2525 17.0123L22.5319 17.5568C22.2216 17.6551 21.9785 17.8981 21.8803 18.2085L21.3357 19.929C21.0411 20.86 19.7236 20.86 19.429 19.929L18.8844 18.2085C18.7862 17.8981 18.5431 17.6551 18.2328 17.5568L16.5122 17.0123C15.5812 16.7176 15.5812 15.4002 16.5122 15.1055L18.2328 14.5609C18.5431 14.4627 18.7862 14.2196 18.8844 13.9093L19.429 12.1887Z" fill="white"></path>
                                    <path d="M11.8656 19.7535C11.9827 19.2334 12.7239 19.2334 12.8411 19.7535L13.0571 20.7124C13.0995 20.9007 13.2466 21.0478 13.435 21.0903L14.3938 21.3062C14.914 21.4234 14.914 22.1646 14.3938 22.2818L13.435 22.4978C13.2466 22.5402 13.0995 22.6873 13.0571 22.8757L12.8411 23.8345C12.7239 24.3547 11.9827 24.3547 11.8656 23.8345L11.6496 22.8757C11.6071 22.6873 11.46 22.5402 11.2717 22.4978L10.3128 22.2818C9.79268 22.1646 9.79268 21.4234 10.3128 21.3062L11.2717 21.0903C11.46 21.0478 11.6071 20.9007 11.6496 20.7124L11.8656 19.7535Z" fill="white"></path>
                                </svg></div>
                            <div>Start automation</div>
                        </a>
                    </div>
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
</div>
<script src="{{ asset('https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=67effaf7b7f4ff8926a2a31f') }}" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ asset('js/webflow.js') }}" type="text/javascript"></script>
</body>
</html>