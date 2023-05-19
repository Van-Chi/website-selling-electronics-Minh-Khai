<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> <!-- icon -->
    <link rel="stylesheet" href="reponsive.css">


    <!--link bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <div class="logo">
            <ul>
                <li><a href="QuanLySanPham.php" style="font-size: 2vw;">Sửa Sản Phẩm</a></li>
            </ul>

            <div class="container">

                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Admin Stration
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="dangxuat.php">Đăng Xuất</a>

                    </div>
                </div>
            </div>
        </div>
        <nav>
            <i class="fa-brands fa-battle-net" style="font-size:3vw;padding-left:1vw;padding-top:1.5vh;"> MK</i>
            <br><br><br><br>
            <ul>
                <!-- <li><a href="index.php"><i class="fa-solid fa-user-plus"></i> Thống Kê</a></li> -->
                <li><a href="Dashboard.php"><i class="fa-solid fa-user"></i> Dashboard</a></li>
                <li><a href="QuanLyNhaCungCap.php"><i class="fa-solid fa-user"></i> Quản Lý Nhà Cung Cấp</a></li>
                <li><a href="QuanLyDanhMuc.php"><i class="fa-solid fa-user"></i> Quản Lý Danh Mục</a></li>
                <li><a href="QuanLySanPham.php"><i class="fa-solid fa-user"></i> Quản Lý Sản Phẩm</a></li>
                <li><a href="QuanLyKhachHang.php"><i class="fa-solid fa-user"></i> Quản Lý Khách Hàng</a></li>
                <li><a href="QuanLyHoaDon.php"><i class="fa-solid fa-user"></i> Quản Lý Hóa Đơn</a></li>
                
                <li><a href="QuanLyBinhLuan.php"><i class="fa-solid fa-user"></i> Quản Lý Bình Luận</a></li>
                <li><a href="QuanLyHinhAnh.php"><i class="fa-solid fa-user"></i> Quản Lý Hình Ảnh</a></li>
            </ul>
        </nav>
    </header>
    <div style="margin-left:150px;">
        <?php
        require_once "db.php";
        $query = "SELECT * FROM sanpham WHERE sanpham.MaSanPham='{$_GET['id']}'";
        $result = $conn->query($query);
        $ds = $result->fetch_assoc();

        $querydanhmuc = "SELECT * FROM danhmuc";
        $resultdanhmuc = $conn->query($querydanhmuc);
        // $dsdanhmuc = $resultdanhmuc->fetch_assoc();

        $queryncc = "SELECT * FROM nhacungcap";
        $resultncc = $conn->query($queryncc);
        // $dsncc = $resultncc->fetch_assoc();
        ?>
        <table>
            <form id="formquanlydanhmuc" action="Sua.php?hd=suasp&id=<?php echo $ds['MaSanPham'] ?>" method="post" style="margin-top: -5vw; height: 25vw;">

                <tr>
                    <td style="width:200px"><label for="tensanpham">Tên Sản Phẩm:</label></td>
                    <td><input type="text" id="tensanpham" size="50" name="tensanpham" placeholder="<?php echo $ds['TenSanPham'] ?>" required></td>
                </tr>

                <tr>
                    <td><label for="chitiet">Chi Tiết : </label></td>
                    <td><textarea id="chitiet" name="chitiet" rows="2" cols="52" placeholder="<?php echo $ds['ChiTiet'] ?>"></textarea></td>

                </tr>
                <tr>
                    <td><label for="congsuat">Công Suất:</label></td>
                    <td><input type="text" id="congsuat" size="50" name="congsuat" placeholder="<?php echo $ds['CongSuat'] ?>" required></td>
                </tr>
                <tr>
                    <td><label for="noisanxuat">Nơi Sản Xuất:</label></td>
                    <td><input type="text" id="noisanxuat" size="50" name="noisanxuat" placeholder="<?php echo $ds['NoiSanXuat'] ?>" required></td>
                </tr>

                <tr>
                    <td><label for="thoigianbaohanh">Thời Gian Bảo Hành:</label></td>
                    <td><input type="text" id="thoigianbaohanh" size="50" name="thoigianbaohanh" placeholder="<?php echo $ds['ThoiGianBaoHanh'] ?>" required></td>
                </tr>
                <tr>
                    <td><label for="congnghe">Công Nghệ:</label></td>
                    <td><input type="text" id="congnghe" size="50" name="congnghe" placeholder="<?php echo $ds['CongNghe'] ?>" required></td>
                </tr>
                <tr>
                    <td><label for="congdung">Công Dụng:</label></td>
                    <td><input type="text" id="congdung" size="50" name="congdung" placeholder="<?php echo $ds['CongDung'] ?>" required></td>
                </tr>
                <tr>
                    <td><label for="kichthuoc">Kích Thước:</label></td>
                    <td><input type="text" id="kichthuoc" size="50" name="kichthuoc" placeholder="<?php echo $ds['KichThuoc'] ?>" required></td>
                </tr>
                <tr>
                    <td><label for="cannang">Cân Nặng:</label></td>
                    <td><input type="text" id="cannang" size="50" name="cannang" placeholder="<?php echo $ds['CanNang'] ?>" required></td>
                </tr>
                <tr>
                    <td><label for="soluonghang">Số Lượng Hàng:</label></td>
                    <td><input type="text" id="soluonghang" size="50" name="soluonghang" placeholder="<?php echo $ds['SoLuongHang'] ?>" required></td>
                </tr>

                <tr>
                    <td><label for="donvitinh">Đơn Vị Tính:</label></td>
                    <td><input type="text" id="donvitinh" size="50" name="donvitinh" placeholder="<?php echo $ds['DonViTinh'] ?>" required></td>
                </tr>
                <tr>
                    <td><label for="dongia">Đơn Giá:</label></td>
                    <td><input type="text" id="dongia" size="50" name="dongia" placeholder="<?php echo $ds['DonGia'] ?>" required></td>
                </tr>
                <tr>
                    <td><label for="madanhmuc">Mã Danh Mục:</label></td>
                    <td>
                        <select id="madanhmuc" name="madanhmuc">
                            <?php
                            while ($dsdanhmuc = $resultdanhmuc->fetch_assoc()) { ?>
                            <option value="<?php echo $dsdanhmuc['MaDanhMuc']?>" name="<?php echo $dsdanhmuc['MaDanhMuc']?>"><?php echo $dsdanhmuc['MaDanhMuc']?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="manhacungcap">Mã Nhà Cung Cấp:</label></td>
                    <td>
                    <select id="manhacungcap" name="manhacungcap">
                            <?php
                            while ($dsncc = $resultncc->fetch_assoc()) { ?>
                            <option value="<?php echo $dsncc['MaNhaCungCap']?>" name="<?php echo $dsncc['MaNhaCungCap']?>"><?php echo $dsncc['MaNhaCungCap']?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" name='sbm' style="margin-top: 18vw;color:aliceblue">Sửa</button></td>
                </tr>
            </form>
        </table>
    </div>
</body>

</html>