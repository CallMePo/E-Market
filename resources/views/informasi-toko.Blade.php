<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Informasi-Toko {{ $toko->namaToko }}</title>
    <meta property="og:title" content="Informasi-Toko - EMarket" />
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
      .informasi-toko-container {
      width: 100%;
      display: flex;
      overflow: auto;
      min-height: 100vh;
      align-items: center;
      flex-direction: column;
    }
    .informasi-toko-informasi-toko {
      width: 386px;
      height: 812px;
      display: flex;
      overflow: hidden;
      position: relative;
      align-items: flex-start;
      flex-shrink: 0;
      background-color: var(--dl-color-default-white);
    }
    .informasi-toko-i-o-status-bar-black {
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
    .informasi-toko-bg {
      top: -2px;
      left: 78px;
      width: 219px;
      height: 30px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-toko-notch {
      top: 0px;
      left: 0px;
      width: 219px;
      height: 30px;
      position: absolute;
    }
    .informasi-toko-right-side {
      top: 17.3306884765625px;
      left: 293.6666564941406px;
      width: 66.661376953125px;
      height: 11.336018562316895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-toko-battery {
      top: 0.002685546875px;
      left: 42.333343505859375px;
      width: 24.32803726196289px;
      height: 11.333333015441895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-toko-rectangle {
      top: 0px;
      left: 0px;
      width: 22px;
      height: 11px;
      opacity: 0.35;
      position: absolute;
    }
    .informasi-toko-combined-shape {
      top: 3.6666667461395264px;
      left: 23px;
      width: 1px;
      height: 4px;
      opacity: 0.40;
      position: absolute;
    }
    .informasi-toko-rectangle1 {
      top: 1.9999998807907104px;
      left: 2px;
      width: 18px;
      height: 7px;
      position: absolute;
    }
    .informasi-toko-wifi {
      top: 0px;
      left: 22.027069091796875px;
      width: 15px;
      height: 11px;
      position: absolute;
    }
    .informasi-toko-mobile-signal {
      top: 0.3359375px;
      left: 0px;
      width: 17px;
      height: 11px;
      position: absolute;
    }
    .informasi-toko-left-side {
      top: 17.16748046875px;
      left: 33.453514099121094px;
      width: 28.42616844177246px;
      height: 11.0888671875px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-toko-svg941 {
      top: 0px;
      left: 0px;
      width: 28px;
      height: 11px;
      position: absolute;
    }
    .informasi-toko-i-o-status-bar-black1 {
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
    .informasi-toko-bg1 {
      top: -2px;
      left: 78px;
      width: 219px;
      height: 30px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-toko-notch1 {
      top: 0px;
      left: 0px;
      width: 219px;
      height: 30px;
      position: absolute;
    }
    .informasi-toko-right-side1 {
      top: 17.3306884765625px;
      left: 293.6666564941406px;
      width: 66.661376953125px;
      height: 11.336018562316895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-toko-battery1 {
      top: 0.002685546875px;
      left: 42.333343505859375px;
      width: 24.32803726196289px;
      height: 11.333333015441895px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-toko-rectangle2 {
      top: 0px;
      left: 0px;
      width: 22px;
      height: 11px;
      opacity: 0.35;
      position: absolute;
    }
    .informasi-toko-combined-shape1 {
      top: 3.6666667461395264px;
      left: 23px;
      width: 1px;
      height: 4px;
      opacity: 0.40;
      position: absolute;
    }
    .informasi-toko-rectangle3 {
      top: 1.9999998807907104px;
      left: 2px;
      width: 18px;
      height: 7px;
      position: absolute;
    }
    .informasi-toko-wifi1 {
      top: 0px;
      left: 22.027069091796875px;
      width: 15px;
      height: 11px;
      position: absolute;
    }
    .informasi-toko-mobile-signal1 {
      top: 0.3359375px;
      left: 0px;
      width: 17px;
      height: 11px;
      position: absolute;
    }
    .informasi-toko-left-side1 {
      top: 17.16748046875px;
      left: 33.453514099121094px;
      width: 28.42616844177246px;
      height: 11.0888671875px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-toko-svg9411 {
      top: 0px;
      left: 0px;
      width: 28px;
      height: 11px;
      position: absolute;
    }
    .informasi-toko-image-block {
      top: 76px;
      left: 16px;
      width: 343px;
      height: 196px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-toko-i-o-bottom-bar-tabs {
      top: 729px;
      left: 0px;
      width: 375px;
      height: 83.5px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-i-phone-ui {
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
    .informasi-toko-home-indicator {
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
    .informasi-toko-tabs {
      top: 15px;
      left: 26px;
      width: 320px;
      height: 32px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-toko-rectangle9 {
      top: 0px;
      left: 0px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
    }
    .informasi-toko-rectangle10 {
      top: 0px;
      left: 72px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
    }
    .informasi-toko-rectangle11 {
      top: 0px;
      left: 144px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
    }
    .informasi-toko-rectangle12 {
      top: 0px;
      left: 216px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
    }
    .informasi-toko-rectangle13 {
      top: 0px;
      left: 288px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
    }
    .informasi-toko-top-divider {
      top: 0.5px;
      left: 0px;
      width: 375px;
      height: 0px;
      position: absolute;
    }
    .informasi-toko-ilustrasicaberawit12 {
      top: 66px;
      left: 16px;
      width: 343px;
      height: 203px;
      position: absolute;
    }
    .informasi-toko-i-o-bottom-bar-tabs1 {
      top: 729px;
      left: 0px;
      width: 375px;
      height: 83.5px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-i-phone-ui1 {
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
    .informasi-toko-home-indicator1 {
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
    .informasi-toko-tabs1 {
      top: 15px;
      left: 26px;
      width: 320px;
      height: 32px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-toko-navlink {
      display: contents;
    }
    .informasi-toko-rectangle91 {
      top: 0px;
      left: 0px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .informasi-toko-navlink1 {
      display: contents;
    }
    .informasi-toko-rectangle101 {
      top: 0px;
      left: 72px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .informasi-toko-navlink2 {
      display: contents;
    }
    .informasi-toko-rectangle111 {
      top: 0px;
      left: 144px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .informasi-toko-navlink3 {
      display: contents;
    }
    .informasi-toko-rectangle121 {
      top: 0px;
      left: 216px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .informasi-toko-navlink4 {
      display: contents;
    }
    .informasi-toko-rectangle131 {
      top: 0px;
      left: 288px;
      width: 32px;
      height: 32px;
      position: absolute;
      border-radius: 100px;
      text-decoration: none;
    }
    .informasi-toko-top-divider1 {
      top: 0.5px;
      left: 0px;
      width: 375px;
      height: 0px;
      position: absolute;
    }
    .informasi-toko-s-miconsoutlinecart2 {
      top: 748px;
      left: 30px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .informasi-toko-s-miconsoutlinelocation1 {
      top: 748px;
      left: 102px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .informasi-toko-s-miconsoutlineedit4 {
      top: 748px;
      left: 246px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .informasi-toko-s-miconsoutlineuser1 {
      top: 748px;
      left: 174px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .informasi-toko-tokomadjulengkapdan1 {
      top: 66px;
      left: 16px;
      width: 343px;
      height: 203px;
      position: absolute;
    }
    .informasi-toko-tokomadjulengkapdan3 {
      top: 66px;
      left: 16px;
      width: 343px;
      height: 203px;
      position: absolute;
    }
    .informasi-toko-tokomadjulengkapdan2 {
      top: 66px;
      left: 16px;
      width: 343px;
      height: 203px;
      position: absolute;
    }
    .informasi-toko-post-title-text {
      top: 291px;
      left: 15px;
      width: 343px;
      height: 163px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-toko-text {
      top: 44px;
      color: var(--dl-color-default-black);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text02 {
      color: var(--dl-color-default-black);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text04 {
      top: 80px;
      color: var(--dl-color-default-black);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text06 {
      top: 106px;
      color: var(--dl-color-gray-04);
      width: 343px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-ellipse115 {
      top: 300px;
      left: 155px;
      width: 4px;
      height: 4px;
      position: absolute;
    }
    .informasi-toko-ellipse116 {
      top: 305px;
      left: 155px;
      width: 4px;
      height: 4px;
      position: absolute;
    }
    .informasi-toko-ellipse117 {
      top: 310px;
      left: 155px;
      width: 4px;
      height: 4px;
      position: absolute;
    }
    .informasi-toko-section-hot-deals {
      top: 490px;
      left: 16px;
      width: 488px;
      height: 222px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-toko-content-market-block {
      top: 45px;
      left: 0px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-rectangle30 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-toko-text13 {
      top: 118px;
      color: var(--dl-color-default-black);
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text15 {
      top: 160px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-content-market-block01 {
      top: 45px;
      left: 126px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-rectangle3001 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-toko-text17 {
      top: 118px;
      color: var(--dl-color-default-black);
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text19 {
      top: 160px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-content-market-block02 {
      top: 45px;
      left: 252px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-rectangle3002 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-toko-text21 {
      top: 118px;
      color: var(--dl-color-default-black);
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text23 {
      top: 160px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-content-market-block03 {
      top: 45px;
      left: 378px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-rectangle3003 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-toko-text25 {
      top: 118px;
      color: var(--dl-color-default-black);
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text30 {
      top: 160px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text32 {
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-telurayam23 {
      top: 535px;
      left: 16px;
      width: 110px;
      height: 110px;
      position: absolute;
    }
    .informasi-toko-pedagangdagingdemo3 {
      top: 535px;
      left: 142px;
      width: 110px;
      height: 110px;
      position: absolute;
    }
    .informasi-toko-ilustrasicaberawit13 {
      top: 535px;
      left: 268px;
      width: 107px;
      height: 110px;
      position: absolute;
    }
    .informasi-toko-section-hot-deals1 {
      top: 535px;
      left: 16px;
      width: 488px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-toko-content-market-block04 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-rectangle3004 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-toko-text34 {
      top: 118px;
      color: var(--dl-color-default-black);
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text36 {
      top: 160px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-content-market-block05 {
      top: 0px;
      left: 126px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-rectangle3005 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-toko-text38 {
      top: 118px;
      color: var(--dl-color-default-black);
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text40 {
      top: 160px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-content-market-block06 {
      top: 0px;
      left: 252px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-rectangle3006 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-toko-text42 {
      top: 118px;
      color: var(--dl-color-default-black);
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text44 {
      top: 160px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-content-market-block07 {
      top: 0px;
      left: 378px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-rectangle3007 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-toko-text46 {
      top: 118px;
      color: var(--dl-color-default-black);
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text51 {
      top: 160px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-telurayam24 {
      top: 535px;
      left: 16px;
      width: 110px;
      height: 110px;
      position: absolute;
    }
    .informasi-toko-pedagangdagingdemo4 {
      top: 535px;
      left: 142px;
      width: 110px;
      height: 110px;
      position: absolute;
    }
    .informasi-toko-ilustrasicaberawit14 {
      top: 535px;
      left: 268px;
      width: 107px;
      height: 110px;
      position: absolute;
    }
    .informasi-toko-section-hot-deals2 {
      top: 490px;
      left: 16px;
      width: 488px;
      height: 222px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-toko-content-market-block08 {
      top: 45px;
      left: 0px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-rectangle3008 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-toko-text53 {
      top: 118px;
      color: var(--dl-color-default-black);
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text55 {
      top: 160px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-content-market-block09 {
      top: 45px;
      left: 126px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-rectangle3009 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-toko-text57 {
      top: 118px;
      color: var(--dl-color-default-black);
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text59 {
      top: 160px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-content-market-block10 {
      top: 45px;
      left: 252px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-rectangle3010 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-toko-text61 {
      top: 118px;
      color: var(--dl-color-default-black);
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text63 {
      top: 160px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-content-market-block11 {
      top: 45px;
      left: 378px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-rectangle3011 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-toko-text65 {
      top: 118px;
      color: var(--dl-color-default-black);
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text70 {
      top: 160px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text72 {
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-pedagangdagingdemo5 {
      top: 535px;
      left: 142px;
      width: 110px;
      height: 110px;
      position: absolute;
    }
    .informasi-toko-ilustrasicaberawit15 {
      top: 535px;
      left: 268px;
      width: 107px;
      height: 110px;
      position: absolute;
    }
    .informasi-toko-section-hot-deals3 {
      top: 535px;
      left: 16px;
      width: 488px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 1;
    }
    .informasi-toko-content-market-block12 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-rectangle3012 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-toko-text74 {
      top: 118px;
      color: var(--dl-color-default-black);
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text76 {
      top: 160px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-telurayam241 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      position: absolute;
    }
    .informasi-toko-content-market-block13 {
      top: 0px;
      left: 126px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-rectangle3013 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-toko-text78 {
      top: 118px;
      color: var(--dl-color-default-black);
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text80 {
      top: 160px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-content-market-block14 {
      top: 0px;
      left: 252px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-rectangle3014 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-toko-text82 {
      top: 118px;
      color: var(--dl-color-default-black);
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text84 {
      top: 160px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-content-market-block15 {
      top: 0px;
      left: 378px;
      width: 110px;
      height: 177px;
      display: flex;
      position: absolute;
      align-items: flex-start;
      flex-shrink: 0;
    }
    .informasi-toko-rectangle3015 {
      top: 0px;
      left: 0px;
      width: 110px;
      height: 110px;
      position: absolute;
      border-radius: 8px;
    }
    .informasi-toko-text86 {
      top: 118px;
      color: var(--dl-color-default-black);
      width: 110px;
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-text91 {
      top: 160px;
      color: var(--dl-color-default-black);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
    }
    .informasi-toko-pedagangdagingdemo6 {
      top: 535px;
      left: 142px;
      width: 110px;
      height: 110px;
      position: absolute;
    }
    .informasi-toko-ilustrasicaberawit16 {
      top: 535px;
      left: 268px;
      width: 107px;
      height: 110px;
      position: absolute;
    }
    .informasi-toko-s-miconsoutlinecoin {
      top: 748px;
      left: 318px;
      width: 24px;
      height: 24px;
      position: absolute;
    }
    .informasi-toko-text93 {
      top: 44px;
      left: 16px;
      color: var(--dl-color-green-primary);
      height: auto;
      position: absolute;
      text-align: left;
      line-height: normal;
      text-decoration: none;
    }
    .informasi-toko-button-primary {
      gap: 12px;
      top: 291px;
      left: 239px;
      width: 120px;
      height: 32px;
      display: flex;
      padding: 16px 32px;
      position: absolute;
      align-items: center;
      flex-shrink: 0;
      border-color: rgba(125, 82, 67, 1);
      border-style: solid;
      border-width: 1px;
      border-radius: 100px;
      flex-direction: column;
      justify-content: center;
      text-decoration: none;
    }
    .informasi-toko-text95 {
      color: var(--dl-color-default-black);
      height: auto;
      text-align: center;
      line-height: normal;
    }
    
    </style>
  </head>
  <body>
    <div>
      <!-- <link href="./informasi-toko.css" rel="stylesheet" /> -->

      <div class="informasi-toko-container">
        <div class="informasi-toko-informasi-toko">
          <div class="informasi-toko-i-o-status-bar-black">
            <div class="informasi-toko-bg">
              <img
                alt="NotchI467"
                src="public/external/notchi467-j2u.svg"
                class="informasi-toko-notch"
              />
            </div>
            <div class="informasi-toko-right-side">
              <div class="informasi-toko-battery">
                <img
                  alt="RectangleI467"
                  src="public/external/rectanglei467-7mo.svg"
                  class="informasi-toko-rectangle"
                />
                <img
                  alt="CombinedShapeI467"
                  src="public/external/combinedshapei467-sbbe.svg"
                  class="informasi-toko-combined-shape"
                />
                <img
                  alt="RectangleI467"
                  src="public/external/rectanglei467-6fso.svg"
                  class="informasi-toko-rectangle1"
                />
              </div>
              <img
                alt="WifiI467"
                src="public/external/wifii467-05aa.svg"
                class="informasi-toko-wifi"
              />
              <img
                alt="MobileSignalI467"
                src="public/external/mobilesignali467-i0ho.svg"
                class="informasi-toko-mobile-signal"
              />
            </div>
            <div class="informasi-toko-left-side">
              <img
                alt="SVG941I467"
                src="public/external/svg941i467-f3pm.svg"
                class="informasi-toko-svg941"
              />
            </div>
          </div>
          <div class="informasi-toko-i-o-status-bar-black1">
            <div class="informasi-toko-bg1">
              <img
                alt="NotchI467"
                src="public/external/notchi467-qies.svg"
                class="informasi-toko-notch1"
              />
            </div>
            <div class="informasi-toko-right-side1">
              <div class="informasi-toko-battery1">
                <img
                  alt="RectangleI467"
                  src="public/external/rectanglei467-onif.svg"
                  class="informasi-toko-rectangle2"
                />
                <img
                  alt="CombinedShapeI467"
                  src="public/external/combinedshapei467-t4m.svg"
                  class="informasi-toko-combined-shape1"
                />
                <img
                  alt="RectangleI467"
                  src="public/external/rectanglei467-xods.svg"
                  class="informasi-toko-rectangle3"
                />
              </div>
              <img
                alt="WifiI467"
                src="public/external/wifii467-6xbn.svg"
                class="informasi-toko-wifi1"
              />
              <img
                alt="MobileSignalI467"
                src="public/external/mobilesignali467-457y.svg"
                class="informasi-toko-mobile-signal1"
              />
            </div>
            <div class="informasi-toko-left-side1">
              <img
                alt="SVG941I467"
                src="public/external/svg941i467-igh1.svg"
                class="informasi-toko-svg9411"
              />
            </div>
          </div>
          <img
            alt="ImageBlock4673"
            src="public/external/imageblock4673-i6ke-400w.png"
            class="informasi-toko-image-block"
          />
          <div class="informasi-toko-i-o-bottom-bar-tabs">
            <div class="informasi-toko-i-phone-ui">
              <div class="informasi-toko-home-indicator"></div>
            </div>
            <div class="informasi-toko-tabs">
              <img
                alt="Rectangle9I467"
                src="public/external/rectangle9i467-82s-200h.png"
                class="informasi-toko-rectangle9"
              />
              <img
                alt="Rectangle10I467"
                src="public/external/rectangle10i467-fnlj-200h.png"
                class="informasi-toko-rectangle10"
              />
              <img
                alt="Rectangle11I467"
                src="public/external/rectangle11i467-wbcb-200h.png"
                class="informasi-toko-rectangle11"
              />
              <img
                alt="Rectangle12I467"
                src="public/external/rectangle12i467-ehg-200h.png"
                class="informasi-toko-rectangle12"
              />
              <img
                alt="Rectangle13I467"
                src="public/external/rectangle13i467-d4f-200h.png"
                class="informasi-toko-rectangle13"
              />
            </div>
            <img
              alt="TopDividerI467"
              src="public/external/topdivideri467-0sh-200h.png"
              class="informasi-toko-top-divider"
            />
          </div>
          <img
            alt="ilustrasicaberawit124673"
            src="public/external/ilustrasicaberawit124673-j0e-300h.png"
            class="informasi-toko-ilustrasicaberawit12"
          />
          <div class="informasi-toko-i-o-bottom-bar-tabs1">
            <div class="informasi-toko-i-phone-ui1">
              <div class="informasi-toko-home-indicator1"></div>
            </div>
            <div class="informasi-toko-tabs1">
              <a href="{{ url('/cariBarangHome') }}" class="informasi-toko-navlink">
                <img
                  alt="Rectangle9I467"
                  src="public/external/rectangle9i467-1j0n-200h.png"
                  class="informasi-toko-rectangle91"
                />
              </a>
              <a href="{{ url('/cariTokoHome') }}" class="informasi-toko-navlink1">
                <img
                  alt="Rectangle10I467"
                  src="public/external/rectangle10i467-jw-200h.png"
                  class="informasi-toko-rectangle101"
                />
              </a>
              <a href="{{ url('/pengaturanAkun') }}" class="informasi-toko-navlink2">
                <img
                  alt="Rectangle11I467"
                  src="public/external/rectangle11i467-oztui-200h.png"
                  class="informasi-toko-rectangle111"
                />
              </a>
              <a href="{{ url('/etalaseTokoHome') }}" class="informasi-toko-navlink3">
                <img
                  alt="Rectangle12I467"
                  src="public/external/rectangle12i467-tki-200h.png"
                  class="informasi-toko-rectangle121"
                />
              </a>
              <a href="{{ url('/hargaBarangHome') }}" class="informasi-toko-navlink4">
                <img
                  alt="Rectangle13I467"
                  src="public/external/rectangle13i467-cxs9i-200h.png"
                  class="informasi-toko-rectangle131"
                />
              </a>
            </div>
            <img
              alt="TopDividerI467"
              src="public/external/topdivideri467-djv-200h.png"
              class="informasi-toko-top-divider1"
            />
          </div>
          <img
            alt="SWMiconsoutlinecart24673"
            src="public/external/swmiconsoutlinecart24673-zjp3.svg"
            class="informasi-toko-s-miconsoutlinecart2"
          />
          <img
            alt="SWMiconsoutlinelocation14673"
            src="public/external/swmiconsoutlinelocation14673-e99o.svg"
            class="informasi-toko-s-miconsoutlinelocation1"
          />
          <img
            alt="SWMiconsoutlineedit44673"
            src="public/external/swmiconsoutlineedit44673-u7yk.svg"
            class="informasi-toko-s-miconsoutlineedit4"
          />
          <img
            alt="SWMiconsoutlineuser14673"
            src="public/external/swmiconsoutlineuser14673-ezmq.svg"
            class="informasi-toko-s-miconsoutlineuser1"
          />
          <img
            alt="tokomadjulengkapdan14673"
            src="public/external/tokomadjulengkapdan14673-j8a-300h.png"
            class="informasi-toko-tokomadjulengkapdan1"
          />
          <img
            alt="tokomadjulengkapdan34673"
            src="public/external/tokomadjulengkapdan34673-g1u-300h.png"
            class="informasi-toko-tokomadjulengkapdan3"
          />
          <img
            alt="tokomadjulengkapdan24673"
            src="public/external/tokomadjulengkapdan24673-q3x3-300h.png"
            class="informasi-toko-tokomadjulengkapdan2"
          />
          <div class="informasi-toko-post-title-text">
            <span class="informasi-toko-text UI-30Medium">
              <span>Pasar Genteng Baru</span>
            </span>
            <span class="informasi-toko-text02 UI-30Medium">
              <span>{{ $toko->namaToko }}</span>
            </span>
            <span class="informasi-toko-text04 UI-16Semi">
              <span>Lantai 1. Stand 0 3-4</span>
            </span>
            <span class="informasi-toko-text06 UI-16Medium">
              <span>
                <span>Jam Operasi : 06:00 - 18:00</span>
                <br />
                <span>Kontak Toko : 081234567890 (WA)</span>
                <br />
                <span></span>
              </span>
            </span>
          </div>
          <img
            alt="Ellipse1154673"
            src="public/external/ellipse1154673-e9uj-200h.png"
            class="informasi-toko-ellipse115"
          />
          <img
            alt="Ellipse1164673"
            src="public/external/ellipse1164673-7xaa-200h.png"
            class="informasi-toko-ellipse116"
          />
          <img
            alt="Ellipse1174673"
            src="public/external/ellipse1174673-7mag-200h.png"
            class="informasi-toko-ellipse117"
          />
          <div class="informasi-toko-section-hot-deals">
            <div class="informasi-toko-content-market-block">
              <img
                alt="Rectangle30I467"
                src="public/external/rectangle30i467-vo5e-200h.png"
                class="informasi-toko-rectangle30"
              />
              <span class="informasi-toko-text13 UI-14Regular">
                <span>Telur 1 Kg</span>
              </span>
              <span class="informasi-toko-text15 UI-14Semi">
                <span>Rp 17.500</span>
              </span>
            </div>
            <div class="informasi-toko-content-market-block01">
              <img
                alt="Rectangle30I467"
                src="public/external/rectangle30i467-56o-200h.png"
                class="informasi-toko-rectangle3001"
              />
              <span class="informasi-toko-text17 UI-14Regular">
                <span>Daging Sapi 1 Kg</span>
              </span>
              <span class="informasi-toko-text19 UI-14Semi">
                <span>Rp 95.000</span>
              </span>
            </div>
            <div class="informasi-toko-content-market-block02">
              <img
                alt="Rectangle30I467"
                src="public/external/rectangle30i467-hvwhj-200w.png"
                class="informasi-toko-rectangle3002"
              />
              <span class="informasi-toko-text21 UI-14Regular">
                <span>Cabai Rawit 250 gr</span>
              </span>
              <span class="informasi-toko-text23 UI-14Semi">
                <span>Rp 16.000</span>
              </span>
            </div>
            <div class="informasi-toko-content-market-block03">
              <img
                alt="Rectangle30I467"
                src="public/external/rectangle30i467-gssa-200h.png"
                class="informasi-toko-rectangle3003"
              />
              <span class="informasi-toko-text25 UI-14Regular">
                <span>
                  <span>Item #1 Name</span>
                  <br />
                  <span>Goes Here</span>
                </span>
              </span>
              <span class="informasi-toko-text30 UI-14Semi">
                <span>$19.99</span>
              </span>
            </div>
            <span class="informasi-toko-text32 UI-30Medium">
              <span>Barang Yang Dijual</span>
            </span>
          </div>
          <img
            alt="telurayam234673"
            src="public/external/telurayam234673-v5vq-200h.png"
            class="informasi-toko-telurayam23"
          />
          <img
            alt="pedagangdagingdemo34673"
            src="public/external/pedagangdagingdemo34673-uyme-200h.png"
            class="informasi-toko-pedagangdagingdemo3"
          />
          <img
            alt="ilustrasicaberawit134673"
            src="public/external/ilustrasicaberawit134673-13li-200w.png"
            class="informasi-toko-ilustrasicaberawit13"
          />
          <div class="informasi-toko-section-hot-deals1">
            <div class="informasi-toko-content-market-block04">
              <img
                alt="Rectangle30I467"
                src="public/external/rectangle30i467-itqo-200h.png"
                class="informasi-toko-rectangle3004"
              />
              <span class="informasi-toko-text34 UI-14Regular">
                <span>Telur 1 Kg</span>
              </span>
              <span class="informasi-toko-text36 UI-14Semi">
                <span>Rp 17.500</span>
              </span>
            </div>
            <div class="informasi-toko-content-market-block05">
              <img
                alt="Rectangle30I467"
                src="public/external/rectangle30i467-82u7-200h.png"
                class="informasi-toko-rectangle3005"
              />
              <span class="informasi-toko-text38 UI-14Regular">
                <span>Daging Sapi 1 Kg</span>
              </span>
              <span class="informasi-toko-text40 UI-14Semi">
                <span>Rp 95.000</span>
              </span>
            </div>
            <div class="informasi-toko-content-market-block06">
              <img
                alt="Rectangle30I467"
                src="public/external/rectangle30i467-irrh-200w.png"
                class="informasi-toko-rectangle3006"
              />
              <span class="informasi-toko-text42 UI-14Regular">
                <span>Cabai Rawit 250 gr</span>
              </span>
              <span class="informasi-toko-text44 UI-14Semi">
                <span>Rp 16.000</span>
              </span>
            </div>
            <div class="informasi-toko-content-market-block07">
              <img
                alt="Rectangle30I467"
                src="public/external/rectangle30i467-914l-200h.png"
                class="informasi-toko-rectangle3007"
              />
              <span class="informasi-toko-text46 UI-14Regular">
                <span>
                  <span>Item #1 Name</span>
                  <br />
                  <span>Goes Here</span>
                </span>
              </span>
              <span class="informasi-toko-text51 UI-14Semi">
                <span>$19.99</span>
              </span>
            </div>
          </div>
          <img
            alt="telurayam244673"
            src="public/external/telurayam244673-nqlp-200h.png"
            class="informasi-toko-telurayam24"
          />
          <img
            alt="pedagangdagingdemo44673"
            src="public/external/pedagangdagingdemo44673-qvxp-200h.png"
            class="informasi-toko-pedagangdagingdemo4"
          />
          <img
            alt="ilustrasicaberawit144673"
            src="public/external/ilustrasicaberawit144673-l5j-200w.png"
            class="informasi-toko-ilustrasicaberawit14"
          />
          <div class="informasi-toko-section-hot-deals2">
            <div class="informasi-toko-content-market-block08">
              <img
                alt="Rectangle30I467"
                src="public/external/rectangle30i467-ke7-200h.png"
                class="informasi-toko-rectangle3008"
              />
              <span class="informasi-toko-text53 UI-14Regular">
                <span>Telur 1 Kg</span>
              </span>
              <span class="informasi-toko-text55 UI-14Semi">
                <span>Rp 17.500</span>
              </span>
            </div>
            <div class="informasi-toko-content-market-block09">
              <img
                alt="Rectangle30I467"
                src="public/external/rectangle30i467-t7k2-200h.png"
                class="informasi-toko-rectangle3009"
              />
              <span class="informasi-toko-text57 UI-14Regular">
                <span>Daging Sapi 1 Kg</span>
              </span>
              <span class="informasi-toko-text59 UI-14Semi">
                <span>Rp 95.000</span>
              </span>
            </div>
            <div class="informasi-toko-content-market-block10">
              <img
                alt="Rectangle30I467"
                src="public/external/rectangle30i467-421f-200w.png"
                class="informasi-toko-rectangle3010"
              />
              <span class="informasi-toko-text61 UI-14Regular">
                <span>Cabai Rawit 250 gr</span>
              </span>
              <span class="informasi-toko-text63 UI-14Semi">
                <span>Rp 16.000</span>
              </span>
            </div>
            <div class="informasi-toko-content-market-block11">
              <img
                alt="Rectangle30I467"
                src="public/external/rectangle30i467-8ex-200h.png"
                class="informasi-toko-rectangle3011"
              />
              <span class="informasi-toko-text65 UI-14Regular">
                <span>
                  <span>Item #1 Name</span>
                  <br />
                  <span>Goes Here</span>
                </span>
              </span>
              <span class="informasi-toko-text70 UI-14Semi">
                <span>$19.99</span>
              </span>
            </div>
            <span class="informasi-toko-text72 UI-30Medium">
              <span>Barang Yang Dijual</span>
            </span>
          </div>
          <img
            alt="pedagangdagingdemo54673"
            src="public/external/pedagangdagingdemo54673-835-200h.png"
            class="informasi-toko-pedagangdagingdemo5"
          />
          <img
            alt="ilustrasicaberawit154673"
            src="public/external/ilustrasicaberawit154673-9tw-200w.png"
            class="informasi-toko-ilustrasicaberawit15"
          />
          <div class="informasi-toko-section-hot-deals3">
            <div class="informasi-toko-content-market-block12">
              <img
                alt="Rectangle30I467"
                src="public/external/rectangle30i467-02d-200h.png"
                class="informasi-toko-rectangle3012"
              />
              <span class="informasi-toko-text74 UI-14Regular">
                <span>Telur 1 Kg</span>
              </span>
              <span class="informasi-toko-text76 UI-14Semi">
                <span>Rp 17.500</span>
              </span>
            </div>
            <img
              alt="telurayam245418"
              src="public/external/telurayam245418-tpn-200h.png"
              class="informasi-toko-telurayam241"
            />
            <div class="informasi-toko-content-market-block13">
              <img
                alt="Rectangle30I467"
                src="public/external/rectangle30i467-lmrh-200h.png"
                class="informasi-toko-rectangle3013"
              />
              <span class="informasi-toko-text78 UI-14Regular">
                <span>Daging Sapi 1 Kg</span>
              </span>
              <span class="informasi-toko-text80 UI-14Semi">
                <span>Rp 95.000</span>
              </span>
            </div>
            <div class="informasi-toko-content-market-block14">
              <img
                alt="Rectangle30I467"
                src="public/external/rectangle30i467-7c-200w.png"
                class="informasi-toko-rectangle3014"
              />
              <span class="informasi-toko-text82 UI-14Regular">
                <span>Cabai Rawit 250 gr</span>
              </span>
              <span class="informasi-toko-text84 UI-14Semi">
                <span>Rp 16.000</span>
              </span>
            </div>
            <div class="informasi-toko-content-market-block15">
              <img
                alt="Rectangle30I467"
                src="public/external/rectangle30i467-jfkk-200h.png"
                class="informasi-toko-rectangle3015"
              />
              <span class="informasi-toko-text86 UI-14Regular">
                <span>
                  <span>Item #1 Name</span>
                  <br />
                  <span>Goes Here</span>
                </span>
              </span>
              <span class="informasi-toko-text91 UI-14Semi">
                <span>$19.99</span>
              </span>
            </div>
          </div>
          <img
            alt="pedagangdagingdemo64673"
            src="public/external/pedagangdagingdemo64673-ixvo-200h.png"
            class="informasi-toko-pedagangdagingdemo6"
          />
          <img
            alt="ilustrasicaberawit164673"
            src="public/external/ilustrasicaberawit164673-anwk-200w.png"
            class="informasi-toko-ilustrasicaberawit16"
          />
          <img
            alt="SWMiconsoutlinecoin4673"
            src="public/external/swmiconsoutlinecoin4673-wk.svg"
            class="informasi-toko-s-miconsoutlinecoin"
          />
          <a
            href="informasi-barang.html"
            class="informasi-toko-text93 UI-16Medium"
          >
            <span>Kembali</span>
          </a>
          <a href="kontak-toko.html" class="informasi-toko-button-primary">
            <span class="informasi-toko-text95 UI-14Medium">
              <span>Kontak Toko</span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
