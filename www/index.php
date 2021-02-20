<!DOCTYPE html>
<html>
  <head>
    <title>practice</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/nav.css">
     <meta charset="UTF-8">
  </head>
  <body>
<?php include("header.php"); ?> 

<div class="container mt-5 min-height main-body">

<div class="row">
     <div class="col-8 m-auto">
       <h2 class="mb-5">基础题目：文件包含</h2>
       <p class="mb-5"><u>文件包含漏洞的产生原因是在通过 PHP 的函数引入文件时，由于传入的文件名没有经过合理的校验，从而操作了预想之外的文件，就可能导致意外的文件泄露甚至恶意的代码注入。</u></p>
       <p class="mb-5"><b>找到Key3</b></p>
       <a href="/start/index.php?page=hello" class="btn btn-warning btn-lg">开始答题</a>

     </div>
     </div>



</div>

<?php include("footer.php"); ?> 

  </body>
</html>
