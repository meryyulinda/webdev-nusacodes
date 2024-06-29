<!DOCTYPE html>
<html>
<link rel="stylesheet" href="/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>

    <h3>PHP dan SQL</h3>

    <div>
        <form action="/employee/tambah" method="post">
            @csrf
            <label for="">Nama</label>
            <input type="text" name="nama">

            <label for="">Usia</label>
            <input type="text" name="usia">
            
            <label for="">Alamat</label>
            <input type="text" name="alamat">

            <label for="">Kota</label>
            <input type="text" name="kota">

            <label for="">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>


            <input type="submit" value="Tambah Data +">
        </form>
    </div>

    <div>
        
        @if(session()->has('sukses'))
        Sukses
        @endif
    </div>

    <h3>Daftar Karyawan</h3>
    <div>
        <table>
            <tr>
                <td><b>ID</b></td>
                <td><b>Nama</b></td>
                <td><b>Usia</b></td>
                <td><b>Jenis Kelamin</b></td>
                <td><b>Action</b></td>
            </tr>

            @foreach($data_employee as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->nama}}</td>
                <td>{{$employee->usia}}</td>
                <td>{{$employee->jenis_kelamin}}</td>
                <td><a href="/employee/edit/{{$employee->id}}"><button>Edit</button></a></td>
                <td><a href="/employee/hapus/{{$employee->id}}"><button>Hapus</button></a></td>
            </tr>
            @endforeach


        </table>
    </div>



</body>

</html>