<style>
    #judul{
        text-align: center;
        font-size: 14pt;
        font-weight: bold;
        margin-bottom: 20px;
    }
    table{
        border-collapse: collapse;
    }
    th{
        padding: 5px;
        text-align: center;
    }
    td{
        padding-left: 5px;
        padding-right: 5px;
    }
</style>

<div id="judul">DATA BARANG SMK KESUMA MARGOYOSO</div>
    <table border="1" align="center">
        <thead>
            <tr>
                <th>ID Barang</th>
                <th>Nama</th>
                <th>Kondisi</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $d1) { ?>
            <tr>
                <td align="center"><?php echo $d1->id_barang ?></td>
                <td align="center"><?php echo $d1->name ?></td>
                <td align="center"><?php echo $d1->kondisi ?></td>
                <td align="center"><?php echo $d1->stock ?></td>              
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>