<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Statistik {{ $nama }}</title>
    <meta property="og:title" content="Statistik-Toko - EMarket" />
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
      .statistik-toko-container {
      width: 100%;
      display: flex;
      overflow: auto;
      min-height: 100vh;
      align-items: center;
      flex-direction: column;
    }
    .statistik-toko-statistik-toko {
      width: 374px;
      height: 812px;
      display: flex;
      overflow: hidden;
      position: relative;
      align-items: flex-start;
      flex-shrink: 0;
      background-color: var(--dl-color-default-white);
    }
    .statistik-toko-i-o-status-bar-black {
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
    .statistik-toko-bg {
      top: -2px;
      left: 78px;
      width: 219px;
      height: 30px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .statistik-toko-notch {
      top: 0px;
      left: 0px;
      width: 219px;
      height: 30px;
      position: absolute;
    }
    .statistik-toko-right-side {
      top: 17.3306884765625px;
      left: 293.6666564941406px;
      width: 66.661376953125px;
      height: 11.336018562316895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .statistik-toko-battery {
      top: 0.002685546875px;
      left: 42.333343505859375px;
      width: 24.32803726196289px;
      height: 11.333333015441895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .statistik-toko-rectangle {
      top: 0px;
      left: 0px;
      width: 22px;
      height: 11px;
      opacity: 0.35;
      position: absolute;
    }
    .statistik-toko-combined-shape {
      top: 3.6666667461395264px;
      left: 23px;
      width: 1px;
      height: 4px;
      opacity: 0.40;
      position: absolute;
    }
    .statistik-toko-rectangle1 {
      top: 1.9999998807907104px;
      left: 2px;
      width: 18px;
      height: 7px;
      position: absolute;
    }
    .statistik-toko-wifi {
      top: 0px;
      left: 22.027069091796875px;
      width: 15px;
      height: 11px;
      position: absolute;
    }
    .statistik-toko-mobile-signal {
      top: 0.3359375px;
      left: 0px;
      width: 17px;
      height: 11px;
      position: absolute;
    }
    .statistik-toko-left-side {
      top: 17.16748046875px;
      left: 33.453514099121094px;
      width: 28.42616844177246px;
      height: 11.0888671875px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .statistik-toko-svg941 {
      top: 0px;
      left: 0px;
      width: 28px;
      height: 11px;
      position: absolute;
    }
    .statistik-toko-page-header {
      top: 60px;
      left: 16px;
      width: 343px;
      height: 36px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .statistik-toko-text {
      left: 91px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: center;
      line-height: normal;
    }
    .statistik-toko-i-o-bottom-bar-tabs {
      top: 729px;
      left: 0px;
      width: 375px;
      height: 83.5px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .statistik-toko-i-phone-ui {
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
    .statistik-toko-home-indicator {
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
    .statistik-toko-tabs {
      top: 15px;
      left: 26px;
      width: 320px;
      height: 32px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .statistik-toko-navlink {
      display: contents;
    }
    .statistik-toko-rectangle9 {
      top: 0px;
      left: 0px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .statistik-toko-navlink1 {
      display: contents;
    }
    .statistik-toko-rectangle10 {
      top: 0px;
      left: 72px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .statistik-toko-navlink2 {
      display: contents;
    }
    .statistik-toko-rectangle11 {
      top: 0px;
      left: 144px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .statistik-toko-navlink3 {
      display: contents;
    }
    .statistik-toko-rectangle12 {
      top: 0px;
      left: 216px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .statistik-toko-navlink4 {
      display: contents;
    }
    .statistik-toko-rectangle13 {
      top: 0px;
      left: 288px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .statistik-toko-top-divider {
      top: 0.5px;
      left: 0px;
      width: 375px;
      height: 0px;
      position: absolute;
    }
    .statistik-toko-circular-graph {
      top: 128px;
      left: 90px;
      width: 196px;
      height: 196px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .statistik-toko-inner-circle {
      top: 0px;
      left: 0px;
      width: 196px;
      height: 196px;
      position: absolute;
      border-color: rgba(220, 153, 102, 1);
      border-style: solid;
      border-width: 3px;
    }
    .statistik-toko-text02 {
      top: 80px;
      left: 3px;
      color: var(--dl-color-green-primary);
      height: auto;
      position: absolute;
      text-align: center;
      line-height: normal;
    }
    .statistik-toko-text04 {
      top: 117px;
      left: 30px;
      color: var(--dl-color-gray-03);
      height: auto;
      position: absolute;
      text-align: center;
      line-height: normal;
    }
    .statistik-toko-outer-circle {
      top: 0px;
      left: 0px;
      width: 196px;
      height: 196px;
      position: absolute;
      border-color: rgba(125, 82, 67, 1);
      border-style: solid;
      border-width: 3px;
    }
    .statistik-toko-data-list {
      top: 354px;
      left: 15px;
      width: 344px;
      height: 353px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .statistik-toko-text06 {
      color: var(--dl-color-default-black);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .statistik-toko-data-graph-result {
      top: 63px;
      left: 1px;
      width: 343px;
      height: 35px;
      display: flex;
      position: absolute;
      align-items: flex-start;
    }
    .statistik-toko-text08 {
      left: 32px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .statistik-toko-text10 {
      left: 280px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: right;
      line-height: normal;
    }
    .statistik-toko-divider {
      top: 35px;
      left: 0px;
      width: 343px;
      height: 1px;
      position: absolute;
    }
    .statistik-toko-icon {
      top: 2px;
      left: 0px;
      width: 16px;
      height: 16px;
      position: absolute;
    }
    .statistik-toko-data-graph-result1 {
      top: 114px;
      left: 1px;
      width: 343px;
      height: 35px;
      display: flex;
      position: absolute;
      align-items: flex-start;
    }
    .statistik-toko-text12 {
      left: 32px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .statistik-toko-text14 {
      left: 274px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: right;
      line-height: normal;
    }
    .statistik-toko-divider1 {
      top: 35px;
      left: 0px;
      width: 343px;
      height: 1px;
      position: absolute;
    }
    .statistik-toko-icon1 {
      top: 2px;
      left: 0px;
      width: 16px;
      height: 16px;
      position: absolute;
    }
    .statistik-toko-data-graph-result2 {
      top: 165px;
      left: 1px;
      width: 343px;
      height: 35px;
      display: flex;
      position: absolute;
      align-items: flex-start;
    }
    .statistik-toko-text16 {
      left: 32px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .statistik-toko-text18 {
      left: 280px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: right;
      line-height: normal;
    }
    .statistik-toko-divider2 {
      top: 35px;
      left: 0px;
      width: 343px;
      height: 1px;
      position: absolute;
    }
    .statistik-toko-icon2 {
      top: 2px;
      left: 0px;
      width: 16px;
      height: 16px;
      position: absolute;
    }
    .statistik-toko-data-graph-result3 {
      top: 216px;
      left: 1px;
      width: 343px;
      height: 35px;
      display: flex;
      position: absolute;
      align-items: flex-start;
    }
    .statistik-toko-text20 {
      left: 32px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .statistik-toko-text22 {
      left: 274px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: right;
      line-height: normal;
    }
    .statistik-toko-divider3 {
      top: 35px;
      left: 0px;
      width: 343px;
      height: 1px;
      position: absolute;
    }
    .statistik-toko-icon3 {
      top: 2px;
      left: 0px;
      width: 16px;
      height: 16px;
      position: absolute;
    }
    .statistik-toko-data-graph-result4 {
      top: 267px;
      left: 1px;
      width: 343px;
      height: 35px;
      display: flex;
      position: absolute;
      align-items: flex-start;
    }
    .statistik-toko-text24 {
      left: 32px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .statistik-toko-text26 {
      left: 274px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: right;
      line-height: normal;
    }
    .statistik-toko-divider4 {
      top: 35px;
      left: 0px;
      width: 343px;
      height: 1px;
      position: absolute;
    }
    .statistik-toko-icon4 {
      top: 2px;
      left: 0px;
      width: 16px;
      height: 16px;
      position: absolute;
    }
    .statistik-toko-data-graph-result5 {
      top: 318px;
      left: 1px;
      width: 343px;
      height: 35px;
      display: flex;
      position: absolute;
      align-items: flex-start;
    }
    .statistik-toko-text28 {
      left: 32px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .statistik-toko-text30 {
      left: 220px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: right;
      line-height: normal;
    }
    .statistik-toko-divider5 {
      top: 35px;
      left: 0px;
      width: 343px;
      height: 1px;
      position: absolute;
    }
    .statistik-toko-icon5 {
      top: 2px;
      left: 0px;
      width: 16px;
      height: 16px;
      position: absolute;
    }
    .statistik-toko-s-miconsoutlinecart2 {
      top: 748px;
      left: 30px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .statistik-toko-s-miconsoutlinelocation1 {
      top: 748px;
      left: 102px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .statistik-toko-s-miconsoutlineedit4 {
      top: 748px;
      left: 246px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .statistik-toko-s-miconsoutlineuser1 {
      top: 748px;
      left: 174px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .statistik-toko-s-miconsoutlinecoin {
      top: 748px;
      left: 318px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .statistik-toko-s-miconsoutlinecart21 {
      top: 748px;
      left: 30px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .statistik-toko-shape {
      top: 751px;
      left: 106px;
      width: 16px;
      height: 18px;
      position: absolute;
    }
    .statistik-toko-s-miconsoutlineedit41 {
      top: 748px;
      left: 246px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .statistik-toko-s-miconsoutlineuser11 {
      top: 748px;
      left: 174px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .statistik-toko-s-miconsoutlinecoin1 {
      top: 748px;
      left: 318px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .statistik-toko-text32 {
      top: 68px;
      left: 17px;
      color: var(--dl-color-green-primary);
      height: auto;
      position: absolute;
      text-align: right;
      line-height: normal;
      text-decoration: none;
    }
    
    </style>
  </head>
  <body>
    <div>
      <!-- <link href="./statistik-toko.css" rel="stylesheet" /> -->

      <div class="statistik-toko-container">
        <div class="statistik-toko-statistik-toko">
          <div class="statistik-toko-i-o-status-bar-black">
            <div class="statistik-toko-bg">
              <img
                alt="NotchI467"
                src="public/external/notchi467-m59x.svg"
                class="statistik-toko-notch"
              />
            </div>
            <div class="statistik-toko-right-side">
              <div class="statistik-toko-battery">
                <img
                  alt="RectangleI467"
                  src="public/external/rectanglei467-5ryb.svg"
                  class="statistik-toko-rectangle"
                />
                <img
                  alt="CombinedShapeI467"
                  src="public/external/combinedshapei467-es78.svg"
                  class="statistik-toko-combined-shape"
                />
                <img
                  alt="RectangleI467"
                  src="public/external/rectanglei467-lzvg.svg"
                  class="statistik-toko-rectangle1"
                />
              </div>
              <img
                alt="WifiI467"
                src="public/external/wifii467-cl.svg"
                class="statistik-toko-wifi"
              />
              <img
                alt="MobileSignalI467"
                src="public/external/mobilesignali467-p12n.svg"
                class="statistik-toko-mobile-signal"
              />
            </div>
            <div class="statistik-toko-left-side">
              <img
                alt="SVG941I467"
                src="public/external/svg941i467-xhvj.svg"
                class="statistik-toko-svg941"
              />
            </div>
          </div>
          <div class="statistik-toko-page-header">
            <style>
              .statistik-toko-text UI-30Semi{
                font-size: 30px
              }
            </style>
            <span class="statistik-toko-text UI-30Semi" style="font-size:20px;">
              <span >Statistik <br> {{ $nama }}</span>
            </span>
          </div>
          <div class="statistik-toko-i-o-bottom-bar-tabs">
            <div class="statistik-toko-i-phone-ui">
              <div class="statistik-toko-home-indicator"></div>
            </div>
            <div class="statistik-toko-tabs">
              <a href="{{ url('/cariBarangHome') }}" class="statistik-toko-navlink">
                <img
                  alt="Rectangle9I467"
                  src="public/external/rectangle9i467-7vp-200h.png"
                  class="statistik-toko-rectangle9"
                />
              </a>
              <a href="{{ url('/cariTokoHome') }}" class="statistik-toko-navlink1">
                <img
                  alt="Rectangle10I467"
                  src="public/external/rectangle10i467-iq2a-200h.png"
                  class="statistik-toko-rectangle10"
                />
              </a>
              <a href="{{ url('/pengaturanAkun') }}" class="statistik-toko-navlink2">
                <img
                  alt="Rectangle11I467"
                  src="public/external/rectangle11i467-lnkk-200h.png"
                  class="statistik-toko-rectangle11"
                />
              </a>
              <a href="{{ url('/etalaseTokoHome') }}" class="statistik-toko-navlink3">
                <img
                  alt="Rectangle12I467"
                  src="public/external/rectangle12i467-r4wr-200h.png"
                  class="statistik-toko-rectangle12"
                />
              </a>
              <a href="{{ url('/hargaBarangHome') }}" class="statistik-toko-navlink4">
                <img
                  alt="Rectangle13I467"
                  src="public/external/rectangle13i467-s08-200h.png"
                  class="statistik-toko-rectangle13"
                />
              </a>
            </div>
            <img
              alt="TopDividerI467"
              src="public/external/topdivideri467-65eb-200h.png"
              class="statistik-toko-top-divider"
            />
          </div>
          <div class="statistik-toko-circular-graph">
            <img
              alt="InnerCircle4673"
              src="public/external/innercircle4673-qtn-200h.png"
              class="statistik-toko-inner-circle"
            />
            <span class="statistik-toko-text02 UI-30Medium" style="font-size:20px;">
              <span style="padding-left: 25px;">{{ $totalKlik }} Total Klik</span>
            </span>
            {{-- <span class="statistik-toko-text04 UI-10Regular">
              <span>{{ $totalKlik }} Klik Kontak Toko (10%)</span>
            </span> --}}
            <img
              alt="OuterCircle4673"
              src="public/external/outercircle4673-krjh-200h.png"
              class="statistik-toko-outer-circle"
            />
          </div>
          <div class="statistik-toko-data-list">
            <span class="statistik-toko-text06 UI-30Medium">
              <span>Jumlah Klik Desember</span>
            </span>
            <div class="statistik-toko-data-graph-result">
              <span class="statistik-toko-text08 UI-16Medium">
                <span>Klik Toko</span>
              </span>
              <span class="statistik-toko-text10 UI-14Regular">
                <span>{{ $klikToko }} Klik</span>
              </span>
              <img
                alt="DividerI467"
                src="public/external/divideri467-lce.svg"
                class="statistik-toko-divider"
              />
              <img
                alt="IconI467"
                src="public/external/iconi467-f4bi-200h.png"
                class="statistik-toko-icon"
              />
            </div>
            <div class="statistik-toko-data-graph-result1">
              <span class="statistik-toko-text12 UI-16Medium">
                <span>Klik Barang</span>
              </span>
              <span class="statistik-toko-text14 UI-14Regular">
                <span>{{ $klikBarang }} Klik</span>
              </span>
              <img
                alt="DividerI467"
                src="public/external/divideri467-xc6o.svg"
                class="statistik-toko-divider1"
              />
              <img
                alt="IconI467"
                src="public/external/iconi467-874r-200h.png"
                class="statistik-toko-icon1"
              />
            </div>
            <div class="statistik-toko-data-graph-result2">
              <span class="statistik-toko-text16 UI-16Medium">
                <span>Klik Kontak Toko</span>
              </span>
              <span class="statistik-toko-text18 UI-14Regular">
                <span>{{ $klikKontakToko }} Klik</span>
              </span>
              <img
                alt="DividerI467"
                src="public/external/divideri467-mdto.svg"
                class="statistik-toko-divider2"
              />
              <img
                alt="IconI467"
                src="public/external/iconi467-7rxk-200h.png"
                class="statistik-toko-icon2"
              />
            </div>
            <div class="statistik-toko-data-graph-result3">
              <span class="statistik-toko-text20 UI-16Medium">
                <span>Total Klik</span>
              </span>
              <span class="statistik-toko-text22 UI-14Regular">
                <span>{{ $totalKlik }} Klik</span>
              </span>
              <img
                alt="DividerI467"
                src="public/external/divideri467-snt7i.svg"
                class="statistik-toko-divider3"
              />
              <img
                alt="IconI467"
                src="public/external/iconi467-tke4-200h.png"
                class="statistik-toko-icon3"
              />
            </div>
            {{-- <div class="statistik-toko-data-graph-result4">
              <span class="statistik-toko-text24 UI-16Medium">
                <span>Total Klik Bulan November</span>
              </span>
              <span class="statistik-toko-text26 UI-14Regular">
                <span>15000 Klik</span>
              </span>
              <img
                alt="DividerI467"
                src="public/external/divideri467-tgz.svg"
                class="statistik-toko-divider4"
              />
              <img
                alt="IconI467"
                src="public/external/iconi467-mkfc-200h.png"
                class="statistik-toko-icon4"
              />
            </div>
            <div class="statistik-toko-data-graph-result5">
              <span class="statistik-toko-text28 UI-16Medium">
                <span>Perubahan Jumlah Klik</span>
              </span>
              <span class="statistik-toko-text30 UI-14Regular">
                <span>+3000 Klik (+20%)</span>
              </span>
              <img
                alt="DividerI467"
                src="public/external/divideri467-m8l2.svg"
                class="statistik-toko-divider5"
              />
              <img
                alt="IconI467"
                src="public/external/iconi467-r50z-200h.png"
                class="statistik-toko-icon5"
              />
            </div> --}}
          </div>
          <img
            alt="SWMiconsoutlinecart24673"
            src="public/external/swmiconsoutlinecart24673-xwbm.svg"
            class="statistik-toko-s-miconsoutlinecart2"
          />
          <img
            alt="SWMiconsoutlinelocation14673"
            src="public/external/swmiconsoutlinelocation14673-kxvn.svg"
            class="statistik-toko-s-miconsoutlinelocation1"
          />
          <img
            alt="SWMiconsoutlineedit44673"
            src="public/external/swmiconsoutlineedit44673-n3dd.svg"
            class="statistik-toko-s-miconsoutlineedit4"
          />
          <img
            alt="SWMiconsoutlineuser14673"
            src="public/external/swmiconsoutlineuser14673-zv3.svg"
            class="statistik-toko-s-miconsoutlineuser1"
          />
          <img
            alt="SWMiconsoutlinecoin4673"
            src="public/external/swmiconsoutlinecoin4673-zj9.svg"
            class="statistik-toko-s-miconsoutlinecoin"
          />
          <img
            alt="SWMiconsoutlinecart24673"
            src="public/external/swmiconsoutlinecart24673-0v9q.svg"
            class="statistik-toko-s-miconsoutlinecart21"
          />
          <img
            alt="shape4673"
            src="public/external/shape4673-xuog.svg"
            class="statistik-toko-shape"
          />
          <img
            alt="SWMiconsoutlineedit44673"
            src="public/external/swmiconsoutlineedit44673-ausk.svg"
            class="statistik-toko-s-miconsoutlineedit41"
          />
          <img
            alt="SWMiconsoutlineuser14673"
            src="public/external/swmiconsoutlineuser14673-s9mm.svg"
            class="statistik-toko-s-miconsoutlineuser11"
          />
          <img
            alt="SWMiconsoutlinecoin4673"
            src="public/external/swmiconsoutlinecoin4673-cyqs.svg"
            class="statistik-toko-s-miconsoutlinecoin1"
          />
          <a
            href="#"
            class="statistik-toko-text32 UI-16Medium"
          >
            <span>Kembali</span>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
