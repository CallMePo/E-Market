<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Buat-Toko - EMarket</title>
    <meta property="og:title" content="Buat-Toko - EMarket" />
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
      .buat-toko-container {
    width: 100%;
    display: flex;
    overflow: auto;
    min-height: 100vh;
    align-items: center;
    flex-direction: column;
  }
  
  .buat-toko-buattoko {
    width: 398px;
    height: 812px;
    display: flex;
    overflow: hidden;
    position: relative;
    align-items: flex-start;
    flex-shrink: 0;
    background-color: var(--dl-color-default-white);
  }
  
  .buat-toko-section-hot-deals {
    top: 318px;
    left: 133px;
    width: 110px;
    height: 177px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-baru {
    top: 0px;
    left: 0px;
    width: 110px;
    height: 177px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .buat-toko-navlink {
    display: contents;
  }
  
  .buat-toko-rectangle30 {
    top: 0px;
    left: -100px;
    width: 310px;
    height: 110px;
    position: absolute;
    border-radius: 80px;
    text-decoration: none;
  }
  
  .buat-toko-text {
    top: 44px;
    left: -2px;
    color: var(--dl-color-gray-01);
    width: 110px;
    height: auto;
    position: absolute;
    font-size: 16px;
    font-style: normal;
    text-align: center;
    font-family: Inter;
    font-weight: 700;
    line-height: normal;
  }
  
  .buat-toko-text1 {
    top: 124px;
    left: 54px;
    color: rgba(0, 0, 0, 1);
    height: auto;
    position: absolute;
    text-align: center;
    line-height: normal;
  }
  
  .buat-toko-text3 {
    top: 169px;
    left: 30px;
    color: rgba(0, 0, 0, 1);
    width: 316px;
    height: auto;
    position: absolute;
    text-align: center;
    line-height: normal;
  }
  
  .buat-toko-i-o-status-bar-black {
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
  
  .buat-toko-bg {
    top: -2px;
    left: 78px;
    width: 219px;
    height: 30px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-notch {
    top: 0px;
    left: 0px;
    width: 219px;
    height: 30px;
    position: absolute;
  }
  
  .buat-toko-right-side {
    top: 17.3306884765625px;
    left: 293.6666564941406px;
    width: 66.661376953125px;
    height: 11.336018562316895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-battery {
    top: 0.002685546875px;
    left: 42.333343505859375px;
    width: 24.32803726196289px;
    height: 11.333333015441895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-rectangle {
    top: 0px;
    left: 0px;
    width: 22px;
    height: 11px;
    opacity: 0.35;
    position: absolute;
  }
  
  .buat-toko-combined-shape {
    top: 3.6666667461395264px;
    left: 23px;
    width: 1px;
    height: 4px;
    opacity: 0.40;
    position: absolute;
  }
  
  .buat-toko-rectangle1 {
    top: 1.9999998807907104px;
    left: 2px;
    width: 18px;
    height: 7px;
    position: absolute;
  }
  
  .buat-toko-wifi {
    top: 0px;
    left: 22.027069091796875px;
    width: 15px;
    height: 11px;
    position: absolute;
  }
  
  .buat-toko-mobile-signal {
    top: 0.3359375px;
    left: 0px;
    width: 17px;
    height: 11px;
    position: absolute;
  }
  
  .buat-toko-left-side {
    top: 17.16748046875px;
    left: 33.453514099121094px;
    width: 28.42616844177246px;
    height: 11.0888671875px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-svg941 {
    top: 0px;
    left: 0px;
    width: 28px;
    height: 11px;
    position: absolute;
  }
  
  .buat-toko-i-o-status-bar-black1 {
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
  
  .buat-toko-bg1 {
    top: -2px;
    left: 78px;
    width: 219px;
    height: 30px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-notch1 {
    top: 0px;
    left: 0px;
    width: 219px;
    height: 30px;
    position: absolute;
  }
  
  .buat-toko-right-side1 {
    top: 17.3306884765625px;
    left: 293.6666564941406px;
    width: 66.661376953125px;
    height: 11.336018562316895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-battery1 {
    top: 0.002685546875px;
    left: 42.333343505859375px;
    width: 24.32803726196289px;
    height: 11.333333015441895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-rectangle2 {
    top: 0px;
    left: 0px;
    width: 22px;
    height: 11px;
    opacity: 0.35;
    position: absolute;
  }
  
  .buat-toko-combined-shape1 {
    top: 3.6666667461395264px;
    left: 23px;
    width: 1px;
    height: 4px;
    opacity: 0.40;
    position: absolute;
  }
  
  .buat-toko-rectangle3 {
    top: 1.9999998807907104px;
    left: 2px;
    width: 18px;
    height: 7px;
    position: absolute;
  }
  
  .buat-toko-wifi1 {
    top: 0px;
    left: 22.027069091796875px;
    width: 15px;
    height: 11px;
    position: absolute;
  }
  
  .buat-toko-mobile-signal1 {
    top: 0.3359375px;
    left: 0px;
    width: 17px;
    height: 11px;
    position: absolute;
  }
  
  .buat-toko-left-side1 {
    top: 17.16748046875px;
    left: 33.453514099121094px;
    width: 28.42616844177246px;
    height: 11.0888671875px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-svg9411 {
    top: 0px;
    left: 0px;
    width: 28px;
    height: 11px;
    position: absolute;
  }
  
  .buat-toko-i-o-bottom-bar-tabs {
    top: 729px;
    left: 0px;
    width: 375px;
    height: 83.5px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .buat-toko-i-phone-ui {
    top: 0.5px;
    left: 0px;
    width: 375px;
    height: 83px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
    background-color: rgba(250, 250, 250, 1);
  }
  
  .buat-toko-home-indicator {
    top: 69px;
    left: 120px;
    width: 134px;
    height: 5px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
    background-color: rgba(0, 0, 0, 1);
  }
  
  .buat-toko-tabs {
    top: 15px;
    left: 26px;
    width: 320px;
    height: 32px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-navlink1 {
    display: contents;
  }
  
  .buat-toko-rectangle9 {
    top: 0px;
    left: 0px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  
  .buat-toko-navlink2 {
    display: contents;
  }
  
  .buat-toko-rectangle10 {
    top: 0px;
    left: 72px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  
  .buat-toko-navlink3 {
    display: contents;
  }
  
  .buat-toko-rectangle11 {
    top: 0px;
    left: 144px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  
  .buat-toko-navlink4 {
    display: contents;
  }
  
  .buat-toko-rectangle12 {
    top: 0px;
    left: 216px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  
  .buat-toko-navlink5 {
    display: contents;
  }
  
  .buat-toko-rectangle13 {
    top: 0px;
    left: 288px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  
  .buat-toko-logo {
    top: 18px;
    left: 34.19921875px;
    width: 307.80078125px;
    height: 24px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-shape {
    top: 3px;
    left: 0px;
    width: 16px;
    height: 17px;
    position: absolute;
  }
  
  .buat-toko-shape1 {
    top: 3px;
    left: 71.80078125px;
    width: 16px;
    height: 18px;
    position: absolute;
  }
  
  .buat-toko-s-miconsoutlineedit4 {
    top: 0px;
    left: 211.80078125px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  
  .buat-toko-s-miconsoutlineuser1 {
    top: 0px;
    left: 139.80078125px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  
  .buat-toko-s-miconsoutlinecoin {
    top: 0px;
    left: 283.80078125px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  
  .buat-toko-top-divider {
    top: 0.5px;
    left: 0px;
    width: 375px;
    height: 0px;
    position: absolute;
  }
  </style>
  </head>
  <body>
    <div>
      <!-- <link href="./buat-toko.css" rel="stylesheet" /> -->

      <div class="buat-toko-container">
        <div class="buat-toko-buattoko">
          <div class="buat-toko-section-hot-deals">
            <div class="buat-toko-baru">
              <a href="buat-toko-2.html" class="buat-toko-navlink">
                <img
                  alt="Rectangle305267"
                  src="public/external/rectangle305267-aynk-200h.png"
                  class="buat-toko-rectangle30"
                />
              </a>
              <span class="buat-toko-text">Buat Toko</span>
            </div>
          </div>
          <span class="buat-toko-text1 UI-30Semi">
            <span>Tingkatkan penjualan!</span>
          </span>
          <span class="buat-toko-text3 UI-16Regular">
            <span>
              Daftarkan tokomu sekarang di E-Pasar secara gratis dan tarik
              pelanggan baru dari seluruh penjuru Indonesia serta kelola tokomu
              dengan mudah!
            </span>
          </span>
          <div class="buat-toko-i-o-status-bar-black">
            <div class="buat-toko-bg">
              <img
                alt="NotchI526"
                src="public/external/notchi526-upun.svg"
                class="buat-toko-notch"
              />
            </div>
            <div class="buat-toko-right-side">
              <div class="buat-toko-battery">
                <img
                  alt="RectangleI526"
                  src="public/external/rectanglei526-lg0n.svg"
                  class="buat-toko-rectangle"
                />
                <img
                  alt="CombinedShapeI526"
                  src="public/external/combinedshapei526-31r.svg"
                  class="buat-toko-combined-shape"
                />
                <img
                  alt="RectangleI526"
                  src="public/external/rectanglei526-p6ph.svg"
                  class="buat-toko-rectangle1"
                />
              </div>
              <img
                alt="WifiI526"
                src="public/external/wifii526-hfbm.svg"
                class="buat-toko-wifi"
              />
              <img
                alt="MobileSignalI526"
                src="public/external/mobilesignali526-xtjc.svg"
                class="buat-toko-mobile-signal"
              />
            </div>
            <div class="buat-toko-left-side">
              <img
                alt="SVG941I526"
                src="public/external/svg941i526-omo6.svg"
                class="buat-toko-svg941"
              />
            </div>
          </div>
          <div class="buat-toko-i-o-status-bar-black1">
            <div class="buat-toko-bg1">
              <img
                alt="NotchI526"
                src="public/external/notchi526-mf8p.svg"
                class="buat-toko-notch1"
              />
            </div>
            <div class="buat-toko-right-side1">
              <div class="buat-toko-battery1">
                <img
                  alt="RectangleI526"
                  src="public/external/rectanglei526-v48.svg"
                  class="buat-toko-rectangle2"
                />
                <img
                  alt="CombinedShapeI526"
                  src="public/external/combinedshapei526-xsur.svg"
                  class="buat-toko-combined-shape1"
                />
                <img
                  alt="RectangleI526"
                  src="public/external/rectanglei526-mo1.svg"
                  class="buat-toko-rectangle3"
                />
              </div>
              <img
                alt="WifiI526"
                src="public/external/wifii526-p03h.svg"
                class="buat-toko-wifi1"
              />
              <img
                alt="MobileSignalI526"
                src="public/external/mobilesignali526-piq.svg"
                class="buat-toko-mobile-signal1"
              />
            </div>
            <div class="buat-toko-left-side1">
              <img
                alt="SVG941I526"
                src="public/external/svg941i526-3m5.svg"
                class="buat-toko-svg9411"
              />
            </div>
          </div>
          <div class="buat-toko-i-o-bottom-bar-tabs">
            <div class="buat-toko-i-phone-ui">
              <div class="buat-toko-home-indicator"></div>
            </div>
            <div class="buat-toko-tabs">
              <a href="{{ url('/cariBarangHome') }}" class="buat-toko-navlink1">
                <img
                  alt="Rectangle95267"
                  src="public/external/rectangle95267-p91k-200h.png"
                  class="buat-toko-rectangle9"
                />
              </a>
              <a href="{{ url('/cariTokoHome') }}" class="buat-toko-navlink2">
                <img
                  alt="Rectangle105267"
                  src="public/external/rectangle105267-v2qf-200h.png"
                  class="buat-toko-rectangle10"
                />
              </a>
              <a href="{{ url('/pengaturanAkun') }}" class="buat-toko-navlink3">
                <img
                  alt="Rectangle115267"
                  src="public/external/rectangle115267-ao0fq-200h.png"
                  class="buat-toko-rectangle11"
                />
              </a>
              <a href="{{ url('/etalaseTokoHome') }}" class="buat-toko-navlink4">
                <img
                  alt="Rectangle125267"
                  src="public/external/rectangle125267-ar3a-200h.png"
                  class="buat-toko-rectangle12"
                />
              </a>
              <a href="{{ url('/hargaBarangHome') }}" class="buat-toko-navlink5">
                <img
                  alt="Rectangle135267"
                  src="public/external/rectangle135267-2sx8-200h.png"
                  class="buat-toko-rectangle13"
                />
              </a>
            </div>
            <div class="buat-toko-logo">
              <img
                alt="shape5267"
                src="public/external/shape5267-ggn.svg"
                class="buat-toko-shape"
              />
              <img
                alt="shape5267"
                src="public/external/shape5267-dt8b.svg"
                class="buat-toko-shape1"
              />
              <img
                alt="SWMiconsoutlineedit45267"
                src="public/external/swmiconsoutlineedit45267-yl1.svg"
                class="buat-toko-s-miconsoutlineedit4"
              />
              <img
                alt="SWMiconsoutlineuser15267"
                src="public/external/swmiconsoutlineuser15267-c06q.svg"
                class="buat-toko-s-miconsoutlineuser1"
              />
              <img
                alt="SWMiconsoutlinecoin5267"
                src="public/external/swmiconsoutlinecoin5267-kgv9.svg"
                class="buat-toko-s-miconsoutlinecoin"
              />
            </div>
            <img
              alt="TopDivider5267"
              src="public/external/topdivider5267-cdf-200h.png"
              class="buat-toko-top-divider"
            />
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
