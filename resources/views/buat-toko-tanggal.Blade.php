<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Buat-Toko-Tanggal - EMarket</title>
    <meta property="og:title" content="Buat-Toko-Tanggal - EMarket" />
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
      .buat-toko-tanggal-container {
    width: 100%;
    display: flex;
    overflow: auto;
    min-height: 100vh;
    align-items: center;
    flex-direction: column;
  }
  
  .buat-toko-tanggal-buat-tokotanggal {
    width: 370px;
    height: 812px;
    display: flex;
    overflow: hidden;
    position: relative;
    align-items: flex-start;
    flex-shrink: 0;
    background-color: var(--dl-color-default-white);
  }
  
  .buat-toko-tanggal-i-o-status-bar-white {
    top: 0px;
    left: 0px;
    width: 375px;
    height: 44px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .buat-toko-tanggal-i-o-status-bar-black {
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
  
  .buat-toko-tanggal-bg {
    top: -2px;
    left: 78px;
    width: 219px;
    height: 30px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-notch {
    top: 0px;
    left: 0px;
    width: 219px;
    height: 30px;
    position: absolute;
  }
  
  .buat-toko-tanggal-right-side {
    top: 17.3306884765625px;
    left: 293.6666564941406px;
    width: 66.661376953125px;
    height: 11.336018562316895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-battery {
    top: 0.002685546875px;
    left: 42.333343505859375px;
    width: 24.32803726196289px;
    height: 11.333333015441895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-rectangle {
    top: 0px;
    left: 0px;
    width: 22px;
    height: 11px;
    opacity: 0.35;
    position: absolute;
  }
  
  .buat-toko-tanggal-combined-shape {
    top: 3.6666667461395264px;
    left: 23px;
    width: 1px;
    height: 4px;
    opacity: 0.40;
    position: absolute;
  }
  
  .buat-toko-tanggal-rectangle1 {
    top: 1.9999998807907104px;
    left: 2px;
    width: 18px;
    height: 7px;
    position: absolute;
  }
  
  .buat-toko-tanggal-wifi {
    top: 0px;
    left: 22.027069091796875px;
    width: 15px;
    height: 11px;
    position: absolute;
  }
  
  .buat-toko-tanggal-mobile-signal {
    top: 0.3359375px;
    left: 0px;
    width: 17px;
    height: 11px;
    position: absolute;
  }
  
  .buat-toko-tanggal-left-side {
    top: 17.16748046875px;
    left: 33.453514099121094px;
    width: 28.42616844177246px;
    height: 11.0888671875px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-svg941 {
    top: 0px;
    left: 0px;
    width: 28px;
    height: 11px;
    position: absolute;
  }
  
  .buat-toko-tanggal-i-o-status-bar-black1 {
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
  
  .buat-toko-tanggal-bg01 {
    top: -2px;
    left: 78px;
    width: 219px;
    height: 30px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-notch1 {
    top: 0px;
    left: 0px;
    width: 219px;
    height: 30px;
    position: absolute;
  }
  
  .buat-toko-tanggal-right-side1 {
    top: 17.3306884765625px;
    left: 293.6666564941406px;
    width: 66.661376953125px;
    height: 11.336018562316895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-battery1 {
    top: 0.002685546875px;
    left: 42.333343505859375px;
    width: 24.32803726196289px;
    height: 11.333333015441895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-rectangle2 {
    top: 0px;
    left: 0px;
    width: 22px;
    height: 11px;
    opacity: 0.35;
    position: absolute;
  }
  
  .buat-toko-tanggal-combined-shape1 {
    top: 3.6666667461395264px;
    left: 23px;
    width: 1px;
    height: 4px;
    opacity: 0.40;
    position: absolute;
  }
  
  .buat-toko-tanggal-rectangle3 {
    top: 1.9999998807907104px;
    left: 2px;
    width: 18px;
    height: 7px;
    position: absolute;
  }
  
  .buat-toko-tanggal-wifi1 {
    top: 0px;
    left: 22.027069091796875px;
    width: 15px;
    height: 11px;
    position: absolute;
  }
  
  .buat-toko-tanggal-mobile-signal1 {
    top: 0.3359375px;
    left: 0px;
    width: 17px;
    height: 11px;
    position: absolute;
  }
  
  .buat-toko-tanggal-left-side1 {
    top: 17.16748046875px;
    left: 33.453514099121094px;
    width: 28.42616844177246px;
    height: 11.0888671875px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-svg9411 {
    top: 0px;
    left: 0px;
    width: 28px;
    height: 11px;
    position: absolute;
  }
  
  .buat-toko-tanggal-s-miconsoutlinecart2 {
    top: 748px;
    left: 30px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  
  .buat-toko-tanggal-i-o-bottom-bar-tabs {
    top: 731px;
    left: 0px;
    width: 375px;
    height: 83.5px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .buat-toko-tanggal-i-phone-ui {
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
  
  .buat-toko-tanggal-home-indicator {
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
  
  .buat-toko-tanggal-tabs {
    top: 15px;
    left: 26px;
    width: 320px;
    height: 32px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-rectangle9 {
    top: 0px;
    left: 0px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  
  .buat-toko-tanggal-rectangle10 {
    top: 0px;
    left: 72px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  
  .buat-toko-tanggal-rectangle11 {
    top: 0px;
    left: 144px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  
  .buat-toko-tanggal-rectangle12 {
    top: 0px;
    left: 216px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  
  .buat-toko-tanggal-rectangle13 {
    top: 0px;
    left: 288px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  
  .buat-toko-tanggal-top-divider {
    top: 0.5px;
    left: 0px;
    width: 375px;
    height: 0px;
    position: absolute;
  }
  
  .buat-toko-tanggal-shape {
    top: 753px;
    left: 106px;
    width: 16px;
    height: 18px;
    position: absolute;
  }
  
  .buat-toko-tanggal-s-miconsoutlinecart21 {
    top: 750px;
    left: 30px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  
  .buat-toko-tanggal-s-miconsoutlineedit4 {
    top: 750px;
    left: 246px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  
  .buat-toko-tanggal-s-miconsoutlineuser1 {
    top: 750px;
    left: 174px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  
  .buat-toko-tanggal-s-miconsoutlinecoin {
    top: 750px;
    left: 318px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  
  .buat-toko-tanggal-post-title-text {
    top: 322px;
    left: 16px;
    width: 545px;
    height: 181px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-text {
    top: 57px;
    left: 1px;
    color: rgba(189, 189, 189, 1);
    width: 343px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .buat-toko-tanggal-text01 {
    color: var(--dl-color-gray-03);
  }
  
  .buat-toko-tanggal-text02 {
    top: 57px;
    left: 202px;
    color: rgba(189, 189, 189, 1);
    width: 343px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .buat-toko-tanggal-text03 {
    color: var(--dl-color-gray-03);
  }
  
  .buat-toko-tanggal-s-miconsoutlinechevrondown {
    top: 101px;
    left: 160px;
    width: 24px;
    height: 24px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .buat-toko-tanggal-text04 {
    color: rgba(189, 189, 189, 1);
    width: 343px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .buat-toko-tanggal-text05 {
    color: var(--dl-color-gray-03);
  }
  
  .buat-toko-tanggal-text06 {
    top: 104px;
    left: 1px;
    color: var(--dl-color-default-black);
    width: 343px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .buat-toko-tanggal-text11 {
    top: 165px;
    left: 1px;
    color: var(--dl-color-default-black);
    width: 343px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .buat-toko-tanggal-text16 {
    top: 511px;
    left: 24px;
    color: var(--dl-color-default-black);
    width: 343px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .buat-toko-tanggal-shape1 {
    top: 385px;
    left: 159px;
    width: 16px;
    height: 8px;
    position: absolute;
  }
  
  .buat-toko-tanggal-tambah {
    top: 85px;
    left: 17px;
    width: 343px;
    height: 196px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-foto {
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
  
  .buat-toko-tanggal-line83 {
    top: 351px;
    left: 17px;
    width: 339px;
    height: 1px;
    position: absolute;
  }
  
  .buat-toko-tanggal-line84 {
    top: 398px;
    left: 17px;
    width: 158px;
    height: 1px;
    position: absolute;
  }
  
  .buat-toko-tanggal-line87 {
    top: 398px;
    left: 218px;
    width: 138px;
    height: 1px;
    position: absolute;
  }
  
  .buat-toko-tanggal-rectangle241 {
    top: 450px;
    left: 17px;
    width: 339px;
    height: 19px;
    position: absolute;
  }
  
  .buat-toko-tanggal-button-primary {
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
    background-color: var(--dl-color-green-primary);
  }
  
  .buat-toko-tanggal-text21 {
    color: var(--dl-color-default-white);
    height: auto;
    text-align: center;
    line-height: normal;
  }
  
  .buat-toko-tanggal-togglei-phone {
    top: 482px;
    left: 305px;
    width: 51px;
    height: 31px;
    position: absolute;
  }
  
  .buat-toko-tanggal-item {
    top: 36px;
    right: -11px;
    width: 376px;
    height: 616px;
    position: absolute;
  }
  
  .buat-toko-tanggal-bottom-drawer {
    top: 578px;
    left: 0px;
    width: 375px;
    height: 234px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .buat-toko-tanggal-bg02 {
    top: -209px;
    left: 0px;
    width: 375px;
    height: 504px;
    position: absolute;
    border-radius: 16px 16px 0 0;
  }
  
  .buat-toko-tanggal-actions {
    top: 74px;
    left: 24px;
    width: 327px;
    height: 51px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-button-primary1 {
    gap: 12px;
    top: 0px;
    left: 0px;
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
  
  .buat-toko-tanggal-text23 {
    color: var(--dl-color-default-white);
    height: auto;
    text-align: center;
    line-height: normal;
  }
  
  .buat-toko-tanggal-header-elements {
    top: -181.6644287109375px;
    left: 172px;
    width: 32px;
    height: 6.833898067474365px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
    background-color: rgba(231, 231, 231, 1);
  }
  
  .buat-toko-tanggal-text25 {
    top: 146px;
    left: 32px;
    color: var(--dl-color-green-primary);
    width: 311px;
    height: auto;
    position: absolute;
    text-align: center;
    line-height: normal;
    text-decoration: none;
  }
  
  .buat-toko-tanggal-component2 {
    top: 418px;
    left: 56px;
    width: 182px;
    height: 203.5px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .buat-toko-tanggal-group42 {
    top: 0px;
    left: 0px;
    width: 182px;
    height: 20px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-checkbox-empty {
    top: 0px;
    left: 0px;
    width: 20px;
    height: 20px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .buat-toko-tanggal-bg03 {
    top: 0px;
    left: 0px;
    width: 20px;
    height: 20px;
    position: absolute;
    border-color: rgba(231, 231, 231, 1);
    border-style: solid;
    border-width: 1px;
    border-radius: 4px;
  }
  
  .buat-toko-tanggal-text27 {
    top: 0.5px;
    left: 28px;
    color: var(--dl-color-gray-04);
    width: 154px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .buat-toko-tanggal-group43 {
    top: 33.5px;
    left: 0px;
    width: 182px;
    height: 20px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-checkbox-empty1 {
    top: 0px;
    left: 0px;
    width: 20px;
    height: 20px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .buat-toko-tanggal-bg04 {
    top: 0px;
    left: 0px;
    width: 20px;
    height: 20px;
    position: absolute;
    border-color: rgba(231, 231, 231, 1);
    border-style: solid;
    border-width: 1px;
    border-radius: 4px;
  }
  
  .buat-toko-tanggal-text29 {
    top: 0.5px;
    left: 28px;
    color: var(--dl-color-gray-04);
    width: 154px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .buat-toko-tanggal-group44 {
    top: 63.5px;
    left: 0px;
    width: 182px;
    height: 20px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-checkbox-empty2 {
    top: 0px;
    left: 0px;
    width: 20px;
    height: 20px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .buat-toko-tanggal-bg05 {
    top: 0px;
    left: 0px;
    width: 20px;
    height: 20px;
    position: absolute;
    border-color: rgba(231, 231, 231, 1);
    border-style: solid;
    border-width: 1px;
    border-radius: 4px;
  }
  
  .buat-toko-tanggal-text31 {
    top: 0.5px;
    left: 28px;
    color: var(--dl-color-gray-04);
    width: 154px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .buat-toko-tanggal-group45 {
    top: 93.5px;
    left: 0px;
    width: 182px;
    height: 20px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-checkbox-empty3 {
    top: 0px;
    left: 0px;
    width: 20px;
    height: 20px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .buat-toko-tanggal-bg06 {
    top: 0px;
    left: 0px;
    width: 20px;
    height: 20px;
    position: absolute;
    border-color: rgba(231, 231, 231, 1);
    border-style: solid;
    border-width: 1px;
    border-radius: 4px;
  }
  
  .buat-toko-tanggal-text33 {
    top: 0.5px;
    left: 28px;
    color: var(--dl-color-gray-04);
    width: 154px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .buat-toko-tanggal-group46 {
    top: 123.5px;
    left: 0px;
    width: 182px;
    height: 20px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-checkbox-empty4 {
    top: 0px;
    left: 0px;
    width: 20px;
    height: 20px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .buat-toko-tanggal-bg07 {
    top: 0px;
    left: 0px;
    width: 20px;
    height: 20px;
    position: absolute;
    border-color: rgba(231, 231, 231, 1);
    border-style: solid;
    border-width: 1px;
    border-radius: 4px;
  }
  
  .buat-toko-tanggal-text35 {
    top: 0.5px;
    left: 28px;
    color: var(--dl-color-gray-04);
    width: 154px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .buat-toko-tanggal-group47 {
    top: 153.5px;
    left: 0px;
    width: 182px;
    height: 20px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-checkbox-empty5 {
    top: 0px;
    left: 0px;
    width: 20px;
    height: 20px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .buat-toko-tanggal-bg08 {
    top: 0px;
    left: 0px;
    width: 20px;
    height: 20px;
    position: absolute;
    border-color: rgba(231, 231, 231, 1);
    border-style: solid;
    border-width: 1px;
    border-radius: 4px;
  }
  
  .buat-toko-tanggal-text37 {
    top: 0.5px;
    left: 28px;
    color: var(--dl-color-gray-04);
    width: 154px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .buat-toko-tanggal-group48 {
    top: 183.5px;
    left: 0px;
    width: 182px;
    height: 20px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .buat-toko-tanggal-checkbox-empty6 {
    top: 0px;
    left: 0px;
    width: 20px;
    height: 20px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .buat-toko-tanggal-bg09 {
    top: 0px;
    left: 0px;
    width: 20px;
    height: 20px;
    position: absolute;
    border-color: rgba(231, 231, 231, 1);
    border-style: solid;
    border-width: 1px;
    border-radius: 4px;
  }
  
  .buat-toko-tanggal-text39 {
    top: 0.5px;
    left: 28px;
    color: var(--dl-color-gray-04);
    width: 154px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  </style>
  </head>
  <body>
    <div>
      <!-- <link href="./buat-toko-tanggal.css" rel="stylesheet" /> -->

      <div class="buat-toko-tanggal-container">
        <div class="buat-toko-tanggal-buat-tokotanggal">
          <div class="buat-toko-tanggal-i-o-status-bar-white">
            <div class="buat-toko-tanggal-i-o-status-bar-black">
              <div class="buat-toko-tanggal-bg">
                <img
                  alt="NotchI526"
                  src="public/external/notchi526-xfxu.svg"
                  class="buat-toko-tanggal-notch"
                />
              </div>
              <div class="buat-toko-tanggal-right-side">
                <div class="buat-toko-tanggal-battery">
                  <img
                    alt="RectangleI526"
                    src="public/external/rectanglei526-smll.svg"
                    class="buat-toko-tanggal-rectangle"
                  />
                  <img
                    alt="CombinedShapeI526"
                    src="public/external/combinedshapei526-fw5.svg"
                    class="buat-toko-tanggal-combined-shape"
                  />
                  <img
                    alt="RectangleI526"
                    src="public/external/rectanglei526-rjba.svg"
                    class="buat-toko-tanggal-rectangle1"
                  />
                </div>
                <img
                  alt="WifiI526"
                  src="public/external/wifii526-fikq.svg"
                  class="buat-toko-tanggal-wifi"
                />
                <img
                  alt="MobileSignalI526"
                  src="public/external/mobilesignali526-zmw.svg"
                  class="buat-toko-tanggal-mobile-signal"
                />
              </div>
              <div class="buat-toko-tanggal-left-side">
                <img
                  alt="SVG941I526"
                  src="public/external/svg941i526-cp0a.svg"
                  class="buat-toko-tanggal-svg941"
                />
              </div>
            </div>
          </div>
          <div class="buat-toko-tanggal-i-o-status-bar-black1">
            <div class="buat-toko-tanggal-bg01">
              <img
                alt="NotchI526"
                src="public/external/notchi526-h0ps.svg"
                class="buat-toko-tanggal-notch1"
              />
            </div>
            <div class="buat-toko-tanggal-right-side1">
              <div class="buat-toko-tanggal-battery1">
                <img
                  alt="RectangleI526"
                  src="public/external/rectanglei526-gpsd.svg"
                  class="buat-toko-tanggal-rectangle2"
                />
                <img
                  alt="CombinedShapeI526"
                  src="public/external/combinedshapei526-ebkj.svg"
                  class="buat-toko-tanggal-combined-shape1"
                />
                <img
                  alt="RectangleI526"
                  src="public/external/rectanglei526-kfqan.svg"
                  class="buat-toko-tanggal-rectangle3"
                />
              </div>
              <img
                alt="WifiI526"
                src="public/external/wifii526-8iwq.svg"
                class="buat-toko-tanggal-wifi1"
              />
              <img
                alt="MobileSignalI526"
                src="public/external/mobilesignali526-3btn.svg"
                class="buat-toko-tanggal-mobile-signal1"
              />
            </div>
            <div class="buat-toko-tanggal-left-side1">
              <img
                alt="SVG941I526"
                src="public/external/svg941i526-odhn.svg"
                class="buat-toko-tanggal-svg9411"
              />
            </div>
          </div>
          <img
            alt="SWMiconsoutlinecart25267"
            src="public/external/swmiconsoutlinecart25267-t8v6.svg"
            class="buat-toko-tanggal-s-miconsoutlinecart2"
          />
          <div class="buat-toko-tanggal-i-o-bottom-bar-tabs">
            <div class="buat-toko-tanggal-i-phone-ui">
              <div class="buat-toko-tanggal-home-indicator"></div>
            </div>
            <div class="buat-toko-tanggal-tabs">
              <img
                alt="Rectangle9I526"
                src="public/external/rectangle9i526-pnic-200h.png"
                class="buat-toko-tanggal-rectangle9"
              />
              <img
                alt="Rectangle10I526"
                src="public/external/rectangle10i526-l02o-200h.png"
                class="buat-toko-tanggal-rectangle10"
              />
              <img
                alt="Rectangle11I526"
                src="public/external/rectangle11i526-qjt9-200h.png"
                class="buat-toko-tanggal-rectangle11"
              />
              <img
                alt="Rectangle12I526"
                src="public/external/rectangle12i526-hv8n-200h.png"
                class="buat-toko-tanggal-rectangle12"
              />
              <img
                alt="Rectangle13I526"
                src="public/external/rectangle13i526-9ddc-200h.png"
                class="buat-toko-tanggal-rectangle13"
              />
            </div>
            <img
              alt="TopDividerI526"
              src="public/external/topdivideri526-krw-200h.png"
              class="buat-toko-tanggal-top-divider"
            />
          </div>
          <img
            alt="shape5267"
            src="public/external/shape5267-hnmq.svg"
            class="buat-toko-tanggal-shape"
          />
          <img
            alt="SWMiconsoutlinecart25267"
            src="public/external/swmiconsoutlinecart25267-0tu.svg"
            class="buat-toko-tanggal-s-miconsoutlinecart21"
          />
          <img
            alt="SWMiconsoutlineedit45267"
            src="public/external/swmiconsoutlineedit45267-flbv.svg"
            class="buat-toko-tanggal-s-miconsoutlineedit4"
          />
          <img
            alt="SWMiconsoutlineuser15267"
            src="public/external/swmiconsoutlineuser15267-46if.svg"
            class="buat-toko-tanggal-s-miconsoutlineuser1"
          />
          <img
            alt="SWMiconsoutlinecoin5267"
            src="public/external/swmiconsoutlinecoin5267-r82.svg"
            class="buat-toko-tanggal-s-miconsoutlinecoin"
          />
          <div class="buat-toko-tanggal-post-title-text">
            <span class="buat-toko-tanggal-text UI-16Medium">
              <span class="buat-toko-tanggal-text01">Letak Pasar*</span>
            </span>
            <span class="buat-toko-tanggal-text02 UI-16Medium">
              <span class="buat-toko-tanggal-text03">Lokasi Toko*</span>
            </span>
            <div class="buat-toko-tanggal-s-miconsoutlinechevrondown"></div>
            <span class="buat-toko-tanggal-text04 UI-30Medium">
              <span class="buat-toko-tanggal-text05">Nama Toko*</span>
            </span>
            <span class="buat-toko-tanggal-text06 UI-16Medium">
              <span>
                <span>Deskripsi</span>
                <br />
                <span></span>
              </span>
            </span>
            <span class="buat-toko-tanggal-text11 UI-16Medium">
              <span>
                <span>Jam Buka Tutup</span>
                <br />
                <span></span>
              </span>
            </span>
          </div>
          <span class="buat-toko-tanggal-text16 UI-16Regular">
            <span>
              <span>Dari jam hingga jam</span>
              <br />
              <span></span>
            </span>
          </span>
          <img
            alt="shape5267"
            src="public/external/shape5267-3tz.svg"
            class="buat-toko-tanggal-shape1"
          />
          <div class="buat-toko-tanggal-tambah">
            <div class="buat-toko-tanggal-foto"></div>
          </div>
          <img
            alt="Line835267"
            src="public/external/line835267-9gc5.svg"
            class="buat-toko-tanggal-line83"
          />
          <img
            alt="Line845267"
            src="public/external/line845267-w9kc.svg"
            class="buat-toko-tanggal-line84"
          />
          <img
            alt="Line875267"
            src="public/external/line875267-csmk.svg"
            class="buat-toko-tanggal-line87"
          />
          <img
            alt="Rectangle2415267"
            src="public/external/rectangle2415267-61in.svg"
            class="buat-toko-tanggal-rectangle241"
          />
          <button class="buat-toko-tanggal-button-primary">
            <span class="buat-toko-tanggal-text21 UI-16Semi">
              <span>Verifikasi Toko</span>
            </span>
          </button>
          <img
            alt="ToggleiPhone5267"
            src="public/external/toggleiphone5267-3cuk.svg"
            class="buat-toko-tanggal-togglei-phone"
          />
          <img
            alt="item5267"
            src="public/external/item5267-6qf-700h.png"
            class="buat-toko-tanggal-item"
          />
          <div class="buat-toko-tanggal-bottom-drawer">
            <img
              alt="BG5267"
              src="public/external/bg5267-rxu-600h.png"
              class="buat-toko-tanggal-bg02"
            />
            <div class="buat-toko-tanggal-actions">
              <a
                href="buat-toko-2.html"
                class="buat-toko-tanggal-button-primary1"
              >
                <span class="buat-toko-tanggal-text23 UI-16Semi">
                  <span>Simpan</span>
                </span>
              </a>
            </div>
            <div class="buat-toko-tanggal-header-elements"></div>
            <a
              href="buat-toko-2.html"
              class="buat-toko-tanggal-text25 UI-16Semi"
            >
              <span>Kembali</span>
            </a>
          </div>
          <div class="buat-toko-tanggal-component2">
            <div class="buat-toko-tanggal-group42">
              <div class="buat-toko-tanggal-checkbox-empty">
                <img
                  alt="BGI526"
                  src="public/external/bgi526-j5m6-200h.png"
                  class="buat-toko-tanggal-bg03"
                />
              </div>
              <span class="buat-toko-tanggal-text27 UI-16Medium">
                <span>Senin</span>
              </span>
            </div>
            <div class="buat-toko-tanggal-group43">
              <div class="buat-toko-tanggal-checkbox-empty1">
                <img
                  alt="BGI526"
                  src="public/external/bgi526-nlwg-200w.png"
                  class="buat-toko-tanggal-bg04"
                />
              </div>
              <span class="buat-toko-tanggal-text29 UI-16Medium">
                <span>Selasa</span>
              </span>
            </div>
            <div class="buat-toko-tanggal-group44">
              <div class="buat-toko-tanggal-checkbox-empty2">
                <img
                  alt="BGI526"
                  src="public/external/bgi526-o3kl-200w.png"
                  class="buat-toko-tanggal-bg05"
                />
              </div>
              <span class="buat-toko-tanggal-text31 UI-16Medium">
                <span>Rabu</span>
              </span>
            </div>
            <div class="buat-toko-tanggal-group45">
              <div class="buat-toko-tanggal-checkbox-empty3">
                <img
                  alt="BGI526"
                  src="public/external/bgi526-nfum-200w.png"
                  class="buat-toko-tanggal-bg06"
                />
              </div>
              <span class="buat-toko-tanggal-text33 UI-16Medium">
                <span>Kamis</span>
              </span>
            </div>
            <div class="buat-toko-tanggal-group46">
              <div class="buat-toko-tanggal-checkbox-empty4">
                <img
                  alt="BGI526"
                  src="public/external/bgi526-2oi8-200w.png"
                  class="buat-toko-tanggal-bg07"
                />
              </div>
              <span class="buat-toko-tanggal-text35 UI-16Medium">
                <span>Jumat</span>
              </span>
            </div>
            <div class="buat-toko-tanggal-group47">
              <div class="buat-toko-tanggal-checkbox-empty5">
                <img
                  alt="BGI526"
                  src="public/external/bgi526-gfof-200w.png"
                  class="buat-toko-tanggal-bg08"
                />
              </div>
              <span class="buat-toko-tanggal-text37 UI-16Medium">
                <span>Sabtu</span>
              </span>
            </div>
            <div class="buat-toko-tanggal-group48">
              <div class="buat-toko-tanggal-checkbox-empty6">
                <img
                  alt="BGI526"
                  src="public/external/bgi526-ja9i-200w.png"
                  class="buat-toko-tanggal-bg09"
                />
              </div>
              <span class="buat-toko-tanggal-text39 UI-16Medium">
                <span>Minggu</span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
