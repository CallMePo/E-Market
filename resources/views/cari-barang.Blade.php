<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cari-Barang - EMarket</title>
    <meta property="og:title" content="Cari-Barang - EMarket" />
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
      .cari-barang-container {
    width: 100%;
    display: flex;
    overflow: auto;
    min-height: 100vh;
    align-items: center;
    flex-direction: column;
  }
  .cari-barang-cari-barang {
    width: 361px;
    height: 812px;
    display: flex;
    overflow: hidden;
    position: relative;
    align-items: flex-start;
    flex-shrink: 0;
    background-color: var(--dl-color-default-white);
  }
  .cari-barang-i-o-status-bar-black {
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
  .cari-barang-bg {
    top: -2px;
    left: 78px;
    width: 219px;
    height: 30px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cari-barang-notch {
    top: 0px;
    left: 0px;
    width: 219px;
    height: 30px;
    position: absolute;
  }
  .cari-barang-right-side {
    top: 17.3306884765625px;
    left: 293.6666564941406px;
    width: 66.661376953125px;
    height: 11.336018562316895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cari-barang-battery {
    top: 0.002685546875px;
    left: 42.333343505859375px;
    width: 24.32803726196289px;
    height: 11.333333015441895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cari-barang-rectangle {
    top: 0px;
    left: 0px;
    width: 22px;
    height: 11px;
    opacity: 0.35;
    position: absolute;
  }
  .cari-barang-combined-shape {
    top: 3.6666667461395264px;
    left: 23px;
    width: 1px;
    height: 4px;
    opacity: 0.40;
    position: absolute;
  }
  .cari-barang-rectangle1 {
    top: 1.9999998807907104px;
    left: 2px;
    width: 18px;
    height: 7px;
    position: absolute;
  }
  .cari-barang-wifi {
    top: 0px;
    left: 22.027069091796875px;
    width: 15px;
    height: 11px;
    position: absolute;
  }
  .cari-barang-mobile-signal {
    top: 0.3359375px;
    left: 0px;
    width: 17px;
    height: 11px;
    position: absolute;
  }
  .cari-barang-left-side {
    top: 17.16748046875px;
    left: 33.453514099121094px;
    width: 28.42616844177246px;
    height: 11.0888671875px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cari-barang-svg941 {
    top: 0px;
    left: 0px;
    width: 28px;
    height: 11px;
    position: absolute;
  }
  .cari-barang-page-header {
    top: 60px;
    left: 16px;
    width: 343px;
    height: 36px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cari-barang-text {
    left: 102px;
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: center;
    line-height: normal;
  }
  .cari-barang-text02 {
    top: 8px;
    color: var(--dl-color-green-primary);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
    text-decoration: none;
  }
  .cari-barang-input-search {
    top: 128px;
    left: 16px;
    width: 343px;
    height: 50px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cari-barang-bg1 {
    top: 0px;
    left: 0px;
    width: 343px;
    height: 50px;
    position: absolute;
  }
  .cari-barang-text04 {
    top: 16px;
    left: 16px;
    color: var(--dl-color-gray-03);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cari-barang-navlink {
    display: contents;
  }
  .cari-barang-content-search-result {
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
  .cari-barang-text06 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cari-barang-divider {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  .cari-barang-content-search-result1 {
    top: 259px;
    left: 33px;
    width: 326px;
    height: 33px;
    display: flex;
    position: absolute;
    align-items: flex-start;
  }
  .cari-barang-text08 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cari-barang-divider1 {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  .cari-barang-content-search-result2 {
    top: 308px;
    left: 33px;
    width: 326px;
    height: 33px;
    display: flex;
    position: absolute;
    align-items: flex-start;
  }
  .cari-barang-text10 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cari-barang-divider2 {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  .cari-barang-content-search-result3 {
    top: 357px;
    left: 33px;
    width: 326px;
    height: 33px;
    display: flex;
    position: absolute;
    align-items: flex-start;
  }
  .cari-barang-text12 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cari-barang-divider3 {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  .cari-barang-content-search-result4 {
    top: 406px;
    left: 33px;
    width: 326px;
    height: 33px;
    display: flex;
    position: absolute;
    align-items: flex-start;
  }
  .cari-barang-text14 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cari-barang-divider4 {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  .cari-barang-content-search-result5 {
    top: 455px;
    left: 33px;
    width: 326px;
    height: 33px;
    display: flex;
    position: absolute;
    align-items: flex-start;
  }
  .cari-barang-text16 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cari-barang-divider5 {
    top: 33px;
    left: 0px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  .cari-barang-i-o-bottom-bar-tabs {
    top: 729px;
    left: 0px;
    width: 375px;
    height: 83.5px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cari-barang-i-phone-ui {
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
  .cari-barang-home-indicator {
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
  .cari-barang-tabs {
    top: 15px;
    left: 26px;
    width: 320px;
    height: 32px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cari-barang-rectangle9 {
    top: 0px;
    left: 0px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  .cari-barang-rectangle10 {
    top: 0px;
    left: 72px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  .cari-barang-rectangle11 {
    top: 0px;
    left: 144px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  .cari-barang-rectangle12 {
    top: 0px;
    left: 216px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  .cari-barang-rectangle13 {
    top: 0px;
    left: 288px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  .cari-barang-top-divider {
    top: 0.5px;
    left: 0px;
    width: 375px;
    height: 0px;
    position: absolute;
  }
  .cari-barang-i-o-bottom-bar-tabs1 {
    top: 729px;
    left: 0px;
    width: 375px;
    height: 83.5px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cari-barang-i-phone-ui1 {
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
  .cari-barang-home-indicator1 {
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
  .cari-barang-tabs1 {
    top: 15px;
    left: 26px;
    width: 320px;
    height: 32px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cari-barang-navlink1 {
    display: contents;
  }
  .cari-barang-rectangle91 {
    top: 0px;
    left: 0px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  .cari-barang-navlink2 {
    display: contents;
  }
  .cari-barang-rectangle101 {
    top: 0px;
    left: 72px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  .cari-barang-navlink3 {
    display: contents;
  }
  .cari-barang-rectangle111 {
    top: 0px;
    left: 144px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  .cari-barang-navlink4 {
    display: contents;
  }
  .cari-barang-rectangle121 {
    top: 0px;
    left: 216px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  .cari-barang-navlink5 {
    display: contents;
  }
  .cari-barang-rectangle131 {
    top: 0px;
    left: 288px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  .cari-barang-top-divider1 {
    top: 0.5px;
    left: 0px;
    width: 375px;
    height: 0px;
    position: absolute;
  }
  .cari-barang-s-miconsoutlinecart2 {
    top: 748px;
    left: 30px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  .cari-barang-s-miconsoutlinelocation1 {
    top: 748px;
    left: 102px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  .cari-barang-s-miconsoutlineedit4 {
    top: 748px;
    left: 246px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  .cari-barang-s-miconsoutlineuser1 {
    top: 748px;
    left: 174px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  .cari-barang-s-miconsoutlinecoin {
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
        {{-- cek!! --}}
      <!-- <link href="./cari-barang.css" rel="stylesheet" /> -->

      <div class="cari-barang-container">
        <div class="cari-barang-cari-barang">
          <div class="cari-barang-i-o-status-bar-black">
            <div class="cari-barang-bg">
              <img
                alt="NotchI467"
                src="public/external/notchi467-dh4.svg"
                class="cari-barang-notch"
              />
            </div>
            <div class="cari-barang-right-side">
              <div class="cari-barang-battery">
                <img
                  alt="RectangleI467"
                  src="public/external/rectanglei467-xbse.svg"
                  class="cari-barang-rectangle"
                />
                <img
                  alt="CombinedShapeI467"
                  src="public/external/combinedshapei467-m6fa.svg"
                  class="cari-barang-combined-shape"
                />
                <img
                  alt="RectangleI467"
                  src="public/external/rectanglei467-j1z8.svg"
                  class="cari-barang-rectangle1"
                />
              </div>
              <img
                alt="WifiI467"
                src="public/external/wifii467-kpxy.svg"
                class="cari-barang-wifi"
              />
              <img
                alt="MobileSignalI467"
                src="public/external/mobilesignali467-l7o.svg"
                class="cari-barang-mobile-signal"
              />
            </div>
            <div class="cari-barang-left-side">
              <img
                alt="SVG941I467"
                src="public/external/svg941i467-w1il.svg"
                class="cari-barang-svg941"
              />
            </div>
          </div>
          <div class="cari-barang-page-header">
            <span class="cari-barang-text UI-30Semi">
              <span>Cari Barang</span>
            </span>
            <a
              href="{{ url('/cariBarangHome') }}"
              class="cari-barang-text02 UI-16Medium"
            >
              <span>Kembali</span>
            </a>
          </div>
          <div class="cari-barang-input-search">
            <div>
              <style>
                .search-input {
                  width: 140%;
                  border: 1px solid #121212;
                  border-radius: 10px;
                  padding: 5px;
                  background-color: #f2f2f2;
                }
              </style>

              <form action="{{ url('/cariBarang') }}" method="get">
                <input type="search" name="search" placeholder="Cari Barang" class="search-input">
              </form>
              </div>
          </div>
          <a href="#" class="cari-barang-navlink">
            <div class="cari-barang-content-search-result">
              @foreach($barangs as $barang)
              <div style="margin-bottom: 30px">
                <span>
                  <span>{{ $barang->namaBarang }} <br></span>

                </span>
              </div>
              @endforeach
              {{-- <img
                alt="DividerI467"
                src="public/external/divideri467-2oll.svg"
                class="cari-barang-divider"
              /> --}}
            </div>
          </a>
          {{-- <div class="cari-barang-content-search-result1">
            <span class="cari-barang-text08 UI-16Medium">
              <span>Apel Fuji</span>
            </span>
            <img
              alt="DividerI467"
              src="public/external/divideri467-sac2.svg"
              class="cari-barang-divider1"
            />
          </div>
          <div class="cari-barang-content-search-result2">
            <span class="cari-barang-text10 UI-16Medium">
              <span>Daging Sapi Lokal</span>
            </span>
            <img
              alt="DividerI467"
              src="public/external/divideri467-dmd.svg"
              class="cari-barang-divider2"
            />
          </div>
          <div class="cari-barang-content-search-result3">
            <span class="cari-barang-text12 UI-16Medium">
              <span>Daging Ikan Bandeng</span>
            </span>
            <img
              alt="DividerI467"
              src="public/external/divideri467-z0s.svg"
              class="cari-barang-divider3"
            />
          </div>
          <div class="cari-barang-content-search-result4">
            <span class="cari-barang-text14 UI-16Medium">
              <span>Jeruk Lemon</span>
            </span>
            <img
              alt="DividerI467"
              src="public/external/divideri467-17g8.svg"
              class="cari-barang-divider4"
            />
          </div>
          <div class="cari-barang-content-search-result5">
            <span class="cari-barang-text16 UI-16Medium">
              <span>Telur Ayam</span>
            </span>
            <img
              alt="DividerI467"
              src="public/external/divideri467-qjnj.svg"
              class="cari-barang-divider5"
            />
          </div> --}}
          <div class="cari-barang-i-o-bottom-bar-tabs">
            <div class="cari-barang-i-phone-ui">
              <div class="cari-barang-home-indicator"></div>
            </div>
            <div class="cari-barang-tabs">
              <img
                alt="Rectangle9I467"
                src="public/external/rectangle9i467-8ej-200h.png"
                class="cari-barang-rectangle9"
              />
              <img
                alt="Rectangle10I467"
                src="public/external/rectangle10i467-1nah-200h.png"
                class="cari-barang-rectangle10"
              />
              <img
                alt="Rectangle11I467"
                src="public/external/rectangle11i467-mljn-200h.png"
                class="cari-barang-rectangle11"
              />
              <img
                alt="Rectangle12I467"
                src="public/external/rectangle12i467-a6l-200h.png"
                class="cari-barang-rectangle12"
              />
              <img
                alt="Rectangle13I467"
                src="public/external/rectangle13i467-i1k3-200h.png"
                class="cari-barang-rectangle13"
              />
            </div>
            <img
              alt="TopDividerI467"
              src="public/external/topdivideri467-nnbl-200h.png"
              class="cari-barang-top-divider"
            />
          </div>
          <div class="cari-barang-i-o-bottom-bar-tabs1">
            <div class="cari-barang-i-phone-ui1">
              <div class="cari-barang-home-indicator1"></div>
            </div>
            <div class="cari-barang-tabs1">
              <a href="{{ url('/cariBarangHome') }}" class="cari-barang-navlink1">
                <img
                  alt="Rectangle9I467"
                  src="public/external/rectangle9i467-oqc-200h.png"
                  class="cari-barang-rectangle91"
                />
              </a>
              <a href="{{ url('/cariTokoHome') }}" class="cari-barang-navlink2">
                <img
                  alt="Rectangle10I467"
                  src="public/external/rectangle10i467-c4d-200h.png"
                  class="cari-barang-rectangle101"
                />
              </a>
              <a href="{{ url('/pengaturanAkun') }}" class="cari-barang-navlink3">
                <img
                  alt="Rectangle11I467"
                  src="public/external/rectangle11i467-tri-200h.png"
                  class="cari-barang-rectangle111"
                />
              </a>
              <a href="{{ url('/etalaseTokoHome') }}" class="cari-barang-navlink4">
                <img
                  alt="Rectangle12I467"
                  src="public/external/rectangle12i467-e06-200h.png"
                  class="cari-barang-rectangle121"
                />
              </a>
              <a href="{{ url('/hargaBarangHome') }}" class="cari-barang-navlink5">
                <img
                  alt="Rectangle13I467"
                  src="public/external/rectangle13i467-b2w-200h.png"
                  class="cari-barang-rectangle131"
                />
              </a>
            </div>
            <img
              alt="TopDividerI467"
              src="public/external/topdivideri467-vd9-200h.png"
              class="cari-barang-top-divider1"
            />
          </div>
          <img
            alt="SWMiconsoutlinecart24673"
            src="public/external/swmiconsoutlinecart24673-me0n.svg"
            class="cari-barang-s-miconsoutlinecart2"
          />
          <img
            alt="SWMiconsoutlinelocation14673"
            src="public/external/swmiconsoutlinelocation14673-kp3e.svg"
            class="cari-barang-s-miconsoutlinelocation1"
          />
          <img
            alt="SWMiconsoutlineedit44673"
            src="public/external/swmiconsoutlineedit44673-ajf.svg"
            class="cari-barang-s-miconsoutlineedit4"
          />
          <img
            alt="SWMiconsoutlineuser14673"
            src="public/external/swmiconsoutlineuser14673-7ivb.svg"
            class="cari-barang-s-miconsoutlineuser1"
          />
          <img
            alt="SWMiconsoutlinecoin4673"
            src="public/external/swmiconsoutlinecoin4673-p2f7.svg"
            class="cari-barang-s-miconsoutlinecoin"
          />
        </div>
      </div>
    </div>
  </body>
</html>
