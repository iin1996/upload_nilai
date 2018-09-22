<?php
    include_once "head.php" ;
?>
<div class="main">
    <div class="login">
        <form action="kusuka.php" method="post" enctype="multipart/form-data">
            <h1><b>Upload file</b></h1></br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img align="center" src="upload.png"/>
            
            <br/><br/>
            
            <div class="login-bottom">
            
                <h2>Penamaan File</h2> </br>
                kelas_nopres_nim_nama<br/><br/>
                        
            Mata Kuliah &nbsp;:&nbsp;
            <select name="mk">
                <option value="-">Pilihan Tidak Ada</option>
                <option value="PD">Pemrograman Desktop</option>
                <option value="PBO">Pemrograman Berorientasi Objek</option>
                <option value="ALG">Algoritma dan Pemrograman</option>
                <option value="WEB">Pengembangan Aplikasi web</option>
            </select>
                <br/><br/>
            Pilih File &nbsp; : &nbsp;
            <input type="file" name="listing" accept=".doc, .docx, .pdf"></br></br>
            <b>Simpan Dengan Nama : </b></br>
            <input type="text" name="namafile"/>
                <br/><br/><br/>
                <input type="submit" value="Simpan">
            </div>
</form>
    </div>
</div>
<?php
  include_once "foot.php";
?>
