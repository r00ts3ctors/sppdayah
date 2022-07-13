<div class="row match-height">
    <div class="col-lg-12 mb-2">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"> </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12">

        <div class="card">
            <div class="card-header">

                <h4 class="card-title">Daftar Katagori</h4>
                <p>Tambahkan daftar katagori Penerimaan / Pengeluaran untuk di gunakan dalam sistem.</p>
            </div>
            <div class="card-block">
                <div class="card-body">
                    <form action="<?php echo base_url('petugas/Penerimaan/saveKatagori'); ?>" method="post">


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Nama Transaksi</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Contoh : SPP">
                                </div>
                            </div>
                            <div class="col-lg-3">

                                <div class="form-group">
                                    <label for="">Jenis Transaksi</label>

                                    <select id="" class="form-control" name="jenis">
                                        <option value="1">Penerimaan</option>
                                        <option value="2">Pengeluaran</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">

                                <div class="form-group">
                                    <label for="">Type Transaksi</label>

                                    <select id="" class="form-control" name="typetransaksi">
                                        <option value="0">-</option>
                                        <option value="1">Internal</option>
                                        <option value="2">External</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Keterangan Transaksi</label>
                                    <input type="text" class="form-control" placeholder="Contoh : SPP Santri" name="ket">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">TAMBAH TRANSAKSI</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List Katagori Transaksi Pengeluaran</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>

                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">


                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Transaksi</th>
                                    <th>Jenis</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomor = 1;
                                foreach ($pengeluaran as $key => $value) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $nomor++; ?></th>
                                        <td><?php echo $value['nama_transaksi']; ?></td>
                                        <td>
                                            <?php
                                            if ($value['jenis_transaksi'] == 1) {
                                                echo "Penerimaan";
                                            } else {
                                                echo "Pengeluaran";
                                            }

                                            ?>
                                        </td>

                                        <td>

                                            <a href="<?php echo base_url('petugas/Penerimaan/hapusKatagori/' . $value['id']); ?>" class="badge badge-danger">Hapus</a>

                                        </td>
                                    </tr>

                                <?php }

                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">List Katagori Transaksi Penerimaan</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>

                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">


                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Transaksi</th>
                                    <th>Jenis</th>
                                    <th>Type</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $nomor = 1;
                                foreach ($penerimaan as $key => $value) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $nomor++; ?></th>
                                        <td><?php echo $value['nama_transaksi']; ?></td>
                                        <td>
                                            <?php
                                            if ($value['jenis_transaksi'] == 1) {
                                                echo "Penerimaan";
                                            } else {
                                                echo "Pengeluaran";
                                            }

                                            ?>
                                        </td>

                                        <td>
                                            <?php
                                            if ($value['type_transaksi'] == 1) {
                                                echo "Internal";
                                            } else {
                                                echo "External";
                                            }

                                            ?>

                                        </td>

                                        <td>
                                            <a href="<?php echo base_url('petugas/Penerimaan/hapusKatagori/' . $value['id']); ?>" class="badge badge-danger">Hapus</a>

                                        </td>
                                    </tr>

                                <?php }

                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>