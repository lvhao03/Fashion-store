<?php 
    include './db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
       update_user($conn);
    } 
    
    $stmt = $conn->prepare('SELECT * FROM user WHERE id= ?');
    $stmt->execute([$_GET['id']]);
    $user = $stmt->fetch();

    function update_user($conn){
        $stmt = $conn->prepare('UPDATE user SET userName=?, email=?, userRole=? WHERE user.id= ?');
        $stmt->execute([$_POST['userName'],$_POST['email'], $_POST['userRole'],$_GET['id']]);
        header('Location: http://localhost:8080/PHP_1/duAnMau/backEnd/admin.php?page=user&action=show');
        die();
    }
?>
<h2>Chỉnh sửa người dùng</h2>
<form class="form" method="POST">
    <div class="form-group">
        <label for="userName">Tên người dùng</label>
        <input type="text" name='userName' class="form-control" id="userName" value="<?php echo $user['userName']; ?>" placeholder="Nhập tên người dùng">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text"name='email' class="form-control" id="email" value="<?php echo $user['email']; ?>" placeholder="Nhập email">
    </div>
    <div class="form-group">
        <label for="role">Vai trò</label>
        <select class="form-control" name="userRole" id="">
            <option value="Khách hàng">Khách hàng</option>
            <option value="admin">Admin</option>
        </select>
    </div>
    <button type='submit' class="btn btn-primary">Chỉnh sửa</button>
    <a href="./admin.php?page=user&action=show" class="text-white btn btn-primary">Xem danh sách</a>
</form>
