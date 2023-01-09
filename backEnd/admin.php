<?php 
    session_start();
    $action = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <h2>Trang admin</h2>
            <div class="icons">
                <i class="far fas fa-cog"></i>
                <a href="./signOut.php"><i class="fas fa-sign-out-alt"></i></a>
            </div>
        </nav>
    </header>

    <div class="main">
        <div class="col-2">
            <ul>
                <li>
                    <i class="fas fa-home"></i>
                    <a href="./admin.php?page=index">Trang chủ</a>
                </li>
                <li>
                    <i class="fas fa-list"></i>
                    <a href="./admin.php?page=catergory&action=show">Danh mục</a>
                </li>
                <li>
                    <i class="fas fa-tshirt"></i>
                    <a href="./admin.php?page=product&action=show">Sản phẩm</a>
                </li>
                <li>
                    <i class="fas fa-user"></i>
                    <a href="./admin.php?page=user&action=show&type=all">Người dùng</a>
                </li>
            </ul>
        </div>
        <div class="content">
                <?php
                    include './lib.php';
                    if (isset($_GET['page'])){
                        $page = $_GET['page'];
                        switch($page){
                            case 'catergory':
                                checkAction($page);
                                break;
                            case 'product':
                                checkAction($page);
                                break;
                            case 'user':
                                checkAction($page);
                                break;
                            default:
                                include './index.php';
                                break;
                        }
                    }
                ?>
        </div>
    </div>
</body>
</html>