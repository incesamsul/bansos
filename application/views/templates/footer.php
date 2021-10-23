<div class="footer-wrap pd-20 mb-20 card-box ">
	<?php foreach ($footer as $f) : ?>
		<?= date('Y'); ?> <?= $f['nama_perusahaan']; ?> - <?= $f['bidang']; ?> <br> <?= $f['alamat_perusahaan']; ?> - <?= $f['kota']; ?>
	<?php endforeach; ?>
</div>
</div>
</div>
<!-- js -->
<script src="<?= base_url(); ?>assets/vendors/scripts/core.js"></script>
<script src="<?= base_url(); ?>assets/vendors/scripts/script.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/scripts/process.js"></script>
<script src="<?= base_url(); ?>assets/vendors/scripts/layout-settings.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>

<!-- buttons for Export datatable -->
<script src="<?= base_url(); ?>assets/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/datatables/js/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/datatables/js/vfs_fonts.js"></script>

<!-- Datatable Setting js -->
<script src="<?= base_url(); ?>assets/vendors/scripts/datatable-setting.js"></script>
<script src="<?= base_url(); ?>assets/src/plugins/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url(); ?>assets/vendors/scripts/apexcharts-setting.js"></script>

<script>
	$('.custom-file-input').on('change', function() {
		let fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass("selected").html(fileName);
	});



	$('.form-check-input').on('click', function() {
		const menuId = $(this).data('menu');
		const roleId = $(this).data('role');

		$.ajax({
			url: "<?= base_url('admin/changeaccess'); ?>",
			type: 'post',
			data: {
				menuId: menuId,
				roleId: roleId
			},
			success: function() {
				document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
			}
		});
	});

	$('.isActive').on("click", function() {
		var val = $(this).val();
		var apply = $(this).is(':checked') ? 1 : 0;
		$.ajax({
			url: "<?= base_url('admin/changeisactive'); ?>",
			type: "post",
			data: {
				val: val,
				apply: apply
			},
			success: function() {
				document.location.href = "<?= base_url('admin/submenu'); ?>";
			}
		});
	});

	$('.isCalon').on("click", function() {
		var val = $(this).val();
		var apply = $(this).is(':checked') ? 1 : 0;
		$.ajax({
			url: "<?= base_url('dashboard/changeActiveCalon'); ?>",
			type: "post",
			data: {
				val: val,
				apply: apply
			},
			success: function() {
				document.location.href = "<?= base_url('dashboard'); ?>";
			}
		});
	});
	$('.userActive').on("click", function() {
		var val = $(this).val();
		var apply = $(this).is(':checked') ? 1 : 0;
		$.ajax({
			url: "<?= base_url('admin/changeUserActive'); ?>",
			type: "post",
			data: {
				val: val,
				apply: apply
			},
			success: function() {
				document.location.href = "<?= base_url('admin/user'); ?>";
			}
		});
	});
	$('.isMenerima').on("click", function() {
		var val = $(this).val();
		var apply = $(this).is(':checked') ? 1 : 0;
		$.ajax({
			url: "<?= base_url('penerima/changeUserActive'); ?>",
			type: "post",
			data: {
				val: val,
				apply: apply
			},
			success: function() {
				document.location.href = "<?= base_url('penerima/datapenerima'); ?>";
			}
		});
	});
	$('.accStaff').on("click", function() {
		var val = $(this).val();
		var apply = $(this).is(':checked') ? 1 : 0;
		$.ajax({
			url: "<?= base_url('penerima/accStaff'); ?>",
			type: "post",
			data: {
				val: val,
				apply: apply
			},
			success: function() {
				document.location.href = "<?= base_url('penerima/datapenerima'); ?>";
			}
		});
	});
</script>

<script src="<?= base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script>
	CKEDITOR.replace('komposisi');
</script>

<script src="<?= base_url(); ?>/assets/js/script.js"></script>

</body>

</html>