<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Kasir</h1>
    </div>

    <!-- content tambah promo -->
    <!-- Nested Row within Card Body -->

    <div class="tab-content">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form method="POST" action="" autocomplete="off" id="tambah_kasir">
                    <div class="position-relative row form-group"><label for="exampleEmail"
                            class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" value="<?= $edit['username'] ?>" name="username_lama" hidden>
                            <input type="text" value="<?= $edit['id'] ?>" name="id" hidden>
                            <input name="username" placeholder="Nama Kasir" value="<?= $edit['username'] ?>" type="text"
                                class="form-control" autocomplete="off" required />
                            <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                        </div>

                    </div>
                    <div class="position-relative row form-group"><label for="exampleEmail"
                            class="col-sm-2 col-form-label">Cabang</label>
                        <div class="col-sm-10">
                            <select name="kode_cabang" id="exampleSelect" class="form-control" required>
                                <option selected value="<?= $edit['kode_cabang'] ?>">
                                    <?= $edit['kode_cabang'].' - '.$edit['cabang'] ?></option>
                                <?php
                                foreach ($cabang as $cbg) {
                                    if($cbg->kode_cabang!=$edit['kode_cabang']){
                                        echo '<option value="'.$cbg->kode_cabang.'">'.$cbg->kode_cabang.' - '.$cbg->cabang.'</option>';
                                    }
                                }
                                ?>

                            </select>
                        </div>

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
<script>
$(function() {
    $('#ambah_kasir').disableAutoFill();
});
</script>
</div>