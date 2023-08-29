            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><strong>Data Barang</strong></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="text-right">
                      <div class="pull-left panel-title">Data Barang</div>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-primary btn-add" href="<?= $url_print ?>"><i class="fa fa-print"></i></a>
                        <a class="btn btn-success btn-add" href="<?php echo base_url('admin_system/barang_form') ?>"><i class="fa fa-plus"></i> Tambah Data</a>
                      </div>
                    </div>
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <form method="get" action="">
                    <div class="row mb-3">
                      <div class="col-sm-12"><h4><label>FILTER PENCARIAN KODE LOKASI</label></h4></div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <!-- <label> Pencarian Tempat</label> -->
                          <select name="kode_lokasi" class="form-control">
                              <option value="">Tampilkan Semua</option>
                            <?php foreach ($datakodelokasi as $dk): ?>
                              <option value="<?php echo $dk->kode_lokasi ?>"> <?php echo $dk->kode_lokasi ?></option>
                            <?php endforeach ?>  
                          </select>
                        </div>
                      </div>
                      <!-- <div class="col-sm-3">
                        <div class="form-group">
                        <label> Pencarian Kode Jenis</label>
                          <select name="kode_jenis" class="form-control">
                              <option value="">Tampilkan Semua</option>
                            <?php foreach ($datakodejenis as $dkj): ?>
                              <option value="<?php echo $dkj->kode_jenis ?>"> <?php echo $dkj->kode_jenis ?></option>
                            <?php endforeach ?>  
                          </select>
                        </div>
                      </div> -->
                      <div class="col-sm-3">
                       <button id="search" name="search" class="btn btn-warning">Filter</button>
                      </div>
                      <!-- <br><input type="submit" class="btn btn-primary" value="Filter">  -->
                    </div>
                    </form>
                    <br>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Kode Lokasi</th>
                          <th>Lokasi</th>
                          <th>Kode Jenis</th>
                          <th>Nama Barang</th>
                          <th>Stock</th>
                          <th>Kondisi</th>
                          <th>Deskripsi</th>
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($data as $d1) { ?>
                        <tr>
                          <td><?php echo $d1->id_barang ?></td>
                          <td><?php echo $d1->kode_lokasi ?></td>
                          <td><?php echo $d1->tempat ?></td>
                          <td><?php echo $d1->kode_jenis ?></td>
                          <td><?php echo $d1->name ?></td>
                          <td><?php echo $d1->stock ?></td>
                          <td><?php echo $d1->kondisi ?></td>
                          <td><?php echo $d1->desc ?></td>
                          <td><?php echo $d1->status ?></td>
                          <td class="text-center">
                            <form action="<?php echo base_url('admin_system/barang_form') ?>" method="post">
										          <input type="hidden" name="id" value="<?php echo $d1->id_barang ?>">
										          <button class="btn btn-info btn-xs btn-edit" type="submit" data-original-title="Ubah" data-placement="top" data-toggle="tooltip"><i class="fa fa-edit"></i></button>
								 	          </form>
                          </td>
                          <td class="text-center">
                            <form action="<?php echo base_url('admin_system/barang_delete') ?>" method="post">
										          <input type="hidden" name="id" value="<?php echo $d1->id_barang ?>">
										          <button class="btn btn-danger btn-xs btn-delete" type="submit" data-original-title="delete" data-placement="top" data-toggle="tooltip"><i class="fa fa-trash-o"></i></button>
								 	          </form>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <!-- /.table-responsive -->
                  </div>
                  <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
            </div>
