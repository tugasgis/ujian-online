<html>
<head>
	<title>Membuat Menu Responsive Dengan CSS Dan JQuery | www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('___/css/bootstrap.css')?>">	
	
	<link rel="shortcut icon" href="<?php echo base_url('___/img/photo_2017-03-29_07-31-44.png')?>">
	<link href="<?php echo base_url(); ?>___/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>___/css/style.css" rel="stylesheet">
	
	<script type="text/javascript" src="<?php echo base_url();?>___/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>___/js/bootstrap.js"></script>
</head>
<body>	

	<!-- membuat menu navigasi -->
	<nav class="navbar navbar-default">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">At-Tashdiq Indonesia</a>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#">Profil <span class="sr-only">(current)</span></a></li>
					<li><a href="#">Portofolio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tutorial <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">HTML</a></li>
							<li><a href="#">CSS</a></li>
							<li><a href="#">Javascript</a></li>							
							<li><a href="#">JQuery</a></li>							
							<li><a href="#">CodeIgniter</a></li>
						</ul>
					</li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo site_url('adm/login')?>"><button type="button" class="btn btn-primary navbar-btn">Login</button></a></li>
					<li><a><button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#modal-daftar">Daftar</button></a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>	
 
	<div class="modal fade" id="modal-daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal Daftar</h4>
				</div>
				<div class="modal-body">
					<form action="<?php echo site_url('daftar/tambahdata'); ?>" method="POST" >
					<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>
						<div class="form-group">
							<label>Nama Panggilan</label>
							<input type="text"  placeholder="Contoh : Bang jack" class="form-control" id="username" name="username" required>
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input type="text" class="form-control"  placeholder="Contoh : Jaka Karang Tunggal" id="name" name="nama" required>
						</div>
						<div class="form-group">
							<label>No.KTP / No.Induk Pelajar</label>
							<input type="text" placeholder="Masukan No.KTP atau No.Mahasiswa anda" onkeypress="return hanyaAngka(event)" class="form-control " maxlength="30" name="id" id="id" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control"  placeholder="Contoh : jaka@karang.com" id="email" name="email"required>
						</div>
						<div class="form-group">
							<label>No Handphone</label>
							<input type="text"  onkeypress="return hanyaAngka(event)"  placeholder="Masukan No.HP anda" class="form-control" name="no_hp" id="no_hp" required>
						</div>
						<div class="form-group">
							<label>Kampus / Kantor</label>
							<input type="text" class="form-control" placeholder="Contoh : Politeknik Manufaktur atau kantor DPRD Bandung " name="kampuskantor" id="kampuskantor" required>
						</div>
						
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" class="form-control"  placeholder="Contoh : jalan setrasari mall" name="alamat" id="alamat" required>
						</div>	
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password" id="password">
							<input type="hidden" class="form-control" name="level" id="level" value="siswa">
						</div>	
<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-success" name="submit" value="Simpan">
					
				</div>						
				</div>
				
			</div>
		</div>
	</div>
	<!-- akhir modal -->
 
	<!-- akhir menu navigasi -->
 
	<div class="container">	
		<div class="col-md-12" style="padding: 0">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Tutorial</a></li>
				<li class="active">Tutorial Bootstrap : Membuat Template Sederhana Dengan Bootstrap</li>
			</ol>
		</div>
 
		<div class="col-md-12" style="padding: 0">
			<h2 style="margin-top: 0">Tutorial Membuat Template Sederhana Dengan Bootstrap</h2>
			<br/>
			<div class="thumbnail">
				<img class="img-circle" src="<?php echo base_url('___/img/iStock_000012204568_Large.jpg')?>">
			</div>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				lorem
			</p>
 
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				lorem
			</p>
			<table class="table table-bordered table-hover">
				<tr>
					<th class="col-md-1">No</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th class="col-md-1">Usia</th>
				</tr>
				<tr>
					<td>1</td>
					<td>Diki Alfarabi Hadi</td>
					<td>Aceh</td>
					<td>23</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Diki Alfarabi Hadi</td>
					<td>Aceh</td>
					<td>23</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Diki Alfarabi Hadi</td>
					<td>Aceh</td>
					<td>23</td>
				</tr>
			</table>
			
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				lorem
			</p>
				
 
			<br/>	
			<h3>Related Posts</h3><br/>
 
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="<?php echo base_url('___/img/item-03.png')?>" alt="...">
					<div class="caption">
						<h3><a href="#">Tutorial CodeIgniter</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>								
					</div>
				</div>
			</div>
 
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="<?php echo base_url('___/img/item-01.png')?>" alt="...">
					<div class="caption">
						<h3><a href="#">Tutorial Bootstrap</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.s</p>								
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="<?php echo base_url('___/img/item-02.png')?>" alt="...">
					<div class="caption">
						<h3><a href="#">Tutorial CodeIgniter</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>								
					</div>
				</div>
			</div>
		</div>
	
	</div>
	<br/>
	
	
	<div class="clearfix"></div>
		
	<nav class="navbar navbar-default" style="bottom: 0;margin: 0">
		<div class="container">			
			<ul class="nav navbar-nav">
				<li><a href="#">Copyright @ 2017 At-Tashdiq. All rights reserved.</a></li>				
			</ul>
 
			
		</div>
	</nav>
	
<script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script> 
<script src="<?php echo base_url(); ?>___/js/ajaxFileUpload.js"></script> 
<script src="<?php echo base_url(); ?>___/js/bootstrap.js"></script>
  <script>
        // initialize the validator function
        validator.message['date'] = 'not a real date';

        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

        $('.multi.required')
            .on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });

        // bind the validation to the form submit event
        //$('#send').click('submit');//.prop('disabled', true);

        $('form').submit(function (e) {
            e.preventDefault();
            var submit = true;
            // evaluate the form using generic validaing
            if (!validator.checkAll($(this))) {
                submit = false;
            }

            if (submit)
                this.submit();
            return false;
        });

        /* FOR DEMO ONLY */
        $('#vfields').change(function () {
            $('form').toggleClass('mode2');
        }).prop('checked', false);

        $('#alerts').change(function () {
            validator.defaults.alerts = (this.checked) ? false : true;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);
    </script>
    </script>
<script type="text/javascript">
var base_url = "<?php echo base_url(); ?>";
</script>
<script src="<?php echo base_url(); ?>___/js/aplikasi.js"></script> 

</body>
</html>