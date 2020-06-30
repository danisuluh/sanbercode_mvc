<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Buat Akun Baru</title>
</head>

<body>
  <div class="judulform">
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
  </div>

  <!--Form Pendaftaran Sanbercode-->
  <form action="../masuk.blade.php">
    <!--Untuk isian karakter terbatas seperti nama, menggunakan input type text-->
    <!--label digunakan untuk memberi nama form input text nya, dan dihubungkand for pada label ke id pada input-->
    <label for="first_name">First Name:</label><br><br>
    <input type="text" placeholder="First Name" value="" name="" id="first_name"><br><br>
    <label for="last_name">Last Name:</label><br><br>
    <input type="text" placeholder="Last Name" value="" name="" id="last_name">

    <br><br>
    <!--Menggunakan radio untuk membuat pilihan hanya 1 buah-->
    <label>Gender:</label><br><br>
    <input type="radio" name="gender" value="0" id="">Male <br>
    <input type="radio" name="gender" value="1" id="">Female <br>
    <input type="radio" name="gender" value="2" id="">Other <br>

    <br><br>
    <!---->
    <label>Nasionality:</label><br><br>
    <select name="Nasionality" id="">
      <option value="0">Indonesia</option>
      <option value="1">Inggris</option>
      <option value="2">Malaysia</option>
      <option value="3">Other</option>
    </select>

    <br><br>
    <!--Menggunakan Checkbox untuk membuat pilihan yang dapat dipilih lebih dari 1 buah-->
    <label>Language Spoken:</label><br><br>
    <input type="checkbox" name="language" value="0" id="">Bahasa Indonesia <br>
    <input type="checkbox" name="language" value="1" id="">English <br>
    <input type="checkbox" name="language" value="2" id="">Other <br>


    <br><br>
    <!--Text area untuk membuat form isian dengan jumlah karakter banyak, seperti biodata-->
    <label>Bio:</label><br><br>
    <textarea name="Biografi" id="" cols="30" rows="10">

      </textarea>

    <br><br>
    <!--Submit untuk kirim data, reset untuk menghapus data yang telah diinput-->
    <button type="submit">Sign Up</button>
    <button type="reset">Hapus Data</button>
  </form>



</body>

</html>