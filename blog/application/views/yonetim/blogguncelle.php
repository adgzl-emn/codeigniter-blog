<?php $this->load->view('yonetim/include/header'); ?>

<?php $this->load->view('yonetim/include/menu'); ?>




<!--Grid Form-->

<div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
	<div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
		<div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
			Blog Güncelle
			<a href="<?php echo base_url('yonetimpaneli/bloglar'); ?>">
				<button class="bg-transparent hover:bg-blue-500 text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">
					Bloglara Dön
				</button>
			</a>
		</div>
			<?php foreach ($inf as $inf){ ?>
		<form role="form" method="post" action="<?php echo base_url('yonetimpaneli/blogupdate/'); echo $inf->id ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="exampleInputEmail1">Başlık</label>
				<input type="text" name="baslik" class="form-control" value="<?php echo $inf->blog_baslik; ?>">
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">İçerik</label>
				<textarea type="text" name="aciklama" class="ckeditor"><?php echo $inf->blog_aciklama; ?></textarea>
			</div>
				<?php } ?>

			<button type="submit" class="btn btn-primary">Güncellee</button>
		</form>



	</div>
</div>
</div>

<?php $this->load->view('yonetim/include/footer'); ?>
