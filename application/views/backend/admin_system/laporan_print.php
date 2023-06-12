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

<div id="judul">LAPORAN BARANG YANG SEDANG DIPINJAM</div>
    <table border="1" align="center">
        <thead>
            <tr>
                <th>ID PINJAM</th>
                <th>NAMA PEMINJAM</th>
                <th>JABATAN/KELAS</th>
                <th>NAMA BARANG</th>
                <th>JUMLAH PINJAM</th>
                <th>TANGGAL PINJAM</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $d1) { ?>
                <tr>
                    <td align="center"><?php echo $d1->id_pinjam ?></td>
                    <td align="center"><?php echo $d1->name_peminjam ?></td>
                    <td align="center"><?php echo $d1->jabatan ?></td>
                    <td align="center"><?php echo $d1->name_barang ?></td>
                    <td align="center"><?php echo $d1->jml ?></td>
                    <td align="center"><?php echo $d1->tgl_pinjam ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>