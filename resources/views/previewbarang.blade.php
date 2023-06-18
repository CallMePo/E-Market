<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Preview Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .container {
            width: 100%;
            display: flex;
            overflow: auto;
            min-height: 100vh;
            align-items: center;
            flex-direction: column;

        }

        body {
            width: 367px;
            height: 812px;
            display: flex;
            overflow: hidden;
            position: relative;
            align-items: flex-start;
            flex-shrink: 0;
            background-color: var(--dl-color-default-white);
            margin: auto;
        }

        html {
            font-family: Inter;
            font-size: 16px;
            line-height: 1.15
        }

        .bottombar {
            top: 800px;
            left: 0px;
            width: 375px;
            height: 83.5px;
            display: flex;
            position: absolute;
            align-items: flex-start;
            flex-shrink: 0;
        }

        .tabs {
            top: 15px;
            left: 26px;
            width: 320px;
            height: 32px;
            display: flex;
            position: absolute;
            align-items: flex-start;
            flex-shrink: 1;
        }

        .logo {
            top: 18px;
            left: 34.19921875px;
            width: 307.80078125px;
            height: 24px;
            display: flex;
            position: absolute;
            align-items: flex-start;
            flex-shrink: 1;
        }

        .divider {
            top: 0.5px;
            left: 0px;
            width: 375px;
            height: 0px;
            position: absolute;
        }

        .etalase-toko-home-rectangle9 {
            top: 0px;
            left: 0px;
            width: 32px;
            height: 32px;
            position: absolute;
            border-radius: 100px;
        }

        .etalase-toko-home-rectangle10 {
            top: 0px;
            left: 72px;
            width: 32px;
            height: 32px;
            position: absolute;
            border-radius: 100px;
        }

        .etalase-toko-home-rectangle11 {
            top: 0px;
            left: 144px;
            width: 32px;
            height: 32px;
            position: absolute;
            border-radius: 100px;
        }

        .etalase-toko-home-rectangle12 {
            top: 0px;
            left: 216px;
            width: 32px;
            height: 32px;
            position: absolute;
            border-radius: 100px;
        }

        .etalase-toko-home-rectangle13 {
            top: 0px;
            left: 288px;
            width: 32px;
            height: 32px;
            position: absolute;
            border-radius: 100px;
        }

        .etalase-toko-home-shape1 {
            top: 3px;
            left: 0px;
            width: 16px;
            height: 17px;
            position: absolute;
        }

        .etalase-toko-home-shape2 {
            top: 3px;
            left: 71.80078125px;
            width: 16px;
            height: 18px;
            position: absolute;
        }

        .etalase-toko-home-s-miconsoutlineedit4 {
            top: 0px;
            left: 211.80078125px;
            width: 24px;
            height: 24px;
            position: absolute;
        }

        .etalase-toko-home-s-miconsoutlineuser1 {
            top: 0px;
            left: 139.80078125px;
            width: 24px;
            height: 24px;
            position: absolute;
        }

        .etalase-toko-home-s-miconsoutlinecoin {
            top: 0px;
            left: 283.80078125px;
            width: 24px;
            height: 24px;
            position: absolute;
        }

        .bottombackground {
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

        .header {
            top: 10px;
            left: 16px;
            width: 343px;
            height: 36px;
            display: flex;
            position: absolute;
            align-items: flex-start;
            flex-shrink: 0;
        }

        .kembali {
            top: 8px;
            left: 0px;
            color: var(--dl-color-green-primary);
            height: auto;
            position: absolute;
            text-align: right;
            line-height: normal;
            text-decoration: none;
            color: #7D5243;
        }

        .title {
            left: 70px;
            color: var(--dl-color-default-black);
            height: auto;
            position: absolute;
            text-align: center;
            line-height: normal;
            font-size: 20pt;
        }

        .fotobarang {
            top: 97px;
            left: 17px;
            width: 343px;
            height: 203px;
            position: absolute;
        }

        .detailbarang {
            top: 322px;
            left: 15px;
            width: 344px;
            height: 283px;
            display: flex;
            position: absolute;
            align-items: flex-start;
            flex-shrink: 1;
        }

        .harga {
            top: 44px;
            left: 1px;
            color: var(--dl-color-default-black);
            width: 343px;
            height: auto;
            position: absolute;
            text-align: left;
            line-height: normal;
            font-size: 16pt;
        }

        .namabarang {
            left: 1px;
            color: var(--dl-color-default-black);
            width: 343px;
            height: auto;
            position: absolute;
            text-align: left;
            line-height: normal;
            font-size: 20pt;
        }

        .toko {
            top: 80px;
            left: 1px;
            color: var(--dl-color-default-black);
            width: 343px;
            height: auto;
            position: absolute;
            text-align: left;
            line-height: normal;
            font-size: 16pt;
        }

        .deskripsi {
            top: 81px;
            color: var(--dl-color-gray-04);
            width: 343px;
            height: auto;
            position: absolute;
            text-align: left;
            line-height: normal;
        }

        .actionbar {
            top: 750px;
            left: 130px;
            width: 375px;
            height: 83.5px;
            display: flex;
            position: absolute;
            align-items: flex-start;
            flex-shrink: 0;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <a href="/toko/aturetalase/{{ $tokoid }}" class="kembali">
                <span>Kembali</span>
            </a>
            <span class="title">
                <span><b>Preview Barang</b></span>
            </span>
        </div>
        <div>

                <div class="detailbarang">

                    <span class="namabarang">
                        <span><b>{{ $namaBarang }}</b></span>
                    </span>
                    <span class="harga">
                        <span>{{ $hargaBarang }}</span>
                    </span>
                    <span class="deskripsi">
                        <span>
                            <span><b>Deskripsi:</b></span>
                            <br />
                            <span>
                                {{ $deskripsiBarang }}
                            </span>
                        </span>
                    </span>

                </div>
                <div class="actionbar">
                    <a href="/barang/edit/{{ $idBarang }}"><button type="button"
                            class="btn btn-info">Edit</button></a>
                </div>

        </div>
        <div class="bottombar">
            <div class="bottombackground">
            </div>
            <div class="tabs">
                <a href="{{ url('cariBarangHome') }}"><img src="{{asset('/public/playground_assets/rectangle95268-wdne-200h.png')}}"
                        alt="Rectangle95268" class="etalase-toko-home-rectangle9"></a>
                <a href="{{ url('cariTokoHome') }}"><img src="{{asset('/public/playground_assets/rectangle105268-fd7f-200h.png')}}"
                        alt="Rectangle105268" class="etalase-toko-home-rectangle10"></a>
                <a href="{{ url('pengaturanAkun') }}"><img
                        src="{{asset('/public/playground_assets/rectangle115268-1kpk-200h.png')}}" alt="Rectangle115268"
                        class="etalase-toko-home-rectangle11"></a>
                <a href="{{ url('aturetalasetoko') }}"><img src="{{ asset('/public/playground_assets/rectangle125268-tqa-200h.png')}}"
                        alt="Rectangle125268" class="etalase-toko-home-rectangle12"></a>
                <a href="{{ url('hargaBarangHome') }}"><img
                        src="{{ asset('/public/playground_assets/rectangle135268-d9pe-200h.png')}}" alt="Rectangle135268"
                        class="etalase-toko-home-rectangle13"></a>
            </div>
            <div class="logo">
                <a href="{{ url('cariBarangHome') }}"><img src="{{ asset('/public/playground_assets/shape5268-5dlb.svg')}}"
                        alt="shape5268" class="etalase-toko-home-shape1"></a>
                <a href="{{ url('cariTokoHome') }}"><img src="{{ asset('/public/playground_assets/shape5268-e5g8.svg')}}"
                        alt="shape5268" class="etalase-toko-home-shape2"></a>
                <a href="{{ url('aturetalasetoko') }}"><img
                        src="{{ asset('/public/playground_assets/swmiconsoutlineedit45268-qg82.svg')}}" alt="SWMiconsoutlineedit45268"
                        class="etalase-toko-home-s-miconsoutlineedit4"></a>
                <a href="{{ url('pengaturanAkun') }}"><img
                        src="{{ asset('/public/playground_assets/swmiconsoutlineuser15268-6xc1.svg')}}" alt="SWMiconsoutlineuser15268"
                        class="etalase-toko-home-s-miconsoutlineuser1"></a>
                <a href="{{ url('hargaBarangHome') }}"><img
                        src="{{ asset('/public/playground_assets/swmiconsoutlinecoin5268-473n.svg')}}" alt="SWMiconsoutlinecoin5268"
                        class="etalase-toko-home-s-miconsoutlinecoin"></a>
            </div>
            <img src="{{asset('/public/playground_assets/topdivider5268-z24-200h.png')}}" alt="TopDivider5268" class="divider" />
        </div>
    </div>
</body>

</html>
