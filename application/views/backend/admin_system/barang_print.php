<style>
    #judul{
        text-align: center;
        font-size: 14pt;
        font-weight: bold;
        margin-bottom: 20px;
    }
    /* label{
        color: red;
    } */
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

<div id="judul">DATA INVENTARIS SMK KESUMA MARGOYOSO</div>
    <!-- <label>Dicetak pada:</label><?php echo date('d / M / y') ?> -->
    <center><label>Dicetak pada : </label><?php echo date('d M Y') ?></center>
    <table border="1" align="center">
        <thead>
            <tr>
                <th>Kode Lokasi</th>
                <th>Lokasi</th>
                <th>Kode Jenis</th>
                <th>Nama Barang</th>
                <th>Kondisi</th>
                <th>Stock</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $d1) { ?>
            <tr>
            <td align="center"><?php echo $d1->kode_lokasi ?></td>
                <td align="center"><?php echo $d1->tempat ?></td>
                <td align="center"><?php echo $d1->kode_jenis ?></td>
                <td align="center"><?php echo $d1->name ?></td>
                <td align="center"><?php echo $d1->kondisi ?></td>
                <td align="center"><?php echo $d1->stock ?></td>
                <td align="center"><?php echo $d1->desc ?></td>                            
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>