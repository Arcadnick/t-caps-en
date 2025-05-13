<!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Fri Apr 18 2025 09:24:10 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="67effaf7b7f4ff8926a2a3b0" data-wf-site="67effaf7b7f4ff8926a2a31f" lang="en">
<head>
    <meta charset="utf-8">
    <title>Partners page</title>
    <meta content="Partners page" property="og:title">
    <meta content="Partners page" property="twitter:title">
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
    <section data-w-id="45997f92-ae36-e406-96bb-e1c177f3833c" class="hero-section more-top-padding-mobi">
        <div class="hero-container">
            <div data-w-id="696c1e16-ba6b-4170-72cf-81fcfc352401" style="opacity:0" class="h1-block">
                <h1><span class="focus-black">Create</span> AI-Capsules and <span class="focus-black">earn</span> from their implementation</h1>
                <div class="subheader">We develop AI Capsules - ready-made solutions for business. If you have expertise in AI, automation or development, you can create your own AI Capsule and get a percentage of its sales and adoption or choose a fixed fee for its development.</div>
            </div>
            <div data-w-id="40d73393-22b4-d096-3a54-967fb7d7998d" style="opacity:0" class="hero-left-shapes no-top-margin">
                <div class="wrapper-hero-img"><img src="{{ asset('images/caps-7.png') }}" loading="lazy" data-w-id="7cf3eb8f-e337-8583-c65d-444fdc400f49" alt="" class="ai-img"></div>
            </div>
            <div class="hero-shapes-wrapper"><img src="{{ asset('images/caps-7.png') }}" loading="lazy" alt="" class="hero-img"><img src="{{ asset('images/caps-small-3_1caps-small-3.png') }}" loading="lazy" alt="" class="hero-img small"><img src="{{ asset('images/caps-small-2.png') }}" loading="lazy" alt="" class="hero-img left-aling"><img src="{{ asset('images/caps-small-1.png') }}" loading="lazy" alt="" class="hero-img small _2-v"></div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div data-w-id="663b2468-0223-0ab9-df01-307c6705376d" style="opacity:0" class="h2-block">
                <h2 class="center-aling">What AI Capsules can be developed?</h2>
                <div class="subheader">You can choose a capsule from the list or suggest your idea</div>
            </div>
            <div class="w-layout-grid choices-grid">
                <div data-w-id="b3f7c7a4-1f99-cc8d-1e2e-8aea3a4c26b0" style="opacity:0" class="choices-item">
                    <div class="h3-block">
                        <h3 class="min-s">AI Capsule for automatic calculation of employee KPIs</h3>
                    </div>
                    <div class="badge-base">
                        <div>Looking for a developer</div>
                    </div>
                    <div class="text-block">
                        <p>AI analyzes employee performance and automatically calculates KPIs, generating reports for the manager</p>
                    </div>
                </div>
                <div data-w-id="bbe1d9af-3f21-05bf-985a-add174acb9cf" style="opacity:0" class="choices-item">
                    <div class="h3-block">
                        <h3 class="min-s">AI Capsule for automatic calculation of employee KPIs</h3>
                    </div>
                    <div class="badge-base">
                        <div>Looking for a developer</div>
                    </div>
                    <div class="text-block">
                        <p>AI analyzes employee performance and automatically calculates KPIs, generating reports for the manager</p>
                    </div>
                </div>
                <div data-w-id="5800e633-3b96-0f82-a6f7-87419782c6e0" style="opacity:0" class="choices-item">
                    <div class="h3-block">
                        <h3 class="min-s">AI Capsule for automatic calculation of employee KPIs</h3>
                    </div>
                    <div class="badge-base">
                        <div>Looking for a developer</div>
                    </div>
                    <div class="text-block">
                        <p>AI analyzes employee performance and automatically calculates KPIs, generating reports for the manager</p>
                    </div>
                </div>
            </div>
            <div data-w-id="780b7d4d-e9d2-97a5-29c8-7ecd785ddb89" style="opacity:0" class="wrapper-btn">
                <a href="{{ route('ai-capsules') }}" class="button-black w-inline-block">
                    <div>All AI capsules</div>
                </a>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div data-w-id="04c40f12-4696-974c-564e-29403cdc9359" style="opacity:0" class="h2-block">
                <div class="flex-vertical center-aling">
                    <div class="shield-bl">
                        <div class="circle-color"></div>
                        <div>Pricing</div>
                    </div>
                    <h2 class="center-aling">Payment options</h2>
                </div>
            </div>
            <div class="w-layout-grid payment-options-grid">
                <div data-w-id="fadd4c7c-0721-840a-d6da-77f912003512" style="opacity:0" class="stages-item">
                    <div class="grid-icon rows">
                        <div class="wrapper-icon-bg">
                            <div class="icon-benefits w-embed"><svg width="100%" height="100%" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23 3H9C8.46957 3 7.96086 3.21071 7.58579 3.58579C7.21071 3.96086 7 4.46957 7 5V9.5C7.00068 9.81037 7.07326 10.1164 7.21206 10.394C7.35087 10.6716 7.55211 10.9132 7.8 11.1L14.3337 16L7.8 20.9C7.55211 21.0868 7.35087 21.3284 7.21206 21.606C7.07326 21.8836 7.00068 22.1896 7 22.5V27C7 27.5304 7.21071 28.0391 7.58579 28.4142C7.96086 28.7893 8.46957 29 9 29H23C23.5304 29 24.0391 28.7893 24.4142 28.4142C24.7893 28.0391 25 27.5304 25 27V22.545C24.9993 22.2358 24.9273 21.931 24.7896 21.6541C24.652 21.3773 24.4523 21.1359 24.2062 20.9487L17.6588 16L24.2062 11.05C24.4525 10.8632 24.6522 10.6221 24.7899 10.3454C24.9276 10.0688 24.9995 9.76403 25 9.455V5C25 4.46957 24.7893 3.96086 24.4142 3.58579C24.0391 3.21071 23.5304 3 23 3ZM23 5V7H9V5H23ZM23 27H9V22.5L16 17.25L23 22.5438V27ZM16 14.75L9 9.5V9H23V9.455L16 14.75Z" fill="currentcolor"></path>
                                </svg></div>
                        </div>
                        <div class="flex-vertical gap-6">
                            <div class="heading">Long-term income</div>
                            <p class="more-height">Percentage of sales and capsule implementation</p>
                        </div>
                    </div>
                </div>
                <div data-w-id="db296da1-a0ec-2b60-c932-46d6367b5403" style="opacity:0" class="stages-item">
                    <div class="grid-icon rows">
                        <div class="wrapper-icon-bg">
                            <div class="icon-benefits w-embed"><svg width="100%" height="100%" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23 11.1962V10.5C23 7.365 18.2712 5 12 5C5.72875 5 1 7.365 1 10.5V15.5C1 18.1112 4.28125 20.1863 9 20.8075V21.5C9 24.635 13.7288 27 20 27C26.2712 27 31 24.635 31 21.5V16.5C31 13.9125 27.8225 11.835 23 11.1962ZM29 16.5C29 18.1525 25.1512 20 20 20C19.5338 20 19.0712 19.9838 18.615 19.9538C21.3112 18.9713 23 17.375 23 15.5V13.2175C26.7337 13.7737 29 15.2838 29 16.5ZM9 18.7812V15.8075C9.99472 15.9371 10.9969 16.0014 12 16C13.0031 16.0014 14.0053 15.9371 15 15.8075V18.7812C14.0068 18.928 13.004 19.0011 12 19C10.996 19.0011 9.99324 18.928 9 18.7812ZM21 13.7413V15.5C21 16.5487 19.4487 17.675 17 18.3587V15.4375C18.6138 15.0463 19.98 14.4637 21 13.7413ZM12 7C17.1512 7 21 8.8475 21 10.5C21 12.1525 17.1512 14 12 14C6.84875 14 3 12.1525 3 10.5C3 8.8475 6.84875 7 12 7ZM3 15.5V13.7413C4.02 14.4637 5.38625 15.0463 7 15.4375V18.3587C4.55125 17.675 3 16.5487 3 15.5ZM11 21.5V20.9788C11.3287 20.9913 11.6613 21 12 21C12.485 21 12.9587 20.9837 13.4237 20.9562C13.9403 21.1412 14.4665 21.2981 15 21.4263V24.3587C12.5513 23.675 11 22.5487 11 21.5ZM17 24.7812V21.8C17.9944 21.9337 18.9967 22.0005 20 22C21.0031 22.0014 22.0053 21.9371 23 21.8075V24.7812C21.0106 25.0729 18.9894 25.0729 17 24.7812ZM25 24.3587V21.4375C26.6138 21.0462 27.98 20.4637 29 19.7412V21.5C29 22.5487 27.4487 23.675 25 24.3587Z" fill="currentcolor"></path>
                                </svg></div>
                        </div>
                        <div class="flex-vertical gap-6">
                            <div class="heading">One-time payment</div>
                            <p class="more-height">Fixed remuneration for development</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-w-id="263344ba-d287-a0db-15e8-93f5c1ad481a" style="opacity:0" class="wrapper-btn">
                <a href="{{ route('book-demo') }}" class="button-black w-inline-block">
                    <div>Apply for development</div>
                </a>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div data-w-id="5231aef4-b560-be81-52cb-e5752cf44436" style="opacity:0" class="h2-block">
                <div class="flex-vertical center-aling">
                    <div class="shield-bl">
                        <div class="circle-color green"></div>
                        <div>4 simple steps</div>
                    </div>
                    <h2 class="center-aling">How does the collaborative process work?</h2>
                </div>
            </div>
            <div class="w-layout-grid grid-how-work">
                <div data-w-id="5231aef4-b560-be81-52cb-e5752cf4443c" style="opacity:0" class="stages-item white-bg">
                    <div class="h3-block">
                        <div class="wrapper-icon-bg">
                            <div class="icon-benefits w-embed"><svg width="100%" height="100%" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.0516 4.95012C25.8031 3.70163 24.1098 3.00024 22.3441 3.00024C20.5785 3.00024 18.8851 3.70163 17.6366 4.95012L4.94911 17.6364C3.72672 18.8902 3.04755 20.5752 3.05873 22.3263C3.06991 24.0773 3.77054 25.7535 5.00884 26.9916C6.24714 28.2298 7.9234 28.9302 9.67447 28.9411C11.4255 28.9521 13.1104 28.2727 14.3641 27.0501L27.0529 14.3639C28.2993 13.1144 28.9991 11.4216 28.9989 9.65673C28.9987 7.8919 28.2983 6.19923 27.0516 4.95012ZM12.9504 25.6364C12.077 26.5099 10.8923 27.0007 9.65705 27.0009C8.42177 27.001 7.23704 26.5104 6.36348 25.637C5.48993 24.7636 4.9991 23.579 4.99899 22.3437C4.99887 21.1084 5.48947 19.9237 6.36286 19.0501L11.9991 13.4139L18.5866 20.0001L12.9504 25.6364ZM25.6379 12.9501L19.9991 18.5864L13.4141 12.0001L19.0516 6.36387C19.9285 5.50727 21.1077 5.03089 22.3335 5.03805C23.5593 5.04522 24.7328 5.53534 25.5996 6.40212C26.4664 7.26891 26.9565 8.44246 26.9637 9.66826C26.9708 10.8941 26.4945 12.0733 25.6379 12.9501ZM23.7091 10.2926C23.8021 10.3855 23.8758 10.4958 23.9262 10.6172C23.9765 10.7386 24.0024 10.8687 24.0024 11.0001C24.0024 11.1315 23.9765 11.2617 23.9262 11.3831C23.8758 11.5045 23.8021 11.6147 23.7091 11.7076L20.7091 14.7076C20.6162 14.8004 20.5059 14.8741 20.3846 14.9243C20.2632 14.9745 20.1331 15.0003 20.0018 15.0002C19.8705 15.0002 19.7404 14.9742 19.6191 14.9239C19.4978 14.8736 19.3876 14.7999 19.2947 14.707C19.2019 14.6141 19.1283 14.5038 19.0781 14.3824C19.0279 14.2611 19.0021 14.131 19.0021 13.9997C19.0022 13.8683 19.0281 13.7383 19.0784 13.617C19.1287 13.4957 19.2024 13.3854 19.2954 13.2926L22.2954 10.2926C22.4829 10.1052 22.7371 9.99996 23.0022 9.99996C23.2673 9.99996 23.5216 10.1052 23.7091 10.2926Z" fill="currentcolor"></path>
                                </svg></div>
                        </div>
                        <h3 class="min-s">You choose the AI Capsule</h3>
                    </div>
                    <div class="text-block margin-auto">
                        <p class="more-height">Choose from the list or suggest your own idea</p>
                    </div>
                </div>
                <div data-w-id="5231aef4-b560-be81-52cb-e5752cf44445" style="opacity:0" class="stages-item white-bg">
                    <div class="h3-block">
                        <div class="wrapper-icon-bg">
                            <div class="icon-benefits w-embed"><svg width="100%" height="100%" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 19.0001C21 19.2653 20.8946 19.5196 20.7071 19.7072C20.5196 19.8947 20.2652 20.0001 20 20.0001H12C11.7348 20.0001 11.4804 19.8947 11.2929 19.7072C11.1054 19.5196 11 19.2653 11 19.0001C11 18.7348 11.1054 18.4805 11.2929 18.293C11.4804 18.1054 11.7348 18.0001 12 18.0001H20C20.2652 18.0001 20.5196 18.1054 20.7071 18.293C20.8946 18.4805 21 18.7348 21 19.0001ZM20 14.0001H12C11.7348 14.0001 11.4804 14.1054 11.2929 14.293C11.1054 14.4805 11 14.7348 11 15.0001C11 15.2653 11.1054 15.5196 11.2929 15.7072C11.4804 15.8947 11.7348 16.0001 12 16.0001H20C20.2652 16.0001 20.5196 15.8947 20.7071 15.7072C20.8946 15.5196 21 15.2653 21 15.0001C21 14.7348 20.8946 14.4805 20.7071 14.293C20.5196 14.1054 20.2652 14.0001 20 14.0001ZM27 6.00006V27.0001C27 27.5305 26.7893 28.0392 26.4142 28.4143C26.0391 28.7893 25.5304 29.0001 25 29.0001H7C6.46957 29.0001 5.96086 28.7893 5.58579 28.4143C5.21071 28.0392 5 27.5305 5 27.0001V6.00006C5 5.46963 5.21071 4.96092 5.58579 4.58585C5.96086 4.21078 6.46957 4.00006 7 4.00006H11.5325C12.0944 3.37097 12.7828 2.86763 13.5527 2.52301C14.3225 2.17839 15.1565 2.00024 16 2.00024C16.8435 2.00024 17.6775 2.17839 18.4473 2.52301C19.2172 2.86763 19.9056 3.37097 20.4675 4.00006H25C25.5304 4.00006 26.0391 4.21078 26.4142 4.58585C26.7893 4.96092 27 5.46963 27 6.00006ZM12 8.00006H20C20 6.9392 19.5786 5.92178 18.8284 5.17164C18.0783 4.42149 17.0609 4.00006 16 4.00006C14.9391 4.00006 13.9217 4.42149 13.1716 5.17164C12.4214 5.92178 12 6.9392 12 8.00006ZM25 6.00006H21.6562C21.8837 6.64233 22 7.3187 22 8.00006V9.00006C22 9.26528 21.8946 9.51963 21.7071 9.70717C21.5196 9.89471 21.2652 10.0001 21 10.0001H11C10.7348 10.0001 10.4804 9.89471 10.2929 9.70717C10.1054 9.51963 10 9.26528 10 9.00006V8.00006C10 7.3187 10.1163 6.64233 10.3438 6.00006H7V27.0001H25V6.00006Z" fill="currentcolor"></path>
                                </svg></div>
                        </div>
                        <h3 class="min-s">You get the terms of reference</h3>
                    </div>
                    <div class="text-block margin-auto">
                        <p class="more-height">We give clear terms of reference, discuss the nuances.</p>
                    </div>
                </div>
                <div data-w-id="5231aef4-b560-be81-52cb-e5752cf4444e" style="opacity:0" class="stages-item white-bg">
                    <div class="h3-block">
                        <div class="wrapper-icon-bg">
                            <div class="icon-benefits w-embed"><svg width="100%" height="100%" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.39805 16C5.82183 16.3486 6.16331 16.7865 6.39805 17.2825C6.99805 18.52 6.99805 20.0325 6.99805 21.5C6.99805 24.5387 7.12305 26 9.99805 26C10.2633 26 10.5176 26.1054 10.7052 26.2929C10.8927 26.4804 10.998 26.7348 10.998 27C10.998 27.2652 10.8927 27.5196 10.7052 27.7071C10.5176 27.8946 10.2633 28 9.99805 28C7.81305 28 6.33305 27.2325 5.59805 25.7175C4.99805 24.48 4.99805 22.9675 4.99805 21.5C4.99805 18.4613 4.87305 17 1.99805 17C1.73283 17 1.47848 16.8946 1.29094 16.7071C1.1034 16.5196 0.998047 16.2652 0.998047 16C0.998047 15.7348 1.1034 15.4804 1.29094 15.2929C1.47848 15.1054 1.73283 15 1.99805 15C4.87305 15 4.99805 13.5387 4.99805 10.5C4.99805 9.035 4.99805 7.52 5.59805 6.2825C6.33555 4.7675 7.81555 4 10.0005 4C10.2658 4 10.5201 4.10536 10.7077 4.29289C10.8952 4.48043 11.0005 4.73478 11.0005 5C11.0005 5.26522 10.8952 5.51957 10.7077 5.70711C10.5201 5.89464 10.2658 6 10.0005 6C7.12555 6 7.00055 7.46125 7.00055 10.5C7.00055 11.965 7.00055 13.48 6.40055 14.7175C6.16509 15.2137 5.82274 15.6517 5.39805 16ZM30.0005 15C27.1255 15 27.0005 13.5387 27.0005 10.5C27.0005 9.035 27.0005 7.52 26.4005 6.2825C25.6655 4.7675 24.1855 4 22.0005 4C21.7353 4 21.481 4.10536 21.2934 4.29289C21.1059 4.48043 21.0005 4.73478 21.0005 5C21.0005 5.26522 21.1059 5.51957 21.2934 5.70711C21.481 5.89464 21.7353 6 22.0005 6C24.8755 6 25.0005 7.46125 25.0005 10.5C25.0005 11.965 25.0005 13.48 25.6005 14.7175C25.8353 15.2135 26.1768 15.6514 26.6005 16C26.1768 16.3486 25.8353 16.7865 25.6005 17.2825C25.0005 18.52 25.0005 20.0325 25.0005 21.5C25.0005 24.5387 24.8755 26 22.0005 26C21.7353 26 21.481 26.1054 21.2934 26.2929C21.1059 26.4804 21.0005 26.7348 21.0005 27C21.0005 27.2652 21.1059 27.5196 21.2934 27.7071C21.481 27.8946 21.7353 28 22.0005 28C24.1855 28 25.6655 27.2325 26.4005 25.7175C27.0005 24.48 27.0005 22.9675 27.0005 21.5C27.0005 18.4613 27.1255 17 30.0005 17C30.2658 17 30.5201 16.8946 30.7077 16.7071C30.8952 16.5196 31.0005 16.2652 31.0005 16C31.0005 15.7348 30.8952 15.4804 30.7077 15.2929C30.5201 15.1054 30.2658 15 30.0005 15Z" fill="currentcolor"></path>
                                </svg></div>
                        </div>
                        <h3 class="min-s">Developing a capsule</h3>
                    </div>
                    <div class="text-block margin-auto">
                        <p class="more-height">MVP is ready in 1-2 weeks</p>
                    </div>
                </div>
                <div data-w-id="5231aef4-b560-be81-52cb-e5752cf44457" style="opacity:0" class="stages-item white-bg">
                    <div class="h3-block">
                        <div class="wrapper-icon-bg">
                            <div class="icon-benefits w-embed"><svg width="100%" height="100%" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23 11.1962V10.5C23 7.365 18.2712 5 12 5C5.72875 5 1 7.365 1 10.5V15.5C1 18.1112 4.28125 20.1863 9 20.8075V21.5C9 24.635 13.7288 27 20 27C26.2712 27 31 24.635 31 21.5V16.5C31 13.9125 27.8225 11.835 23 11.1962ZM29 16.5C29 18.1525 25.1512 20 20 20C19.5338 20 19.0712 19.9838 18.615 19.9538C21.3112 18.9713 23 17.375 23 15.5V13.2175C26.7337 13.7737 29 15.2838 29 16.5ZM9 18.7812V15.8075C9.99472 15.9371 10.9969 16.0014 12 16C13.0031 16.0014 14.0053 15.9371 15 15.8075V18.7812C14.0068 18.928 13.004 19.0011 12 19C10.996 19.0011 9.99324 18.928 9 18.7812ZM21 13.7413V15.5C21 16.5487 19.4487 17.675 17 18.3587V15.4375C18.6138 15.0463 19.98 14.4637 21 13.7413ZM12 7C17.1512 7 21 8.8475 21 10.5C21 12.1525 17.1512 14 12 14C6.84875 14 3 12.1525 3 10.5C3 8.8475 6.84875 7 12 7ZM3 15.5V13.7413C4.02 14.4637 5.38625 15.0463 7 15.4375V18.3587C4.55125 17.675 3 16.5487 3 15.5ZM11 21.5V20.9788C11.3287 20.9913 11.6613 21 12 21C12.485 21 12.9587 20.9837 13.4237 20.9562C13.9403 21.1412 14.4665 21.2981 15 21.4263V24.3587C12.5513 23.675 11 22.5487 11 21.5ZM17 24.7812V21.8C17.9944 21.9337 18.9967 22.0005 20 22C21.0031 22.0014 22.0053 21.9371 23 21.8075V24.7812C21.0106 25.0729 18.9894 25.0729 17 24.7812ZM25 24.3587V21.4375C26.6138 21.0462 27.98 20.4637 29 19.7412V21.5C29 22.5487 27.4487 23.675 25 24.3587Z" fill="currentcolor"></path>
                                </svg></div>
                        </div>
                        <h3 class="min-s">Earning</h3>
                    </div>
                    <div class="text-block margin-auto">
                        <p class="more-height">Receive a percentage of implementations or a fixed fee</p>
                    </div>
                </div>
            </div>
            <div data-w-id="5231aef4-b560-be81-52cb-e5752cf44460" style="opacity:0" class="wrapper-btn">
                <a href="{{ route('ai-capsules') }}" class="button-black w-inline-block">
                    <div>Select an AI Capsule for development</div>
                </a>
            </div>
        </div>
    </section>
    <section class="footer-white">
        <div class="container footer">
            <div class="w-layout-grid footer-grid">
                <div id="w-node-_23367ff5-f907-0a59-0b8e-135fe55d3eeb-e55d3ee8" class="footer-logo-block">
                    <a href="{{ route('welcome') }}" aria-current="page" class="footer-logo-link w-inline-block w--current"><img loading="lazy" src="{{ asset('images/logo_1.svg') }}" alt="" class="logo-footer"></a>
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
                        <a href="{{ route('book-demo') }}" class="button-black w-inline-block">
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
</div>
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
                    <form id="wf-form-Email-form" name="wf-form-Email-form" data-name="Email form" method="get" class="form-block" data-wf-page-id="67effaf7b7f4ff8926a2a3b0" data-wf-element-id="4ee6f207-47d2-888e-2b36-068482ba3c23">
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