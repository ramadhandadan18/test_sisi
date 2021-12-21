<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title bg-primary">
					<h5>Master Data Produk</h5>
					<div class="ibox-tools">
						<a class="collapse-link">
							<i class="fa fa-chevron-up text-white"></i>
						</a>
					</div>
				</div>
				<div class="ibox-content">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover dataTables-example" width="100%" id="main-table">
							<thead>
								<tr>
									<th width="5%">No</th>
									<!-- <th width="30%">Id Produk</th> -->
									<th width="20%">Nama Lengkap</th>
									<th width="20%">Nama Panggilan</th>
									<th width="35%">No HP</th>
									<th width="10%">Email</th>
									<th width="20%">Jenis Kelamin</th>
									<th width="20%">Alamat</th>
									<th width="20%">Pekerjaan</th>
									<th width="10%">Action</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- ADD MODAL -->
<div class="modal inmodal" id="add_Produk_mdl" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content animated flipInY">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Tambah Data User</h4>
			</div>
			<form method="post" action="" enctype="multipart/form-data" id="myform">
				<div class="modal-body">
					<div class="form-row">
						<div class="form-group col">
							<label>Nama Lengkap</label>
							<input type="text" class="form-control" id="produk_nama" name="produk_nama" placeholder="" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Nama Panggilan</label>
							<input type="text" class="form-control" id="produk_nama1" name="produk_nama1" placeholder="" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>No HP</label>
							<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Email</label>
							<input type="text" class="form-control" id="email" name="email" placeholder="" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Jenis Kelamin</label>
							<input type="text" class="form-control" id="jk" name="jk" placeholder="" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Alamat</label>
							<input type="text" class="form-control" id="alamat" name="alamat" placeholder="" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Pekerjaan</label>
							<input type="text" class="form-control" id="job" name="job" placeholder="" required>
						</div>
					</div>

				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary" onclick="save_add_Produk()">Save changes</button>
		</div>
		</form>
	</div>
</div>
</div>

<!-- EDIT MODAL -->
<div class="modal inmodal" id="edit_Produk_mdl" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content animated flipInY">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="header_edit_Produk"></h4>
			</div>
			<form method="post" action="" enctype="multipart/form-data" id="myform_edit">
				<div class="modal-body">
					<div class="form-row" style="display: none;">
						<div class="form-group col">
							<label>ID</label>
							<input type="text" class="form-control" id="produk_id_edit" name="produk_id" readonly="true">
						</div>
					</div>
					<div class="form-row" style="display: none;">
						<div class="form-group col">
							<label>ID</label>
							<input type="text" class="form-control" id="file_prev" name="file_prev" readonly="true">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Nama Lengkap</label>
							<input type="text" class="form-control" id="produk_nama_edit" name="produk_nama_edit" placeholder="" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Nama Panggilan</label>
							<input type="text" class="form-control" id="produk_nama1_edit" name="produk_nama1_edit" placeholder="" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>No HP</label>
							<input type="text" class="form-control" id="no_hp_edit" name="no_hp_edit" placeholder="" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Email</label>
							<input type="text" class="form-control" id="email_edit" name="email_edit" placeholder="" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Jenis Kelamin</label>
							<input type="text" class="form-control" id="jk_edit" name="jk_edit" placeholder="" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Alamat</label>
							<input type="text" class="form-control" id="alamat_edit" name="alamat_edit" placeholder="" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label>Pekerjaan</label>
							<input type="text" class="form-control" id="job_edit" name="job_edit" placeholder="" required>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary" onclick="save_edit_Produk()">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- DELETE MODAl -->
<div class="modal inmodal" id="confirm_delete_Produk_mdl" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content animated flipInY">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="header_delete_Produk"></h4>
			</div>
			<div class="modal-body">
				<div class="form-row" style="display: none;">
					<div class="form-group col">
						<label>ID</label>
						<input type="text" class="form-control" id="id_delete" name="id_delete" placeholder="...">
					</div>
				</div>
				<div>
					<span>
						Apakah anda yakin?
					</span>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-danger" onclick="save_delete_Produk()">Yes</button>
			</div>
		</div>
	</div>
</div>



<!-- Mainly scripts -->
<script src="<?php echo base_url() ?>assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/toastr/toastr.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo base_url() ?>assets/js/inspinia.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/pace/pace.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/plugins/dataTables/datatables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

<!-- Page-Level Scripts -->
<script>
	$(document).ready(function() {

		getMainTable();

	});

	function getMainTable() {
		var tahun = $('#tahun').val();
		var bulan = $('#bulan').val();
		// alert(tahun+'-'+bulan);
		var role_id = 1;
		var oTable = $('#main-table').DataTable({
			processing: true,
			select: true,
			destroy: true,
			searching: true,
			lengthChange: true,
			pageLength: 10,
			responsive: true,
			dom: '<"html5buttons"B>lTfgitp',
			buttons: {
				buttons: [{
					text: '<i class="fa fa-plus-square"></i>&ensp;Tambah Data',
					action: function(e, dt, node, config) {
						add_Produk();
					}
				}, ],
				dom: {
					button: {
						tag: "button",
						className: "btn btn-primary btn-sm"
					},
					buttonLiner: {
						tag: null
					}
				}
			},
			ajax: {
				url: "<?= base_url('Produk/get_data') ?>",
				type: 'GET',
				dataSrc: function(json) {
					var return_data = new Array()
					$.each(json['response'], function(i, item) {
						var button = '' +
							'<div class="btn-group">' +
							'<button class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit Data" onclick="edit_Produk(\'' + item["produk_id"] + '\')"><i class="fa fa-edit"></i>&ensp;Edit</button>' +
							'<button class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Data" onclick="confirm_delete_Produk(\'' + item["produk_id"] + '\')"><i class="fa fa-trash"></i>&ensp;Delete</button>' +
							'</div>'
						return_data.push({
							'no': (i + 1),
							'produk_nama': item['produk_nama'],
							'produk_nama1': item['produk_nama1'],
							'no_hp': item['no_hp'],
							'email': item['email'],
							'jk': item['jk'],
							'alamat': item['alamat'],
							'job': item['job'],
							'action': button
						})
					})
					return return_data
				}
			},
			columns: [{
					data: 'no'
				},
				{
					data: 'produk_nama'
				},
				{
					data: 'produk_nama1'
				},
				{
					data: 'no_hp'
				},
				{
					data: 'email'
				},
				{
					data: 'jk'
				},
				{
					data: 'alamat'
				},
				{
					data: 'job'
				},
				{
					data: 'action'
				}
			]
		});
	}

	function add_Produk() {
		$('#produk_nama').val('');
		$('#produk_nama1').val('');
		$('#no_hp').val('');
		$('#email').val('');
		$('#jk').val('');
		$('#alamat').val('');
		$('#job').val('');
		$('#add_Produk_mdl').modal('show');
	}

	function save_add_Produk() {
		var produk_nama = $('#produk_nama').val();
		var produk_nama1 = $('#produk_nama1').val();
		var no_hp = $('#no_hp').val();
		var email = $('#email').val();
		var jk = $('#jk').val();
		var alamat = $('#alamat').val();
		var job = $('#job').val();

		fd.append('produk_nama', produk_nama);
		fd.append('produk_nama1', produk_nama1);
		fd.append('no_hp', no_hp);
		fd.append('email', email);
		fd.append('jk', jk);
		fd.append('alamat', alamat);
		fd.append('job', job);


		$.ajax({
			url: '<?php echo base_url() ?>Produk/save_add',
			type: 'post',
			data: fd,
			contentType: false,
			processData: false,
			success: function(data) {
				console.log(data);
				if (data == 1) {
					toastr.success('Data berhasil diperbarui', 'Success');
					$('#add_Produk_mdl').modal('hide');
					getMainTable();
				} else {
					toastr.error(data, 'Failed');
				}
			}
		});

	}

	function edit_Produk(id) {
		$.ajax({
			type: 'GET',
			url: '<?php echo base_url() ?>Produk/get_data_by_id/' + id,
			dataType: 'json',
			success: function(data) {

				$('#produk_id_edit').val(data.produk_id);
				$('#produk_nama_edit').val(data.produk_nama);
				$('#produk_nama1_edit').val(data.produk_nama1);
				$('#no_edit_edit').val(data.no_edit);
				$('#email_edit').val(data.email);
				$('#jk_edit').val(data.jk);
				$('#alamat_edit').val(alamat.email);
				$('#job_edit').val(job.jk);
				$('#file_prev').val(data.gambar);
				if (data.gambar != null)
					$('#imgView').attr('src', '<?php echo base_url() ?>/assets/images/' + data.gambar);
				else
					$('#imgView').hide();

				$('#header_edit_Produk').html('Edit Data Produk <span class="text-info">' + data.produk_nama + '</span>');
				$('#edit_Produk_mdl').modal("show");
			}
		});

	}

	function save_edit_Produk() {
		var produk_id = $('#produk_id_edit').val();
		var file_prev = $('#file_prev').val();
		var produk_nama = $('#produk_nama_edit').val();
		var produk_nama1 = $('#produk_nama1_edit').val();
		var no_hp = $('#no_hp_edit').val();
		var email = $('#email_edit').val();
		var jk = $('#jk_edit').val();
		var alamat = $('#alamat_edit').val();
		var job = $('#job_edit').val();

		var fd = new FormData();

		fd.append('produk_id', produk_id);
		fd.append('produk_nama', produk_nama);
		fd.append('produk_nama1', produk_nama1);
		fd.append('no_hp', no_hp);
		fd.append('email', email);
		fd.append('jk', jk);
		fd.append('alamat', alamat);
		fd.append('job', job);

		$.ajax({
			type: "POST",
			url: '<?php echo base_url() ?>Produk/save_edit',
			data: fd,
			contentType: false,
			processData: false,
			success: function(data) {
				console.log(data);
				if (data == 1) {
					toastr.success('Data berhasil diperbarui', 'Success');
					$('#edit_Produk_mdl').modal('hide');
					getMainTable();
				} else {
					toastr.error(data, 'Failed');
				}
			}
		});

	}

	function confirm_delete_Produk(id) {

		$('#id_delete').val(id);

		$('#header_delete_Produk').html('Confirm Delete Data Produk');

		$('#confirm_delete_Produk_mdl').modal('show');

	}

	function save_delete_Produk() {
		var id = $('#id_delete').val();

		$.ajax({
			type: "POST",
			url: '<?php echo base_url() ?>Produk/save_delete',
			data: {
				id: id,
			},
			success: function(data) {
				console.log(data);
				if (data == 1) {
					toastr.success('Data berhasil diperbarui', 'Success');
					$('#confirm_delete_Produk_mdl').modal('hide');
					getMainTable();
				} else {
					toastr.error("Data gagal diperbarui", 'Failed');
				}
			}
		});

	}

	function isNumberKey(evt) {
		var charCode = (evt.which) ? evt.which : evt.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
	}
</script>