<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?php echo base_url('assets/backend/'); ?>./dist/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <style>
  .login{
    background: url('<?php echo base_url('assets/backend/'); ?>./dist/images/login-new.jpeg')
  }
  </style>  
</head>

<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
  <div class="w-full max-w-lg">
    <div class="leading-loose">

		<?php echo $this->session->flashdata('hata'); ?>
      <form role="form" method="post" action="<?php echo base_url('yonetim/login'); ?>" class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
		  <div class="tenor-gif-embed" data-postid="8866061" data-share-method="host" data-aspect-ratio="1.2549" data-width="100%"><a href="https://tenor.com/view/wally-wall-e-gif-8866061">Wally Wall E GIF</a>from <a href="https://tenor.com/search/wally-gifs">Wally GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
        <p class="text-gray-800 font-medium text-center text-lg font-bold">Login</p>
        <div class="">
          <label class="block text-sm text-gray-00" for="username">Kullanıcı Adı</label>
          <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="kad" name="kad" type="text" required="" placeholder="User Name" aria-label="username">
        </div>
        <div class="mt-2">
          <label class="block text-sm text-gray-600" for="password">Şifre</label>
          <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="sifre" name="sifre" type="password" required="" placeholder="*******" aria-label="password">
        </div>
        <div class="mt-4 items-center justify-between">
          <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Login</button>

        </div>
      </form>

    </div>
  </div>
</div>
</body>

</html>
