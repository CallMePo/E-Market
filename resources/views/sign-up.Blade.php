<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign-Up - EMarket</title>
    <meta property="og:title" content="Sign-Up - EMarket" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link rel="stylesheet" href="./style.css" />
    <style>
      .sign-up-container {
      width: 100%;
      display: flex;
      overflow: auto;
      min-height: 100vh;
      align-items: center;
      flex-direction: column;
    }
    .sign-up-sign-up {
      width: 361px;
      height: 812px;
      display: flex;
      overflow: hidden;
      position: relative;
      align-items: flex-start;
      flex-shrink: 0;
      background-color: var(--dl-color-default-white);
    }
    .sign-up-i-o-status-bar-black {
      top: 0px;
      left: 0px;
      width: 375px;
      height: 44px;
      display: flex;
      overflow: hidden;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .sign-up-bg {
      top: -2px;
      left: 78px;
      width: 219px;
      height: 30px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .sign-up-notch {
      top: 0px;
      left: 0px;
      width: 219px;
      height: 30px;
      position: absolute;
    }
    .sign-up-right-side {
      top: 17.3306884765625px;
      left: 293.6666564941406px;
      width: 66.661376953125px;
      height: 11.336018562316895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .sign-up-battery {
      top: 0.002685546875px;
      left: 42.333343505859375px;
      width: 24.32803726196289px;
      height: 11.333333015441895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .sign-up-rectangle {
      top: 0px;
      left: 0px;
      width: 22px;
      height: 11px;
      opacity: 0.35;
      position: absolute;
    }
    .sign-up-combined-shape {
      top: 3.6666667461395264px;
      left: 23px;
      width: 1px;
      height: 4px;
      opacity: 0.40;
      position: absolute;
    }
    .sign-up-rectangle1 {
      top: 1.9999998807907104px;
      left: 2px;
      width: 18px;
      height: 7px;
      position: absolute;
    }
    .sign-up-wifi {
      top: 0px;
      left: 22.027069091796875px;
      width: 15px;
      height: 11px;
      position: absolute;
    }
    .sign-up-mobile-signal {
      top: 0.3359375px;
      left: 0px;
      width: 17px;
      height: 11px;
      position: absolute;
    }
    .sign-up-left-side {
      top: 17.16748046875px;
      left: 33.453514099121094px;
      width: 28.42616844177246px;
      height: 11.0888671875px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .sign-up-svg941 {
      top: 0px;
      left: 0px;
      width: 28px;
      height: 11px;
      position: absolute;
    }
    .sign-up-page-header {
      top: 60px;
      left: 16px;
      width: 343px;
      height: 36px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .sign-up-text {
      top: 8px;
      left: 291px;
      color: var(--dl-color-green-primary);
      height: auto;
      position: absolute;
      text-align: right;
      line-height: normal;
      text-decoration: none;
    }
    .sign-up-text02 {
      top: 8px;
      left: 18px;
      color: var(--dl-color-green-primary);
      height: auto;
      position: absolute;
      text-align: right;
      line-height: normal;
      text-decoration: none;
    }
    .sign-up-text03 {
      left: 126px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: center;
      line-height: normal;
    }
    .sign-up-input-text {
      top: 128px;
      left: 16px;
      width: 343px;
      height: 50px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .sign-up-bg1 {
      top: 0px;
      left: 0px;
      width: 343px;
      height: 50px;
      position: absolute;
    }
    .sign-up-text05 {
      top: 16px;
      left: 16px;
      color: var(--dl-color-gray-03);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .sign-up-input-text1 {
      top: 194px;
      left: 16px;
      width: 343px;
      height: 50px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .sign-up-bg2 {
      top: 0px;
      left: 0px;
      width: 343px;
      height: 50px;
      position: absolute;
    }
    .sign-up-text07 {
      top: 16px;
      left: 16px;
      color: var(--dl-color-gray-03);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .sign-up-input-text2 {
      top: 260px;
      left: 16px;
      width: 343px;
      height: 50px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .sign-up-bg3 {
      top: 0px;
      left: 0px;
      width: 343px;
      height: 50px;
      position: absolute;
    }
    .sign-up-text09 {
      top: 16px;
      left: 16px;
      color: var(--dl-color-gray-03);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .sign-up-text11 {
      top: 16px;
      left: 248px;
      color: var(--dl-color-green-primary);
      height: auto;
      position: absolute;
      font-size: 16px;
      font-style: Medium;
      text-align: right;
      font-family: Inter;
      font-weight: 500;
      line-height: normal;
      font-stretch: normal;
      text-decoration: none;
    }
    .sign-up-button-primary {
      gap: 12px;
      right: 1px;
      width: 343px;
      bottom: 60px;
      display: flex;
      padding: 16px 32px;
      position: absolute;
      align-items: center;
      flex-shrink: 0;
      border-radius: 100px;
      flex-direction: column;
      text-decoration: none;
      background-color: var(--dl-color-green-primary);
    }
    .sign-up-text13 {
      color: var(--dl-color-default-white);
      height: auto;
      text-align: center;
      line-height: normal;
    }
    
    </style>
  </head>
  <body>
    <div>
      <!-- <link href="./sign-up.css" rel="stylesheet" /> -->

      <div class="sign-up-container">
        <div class="sign-up-sign-up">
          <div class="sign-up-i-o-status-bar-black">
            <div class="sign-up-bg">
              <img
                alt="NotchI151"
                src="public/external/notchi151-zslr.svg"
                class="sign-up-notch"
              />
            </div>
            <div class="sign-up-right-side">
              <div class="sign-up-battery">
                <img
                  alt="RectangleI151"
                  src="public/external/rectanglei151-jlbn.svg"
                  class="sign-up-rectangle"
                />
                <img
                  alt="CombinedShapeI151"
                  src="public/external/combinedshapei151-u40d.svg"
                  class="sign-up-combined-shape"
                />
                <img
                  alt="RectangleI151"
                  src="public/external/rectanglei151-okg.svg"
                  class="sign-up-rectangle1"
                />
              </div>
              <img
                alt="WifiI151"
                src="public/external/wifii151-cfq.svg"
                class="sign-up-wifi"
              />
              <img
                alt="MobileSignalI151"
                src="public/external/mobilesignali151-d6xd.svg"
                class="sign-up-mobile-signal"
              />
            </div>
            <div class="sign-up-left-side">
              <img
                alt="SVG941I151"
                src="public/external/svg941i151-lhu5.svg"
                class="sign-up-svg941"
              />
            </div>
          </div>
          <div class="sign-up-page-header">
            <a href="sign-in.html" class="sign-up-text UI-16Medium">
              <span>Sign In</span>
            </a>
            <a href="cari-barang-home.html" class="sign-up-text02">x</a>
            <span class="sign-up-text03 UI-30Semi"><span>Sign Up</span></span>
          </div>
          <div class="sign-up-input-text">
            <div>
              <style>
                .search-input {
                  width: 150%;
                  border: 1px solid #121212;
                  border-radius: 10px;
                  padding: 5px;
                  background-color: #f2f2f2;
                }
              </style>
              
              <form action="/cari-barang.html" method="get">
                <input type="text" name="query" placeholder="Nama" class="search-input">
              </form>
              </div>
            {{-- <span class="sign-up-text05 UI-16Medium"><span>Nama</span></span> --}}
          </div>
          <div class="sign-up-input-text1">
            <div>
              <style>
                .search-input {
                  width: 150%;
                  border: 1px solid #121212;
                  border-radius: 10px;
                  padding: 5px;
                  background-color: #f2f2f2;
                }
              </style>
              
              <form action="/cari-barang.html" method="get">
                <input type="text" name="query" placeholder="Email" class="search-input">
              </form>
              </div>
            {{-- <span class="sign-up-text07 UI-16Medium"><span>Email</span></span> --}}
          </div>
          <div class="sign-up-input-text2">
            <div>
              <style>
                .search-input {
                  width: 150%;
                  border: 1px solid #121212;
                  border-radius: 10px;
                  padding: 5px;
                  background-color: #ffffff;
                  height: 80%;
                }
              </style>
              
              <form action="/cari-barang.html" method="get">
                <input type="text" name="query" placeholder="Password" class="search-input">
              </form>
              </div>
            <span class="sign-up-text09 UI-16Medium">
              {{-- <span>Password</span> --}}
            </span>
            {{-- <span class="sign-up-text11"><span>Tunjukkan</span></span> --}}
          </div>
          <a href="sign-in.html" class="sign-up-button-primary">
            <span class="sign-up-text13 UI-16Semi"><span>Sign Up</span></span>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
