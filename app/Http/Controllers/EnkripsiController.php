<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
 
class EnkripsiController extends Controller
{
    public function enkripsi()
    {
        $encrypted = Crypt::encryptString('Belajar Laravel Di malasngoding.com');
        $decrypted = Crypt::decryptString($encrypted);
 
        echo "Hasil Enkripsi : " . $encrypted;
        echo "<br/>";
        echo "<br/>";
        echo "Hasil Dekripsi : " . $decrypted;
    }

    public function data()
    {
        $parameter =[
        'nama' => 'Savitri Sunariany Utami',
        'pekerjaan' => 'Programmer',
        ];
        $enkripsi= Crypt::encrypt($parameter);
        echo "<a href='/data/".$enkripsi."'>Klik</a>";
    }
     
    public function data_proses($data)
    {
        $data = Crypt::decrypt($data);
     
        echo "Nama : " . $data['nama'];
        echo "<br/>";
        echo "Pekerjaan : " . $data['pekerjaan'];
    }

    public function hash()
    {
    // Membuat hash dari password 'halo123' dan mencetaknya
    $hash_password_saya = Hash::make('halo123');
    echo "Hashed Password: " . $hash_password_saya . "\n";

    // Simulasi password yang dimasukkan oleh pengguna dan hash password dari database
    $password_yang_dimasukkan = 'halo123'; // Password yang dimasukkan oleh pengguna
    $password_dari_db = $hash_password_saya; // Hash password yang disimpan di database

    // Verifikasi password
    if (Hash::check($password_yang_dimasukkan, $password_dari_db)) {
        // Jika password benar
        echo "Password is correct!";
    } else {
        // Jika password tidak sesuai
        echo "Password is incorrect!";
    }
    }
}
