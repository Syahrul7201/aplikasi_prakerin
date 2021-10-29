<main>
<div class="col col-12 mx-auto col-md-10">
  <div class="card">
  
    <div class="row"> 
      
      <?php if(!isset($pulang)){ ?>
      <div style="display: <?php if(!empty($_SESSION['cart'])){echo "block";}else{echo "none";} ?>" id="orderBtn">
      <div class="position-fixed mx-2" style="margin-top: 10px; z-index:100;">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Checkout
</button>
        </div>
      </div>
      <div class="col col-sm-12 col-md-6">
        <div class="card mx-2 my-2 grey">
          <div class="card-body">
            <span class="card-title">
              <?php if(!empty($from)&&!empty($to)){?>
              <?=$from->city_name?> (<?=$from->place_code?>)-<?=$from->place_name?> → <?=$to->city_name?> (<?=$to->place_code?>)-<?=$to->place_name?>
              <?php } ?>
            </span>
            <div class="row">
              <div class="col-sm-3">
                <span class="light"><i class="fas fa-calendar-week"></i><?=hari_tgl($date_g)?></span>
              </div>
              <div class="col-sm-3">
                <span class="light"><i class="fas fa-users"></i> <?=$ps?> Penumpang</span>
              </div>
              <div class="col-sm-3">
               <span class="light"><i class="fas fa-layer-group"></i> <?=$class?></span>
             </div>
           </div>
           <table class="tabel tabel-stripped bg-light-mt-2">
            <thead class="bg-primary text-light">
              <tr>
                <th>Nama Maskapai</th>
                <th>Berangkat</th>
                <th></th>
                <th>Tiba</th>
                <th>Durasi</th>
                <th width="15%">Harga Per Orang</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              if(empty($berangkat)){
                ?>
                <tr>
                  <td colspan="6">
                    <center>
                      <i style="font-size: 50px" class="fas fa-times-circle"></i><br>
                      <h5 class="light">Pencarian tidak ada hasil</h5>
                    </center>
                  </td>
                </tr>
                <?php
              }else{
                foreach($berangkat as $b){?>
                <tr>
                  <td>
                    <img src="<?=site_url().'assets/images/company_logo/'.$b->company_logo.''?>" style="width:100px; height:100px;">
                    <span><?=$b->company_name?></span>
                  </td>
                  <td style="text-align:center">
                    <span class="t"><?=stime($b->depart_time)?></span>
                    <p><?=$b->place_name_from?></p>
                  </td>
                  <td style="text-align:center">
                  <i class="fas fa-long-arrow-alt-right"></i>
                  </td>
                  <td style="text-align:center">
                    <span class="t"><?=stime($b->arrive_time)?></span>
                    <p><?=$b->place_name_to?></p>
                  </td>
                  <td>
                    <span class="t"><?=sel_jam($b->depart_at.' '.$b->depart_time,$b->arrive_at.' '.$b->arrive_time)?></span>
                    <p>Langsung</p>
                  </td>
                  <td style="text-align:center">
                    <span class="price btn-primary"><?=rupiah($b->price)?></span>
                    <?php if(!empty($_SESSION['cart'])){
                      foreach($_SESSION['cart'] as $c){
                        if($c['id_rute']==$b->id_rute){
                          $text='BATAL';
                          $onclick='delCart';
                          $disabled = '';
                        }else{
                          $text='PILIH';
                          $onclick='addCart';
                          $disabled=' disabled';
                        }
                      }
                      ?>
                      <a id="b<?=$b->id_rute?>" onclick="<?=$onclick?>(<?=$b->id_rute?>,<?=$ps?>)" style="width: 100%" class="btn btn-primary pilih<?=$disabled?>"><?=$text?></a>
                      <?php }else{
                        ?>
                        <a id="b<?=$b->id_rute?>" onclick="addCart(<?=$b->id_rute?>,<?=$ps?>)" style="width: 100%" class="btn btn-primary pilih">Pilih</a>
                        <?php
                      } ?>
                    </td>
                  </tr>
                  <?php }
                } ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
      <?php }else{
        ?>
        <div style="display: none" id="orderBtn">
          <div class="position-fixed mx-2" style="margin-top: 10px; z-index:100;">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Checkout
</button>
          </div>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="card mx-2 my-2">
            <div class="card-body">
              <span class="card-title">
                <?php if(!empty($from)&&!empty($to)){?>
                <?=$from->city_name?> (<?=$from->place_code?>)-<?=$from->place_name?> <i class="fas fa-exchange-alt"></i> <?=$to->city_name?> (<?=$to->place_code?>)-<?=$to->place_name?>
                <?php } ?>
              </span>
              <div class="row">
                <div class="col-sm-6 col-md-2">
                  <span class="light"><i class="fas fa-users"></i> <?=$ps?> Penumpang</span>
                </div>
                <div class="col-sm-6 col-md-2">
                 <span class="light"><i class="fas fa-layer-group"></i> <?=$class?></span>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-sm-12 col-md-12 col-lg-6">
        <div class="card mx-2 my-2 grey lighten-4">
          <div class="card-body overflow-auto">
            <span class="card-title">Berangkat</span>
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <span class="light"><i class="fas fa-calendar-week"></i> <?=hari_tgl($date_g)?></span>
              </div>
            </div>
            <table class="table table-striped bg-light mt-2">
              <thead class="bg-primary text-light">
                <tr>
                  <th>Nama Maskapai</th>
                  <th>Berangkat</th>
                  <th></th>
                  <th>Tiba</th>
                  <th>Durasi</th>
                  <th width="15%">Harga Per Orang</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                if(empty($berangkat)){
                  ?>
                  <tr>
                    <td colspan="6">
                      <center>
                        <i style="font-size: 50px" class="fas fa-times-circle"></i><br>
                        <h5 class="light">Pencarian tidak ada hasil</h5>
                      </center>
                    </td>
                  </tr>
                  <?php
                }else{
                  foreach($berangkat as $b){?>
                  <tr>
                    <td>
                      <img src="<?=site_url().'assets/images/company_logo/'.$b->company_logo.''?>" style="width:100px; height:100px;">
                      <p><?=$b->company_name?></p>
                    </td>
                    <td style="text-align:center">
                      <span class="t"><?=stime($b->depart_time)?></span>
                      <p><?=$b->place_name_from?></p>
                    </td>
                    <td style="text-align:center">
                    <i class="fas fa-long-arrow-alt-right"></i>
                    </td>
                    <td style="text-align:center">
                      <span class="t"><?=stime($b->arrive_time)?></span>
                      <p><?=$b->place_name_to?></p>
                    </td>
                    <td>
                      <span class="t"><?=sel_jam($b->depart_at.' '.$b->depart_time,$b->arrive_at.' '.$b->arrive_time)?></span>
                      <p>Langsung</p>
                    </td>
                    <td style="text-align:center">
                      <span class="price blue-text darken-text-5"><?=rupiah($b->price)?></span>
                      <a id="b<?=$b->id_rute?>" onclick="addCartB(<?=$b->id_rute?>,<?=$ps?>)" style="width: 100%" class="btn btn-primary pilih_b">Pilih</a>
                    </td>
                  </tr>
                  <?php }
                } ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-6">
        <div class="card mx-2 my-2 grey lighten-4">
          <div class="card-body overflow-auto">
            <span class="card-title">Pulang</span>
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <span class="light"><i class="fas fa-calendar-week"></i> <?=hari_tgl($date_b)?></span>
              </div>
            </div>
            <table class="table table-striped bg-light mt-2">
              <thead class="bg-primary text-light">
                <tr>
                  <th>Nama Maskapai </th>
                  <th>Berangkat</th>
                  <th></th>
                  <th>Tiba</th>
                  <th>Durasi</th>
                  <th width="15%">Harga Per Orang</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                if(empty($pulang)){
                  ?>
                  <tr>
                    <td colspan="6">
                      <center>
                        <i style="font-size: 50px" class="fas fa-times-circle"></i><br>
                        <h5 class="light">Pencarian tidak ada hasil</h5>
                      </center>
                    </td>
                  </tr>
                  <?php
                }else{
                  foreach($pulang as $b){?>
                  <tr>
                    <td>
                      <img src="<?=site_url().'assets/images/company_logo/'.$b->company_logo.''?>" style="width:100px; height:100px;">
                      <p><?=$b->company_name?></p>
                    </td>
                    <td style="text-align:center">
                      <span class="t"><?=stime($b->depart_time)?></span>
                      <p><?=$b->place_name_from?></p>
                    </td>
                    <td style="text-align:center">
                    <i class="fas fa-long-arrow-alt-right"></i>
                    </td>
                    <td style="text-align:center">
                      <span class="t"><?=stime($b->arrive_time)?></span>
                      <p><?=$b->place_name_to?></p>
                    </td>
                    <td>
                      <span class="t"><?=sel_jam($b->depart_at.' '.$b->depart_time,$b->arrive_at.' '.$b->arrive_time)?></span>
                      <p>Langsung</p>
                    </td>
                    <td style="text-align:center">
                      <span class="price blue-text darken-text-5"><?=rupiah($b->price)?></span>
                      <a id="p<?=$b->id_rute?>" onclick="addCartP(<?=$b->id_rute?>,<?=$ps?>)" style="width: 100%" class="btn blue pilih_p">Pilih</a>
                    </td>
                  </tr>
                  <?php }
                } ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
      <?php
    } ?>
  </div>
</div>
</div>













<div class="modal fade" id="staticBackdrop" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog position-absolute top-50 start-50 translate-middle me-5">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Detail Pesanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div id="tblorder"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
        <a href="<?=site_url('order')?>" class="btn btn-primary mx-2">Lanjut</a>
      </div>
    </div>
  </div>
</div>



</main>
