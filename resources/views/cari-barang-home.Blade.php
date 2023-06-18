<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cari-Barang-Home - EMarket</title>
    <meta property="og:title" content="Cari-Barang-Home - EMarket" />
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
      .cari-barang-home-container {
    width: 100%;
    display: flex;
    overflow: auto;
    min-height: 100vh;
    align-items: center;
    flex-direction: column;
  }
  
  .cari-barang-home-cari-barang1 {
    width: 388px;
    height: 812px;
    display: flex;
    overflow: hidden;
    position: relative;
    align-items: flex-start;
    flex-shrink: 0;
    background-color: var(--dl-color-default-white);
  }
  
  .cari-barang-home-i-o-status-bar-black {
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
  
  .cari-barang-home-bg {
    top: -2px;
    left: 78px;
    width: 219px;
    height: 30px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .cari-barang-home-notch {
    top: 0px;
    left: 0px;
    width: 219px;
    height: 30px;
    position: absolute;
  }
  
  .cari-barang-home-right-side {
    top: 17.3306884765625px;
    left: 293.6666564941406px;
    width: 66.661376953125px;
    height: 11.336018562316895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .cari-barang-home-battery {
    top: 0.002685546875px;
    left: 42.333343505859375px;
    width: 24.32803726196289px;
    height: 11.333333015441895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .cari-barang-home-rectangle {
    top: 0px;
    left: 0px;
    width: 22px;
    height: 11px;
    opacity: 0.35;
    position: absolute;
  }
  
  .cari-barang-home-combined-shape {
    top: 3.6666667461395264px;
    left: 23px;
    width: 1px;
    height: 4px;
    opacity: 0.40;
    position: absolute;
  }
  
  .cari-barang-home-rectangle1 {
    top: 1.9999998807907104px;
    left: 2px;
    width: 18px;
    height: 7px;
    position: absolute;
  }
  
  .cari-barang-home-wifi {
    top: 0px;
    left: 22.027069091796875px;
    width: 15px;
    height: 11px;
    position: absolute;
  }
  
  .cari-barang-home-mobile-signal {
    top: 0.3359375px;
    left: 0px;
    width: 17px;
    height: 11px;
    position: absolute;
  }
  
  .cari-barang-home-left-side {
    top: 17.16748046875px;
    left: 33.453514099121094px;
    width: 28.42616844177246px;
    height: 11.0888671875px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .cari-barang-home-svg941 {
    top: 0px;
    left: 0px;
    width: 28px;
    height: 11px;
    position: absolute;
  }
  
  .cari-barang-home-page-header {
    top: 60px;
    left: 16px;
    width: 343px;
    height: 36px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .cari-barang-home-text {
    top: 7px;
    left: 8px;
    color: var(--dl-color-green-primary);
    height: auto;
    position: absolute;
    text-align: right;
    line-height: normal;
    text-decoration: none;
  }
  
  .cari-barang-home-text01 {
    left: 102px;
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: center;
    line-height: normal;
  }
  
  .cari-barang-home-navlink {
    display: contents;
  }
  
  .cari-barang-home-input-search {
    top: 128px;
    left: 16px;
    width: 343px;
    height: 50px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
    text-decoration: none;
  }
  
  .cari-barang-home-bg1 {
    top: 0px;
    left: 0px;
    width: 343px;
    height: 50px;
    position: absolute;
  }
  
  .cari-barang-home-text03 {
    top: 16px;
    left: 16px;
    color: var(--dl-color-gray-03);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-section-hot-deals {
    top: 210px;
    left: 16px;
    width: 488px;
    height: 510px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .cari-barang-home-content-market-block {
    top: 45px;
    left: 0px;
    width: 110px;
    height: 177px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .cari-barang-home-rectangle30 {
    top: 0px;
    left: 0px;
    width: 110px;
    height: 110px;
    position: absolute;
    border-radius: 8px;
  }
  
  .cari-barang-home-text05 {
    top: 118px;
    color: var(--dl-color-default-black);
    width: 110px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-text07 {
    top: 160px;
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-text09 {
    top: 222px;
    color: var(--dl-color-default-black);
    width: 110px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-text11 {
    top: 476px;
    color: var(--dl-color-default-black);
    width: 110px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-text13 {
    top: 476px;
    left: 126px;
    color: var(--dl-color-default-black);
    width: 110px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-text15 {
    top: 476px;
    left: 251px;
    color: var(--dl-color-default-black);
    width: 110px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-content-market-block1 {
    top: 45px;
    left: 126px;
    width: 110px;
    height: 177px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .cari-barang-home-rectangle301 {
    top: 0px;
    left: 0px;
    width: 110px;
    height: 110px;
    position: absolute;
    border-radius: 8px;
  }
  
  .cari-barang-home-text17 {
    top: 118px;
    color: var(--dl-color-default-black);
    width: 110px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-text19 {
    top: 160px;
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-text21 {
    top: 222px;
    left: 126px;
    color: var(--dl-color-default-black);
    width: 110px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-text23 {
    top: 222px;
    left: 252px;
    color: var(--dl-color-default-black);
    width: 110px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-navlink01 {
    display: contents;
  }
  
  .cari-barang-home-content-market-block2 {
    top: 45px;
    left: 252px;
    width: 110px;
    height: 177px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
    text-decoration: none;
  }
  
  .cari-barang-home-rectangle302 {
    top: 0px;
    left: 0px;
    width: 110px;
    height: 110px;
    position: absolute;
    border-radius: 8px;
  }
  
  .cari-barang-home-text25 {
    top: 118px;
    color: var(--dl-color-default-black);
    width: 110px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-text27 {
    top: 160px;
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-content-market-block3 {
    top: 45px;
    left: 378px;
    width: 110px;
    height: 177px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .cari-barang-home-rectangle303 {
    top: 0px;
    left: 0px;
    width: 110px;
    height: 110px;
    position: absolute;
    border-radius: 8px;
  }
  
  .cari-barang-home-text29 {
    top: 118px;
    color: var(--dl-color-default-black);
    width: 110px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-text34 {
    top: 160px;
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-text36 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-section-trending {
    top: 464px;
    left: 16px;
    width: 488px;
    height: 222px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .cari-barang-home-content-market-block4 {
    top: 45px;
    left: 0px;
    width: 110px;
    height: 177px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .cari-barang-home-rectangle304 {
    top: 0px;
    left: 0px;
    width: 110px;
    height: 110px;
    position: absolute;
    border-radius: 8px;
  }
  
  .cari-barang-home-text38 {
    top: 118px;
    color: var(--dl-color-default-black);
    width: 110px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-text40 {
    top: 160px;
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-content-market-block5 {
    top: 45px;
    left: 126px;
    width: 110px;
    height: 177px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .cari-barang-home-rectangle305 {
    top: 0px;
    left: 0px;
    width: 110px;
    height: 110px;
    position: absolute;
    border-radius: 8px;
  }
  
  .cari-barang-home-text42 {
    top: 118px;
    color: var(--dl-color-default-black);
    width: 110px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-text44 {
    top: 160px;
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-content-market-block6 {
    top: 45px;
    left: 252px;
    width: 110px;
    height: 177px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .cari-barang-home-rectangle306 {
    top: 0px;
    left: 0px;
    width: 110px;
    height: 110px;
    position: absolute;
    border-radius: 8px;
  }
  
  .cari-barang-home-text46 {
    top: 118px;
    color: var(--dl-color-default-black);
    width: 110px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-text48 {
    top: 160px;
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-content-market-block7 {
    top: 45px;
    left: 378px;
    width: 110px;
    height: 177px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .cari-barang-home-rectangle307 {
    top: 0px;
    left: 0px;
    width: 110px;
    height: 110px;
    position: absolute;
    border-radius: 8px;
  }
  
  .cari-barang-home-text50 {
    top: 118px;
    color: var(--dl-color-default-black);
    width: 110px;
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-text55 {
    top: 160px;
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-text57 {
    color: var(--dl-color-default-black);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  
  .cari-barang-home-i-o-bottom-bar-tabs {
    top: 729px;
    left: 0px;
    width: 375px;
    height: 83.5px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .cari-barang-home-i-phone-ui {
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
  
  .cari-barang-home-home-indicator {
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
  
  .cari-barang-home-tabs {
    top: 15px;
    left: 26px;
    width: 320px;
    height: 32px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .cari-barang-home-rectangle9 {
    top: 0px;
    left: 0px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  
  .cari-barang-home-navlink02 {
    display: contents;
  }
  
  .cari-barang-home-rectangle10 {
    top: 0px;
    left: 72px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  
  .cari-barang-home-rectangle11 {
    top: 0px;
    left: 144px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  
  .cari-barang-home-rectangle12 {
    top: 0px;
    left: 216px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  
  .cari-barang-home-rectangle13 {
    top: 0px;
    left: 288px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  
  .cari-barang-home-top-divider {
    top: 0.5px;
    left: 0px;
    width: 375px;
    height: 0px;
    position: absolute;
  }
  
  .cari-barang-home-i-o-bottom-bar-tabs1 {
    top: 729px;
    left: 0px;
    width: 375px;
    height: 83.5px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  
  .cari-barang-home-i-phone-ui1 {
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
  
  .cari-barang-home-home-indicator1 {
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
  
  .cari-barang-home-tabs1 {
    top: 15px;
    left: 26px;
    width: 320px;
    height: 32px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  
  .cari-barang-home-navlink03 {
    display: contents;
  }
  
  .cari-barang-home-rectangle91 {
    top: 0px;
    left: 0px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  
  .cari-barang-home-navlink04 {
    display: contents;
  }
  
  .cari-barang-home-rectangle101 {
    top: 0px;
    left: 72px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  
  .cari-barang-home-navlink05 {
    display: contents;
  }
  
  .cari-barang-home-rectangle111 {
    top: 0px;
    left: 144px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  
  .cari-barang-home-navlink06 {
    display: contents;
  }
  
  .cari-barang-home-rectangle121 {
    top: 0px;
    left: 216px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  
  .cari-barang-home-navlink07 {
    display: contents;
  }
  
  .cari-barang-home-rectangle131 {
    top: 0px;
    left: 288px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
    text-decoration: none;
  }
  
  .cari-barang-home-top-divider1 {
    top: 0.5px;
    left: 0px;
    width: 375px;
    height: 0px;
    position: absolute;
  }
  
  .cari-barang-home-telurayam21 {
    top: 255px;
    left: 16px;
    width: 110px;
    height: 110px;
    position: absolute;
  }
  
  .cari-barang-home-pedagangdagingdemo1 {
    top: 255px;
    left: 142px;
    width: 110px;
    height: 110px;
    position: absolute;
  }
  
  .cari-barang-home-s-miconsoutlinecart2 {
    top: 748px;
    left: 30px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  
  .cari-barang-home-navlink08 {
    display: contents;
  }
  
  .cari-barang-home-s-miconsoutlinelocation1 {
    top: 748px;
    left: 102px;
    width: 24px;
    height: 24px;
    position: absolute;
    text-decoration: none;
  }
  
  .cari-barang-home-navlink09 {
    display: contents;
  }
  
  .cari-barang-home-s-miconsoutlineedit4 {
    top: 748px;
    left: 246px;
    width: 24px;
    height: 24px;
    position: absolute;
    text-decoration: none;
  }
  
  .cari-barang-home-navlink10 {
    display: contents;
  }
  
  .cari-barang-home-s-miconsoutlineuser1 {
    top: 748px;
    left: 174px;
    width: 24px;
    height: 24px;
    position: absolute;
    text-decoration: none;
  }
  
  .cari-barang-home-zayidan7095163720211 {
    top: 509px;
    left: 16px;
    width: 110px;
    height: 110px;
    position: absolute;
  }
  
  .cari-barang-home-image0a68dfa8c9d31bf4a85bdf75533ef026jpg720x720q80 {
    top: 509px;
    left: 142px;
    width: 110px;
    height: 110px;
    position: absolute;
  }
  
  .cari-barang-home-image35b4bb500ea14a399606fa6b183211b31 {
    top: 509px;
    left: 268px;
    width: 110px;
    height: 110px;
    position: absolute;
  }
  
  .cari-barang-home-ilustrasicaberawit11 {
    top: 255px;
    left: 268px;
    width: 107px;
    height: 110px;
    position: absolute;
  }
  
  .cari-barang-home-telurayam22 {
    top: 255px;
    left: 16px;
    width: 110px;
    height: 110px;
    position: absolute;
  }
  
  .cari-barang-home-pedagangdagingdemo2 {
    top: 255px;
    left: 142px;
    width: 110px;
    height: 110px;
    position: absolute;
  }
  
  .cari-barang-home-ilustrasicaberawit12 {
    top: 255px;
    left: 268px;
    width: 107px;
    height: 110px;
    position: absolute;
  }
  
  .cari-barang-home-c222fd1e82724624b4e212029ad37c231 {
    top: 509px;
    left: 16px;
    width: 110px;
    height: 110px;
    position: absolute;
  }
  
  .cari-barang-home-image0856826001570024053800px-kepokbanana-indonesia1 {
    top: 509px;
    left: 142px;
    width: 117px;
    height: 110px;
    position: absolute;
  }
  
  .cari-barang-home-navlink11 {
    display: contents;
  }
  
  .cari-barang-home-s-miconsoutlinecoin {
    top: 748px;
    left: 318px;
    width: 24px;
    height: 24px;
    position: absolute;
    text-decoration: none;
  }
  
  .cari-barang-home-image220127678p1 {
    top: 509px;
    left: 268px;
    width: 109px;
    height: 112px;
    position: absolute;
  }
  </style>
  </head>
  <body>
    <div>
      <!-- <link href="./cari-barang-home.css" rel="stylesheet" /> -->

      <div class="cari-barang-home-container">
        <div class="cari-barang-home-cari-barang1">
          <div class="cari-barang-home-i-o-status-bar-black">
            <div class="cari-barang-home-bg">
              <img
                alt="NotchI151"
                src="public/external/notchi151-szwq.svg"
                class="cari-barang-home-notch"
              />
            </div>
            <div class="cari-barang-home-right-side">
              <div class="cari-barang-home-battery">
                <img
                  alt="RectangleI151"
                  src="public/external/rectanglei151-5ikm.svg"
                  class="cari-barang-home-rectangle"
                />
                <img
                  alt="CombinedShapeI151"
                  src="public/external/combinedshapei151-6uvn.svg"
                  class="cari-barang-home-combined-shape"
                />
                <img
                  alt="RectangleI151"
                  src="public/external/rectanglei151-u0gq.svg"
                  class="cari-barang-home-rectangle1"
                />
              </div>
              <img
                alt="WifiI151"
                src="public/external/wifii151-upe5.svg"
                class="cari-barang-home-wifi"
              />
              <img
                alt="MobileSignalI151"
                src="public/external/mobilesignali151-en.svg"
                class="cari-barang-home-mobile-signal"
              />
            </div>
            <div class="cari-barang-home-left-side">
              <img
                alt="SVG941I151"
                src="public/external/svg941i151-pi7.svg"
                class="cari-barang-home-svg941"
              />
            </div>
          </div>
          <div class="cari-barang-home-page-header">
            <a href="sign-in.html" class="cari-barang-home-text UI-16Medium">
              Login
            </a>
            <span class="cari-barang-home-text01 UI-30Semi">
              <span>Cari Barang</span>
            </span>
          </div>
          <a href="{{ url('/cariBarang') }}" class="cari-barang-home-navlink">
            <div class="cari-barang-home-input-search">
              <div>
                <style>
                  .search-input {
                    width: 150%;
                    border: 1px solid #121212;
                    border-radius: 10px;
                    padding: 5px;
                    background-color: #f2f2f2;
                  }
                </style>
                
                <form action="/cari-barang.html" method="get">
                  <input type="text" name="query" placeholder="Cari Barang" class="search-input">
                </form>
                </div>
            </div>
          </a>
          <div class="cari-barang-home-section-hot-deals">
            <div class="cari-barang-home-content-market-block">
              <img
                alt="Rectangle30I151"
                src="public/external/rectangle30i151-ck1-200h.png"
                class="cari-barang-home-rectangle30"
              />
              <span class="cari-barang-home-text05 UI-14Regular">
                <span>Telur 1 Kg</span>
              </span>
              <span class="cari-barang-home-text07 UI-14Semi">
                <span>Rp17.500</span>
              </span>
            </div>
            <span class="cari-barang-home-text09 UI-14Regular">
              <span>Toko Ladju</span>
            </span>
            <span class="cari-barang-home-text11 UI-14Regular">
              <span>Toko Sumber Untung</span>
            </span>
            <span class="cari-barang-home-text13 UI-14Regular">
              <span>Toko Rejeki</span>
            </span>
            <span class="cari-barang-home-text15 UI-14Regular">
              <span>Toko Barokah</span>
            </span>
            <div class="cari-barang-home-content-market-block1">
              <img
                alt="Rectangle30I151"
                src="public/external/rectangle30i151-flp7-200h.png"
                class="cari-barang-home-rectangle301"
              />
              <span class="cari-barang-home-text17 UI-14Regular">
                <span>Daging Sapi 1 Kg</span>
              </span>
              <span class="cari-barang-home-text19 UI-14Semi">
                <span>Rp95.000</span>
              </span>
            </div>
            <span class="cari-barang-home-text21 UI-14Regular">
              <span>Toko Dor Afiat</span>
            </span>
            <span class="cari-barang-home-text23 UI-14Regular">
              <span>Toko Assalam</span>
            </span>
            <a href="informasi-barang.html" class="cari-barang-home-navlink01">
              <div class="cari-barang-home-content-market-block2">
                <img
                  alt="Rectangle30I151"
                  src="public/external/rectangle30i151-272s-200w.png"
                  class="cari-barang-home-rectangle302"
                />
                <span class="cari-barang-home-text25 UI-14Regular">
                  <span>Cabai Rawit 250 gr</span>
                </span>
                <span class="cari-barang-home-text27 UI-14Semi">
                  <span>Rp16.000</span>
                </span>
              </div>
            </a>
            <div class="cari-barang-home-content-market-block3">
              <img
                alt="Rectangle30I151"
                src="public/external/rectangle30i151-dfj-200h.png"
                class="cari-barang-home-rectangle303"
              />
              <span class="cari-barang-home-text29 UI-14Regular">
                <span>
                  <span>Item #1 Name</span>
                  <br />
                  <span>Goes Here</span>
                </span>
              </span>
              <span class="cari-barang-home-text34 UI-14Semi">
                <span>$19.99</span>
              </span>
            </div>
            <span class="cari-barang-home-text36 UI-30Medium">
              <span>Tersedia di Pasar Keputih</span>
            </span>
          </div>
          <div class="cari-barang-home-section-trending">
            <div class="cari-barang-home-content-market-block4">
              <img
                alt="Rectangle30I151"
                src="public/external/rectangle30i151-c9o8-200h.png"
                class="cari-barang-home-rectangle304"
              />
              <span class="cari-barang-home-text38 UI-14Regular">
                <span>Apel Fuji 500 gr</span>
              </span>
              <span class="cari-barang-home-text40 UI-14Semi">
                <span>Rp18.000</span>
              </span>
            </div>
            <div class="cari-barang-home-content-market-block5">
              <img
                alt="Rectangle30I151"
                src="public/external/rectangle30i151-a2dz-200h.png"
                class="cari-barang-home-rectangle305"
              />
              <span class="cari-barang-home-text42 UI-14Regular">
                <span>Pisang Kepok 1 Sisir</span>
              </span>
              <span class="cari-barang-home-text44 UI-14Semi">
                <span>Rp25.000</span>
              </span>
            </div>
            <div class="cari-barang-home-content-market-block6">
              <img
                alt="Rectangle30I151"
                src="public/external/rectangle30i151-f9v4-200w.png"
                class="cari-barang-home-rectangle306"
              />
              <span class="cari-barang-home-text46 UI-14Regular">
                <span>Jeruk Lemon 500 gr</span>
              </span>
              <span class="cari-barang-home-text48 UI-14Semi">
                <span>Rp19.800</span>
              </span>
            </div>
            <div class="cari-barang-home-content-market-block7">
              <img
                alt="Rectangle30I151"
                src="public/external/rectangle30i151-chrl-200h.png"
                class="cari-barang-home-rectangle307"
              />
              <span class="cari-barang-home-text50 UI-14Regular">
                <span>
                  <span>Item #1 Name</span>
                  <br />
                  <span>Goes Here</span>
                </span>
              </span>
              <span class="cari-barang-home-text55 UI-14Semi">
                <span>$19.99</span>
              </span>
            </div>
            <span class="cari-barang-home-text57 UI-30Medium">
              <span>Paling Di Cari Hari Ini</span>
            </span>
          </div>
          <div class="cari-barang-home-i-o-bottom-bar-tabs">
            <div class="cari-barang-home-i-phone-ui">
              <div class="cari-barang-home-home-indicator"></div>
            </div>
            <div class="cari-barang-home-tabs">
              <img
                alt="Rectangle9I151"
                src="public/external/rectangle9i151-1nml-200h.png"
                class="cari-barang-home-rectangle9"
              />
              <a href="{{ url('/cariTokoHome') }}" class="cari-barang-home-navlink02">
                <img
                  alt="Rectangle10I151"
                  src="public/external/rectangle10i151-gj97-200h.png"
                  class="cari-barang-home-rectangle10"
                />
              </a>
              <img
                alt="Rectangle11I151"
                src="public/external/rectangle11i151-0x9b-200h.png"
                class="cari-barang-home-rectangle11"
              />
              <img
                alt="Rectangle12I151"
                src="public/external/rectangle12i151-tyrn-200h.png"
                class="cari-barang-home-rectangle12"
              />
              <img
                alt="Rectangle13I151"
                src="public/external/rectangle13i151-o1wj-200h.png"
                class="cari-barang-home-rectangle13"
              />
            </div>
            <img
              alt="TopDividerI151"
              src="public/external/topdivideri151-zdu3-200h.png"
              class="cari-barang-home-top-divider"
            />
          </div>
          <div class="cari-barang-home-i-o-bottom-bar-tabs1">
            <div class="cari-barang-home-i-phone-ui1">
              <div class="cari-barang-home-home-indicator1"></div>
            </div>
            <div class="cari-barang-home-tabs1">
              <a
                href="{{ url('/cariBarangHome') }}"
                class="cari-barang-home-navlink03"
              >
                <img
                  alt="Rectangle9I449"
                  src="public/external/rectangle9i449-qg9-200h.png"
                  class="cari-barang-home-rectangle91"
                />
              </a>
              <a href="{{ url('/cariTokoHome') }}" class="cari-barang-home-navlink04">
                <img
                  alt="Rectangle10I449"
                  src="public/external/rectangle10i449-8xyjj-200h.png"
                  class="cari-barang-home-rectangle101"
                />
              </a>
              <a href="{{ url('/pengaturanAkun') }}" class="cari-barang-home-navlink05">
                <img
                  alt="Rectangle11I449"
                  src="public/external/rectangle11i449-hnce-200h.png"
                  class="cari-barang-home-rectangle111"
                />
              </a>
              <a
                href="{{ url('/etalaseTokoHome') }}"
                class="cari-barang-home-navlink06"
              >
                <img
                  alt="Rectangle12I449"
                  src="public/external/rectangle12i449-r25-200h.png"
                  class="cari-barang-home-rectangle121"
                />
              </a>
              <a
                href="{{ url('/hargaBarangHome') }}"
                class="cari-barang-home-navlink07"
              >
                <img
                  alt="Rectangle13I449"
                  src="public/external/rectangle13i449-jcj3-200h.png"
                  class="cari-barang-home-rectangle131"
                />
              </a>
            </div>
            <img
              alt="TopDividerI449"
              src="public/external/topdivideri449-7l0o-200h.png"
              class="cari-barang-home-top-divider1"
            />
          </div>
          <img
            alt="telurayam212211"
            src="public/external/telurayam212211-zc2t-200h.png"
            class="cari-barang-home-telurayam21"
          />
          <img
            alt="pedagangdagingdemo12211"
            src="public/external/pedagangdagingdemo12211-xmg-200h.png"
            class="cari-barang-home-pedagangdagingdemo1"
          />
          <img
            alt="SWMiconsoutlinecart22211"
            src="public/external/swmiconsoutlinecart22211-p4qp.svg"
            class="cari-barang-home-s-miconsoutlinecart2"
          />
          <a href="{{ url('/cariTokoHome') }}" class="cari-barang-home-navlink08">
            <img
              alt="SWMiconsoutlinelocation12211"
              src="public/external/swmiconsoutlinelocation12211-9arvl.svg"
              class="cari-barang-home-s-miconsoutlinelocation1"
            />
          </a>
          <a href="{{ url('/etalaseTokoHome') }}" class="cari-barang-home-navlink09">
            <img
              alt="SWMiconsoutlineedit42211"
              src="public/external/swmiconsoutlineedit42211-vyde.svg"
              class="cari-barang-home-s-miconsoutlineedit4"
            />
          </a>
          <a href="{{ url('/pengaturanAkun') }}" class="cari-barang-home-navlink10">
            <img
              alt="SWMiconsoutlineuser12211"
              src="public/external/swmiconsoutlineuser12211-dvyd.svg"
              class="cari-barang-home-s-miconsoutlineuser1"
            />
          </a>
          <img
            alt="zayidan70951637202112211"
            src="public/external/zayidan70951637202112211-zg9-200h.png"
            class="cari-barang-home-zayidan7095163720211"
          />
          <img
            alt="IMAGE0a68dfa8c9d31bf4a85bdf75533ef026jpg720x720q802211"
            src="public/external/image0a68dfa8c9d31bf4a85bdf75533ef026jpg720x720q802211-ros-200h.png"
            class="cari-barang-home-image0a68dfa8c9d31bf4a85bdf75533ef026jpg720x720q80"
          />
          <img
            alt="IMAGE35b4bb500ea14a399606fa6b183211b312211"
            src="public/external/image35b4bb500ea14a399606fa6b183211b312211-yhma-200w.png"
            class="cari-barang-home-image35b4bb500ea14a399606fa6b183211b31"
          />
          <img
            alt="ilustrasicaberawit112211"
            src="public/external/ilustrasicaberawit112211-yfqo-200w.png"
            class="cari-barang-home-ilustrasicaberawit11"
          />
          <img
            alt="telurayam224492"
            src="public/external/telurayam224492-zvpa-200h.png"
            class="cari-barang-home-telurayam22"
          />
          <img
            alt="pedagangdagingdemo24492"
            src="public/external/pedagangdagingdemo24492-8v5c-200h.png"
            class="cari-barang-home-pedagangdagingdemo2"
          />
          <img
            alt="ilustrasicaberawit124492"
            src="public/external/ilustrasicaberawit124492-w36p-200w.png"
            class="cari-barang-home-ilustrasicaberawit12"
          />
          <img
            alt="c222fd1e82724624b4e212029ad37c2314542"
            src="public/external/c222fd1e82724624b4e212029ad37c2314542-w1rs-200h.png"
            class="cari-barang-home-c222fd1e82724624b4e212029ad37c231"
          />
          <img
            alt="IMAGE0856826001570024053800pxKepokbananaIndonesia14542"
            src="public/external/image0856826001570024053800pxkepokbananaindonesia14542-iuhl-200h.png"
            class="cari-barang-home-image0856826001570024053800px-kepokbanana-indonesia1"
          />
          <a href="{{ url('/hargaBarangHome') }}" class="cari-barang-home-navlink11">
            <img
              alt="SWMiconsoutlinecoin4542"
              src="public/external/swmiconsoutlinecoin4542-itpr.svg"
              class="cari-barang-home-s-miconsoutlinecoin"
            />
          </a>
          <img
            alt="IMAGE220127678p14542"
            src="public/external/image220127678p14542-qq7s-200w.png"
            class="cari-barang-home-image220127678p1"
          />
        </div>
      </div>
    </div>
  </body>
</html>
