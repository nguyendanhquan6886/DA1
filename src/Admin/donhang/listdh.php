
            
    <!-- main -->
    <div class="container">
                    <h2 class="border border-4 mb-4 text-bg-secondary p-3 text-center rounded">Danh sách đơn hàng</h2>
                    <form action="" class="mb-4" method="post" enctype="multipart/form-data">
                            <div class="row">
                            <div class="col-sm-4">
                                <input class="w-100 p-1" type="text" placeholder="Nhập mã đơn hàng" name="kyw">
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-secondary w-50" name="timkiem">Tìm kiếm</button>
                            </div>
                        </div>
                        </form>
                        <div class="table-responsive">
                          <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th class="text-bg-secondary">Mã đơn hàng</th>
                                  <th class="text-bg-secondary">Khách hàng</th>
                                  <th class="text-bg-secondary">Số lượng hàng</th>
                                  <Th class="text-bg-secondary">Giá trị đơn hàng</Th>
                                  <Th class="text-bg-secondary">Tình trạng đơn hàng</Th>
                                  <Th class="text-bg-secondary">Ngày đặt hàng</Th>
                                  <Th class="text-bg-secondary">Thao tác</Th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php foreach ($listdh as $donhang) { 
                                  extract($donhang);
                                  $countsp = load_cart_count($sl);
                              ?>
                                <tr>
                                  <td><?= $order_id ?></td>
                                  <td>
                                    <?= $kh_name.'<br>'.$kh_mail.'<br>'.$order_adress.'<br>'.$kh_tel ?>
                                  </td>
                                  <td><?= $countsp ?></td>
                                  <td><?= $order_totalprice ?></td>
                                  <td><?= $order_trangthai ?></td>
                                  <td><?= $order_date ?></td>
                                  <td>
                                      <a href="indexadmin.php?act=suadonhang&order_id=<?php echo $order_id ?>" class="mb-2"><input class="mb-2 text-bg-secondary rounded" type="button" name="" value="Sửa" id=""></a>
                                      <a href="indexadmin.php?act=chitietdh&order_id=<?php echo $order_id ?>"><input class="mb-2 text-bg-danger rounded" type="button" name="" value="Chi tiết đh" id=""></a>
                                     
                                  </td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                        </div>
                        <div class="">
                        </div>
                </div>