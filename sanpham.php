<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"  >

</head>

<body>
    <h1>Menu 312</h1>
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <form method="GET" action="">
        <label for="">Tìm kiếm sản phẩm:</label>
        <input class="form-control" type="text" name="keyword" value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
        <button class="btn btn-primary" type="submit">Tìm kiếm</button>
    </form>
</div>

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

    <table  class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên loại</th>
            <th>Số lượng</th>
            <th>Hình ảnh</th>
        </tr>
        </thead>
    
<tbody>
    <?php
          $danh_muc=[  
            ["id"=>1,"Ten"=>"Xe may","So_luong"=>rand(1,100),"img"=>"https://www.w3schools.com/tags/img_girl.jpg"],
            ["id"=>2,"Ten"=>"Xe dap","So_luong"=>rand(1,100),"img"=>"https://picsum.photos/200"],
            ["id"=>3,"Ten"=>"o to","So_luong"=>rand(1,100),"img"=>"https://www.w3schools.com/tags/img_girl.jpg"],
            ["id"=>4,"Ten"=>"may bay","So_luong"=>rand(1,100),"img"=>"https://picsum.photos/200"]
         ];


          $result_danh_muc = $danh_muc; // Mặc định, hiển thị tất cả danh mục



        if(isset($_GET['keyword'])&& $_GET['keyword'] !== ''){
          $keyword = $_GET['keyword'];
        // Lọc các mục có tên chứa keyword
        $result_danh_muc = array_filter($danh_muc, function($item) use ($keyword) {
            return strpos(strtolower($item['Ten']), strtolower($keyword))   !== false;
        });
          }

    
        
        foreach($result_danh_muc as $loai){
          ?>
            <tr>
                <td><a href="sanpham.php?id=<?php echo $loai["id"]?> "><?php echo $loai["id"]?></a></td>
                <td><?php echo $loai["Ten"]?></td>
                <td><?php echo $loai["So_luong"]?></td>
                <td> 
                  <img width="100px" height="100px" src="<?php echo $loai["img"]?>" alt="">
                </td>
            </tr>
         <?php } ?>

</tbody>
         

    </table>  

  </div>
  

  
</body>
</html>
