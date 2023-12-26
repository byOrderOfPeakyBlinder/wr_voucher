<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Cabang</h1>
    </div>

    <!-- content tambah promo -->
    <!-- Nested Row within Card Body -->

    <div class="tab-content">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form method="POST" action="">
                    <div class="position-relative row form-group"><label for="exampleEmail"
                            class="col-sm-2 col-form-label">Kode Cabang</label>
                        <div class="col-sm-10"><input name="kode_cabang" id="kode_voucher" placeholder="Kode Cabang"
                                value="<?= $edit['kode_cabang'] ?>" type="text" class="form-control" readonly required>
                            <?= form_error('kode_cabang', '<small class="text-danger">', '</small>'); ?>
                        </div>

                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail"
                            class="col-sm-2 col-form-label">Cabang</label>
                        <div class="col-sm-10"><input name="cabang" placeholder="Lokasi Cabang" type="text"
                                value="<?= $edit['cabang']  ?>" class="form-control" required></div>
                    </div>
                    <div class="position-relative row form-check">
                        <div class="col-sm-10 offset-sm-2">
                            <button class="btn btn-secondary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>