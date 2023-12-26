<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
            <h6 class="m-0 font-weight-bold text-primary">Riwayat Klaim Voucher</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped w-100 dt-responsive " id="pengguna" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal Klaim </th>
                            <th>Kode Voucher</th>
                            <th>Nominal</th>
                            <th>Nama Customer</th>
                            <th>Alamat</th>
                            <th>Nota</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                        foreach ($riwayat as $rwt) {
                        
                        ?>
                        <tr>
                            <td><?= date('d F Y',$rwt->tanggal)?></td>
                            <td><?= $rwt->kode_voucher?></td>
                            <td>Rp. <?= number_format($rwt->nominal,0)?></td>
                            <td><?= $rwt->nama?></td>
                            <td><?= $rwt->alamat?></td>
                            <td>
                                <a type="button" data-toggle="modal" data-target="#modal-view<?=$no?>">
                                    <img height="100px" src="<?= base_url('assets/img/nota/').$rwt->foto?>" alt="">
                                </a>
                            </td>

                        </tr>
                        <!-- Modal view -->
                        <div class="col-md-4">
                            <div class="modal fade" id="modal-view<?=$no?>" tabindex="-1" role="dialog"
                                aria-labelledby="modal-view<?=$no?>" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h6 class="modal-title" id="modal-title-view<?=$no?>"></h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">X</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <div class="py-3 text-center">
                                                <i class="ni ni-bell-55 ni-3x"></i>
                                                <img height="300px" src="<?= base_url('assets/img/nota/').$rwt->foto?>"
                                                    alt="">
                                            </div>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary ml-auto"
                                                data-dismiss="modal">Tutup</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal view -->
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