<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Menghapus-Barang - EMarket</title>
    <meta property="og:title" content="Menghapus-Barang - EMarket" />
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
      .menghapus-barang-container {
      width: 100%;
      display: flex;
      overflow: auto;
      min-height: 100vh;
      align-items: center;
      flex-direction: column;
    }
    .menghapus-barang-frame-hom-atur-etalase-toko {
      width: 384px;
      height: 812px;
      display: flex;
      overflow: hidden;
      position: relative;
      align-items: flex-start;
      flex-shrink: 0;
      background-color: var(--dl-color-default-white);
    }
    .menghapus-barang-image-block {
      top: 109px;
      left: 16px;
      width: 343px;
      height: 196px;
      position: absolute;
      border-radius: 8px;
    }
    .menghapus-barang-tokomadjulengkapdan1 {
      top: 112px;
      left: 17px;
      width: 343px;
      height: 203px;
      position: absolute;
    }
    .menghapus-barang-post-title-text {
      top: 337px;
      left: 16px;
      width: 343px;
      height: 29px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .menghapus-barang-text {
      color: var(--dl-color-default-black);
      width: 343px;
      height: auto;
      position: absolute;
      font-size: 24px;
      font-style: Bold;
      text-align: left;
      font-family: Inter;
      font-weight: 700;
      line-height: normal;
      font-stretch: normal;
      text-decoration: none;
    }
    .menghapus-barang-text01 {
      font-weight: 700;
    }
    .menghapus-barang-section-hot-deals {
      top: 388px;
      left: 17px;
      width: 236px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .menghapus-barang-content-market-block {
      top: -3px;
      left: 2px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .menghapus-barang-text03 {
      top: 108px;
      color: var(--dl-color-default-black);
      right: 0px;
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .menghapus-barang-text05 {
      left: 1px;
      color: var(--dl-color-default-black);
      bottom: 16px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .menghapus-barang-maskgroup {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
      background-color: rgba(246, 246, 246, 1);
    }
    .menghapus-barang-ilustrasicaberawit12 {
      top: -4px;
      left: -14px;
      width: 130px;
      height: 98px;
      position: absolute;
    }
    .menghapus-barang-s-miconsoutlinetrash2 {
      top: 24px;
      left: 85px;
      width: 24px;
      height: 24px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .menghapus-barang-shape {
      top: 157px;
      left: 91px;
      width: 16px;
      height: 18px;
      position: absolute;
    }
    .menghapus-barang-baru {
      top: 0px;
      left: 126px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .menghapus-barang-rectangle30 {
      top: -11px;
      right: -17px;
      width: 110px;
      height: 110px;
      position: absolute;
      border-radius: 8px;
    }
    .menghapus-barang-text07 {
      top: 118px;
      color: var(--dl-color-default-black);
      right: -13px;
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .menghapus-barang-tambah {
      top: 32px;
      left: 57px;
      width: 30px;
      border: 2px dashed rgba(120, 120, 120, 0.4);
      height: 30px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .menghapus-barang-page-header {
      top: 60px;
      left: 16px;
      width: 343px;
      height: 36px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .menghapus-barang-text09 {
      top: 8px;
      left: 280px;
      color: var(--dl-color-green-primary);
      height: auto;
      position: absolute;
      text-align: right;
      line-height: normal;
    }
    .menghapus-barang-text11 {
      left: 100px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: center;
      line-height: normal;
    }
    .menghapus-barang-text13 {
      top: 68px;
      left: 17px;
      color: var(--dl-color-green-primary);
      height: auto;
      position: absolute;
      text-align: right;
      line-height: normal;
    }
    .menghapus-barang-i-o-status-bar-black {
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
    .menghapus-barang-bg {
      top: -2px;
      left: 78px;
      width: 219px;
      height: 30px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .menghapus-barang-notch {
      top: 0px;
      left: 0px;
      width: 219px;
      height: 30px;
      position: absolute;
    }
    .menghapus-barang-right-side {
      top: 17.3306884765625px;
      left: 293.6666564941406px;
      width: 66.661376953125px;
      height: 11.336018562316895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .menghapus-barang-battery {
      top: 0.002685546875px;
      left: 42.333343505859375px;
      width: 24.32803726196289px;
      height: 11.333333015441895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .menghapus-barang-rectangle {
      top: 0px;
      left: 0px;
      width: 22px;
      height: 11px;
      opacity: 0.35;
      position: absolute;
    }
    .menghapus-barang-combined-shape {
      top: 3.6666667461395264px;
      left: 23px;
      width: 1px;
      height: 4px;
      opacity: 0.40;
      position: absolute;
    }
    .menghapus-barang-rectangle1 {
      top: 1.9999998807907104px;
      left: 2px;
      width: 18px;
      height: 7px;
      position: absolute;
    }
    .menghapus-barang-wifi {
      top: 0px;
      left: 22.027069091796875px;
      width: 15px;
      height: 11px;
      position: absolute;
    }
    .menghapus-barang-mobile-signal {
      top: 0.3359375px;
      left: 0px;
      width: 17px;
      height: 11px;
      position: absolute;
    }
    .menghapus-barang-left-side {
      top: 17.16748046875px;
      left: 33.453514099121094px;
      width: 28.42616844177246px;
      height: 11.0888671875px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .menghapus-barang-svg941 {
      top: 0px;
      left: 0px;
      width: 28px;
      height: 11px;
      position: absolute;
    }
    .menghapus-barang-i-o-status-bar-black1 {
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
    .menghapus-barang-bg1 {
      top: -2px;
      left: 78px;
      width: 219px;
      height: 30px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .menghapus-barang-notch1 {
      top: 0px;
      left: 0px;
      width: 219px;
      height: 30px;
      position: absolute;
    }
    .menghapus-barang-right-side1 {
      top: 17.3306884765625px;
      left: 293.6666564941406px;
      width: 66.661376953125px;
      height: 11.336018562316895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .menghapus-barang-battery1 {
      top: 0.002685546875px;
      left: 42.333343505859375px;
      width: 24.32803726196289px;
      height: 11.333333015441895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .menghapus-barang-rectangle2 {
      top: 0px;
      left: 0px;
      width: 22px;
      height: 11px;
      opacity: 0.35;
      position: absolute;
    }
    .menghapus-barang-combined-shape1 {
      top: 3.6666667461395264px;
      left: 23px;
      width: 1px;
      height: 4px;
      opacity: 0.40;
      position: absolute;
    }
    .menghapus-barang-rectangle3 {
      top: 1.9999998807907104px;
      left: 2px;
      width: 18px;
      height: 7px;
      position: absolute;
    }
    .menghapus-barang-wifi1 {
      top: 0px;
      left: 22.027069091796875px;
      width: 15px;
      height: 11px;
      position: absolute;
    }
    .menghapus-barang-mobile-signal1 {
      top: 0.3359375px;
      left: 0px;
      width: 17px;
      height: 11px;
      position: absolute;
    }
    .menghapus-barang-left-side1 {
      top: 17.16748046875px;
      left: 33.453514099121094px;
      width: 28.42616844177246px;
      height: 11.0888671875px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .menghapus-barang-svg9411 {
      top: 0px;
      left: 0px;
      width: 28px;
      height: 11px;
      position: absolute;
    }
    .menghapus-barang-item {
      top: 0px;
      left: 1px;
      width: 376px;
      height: 616px;
      position: absolute;
    }
    .menghapus-barang-bottom-drawer {
      top: 515px;
      left: -2px;
      width: 375px;
      height: 295px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .menghapus-barang-bg2 {
      top: 89px;
      left: 0px;
      width: 375px;
      height: 295px;
      position: absolute;
      border-radius: 16px 16px 0 0;
    }
    .menghapus-barang-actions {
      top: 170px;
      left: 24px;
      width: 327px;
      height: 86px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .menghapus-barang-text15 {
      top: 67px;
      left: 8px;
      color: var(--dl-color-default-merahwarning);
      width: 311px;
      height: auto;
      position: absolute;
      text-align: center;
      line-height: normal;
      text-decoration: none;
    }
    .menghapus-barang-button-primary {
      gap: 12px;
      top: 0px;
      left: 0px;
      width: 327px;
      display: flex;
      padding: 16px 32px;
      position: absolute;
      align-items: center;
      flex-shrink: 0;
      border-color: rgba(189, 189, 189, 1);
      border-style: solid;
      border-width: 1px;
      border-radius: 100px;
      flex-direction: column;
      text-decoration: none;
      background-color: var(--dl-color-default-white);
    }
    .menghapus-barang-text17 {
      color: var(--dl-color-default-black);
      height: auto;
      text-align: center;
      line-height: normal;
    }
    .menghapus-barang-text19 {
      top: 129px;
      left: 16px;
      width: 343px;
      height: 24px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .menghapus-barang-text20 {
      color: var(--dl-color-gray-04);
      width: 343px;
      height: auto;
      position: absolute;
      font-size: 20px;
      font-style: Semi Bold;
      text-align: center;
      font-family: Inter;
      font-weight: 700;
      line-height: normal;
      font-stretch: normal;
      text-decoration: none;
    }
    .menghapus-barang-header-elements {
      top: 105px;
      left: 172px;
      width: 32px;
      height: 4px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
      background-color: rgba(231, 231, 231, 1);
    }
    
    </style>
  </head>
  <body>
    <div>
      <!-- <link href="./menghapus-barang.css" rel="stylesheet" /> -->

      <div class="menghapus-barang-container">
        <div class="menghapus-barang-frame-hom-atur-etalase-toko">
          <img
            alt="ImageBlock8758"
            src="public/external/imageblock8758-me1-400w.png"
            class="menghapus-barang-image-block"
          />
          <img
            alt="tokomadjulengkapdan18758"
            src="public/external/tokomadjulengkapdan18758-ok3s-300h.png"
            class="menghapus-barang-tokomadjulengkapdan1"
          />
          <div class="menghapus-barang-post-title-text">
            <span class="menghapus-barang-text">
              <span class="menghapus-barang-text01">Toko Madju</span>
              <span>- Pasar Keputih</span>
            </span>
          </div>
          <div class="menghapus-barang-section-hot-deals">
            <div class="menghapus-barang-content-market-block">
              <span class="menghapus-barang-text03 UI-14Regular">
                <span>Cabe Rawit Merah - 250 gr</span>
              </span>
              <span class="menghapus-barang-text05 UI-14Semi">
                <span>Rp 16.000</span>
              </span>
              <div class="menghapus-barang-maskgroup">
                <img
                  alt="ilustrasicaberawit128758"
                  src="public/external/ilustrasicaberawit128758-na3h-200h.png"
                  class="menghapus-barang-ilustrasicaberawit12"
                />
              </div>
              <div class="menghapus-barang-s-miconsoutlinetrash2"></div>
              <img
                alt="shape8758"
                src="public/external/shape8758-8fff.svg"
                class="menghapus-barang-shape"
              />
            </div>
            <div class="menghapus-barang-baru">
              <img
                alt="Rectangle308758"
                src="public/external/rectangle308758-j69-200h.png"
                class="menghapus-barang-rectangle30"
              />
              <span class="menghapus-barang-text07 UI-14Regular">
                <span>Tambah baru</span>
              </span>
              <div class="menghapus-barang-tambah"></div>
            </div>
          </div>
          <div class="menghapus-barang-page-header">
            <span class="menghapus-barang-text09 UI-16Medium">
              <span>Statistik</span>
            </span>
            <span class="menghapus-barang-text11 UI-30Semi">
              <span>Atur Etalase</span>
            </span>
          </div>
          <span class="menghapus-barang-text13 UI-16Medium">
            <span>Cari Toko</span>
          </span>
          <div class="menghapus-barang-i-o-status-bar-black">
            <div class="menghapus-barang-bg">
              <img
                alt="NotchI875"
                src="public/external/notchi875-m23n.svg"
                class="menghapus-barang-notch"
              />
            </div>
            <div class="menghapus-barang-right-side">
              <div class="menghapus-barang-battery">
                <img
                  alt="RectangleI875"
                  src="public/external/rectanglei875-7rok.svg"
                  class="menghapus-barang-rectangle"
                />
                <img
                  alt="CombinedShapeI875"
                  src="public/external/combinedshapei875-6u3p.svg"
                  class="menghapus-barang-combined-shape"
                />
                <img
                  alt="RectangleI875"
                  src="public/external/rectanglei875-mxqs.svg"
                  class="menghapus-barang-rectangle1"
                />
              </div>
              <img
                alt="WifiI875"
                src="public/external/wifii875-a79i.svg"
                class="menghapus-barang-wifi"
              />
              <img
                alt="MobileSignalI875"
                src="public/external/mobilesignali875-qvt.svg"
                class="menghapus-barang-mobile-signal"
              />
            </div>
            <div class="menghapus-barang-left-side">
              <img
                alt="SVG941I875"
                src="public/external/svg941i875-42av.svg"
                class="menghapus-barang-svg941"
              />
            </div>
          </div>
          <div class="menghapus-barang-i-o-status-bar-black1">
            <div class="menghapus-barang-bg1">
              <img
                alt="NotchI875"
                src="public/external/notchi875-qi6l.svg"
                class="menghapus-barang-notch1"
              />
            </div>
            <div class="menghapus-barang-right-side1">
              <div class="menghapus-barang-battery1">
                <img
                  alt="RectangleI875"
                  src="public/external/rectanglei875-64wa.svg"
                  class="menghapus-barang-rectangle2"
                />
                <img
                  alt="CombinedShapeI875"
                  src="public/external/combinedshapei875-f1o.svg"
                  class="menghapus-barang-combined-shape1"
                />
                <img
                  alt="RectangleI875"
                  src="public/external/rectanglei875-xtm6.svg"
                  class="menghapus-barang-rectangle3"
                />
              </div>
              <img
                alt="WifiI875"
                src="public/external/wifii875-1l7k.svg"
                class="menghapus-barang-wifi1"
              />
              <img
                alt="MobileSignalI875"
                src="public/external/mobilesignali875-2x1.svg"
                class="menghapus-barang-mobile-signal1"
              />
            </div>
            <div class="menghapus-barang-left-side1">
              <img
                alt="SVG941I875"
                src="public/external/svg941i875-dregi.svg"
                class="menghapus-barang-svg9411"
              />
            </div>
          </div>
          <img
            alt="item8758"
            src="public/external/item8758-hkn4-700h.png"
            class="menghapus-barang-item"
          />
          <div class="menghapus-barang-bottom-drawer">
            <img
              alt="BG8758"
              src="public/external/bg8758-2ik8-300h.png"
              class="menghapus-barang-bg2"
            />
            <div class="menghapus-barang-actions">
              <a
                href="menghapus-barang-2.html"
                class="menghapus-barang-text15 UI-16Semi"
              >
                <span>Hapus</span>
              </a>
              <a
                href="{{ url('/etalaseTokoHome') }}"
                class="menghapus-barang-button-primary"
              >
                <span class="menghapus-barang-text17 UI-16Semi">
                  <span>Kembali</span>
                </span>
              </a>
            </div>
            <div class="menghapus-barang-text19">
              <span class="menghapus-barang-text20">
                <span>Yakin untuk menghapus barang?</span>
              </span>
            </div>
            <div class="menghapus-barang-header-elements"></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
