<?php  $base='../' ?>
<?php  $title='饼图测试' ?>
<?php include("../templates/header.php"); ?>
  

  <style>
    html{
      overflow-y: scroll;
    }
    body{

    }
  </style>
  <div class="container">
    <div class="row">
      <div id="s1">
       
      </div>
    </div>
  </div>
 
  <?php $url = 'bui/toolbar'?>
  <?php include("../templates/script.php"); ?>
  
  <script type="text/javascript" src="../../src/chart/pie.js"></script>
  <script type="text/javascript" src="../../src/chart/plotitem.js"></script>
  <script type="text/javascript" src="../../src/chart/mixin/activedgroup.js"></script>

  <script type="text/javascript" src="../../src/graphic/raphael/eve.js"></script>
  <script type="text/javascript" src="../../src/graphic/raphael/core.js"></script>
  <script type="text/javascript" src="../../src/graphic/raphael/svg.js"></script>
  <script type="text/javascript" src="../../src/graphic/raphael/vml.js"></script>
  <script type="text/javascript" src="../../src/graphic/raphael/group.js"></script>
  <script type="text/javascript" src="../../src/graphic/raphael.js"></script>
  
  <script type="text/javascript" src="../../src/graphic/util.js"></script>
  <script type="text/javascript" src="../../src/graphic/base.js"></script>
  <script type="text/javascript" src="../../src/graphic/canvasitem.js"></script>
  <script type="text/javascript" src="../../src/graphic/shape.js"></script>
  <script type="text/javascript" src="../../src/graphic/container.js"></script>
  <script type="text/javascript" src="../../src/graphic/group.js"></script>
  <script type="text/javascript" src="../../src/graphic/canvas.js"></script>


  <script type="text/javascript" src="../specs/chart/pie-spec.js"></script>
<?php include("../templates/footer.php"); ?>