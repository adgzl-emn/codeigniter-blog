<?php $this->load->view('yonetim/include/header'); ?>

<?php $this->load->view('yonetim/include/menu'); ?>




                    <!--Grid Form-->
,
                    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
							<?php echo $this->session->flashdata('bilgi'); ?>
                            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                Bloglar
								<a href="<?php echo base_url('yonetimpaneli/blogekle'); ?>">
								<button class="bg-transparent hover:bg-green-500 text-green-dark font-semibold hover:text-white py-2 px-4 border border-green hover:border-transparent rounded">
									Blog Ekle
								</button>
								</a>
							</div>
                            <div class="p-3">
                                <table class="table-responsive w-full rounded">
                                    <thead>
                                      <tr>
										  <th class="border w-1/7 px-4 py-2">Sıralama</th>
                                        <th class="border w-1/4 px-4 py-2">Fotoğraf</th>
                                        <th class="border w-1/6 px-4 py-2">Başlık</th>
                                        <th class="border w-1/6 px-4 py-2">link</th>
                                        <th class="border w-1/5 px-4 py-2">Actions</th>
										  <th class="border w-1/5 px-4 py-2">İşlemler</th>
                                      </tr>
                                    </thead>
									<?php $sayac = 1; foreach ($bilgi as $bilgi){ ?>
                                    <tbody>
                                        <tr>
                                            <td class="border px-4 py-2"><?php echo $sayac++; ?></td>
                                            <td class="border px-4 py-2">
												<img class="img-responsive" width="100" src="<?php echo base_url('uploads/'); echo $bilgi->img; ?>" alt="">
											</td>
                                            <td class="border px-4 py-2"><?php echo $bilgi->blog_baslik ?></td>
											<td class="border px-4 py-2"><?php echo $bilgi->blog_link ?></td>
                                            <td class="border px-4 py-2">
                                                <i class="fas fa-check text-green-500 mx-2"></i>
                                            </td>
                                            <td class="border px-4 py-2">
                                                <a href="<?php echo base_url('yonetimpaneli/blogguncelle/'); echo $bilgi->id; ?>" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                        <i class="fas fa-eye"></i></a>
												<br>	<br>
                                                <a href="<?php echo base_url('yonetimpaneli/blogsil/'); echo $bilgi->id; ?>" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                        <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
									<?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--/Grid Form-->
                </div>
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">&copy; My Design</div>
        </footer>
        <!--/footer-->

    </div>

</div>



</body>

</html>
