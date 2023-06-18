<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Edit-Barang - EMarket</title>
    <meta property="og:title" content="Edit-Barang - EMarket" />
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
      .edit-barang-container {
    width: 100%;
    display: flex;
    overflow: auto;
    min-height: 100vh;
    align-items: center;
    flex-direction: column;
  }
  .edit-barang-edit-barang8 {
    width: 374px;
    height: 812px;
    display: flex;
    overflow: hidden;
    position: relative;
    align-items: flex-start;
    flex-shrink: 0;
    background-color: var(--dl-color-default-white);
  }
  .edit-barang-i-o-status-bar-white {
    top: 0px;
    left: 0px;
    width: 375px;
    height: 44px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .edit-barang-i-o-status-bar-black {
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
  .edit-barang-bg {
    top: -2px;
    left: 78px;
    width: 219px;
    height: 30px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .edit-barang-notch {
    top: 0px;
    left: 0px;
    width: 219px;
    height: 30px;
    position: absolute;
  }
  .edit-barang-right-side {
    top: 17.3306884765625px;
    left: 293.6666564941406px;
    width: 66.661376953125px;
    height: 11.336018562316895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .edit-barang-battery {
    top: 0.002685546875px;
    left: 42.333343505859375px;
    width: 24.32803726196289px;
    height: 11.333333015441895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .edit-barang-rectangle {
    top: 0px;
    left: 0px;
    width: 22px;
    height: 11px;
    opacity: 0.35;
    position: absolute;
  }
  .edit-barang-combined-shape {
    top: 3.6666667461395264px;
    left: 23px;
    width: 1px;
    height: 4px;
    opacity: 0.40;
    position: absolute;
  }
  .edit-barang-rectangle1 {
    top: 1.9999998807907104px;
    left: 2px;
    width: 18px;
    height: 7px;
    position: absolute;
  }
  .edit-barang-wifi {
    top: 0px;
    left: 22.027069091796875px;
    width: 15px;
    height: 11px;
    position: absolute;
  }
  .edit-barang-mobile-signal {
    top: 0.3359375px;
    left: 0px;
    width: 17px;
    height: 11px;
    position: absolute;
  }
  .edit-barang-left-side {
    top: 17.16748046875px;
    left: 33.453514099121094px;
    width: 28.42616844177246px;
    height: 11.0888671875px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .edit-barang-svg941 {
    top: 0px;
    left: 0px;
    width: 28px;
    height: 11px;
    position: absolute;
  }
  .edit-barang-i-o-status-bar-black1 {
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
  .edit-barang-bg1 {
    top: -2px;
    left: 78px;
    width: 219px;
    height: 30px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .edit-barang-notch1 {
    top: 0px;
    left: 0px;
    width: 219px;
    height: 30px;
    position: absolute;
  }
  .edit-barang-right-side1 {
    top: 17.3306884765625px;
    left: 293.6666564941406px;
    width: 66.661376953125px;
    height: 11.336018562316895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .edit-barang-battery1 {
    top: 0.002685546875px;
    left: 42.333343505859375px;
    width: 24.32803726196289px;
    height: 11.333333015441895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .edit-barang-rectangle2 {
    top: 0px;
    left: 0px;
    width: 22px;
    height: 11px;
    opacity: 0.35;
    position: absolute;
  }
  .edit-barang-combined-shape1 {
    top: 3.6666667461395264px;
    left: 23px;
    width: 1px;
    height: 4px;
    opacity: 0.40;
    position: absolute;
  }
  .edit-barang-rectangle3 {
    top: 1.9999998807907104px;
    left: 2px;
    width: 18px;
    height: 7px;
    position: absolute;
  }
  .edit-barang-wifi1 {
    top: 0px;
    left: 22.027069091796875px;
    width: 15px;
    height: 11px;
    position: absolute;
  }
  .edit-barang-mobile-signal1 {
    top: 0.3359375px;
    left: 0px;
    width: 17px;
    height: 11px;
    position: absolute;
  }
  .edit-barang-left-side1 {
    top: 17.16748046875px;
    left: 33.453514099121094px;
    width: 28.42616844177246px;
    height: 11.0888671875px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .edit-barang-svg9411 {
    top: 0px;
    left: 0px;
    width: 28px;
    height: 11px;
    position: absolute;
  }
  .edit-barang-line81 {
    top: 55px;
    left: 232px;
    width: 9px;
    height: 1px;
    position: absolute;
  }
  .edit-barang-line82 {
    top: 55px;
    left: 244px;
    width: 10px;
    height: 1px;
    position: absolute;
  }
  .edit-barang-post-title-text {
    top: 50px;
    left: 136px;
    width: 343px;
    height: 19px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .edit-barang-text {
    color: var(--dl-color-default-black);
    width: 343px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .edit-barang-ilustrasicaberawit13 {
    top: 95px;
    left: 13px;
    width: 343px;
    height: 203px;
    position: absolute;
  }
  .edit-barang-post-title-text1 {
    top: 323px;
    left: 16px;
    width: 344px;
    height: 283px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .edit-barang-text02 {
    top: 44px;
    left: 1px;
    color: var(--dl-color-default-black);
    width: 343px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .edit-barang-text04 {
    left: 1px;
    color: var(--dl-color-default-black);
    width: 343px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .edit-barang-text06 {
    top: 80px;
    left: 1px;
    color: var(--dl-color-default-black);
    width: 343px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .edit-barang-text08 {
    top: 131px;
    color: var(--dl-color-gray-04);
    width: 343px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .edit-barang-s-miconsoutlineedit4 {
    top: 184px;
    left: 78px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  .edit-barang-rectangle240 {
    top: 94px;
    left: 12px;
    width: 346px;
    height: 204px;
    position: absolute;
  }
  .edit-barang-text19 {
    top: 186px;
    left: 71px;
    color: rgba(255, 255, 255, 1);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .edit-barang-button-primary {
    gap: 12px;
    top: 667px;
    left: 15px;
    width: 343px;
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
  .edit-barang-text21 {
    color: var(--dl-color-default-white);
    height: auto;
    text-align: center;
    line-height: normal;
  }
  .edit-barang-s-miconsoutlineedit41 {
    top: 368px;
    left: 133px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  .edit-barang-text23 {
    top: 641px;
    left: 43px;
    color: var(--dl-color-green-primary);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .edit-barang-i-o-bottom-bar-tabs {
    top: 730px;
    left: -419px;
    width: 375px;
    height: 83.5px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .edit-barang-i-phone-ui {
    top: 69.5px;
    left: 120px;
    width: 134px;
    height: 5px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .edit-barang-home-indicator {
    top: 0px;
    left: 0px;
    width: 134px;
    height: 5px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
    background-color: rgba(0, 0, 0, 1);
  }
  .edit-barang-text25 {
    top: 50px;
    left: 17px;
    color: var(--dl-color-green-primary);
    height: auto;
    position: absolute;
    text-align: right;
    line-height: normal;
    text-decoration: none;
  }
  .edit-barang-i-o-bottom-bar-tabs1 {
    top: 729px;
    left: 0px;
    width: 375px;
    height: 83.5px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .edit-barang-i-phone-ui1 {
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
  .edit-barang-home-indicator1 {
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
  .edit-barang-tabs {
    top: 15px;
    left: 26px;
    width: 320px;
    height: 32px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .edit-barang-navlink {
    display: contents;
  }
  .edit-barang-rectangle9 {
    top: 0px;
    left: 0px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  .edit-barang-navlink1 {
    display: contents;
  }
  .edit-barang-rectangle10 {
    top: 0px;
    left: 72px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  .edit-barang-navlink2 {
    display: contents;
  }
  .edit-barang-rectangle11 {
    top: 0px;
    left: 144px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  .edit-barang-navlink3 {
    display: contents;
  }
  .edit-barang-rectangle12 {
    top: 0px;
    left: 216px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  .edit-barang-navlink4 {
    display: contents;
  }
  .edit-barang-rectangle13 {
    top: 0px;
    left: 288px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  .edit-barang-logo {
    top: 18px;
    left: 34.19921875px;
    width: 307.80078125px;
    height: 24px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .edit-barang-shape {
    top: 3px;
    left: 0px;
    width: 16px;
    height: 17px;
    position: absolute;
  }
  .edit-barang-shape1 {
    top: 3px;
    left: 71.80078125px;
    width: 16px;
    height: 18px;
    position: absolute;
  }
  .edit-barang-s-miconsoutlineedit42 {
    top: 0px;
    left: 211.80078125px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  .edit-barang-s-miconsoutlineuser1 {
    top: 0px;
    left: 139.80078125px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  .edit-barang-s-miconsoutlinecoin {
    top: 0px;
    left: 283.80078125px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  .edit-barang-top-divider {
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
      <!-- <link href="./edit-barang.css" rel="stylesheet" /> -->

      <div class="edit-barang-container">
        <div class="edit-barang-edit-barang8">
          <div class="edit-barang-i-o-status-bar-white">
            <div class="edit-barang-i-o-status-bar-black">
              <div class="edit-barang-bg">
                <img
                  alt="NotchI526"
                  src="public/external/notchi526-nkyj.svg"
                  class="edit-barang-notch"
                />
              </div>
              <div class="edit-barang-right-side">
                <div class="edit-barang-battery">
                  <img
                    alt="RectangleI526"
                    src="public/external/rectanglei526-pows.svg"
                    class="edit-barang-rectangle"
                  />
                  <img
                    alt="CombinedShapeI526"
                    src="public/external/combinedshapei526-lba2q.svg"
                    class="edit-barang-combined-shape"
                  />
                  <img
                    alt="RectangleI526"
                    src="public/external/rectanglei526-8z1c.svg"
                    class="edit-barang-rectangle1"
                  />
                </div>
                <img
                  alt="WifiI526"
                  src="public/external/wifii526-7iqh.svg"
                  class="edit-barang-wifi"
                />
                <img
                  alt="MobileSignalI526"
                  src="public/external/mobilesignali526-1is.svg"
                  class="edit-barang-mobile-signal"
                />
              </div>
              <div class="edit-barang-left-side">
                <img
                  alt="SVG941I526"
                  src="public/external/svg941i526-q2z.svg"
                  class="edit-barang-svg941"
                />
              </div>
            </div>
          </div>
          <div class="edit-barang-i-o-status-bar-black1">
            <div class="edit-barang-bg1">
              <img
                alt="NotchI526"
                src="public/external/notchi526-fdxb.svg"
                class="edit-barang-notch1"
              />
            </div>
            <div class="edit-barang-right-side1">
              <div class="edit-barang-battery1">
                <img
                  alt="RectangleI526"
                  src="public/external/rectanglei526-tom9.svg"
                  class="edit-barang-rectangle2"
                />
                <img
                  alt="CombinedShapeI526"
                  src="public/external/combinedshapei526-8ypl.svg"
                  class="edit-barang-combined-shape1"
                />
                <img
                  alt="RectangleI526"
                  src="public/external/rectanglei526-0bhi.svg"
                  class="edit-barang-rectangle3"
                />
              </div>
              <img
                alt="WifiI526"
                src="public/external/wifii526-pub.svg"
                class="edit-barang-wifi1"
              />
              <img
                alt="MobileSignalI526"
                src="public/external/mobilesignali526-sat.svg"
                class="edit-barang-mobile-signal1"
              />
            </div>
            <div class="edit-barang-left-side1">
              <img
                alt="SVG941I526"
                src="public/external/svg941i526-t3v.svg"
                class="edit-barang-svg9411"
              />
            </div>
          </div>
          <img
            alt="Line815268"
            src="public/external/line815268-ba9.svg"
            class="edit-barang-line81"
          />
          <img
            alt="Line825268"
            src="public/external/line825268-fae.svg"
            class="edit-barang-line82"
          />
          <div class="edit-barang-post-title-text">
            <span class="edit-barang-text UI-16Semi">
              <span>Toko Madju</span>
            </span>
          </div>
          <img
            alt="ilustrasicaberawit135268"
            src="public/external/ilustrasicaberawit135268-o76j-300h.png"
            class="edit-barang-ilustrasicaberawit13"
          />
          <div class="edit-barang-post-title-text1">
            <span class="edit-barang-text02 UI-30Medium">
              <span>Rp16.000</span>
            </span>
            <span class="edit-barang-text04 UI-30Medium">
              <span>Cabe Rawit Merah - 250 gr</span>
            </span>
            <span class="edit-barang-text06 UI-16Semi">
              <span>Toko Madju - Pasar Keputih</span>
            </span>
            <span class="edit-barang-text08 UI-16Medium">
              <span>
                <span>Status : Tersedia</span>
                <br />
                <span>Stok : 10.000 gram</span>
                <br />
                <span></span>
                <br />
                <span>Deskripsi:</span>
                <br />
                <span>
                  Ready yah rawit merah fresh &amp; berkualitas. Order sebelum
                  Jam 13.30 akan dikirim dihari yang sama. Silahkan diorder
                  yaa..Happy shopping 😁
                </span>
              </span>
            </span>
            <img
              alt="SWMiconsoutlineedit45268"
              src="public/external/swmiconsoutlineedit45268-hanq.svg"
              class="edit-barang-s-miconsoutlineedit4"
            />
          </div>
          <img
            alt="Rectangle2405268"
            src="public/external/rectangle2405268-oexa-300h.png"
            class="edit-barang-rectangle240"
          />
          <span class="edit-barang-text19 UI-16Semi">
            <span>Ketuk untuk mengedit gambar</span>
          </span>
          <a href="preview-barang.html" class="edit-barang-button-primary">
            <span class="edit-barang-text21 UI-16Semi">
              <span>Simpan Perubahan</span>
            </span>
          </a>
          <img
            alt="SWMiconsoutlineedit45268"
            src="public/external/swmiconsoutlineedit45268-g2zp.svg"
            class="edit-barang-s-miconsoutlineedit41"
          />
          <span class="edit-barang-text23 UI-14Semi">
            <span>Ketuk tulisan untuk melakukan perubahan</span>
          </span>
          <div class="edit-barang-i-o-bottom-bar-tabs">
            <div class="edit-barang-i-phone-ui">
              <div class="edit-barang-home-indicator"></div>
            </div>
          </div>
          <a href="preview-barang.html" class="edit-barang-text25 UI-16Medium">
            <span>Kembali</span>
          </a>
          <div class="edit-barang-i-o-bottom-bar-tabs1">
            <div class="edit-barang-i-phone-ui1">
              <div class="edit-barang-home-indicator1"></div>
            </div>
            <div class="edit-barang-tabs">
              <a href="{{ url('/cariBarangHome') }}" class="edit-barang-navlink">
                <img
                  alt="Rectangle95818"
                  src="public/external/rectangle95818-t1ra-200h.png"
                  class="edit-barang-rectangle9"
                />
              </a>
              <a href="{{ url('/cariTokoHome') }}" class="edit-barang-navlink1">
                <img
                  alt="Rectangle105818"
                  src="public/external/rectangle105818-z4rp-200h.png"
                  class="edit-barang-rectangle10"
                />
              </a>
              <a href="{{ url('/pengaturanAkun') }}" class="edit-barang-navlink2">
                <img
                  alt="Rectangle115818"
                  src="public/external/rectangle115818-dse-200h.png"
                  class="edit-barang-rectangle11"
                />
              </a>
              <a href="{{ url('/etalaseTokoHome') }}" class="edit-barang-navlink3">
                <img
                  alt="Rectangle125818"
                  src="public/external/rectangle125818-ia4-200h.png"
                  class="edit-barang-rectangle12"
                />
              </a>
              <a href="{{ url('/hargaBarangHome') }}" class="edit-barang-navlink4">
                <img
                  alt="Rectangle135818"
                  src="public/external/rectangle135818-aohr-200h.png"
                  class="edit-barang-rectangle13"
                />
              </a>
            </div>
            <div class="edit-barang-logo">
              <img
                alt="shape5818"
                src="public/external/shape5818-kxb.svg"
                class="edit-barang-shape"
              />
              <img
                alt="shape5818"
                src="public/external/shape5818-zsy4.svg"
                class="edit-barang-shape1"
              />
              <img
                alt="SWMiconsoutlineedit45818"
                src="public/external/swmiconsoutlineedit45818-fw0m.svg"
                class="edit-barang-s-miconsoutlineedit42"
              />
              <img
                alt="SWMiconsoutlineuser15818"
                src="public/external/swmiconsoutlineuser15818-97n8.svg"
                class="edit-barang-s-miconsoutlineuser1"
              />
              <img
                alt="SWMiconsoutlinecoin5818"
                src="public/external/swmiconsoutlinecoin5818-y44.svg"
                class="edit-barang-s-miconsoutlinecoin"
              />
            </div>
            <img
              alt="TopDivider5818"
              src="public/external/topdivider5818-eb3-200h.png"
              class="edit-barang-top-divider"
            />
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
