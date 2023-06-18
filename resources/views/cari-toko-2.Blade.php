<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cari-Toko-2 - EMarket</title>
    <meta property="og:title" content="Cari-Toko-2 - EMarket" />
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
      .cari-toko2-container {
    width: 100%;
    display: flex;
    overflow: auto;
    min-height: 100vh;
    align-items: center;
    flex-direction: column;
  }
  .cari-toko2-cari-toko {
    width: 382px;
    height: 812px;
    display: flex;
    overflow: hidden;
    position: relative;
    align-items: flex-start;
    flex-shrink: 0;
    background-color: var(--dl-color-default-white);
  }
  .cari-toko2-i-o-status-bar-black {
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
  .cari-toko2-bg {
    top: -2px;
    left: 78px;
    width: 219px;
    height: 30px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cari-toko2-notch {
    top: 0px;
    left: 0px;
    width: 219px;
    height: 30px;
    position: absolute;
  }
  .cari-toko2-right-side {
    top: 17.3306884765625px;
    left: 293.6666564941406px;
    width: 66.661376953125px;
    height: 11.336018562316895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cari-toko2-battery {
    top: 0.002685546875px;
    left: 42.333343505859375px;
    width: 24.32803726196289px;
    height: 11.333333015441895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cari-toko2-rectangle {
    top: 0px;
    left: 0px;
    width: 22px;
    height: 11px;
    opacity: 0.35;
    position: absolute;
  }
  .cari-toko2-combined-shape {
    top: 3.6666667461395264px;
    left: 23px;
    width: 1px;
    height: 4px;
    opacity: 0.40;
    position: absolute;
  }
  .cari-toko2-rectangle1 {
    top: 1.9999998807907104px;
    left: 2px;
    width: 18px;
    height: 7px;
    position: absolute;
  }
  .cari-toko2-wifi {
    top: 0px;
    left: 22.027069091796875px;
    width: 15px;
    height: 11px;
    position: absolute;
  }
  .cari-toko2-mobile-signal {
    top: 0.3359375px;
    left: 0px;
    width: 17px;
    height: 11px;
    position: absolute;
  }
  .cari-toko2-left-side {
    top: 17.16748046875px;
    left: 33.453514099121094px;
    width: 28.42616844177246px;
    height: 11.0888671875px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cari-toko2-svg941 {
    top: 0px;
    left: 0px;
    width: 28px;
    height: 11px;
    position: absolute;
  }
  .cari-toko2-page-header {
    top: 60px;
    left: 16px;
    width: 343px;
    height: 36px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cari-toko2-text {
    left: 116px;
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: center;
    line-height: normal;
  }
  .cari-toko2-text02 {
    top: 8px;
    color: var(--dl-color-green-primary);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
    text-decoration: none;
  }
  .cari-toko2-input-search {
    top: 128px;
    left: 16px;
    width: 343px;
    height: 50px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cari-toko2-bg1 {
    top: 0px;
    left: 0px;
    width: 343px;
    height: 50px;
    position: absolute;
  }
  .cari-toko2-text04 {
    top: 16px;
    left: 16px;
    color: var(--dl-color-gray-03);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cari-toko2-navlink {
    display: contents;
  }
  .cari-toko2-content-search-result  {
    top: 50px;
    left: 0px;
    width: 326px;
    height: 0px;
    display: block;
    position: absolute;
    align-items: flex-start;
    text-decoration: none;
    margin-top: 130px
    
  }

  .cari-toko2-text06 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cari-toko2-divider {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  .cari-toko2-content-search-result1 {
    top: 259px;
    left: 33px;
    width: 326px;
    height: 33px;
    display: flex;
    position: absolute;
    align-items: flex-start;
  }
  .cari-toko2-text08 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cari-toko2-divider1 {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  .cari-toko2-content-search-result2 {
    top: 308px;
    left: 33px;
    width: 326px;
    height: 33px;
    display: flex;
    position: absolute;
    align-items: flex-start;
  }
  .cari-toko2-text10 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cari-toko2-divider2 {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  .cari-toko2-content-search-result3 {
    top: 357px;
    left: 33px;
    width: 326px;
    height: 33px;
    display: flex;
    position: absolute;
    align-items: flex-start;
  }
  .cari-toko2-text12 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cari-toko2-divider3 {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  .cari-toko2-content-search-result4 {
    top: 406px;
    left: 33px;
    width: 326px;
    height: 33px;
    display: flex;
    position: absolute;
    align-items: flex-start;
  }
  .cari-toko2-text14 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cari-toko2-divider4 {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  .cari-toko2-content-search-result5 {
    top: 455px;
    left: 33px;
    width: 326px;
    height: 33px;
    display: flex;
    position: absolute;
    align-items: flex-start;
  }
  .cari-toko2-text16 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cari-toko2-divider5 {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  .cari-toko2-i-o-bottom-bar-tabs {
    top: 729px;
    left: 0px;
    width: 375px;
    height: 83.5px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cari-toko2-i-phone-ui {
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
  .cari-toko2-home-indicator {
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
  .cari-toko2-tabs {
    top: 15px;
    left: 26px;
    width: 320px;
    height: 32px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cari-toko2-rectangle9 {
    top: 0px;
    left: 0px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  .cari-toko2-rectangle10 {
    top: 0px;
    left: 72px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  .cari-toko2-rectangle11 {
    top: 0px;
    left: 144px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  .cari-toko2-rectangle12 {
    top: 0px;
    left: 216px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  .cari-toko2-rectangle13 {
    top: 0px;
    left: 288px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  .cari-toko2-top-divider {
    top: 0.5px;
    left: 0px;
    width: 375px;
    height: 0px;
    position: absolute;
  }
  .cari-toko2-i-o-bottom-bar-tabs1 {
    top: 729px;
    left: 0px;
    width: 375px;
    height: 83.5px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cari-toko2-i-phone-ui1 {
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
  .cari-toko2-home-indicator1 {
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
  .cari-toko2-tabs1 {
    top: 15px;
    left: 26px;
    width: 320px;
    height: 32px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cari-toko2-navlink1 {
    display: contents;
  }
  .cari-toko2-rectangle91 {
    top: 0px;
    left: 0px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  .cari-toko2-navlink2 {
    display: contents;
  }
  .cari-toko2-rectangle101 {
    top: 0px;
    left: 72px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  .cari-toko2-navlink3 {
    display: contents;
  }
  .cari-toko2-rectangle111 {
    top: 0px;
    left: 144px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  .cari-toko2-navlink4 {
    display: contents;
  }
  .cari-toko2-rectangle121 {
    top: 0px;
    left: 216px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  .cari-toko2-navlink5 {
    display: contents;
  }
  .cari-toko2-rectangle131 {
    top: 0px;
    left: 288px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  .cari-toko2-top-divider1 {
    top: 0.5px;
    left: 0px;
    width: 375px;
    height: 0px;
    position: absolute;
  }
  .cari-toko2-s-miconsoutlinecart2 {
    top: 748px;
    left: 30px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  .cari-toko2-s-miconsoutlinelocation1 {
    top: 748px;
    left: 102px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  .cari-toko2-s-miconsoutlineedit4 {
    top: 748px;
    left: 246px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  .cari-toko2-s-miconsoutlineuser1 {
    top: 748px;
    left: 174px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  .cari-toko2-s-miconsoutlinecoin {
    top: 748px;
    left: 318px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  
    </style>
  </head>
  <body>
    <div>
      <!-- <link href="./cari-toko-2.css" rel="stylesheet" /> -->

      <div class="cari-toko2-container">
        <div class="cari-toko2-cari-toko">
          <div class="cari-toko2-i-o-status-bar-black">
            <div class="cari-toko2-bg">
              <img
                alt="NotchI467"
                src="public/external/notchi467-9srf.svg"
                class="cari-toko2-notch"
              />
            </div>
            <div class="cari-toko2-right-side">
              <div class="cari-toko2-battery">
                <img
                  alt="RectangleI467"
                  src="public/external/rectanglei467-59kg.svg"
                  class="cari-toko2-rectangle"
                />
                <img
                  alt="CombinedShapeI467"
                  src="public/external/combinedshapei467-v8i.svg"
                  class="cari-toko2-combined-shape"
                />
                <img
                  alt="RectangleI467"
                  src="public/external/rectanglei467-nro.svg"
                  class="cari-toko2-rectangle1"
                />
              </div>
              <img
                alt="WifiI467"
                src="public/external/wifii467-wogi.svg"
                class="cari-toko2-wifi"
              />
              <img
                alt="MobileSignalI467"
                src="public/external/mobilesignali467-bk2.svg"
                class="cari-toko2-mobile-signal"
              />
            </div>
            <div class="cari-toko2-left-side">
              <img
                alt="SVG941I467"
                src="public/external/svg941i467-nsdh.svg"
                class="cari-toko2-svg941"
              />
            </div>
          </div>
          <div class="cari-toko2-page-header">
            <span class="cari-toko2-text UI-30Semi">
              <span>Cari Toko</span>
            </span>
            <a href="{{ url('/cariTokoHome') }}" class="cari-toko2-text02 UI-16Medium">
              <span>Kembali</span>
            </a>
          </div>
          <div class="cari-toko2-input-search">
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
              
              <form action="{{ url('/cariToko') }}" method="GET">
                <input type="search" name="search" placeholder="Cari Toko" class="search-input">
              </form>
              </div>
          </div>
          <a href="#" class="cari-toko2-navlink">
            <div class="cari-toko2-content-search-result">
              @foreach($tokos as $toko)
              <div style="margin-bottom: 30px">
                <span>
                  <span>{{ $toko->namaToko }} <br></span>
                </span>
              </div>
              @endforeach
            </div>
            
          </a>

          <div class="cari-toko2-i-o-bottom-bar-tabs">
            <div class="cari-toko2-i-phone-ui">
              <div class="cari-toko2-home-indicator"></div>
            </div>
            <div class="cari-toko2-tabs">
              <img
                alt="Rectangle9I467"
                src="public/external/rectangle9i467-n6vf-200h.png"
                class="cari-toko2-rectangle9"
              />
              <img
                alt="Rectangle10I467"
                src="public/external/rectangle10i467-yk43-200h.png"
                class="cari-toko2-rectangle10"
              />
              <img
                alt="Rectangle11I467"
                src="public/external/rectangle11i467-aw9va-200h.png"
                class="cari-toko2-rectangle11"
              />
              <img
                alt="Rectangle12I467"
                src="public/external/rectangle12i467-ksmc-200h.png"
                class="cari-toko2-rectangle12"
              />
              <img
                alt="Rectangle13I467"
                src="public/external/rectangle13i467-0lxm-200h.png"
                class="cari-toko2-rectangle13"
              />
            </div>
            <img
              alt="TopDividerI467"
              src="public/external/topdivideri467-0j7-200h.png"
              class="cari-toko2-top-divider"
            />
          </div>
          <div class="cari-toko2-i-o-bottom-bar-tabs1">
            <div class="cari-toko2-i-phone-ui1">
              <div class="cari-toko2-home-indicator1"></div>
            </div>
            <div class="cari-toko2-tabs1">
              <a href="{{ url('/cariBarangHome') }}" class="cari-toko2-navlink1">
                <img
                  alt="Rectangle9I467"
                  src="public/external/rectangle9i467-k7nl-200h.png"
                  class="cari-toko2-rectangle91"
                />
              </a>
              <a href="{{ url('/cariTokoHome') }}" class="cari-toko2-navlink2">
                <img
                  alt="Rectangle10I467"
                  src="public/external/rectangle10i467-zqre-200h.png"
                  class="cari-toko2-rectangle101"
                />
              </a>
              <a href="{{ url('/pengaturanAkun') }}" class="cari-toko2-navlink3">
                <img
                  alt="Rectangle11I467"
                  src="public/external/rectangle11i467-zsoi-200h.png"
                  class="cari-toko2-rectangle111"
                />
              </a>
              <a href="{{ url('/etalaseTokoHome') }}" class="cari-toko2-navlink4">
                <img
                  alt="Rectangle12I467"
                  src="public/external/rectangle12i467-thq-200h.png"
                  class="cari-toko2-rectangle121"
                />
              </a>
              <a href="{{ url('/hargaBarangHome') }}" class="cari-toko2-navlink5">
                <img
                  alt="Rectangle13I467"
                  src="public/external/rectangle13i467-y47b-200h.png"
                  class="cari-toko2-rectangle131"
                />
              </a>
            </div>
            <img
              alt="TopDividerI467"
              src="public/external/topdivideri467-w32d-200h.png"
              class="cari-toko2-top-divider1"
            />
          </div>
          <img
            alt="SWMiconsoutlinecart24673"
            src="public/external/swmiconsoutlinecart24673-t2rq.svg"
            class="cari-toko2-s-miconsoutlinecart2"
          />
          <img
            alt="SWMiconsoutlinelocation14673"
            src="public/external/swmiconsoutlinelocation14673-4rli.svg"
            class="cari-toko2-s-miconsoutlinelocation1"
          />
          <img
            alt="SWMiconsoutlineedit44673"
            src="public/external/swmiconsoutlineedit44673-687e.svg"
            class="cari-toko2-s-miconsoutlineedit4"
          />
          <img
            alt="SWMiconsoutlineuser14673"
            src="public/external/swmiconsoutlineuser14673-og4.svg"
            class="cari-toko2-s-miconsoutlineuser1"
          />
          <img
            alt="SWMiconsoutlinecoin4673"
            src="public/external/swmiconsoutlinecoin4673-g8fqu.svg"
            class="cari-toko2-s-miconsoutlinecoin"
          />
        </div>
      </div>
    </div>
  </body>
</html>
