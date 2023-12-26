<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
            <h6 class="m-0 font-weight-bold text-primary">Data Kasir</h6>
            <a href="<?= base_url('admin/tambah_kasir')  ?>" class=" btn btn-sm btn-primary shadow-sm"> Tambah
                kasir</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped w-100 dt-responsive " id="pengguna" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No </th>
                            <th>Nama</th>
                            <th>Cabang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                        foreach ($data_kasir as $ksr ) {
                        
                        ?>
                        <tr>
                            <td><?= $no?></td>
                            <td><?= $ksr->username?></td>
                            <td><?= $ksr->cabang?></td>
                            <td>
                                <a href="<?php echo base_url('admin/edit_kasir'); ?>/<?php echo $ksr->id; ?>">
                                    <i class="fas fa-edit"></i></a>
                                &nbsp;
                                <a type="button" data-toggle="modal" data-target="#modal-hapus<?=$no?>">
                                    <i class="fas fa-trash-alt" style="color:red"></i>
                                </a>
                            </td>

                        </tr>
                        <!-- Modal Hapus -->
                        <div class="col-md-4">
                            <div class="modal fade" id="modal-hapus<?=$no?>" tabindex="-1" role="dialog"
                                aria-labelledby="modal-hapus<?=$no?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h6 class="modal-title" id="modal-title-hapus<?=$no?>"></h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">X</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <div class="py-3 text-center">
                                                <i class="ni ni-bell-55 ni-3x"></i>
                                                <h4 class="heading mt-4">Konfirmasi</h4>
                                                Apakah Anda Ingin Menghapus Kasir <br>
                                                <b>
                                                    <?= $ksr->username.' - Cabang '.$ksr->cabang ?>
                                                </b>
                                            </div>

                                        </div>

                                        <div class="modal-footer">
                                            <a href="<?php echo base_url('admin/hapus_kasir'); ?>/<?php echo $ksr->id; ?>"
                                                class="btn btn-danger">Ya, Hapus</a>
                                            <button type="button" class="btn btn-link ml-auto"
                                                data-dismiss="modal">Tutup</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Hapus -->
                        <?php
                        $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>