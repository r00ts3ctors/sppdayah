   <div class="row">
       <div class="col-lg-12 mb-2">

           <form action="<?php echo base_url('petugas/Penerimaan/cariData'); ?>" method="post">
               <div class="row">

                   <div class="col-lg-4">
                       <input type="text" name="thnajar" id="thnajr" class="form-control">
                   </div>
                   <div class="col-lg-4">
                       <select name="kelas" id="" class="form-control">
                           <?php
                            foreach ($isi as $key => $value) { ?>
                               <option value="<?php echo $value['id']; ?>"><?php echo $value['kelas']; ?> - Sisa : <?php echo ($value['kapasistas'] - $value['terisi']); ?></option>
                           <?php  }
                            ?>

                       </select>

                   </div>
                   <div class="col-lg-2">
                       <input type="text" name="cari" id="" placeholder="NIS" class="form-control">
                   </div>
                   <div class="col-lg-2">

                       <button type="submit" class="btn btn-sm btn-default mx-auto">Cari</button>
                   </div>
               </div>

           </form>
       </div>
   </div>

   <div class="row">
       <div class="col-md-6">
           <div class="card">
               <div class="card-header">
                   <h4 class="card-title" id="striped-row-layout-basic">Informasi Santri</h4>
                   <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

               </div>
               <div class="card-content collpase show">
                   <div class="card-body">

                       <form class="form form-horizontal striped-rows form-bordered">
                           <div class="form-body">
                               <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                               <div class="form-group row">
                                   <label class="col-md-3 label-control" for="projectinput1">Nama </label>
                                   <div class="col-md-9">
                                       <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="fname">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-3 label-control" for="projectinput2">NIS</label>
                                   <div class="col-md-9">
                                       <input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-3 label-control" for="projectinput3">Kelas</label>
                                   <div class="col-md-9">
                                       <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
                                   </div>
                               </div>
                               <div class="form-group row last">
                                   <label class="col-md-3 label-control" for="projectinput4"> Telepon</label>
                                   <div class="col-md-9">
                                       <input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
                                   </div>
                               </div>


                           </div>

                       </form>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-6">
           <div class="card">
               <div class="card-header">
                   <h4 class="card-title" id="striped-row-layout-basic">Detail Penerimaan</h4>
                   <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

               </div>
               <div class="card-content collpase show">
                   <div class="card-body">

                       <form class="form form-horizontal striped-rows form-bordered">
                           <div class="form-body">
                               <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                               <div class="form-group row">
                                   <label class="col-md-3 label-control" for="projectinput1">Bulan</label>
                                   <div class="col-md-9">
                                       <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="fname" value="<?php echo date('F'); ?>">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-3 label-control" for="projectinput2">Nilai Bayar</label>
                                   <div class="col-md-9">
                                       <input type="text" id="harga" class="form-control" placeholder="Nilai Bayar">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-md-3 label-control" for="projectinput3">Metode</label>
                                   <div class="col-md-9">
                                       <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
                                   </div>
                               </div>
                               <div class="form-group row last">
                                   <label class="col-md-3 label-control" for="projectinput4">Pembayaran</label>
                                   <div class="col-md-9">
                                       <input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
                                   </div>
                               </div>




                       </form>
                   </div>
               </div>
           </div>
       </div>


   </div>

   <div class="row">
       <div class="col-md-6">
           <div class="card">
               <div class="card-header">
                   <h4 class="card-title" id="striped-row-layout-basic">Iuran SPP</h4>
                   <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

               </div>
               <div class="card-content collpase show">
                   <div class="card-body">
                       <div class="card-text">
                           <table class="table table-hover">

                               <tr>
                                   <th>Biaya SPP</th>
                                   <td>3.000.000</td>
                               </tr>
                               <tr>
                                   <th>Sisa SPP</th>
                                   <td>300.000</td>
                               </tr>
                               <tr>
                                   <th> Bulan Terbayar</th>
                                   <td>3</td>
                               </tr>

                           </table>
                       </div>
                       <div class="card-body">
                           <p>Rincian Pembayaran</p>
                           <div class="card">
                               <div class="table-responsive">
                                   <table class="table">
                                       <thead>
                                           <tr>
                                               <th>#</th>
                                               <th>Bulan</th>
                                               <th>Jenis</th>
                                               <th>Nilai</th>
                                               <th>Metode</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           <tr>
                                               <th scope="row">1</th>
                                               <td>September</td>
                                               <td>SPP Santri Baru Sekali</td>
                                               <td>200.000</td>
                                               <td>Transfer</td>
                                           </tr>

                                       </tbody>
                                   </table>
                               </div>
                           </div>
                       </div>

                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-6">
           <div class="card">
               <div class="card-header">
                   <h4 class="card-title" id="striped-row-layout-basic">Biaya Makan</h4>
                   <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

               </div>
               <div class="card-content collpase show">
                   <div class="card-body">
                       <div class="card-text">
                           <table class="table table-hover">

                               <tr>
                                   <th>Biaya Makan</th>
                                   <td>3.000.000</td>
                               </tr>
                               <tr>
                                   <th>Tempat </th>
                                   <td>300.000</td>
                               </tr>
                               <tr>
                                   <th> Status</th>
                                   <td> Terbayarkan</td>
                               </tr>

                           </table>
                       </div>
                       <div class="card-body">
                           <p>Rincian Pembayaran</p>
                           <div class="card">
                               <div class="table-responsive">
                                   <table class="table">
                                       <thead>
                                           <tr>
                                               <th>#</th>
                                               <th>Bulan</th>
                                               <th>Jenis</th>
                                               <th>Nilai</th>
                                               <th>Metode</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           <tr>
                                               <th scope="row">1</th>
                                               <td>September</td>
                                               <td>Dapur Umum Merdeka Jaya Baru Sekali</td>
                                               <td>200.000</td>
                                               <td>Transfer</td>
                                           </tr>

                                       </tbody>
                                   </table>
                               </div>
                           </div>
                       </div>

                   </div>
               </div>
           </div>
       </div>
   </div>