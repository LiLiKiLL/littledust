<!DOCTYPE html>
<!-- 视图模板 -->
<html>
  <head>
    <meta charset="utf-8">
    <!-- 网页标题数据块 -->
    <title>
      <?php if(isset($this->blocks['title'])): ?>
        <?=$this->blocks['title'];?>
      <?php else: ?>
        陈旭的博客 | 首页
      <?php endif; ?>
      </title>
  </head>
  <body>
    <header>
      <h1>Xu Chen's blog</h1>
      <p>
        Better Coder Better Life
      </p>
      <nav>
        <ul>
          <li><i></i><a href="#">Home</a></li>
          <li><i></i><a href="#">Archive</a></li>
          <li><i></i><a href="#">Category</a></li>
          <li><i></i><a href="#">Tag</a></li>
          <li><i></i><a href="#">About</a></li>
        </ul>
      </nav>
    </header>
    <?=$content;?><!-- 自定义视图内容将自动写入到变量$content中 -->
  </body>
</html>
