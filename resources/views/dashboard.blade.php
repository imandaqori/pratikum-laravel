<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        @if(session('success'))
        <h1>{{session('success')}}</h1>
        @endif

        <form action="{{ route('post.data') }}" method="post">
            {{ csrf_field() }}
            <div style="padding: 5px">
                <input type="text" name="nama_lengkap" placeholder="Nama Lengkap">
            </div>
            <div style="padding: 5px">
                <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir">
            </div>
            <div style="padding: 5px">
                <input type="text" name="alamat" placeholder="Alamat">
            </div>
            <div style="padding: 5px">
                <input type="text" name="nim" placeholder="NIM">
            </div>
            <div style="padding: 5px">
                <input type="text" name="status" placeholder="Status">
            </div>
            <div style="padding: 5px">
                <input type="text" name="semester" placeholder="Semester">
            </div>

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>

</html>
