<?php
    //缓存时间
    $duration = 15;
    //缓存依赖
    $dependency = [
        'class' => 'yii\caching\FileDependency',
        'fileName' => 'hw.txt'
    ];
    //缓存开关
    $enabled = false;
?>
<!-- 定义网页标题数据块 -->
<?php $this->beginBlock('title'); ?>
  首页 | 陈旭的博客
<?php $this->endBlock('title'); ?>
<?php if($this->beginCache('cache_div',['duration'=>$duration])): ?>
<!-- 自定义视图 -->
<div class="content-wrap">
  <p>
    共有 <span>n</span> 个分类
  </p>
  <ul>
    <li><a href="#">前端</a><span>(1)</span></li>
    <li><a href="#">PHP</a><span>(2)</span></li>
    <li><a href="#">Linux</a><span>(2)</span></li>
    <li><a href="#">工具</a><span>(2)</span></li>
  </ul>
</div>
<?php
    $this->endCache();
endif;
 ?>

<?php echo $this->render('about',array('visitTimesCount'=>'981','visitorCount'=>'212')); ?>
