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
                        <div class="col-sm-8"><input name="kode_voucher" id="kode_voucher" placeholder="Kode Voucher"
                                value="<?= set_value('kode_voucher'); ?>" type="text" class="form-control" maxlength="6"
                                autocomplete="off" required>
                            <?= form_error('kode_voucher', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="col-sm-2 text-center">
                            <a onclick="kode()" class="btn btn-outline-warning"> Generate Voucher</a>
                        </div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleSelect"
                            class="col-sm-2 col-form-label">Nominal</label>
                        <div class="col-sm-10">
                            <select name="nominal" id="exampleSelect" class="form-control" required>
                                <option value="50000">Rp 50.000</option>
                                <option value="100000">Rp 100.000</option>
                                <option value="150000">Rp 150.000</option>
                            </select>
                        </div>
                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail"
                            class="col-sm-2 col-form-label">Berlaku Sampai</label>
                        <div class="col-sm-10"><input name="expired" placeholder="status" type="date"
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
<script>
function kode() {
    let length = 6;
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    let result = ' ';
    const charactersLength = characters.length;
    for (let i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    document.getElementById('kode_voucher').value = result;

}
</script>