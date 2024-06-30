<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($data as $d)
        <ul>
            <li>{{ $d->nim }}</li>
            <li>{{ $d->nama }}</li>
            <li>{{ $d->kelas }}</li>
            <li>{{ $d->kota_lahir }}</li>
            <li>{{ $d->tgl_lahir }}</li>
            <li>{{ $d->no_hp }}</li>
        </ul>
    @endforeach
</body>

</html>
