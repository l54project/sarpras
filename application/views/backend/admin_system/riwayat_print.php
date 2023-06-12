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

<div id="judul">RIWAYAT PEMINJAMAN BARANG</div>
    <table border="1" align="center">
                      <thead>
                        <tr>
                          <th>ID Pinjam</th>
                          <th>Nama Peminjam</th>
                          <th>Jabatan/Kelas</th>
                          <th>Nama Barang</th>
                          <th>Jumlah Pinjam</th>
                          <th>Tanggal Pinjam</th>
                          <th>Tanggal Kembali</th>
                          <th>Status</th>
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
                          <td align="center"><?php echo $d1->tgl_kembali ?></td>
                          <td>
                            <?php if($d1->status == '0') echo "<div class='text-danger'>Pinjam Ditolak</div>";
                                  elseif($d1->status == '1') echo "<div class='text-success'>Dikembalikan</div>"; ?>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>