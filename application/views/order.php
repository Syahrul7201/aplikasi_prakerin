<main>

    <div class="col-lg-10 col-md-10 mx-auto my-2">

  <div class="card-header bg-info text-white">
    <h4 class="light">Konfirmasi Pesanan</h4>
  </div>
  </div>




      <div class="col-sm-12 col-md-10 col-lg-10 col-12 mx-auto my-2">
        <?php foreach($cart as $c){
          $i = $this->m_general->gRuteW($c['id_rute']);
          ?>
          <div class="card grey lighten-4 rounded-0">
            <div class="card-body">
              <table class="table table-bordered border-dark align-middle text-center">
                <tr>
                  <td>
              <?=$i[0]->place_name_from?> <?=$i[0]->p_name_from?> <i class="fas fa-angle-right"></i> <?=$i[0]->place_name_to?> <?=$i[0]->p_name_to?> 
              </td>
              <td>
              <i class="fas fa-users"></i><?=$c['jumlah']?> Penumpang 
              </td>
              <td>
              <i class="fas fa-layer-group"></i> <?=$i[0]->class_name?>
              </td>  
            </tr>  
            </table>
            </div>
          </div>

          <div class="card grey lighten-4 rounded-0">
            <div class="title-card grey lighten-4">
              <h5 class="fw-bold">Detail Pemesanan</h5></div>
              <div class="card-body ">
                <b><?=hari_tgl($i[0]->depart_at)?></b><br>
                <table>
                  <tr>
                    
                    </tr>
                  </table>
                  
                  
                  <table class="detail table border border-light align-middle text-center bg-primary text-light fw-bold">
                    
                    <tbody>
                      <tr>
                      <td class="bg-light" width="80px">
                      <img style="width: 60px" src="<?=site_url()."assets/images/company_logo/".$i[0]->company_logo?>"></td>
                      <td class="border-start border-end"><?=$i[0]->company_name?><br><span class="light"><?=$i[0]->class_name?></span>
                      </td>
                        <td>
                          <span class="t"><?=stime($i[0]->depart_time)?></span>
                          <p><?=$i[0]->place_name_from?></p>
                        </td>
                        <td>
                        <i class="fas fa-arrow-right"></i>
                        </td>
                        <td>
                          <span class="t"><?=stime($i[0]->arrive_time)?></span>
                          <p><?=$i[0]->place_name_to?></p>
                        </td>
                        <td class="border-start">
                          <span class="t"><?=sel_jam($i[0]->depart_at.' '.$i[0]->depart_time,$i[0]->arrive_at.' '.$i[0]->arrive_time)?></span>
                          <p>Langsung</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <?php } ?>
            </div>
            <div class="col-md-10 col-lg-10 col-sm-12 mx-auto my-2">
              <div class="card grey lighten-4 rounded-0">
                <div class="title-card grey lighten-4"><h5 class="fw-bold">Rincian Harga</h5></div>
                <div class="card-body ">
                  <table class="table border border-dark">
                    <?php 
                    $total = 0 ;
                    foreach($cart as $c){
                      $i = $this->m_general->gRuteW($c['id_rute']);
                      $harga = $i[0]->price*$c['jumlah'];
                      $total = $total+$harga;
                      ?>
                      <tr>
                        <td  style="width:60%"><?=$i[0]->company_name?> (Penumpang) x<?=$c['jumlah']?></td>
                        <td style="text-align: right;"><b><?=rupiah($harga)?></b></td>
                      </tr>
                      <?php } ?>
                      <tr>
                        <td>Harga yang harus anda bayar</td>
                        <td style="text-align: right;"><b><?=rupiah($total)?></b></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <a href="<?=site_url('order/checkout')?>" class="btn btn-success btn-large" style="width: 100%">
                <i class="fas fa-cart-plus"></i> Lanjutkan Pesanan</a>
                </div>



        </main>