<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <h2>Berikut adalah data toko yang sudah terdaftar</h2>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nama Toko</th>
            <th>Jam buka toko</th>
            <th>Letak pasar</th>
            <th>Lokasi toko</th>
        </tr>
        @foreach ($toko as $t)
        <tr>
            <td>{{  $t->namaToko  }}</td>
            <td>{{  $t->bukaToko  }}</td>
            <td>{{  $t->letakPasar  }}</td>
            <td>{{  $t->lokasiPasar  }}</td>
        </tr>

        @endforeach
    </table>
</body>
