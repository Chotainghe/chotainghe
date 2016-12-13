<?php

use yii\helpers\Html;

$this->title = 'Search';
?>
<h1><?= Html::encode($this->title) ?></h1>

<form action="" method="get">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Tìm kiếm theo tên sản phẩm..." name="keyword" value="<?php echo $keyword; ?>">

    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>

<br/>

<div class="search-result">
  <?php
    if (count($results)) {
      echo "Found ".count($results)." results";

      echo "
        <div class='table-responsive grid-view'>
          <table class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Image</th>
                <th>Category</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>";

            foreach ($results as $key =>  $row) {
            echo "
              <tr>
                <td>".($key + 1)."</td>
                <td>".$row["product_name"]."</td>
                <td class='post-img'><img src='".$row["image_url"]."'></td>
                <td>".$row["category"]."</td>
                <td>".$row["price"]."</td>
                <td class='post-actions'>
                  <a title='Update'>
                    <span class='glyphicon glyphicon-pencil'></span>
                  </a>
                  <a title='Delete'>
                    <span class='glyphicon glyphicon-trash'></span>
                  </a>
                </td>
              </tr>
            ";
            }
          
      echo "
            </tbody>
          </table>
        </div>";
    } else {
      echo "There were no results found";
    }     
  ?>
</div>

<style>
  .post-img {
    text-align: center;
  }
  .post-img img {
    max-height: 70px;
  }
  .post-actions a {
    display: inline-block;
    text-align: center;
    width: 45%;
  }
</style>
