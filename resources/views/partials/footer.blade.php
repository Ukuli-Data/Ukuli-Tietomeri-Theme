<footer class="content-info">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>

<!-- Some Font Awesome, Ubuntu Font, Chart.js and Vue.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.min.js" integrity="sha512-BKbSR+cfyxLdMAsE0naLReFSLg8/pjbgfxHh/k/kUC82Hy7r6HtR5hLhobaln2gcTvzkyyehrdREdjpsQwy2Jw==" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/2ab0b091bd.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/phaser/3.24.1/phaser.min.js" integrity="sha512-HY/qPTJqpvoNGRufGPn4Tl7duHSam8NfrfTZUHyn5M39oEBcq8p6IeGBE9e+AupikS4Utt+uJhSgG3FYZp/yxA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r119/three.min.js" integrity="sha512-E1+SnTWyHYoY5MN8wpL0SI4TYbpWN12sHXyEViwbzzEyq6GHxQrPFDzEeUDab4emXcf3Yj41Tht2JZnpo3kjwA==" crossorigin="anonymous"></script>

<?php 
$user_info = get_userdata(1);
$user_name = $user_info->display_name;
$user_email = $user_info->user_email;
?>

<script>
  woopra.identify({
    email: "<?php echo $user_email; ?>",
    name: "<?php echo $user_name; ?>",
    company: ""
  });
  woopra.track();
</script>

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6497540.js"></script>
<!-- End of HubSpot Embed Code -->
