
<div class="container">
    <h2 class="border border-4 mb-4 text-bg-secondary p-3 text-center rounded">Danh sách danh mục đã bị xoá</h2>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="text-bg-secondary">Mã danh mục</th>
            <th class="text-bg-secondary">Tên loại</th>
            <Th class="text-bg-secondary">Thao tác</Th>
          </tr>
        </thead>
        <?php
        foreach ($resultcate as $cate) {
          extract($cate);

        ?>
          <tbody>
            <tr>
              <td><?php echo $cate_id ?></td>
              <td><?php echo $cate_name ?></td>
              <td>
                <a href="indexadmin.php?act=delcate&cate_idxoa=<?php echo $cate_id ?>"><input type="button" class="text-bg-secondary rounded" onclick="return confirm('Bạn có chắc muốn xoá ?')" name="" value="Xoá cứng" id=""></a>
                <a href="indexadmin.php?act=khoiphuc_cate&cate_idxoa=<?php echo $cate_id ?>"><input type="button" class="text-bg-success rounded" onclick="return confirm('Bạn có chắc muốn khôi phục ?')" name="" value="Khôi phục" id=""></a>
              </td>
            </tr>

          </tbody>
        <?php
        }
        ?>
      </table>
    </div>
    </div>
  </div>