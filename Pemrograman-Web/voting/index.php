<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tes voting</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

    <form action="insert.php" method="post">
            <table>
            <tr>
                <td><label for="nama">Nama Mahasiswa</label></td>
                <td><input id="nama" type="text" name="nama"></td>
            </tr>
            <tr>
                
                <td><label for="vote">Vote</label></td>
                <td><input id="vote" type="number" name="vote"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Kirim</button>
                    <button type="reset">Batal</button>
                </td>
            </tr>
        </table>
    </form>

    <hr>

</body>
</html>