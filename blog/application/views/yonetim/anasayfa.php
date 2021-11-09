<?php $this->load->view('yonetim/include/header'); ?>

<?php $this->load->view('yonetim/include/menu'); ?>
            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">


                    <!-- /Stats Row Ends Here -->

                    <!-- Card Sextion Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                        <!-- card -->



                    </div>
                    <!-- /Cards Section Ends Here -->
					<?php $info = $this->session->userdata('info'); ?>
					<?php foreach ($info as $info){ ?>
					<h1>Adminler</h1>
                    <!--Profile Tabs-->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 p-1 mt-2 mx-auto lg:mx-2 md:mx-2 justify-between">
                        <!--Top user 1-->
                        <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
                            <img src="https://haruncan.com/wp-content/uploads/2010/02/wall-e.jpg" alt="" class="w-full"/>
                            <div class="flex justify-center -mt-8">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRT1tCRdI5ihAprVsbZIzbfnWlmootLkOxQpw&usqp=CAU" alt=""
                                     class="rounded-full border-solid border-white border-2 -mt-3">
                            </div>
                            <div class="text-center px-3 pb-6 pt-2">
                                <h3 class="text-black text-sm bold font-sans"><?php echo $info->isim?></h3>
                                <p class="mt-2 font-sans font-light text-grey-700"><?php echo $info->kad?>
                                    </p>
                            </div>

						<?php } ?>
                </div>
            </main>
            <!--/Main-->
        </div>
<?php $this->load->view('yonetim/include/footer'); ?>
