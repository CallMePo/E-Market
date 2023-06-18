<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Informasi-Barang - EMarket</title>
    <meta property="og:title" content="Informasi-Barang - EMarket" />
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
      .informasi-barang-container {
      width: 100%;
      display: flex;
      overflow: auto;
      min-height: 100vh;
      align-items: center;
      flex-direction: column;
    }
    .informasi-barang-informasi-barang {
      width: 369px;
      height: 812px;
      display: flex;
      overflow: hidden;
      position: relative;
      align-items: flex-start;
      flex-shrink: 0;
      background-color: var(--dl-color-default-white);
    }
    .informasi-barang-i-o-status-bar-black {
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
    .informasi-barang-bg {
      top: -2px;
      left: 78px;
      width: 219px;
      height: 30px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-barang-notch {
      top: 0px;
      left: 0px;
      width: 219px;
      height: 30px;
      position: absolute;
    }
    .informasi-barang-right-side {
      top: 17.3306884765625px;
      left: 293.6666564941406px;
      width: 66.661376953125px;
      height: 11.336018562316895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-barang-battery {
      top: 0.002685546875px;
      left: 42.333343505859375px;
      width: 24.32803726196289px;
      height: 11.333333015441895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-barang-rectangle {
      top: 0px;
      left: 0px;
      width: 22px;
      height: 11px;
      opacity: 0.35;
      position: absolute;
    }
    .informasi-barang-combined-shape {
      top: 3.6666667461395264px;
      left: 23px;
      width: 1px;
      height: 4px;
      opacity: 0.40;
      position: absolute;
    }
    .informasi-barang-rectangle1 {
      top: 1.9999998807907104px;
      left: 2px;
      width: 18px;
      height: 7px;
      position: absolute;
    }
    .informasi-barang-wifi {
      top: 0px;
      left: 22.027069091796875px;
      width: 15px;
      height: 11px;
      position: absolute;
    }
    .informasi-barang-mobile-signal {
      top: 0.3359375px;
      left: 0px;
      width: 17px;
      height: 11px;
      position: absolute;
    }
    .informasi-barang-left-side {
      top: 17.16748046875px;
      left: 33.453514099121094px;
      width: 28.42616844177246px;
      height: 11.0888671875px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-barang-svg941 {
      top: 0px;
      left: 0px;
      width: 28px;
      height: 11px;
      position: absolute;
    }
    .informasi-barang-image-block {
      top: 76px;
      left: 16px;
      width: 343px;
      height: 196px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-barang-post-title-text {
      top: 291px;
      left: 14px;
      width: 344px;
      height: 283px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-barang-text {
      top: 44px;
      left: 1px;
      color: var(--dl-color-default-black);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-barang-text02 {
      left: 1px;
      color: var(--dl-color-default-black);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-barang-text04 {
      top: 80px;
      left: 1px;
      color: var(--dl-color-default-black);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-barang-text06 {
      top: 131px;
      color: var(--dl-color-gray-04);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-barang-i-o-bottom-bar-tabs {
      top: 729px;
      left: 0px;
      width: 375px;
      height: 83.5px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-barang-i-phone-ui {
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
    .informasi-barang-home-indicator {
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
    .informasi-barang-tabs {
      top: 15px;
      left: 26px;
      width: 320px;
      height: 32px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-barang-rectangle9 {
      top: 0px;
      left: 0px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
    }
    .informasi-barang-rectangle10 {
      top: 0px;
      left: 72px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
    }
    .informasi-barang-rectangle11 {
      top: 0px;
      left: 144px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
    }
    .informasi-barang-rectangle12 {
      top: 0px;
      left: 216px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
    }
    .informasi-barang-rectangle13 {
      top: 0px;
      left: 288px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
    }
    .informasi-barang-top-divider {
      top: 0.5px;
      left: 0px;
      width: 375px;
      height: 0px;
      position: absolute;
    }
    .informasi-barang-ilustrasicaberawit12 {
      top: 66px;
      left: 16px;
      width: 343px;
      height: 203px;
      position: absolute;
    }
    .informasi-barang-button-primary {
      gap: 12px;
      top: 611px;
      left: 16px;
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
    .informasi-barang-text17 {
      color: var(--dl-color-default-white);
      height: auto;
      text-align: center;
      line-height: normal;
    }
    .informasi-barang-i-o-bottom-bar-tabs1 {
      top: 729px;
      left: 0px;
      width: 375px;
      height: 83.5px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-barang-i-phone-ui1 {
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
    .informasi-barang-home-indicator1 {
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
    .informasi-barang-tabs1 {
      top: 15px;
      left: 26px;
      width: 320px;
      height: 32px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-barang-navlink {
      display: contents;
    }
    .informasi-barang-rectangle91 {
      top: 0px;
      left: 0px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .informasi-barang-navlink1 {
      display: contents;
    }
    .informasi-barang-rectangle101 {
      top: 0px;
      left: 72px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .informasi-barang-navlink2 {
      display: contents;
    }
    .informasi-barang-rectangle111 {
      top: 0px;
      left: 144px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .informasi-barang-navlink3 {
      display: contents;
    }
    .informasi-barang-rectangle121 {
      top: 0px;
      left: 216px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .informasi-barang-navlink4 {
      display: contents;
    }
    .informasi-barang-rectangle131 {
      top: 0px;
      left: 288px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .informasi-barang-top-divider1 {
      top: 0.5px;
      left: 0px;
      width: 375px;
      height: 0px;
      position: absolute;
    }
    .informasi-barang-s-miconsoutlinecart2 {
      top: 748px;
      left: 30px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .informasi-barang-s-miconsoutlinelocation1 {
      top: 748px;
      left: 102px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .informasi-barang-s-miconsoutlineedit4 {
      top: 748px;
      left: 246px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .informasi-barang-s-miconsoutlineuser1 {
      top: 748px;
      left: 174px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .informasi-barang-s-miconsoutlinecoin {
      top: 748px;
      left: 318px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .informasi-barang-text19 {
      top: 44px;
      left: 16px;
      color: var(--dl-color-green-primary);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
      text-decoration: none;
    }
    
    </style>
  </head>
  <body>
    <div>
      <!-- <link href="./informasi-barang.css" rel="stylesheet" /> -->

      <div class="informasi-barang-container">
        <div class="informasi-barang-informasi-barang">
          <div class="informasi-barang-i-o-status-bar-black">
            <div class="informasi-barang-bg">
              <img
                alt="NotchI467"
                src="public/external/notchi467-obma.svg"
                class="informasi-barang-notch"
              />
            </div>
            <div class="informasi-barang-right-side">
              <div class="informasi-barang-battery">
                <img
                  alt="RectangleI467"
                  src="public/external/rectanglei467-ns2r.svg"
                  class="informasi-barang-rectangle"
                />
                <img
                  alt="CombinedShapeI467"
                  src="public/external/combinedshapei467-bqf.svg"
                  class="informasi-barang-combined-shape"
                />
                <img
                  alt="RectangleI467"
                  src="public/external/rectanglei467-zc14.svg"
                  class="informasi-barang-rectangle1"
                />
              </div>
              <img
                alt="WifiI467"
                src="public/external/wifii467-qdm.svg"
                class="informasi-barang-wifi"
              />
              <img
                alt="MobileSignalI467"
                src="public/external/mobilesignali467-zgu.svg"
                class="informasi-barang-mobile-signal"
              />
            </div>
            <div class="informasi-barang-left-side">
              <img
                alt="SVG941I467"
                src="public/external/svg941i467-glqk.svg"
                class="informasi-barang-svg941"
              />
            </div>
          </div>
          <img
            alt="ImageBlock4673"
            src="public/external/imageblock4673-pgua-400w.png"
            class="informasi-barang-image-block"
          />
          <div class="informasi-barang-post-title-text">
            <span class="informasi-barang-text UI-30Medium">
              <span>Rp16.000</span>
            </span>
            <span class="informasi-barang-text02 UI-30Medium">
              <span>Cabe Rawit Merah - 250 gr</span>
            </span>
            <span class="informasi-barang-text04 UI-16Semi">
              <span>Toko Sejahtera - Pasar Keputih</span>
            </span>
            <span class="informasi-barang-text06 UI-16Medium">
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
          </div>
          <div class="informasi-barang-i-o-bottom-bar-tabs">
            <div class="informasi-barang-i-phone-ui">
              <div class="informasi-barang-home-indicator"></div>
            </div>
            <div class="informasi-barang-tabs">
              <img
                alt="Rectangle9I467"
                src="public/external/rectangle9i467-j6m7-200h.png"
                class="informasi-barang-rectangle9"
              />
              <img
                alt="Rectangle10I467"
                src="public/external/rectangle10i467-ffuq-200h.png"
                class="informasi-barang-rectangle10"
              />
              <img
                alt="Rectangle11I467"
                src="public/external/rectangle11i467-3649i-200h.png"
                class="informasi-barang-rectangle11"
              />
              <img
                alt="Rectangle12I467"
                src="public/external/rectangle12i467-zwv-200h.png"
                class="informasi-barang-rectangle12"
              />
              <img
                alt="Rectangle13I467"
                src="public/external/rectangle13i467-nbpm-200h.png"
                class="informasi-barang-rectangle13"
              />
            </div>
            <img
              alt="TopDividerI467"
              src="public/external/topdivideri467-0qki-200h.png"
              class="informasi-barang-top-divider"
            />
          </div>
          <img
            alt="ilustrasicaberawit124673"
            src="public/external/ilustrasicaberawit124673-6y4p-300h.png"
            class="informasi-barang-ilustrasicaberawit12"
          />
          <a href="informasi-toko.html" class="informasi-barang-button-primary">
            <span class="informasi-barang-text17 UI-16Semi">
              <span>Kunjungi Toko</span>
            </span>
          </a>
          <div class="informasi-barang-i-o-bottom-bar-tabs1">
            <div class="informasi-barang-i-phone-ui1">
              <div class="informasi-barang-home-indicator1"></div>
            </div>
            <div class="informasi-barang-tabs1">
              <a href="{{ url('/cariBarangHome') }}" class="informasi-barang-navlink">
                <img
                  alt="Rectangle9I467"
                  src="public/external/rectangle9i467-w90s-200h.png"
                  class="informasi-barang-rectangle91"
                />
              </a>
              <a href="{{ url('/cariTokoHome') }}" class="informasi-barang-navlink1">
                <img
                  alt="Rectangle10I467"
                  src="public/external/rectangle10i467-fijp-200h.png"
                  class="informasi-barang-rectangle101"
                />
              </a>
              <a href="{{ url('/pengaturanAkun') }}" class="informasi-barang-navlink2">
                <img
                  alt="Rectangle11I467"
                  src="public/external/rectangle11i467-j0m4-200h.png"
                  class="informasi-barang-rectangle111"
                />
              </a>
              <a
                href="{{ url('/etalaseTokoHome') }}"
                class="informasi-barang-navlink3"
              >
                <img
                  alt="Rectangle12I467"
                  src="public/external/rectangle12i467-vimh-200h.png"
                  class="informasi-barang-rectangle121"
                />
              </a>
              <a
                href="{{ url('/hargaBarangHome') }}"
                class="informasi-barang-navlink4"
              >
                <img
                  alt="Rectangle13I467"
                  src="public/external/rectangle13i467-w3mu-200h.png"
                  class="informasi-barang-rectangle131"
                />
              </a>
            </div>
            <img
              alt="TopDividerI467"
              src="public/external/topdivideri467-wrh-200h.png"
              class="informasi-barang-top-divider1"
            />
          </div>
          <img
            alt="SWMiconsoutlinecart24673"
            src="public/external/swmiconsoutlinecart24673-o33l.svg"
            class="informasi-barang-s-miconsoutlinecart2"
          />
          <img
            alt="SWMiconsoutlinelocation14673"
            src="public/external/swmiconsoutlinelocation14673-gbo.svg"
            class="informasi-barang-s-miconsoutlinelocation1"
          />
          <img
            alt="SWMiconsoutlineedit44673"
            src="public/external/swmiconsoutlineedit44673-5lgk.svg"
            class="informasi-barang-s-miconsoutlineedit4"
          />
          <img
            alt="SWMiconsoutlineuser14673"
            src="public/external/swmiconsoutlineuser14673-swp.svg"
            class="informasi-barang-s-miconsoutlineuser1"
          />
          <img
            alt="SWMiconsoutlinecoin4673"
            src="public/external/swmiconsoutlinecoin4673-0iom.svg"
            class="informasi-barang-s-miconsoutlinecoin"
          />
          <a
            href="{{ url('/cariBarangHome') }}"
            class="informasi-barang-text19 UI-16Medium"
          >
            <span>Kembali</span>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
