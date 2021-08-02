<html>
<head>
    <title>Hasil Akhir </title>
</head>
<body>
    <center><h1>Nilai Siswa SMK Wikrama</h1></center>
       <table width="350" border="1" align="center"  bordercolor="#0000FF">
          <tr>
              <td><?php
              $a=$_POST['nis'];
              $b=$_POST['nama'];
              $c=$_POST['jurusan'];
              $d=$_POST['pertemuan'];
              $e=$_POST['absen'];
              $f=$_POST['tugas'];
              $g=$_POST['uts'];
              $h=$_POST['uas'];
              $i=(0.1*$d)+(0.2*$e)+(0.3*$f)+(0.4*$g)+(0.5*$h);
            if ($h>=99)
              $j=("A") and $i=("Sangat Bagus");
             else
            if ($h>=90)
            $j=("A-") and $i=("Sangat Bagus");
             else
            if ($h>=85)
            $j=("B+") and $i=("Bagus");
             else
            if ($h>=80)
            $j=("B") and $i=("Cukup Bagus");
             else
            if ($h>=75)
            $j=("B-") and $i=("Kurang Bagus");
             else
            if ($h>=60)
            $j=("C") and $i=("Kurang");
             else
            if ($h>=55)
            $j=("D") and $i=("Tidak Bagus");
             else
            if ($h>100)
             $j=("") and $i=("Nilai Salah");
              else
            $j=("E") and $i=("Nilai Salah");

            echo"NIS : $a<br>";
            echo"Nama Siswa : $b<br>";
            echo"Jurusan : $c<br>";
            echo"Nilai Akhir : $h<br>";
            echo"Grade : $j<br>";
            echo"Keterangan : $i<br>";
       ?></td>
      </tr>
    </table>
  </body>
</html>