<?php
    if(isset($_GET['prochitiet_idsua'])){
        $prochitiet_id = $_GET['prochitiet_idsua'];
        $prochitiet = queryone_prochitiet($prochitiet_id);
    
?>


    <div class="container">
        <h2 class="border border-4 mb-4 text-bg-secondary p-3 text-center rounded">Cập Nhật Chi Tiết Sản Phẩm</h2>
        <div class="container text-bg-light rounded">

            <form action="indexadmin.php?act=upchitietpro" method="post" enctype="multipart/form-data">
                <?php
                
                ?>
            
        <input type="text" value="<?=$prochitiet['ctiet_pro_id']?>" hidden name="id">
        <input type="text" value="<?=$prochitiet['pro_id']?>" hidden name="id_pro">
               
                <div class="mb-3 mt-3">
                    <label for="giasp" class="form-label text-danger">Số Lượng</label>
                    <input type="number" class="form-control" id="giasp" placeholder="Số Lượng" name="soluong" required>
                </div>





                <div class="">
                    <button type="submit" class="btn btn-secondary btn-sm" name="update_chitietpro">Cập Nhật</button>
                    <button type="reset" class="btn btn-secondary btn-sm">Nhập lại</button>
                    <a href="indexadmin.php?act=chitietadmin&pro_id=<?=$prochitiet['pro_id']?>">
                        <button type="button" class="btn btn-secondary btn-sm">Danh sách chi tiết sản phẩm</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
<?php
    }
?>