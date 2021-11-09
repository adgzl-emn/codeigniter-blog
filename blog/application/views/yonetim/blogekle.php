<?php $this->load->view('yonetim/include/header'); ?>

<?php $this->load->view('yonetim/include/menu'); ?>




<!--Grid Form-->

<div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
	<div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
		<div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
			Blog Ekle
			<a href="<?php echo base_url('yonetimpaneli/bloglar'); ?>">
				<button class="bg-transparent hover:bg-blue-500 text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">
					Bloglara Dön
				</button>
			</a>
		</div>

		<form role="form" method="post" action="<?php echo base_url('yonetimpaneli/bloginsert'); ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="exampleInputEmail1">Başlık</label>
				<input type="text" name="baslik" class="form-control" id="baslik">
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">İçerik</label>
				<textarea type="text" name="aciklama" class="ckeditor" id="aciklama"></textarea>
			</div>


				<div class="form-group">
					<label for="exampleFormControlFile1">Başlık Fotoğraf</label>
					<input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
				</div>



			<button type="submit" class="btn btn-primary">Push!</button>
		</form>



	</div>
</div>
</div>

<?php $this->load->view('yonetim/include/footer'); ?>
