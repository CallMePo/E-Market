<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Preview-Barang - EMarket</title>
    <meta property="og:title" content="Preview-Barang - EMarket" />
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
      .preview-barang-container {
      width: 100%;
      display: flex;
      overflow: auto;
      min-height: 100vh;
      align-items: center;
      flex-direction: column;
    }
    .preview-barang-prievewbarang {
      width: 370px;
      height: 812px;
      display: flex;
      overflow: hidden;
      position: relative;
      align-items: flex-start;
      flex-shrink: 0;
      background-color: var(--dl-color-default-white);
    }
    .preview-barang-i-o-status-bar-white {
      top: 0px;
      left: 0px;
      width: 375px;
      height: 44px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .preview-barang-i-o-status-bar-black {
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
    .preview-barang-bg {
      top: -2px;
      left: 78px;
      width: 219px;
      height: 30px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .preview-barang-notch {
      top: 0px;
      left: 0px;
      width: 219px;
      height: 30px;
      position: absolute;
    }
    .preview-barang-right-side {
      top: 17.3306884765625px;
      left: 293.6666564941406px;
      width: 66.661376953125px;
      height: 11.336018562316895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .preview-barang-battery {
      top: 0.002685546875px;
      left: 42.333343505859375px;
      width: 24.32803726196289px;
      height: 11.333333015441895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .preview-barang-rectangle {
      top: 0px;
      left: 0px;
      width: 22px;
      height: 11px;
      opacity: 0.35;
      position: absolute;
    }
    .preview-barang-combined-shape {
      top: 3.6666667461395264px;
      left: 23px;
      width: 1px;
      height: 4px;
      opacity: 0.40;
      position: absolute;
    }
    .preview-barang-rectangle1 {
      top: 1.9999998807907104px;
      left: 2px;
      width: 18px;
      height: 7px;
      position: absolute;
    }
    .preview-barang-wifi {
      top: 0px;
      left: 22.027069091796875px;
      width: 15px;
      height: 11px;
      position: absolute;
    }
    .preview-barang-mobile-signal {
      top: 0.3359375px;
      left: 0px;
      width: 17px;
      height: 11px;
      position: absolute;
    }
    .preview-barang-left-side {
      top: 17.16748046875px;
      left: 33.453514099121094px;
      width: 28.42616844177246px;
      height: 11.0888671875px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .preview-barang-svg941 {
      top: 0px;
      left: 0px;
      width: 28px;
      height: 11px;
      position: absolute;
    }
    .preview-barang-i-o-status-bar-black1 {
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
    .preview-barang-bg1 {
      top: -2px;
      left: 78px;
      width: 219px;
      height: 30px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .preview-barang-notch1 {
      top: 0px;
      left: 0px;
      width: 219px;
      height: 30px;
      position: absolute;
    }
    .preview-barang-right-side1 {
      top: 17.3306884765625px;
      left: 293.6666564941406px;
      width: 66.661376953125px;
      height: 11.336018562316895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .preview-barang-battery1 {
      top: 0.002685546875px;
      left: 42.333343505859375px;
      width: 24.32803726196289px;
      height: 11.333333015441895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .preview-barang-rectangle2 {
      top: 0px;
      left: 0px;
      width: 22px;
      height: 11px;
      opacity: 0.35;
      position: absolute;
    }
    .preview-barang-combined-shape1 {
      top: 3.6666667461395264px;
      left: 23px;
      width: 1px;
      height: 4px;
      opacity: 0.40;
      position: absolute;
    }
    .preview-barang-rectangle3 {
      top: 1.9999998807907104px;
      left: 2px;
      width: 18px;
      height: 7px;
      position: absolute;
    }
    .preview-barang-wifi1 {
      top: 0px;
      left: 22.027069091796875px;
      width: 15px;
      height: 11px;
      position: absolute;
    }
    .preview-barang-mobile-signal1 {
      top: 0.3359375px;
      left: 0px;
      width: 17px;
      height: 11px;
      position: absolute;
    }
    .preview-barang-left-side1 {
      top: 17.16748046875px;
      left: 33.453514099121094px;
      width: 28.42616844177246px;
      height: 11.0888671875px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .preview-barang-svg9411 {
      top: 0px;
      left: 0px;
      width: 28px;
      height: 11px;
      position: absolute;
    }
    .preview-barang-line81 {
      top: 55px;
      left: 232px;
      width: 9px;
      height: 1px;
      position: absolute;
    }
    .preview-barang-line82 {
      top: 55px;
      left: 244px;
      width: 10px;
      height: 1px;
      position: absolute;
    }
    .preview-barang-home-indicator {
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
    .preview-barang-home-indicator1 {
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
    .preview-barang-home-indicator2 {
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
    .preview-barang-post-title-text {
      top: 48px;
      left: 136px;
      width: 343px;
      height: 19px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .preview-barang-text {
      color: var(--dl-color-default-black);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .preview-barang-image-block {
      top: 107px;
      left: 17px;
      width: 343px;
      height: 196px;
      position: absolute;
      border-radius: 8px;
    }
    .preview-barang-post-title-text1 {
      top: 322px;
      left: 15px;
      width: 344px;
      height: 283px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .preview-barang-text02 {
      top: 44px;
      left: 1px;
      color: var(--dl-color-default-black);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .preview-barang-text04 {
      left: 1px;
      color: var(--dl-color-default-black);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .preview-barang-text06 {
      top: 80px;
      left: 1px;
      color: var(--dl-color-default-black);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .preview-barang-text08 {
      top: 131px;
      color: var(--dl-color-gray-04);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .preview-barang-ilustrasicaberawit12 {
      top: 97px;
      left: 17px;
      width: 343px;
      height: 203px;
      position: absolute;
    }
    .preview-barang-text19 {
      top: 44px;
      left: 33px;
      color: var(--dl-color-green-primary);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
      text-decoration: none;
    }
    .preview-barang-edit {
      top: 642px;
      left: 163px;
      width: 52px;
      height: 52px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .preview-barang-rectangle10 {
      top: 0px;
      left: 0px;
      width: 52px;
      height: 52px;
      position: absolute;
      border-color: rgba(231, 231, 231, 1);
      border-style: solid;
      border-width: 1px;
      border-radius: 100px;
    }
    .preview-barang-shape {
      top: 13px;
      left: 14px;
      width: 25px;
      height: 25px;
      position: absolute;
    }
    .preview-barang-i-o-bottom-bar-tabs {
      top: 729px;
      left: 0px;
      width: 375px;
      height: 83.5px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .preview-barang-i-phone-ui {
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
    .preview-barang-home-indicator3 {
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
    .preview-barang-tabs {
      top: 15px;
      left: 26px;
      width: 320px;
      height: 32px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .preview-barang-navlink {
      display: contents;
    }
    .preview-barang-rectangle9 {
      top: 0px;
      left: 0px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .preview-barang-navlink1 {
      display: contents;
    }
    .preview-barang-rectangle101 {
      top: 0px;
      left: 72px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .preview-barang-navlink2 {
      display: contents;
    }
    .preview-barang-rectangle11 {
      top: 0px;
      left: 144px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .preview-barang-navlink3 {
      display: contents;
    }
    .preview-barang-rectangle12 {
      top: 0px;
      left: 216px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .preview-barang-navlink4 {
      display: contents;
    }
    .preview-barang-rectangle13 {
      top: 0px;
      left: 288px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .preview-barang-logo {
      top: 18px;
      left: 34.19921875px;
      width: 307.80078125px;
      height: 24px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .preview-barang-shape1 {
      top: 3px;
      left: 0px;
      width: 16px;
      height: 17px;
      position: absolute;
    }
    .preview-barang-shape2 {
      top: 3px;
      left: 71.80078125px;
      width: 16px;
      height: 18px;
      position: absolute;
    }
    .preview-barang-s-miconsoutlineedit4 {
      top: 0px;
      left: 211.80078125px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .preview-barang-s-miconsoutlineuser1 {
      top: 0px;
      left: 139.80078125px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .preview-barang-s-miconsoutlinecoin {
      top: 0px;
      left: 283.80078125px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .preview-barang-top-divider {
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
      <!-- <link href="./preview-barang.css" rel="stylesheet" /> -->

      <div class="preview-barang-container">
        <div class="preview-barang-prievewbarang">
          <div class="preview-barang-i-o-status-bar-white">
            <div class="preview-barang-i-o-status-bar-black">
              <div class="preview-barang-bg">
                <img
                  alt="NotchI526"
                  src="public/external/notchi526-0u0q.svg"
                  class="preview-barang-notch"
                />
              </div>
              <div class="preview-barang-right-side">
                <div class="preview-barang-battery">
                  <img
                    alt="RectangleI526"
                    src="public/external/rectanglei526-g5fq.svg"
                    class="preview-barang-rectangle"
                  />
                  <img
                    alt="CombinedShapeI526"
                    src="public/external/combinedshapei526-ifet.svg"
                    class="preview-barang-combined-shape"
                  />
                  <img
                    alt="RectangleI526"
                    src="public/external/rectanglei526-pzz7.svg"
                    class="preview-barang-rectangle1"
                  />
                </div>
                <img
                  alt="WifiI526"
                  src="public/external/wifii526-tpxy.svg"
                  class="preview-barang-wifi"
                />
                <img
                  alt="MobileSignalI526"
                  src="public/external/mobilesignali526-wj7b.svg"
                  class="preview-barang-mobile-signal"
                />
              </div>
              <div class="preview-barang-left-side">
                <img
                  alt="SVG941I526"
                  src="public/external/svg941i526-ejvv.svg"
                  class="preview-barang-svg941"
                />
              </div>
            </div>
          </div>
          <div class="preview-barang-i-o-status-bar-black1">
            <div class="preview-barang-bg1">
              <img
                alt="NotchI526"
                src="public/external/notchi526-q2qc.svg"
                class="preview-barang-notch1"
              />
            </div>
            <div class="preview-barang-right-side1">
              <div class="preview-barang-battery1">
                <img
                  alt="RectangleI526"
                  src="public/external/rectanglei526-3tnd.svg"
                  class="preview-barang-rectangle2"
                />
                <img
                  alt="CombinedShapeI526"
                  src="public/external/combinedshapei526-epv.svg"
                  class="preview-barang-combined-shape1"
                />
                <img
                  alt="RectangleI526"
                  src="public/external/rectanglei526-yt4h.svg"
                  class="preview-barang-rectangle3"
                />
              </div>
              <img
                alt="WifiI526"
                src="public/external/wifii526-z5vh.svg"
                class="preview-barang-wifi1"
              />
              <img
                alt="MobileSignalI526"
                src="public/external/mobilesignali526-0xk.svg"
                class="preview-barang-mobile-signal1"
              />
            </div>
            <div class="preview-barang-left-side1">
              <img
                alt="SVG941I526"
                src="public/external/svg941i526-a8c.svg"
                class="preview-barang-svg9411"
              />
            </div>
          </div>
          <img
            alt="Line815268"
            src="public/external/line815268-6nh.svg"
            class="preview-barang-line81"
          />
          <img
            alt="Line825268"
            src="public/external/line825268-x6da.svg"
            class="preview-barang-line82"
          />
          <div class="preview-barang-home-indicator"></div>
          <div class="preview-barang-home-indicator1">
            <div class="preview-barang-home-indicator2"></div>
          </div>
          <div class="preview-barang-post-title-text">
            <span class="preview-barang-text UI-16Semi">
              <span>Toko Madju</span>
            </span>
          </div>
          <img
            alt="ImageBlock5268"
            src="public/external/imageblock5268-i0eq-400w.png"
            class="preview-barang-image-block"
          />
          <div class="preview-barang-post-title-text1">
            <span class="preview-barang-text02 UI-30Medium">
              <span>Rp16.000</span>
            </span>
            <span class="preview-barang-text04 UI-30Medium">
              <span>Cabe Rawit Merah - 250 gr</span>
            </span>
            <span class="preview-barang-text06 UI-16Semi">
              <span>Toko Madju - Pasar Keputih</span>
            </span>
            <span class="preview-barang-text08 UI-16Medium">
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
          <img
            alt="ilustrasicaberawit125268"
            src="public/external/ilustrasicaberawit125268-l6zg-300h.png"
            class="preview-barang-ilustrasicaberawit12"
          />
          <a
            href="{{ url('/etalaseTokoHome') }}"
            class="preview-barang-text19 UI-16Medium"
          >
            <span>Kembali</span>
          </a>
          <div class="preview-barang-edit">
            <img
              alt="Rectangle10I526"
              src="public/external/rectangle10i526-m52p-200h.png"
              class="preview-barang-rectangle10"
            />
            <img
              alt="shapeI526"
              src="public/external/shapei526-yjjr.svg"
              class="preview-barang-shape"
            />
          </div>
          <div class="preview-barang-i-o-bottom-bar-tabs">
            <div class="preview-barang-i-phone-ui">
              <div class="preview-barang-home-indicator3"></div>
            </div>
            <div class="preview-barang-tabs">
              <a href="{{ url('/cariBarangHome') }}" class="preview-barang-navlink">
                <img
                  alt="Rectangle95818"
                  src="public/external/rectangle95818-81zi-200h.png"
                  class="preview-barang-rectangle9"
                />
              </a>
              <a href="{{ url('/cariTokoHome') }}" class="preview-barang-navlink1">
                <img
                  alt="Rectangle105818"
                  src="public/external/rectangle105818-htc-200h.png"
                  class="preview-barang-rectangle101"
                />
              </a>
              <a href="{{ url('/pengaturanAkun') }}" class="preview-barang-navlink2">
                <img
                  alt="Rectangle115818"
                  src="public/external/rectangle115818-7bzb-200h.png"
                  class="preview-barang-rectangle11"
                />
              </a>
              <a href="{{ url('/etalaseTokoHome') }}" class="preview-barang-navlink3">
                <img
                  alt="Rectangle125818"
                  src="public/external/rectangle125818-7aeq-200h.png"
                  class="preview-barang-rectangle12"
                />
              </a>
              <a href="{{ url('/cariBarangHome') }}" class="preview-barang-navlink4">
                <img
                  alt="Rectangle135818"
                  src="public/external/rectangle135818-60do-200h.png"
                  class="preview-barang-rectangle13"
                />
              </a>
            </div>
            <div class="preview-barang-logo">
              <img
                alt="shape5818"
                src="public/external/shape5818-d7u3.svg"
                class="preview-barang-shape1"
              />
              <img
                alt="shape5818"
                src="public/external/shape5818-nmu.svg"
                class="preview-barang-shape2"
              />
              <img
                alt="SWMiconsoutlineedit45818"
                src="public/external/swmiconsoutlineedit45818-nw8r.svg"
                class="preview-barang-s-miconsoutlineedit4"
              />
              <img
                alt="SWMiconsoutlineuser15818"
                src="public/external/swmiconsoutlineuser15818-wfo9.svg"
                class="preview-barang-s-miconsoutlineuser1"
              />
              <img
                alt="SWMiconsoutlinecoin5818"
                src="public/external/swmiconsoutlinecoin5818-8h1i.svg"
                class="preview-barang-s-miconsoutlinecoin"
              />
            </div>
            <img
              alt="TopDivider5818"
              src="public/external/topdivider5818-q2de-200h.png"
              class="preview-barang-top-divider"
            />
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
