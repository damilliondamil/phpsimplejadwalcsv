<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php session_start(); /* Starts the session */

    if (!isset($_SESSION['UserData']['Username'])) {
        header("location:login.php");
        exit;
    }
    ?>
    <a href="logout.php">Click here</a> to Logout.
    <center>
        <h1>Form Input Jadwal</h1>&nbsp;
        <form method="post" action="proses.php">
        <input type="text" name="matkul1">
            <table style="text-align: center;">
                <tr>
                    <td>
                        No.
                    </td>
                    <td>
                        Hari
                    </td>
                    <td>
                        Slot Waktu
                    </td>
                    <td>
                        Dosen
                    </td>
                    <td>
                        Ruang
                    </td>
                    <td>
                        Kelas
                    </td>
                    <td>
                        Mata Kuliah
                    </td>
                    <td>
                        JJ
                    </td>
                    <td>
                        Tahun Ajaran
                    </td>
                    <td>
                        Semester
                    </td>
                </tr>
                <tr>
                    <td rowspan="4" style="transform: rotate(-90deg);">
                        Senin
                        <input type="hidden" name="hari1" value="senin">
                    </td>
                    <td>
                        07.30-08.20
                        <input type="hidden" name="waktu1" value="07.30-08.20">
                    </td>
                    <td>
                        <input type="text" name="matkul1">
                    </td>
                    <td>
                        <input type="text" name="dosen1">
                    </td>
                    <td>
                        <input type="text" name="ruang1">
                    </td>
                </tr>
                <tr>
                    <td>
                        08.20-09.10
                        <input type="hidden" name="waktu2" value="08.20-09.10">
                    </td>
                    <td>
                        <input type="text" name="matkul2">
                    </td>
                    <td>
                        <input type="text" name="dosen2">
                    </td>
                    <td>
                        <input type="text" name="ruang2">
                    </td>
                </tr>
                <tr>
                    <td>
                        09.10-10.00
                        <input type="hidden" name="waktu3" value="09.10-10.00">
                    </td>
                    <td>
                        <input type="text" name="matkul3">
                    </td>
                    <td>
                        <input type="text" name="dosen3">
                    </td>
                    <td>
                        <input type="text" name="ruang3">
                    </td>
                </tr>
                <tr>
                    <td>
                        10.15-11.05
                        <input type="hidden" name="waktu4" value="10.15-11.05">
                    </td>
                    <td>
                        <input type="text" name="matkul4">
                    </td>
                    <td>
                        <input type="text" name="dosen4">
                    </td>
                    <td>
                        <input type="text" name="ruang4">
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                        <input type="submit" value="Submit" style="width: 100%;">
                    </td>
                </tr>
            </table>
        </form>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Upload file manual:
            <input type="file" name="berkas">
            <input type="submit" value="Upload Jadwal" name="submit">
        </form>
    </center>
</body>

</html>