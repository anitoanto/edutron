<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EduTron</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

            </style>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>

    <style>
  * {
    margin-left: 50px;
    margin-right: 50px;
    padding: 0;
    font-family: sans-serif;
  }

  .container-new {
    width: 80%;
    height: 200%;
    background: #42455a !important;

  }

  .menu ul {
    display: inline-flex;
    margin-left: -40px;
    margin-top: 80px;
  }

  .menu ul li {
    text-transform: uppercase;
    list-style: none;
    margin: 0 -20px;
    color: #b2b1b1;
    cursor: pointer;
    font-size: 18px;
  }

  .logo img {
    width: 40px;
    margin-top: -7px;
    margin-right: 48px;

  }

  .active {
    color: #19dafa !important;
  }

  .passive {
    color: #fff;
  }

  .login-menu {
    top: 76px;
    right: 400px;
    position: absolute;
    text-decoration: none;
    color: #fff;
    border: 2px solid transparent;
    border-radius: 20px;
    background-image: linear-gradient(#42455a, #42455a), radial-gradient(circle at top left, #fd00da, #19d7f8);
    background-origin: border-box;
    background-clip: content-box, border-box;
  }

  .login-menu span {
    display: block;
    padding: 6px 10px;
  }

  .description {
    width: 80%;
    height: 70%;
    left: 130px;
    margin-top: 50px;
    position: absolute;
  }

  .app-text {
    width: 50%;
    float: left;
  }

  .app-text h1 {
    font-size: 43px;
    width: 640px;
    position: relative;
    margin-left: 20px;
  }

  .app-text p {
    font-size: 15px;
    width: 640px;
    margin: 1   0px 0 30px 20px;
    line-height: 25px;
  }

  .app-picture {
    width: 100%;
    float: right;
  }

  .app-picture img {
    width: 80%;
    padding: 30px;

    /* margin-bottom: 40px;
  margin-left: 700px;
  border-style: outset;
  border-radius: 10px;
  border: 4px solid transparent;
  background-image: linear-gradient(#42455a,#42455a),radial-gradient(circle at top left,#fd00da,#19d7f8);
   background-origin: border-box;
  background-clip: content-box,border-box; */
  }

  .edt {
    font-size: 24px;
    padding: 20px;
  }
</style>
</head>

<body class="antialiased">



<div class="container-new">
  <div class="menu">
    <ul>
      <li class="logo"><img
          src="https://cdn.discordapp.com/attachments/771345498748616707/772296286643683388/MLOGO.png"></li>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="{{ route('login') }}" class="login-menu"><span>Log In</span></a></li>
          <li><a href="{{ route('register') }}"><span>Register</span></a></li>
        </ul>
    </div>
    <div class="description">
        <div class="app-text">
                                    
      <h1>Making video classes 3D</h1><br />
      <h2># Making student explore 3D model realtime with teacher.</h2>
      <h2># Interact with 3D Model with your speech via Natural Language Processing (NLP) model.</h2>
      <h2># Teacher could point out labeled parts and realtime, student see those in 3d models alongside of video classes.</h2>
      <p>Realtime video streaming and 3D model highlighting with labels</p><br>
      <br>
    <br>
    Project by, Anito Anto, Abhijith P, Abhishek V J from the team CRACK HACK.
    <br>Thank you<br>
    </p>
    </div>

  </div>
</div>

<a href="/" class="edt" style="color:Tomato;">EDUTRON</a>

</body>

</html>