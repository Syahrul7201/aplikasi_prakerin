<main>



    <div id="data">
      <form id="orderForm">
<div class="col-lg-10 col-md-10 col-12 mx-auto">
<div class="card">
    <!-- Rounded tabs -->
    <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav">
      <li class="nav-item flex-sm-fill">
        <a id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" class="nav-link border-0 text-uppercase font-weight-bold active">(1) ISI DATA</a>
      </li>
      <li class="nav-item flex-sm-fill">
        <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">(2) PEMBAYARAN</a>
      </li>
      <li class="nav-item flex-sm-fill">
        <a class="nav-link border-0 text-uppercase font-weight-bold">(3) SELESAI</a>
      </li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div id="home" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">
<div class="card">
  <div class="card-header">
    Data Pemesanan
  </div>
  <div id="data">
      <form id="orderForm">
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6 col-md-12">

          <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input name="buyer_name" type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Username" aria-describedby="basic-addon1">

</div>
      </div>
      <div class="col-lg-3 col-md-6">
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input name="buyer_phone" type="text" class="form-control" placeholder="No. Handphone" aria-label="Username" aria-describedby="basic-addon1">
</div>
      </div>
      <div class="col-lg-3 col-md-6">
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input name="buyer_email" type="text" class="form-control" placeholder="Alamat Email" aria-label="Username" aria-describedby="basic-addon1">
</div>
      </div>
    </div>
  </div>
</div>
</div>


<div class="card mt-2">
  <div class="card-header">Data Penumpang</div>
  <div class="card-body">
    <div class="accordion" id="accordionExample">
  <?php
              $jml = 0;
              foreach($cart as $c){
                $jml = $c['jumlah'];
              }
              for ($i=1; $i <= $jml ; $i++) {
               ?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$i?>" aria-expanded="true" aria-controls="collapseOne">
        Data Penumpang<?=$i?>
      </button>
    </h2>
    <div id="collapse<?=$i?>" class="accordion-collapse collapse <?php if($i==1) echo"show"; ?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="row">
          <div class="col-md-4">
          <select name="p_title<?=$i?>" class="form-select" aria-label="Default select example">
          <option value=""></option>
                        <option value="Tn">Tuan</option>
                        <option value="Ny">Nyonya</option>
</select>
          </div>

          <div class="col-md-8">
          <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input name="p_full_name" type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Username" aria-describedby="basic-addon1">

</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php } ?>


  
<div class="card mt-2">
  <div class="card-header">Pesanan</div>
  <div class="card-body">
  <?php foreach($cart as $c){
                  $i = $this->m_general->gRuteW($c['id_rute']);
                  ?>
                  <div class="row">
                    <b><?=hari_tgl($i[0]->depart_at)?></b><br>
                    <table class="detail border border-light text-center text-light fw-bold align-middle bg-primary">
                    <tbody>
                      <tr>
                        <td class="bg-light ">
                          <img style="width: 100px; height:100px;" src="<?=site_url()."assets/images/company_logo/".$i[0]->company_logo?>"></td>
                          <td class="border border-light">
                            <?=$i[0]->company_name?><br><span class="light"><?=$i[0]->class_name?></span>
                          </td>
                        
                            <td style="text-align:center">
                              <span class="t"><?=stime($i[0]->depart_time)?></span>
                              <p style="text-align:center"><?=$i[0]->place_name_from?></p>
                            </td>
                            <td style="text-align:center">
                            <i class="fas fa-arrow-right"></i>
                            </td>
                            <td style="text-align:center">
                              <span class="t"><?=stime($i[0]->arrive_time)?></span>
                              <p style="text-align:center"><?=$i[0]->place_name_to?></p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <?php } ?>
                  </div>
                  
               

<div class="card mt-2">
  <div class="col-12 text-center">
<a class="btn btn-primary fw-bold d-block" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Lanjutkan pembayaran</a>


  </div>
  </div>
  </div>
  </div>  
                

  




      
      <div id="profile" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
        <div class="card">
          <div class="card-header">Metode Pembayaran</div>
          <div class="card-body">
          <div class="row">
                            <div class="col m6">
                              <input type="radio" name="method" value="1" id="test1">
                              <label for="test1">Transfer Bank</label>
                            </div>
                            <div class="col m6">
                              <input type="radio" name="method" value="2" id="test2">
                              <label for="test2">Kartu Kredit</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="kartu" class="card mt-2">
                        <div class="card-header"> Informasi Kartu Kredit</div>
                        <div class="card-body white">
                          <div class="row">

                          <div class="col-6">
                          <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input name="optionsRadios" type="text" class="form-control" placeholder="Nama Pemegang Kartu" aria-label="Username" aria-describedby="basic-addon1">
</div>
                            </div>
                            <div class="col-6">
                            <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input name="optionsRadios" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
                            </div>
                          </div>
                          <div class="row">
                          <div class="col-6">
                            <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input name="optionsRadios" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
                            </div>
                            <div class="col-3">
                            <select name="kelas" class="form-select" aria-label="Default select example">
                            <option value="">Bulan</option>
                                <option value="1">VIP</option>
                                <option value="2">Bisnis</option>
                                <option value="3">Ekonomi</option>
                              </select>
                           
                            </div>
                            <div class="col-3">
                            <select name="kelas" class="form-select" aria-label="Default select example">
                            <option value="">Tahun</option>
                                <option value="1">VIP</option>
                                <option value="2">Bisnis</option>
                                <option value="3">Ekonomi</option>
                              </select>
                            
                            
                          </div>
                          </div>
                        </div>
                      </div>
                      <div id="transfer" class="card mt-2">
                        <div class="card-header">Informasi Bank</div>
                        <div class="card-body white">
                          <div class="row">
                            <div class="col-4">
                          <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input name="optionsRadios" type="text" class="form-control" placeholder="Nama Akun" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>

                          
                          <div class="col-4">
                            <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input name="optionsRadios" type="text" class="form-control" placeholder="Nomor rekening" aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>
                            <div class="col-4">
                            <select name="kelas" class="form-select" aria-label="Default select example">
                            <option value="">Pilih Bank</option>
  <option value="1">BCA</option>
  <option value="2">BNI</option>
  <option value="3">BRI</option>
</select>
                          </div>
                        </div>
                        </div>
                        </div>
                    

                      <div class="card mt-2">
                        <div class="card-header">Rincian Harga</div>
                        
                        <div class="card-body">
                        <div class="col-12">
                          <table class="border table-bordered">
                            <?php 
                            $total = 0 ;
                            foreach($cart as $c){
                              $i = $this->m_general->gRuteW($c['id_rute']);
                              $harga = $i[0]->price*$c['jumlah'];
                              $total = $total+$harga;
                              ?>
                              <tr>
                                <td  style="width:60%"><?=$i[0]->company_name?></td>
                                <td style="text-align: right;"><b><?=rupiah($i[0]->price)?> </b> x <?=$c['jumlah']?> Penumpang</td>
                              </tr>
                              <?php } ?>
                              <tr id="promo-t" style="display: none">
                                <td id="code" style="width:60%">2</td>
                                <td id="min" style="text-align: right;"><b>2</b></td>
                              </tr>
                              <tr>
                                <td>Total</td>
                                <td style="text-align: right;"><b class="total blue-text"><?=rupiah($total)?></b></td>
                              </tr>
                            </table>
                          </div>
                          </div>
                          </div>
                        

                      <div class="col m4 s12">
                       <div class="card mt-2">
                        <div class="card-header">Kode Promo</div>
                        <div class="card-body">
                          <div class="row">
                            <div id="msg"></div>
                          </div>
                          <div class="row">

                            <div class="input-group mb-3">
  <input name="promo_code" type="text" class="form-control" placeholder="Masukan Kode Promo" aria-label="Recipient's username" aria-describedby="button-addon2">
  <a onclick="cekCode(<?=$total?>)" class="btn btn-primary">Cek</a>
</div>

                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card mt-2">
                        <div class="card-header"> Total</div>
                        <div class="card-body white">
                          <span>Total Harga</span>
                          <h4 class="light total blue-text"><?=rupiah($total)?></h4>
                        </div>
                      </div>
                      <div class="col-12 text-center">
                      <button type="submit" id="pay" class="btn btn-primary d-flex" style="width: 100%">
                         Lakukan Proses Pembayaran</button>
                         </div>
                        </form>
                    </div>
                  </div>
                </div>




  





<!--

      <div id="contact" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-5">
        <p class="text-muted">33333Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    End rounded tabs -->
  </div>
  </div>



 


 

                            
        </main>
