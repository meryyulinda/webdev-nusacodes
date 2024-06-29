<!DOCTYPE html>
<html>
<link rel="stylesheet" href="/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>

    <h3>PHP dan SQL</h3>

    <div>
        <form action="/employee/update" method="post">
            @csrf
            <label for="">Nama</label>
            
            <input type="hidden" name="id" value="{{$data_employee->id}}">
            <input type="text" name="nama" value="{{$data_employee->nama}}">

            <label for="">Usia</label>
            <input type="text" name="usia" value="{{$data_employee->usia}}">
            
            <label for="">Alamat</label>
            <input type="text" name="alamat" value="{{$data_employee->alamat}}">

            <label for="">Kota</label>
            <input type="text" name="kota" value="{{$data_employee->kota}}">

            <label for="">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="">
                <option value="Laki-laki" @if($data_employee->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                <option value="Perempuan" @if($data_employee->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
            </select>


            <input type="submit" value="Simpan Perubahan">
        </form>
    </div>

    <div>
        
        @if(session()->has('sukses'))
        Sukses
        @endif
    </div>

</body>

</html>