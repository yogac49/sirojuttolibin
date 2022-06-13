<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1 style="margin-bottom: 20px;">
            Tabel Pembayaran
        </h1>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tgl_bayar">Tanggal Pembayaran</label>
                    <input type="date" name="tgl_bayar" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nama_rekening">Nama Pemilik Rekening</label>
                    <input type="text" name="nama_rekening" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nama_bank">Nama Bank</label>
                    <input type="text" name="nama_bank" class="form-control">
                </div>

                <div class="form-group">
                    <label for="upload_pembayaran">Upload bukti</label>
                    <input type="file" name="upload_pembayaran" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paypal"> Bayar</i></button>
                    <a href="<?= site_url('dataPendaftaran'); ?>" class="btn btn-primary"><i class="fa fa-table"></i> Data Pendaftaran</a>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- /.content-wrapper -->