    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="layout/styles/layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
       .input-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }
        label {
            display: flex;
            margin-bottom: 8px;
            
        }

        input,select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
    
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        textarea{
          resize: vertical;
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .file{
            width: 25%;
            border: none;
            margin-left: -7px;
        }
        #foto{
            margin-top: -19px;
        }
        input[type="submit"]{
            width: 20%;
        }       
    </style>
</head>
<body>
    <?php include "header.php"; ?>
    <section>
    <div class="wrapper row3">  
    <form class="input-box" action="proses_pendaftaran.php" method="post">
      <h1>PENDAFTARAN ALUMNI </h1>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="jenis-kelamin">Jenis Kelamin:</label>
        <select name="jenis" id="select">
          <option value="first">Pilih</option>
          <option value="second">Laki-Laki</option>
          <option value="third">Perempuan</option>
        </select>

        <label for="date">Tanggal Lahir:</label>
        <input type="date" required>

        <label for="lulus">Tahun Lulus:</label>
        <input type="number"  required>

        <label for="NIS">NIS:</label>
        <input type="number" required>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" rows="4" cols="50"> </textarea>

        <label for="email">Email:</label>
        <input type="email" required>

        <label for="telepon">Telepon:</label>
        <input type="number" required>

        <label for="foto">Foto:</label>
        <input class=" file" type="file" required>

        <p id="foto">Foto harus JPG dan ukuran file maksimal 1 Mb</p>
        <hr>

        <input  type="submit" value="Submit"  >
        
    </form>

 
</div>
    </section>
</body>
</html>


