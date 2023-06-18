<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Buat-Toko-2 - EMarket</title>
    <meta property="og:title" content="Buat-Toko-2 - EMarket" />
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
    
      .buat-toko2-container {
        width: 100%;
        display: flex;
        overflow: auto;
        min-height: 100vh;
        align-items: center;
        flex-direction: column;
      }
      
      .buat-toko2-buat-toko1 {
        width: 378px;
        height: 812px;
        display: flex;
        overflow: hidden;
        position: relative;
        align-items: flex-start;
        flex-shrink: 0;
        background-color: var(--dl-color-default-white);
      }
      
      .buat-toko2-i-o-status-bar-white {
        top: 0px;
        left: 0px;
        width: 375px;
        height: 44px;
        display: flex;
        position: absolute;
        align-items: flex-start;
        flex-shrink: 0;
      }
      
      .buat-toko2-i-o-status-bar-black {
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
      
      .buat-toko2-bg {
        top: -2px;
        left: 78px;
        width: 219px;
        height: 30px;
        display: flex;
        position: absolute;
        align-items: flex-start;
        flex-shrink: 1;
      }
      
      .buat-toko2-notch {
        top: 0px;
        left: 0px;
        width: 219px;
        height: 30px;
        position: absolute;
      }
      
      .buat-toko2-right-side {
        top: 17.3306884765625px;
        left: 293.6666564941406px;
        width: 66.661376953125px;
        height: 11.336018562316895px;
        display: flex;
        position: absolute;
        align-items: flex-start;
        flex-shrink: 1;
      }
      
      .buat-toko2-battery {
        top: 0.002685546875px;
        left: 42.333343505859375px;
        width: 24.32803726196289px;
        height: 11.333333015441895px;
        display: flex;
        position: absolute;
        align-items: flex-start;
        flex-shrink: 1;
      }
      
      .buat-toko2-rectangle {
        top: 0px;
        left: 0px;
        width: 22px;
        height: 11px;
        opacity: 0.35;
        position: absolute;
      }
      
      .buat-toko2-combined-shape {
        top: 3.6666667461395264px;
        left: 23px;
        width: 1px;
        height: 4px;
        opacity: 0.40;
        position: absolute;
      }
      
      .buat-toko2-rectangle1 {
        top: 1.9999998807907104px;
        left: 2px;
        width: 18px;
        height: 7px;
        position: absolute;
      }
      
      .buat-toko2-wifi {
        top: 0px;
        left: 22.027069091796875px;
        width: 15px;
        height: 11px;
        position: absolute;
      }
      
      .buat-toko2-mobile-signal {
        top: 0.3359375px;
        left: 0px;
        width: 17px;
        height: 11px;
        position: absolute;
      }
      
      .buat-toko2-left-side {
        top: 17.16748046875px;
        left: 33.453514099121094px;
        width: 28.42616844177246px;
        height: 11.0888671875px;
        display: flex;
        position: absolute;
        align-items: flex-start;
        flex-shrink: 1;
      }
      
      .buat-toko2-svg941 {
        top: 0px;
        left: 0px;
        width: 28px;
        height: 11px;
        position: absolute;
      }
      
      .buat-toko2-i-o-status-bar-black1 {
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
      
      .buat-toko2-bg1 {
        top: -2px;
        left: 78px;
        width: 219px;
        height: 30px;
        display: flex;
        position: absolute;
        align-items: flex-start;
        flex-shrink: 1;
      }
      
      .buat-toko2-notch1 {
        top: 0px;
        left: 0px;
        width: 219px;
        height: 30px;
        position: absolute;
      }
      
      .buat-toko2-right-side1 {
        top: 17.3306884765625px;
        left: 293.6666564941406px;
        width: 66.661376953125px;
        height: 11.336018562316895px;
        display: flex;
        position: absolute;
        align-items: flex-start;
        flex-shrink: 1;
      }
      
      .buat-toko2-battery1 {
        top: 0.002685546875px;
        left: 42.333343505859375px;
        width: 24.32803726196289px;
        height: 11.333333015441895px;
        display: flex;
        position: absolute;
        align-items: flex-start;
        flex-shrink: 1;
      }
      
      .buat-toko2-rectangle2 {
        top: 0px;
        left: 0px;
        width: 22px;
        height: 11px;
        opacity: 0.35;
        position: absolute;
      }
      
      .buat-toko2-combined-shape1 {
        top: 3.6666667461395264px;
        left: 23px;
        width: 1px;
        height: 4px;
        opacity: 0.40;
        position: absolute;
      }
      
      .buat-toko2-rectangle3 {
        top: 1.9999998807907104px;
        left: 2px;
        width: 18px;
        height: 7px;
        position: absolute;
      }
      
      .buat-toko2-wifi1 {
        top: 0px;
        left: 22.027069091796875px;
        width: 15px;
        height: 11px;
        position: absolute;
      }
      
      .buat-toko2-mobile-signal1 {
        top: 0.3359375px;
        left: 0px;
        width: 17px;
        height: 11px;
        position: absolute;
      }
      
      .buat-toko2-left-side1 {
        top: 17.16748046875px;
        left: 33.453514099121094px;
        width: 28.42616844177246px;
        height: 11.0888671875px;
        display: flex;
        position: absolute;
        align-items: flex-start;
        flex-shrink: 1;
      }
      
      .buat-toko2-svg9411 {
        top: 0px;
        left: 0px;
        width: 28px;
        height: 11px;
        position: absolute;
      }
      
      .buat-toko2-s-miconsoutlinecart2 {
        top: 748px;
        left: 30px;
        width: 24px;
        height: 24px;
        position: absolute;
      }
      
      .buat-toko2-i-o-bottom-bar-tabs {
        top: 731px;
        left: 0px;
        width: 375px;
        height: 83.5px;
        display: flex;
        position: absolute;
        align-items: flex-start;
        flex-shrink: 0;
      }
      
      .buat-toko2-i-phone-ui {
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
      
      .buat-toko2-home-indicator {
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
      
      .buat-toko2-tabs {
        top: 15px;
        left: 26px;
        width: 320px;
        height: 32px;
        display: flex;
        position: absolute;
        align-items: flex-start;
        flex-shrink: 1;
      }
      
      .buat-toko2-navlink {
        display: contents;
      }
      
      .buat-toko2-rectangle9 {
        top: 0px;
        left: 0px;
        width: 32px;
        height: 32px;
        position: absolute;
        border-radius: 100px;
        text-decoration: none;
      }
      
      .buat-toko2-navlink1 {
        display: contents;
      }
      
      .buat-toko2-rectangle10 {
        top: 0px;
        left: 72px;
        width: 32px;
        height: 32px;
        position: absolute;
        border-radius: 100px;
        text-decoration: none;
      }
      
      .buat-toko2-navlink2 {
        display: contents;
      }
      
      .buat-toko2-rectangle11 {
        top: 0px;
        left: 144px;
        width: 32px;
        height: 32px;
        position: absolute;
        border-radius: 100px;
        text-decoration: none;
      }
      
      .buat-toko2-navlink3 {
        display: contents;
      }
      
      .buat-toko2-rectangle12 {
        top: 0px;
        left: 216px;
        width: 32px;
        height: 32px;
        position: absolute;
        border-radius: 100px;
        text-decoration: none;
      }
      
      .buat-toko2-navlink4 {
        display: contents;
      }
      
      .buat-toko2-rectangle13 {
        top: 0px;
        left: 288px;
        width: 32px;
        height: 32px;
        position: absolute;
        border-radius: 100px;
        text-decoration: none;
      }
      
      .buat-toko2-top-divider {
        top: 0.5px;
        left: 0px;
        width: 375px;
        height: 0px;
        position: absolute;
      }
      
      .buat-toko2-shape {
        top: 753px;
        left: 106px;
        width: 16px;
        height: 18px;
        position: absolute;
      }
      
      .buat-toko2-s-miconsoutlinecart21 {
        top: 750px;
        left: 30px;
        width: 24px;
        height: 24px;
        position: absolute;
      }
      
      .buat-toko2-s-miconsoutlineedit4 {
        top: 750px;
        left: 246px;
        width: 24px;
        height: 24px;
        position: absolute;
      }
      
      .buat-toko2-s-miconsoutlineuser1 {
        top: 750px;
        left: 174px;
        width: 24px;
        height: 24px;
        position: absolute;
      }
      
      .buat-toko2-s-miconsoutlinecoin {
        top: 750px;
        left: 318px;
        width: 24px;
        height: 24px;
        position: absolute;
      }
      
      .buat-toko2-post-title-text {
        top: 322px;
        left: 16px;
        width: 545px;
        height: 181px;
        display: flex;
        position: absolute;
        align-items: flex-start;
        flex-shrink: 1;
      }
      
      .buat-toko2-text {
        top: 57px;
        left: 1px;
        color: rgba(189, 189, 189, 1);
        width: 343px;
        height: auto;
        position: absolute;
        text-align: left;
        line-height: normal;
      }
      
      .buat-toko2-text01 {
        color: var(--dl-color-gray-03);
      }
      
      .buat-toko2-text02 {
        top: 57px;
        left: 202px;
        color: rgba(189, 189, 189, 1);
        width: 343px;
        height: auto;
        position: absolute;
        text-align: left;
        line-height: normal;
      }
      
      .buat-toko2-text03 {
        color: var(--dl-color-gray-03);
      }
      
      .buat-toko2-s-miconsoutlinechevrondown {
        top: 101px;
        left: 160px;
        width: 24px;
        height: 24px;
        display: flex;
        position: absolute;
        align-items: flex-start;
        flex-shrink: 0;
      }
      
      .buat-toko2-text04 {
        color: rgba(189, 189, 189, 1);
        width: 343px;
        height: auto;
        position: absolute;
        text-align: left;
        line-height: normal;
      }
      
      .buat-toko2-text05 {
        color: var(--dl-color-gray-03);
      }
      
      .buat-toko2-text06 {
        top: 104px;
        left: 1px;
        color: var(--dl-color-default-black);
        width: 343px;
        height: auto;
        position: absolute;
        text-align: left;
        line-height: normal;
      }
      
      .buat-toko2-text11 {
        top: 165px;
        left: 1px;
        color: var(--dl-color-default-black);
        width: 343px;
        height: auto;
        position: absolute;
        text-align: left;
        line-height: normal;
      }
      
      .buat-toko2-text16 {
        top: 515px;
        left: 24px;
        color: var(--dl-color-default-black);
        width: 343px;
        height: auto;
        position: absolute;
        text-align: left;
        line-height: normal;
        text-decoration: none;
      }
      
      .buat-toko2-text19 {
        top: 543px;
        left: 24px;
        color: var(--dl-color-default-black);
        width: 343px;
        height: auto;
        position: absolute;
        text-align: left;
        line-height: normal;
      }
      
      .buat-toko2-shape1 {
        top: 385px;
        left: 159px;
        width: 16px;
        height: 8px;
        position: absolute;
      }
      
      .buat-toko2-tambah {
        top: 85px;
        left: 17px;
        width: 343px;
        height: 196px;
        display: flex;
        position: absolute;
        align-items: flex-start;
        flex-shrink: 1;
      }
      
      .buat-toko2-foto {
        top: 0px;
        left: 0px;
        width: 343px;
        border: 2px dashed rgba(120, 120, 120, 0.4);
        height: 196px;
        display: flex;
        position: absolute;
        align-items: flex-start;
        flex-shrink: 1;
        background-color: rgba(246, 246, 246, 1);
      }
      
      .buat-toko2-line83 {
        top: 351px;
        left: 17px;
        width: 339px;
        height: 1px;
        position: absolute;
      }
      
      .buat-toko2-line84 {
        top: 398px;
        left: 17px;
        width: 158px;
        height: 1px;
        position: absolute;
      }
      
      .buat-toko2-line87 {
        top: 398px;
        left: 218px;
        width: 138px;
        height: 1px;
        position: absolute;
      }
      
      .buat-toko2-rectangle241 {
        top: 450px;
        left: 17px;
        width: 339px;
        height: 19px;
        position: absolute;
      }
      
      .buat-toko2-button-primary {
        gap: 12px;
        top: 645px;
        left: 24px;
        width: 327px;
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
      
      .buat-toko2-text24 {
        color: var(--dl-color-default-white);
        height: auto;
        text-align: center;
        line-height: normal;
      }
      
      .buat-toko2-togglei-phone {
        top: 482px;
        left: 305px;
        width: 51px;
        height: 31px;
        position: absolute;
      }
      
      .buat-toko2-line88 {
        top: 530px;
        left: 89px;
        width: 29px;
        height: 1px;
        position: absolute;
      }
      
      .buat-toko2-line85 {
        top: 558px;
        left: 108px;
        width: 29px;
        height: 1px;
        position: absolute;
      }
      
      .buat-toko2-line89 {
        top: 530px;
        left: 207px;
        width: 29px;
        height: 1px;
        position: absolute;
      }
      </style>
  </head>
  <body>
    <div>
      <!-- <link href="./buat-toko-2.css" rel="stylesheet" /> -->

      <div class="buat-toko2-container">
        <div class="buat-toko2-buat-toko1">
          <div class="buat-toko2-i-o-status-bar-white">
            <div class="buat-toko2-i-o-status-bar-black">
              <div class="buat-toko2-bg">
                <img
                  alt="NotchI526"
                  src="public/external/notchi526-gr.svg"
                  class="buat-toko2-notch"
                />
              </div>
              <div class="buat-toko2-right-side">
                <div class="buat-toko2-battery">
                  <img
                    alt="RectangleI526"
                    src="public/external/rectanglei526-hryi.svg"
                    class="buat-toko2-rectangle"
                  />
                  <img
                    alt="CombinedShapeI526"
                    src="public/external/combinedshapei526-d5p3.svg"
                    class="buat-toko2-combined-shape"
                  />
                  <img
                    alt="RectangleI526"
                    src="public/external/rectanglei526-foow.svg"
                    class="buat-toko2-rectangle1"
                  />
                </div>
                <img
                  alt="WifiI526"
                  src="public/external/wifii526-3gto.svg"
                  class="buat-toko2-wifi"
                />
                <img
                  alt="MobileSignalI526"
                  src="public/external/mobilesignali526-v1gh.svg"
                  class="buat-toko2-mobile-signal"
                />
              </div>
              <div class="buat-toko2-left-side">
                <img
                  alt="SVG941I526"
                  src="public/external/svg941i526-sfuf.svg"
                  class="buat-toko2-svg941"
                />
              </div>
            </div>
          </div>
          <div class="buat-toko2-i-o-status-bar-black1">
            <div class="buat-toko2-bg1">
              <img
                alt="NotchI526"
                src="public/external/notchi526-gp0l.svg"
                class="buat-toko2-notch1"
              />
            </div>
            <div class="buat-toko2-right-side1">
              <div class="buat-toko2-battery1">
                <img
                  alt="RectangleI526"
                  src="public/external/rectanglei526-9nxg.svg"
                  class="buat-toko2-rectangle2"
                />
                <img
                  alt="CombinedShapeI526"
                  src="public/external/combinedshapei526-ghqa.svg"
                  class="buat-toko2-combined-shape1"
                />
                <img
                  alt="RectangleI526"
                  src="public/external/rectanglei526-ecjq.svg"
                  class="buat-toko2-rectangle3"
                />
              </div>
              <img
                alt="WifiI526"
                src="public/external/wifii526-51i.svg"
                class="buat-toko2-wifi1"
              />
              <img
                alt="MobileSignalI526"
                src="public/external/mobilesignali526-fhre.svg"
                class="buat-toko2-mobile-signal1"
              />
            </div>
            <div class="buat-toko2-left-side1">
              <img
                alt="SVG941I526"
                src="public/external/svg941i526-azxm.svg"
                class="buat-toko2-svg9411"
              />
            </div>
          </div>
          <img
            alt="SWMiconsoutlinecart25267"
            src="public/external/swmiconsoutlinecart25267-kuf.svg"
            class="buat-toko2-s-miconsoutlinecart2"
          />
          <div class="buat-toko2-i-o-bottom-bar-tabs">
            <div class="buat-toko2-i-phone-ui">
              <div class="buat-toko2-home-indicator"></div>
            </div>
            <div class="buat-toko2-tabs">
              <a href="{{ url('/cariBarangHome') }}" class="buat-toko2-navlink">
                <img
                  alt="Rectangle9I526"
                  src="public/external/rectangle9i526-w1zr-200h.png"
                  class="buat-toko2-rectangle9"
                />
              </a>
              <a href="{{ url('/cariTokoHome') }}" class="buat-toko2-navlink1">
                <img
                  alt="Rectangle10I526"
                  src="public/external/rectangle10i526-8q2u-200h.png"
                  class="buat-toko2-rectangle10"
                />
              </a>
              <a href="{{ url('/pengaturanAkun') }}" class="buat-toko2-navlink2">
                <img
                  alt="Rectangle11I526"
                  src="public/external/rectangle11i526-lzbx-200h.png"
                  class="buat-toko2-rectangle11"
                />
              </a>
              <a href="{{ url('/etalaseTokoHome') }}" class="buat-toko2-navlink3">
                <img
                  alt="Rectangle12I526"
                  src="public/external/rectangle12i526-r8qg-200h.png"
                  class="buat-toko2-rectangle12"
                />
              </a>
              <a href="{{ url('/hargaBarangHome') }}" class="buat-toko2-navlink4">
                <img
                  alt="Rectangle13I526"
                  src="public/external/rectangle13i526-2d6c-200h.png"
                  class="buat-toko2-rectangle13"
                />
              </a>
            </div>
            <img
              alt="TopDividerI526"
              src="public/external/topdivideri526-1wb-200h.png"
              class="buat-toko2-top-divider"
            />
          </div>
          <img
            alt="shape5267"
            src="public/external/shape5267-ahta.svg"
            class="buat-toko2-shape"
          />
          <img
            alt="SWMiconsoutlinecart25267"
            src="public/external/swmiconsoutlinecart25267-04x8.svg"
            class="buat-toko2-s-miconsoutlinecart21"
          />
          <img
            alt="SWMiconsoutlineedit45267"
            src="public/external/swmiconsoutlineedit45267-ut3.svg"
            class="buat-toko2-s-miconsoutlineedit4"
          />
          <img
            alt="SWMiconsoutlineuser15267"
            src="public/external/swmiconsoutlineuser15267-751k.svg"
            class="buat-toko2-s-miconsoutlineuser1"
          />
          <img
            alt="SWMiconsoutlinecoin5267"
            src="public/external/swmiconsoutlinecoin5267-xt0o.svg"
            class="buat-toko2-s-miconsoutlinecoin"
          />
          <div class="buat-toko2-post-title-text">
            <span class="buat-toko2-text UI-16Medium">
              <span class="buat-toko2-text01">Letak Pasar*</span>
            </span>
            <span class="buat-toko2-text02 UI-16Medium">
              <span class="buat-toko2-text03">Lokasi Toko*</span>
            </span>
            <div class="buat-toko2-s-miconsoutlinechevrondown"></div>
            <span class="buat-toko2-text04 UI-30Medium">
              <span class="buat-toko2-text05">Nama Toko*</span>
            </span>
            <span class="buat-toko2-text06 UI-16Medium">
              <span>
                <span>Deskripsi</span>
                <br />
                <span></span>
              </span>
            </span>
            <span class="buat-toko2-text11 UI-16Medium">
              <span>
                <span>Jam Buka Tutup</span>
                <br />
                <span></span>
              </span>
            </span>
          </div>
          <a
            href="buat-toko-tanggal.html"
            class="buat-toko2-text16 UI-16Regular"
          >
            <span>Dari jam&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;hingga jam</span>
            <br />
          </a>
          <span class="buat-toko2-text19 UI-16Regular">
            <span>
              <span>Setiap hari</span>
              <br />
              <span></span>
            </span>
          </span>
          <img
            alt="shape5267"
            src="public/external/shape5267-ycu.svg"
            class="buat-toko2-shape1"
          />
          <div class="buat-toko2-tambah">
            <div class="buat-toko2-foto"></div>
          </div>
          <img
            alt="Line835267"
            src="public/external/line835267-ciwh.svg"
            class="buat-toko2-line83"
          />
          <img
            alt="Line845267"
            src="public/external/line845267-qepg.svg"
            class="buat-toko2-line84"
          />
          <img
            alt="Line875267"
            src="public/external/line875267-13yc.svg"
            class="buat-toko2-line87"
          />
          <img
            alt="Rectangle2415267"
            src="public/external/rectangle2415267-k1z.svg"
            class="buat-toko2-rectangle241"
          />
          <a href="buat-toko-sukses.html" class="buat-toko2-button-primary">
            <span class="buat-toko2-text24 UI-16Semi">
              <span>Simpan Toko</span>
            </span>
          </a>
          <img
            alt="ToggleiPhone5267"
            src="public/external/toggleiphone5267-k7bq.svg"
            class="buat-toko2-togglei-phone"
          />
          <img
            alt="Line885267"
            src="public/external/line885267-vitk.svg"
            class="buat-toko2-line88"
          />
          <img
            alt="Line855267"
            src="public/external/line855267-gr2.svg"
            class="buat-toko2-line85"
          />
          <img
            alt="Line895267"
            src="public/external/line895267-lnp.svg"
            class="buat-toko2-line89"
          />
        </div>
      </div>
    </div>
  </body>
</html>
