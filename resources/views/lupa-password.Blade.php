<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lupa-Password - EMarket</title>
    <meta property="og:title" content="Lupa-Password - EMarket" />
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
      .lupa-password-container {
      width: 100%;
      display: flex;
      overflow: auto;
      min-height: 100vh;
      align-items: center;
      flex-direction: column;
    }
    .lupa-password-lupa-password {
      width: 366px;
      height: 812px;
      display: flex;
      overflow: hidden;
      position: relative;
      align-items: flex-start;
      flex-shrink: 0;
      background-color: var(--dl-color-default-white);
    }
    .lupa-password-i-o-status-bar-black {
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
    .lupa-password-bg {
      top: -2px;
      left: 78px;
      width: 219px;
      height: 30px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .lupa-password-notch {
      top: 0px;
      left: 0px;
      width: 219px;
      height: 30px;
      position: absolute;
    }
    .lupa-password-right-side {
      top: 17.3306884765625px;
      left: 293.6666564941406px;
      width: 66.661376953125px;
      height: 11.336018562316895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .lupa-password-battery {
      top: 0.002685546875px;
      left: 42.333343505859375px;
      width: 24.32803726196289px;
      height: 11.333333015441895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .lupa-password-rectangle {
      top: 0px;
      left: 0px;
      width: 22px;
      height: 11px;
      opacity: 0.35;
      position: absolute;
    }
    .lupa-password-combined-shape {
      top: 3.6666667461395264px;
      left: 23px;
      width: 1px;
      height: 4px;
      opacity: 0.40;
      position: absolute;
    }
    .lupa-password-rectangle1 {
      top: 1.9999998807907104px;
      left: 2px;
      width: 18px;
      height: 7px;
      position: absolute;
    }
    .lupa-password-wifi {
      top: 0px;
      left: 22.027069091796875px;
      width: 15px;
      height: 11px;
      position: absolute;
    }
    .lupa-password-mobile-signal {
      top: 0.3359375px;
      left: 0px;
      width: 17px;
      height: 11px;
      position: absolute;
    }
    .lupa-password-left-side {
      top: 17.16748046875px;
      left: 33.453514099121094px;
      width: 28.42616844177246px;
      height: 11.0888671875px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .lupa-password-svg941 {
      top: 0px;
      left: 0px;
      width: 28px;
      height: 11px;
      position: absolute;
    }
    .lupa-password-page-header {
      top: 60px;
      left: 16px;
      width: 343px;
      height: 36px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .lupa-password-text {
      top: 8px;
      left: 300px;
      color: var(--dl-color-green-primary);
      height: auto;
      position: absolute;
      text-align: right;
      line-height: normal;
      text-decoration: none;
    }
    .lupa-password-text02 {
      left: 81px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: center;
      line-height: normal;
    }
    .lupa-password-icon-x {
      top: 16px;
      left: -0.31370848417282104px;
      width: 16px;
      height: 16px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .lupa-password-line3 {
      top: 6.363961596113938px;
      left: 6.363961596113938px;
      width: 17px;
      height: 1px;
      position: absolute;
    }
    .lupa-password-line4 {
      top: 4.949747383594513px;
      left: 17.67766922712326px;
      width: 17px;
      height: 1px;
      position: absolute;
    }
    .lupa-password-input-text {
      top: 194px;
      left: 16px;
      width: 343px;
      height: 50px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .lupa-password-bg1 {
      top: 0px;
      left: 0px;
      width: 343px;
      height: 50px;
      position: absolute;
    }
    .lupa-password-text04 {
      top: 16px;
      left: 16px;
      color: var(--dl-color-gray-03);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .lupa-password-input-text1 {
      top: 260px;
      left: 16px;
      width: 343px;
      height: 50px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .lupa-password-bg2 {
      top: 0px;
      left: 0px;
      width: 343px;
      height: 50px;
      position: absolute;
    }
    .lupa-password-text06 {
      top: 16px;
      left: 16px;
      color: var(--dl-color-gray-03);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .lupa-password-text08 {
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
    .lupa-password-input-text2 {
      top: 129px;
      left: 16px;
      width: 343px;
      height: 50px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .lupa-password-bg3 {
      top: 0px;
      left: 0px;
      width: 343px;
      height: 50px;
      position: absolute;
    }
    .lupa-password-text10 {
      top: 16px;
      left: 16px;
      color: var(--dl-color-gray-03);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .lupa-password-text12 {
      top: 16px;
      left: 244px;
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
    .lupa-password-button-primary {
      gap: 12px;
      left: 10px;
      width: 343px;
      bottom: 89px;
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
    .lupa-password-text14 {
      color: var(--dl-color-default-white);
      height: auto;
      text-align: center;
      line-height: normal;
    }
    
    </style>
  </head>
  <body>
    <div>
      <!-- <link href="./lupa-password.css" rel="stylesheet" /> -->

      <div class="lupa-password-container">
        <div class="lupa-password-lupa-password">
          <div class="lupa-password-i-o-status-bar-black">
            <div class="lupa-password-bg">
              <img
                alt="NotchI447"
                src="public/external/notchi447-6at.svg"
                class="lupa-password-notch"
              />
            </div>
            <div class="lupa-password-right-side">
              <div class="lupa-password-battery">
                <img
                  alt="RectangleI447"
                  src="public/external/rectanglei447-c6l.svg"
                  class="lupa-password-rectangle"
                />
                <img
                  alt="CombinedShapeI447"
                  src="public/external/combinedshapei447-a7qu.svg"
                  class="lupa-password-combined-shape"
                />
                <img
                  alt="RectangleI447"
                  src="public/external/rectanglei447-cq0h.svg"
                  class="lupa-password-rectangle1"
                />
              </div>
              <img
                alt="WifiI447"
                src="public/external/wifii447-1cp.svg"
                class="lupa-password-wifi"
              />
              <img
                alt="MobileSignalI447"
                src="public/external/mobilesignali447-dnqi.svg"
                class="lupa-password-mobile-signal"
              />
            </div>
            <div class="lupa-password-left-side">
              <img
                alt="SVG941I447"
                src="public/external/svg941i447-hrpxf.svg"
                class="lupa-password-svg941"
              />
            </div>
          </div>
          <div class="lupa-password-page-header">
            <a href="sign-in.html" class="lupa-password-text UI-16Medium">
              <span>Login</span>
            </a>
            <span class="lupa-password-text02 UI-30Semi">
              <span>Lupa Password</span>
            </span>
            <div class="lupa-password-icon-x">
              <img
                alt="Line3I447"
                src="public/external/line3i447-mql4.svg"
                class="lupa-password-line3"
              />
              <img
                alt="Line4I447"
                src="public/external/line4i447-qki7.svg"
                class="lupa-password-line4"
              />
            </div>
          </div>
          <div class="lupa-password-input-text">
            <img
              alt="BGI447"
              src="public/external/bgi447-rzrc.svg"
              class="lupa-password-bg1"
            />
            <span class="lupa-password-text04 UI-16Medium">
              <span>Kode Verifikasi</span>
            </span>
          </div>
          <div class="lupa-password-input-text1">
            <img
              alt="BGI447"
              src="public/external/bgi447-pmzs.svg"
              class="lupa-password-bg2"
            />
            <span class="lupa-password-text06 UI-16Medium">
              <span>Password</span>
            </span>
            <span class="lupa-password-text08"><span>Tunjukkan</span></span>
          </div>
          <div class="lupa-password-input-text2">
            <img
              alt="BGI447"
              src="public/external/bgi447-54yq.svg"
              class="lupa-password-bg3"
            />
            <span class="lupa-password-text10 UI-16Medium">
              <span>Email</span>
            </span>
            <span class="lupa-password-text12"><span>Kirim Kode</span></span>
          </div>
          <a href="sign-in.html" class="lupa-password-button-primary">
            <span class="lupa-password-text14 UI-16Semi">
              <span>Ganti Password</span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
