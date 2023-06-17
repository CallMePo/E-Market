<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h2 {
            font-family: "Segoe UI", "Frutiger", "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
            top: 110px;
            left: 610px;
            color: rgba(0, 0, 0, 1);
            height: auto;
            position: absolute;
            text-align: center;
            line-height: 20%;
        }
        span[class="text1"]{
            top: 169px;
            left: 580px;
            color: rgba(0, 0, 0, 1);
            width: 316px;
            height: auto;
            position: absolute;
            text-align: center;
            line-height: normal;
        }
        button{
            font-family: "Segoe UI", "Frutiger", "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
            font-weight: bold;
            font-size: 100%;
            color: white;
            margin-top: 280px;
            margin-bottom: 50px;
            margin-left: 570px;
            margin-right: 100px;
            background: #7D5243;
            width: 310px;
            height: 110px;
            position: absolute;
            border-radius: 80px;
            outline-color: #7D5243
        }
        .create:hover{
            background-color: #DC9966;
        }
    </style>
    <body>
        <div class=container>
            <h2>Tingkatkan Penjualan!</h2>
            <span class="text1" >Daftarkan tokomu sekarang di E-Pasar secara gratis dan tarik pelanggan baru dari seluruh penjuru Indonesia serta kelola tokomu dengan mudah!</span>
            <div class="next-page" action="{{ route('buattoko2') }}">
                <button class="create">Buat Toko</button>

        </div>
    </body>
</head>
