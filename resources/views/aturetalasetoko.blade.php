<html>
    <head>
        <title>Atur Etalase Toko</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>

    </style>
    </head>
    <body>
    <div class="container">
        <h1>{{ $namaToko }}</h1>
        <a href="/cariBarangHome"><button type="button" class="btn btn-warning">Buat Barang</button></a>
        <a href=""><button type="button" class="btn btn-warning">Buat Barang</button></a>
        <a href="/statistikToko/{{ $idToko }}"><button type="button" class="btn btn-secondary">Statistik Toko</button></a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th width="15%" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $b)
                <tr>
                    <td>{{ $b->namaBarang }}</td>
                    <td>

                            {{ $b->hargaBarang }}

                    </td>
                    <td> <a href="/barang/preview/{{ $b->id }}">Preview</a> <a href="/barang/hapus/{{ $b->id }}">Hapus</a></td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </body>
</html>
