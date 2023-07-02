<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>

    <script src="myscripts.js"></script>
    <h1>
        Jadwal Kuliah Semester Ganjil Tahun Ajaran 2022-2023
        <br>
        <form action="" method="post">
            <select name="jadwal" id="cars">
                <option value=''>Pilih File</option><br>

                <?php
                $dir = "C:/xampp/htdocs/projekuts/file";

                // Open a directory, and read its contents
                if (is_dir($dir)) {
                    if ($dh = opendir($dir)) {
                        while (($file = readdir($dh)) !== false) {
                            echo "<option value='$file'>$file</option><br>";
                        }
                        closedir($dh);
                    }
                }
                ?>
            </select>
            <input type="submit" value="Lihat">
        </form>
        <a href="formadmin.php">Login</a>
        <br>
        <input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Cari hari">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari mata kuliah">
        <input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Cari dosen">
        <input type="text" id="myInput3" onkeyup="myFunction3()" placeholder="Cari ruangan">
    </h1>
    <table id="myTable" border="1">
        <tr class="header">
            <th>
                No.
            </th>
            <th>
                Hari
            </th>
            <th>
                Slot Waktu
            </th>
            <th>
                Dosen
            </th>
            <th>
                Ruang
            </th>
            <th>
                Kelas
            </th>
            <th>
                Mata Kuliah
            </th>
            <th>
                JJ
            </th>
            <th>
                Tahun Ajaran
            </th>
            <th>
                Semester
            </th>
        </tr>
        <?php
        ini_set("display_errors", 0);
        if ($_POST['submit']) {
            $dir = "file/" . $_POST['jadwal'];
        } else {
            $dir = "file/Jadwal Kelas TI-1A.csv";
        }

        $file_to_read = fopen($dir, "r");

        if ($file_to_read !== FALSE) {

            while (($data = fgetcsv($file_to_read, 150, ';')) !== FALSE) {
                echo "<tr>";
                for ($i = 0; $i < count($data); $i++) {
                    echo "<td style='text-align: center;'>" . $data[$i] . "</td>";
                }
                echo "</tr>\n";
            }

            fclose($file_to_read);
        }

        ?>
    </table>


    <script>
        function myFunction1() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput1");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
            document.getElementById("myInput").value = "";
            document.getElementById("myInput2").value = "";
            document.getElementById("myInput3").value = "";

        }

        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[6];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
            document.getElementById("myInput1").value = "";
            document.getElementById("myInput2").value = "";
            document.getElementById("myInput3").value = "";
        }

        function myFunction2() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput2");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[3];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
            document.getElementById("myInput1").value = "";
            document.getElementById("myInput").value = "";
            document.getElementById("myInput3").value = "";
        }

        function myFunction3() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput3");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[4];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
            document.getElementById("myInput1").value = "";
            document.getElementById("myInput").value = "";
            document.getElementById("myInput2").value = "";
        }
    </script>
</body>

</html>