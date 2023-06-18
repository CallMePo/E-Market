<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cari-Pasar-2 - EMarket</title>
    <meta property="og:title" content="Cari-Pasar-2 - EMarket" />
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
      .cari-pasar2-container {
    width: 100%;
    display: flex;
    overflow: auto;
    min-height: 100vh;
    align-items: center;
    flex-direction: column;
  }
  
  .cari-pasar2-cari-pasar2 {
    width: 367px;
    height: 812px;
    display: flex;
    overflow: hidden;
    position: relative;
    align-items: flex-start;
    flex-shrink: 0;
    background-color: var(--dl-color-default-white);
  }
  
  .cari-pasar2-i-o-status-bar-black {
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
  
  .cari-pasar2-bg {
    top: -2px;
    left: 78px;
    width: 219px;
    height: 30px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .cari-pasar2-notch {
    top: 0px;
    left: 0px;
    width: 219px;
    height: 30px;
    position: absolute;
  }
  
  .cari-pasar2-right-side {
    top: 17.3306884765625px;
    left: 293.6666564941406px;
    width: 66.661376953125px;
    height: 11.336018562316895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .cari-pasar2-battery {
    top: 0.002685546875px;
    left: 42.333343505859375px;
    width: 24.32803726196289px;
    height: 11.333333015441895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .cari-pasar2-rectangle {
    top: 0px;
    left: 0px;
    width: 22px;
    height: 11px;
    opacity: 0.35;
    position: absolute;
  }
  
  .cari-pasar2-combined-shape {
    top: 3.6666667461395264px;
    left: 23px;
    width: 1px;
    height: 4px;
    opacity: 0.40;
    position: absolute;
  }
  
  .cari-pasar2-rectangle1 {
    top: 1.9999998807907104px;
    left: 2px;
    width: 18px;
    height: 7px;
    position: absolute;
  }
  
  .cari-pasar2-wifi {
    top: 0px;
    left: 22.027069091796875px;
    width: 15px;
    height: 11px;
    position: absolute;
  }
  
  .cari-pasar2-mobile-signal {
    top: 0.3359375px;
    left: 0px;
    width: 17px;
    height: 11px;
    position: absolute;
  }
  
  .cari-pasar2-left-side {
    top: 17.16748046875px;
    left: 33.453514099121094px;
    width: 28.42616844177246px;
    height: 11.0888671875px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .cari-pasar2-svg941 {
    top: 0px;
    left: 0px;
    width: 28px;
    height: 11px;
    position: absolute;
  }
  
  .cari-pasar2-page-header {
    top: 60px;
    left: 16px;
    width: 343px;
    height: 36px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .cari-pasar2-text {
    left: 111px;
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: center;
    line-height: normal;
  }
  
  .cari-pasar2-text02 {
    top: 8px;
    color: var(--dl-color-green-primary);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
    text-decoration: none;
  }
  
  .cari-pasar2-input-search {
    top: 128px;
    left: 16px;
    width: 343px;
    height: 50px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .cari-pasar2-bg1 {
    top: 0px;
    left: 0px;
    width: 343px;
    height: 50px;
    position: absolute;
  }
  
  .cari-pasar2-text04 {
    top: 16px;
    left: 16px;
    color: var(--dl-color-gray-03);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-pasar2-navlink {
    display: contents;
  }
  
  .cari-pasar2-content-search-result {
    top: 210px;
    left: 33px;
    width: 326px;
    height: 33px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    text-decoration: none;
  }
  
  .cari-pasar2-text06 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-pasar2-divider {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  
  .cari-pasar2-content-search-result1 {
    top: 259px;
    left: 33px;
    width: 326px;
    height: 33px;
    display: flex;
    position: absolute;
    align-items: flex-start;
  }
  
  .cari-pasar2-text08 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-pasar2-divider1 {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  
  .cari-pasar2-content-search-result2 {
    top: 308px;
    left: 33px;
    width: 326px;
    height: 33px;
    display: flex;
    position: absolute;
    align-items: flex-start;
  }
  
  .cari-pasar2-text10 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-pasar2-divider2 {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  
  .cari-pasar2-content-search-result3 {
    top: 357px;
    left: 33px;
    width: 326px;
    height: 33px;
    display: flex;
    position: absolute;
    align-items: flex-start;
  }
  
  .cari-pasar2-text12 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-pasar2-divider3 {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  
  .cari-pasar2-content-search-result4 {
    top: 406px;
    left: 33px;
    width: 326px;
    height: 33px;
    display: flex;
    position: absolute;
    align-items: flex-start;
  }
  
  .cari-pasar2-text14 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-pasar2-divider4 {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  
  .cari-pasar2-content-search-result5 {
    top: 455px;
    left: 33px;
    width: 326px;
    height: 33px;
    display: flex;
    position: absolute;
    align-items: flex-start;
  }
  
  .cari-pasar2-text16 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-pasar2-divider5 {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  
  .cari-pasar2-i-o-bottom-bar-tabs {
    top: 729px;
    left: 0px;
    width: 375px;
    height: 83.5px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .cari-pasar2-i-phone-ui {
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
  
  .cari-pasar2-home-indicator {
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
  
  .cari-pasar2-tabs {
    top: 15px;
    left: 26px;
    width: 320px;
    height: 32px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .cari-pasar2-rectangle9 {
    top: 0px;
    left: 0px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  
  .cari-pasar2-rectangle10 {
    top: 0px;
    left: 72px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  
  .cari-pasar2-rectangle11 {
    top: 0px;
    left: 144px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  
  .cari-pasar2-rectangle12 {
    top: 0px;
    left: 216px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  
  .cari-pasar2-rectangle13 {
    top: 0px;
    left: 288px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  
  .cari-pasar2-top-divider {
    top: 0.5px;
    left: 0px;
    width: 375px;
    height: 0px;
    position: absolute;
  }
  
  .cari-pasar2-i-o-bottom-bar-tabs1 {
    top: 729px;
    left: 0px;
    width: 375px;
    height: 83.5px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .cari-pasar2-i-phone-ui1 {
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
  
  .cari-pasar2-home-indicator1 {
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
  
  .cari-pasar2-tabs1 {
    top: 15px;
    left: 26px;
    width: 320px;
    height: 32px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .cari-pasar2-navlink1 {
    display: contents;
  }
  
  .cari-pasar2-rectangle91 {
    top: 0px;
    left: 0px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  
  .cari-pasar2-navlink2 {
    display: contents;
  }
  
  .cari-pasar2-rectangle101 {
    top: 0px;
    left: 72px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  
  .cari-pasar2-navlink3 {
    display: contents;
  }
  
  .cari-pasar2-rectangle111 {
    top: 0px;
    left: 144px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  
  .cari-pasar2-navlink4 {
    display: contents;
  }
  
  .cari-pasar2-rectangle121 {
    top: 0px;
    left: 216px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  
  .cari-pasar2-navlink5 {
    display: contents;
  }
  
  .cari-pasar2-rectangle131 {
    top: 0px;
    left: 288px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  
  .cari-pasar2-top-divider1 {
    top: 0.5px;
    left: 0px;
    width: 375px;
    height: 0px;
    position: absolute;
  }
  
  .cari-pasar2-s-miconsoutlinecart2 {
    top: 748px;
    left: 30px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  
  .cari-pasar2-s-miconsoutlinelocation1 {
    top: 748px;
    left: 102px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  
  .cari-pasar2-s-miconsoutlineedit4 {
    top: 748px;
    left: 246px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  
  .cari-pasar2-s-miconsoutlineuser1 {
    top: 748px;
    left: 174px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  
  .cari-pasar2-s-miconsoutlinecoin {
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
      <!-- <link href="./cari-pasar-2.css" rel="stylesheet" /> -->

      <div class="cari-pasar2-container">
        <div class="cari-pasar2-cari-pasar2">
          <div class="cari-pasar2-i-o-status-bar-black">
            <div class="cari-pasar2-bg">
              <img
                alt="NotchI554"
                src="public/external/notchi554-mm0u.svg"
                class="cari-pasar2-notch"
              />
            </div>
            <div class="cari-pasar2-right-side">
              <div class="cari-pasar2-battery">
                <img
                  alt="RectangleI554"
                  src="public/external/rectanglei554-xlop.svg"
                  class="cari-pasar2-rectangle"
                />
                <img
                  alt="CombinedShapeI554"
                  src="public/external/combinedshapei554-5flk.svg"
                  class="cari-pasar2-combined-shape"
                />
                <img
                  alt="RectangleI554"
                  src="public/external/rectanglei554-e0mc.svg"
                  class="cari-pasar2-rectangle1"
                />
              </div>
              <img
                alt="WifiI554"
                src="public/external/wifii554-y55.svg"
                class="cari-pasar2-wifi"
              />
              <img
                alt="MobileSignalI554"
                src="public/external/mobilesignali554-jt5i.svg"
                class="cari-pasar2-mobile-signal"
              />
            </div>
            <div class="cari-pasar2-left-side">
              <img
                alt="SVG941I554"
                src="public/external/svg941i554-kxp.svg"
                class="cari-pasar2-svg941"
              />
            </div>
          </div>
          <div class="cari-pasar2-page-header">
            <span class="cari-pasar2-text UI-30Semi">
              <span>Cari Pasar</span>
            </span>
            <a
              href="{{ url('/cariPasarHome') }}"
              class="cari-pasar2-text02 UI-16Medium"
            >
              <span>Kembali</span>
            </a>
          </div>
          <div class="cari-pasar2-input-search">
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
                <input type="text" name="query" placeholder="Cari Pasar" class="search-input">
              </form>
              </div>
          </div>
          <a href="lokasi-pasar-toko.html" class="cari-pasar2-navlink">
            <div class="cari-pasar2-content-search-result">
              <span class="cari-pasar2-text06 UI-16Medium">
                <span>Pasar Keputih</span>
              </span>
              <img
                alt="DividerI554"
                src="public/external/divideri554-eyj8.svg"
                class="cari-pasar2-divider"
              />
            </div>
          </a>
          <div class="cari-pasar2-content-search-result1">
            <span class="cari-pasar2-text08 UI-16Medium">
              <span>Pasar Pucang Anom</span>
            </span>
            <img
              alt="DividerI554"
              src="public/external/divideri554-qxbb.svg"
              class="cari-pasar2-divider1"
            />
          </div>
          <div class="cari-pasar2-content-search-result2">
            <span class="cari-pasar2-text10 UI-16Medium">
              <span>Pasar Kembang</span>
            </span>
            <img
              alt="DividerI554"
              src="public/external/divideri554-dnxi.svg"
              class="cari-pasar2-divider2"
            />
          </div>
          <div class="cari-pasar2-content-search-result3">
            <span class="cari-pasar2-text12 UI-16Medium">
              <span>Pasar Pacar Keling</span>
            </span>
            <img
              alt="DividerI554"
              src="public/external/divideri554-wib9.svg"
              class="cari-pasar2-divider3"
            />
          </div>
          <div class="cari-pasar2-content-search-result4">
            <span class="cari-pasar2-text14 UI-16Medium">
              <span>Pasar Keputran</span>
            </span>
            <img
              alt="DividerI554"
              src="public/external/divideri554-grzv.svg"
              class="cari-pasar2-divider4"
            />
          </div>
          <div class="cari-pasar2-content-search-result5">
            <span class="cari-pasar2-text16 UI-16Medium">
              <span>Pasar Kutisari</span>
            </span>
            <img
              alt="DividerI554"
              src="public/external/divideri554-gjsn.svg"
              class="cari-pasar2-divider5"
            />
          </div>
          <div class="cari-pasar2-i-o-bottom-bar-tabs">
            <div class="cari-pasar2-i-phone-ui">
              <div class="cari-pasar2-home-indicator"></div>
            </div>
            <div class="cari-pasar2-tabs">
              <img
                alt="Rectangle9I554"
                src="public/external/rectangle9i554-uzgu-200h.png"
                class="cari-pasar2-rectangle9"
              />
              <img
                alt="Rectangle10I554"
                src="public/external/rectangle10i554-ageq-200h.png"
                class="cari-pasar2-rectangle10"
              />
              <img
                alt="Rectangle11I554"
                src="public/external/rectangle11i554-cdmt-200h.png"
                class="cari-pasar2-rectangle11"
              />
              <img
                alt="Rectangle12I554"
                src="public/external/rectangle12i554-1j4-200h.png"
                class="cari-pasar2-rectangle12"
              />
              <img
                alt="Rectangle13I554"
                src="public/external/rectangle13i554-eyic-200h.png"
                class="cari-pasar2-rectangle13"
              />
            </div>
            <img
              alt="TopDividerI554"
              src="public/external/topdivideri554-99k-200h.png"
              class="cari-pasar2-top-divider"
            />
          </div>
          <div class="cari-pasar2-i-o-bottom-bar-tabs1">
            <div class="cari-pasar2-i-phone-ui1">
              <div class="cari-pasar2-home-indicator1"></div>
            </div>
            <div class="cari-pasar2-tabs1">
              <a href="{{ url('/cariBarangHome') }}" class="cari-pasar2-navlink1">
                <img
                  alt="Rectangle9I554"
                  src="public/external/rectangle9i554-efj2-200h.png"
                  class="cari-pasar2-rectangle91"
                />
              </a>
              <a href="{{ url('/cariTokoHome') }}" class="cari-pasar2-navlink2">
                <img
                  alt="Rectangle10I554"
                  src="public/external/rectangle10i554-kxa-200h.png"
                  class="cari-pasar2-rectangle101"
                />
              </a>
              <a href="{{ url('/pengaturanAkun') }}" class="cari-pasar2-navlink3">
                <img
                  alt="Rectangle11I554"
                  src="public/external/rectangle11i554-bbv-200h.png"
                  class="cari-pasar2-rectangle111"
                />
              </a>
              <a href="{{ url('/etalaseTokoHome') }}" class="cari-pasar2-navlink4">
                <img
                  alt="Rectangle12I554"
                  src="public/external/rectangle12i554-8khf-200h.png"
                  class="cari-pasar2-rectangle121"
                />
              </a>
              <a href="{{ url('/hargaBarangHome') }}" class="cari-pasar2-navlink5">
                <img
                  alt="Rectangle13I554"
                  src="public/external/rectangle13i554-w3uh-200h.png"
                  class="cari-pasar2-rectangle131"
                />
              </a>
            </div>
            <img
              alt="TopDividerI554"
              src="public/external/topdivideri554-ceud-200h.png"
              class="cari-pasar2-top-divider1"
            />
          </div>
          <img
            alt="SWMiconsoutlinecart25547"
            src="public/external/swmiconsoutlinecart25547-8f2o.svg"
            class="cari-pasar2-s-miconsoutlinecart2"
          />
          <img
            alt="SWMiconsoutlinelocation15547"
            src="public/external/swmiconsoutlinelocation15547-f9wi.svg"
            class="cari-pasar2-s-miconsoutlinelocation1"
          />
          <img
            alt="SWMiconsoutlineedit45547"
            src="public/external/swmiconsoutlineedit45547-ghr.svg"
            class="cari-pasar2-s-miconsoutlineedit4"
          />
          <img
            alt="SWMiconsoutlineuser15547"
            src="public/external/swmiconsoutlineuser15547-drr.svg"
            class="cari-pasar2-s-miconsoutlineuser1"
          />
          <img
            alt="SWMiconsoutlinecoin5547"
            src="public/external/swmiconsoutlinecoin5547-jnhb.svg"
            class="cari-pasar2-s-miconsoutlinecoin"
          />
        </div>
      </div>
    </div>
  </body>
</html>
