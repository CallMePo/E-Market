<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tambah-Barang - EMarket</title>
    <meta property="og:title" content="Tambah-Barang - EMarket" />
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
      .tambah-barang-container {
      width: 100%;
      display: flex;
      overflow: auto;
      min-height: 100vh;
      align-items: center;
      flex-direction: column;
    }
    .tambah-barang-tambahbarang {
      width: 372px;
      height: 812px;
      display: flex;
      overflow: hidden;
      position: relative;
      align-items: flex-start;
      flex-shrink: 0;
      background-color: var(--dl-color-default-white);
    }
    .tambah-barang-i-o-status-bar-white {
      top: 0px;
      left: 0px;
      width: 375px;
      height: 44px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .tambah-barang-i-o-status-bar-black {
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
    .tambah-barang-bg {
      top: -2px;
      left: 78px;
      width: 219px;
      height: 30px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .tambah-barang-notch {
      top: 0px;
      left: 0px;
      width: 219px;
      height: 30px;
      position: absolute;
    }
    .tambah-barang-right-side {
      top: 17.3306884765625px;
      left: 293.6666564941406px;
      width: 66.661376953125px;
      height: 11.336018562316895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .tambah-barang-battery {
      top: 0.002685546875px;
      left: 42.333343505859375px;
      width: 24.32803726196289px;
      height: 11.333333015441895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .tambah-barang-rectangle {
      top: 0px;
      left: 0px;
      width: 22px;
      height: 11px;
      opacity: 0.35;
      position: absolute;
    }
    .tambah-barang-combined-shape {
      top: 3.6666667461395264px;
      left: 23px;
      width: 1px;
      height: 4px;
      opacity: 0.40;
      position: absolute;
    }
    .tambah-barang-rectangle1 {
      top: 1.9999998807907104px;
      left: 2px;
      width: 18px;
      height: 7px;
      position: absolute;
    }
    .tambah-barang-wifi {
      top: 0px;
      left: 22.027069091796875px;
      width: 15px;
      height: 11px;
      position: absolute;
    }
    .tambah-barang-mobile-signal {
      top: 0.3359375px;
      left: 0px;
      width: 17px;
      height: 11px;
      position: absolute;
    }
    .tambah-barang-left-side {
      top: 17.16748046875px;
      left: 33.453514099121094px;
      width: 28.42616844177246px;
      height: 11.0888671875px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .tambah-barang-svg941 {
      top: 0px;
      left: 0px;
      width: 28px;
      height: 11px;
      position: absolute;
    }
    .tambah-barang-i-o-status-bar-black1 {
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
    .tambah-barang-bg1 {
      top: -2px;
      left: 78px;
      width: 219px;
      height: 30px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .tambah-barang-notch1 {
      top: 0px;
      left: 0px;
      width: 219px;
      height: 30px;
      position: absolute;
    }
    .tambah-barang-right-side1 {
      top: 17.3306884765625px;
      left: 293.6666564941406px;
      width: 66.661376953125px;
      height: 11.336018562316895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .tambah-barang-battery1 {
      top: 0.002685546875px;
      left: 42.333343505859375px;
      width: 24.32803726196289px;
      height: 11.333333015441895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .tambah-barang-rectangle2 {
      top: 0px;
      left: 0px;
      width: 22px;
      height: 11px;
      opacity: 0.35;
      position: absolute;
    }
    .tambah-barang-combined-shape1 {
      top: 3.6666667461395264px;
      left: 23px;
      width: 1px;
      height: 4px;
      opacity: 0.40;
      position: absolute;
    }
    .tambah-barang-rectangle3 {
      top: 1.9999998807907104px;
      left: 2px;
      width: 18px;
      height: 7px;
      position: absolute;
    }
    .tambah-barang-wifi1 {
      top: 0px;
      left: 22.027069091796875px;
      width: 15px;
      height: 11px;
      position: absolute;
    }
    .tambah-barang-mobile-signal1 {
      top: 0.3359375px;
      left: 0px;
      width: 17px;
      height: 11px;
      position: absolute;
    }
    .tambah-barang-left-side1 {
      top: 17.16748046875px;
      left: 33.453514099121094px;
      width: 28.42616844177246px;
      height: 11.0888671875px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .tambah-barang-svg9411 {
      top: 0px;
      left: 0px;
      width: 28px;
      height: 11px;
      position: absolute;
    }
    .tambah-barang-line81 {
      top: 55px;
      left: 232px;
      width: 9px;
      height: 1px;
      position: absolute;
    }
    .tambah-barang-line82 {
      top: 55px;
      left: 244px;
      width: 10px;
      height: 1px;
      position: absolute;
    }
    .tambah-barang-home-indicator {
      top: 68.5px;
      left: 120px;
      width: 134px;
      height: 5px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
      background-color: rgba(0, 0, 0, 1);
    }
    .tambah-barang-home-indicator1 {
      top: 68.5px;
      left: 120px;
      width: 134px;
      height: 5px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
      background-color: rgba(0, 0, 0, 1);
    }
    .tambah-barang-post-title-text {
      top: 48px;
      left: 136px;
      width: 343px;
      height: 19px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .tambah-barang-text {
      color: var(--dl-color-default-black);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .tambah-barang-post-title-text1 {
      top: 322px;
      left: 15px;
      width: 344px;
      height: 226px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .tambah-barang-text02 {
      top: 44px;
      left: 1px;
      color: rgba(0, 0, 0, 1);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .tambah-barang-text03 {
      color: var(--dl-color-default-black);
    }
    .tambah-barang-text04 {
      color: var(--dl-color-gray-03);
    }
    .tambah-barang-text05 {
      left: 1px;
      color: rgba(189, 189, 189, 1);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .tambah-barang-text06 {
      color: var(--dl-color-gray-03);
    }
    .tambah-barang-text07 {
      top: 80px;
      left: 1px;
      color: var(--dl-color-default-black);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .tambah-barang-text09 {
      top: 131px;
      color: rgba(0, 0, 0, 1);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .tambah-barang-text10 {
      color: var(--dl-color-default-black);
    }
    .tambah-barang-text11 {
      color: var(--dl-color-default-merahwarning);
    }
    .tambah-barang-text15 {
      color: var(--dl-color-default-black);
    }
    .tambah-barang-text16 {
      color: var(--dl-color-default-merahwarning);
    }
    .tambah-barang-text17 {
      color: var(--dl-color-gray-04);
    }
    .tambah-barang-image-block {
      top: 107px;
      left: 17px;
      width: 343px;
      height: 196px;
      position: absolute;
      border-radius: 8px;
    }
    .tambah-barang-tambah {
      top: 175px;
      left: 158px;
      width: 60px;
      border: 2px dashed rgba(120, 120, 120, 0.4);
      height: 60px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .tambah-barang-line83 {
      top: 354px;
      left: 17px;
      width: 339px;
      height: 1px;
      position: absolute;
    }
    .tambah-barang-line84 {
      top: 398px;
      left: 17px;
      width: 339px;
      height: 1px;
      position: absolute;
    }
    .tambah-barang-line85 {
      top: 468px;
      left: 75px;
      width: 288px;
      height: 1px;
      position: absolute;
    }
    .tambah-barang-line86 {
      top: 487px;
      left: 75px;
      width: 288px;
      height: 1px;
      position: absolute;
    }
    .tambah-barang-rectangle241 {
      top: 538px;
      left: 16px;
      width: 348px;
      height: 19px;
      position: absolute;
    }
    .tambah-barang-button-primary {
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
    .tambah-barang-text27 {
      color: var(--dl-color-default-white);
      height: auto;
      text-align: center;
      line-height: normal;
    }
    .tambah-barang-i-o-bottom-bar-tabs {
      top: 729px;
      left: 0px;
      width: 375px;
      height: 83.5px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .tambah-barang-i-phone-ui {
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
    .tambah-barang-home-indicator2 {
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
    .tambah-barang-tabs {
      top: 15px;
      left: 26px;
      width: 320px;
      height: 32px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .tambah-barang-navlink {
      display: contents;
    }
    .tambah-barang-rectangle9 {
      top: 0px;
      left: 0px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .tambah-barang-navlink1 {
      display: contents;
    }
    .tambah-barang-rectangle10 {
      top: 0px;
      left: 72px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .tambah-barang-navlink2 {
      display: contents;
    }
    .tambah-barang-rectangle11 {
      top: 0px;
      left: 144px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .tambah-barang-navlink3 {
      display: contents;
    }
    .tambah-barang-rectangle12 {
      top: 0px;
      left: 216px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .tambah-barang-navlink4 {
      display: contents;
    }
    .tambah-barang-rectangle13 {
      top: 0px;
      left: 288px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .tambah-barang-logo {
      top: 18px;
      left: 34.19921875px;
      width: 307.80078125px;
      height: 24px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .tambah-barang-shape {
      top: 3px;
      left: 0px;
      width: 16px;
      height: 17px;
      position: absolute;
    }
    .tambah-barang-shape1 {
      top: 3px;
      left: 71.80078125px;
      width: 16px;
      height: 18px;
      position: absolute;
    }
    .tambah-barang-s-miconsoutlineedit4 {
      top: 0px;
      left: 211.80078125px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .tambah-barang-s-miconsoutlineuser1 {
      top: 0px;
      left: 139.80078125px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .tambah-barang-s-miconsoutlinecoin {
      top: 0px;
      left: 283.80078125px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .tambah-barang-top-divider {
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
      <!-- <link href="./tambah-barang.css" rel="stylesheet" /> -->

      <div class="tambah-barang-container">
        <div class="tambah-barang-tambahbarang">
          <div class="tambah-barang-i-o-status-bar-white">
            <div class="tambah-barang-i-o-status-bar-black">
              <div class="tambah-barang-bg">
                <img
                  alt="NotchI526"
                  src="public/external/notchi526-02ui.svg"
                  class="tambah-barang-notch"
                />
              </div>
              <div class="tambah-barang-right-side">
                <div class="tambah-barang-battery">
                  <img
                    alt="RectangleI526"
                    src="public/external/rectanglei526-5mn.svg"
                    class="tambah-barang-rectangle"
                  />
                  <img
                    alt="CombinedShapeI526"
                    src="public/external/combinedshapei526-eiu.svg"
                    class="tambah-barang-combined-shape"
                  />
                  <img
                    alt="RectangleI526"
                    src="public/external/rectanglei526-7u2j.svg"
                    class="tambah-barang-rectangle1"
                  />
                </div>
                <img
                  alt="WifiI526"
                  src="public/external/wifii526-lmxq.svg"
                  class="tambah-barang-wifi"
                />
                <img
                  alt="MobileSignalI526"
                  src="public/external/mobilesignali526-ew3f.svg"
                  class="tambah-barang-mobile-signal"
                />
              </div>
              <div class="tambah-barang-left-side">
                <img
                  alt="SVG941I526"
                  src="public/external/svg941i526-z5a4.svg"
                  class="tambah-barang-svg941"
                />
              </div>
            </div>
          </div>
          <div class="tambah-barang-i-o-status-bar-black1">
            <div class="tambah-barang-bg1">
              <img
                alt="NotchI526"
                src="public/external/notchi526-fw39.svg"
                class="tambah-barang-notch1"
              />
            </div>
            <div class="tambah-barang-right-side1">
              <div class="tambah-barang-battery1">
                <img
                  alt="RectangleI526"
                  src="public/external/rectanglei526-3mro.svg"
                  class="tambah-barang-rectangle2"
                />
                <img
                  alt="CombinedShapeI526"
                  src="public/external/combinedshapei526-nsnq.svg"
                  class="tambah-barang-combined-shape1"
                />
                <img
                  alt="RectangleI526"
                  src="public/external/rectanglei526-mqz9.svg"
                  class="tambah-barang-rectangle3"
                />
              </div>
              <img
                alt="WifiI526"
                src="public/external/wifii526-g3im.svg"
                class="tambah-barang-wifi1"
              />
              <img
                alt="MobileSignalI526"
                src="public/external/mobilesignali526-5lxw.svg"
                class="tambah-barang-mobile-signal1"
              />
            </div>
            <div class="tambah-barang-left-side1">
              <img
                alt="SVG941I526"
                src="public/external/svg941i526-2btc.svg"
                class="tambah-barang-svg9411"
              />
            </div>
          </div>
          <img
            alt="Line815268"
            src="public/external/line815268-1fc9.svg"
            class="tambah-barang-line81"
          />
          <img
            alt="Line825268"
            src="public/external/line825268-vp9l.svg"
            class="tambah-barang-line82"
          />
          <div class="tambah-barang-home-indicator"></div>
          <div class="tambah-barang-home-indicator1"></div>
          <div class="tambah-barang-post-title-text">
            <span class="tambah-barang-text UI-16Semi">
              <span>Toko Madju</span>
            </span>
          </div>
          <div class="tambah-barang-post-title-text1">
            <span class="tambah-barang-text02 UI-30Medium">
              <span class="tambah-barang-text03">Rp</span>
              <span class="tambah-barang-text04">Harga Barang*</span>
            </span>
            <span class="tambah-barang-text05 UI-30Medium">
              <span class="tambah-barang-text06">Nama Barang*</span>
            </span>
            <span class="tambah-barang-text07 UI-16Semi">
              <span>Toko Madju - Pasar Keputih</span>
            </span>
            <span class="tambah-barang-text09 UI-16Medium">
              <span class="tambah-barang-text10">Status</span>
              <span class="tambah-barang-text11">
                <span>*</span>
                <br />
                <span></span>
              </span>
              <span class="tambah-barang-text15">Stok</span>
              <span class="tambah-barang-text16">*</span>
              <span class="tambah-barang-text17">
                <span></span>
                <br />
                <span></span>
                <br />
                <span></span>
              </span>
              <span>
                <span>Deskripsi</span>
                <br />
                <span></span>
              </span>
            </span>
          </div>
          <img
            alt="ImageBlock5268"
            src="public/external/imageblock5268-3jap-400w.png"
            class="tambah-barang-image-block"
          />
          <div class="tambah-barang-tambah"></div>
          <img
            alt="Line835268"
            src="public/external/line835268-31a.svg"
            class="tambah-barang-line83"
          />
          <img
            alt="Line845268"
            src="public/external/line845268-we89.svg"
            class="tambah-barang-line84"
          />
          <img
            alt="Line855268"
            src="public/external/line855268-lqav.svg"
            class="tambah-barang-line85"
          />
          <img
            alt="Line865268"
            src="public/external/line865268-prm.svg"
            class="tambah-barang-line86"
          />
          <img
            alt="Rectangle2415268"
            src="public/external/rectangle2415268-reae.svg"
            class="tambah-barang-rectangle241"
          />
          <a href="preview-barang.html" class="tambah-barang-button-primary">
            <span class="tambah-barang-text27 UI-16Semi">
              <span>Tambahkan</span>
            </span>
          </a>
          <div class="tambah-barang-i-o-bottom-bar-tabs">
            <div class="tambah-barang-i-phone-ui">
              <div class="tambah-barang-home-indicator2"></div>
            </div>
            <div class="tambah-barang-tabs">
              <a href="{{ url('/cariBarangHome') }}" class="tambah-barang-navlink">
                <img
                  alt="Rectangle95818"
                  src="public/external/rectangle95818-fwes-200h.png"
                  class="tambah-barang-rectangle9"
                />
              </a>
              <a href="{{ url('/cariTokoHome') }}" class="tambah-barang-navlink1">
                <img
                  alt="Rectangle105818"
                  src="public/external/rectangle105818-wz2x-200h.png"
                  class="tambah-barang-rectangle10"
                />
              </a>
              <a href="{{ url('/pengaturanAkun') }}" class="tambah-barang-navlink2">
                <img
                  alt="Rectangle115818"
                  src="public/external/rectangle115818-2c0f-200h.png"
                  class="tambah-barang-rectangle11"
                />
              </a>
              <a href="{{ url('/etalaseTokoHome') }}" class="tambah-barang-navlink3">
                <img
                  alt="Rectangle125818"
                  src="public/external/rectangle125818-rd4g-200h.png"
                  class="tambah-barang-rectangle12"
                />
              </a>
              <a href="{{ url('/hargaBarangHome') }}" class="tambah-barang-navlink4">
                <img
                  alt="Rectangle135818"
                  src="public/external/rectangle135818-7zsp-200h.png"
                  class="tambah-barang-rectangle13"
                />
              </a>
            </div>
            <div class="tambah-barang-logo">
              <img
                alt="shape5818"
                src="public/external/shape5818-t9ws.svg"
                class="tambah-barang-shape"
              />
              <img
                alt="shape5818"
                src="public/external/shape5818-g9s.svg"
                class="tambah-barang-shape1"
              />
              <img
                alt="SWMiconsoutlineedit45818"
                src="public/external/swmiconsoutlineedit45818-2vm.svg"
                class="tambah-barang-s-miconsoutlineedit4"
              />
              <img
                alt="SWMiconsoutlineuser15818"
                src="public/external/swmiconsoutlineuser15818-e0rm.svg"
                class="tambah-barang-s-miconsoutlineuser1"
              />
              <img
                alt="SWMiconsoutlinecoin5818"
                src="public/external/swmiconsoutlinecoin5818-tut6.svg"
                class="tambah-barang-s-miconsoutlinecoin"
              />
            </div>
            <img
              alt="TopDivider5818"
              src="public/external/topdivider5818-oqy-200h.png"
              class="tambah-barang-top-divider"
            />
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
