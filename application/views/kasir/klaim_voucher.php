<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Claim Voucher</h1>
    </div>

    <!-- content tambah promo -->
    <!-- Nested Row within Card Body -->

    <div class="tab-content">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <?php echo form_open_multipart(); ?>
                <div class="position-relative row form-group"><label for="exampleEmail"
                        class="col-sm-2 col-form-label">Nama Customer</label>
                    <div class="col-sm-10"><input name="nama" placeholder="" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="position-relative row form-group"><label for="exampleEmail"
                        class="col-sm-2 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-10"><input name="no_hp" placeholder="" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="position-relative row form-group"><label for="exampleEmail"
                        class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10"><input name="alamat" placeholder="" type="text" class="form-control"
                            required>
                    </div>
                </div>
                <div class="position-relative row form-group"><label for="exampleEmail"
                        class="col-sm-2 col-form-label">Foto Nota</label>
                    <div class="col-sm-10"><input name="foto" placeholder="" type="file"
                            accept="image/png, image/jpeg, image/jpg" class="form-control" required>
                    </div>
                </div>
                <div class="position-relative row form-group"><label for="exampleEmail"
                        class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10"><input name="tanggal" placeholder="status" type="date" class="form-control"
                            required></div>
                </div>
                <div class="position-relative row form-group"><label for="exampleEmail"
                        class="col-sm-2 col-form-label">Kode Voucher</label>
                    <div class="col-sm-10"><input name="kode_voucher" id="kode_voucher" placeholder="" value=""
                            type="text" class="form-control" maxlength="6" required autocomplete="off">

                    </div>
                </div>
                <div class="position-relative row form-check">
                    <div class="col-sm-10 offset-sm-2">
                        <button class="btn btn-secondary">Submit</button>
                    </div>
                </div>
                <?php form_close(); ?>

            </div>
        </div>
    </div>
</div>
</div>