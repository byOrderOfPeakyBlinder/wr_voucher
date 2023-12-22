<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Voucher</h1>
    </div>

    <!-- content tambah promo -->
    <!-- Nested Row within Card Body -->

    <div class="tab-content">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form method="POST" action="">
                    <div class="position-relative row form-group"><label for="exampleEmail"
                            class="col-sm-2 col-form-label">Kode Voucher</label>
                        <div class="col-sm-10"><input name="kode_voucher" placeholder="Kode Voucher" type="text"
                                class="form-control" required></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleSelect"
                            class="col-sm-2 col-form-label">Nominal</label>
                        <div class="col-sm-10"><select name="nominal" id="exampleSelect" class="form-control" required>
                                <option value="50.000">50.000</option>
                                <option value="100.000">100.000</option>
                                <option value="150.000">150.000</option>
                            </select></div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail"
                            class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10"><input name="status" placeholder="status" type="text"
                                class="form-control" required></div>
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