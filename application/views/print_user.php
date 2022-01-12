<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <table>
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Username</th>
            <th>No Telp</th>
        </tr>

        <tr>
            <?php
            $no=1;
            foreach ($user as $usr) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $usr->nama ?></td>
                <td><?php echo $usr->username ?></td>
                <td><?php echo $usr->no_hp ?></td>
            </tr>
        </tr>
        <?php endforeach; ?>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
    
</body>
</html>