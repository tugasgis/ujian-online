<div class="row col-md-12">
  <div class="panel panel-info">
    <div class="panel-heading">Selamat datang di At-Tashdiq Indonesiam Ujian Online</div>
    <div class="panel-body">
        <div class="alert alert-info">Form Konfrimasi <b><?php echo $this->session->userdata('admin_nama')."</b>. Username : <b>".$sess_user; ?></b></div>
		<div class="tombol-kanan">
        <a class="btn btn-success btn-sm tombol-kanan" href="#" onclick="return m_mapel_e(0);"> &nbsp;&nbsp;Konfrimasi</a>
      </div>
        <?php 
        if (!empty($p_mapel)) {
        	echo "<h3>Mata pelajaran yang Anda ikuti : </h3><ul>";
        	foreach ($p_mapel as $p) {	
        		echo '<li>'.$p->nama.'</li>';
        	}
        	echo '</ul>';
        }
        ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="m_mapel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="myModalLabel">Data Konfrimasi Pembayaran</h4>
      </div>
      <div class="modal-body">
          <form name="f_mapel" id="f_mapel" onsubmit="return m_mapel_s();">
            <input type="hidden" name="id" id="id" value="0">
              <table class="table table-form">
                <tr><td style="width: 25%">Nama Lengkap</td><td style="width: 75%"><input type="text" class="form-control" name="nama" id="nama" required></td></tr>
                <tr><td style="width: 25%">Alamat</td><td style="width: 75%"><input type="text" class="form-control" name="alamat" id="" required></td></tr>
                <tr><td style="width: 25%">Bank</td><td style="width: 75%">
						<select class="form-control" name="jawaban" id="jawaban" required>
							<?php $no=1;
				   foreach ($hasil1 as $data2){?>
          <option value="<?php echo $data2->id_bank;?>"><?php echo $no++;?>. <?php echo $data2->bank;?></option>
        <?php }?>
						</select>
					</td>
				</tr>
                <tr><td style="width: 25%">No.Rek</td><td style="width: 75%"><input type="text" class="form-control" name="no_rek" id="no_rek" required></td></tr>
                <tr><td style="width: 25%">Bukti Pembayaran</td><td style="width: 75%"><input type="file" class="form-control" name="img" id="nama" required></td></tr>
              </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary">Simpan</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
      </div>
        </form>
    </div>
  </div>
</div>