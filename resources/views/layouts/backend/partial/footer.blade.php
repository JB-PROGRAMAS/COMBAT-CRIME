<footer class="main-footer">

  <?php 
  $copyYear = 2019;
  $curYear = date ('Y');
  ?>
    <strong>Copyright &copy; <?php echo $copyYear.(($copyYear != $curYear) ? '-' .$curYear: '');?> <a href="https://hellensoft.co.tz">HellenSoft</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.3
    </div>
  </footer>