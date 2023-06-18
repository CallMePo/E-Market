<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cek-Sign-Out - EMarket</title>
    <meta property="og:title" content="Cek-Sign-Out - EMarket" />
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
      .cek-sign-out-container {
    width: 100%;
    display: flex;
    overflow: auto;
    min-height: 100vh;
    align-items: center;
    flex-direction: column;
  }
  .cek-sign-out-ceksignout {
    width: 373px;
    height: 812px;
    display: flex;
    overflow: hidden;
    position: relative;
    align-items: flex-start;
    flex-shrink: 0;
    background-color: var(--dl-color-default-white);
  }
  .cek-sign-out-component1 {
    top: -499px;
    left: -1px;
    width: 376px;
    height: 1314px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-head {
    top: 0px;
    left: 0px;
    width: 376px;
    height: 338px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-base {
    top: 0px;
    left: 0px;
    width: 376px;
    height: 199px;
    position: absolute;
  }
  .cek-sign-out-foto {
    top: 106px;
    left: 109px;
    width: 158px;
    height: 158px;
    position: absolute;
    border-color: rgba(255, 255, 255, 1);
    border-style: solid;
    border-width: 4px;
  }
  .cek-sign-out-text {
    top: 270px;
    left: 76px;
    color: rgba(0, 0, 0, 1);
    height: auto;
    position: absolute;
    text-align: center;
    line-height: normal;
  }
  .cek-sign-out-text02 {
    top: 53px;
    left: 86px;
    color: var(--dl-color-default-white);
    height: auto;
    position: absolute;
    text-align: center;
    line-height: normal;
  }
  .cek-sign-out-profile-basic {
    top: 363px;
    left: 17px;
    width: 343px;
    height: 218px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-email {
    top: 0px;
    left: 0px;
    width: 343px;
    height: 40px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-segmented-control-structure {
    top: 0px;
    left: 0px;
    width: 343px;
    height: 40px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-text04 {
    top: 11px;
    left: 25px;
    color: var(--dl-color-gray-04);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cek-sign-out-text06 {
    top: -25px;
    left: 22px;
    color: rgba(0, 0, 0, 1);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cek-sign-out-text07 {
    color: rgba(0, 0, 0, 1);
  }
  .cek-sign-out-password {
    top: 89px;
    left: 0px;
    width: 343px;
    height: 40px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-segmented-control-structure1 {
    top: 0px;
    left: 0px;
    width: 343px;
    height: 40px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-text08 {
    top: 11px;
    left: 25px;
    color: var(--dl-color-gray-04);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cek-sign-out-text10 {
    top: -25px;
    left: 22px;
    color: rgba(0, 0, 0, 1);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cek-sign-out-text11 {
    color: rgba(0, 0, 0, 1);
  }
  .cek-sign-out-nomor-hp {
    top: 178px;
    left: 0px;
    width: 343px;
    height: 40px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-segmented-control-structure2 {
    top: 0px;
    left: 0px;
    width: 343px;
    height: 40px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-bg {
    top: 0px;
    left: 0px;
    width: 343px;
    height: 40px;
    position: absolute;
  }
  .cek-sign-out-text12 {
    top: 11px;
    left: 25px;
    color: var(--dl-color-gray-04);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cek-sign-out-text14 {
    top: -25px;
    left: 22px;
    color: rgba(0, 0, 0, 1);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cek-sign-out-text15 {
    color: rgba(0, 0, 0, 1);
  }
  .cek-sign-out-kontak {
    top: 719px;
    left: 17px;
    width: 343px;
    height: 218px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-wa {
    top: 0px;
    left: 0px;
    width: 343px;
    height: 40px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-segmented-control-structure3 {
    top: 0px;
    left: 0px;
    width: 343px;
    height: 40px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-bg1 {
    top: 0px;
    left: 0px;
    width: 343px;
    height: 40px;
    position: absolute;
  }
  .cek-sign-out-group16 {
    top: 0px;
    left: 19px;
    width: 40px;
    height: 40px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cek-sign-out-vector {
    top: 11.715932846069336px;
    left: 0px;
    width: 31px;
    height: 31px;
    position: absolute;
  }
  .cek-sign-out-vector1 {
    top: 10.89587116241455px;
    left: 11.728014945983887px;
    width: 18px;
    height: 18px;
    position: absolute;
  }
  .cek-sign-out-vector2 {
    top: 15.598332405090332px;
    left: 16.447065353393555px;
    width: 9px;
    height: 8px;
    position: absolute;
  }
  .cek-sign-out-text16 {
    top: 11px;
    left: 66px;
    color: var(--dl-color-gray-04);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cek-sign-out-text18 {
    top: -25px;
    left: 22px;
    color: rgba(0, 0, 0, 1);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cek-sign-out-text20 {
    top: -68px;
    left: 22px;
    color: rgba(0, 0, 0, 1);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cek-sign-out-edit {
    top: 962px;
    left: 163px;
    width: 52px;
    height: 52px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-rectangle10 {
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
  .cek-sign-out-shape {
    top: 13px;
    left: 14px;
    width: 25px;
    height: 25px;
    position: absolute;
  }
  .cek-sign-out-togglei-phone {
    top: 1084px;
    left: 276px;
    width: 51px;
    height: 31px;
    position: absolute;
  }
  .cek-sign-out-text22 {
    top: 1090px;
    left: 50px;
    color: rgba(0, 0, 0, 1);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cek-sign-out-keluarakun {
    top: 1144px;
    left: 119px;
    width: 140px;
    height: 50px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-bg2 {
    top: 0px;
    left: 0px;
    width: 140px;
    height: 50px;
    position: absolute;
  }
  .cek-sign-out-text24 {
    top: 16px;
    left: 24px;
    color: var(--dl-color-default-merahwarning);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cek-sign-out-simpan {
    top: 1264px;
    left: 119px;
    width: 140px;
    height: 50px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-bg3 {
    top: 0px;
    left: 0px;
    width: 140px;
    height: 50px;
    position: absolute;
  }
  .cek-sign-out-text26 {
    top: 16px;
    left: 42px;
    color: var(--dl-color-gray-03);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cek-sign-out-vector3 {
    top: 615.5px;
    left: 50px;
    width: 277px;
    height: 613px;
    position: absolute;
  }
  .cek-sign-out-i-o-status-bar-white {
    top: 0px;
    left: 0px;
    width: 375px;
    height: 44px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-whitebox {
    top: 0px;
    left: 0px;
    width: 375px;
    height: 122px;
    display: flex;
    overflow: hidden;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
    background-color: rgba(255, 255, 255, 1);
  }
  .cek-sign-out-bg4 {
    top: -2px;
    left: 78px;
    width: 219px;
    height: 30px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cek-sign-out-notch {
    top: 0px;
    left: 0px;
    width: 219px;
    height: 30px;
    position: absolute;
  }
  .cek-sign-out-right-side {
    top: 17.3306884765625px;
    left: 293.6666564941406px;
    width: 66.661376953125px;
    height: 11.336018562316895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cek-sign-out-battery {
    top: 0.002685546875px;
    left: 42.333343505859375px;
    width: 24.32803726196289px;
    height: 11.333333015441895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cek-sign-out-rectangle {
    top: 0px;
    left: 0px;
    width: 22px;
    height: 11px;
    opacity: 0.35;
    position: absolute;
  }
  .cek-sign-out-combined-shape {
    top: 3.666666030883789px;
    left: 23px;
    width: 1px;
    height: 4px;
    opacity: 0.40;
    position: absolute;
  }
  .cek-sign-out-rectangle1 {
    top: 2px;
    left: 2px;
    width: 18px;
    height: 7px;
    position: absolute;
  }
  .cek-sign-out-wifi {
    top: -4.76837158203125e-7px;
    left: 22.027069091796875px;
    width: 15px;
    height: 11px;
    position: absolute;
  }
  .cek-sign-out-mobile-signal {
    top: 0.3359375px;
    left: 0px;
    width: 17px;
    height: 11px;
    position: absolute;
  }
  .cek-sign-out-left-side {
    top: 17.16748046875px;
    left: 33.453514099121094px;
    width: 28.42616844177246px;
    height: 11.0888671875px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cek-sign-out-svg941 {
    top: 0px;
    left: 0px;
    width: 28px;
    height: 11px;
    position: absolute;
  }
  .cek-sign-out-i-o-status-bar-black {
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
  .cek-sign-out-bg5 {
    top: -2px;
    left: 78px;
    width: 219px;
    height: 30px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cek-sign-out-notch1 {
    top: 0px;
    left: 0px;
    width: 219px;
    height: 30px;
    position: absolute;
  }
  .cek-sign-out-right-side1 {
    top: 17.3306884765625px;
    left: 293.6666564941406px;
    width: 66.661376953125px;
    height: 11.336018562316895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cek-sign-out-battery1 {
    top: 0.002685546875px;
    left: 42.333343505859375px;
    width: 24.32803726196289px;
    height: 11.333333015441895px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cek-sign-out-rectangle2 {
    top: 0px;
    left: 0px;
    width: 22px;
    height: 11px;
    opacity: 0.35;
    position: absolute;
  }
  .cek-sign-out-combined-shape1 {
    top: 3.6666667461395264px;
    left: 23px;
    width: 1px;
    height: 4px;
    opacity: 0.40;
    position: absolute;
  }
  .cek-sign-out-rectangle3 {
    top: 1.9999998807907104px;
    left: 2px;
    width: 18px;
    height: 7px;
    position: absolute;
  }
  .cek-sign-out-wifi1 {
    top: 0px;
    left: 22.027069091796875px;
    width: 15px;
    height: 11px;
    position: absolute;
  }
  .cek-sign-out-mobile-signal1 {
    top: 0.3359375px;
    left: 0px;
    width: 17px;
    height: 11px;
    position: absolute;
  }
  .cek-sign-out-left-side1 {
    top: 17.16748046875px;
    left: 33.453514099121094px;
    width: 28.42616844177246px;
    height: 11.0888671875px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cek-sign-out-svg9411 {
    top: 0px;
    left: 0px;
    width: 28px;
    height: 11px;
    position: absolute;
  }
  .cek-sign-out-divider {
    top: 106px;
    left: 25px;
    width: 326px;
    height: 1px;
    position: absolute;
  }
  .cek-sign-out-text28 {
    top: 71px;
    left: 38px;
    color: var(--dl-color-gray-04);
    height: auto;
    position: absolute;
    text-align: left;
    line-height: normal;
  }
  .cek-sign-out-i-o-bottom-bar-tabs {
    top: 729px;
    left: 0px;
    width: 375px;
    height: 83.5px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-i-phone-ui {
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
  .cek-sign-out-home-indicator {
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
  .cek-sign-out-tabs {
    top: 15px;
    left: 26px;
    width: 320px;
    height: 32px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cek-sign-out-rectangle9 {
    top: 0px;
    left: 0px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  .cek-sign-out-rectangle101 {
    top: 0px;
    left: 72px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  .cek-sign-out-rectangle11 {
    top: 0px;
    left: 144px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  .cek-sign-out-rectangle12 {
    top: 0px;
    left: 216px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  .cek-sign-out-rectangle13 {
    top: 0px;
    left: 288px;
    width: 32px;
    height: 32px;
    position: absolute;
    border-radius: 100px;
  }
  .cek-sign-out-logo {
    top: 18px;
    left: 34.19921875px;
    width: 307.80078125px;
    height: 24px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cek-sign-out-shape1 {
    top: 3px;
    left: 0px;
    width: 16px;
    height: 17px;
    position: absolute;
  }
  .cek-sign-out-shape2 {
    top: 3px;
    left: 71.80078125px;
    width: 16px;
    height: 18px;
    position: absolute;
  }
  .cek-sign-out-s-miconsoutlineedit4 {
    top: 0px;
    left: 211.80078125px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  .cek-sign-out-s-miconsoutlineuser1 {
    top: 0px;
    left: 139.80078125px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  .cek-sign-out-s-miconsoutlinecoin {
    top: 0px;
    left: 283.80078125px;
    width: 24px;
    height: 24px;
    position: absolute;
  }
  .cek-sign-out-top-divider {
    top: 0.5px;
    left: 0px;
    width: 375px;
    height: 0px;
    position: absolute;
  }
  .cek-sign-out-item {
    top: 0px;
    left: -1px;
    width: 376px;
    height: 616px;
    position: absolute;
  }
  .cek-sign-out-bottom-drawer {
    top: 518px;
    left: 0px;
    width: 375px;
    height: 295px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 0;
  }
  .cek-sign-out-bg6 {
    top: 89px;
    left: 0px;
    width: 375px;
    height: 295px;
    position: absolute;
    border-radius: 16px 16px 0 0;
  }
  .cek-sign-out-actions {
    top: 170px;
    left: 24px;
    width: 327px;
    height: 86px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cek-sign-out-text30 {
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
  .cek-sign-out-button-primary {
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
  .cek-sign-out-text32 {
    color: var(--dl-color-default-black);
    height: auto;
    text-align: center;
    line-height: normal;
  }
  .cek-sign-out-text34 {
    top: 124px;
    left: 32px;
    width: 311px;
    height: 24px;
    display: flex;
    position: absolute;
    align-items: flex-start;
    flex-shrink: 1;
  }
  .cek-sign-out-text35 {
    color: var(--dl-color-gray-04);
    width: 311px;
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
  .cek-sign-out-header-elements {
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
      <!-- <link href="./cek-sign-out.css" rel="stylesheet" /> -->

      <div class="cek-sign-out-container">
        <div class="cek-sign-out-ceksignout">
          <div class="cek-sign-out-component1">
            <div class="cek-sign-out-head">
              <img
                alt="BaseI467"
                src="public/external/basei467-h2n9-400w.png"
                class="cek-sign-out-base"
              />
              <img
                alt="FotoI467"
                src="public/external/fotoi467-b554-200h.png"
                class="cek-sign-out-foto"
              />
              <span class="cek-sign-out-text UI-30Semi">
                <span>Victoria Robertson</span>
              </span>
              <span class="cek-sign-out-text02 UI-30Semi">
                <span>Pengaturan Akun</span>
              </span>
            </div>
            <div class="cek-sign-out-profile-basic">
              <div class="cek-sign-out-email">
                <div class="cek-sign-out-segmented-control-structure">
                  <span class="cek-sign-out-text04 UI-16Medium">
                    <span>victoriarobertson@email.com</span>
                  </span>
                </div>
                <span class="cek-sign-out-text06 UI-16Semi">
                  <span class="cek-sign-out-text07">Email*</span>
                </span>
              </div>
              <div class="cek-sign-out-password">
                <div class="cek-sign-out-segmented-control-structure1">
                  <span class="cek-sign-out-text08 UI-16Medium">
                    <span>************************</span>
                  </span>
                </div>
                <span class="cek-sign-out-text10 UI-16Semi">
                  <span class="cek-sign-out-text11">Password*</span>
                </span>
              </div>
              <div class="cek-sign-out-nomor-hp">
                <div class="cek-sign-out-segmented-control-structure2">
                  <img
                    alt="BGI467"
                    src="public/external/bgi467-azy.svg"
                    class="cek-sign-out-bg"
                  />
                  <span class="cek-sign-out-text12 UI-16Medium">
                    <span>🇮🇩+62 81280590821</span>
                  </span>
                </div>
                <span class="cek-sign-out-text14 UI-16Semi">
                  <span class="cek-sign-out-text15">Nomor HP*</span>
                </span>
              </div>
            </div>
            <div class="cek-sign-out-kontak">
              <div class="cek-sign-out-wa">
                <div class="cek-sign-out-segmented-control-structure3">
                  <img
                    alt="BGI467"
                    src="public/external/bgi467-kgtj.svg"
                    class="cek-sign-out-bg1"
                  />
                  <div class="cek-sign-out-group16">
                    <img
                      alt="VectorI467"
                      src="public/external/vectori467-wdm.svg"
                      class="cek-sign-out-vector"
                    />
                    <img
                      alt="VectorI467"
                      src="public/external/vectori467-yalb.svg"
                      class="cek-sign-out-vector1"
                    />
                    <img
                      alt="VectorI467"
                      src="public/external/vectori467-8n4k.svg"
                      class="cek-sign-out-vector2"
                    />
                  </div>
                  <span class="cek-sign-out-text16 UI-16Medium">
                    <span>081280590821</span>
                  </span>
                </div>
                <span class="cek-sign-out-text18 UI-16Semi">
                  <span>Nomor Hp</span>
                </span>
              </div>
              <span class="cek-sign-out-text20 UI-16Semi">
                <span>Kontak</span>
              </span>
            </div>
            <div class="cek-sign-out-edit">
              <img
                alt="Rectangle10I467"
                src="public/external/rectangle10i467-l2ydd-200h.png"
                class="cek-sign-out-rectangle10"
              />
              <img
                alt="shapeI467"
                src="public/external/shapei467-eyh.svg"
                class="cek-sign-out-shape"
              />
            </div>
            <img
              alt="ToggleiPhoneI467"
              src="public/external/toggleiphonei467-zztc.svg"
              class="cek-sign-out-togglei-phone"
            />
            <span class="cek-sign-out-text22 UI-16Medium">
              <span>Notifikasi</span>
            </span>
            <div class="cek-sign-out-keluarakun">
              <img
                alt="BGI467"
                src="public/external/bgi467-2gr9.svg"
                class="cek-sign-out-bg2"
              />
              <span class="cek-sign-out-text24 UI-16Medium">
                <span>Keluar Akun</span>
              </span>
            </div>
            <div class="cek-sign-out-simpan">
              <img
                alt="BGI467"
                src="public/external/bgi467-sg2j.svg"
                class="cek-sign-out-bg3"
              />
              <span class="cek-sign-out-text26 UI-16Medium">
                <span>Simpan</span>
              </span>
            </div>
            <img
              alt="VectorI467"
              src="public/external/vectori467-g0vi.svg"
              class="cek-sign-out-vector3"
            />
          </div>
          <div class="cek-sign-out-i-o-status-bar-white">
            <div class="cek-sign-out-whitebox">
              <div class="cek-sign-out-bg4">
                <img
                  alt="NotchI467"
                  src="public/external/notchi467-7bqr.svg"
                  class="cek-sign-out-notch"
                />
              </div>
              <div class="cek-sign-out-right-side">
                <div class="cek-sign-out-battery">
                  <img
                    alt="RectangleI467"
                    src="public/external/rectanglei467-dmfj.svg"
                    class="cek-sign-out-rectangle"
                  />
                  <img
                    alt="CombinedShapeI467"
                    src="public/external/combinedshapei467-zto9.svg"
                    class="cek-sign-out-combined-shape"
                  />
                  <img
                    alt="RectangleI467"
                    src="public/external/rectanglei467-nrm9.svg"
                    class="cek-sign-out-rectangle1"
                  />
                </div>
                <img
                  alt="WifiI467"
                  src="public/external/wifii467-vn35.svg"
                  class="cek-sign-out-wifi"
                />
                <img
                  alt="MobileSignalI467"
                  src="public/external/mobilesignali467-8b88.svg"
                  class="cek-sign-out-mobile-signal"
                />
              </div>
              <div class="cek-sign-out-left-side">
                <img
                  alt="SVG941I467"
                  src="public/external/svg941i467-z34v.svg"
                  class="cek-sign-out-svg941"
                />
              </div>
            </div>
            <div class="cek-sign-out-i-o-status-bar-black">
              <div class="cek-sign-out-bg5">
                <img
                  alt="NotchI467"
                  src="public/external/notchi467-brk.svg"
                  class="cek-sign-out-notch1"
                />
              </div>
              <div class="cek-sign-out-right-side1">
                <div class="cek-sign-out-battery1">
                  <img
                    alt="RectangleI467"
                    src="public/external/rectanglei467-gpoh.svg"
                    class="cek-sign-out-rectangle2"
                  />
                  <img
                    alt="CombinedShapeI467"
                    src="public/external/combinedshapei467-ghur.svg"
                    class="cek-sign-out-combined-shape1"
                  />
                  <img
                    alt="RectangleI467"
                    src="public/external/rectanglei467-ucb.svg"
                    class="cek-sign-out-rectangle3"
                  />
                </div>
                <img
                  alt="WifiI467"
                  src="public/external/wifii467-kcq.svg"
                  class="cek-sign-out-wifi1"
                />
                <img
                  alt="MobileSignalI467"
                  src="public/external/mobilesignali467-rtqn.svg"
                  class="cek-sign-out-mobile-signal1"
                />
              </div>
              <div class="cek-sign-out-left-side1">
                <img
                  alt="SVG941I467"
                  src="public/external/svg941i467-jfd.svg"
                  class="cek-sign-out-svg9411"
                />
              </div>
            </div>
            <img
              alt="Divider4673"
              src="public/external/divider4673-hloe.svg"
              class="cek-sign-out-divider"
            />
            <span class="cek-sign-out-text28 UI-16Medium">
              <span>Pengaturan Akun</span>
            </span>
          </div>
          <div class="cek-sign-out-i-o-bottom-bar-tabs">
            <div class="cek-sign-out-i-phone-ui">
              <div class="cek-sign-out-home-indicator"></div>
            </div>
            <div class="cek-sign-out-tabs">
              <img
                alt="Rectangle9I467"
                src="public/external/rectangle9i467-xwoo-200h.png"
                class="cek-sign-out-rectangle9"
              />
              <img
                alt="Rectangle10I467"
                src="public/external/rectangle10i467-ymut-200h.png"
                class="cek-sign-out-rectangle101"
              />
              <img
                alt="Rectangle11I467"
                src="public/external/rectangle11i467-iqv-200h.png"
                class="cek-sign-out-rectangle11"
              />
              <img
                alt="Rectangle12I467"
                src="public/external/rectangle12i467-x61-200h.png"
                class="cek-sign-out-rectangle12"
              />
              <img
                alt="Rectangle13I467"
                src="public/external/rectangle13i467-ebob-200h.png"
                class="cek-sign-out-rectangle13"
              />
            </div>
            <div class="cek-sign-out-logo">
              <img
                alt="shapeI467"
                src="public/external/shapei467-wm3g.svg"
                class="cek-sign-out-shape1"
              />
              <img
                alt="shapeI467"
                src="public/external/shapei467-uw44j.svg"
                class="cek-sign-out-shape2"
              />
              <img
                alt="SWMiconsoutlineedit4I467"
                src="public/external/swmiconsoutlineedit4i467-8asb.svg"
                class="cek-sign-out-s-miconsoutlineedit4"
              />
              <img
                alt="SWMiconsoutlineuser1I467"
                src="public/external/swmiconsoutlineuser1i467-7y.svg"
                class="cek-sign-out-s-miconsoutlineuser1"
              />
              <img
                alt="SWMiconsoutlinecoinI467"
                src="public/external/swmiconsoutlinecoini467-wyf4b.svg"
                class="cek-sign-out-s-miconsoutlinecoin"
              />
            </div>
            <img
              alt="TopDividerI467"
              src="public/external/topdivideri467-12e9-200h.png"
              class="cek-sign-out-top-divider"
            />
          </div>
          <img
            alt="item4673"
            src="public/external/item4673-bp2-700h.png"
            class="cek-sign-out-item"
          />
          <div class="cek-sign-out-bottom-drawer">
            <img
              alt="BG4673"
              src="public/external/bg4673-3z3-300h.png"
              class="cek-sign-out-bg6"
            />
            <div class="cek-sign-out-actions">
              <a href="index.html" class="cek-sign-out-text30 UI-16Semi">
                <span>Keluar</span>
              </a>
              <a
                href="{{ url('/pengaturanAkun') }}"
                class="cek-sign-out-button-primary"
              >
                <span class="cek-sign-out-text32 UI-16Semi">
                  <span>Kembali</span>
                </span>
              </a>
            </div>
            <div class="cek-sign-out-text34">
              <span class="cek-sign-out-text35">
                <span>yakin ingin keluar dari akun?</span>
              </span>
            </div>
            <div class="cek-sign-out-header-elements"></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
