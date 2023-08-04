<?php
    require 'connect.php';

    //lấy dữ liệu đổ ra form
    $id = $_GET['id'];
    $flight = $conn->query("SELECT * FROM flights WHERE flight_id=$id")->fetch();
    $airlines = $conn->query("SELECT * FROM airlines")->fetchAll();

    //lấy dữ liệu mới từ form, lưu vào database
        //khởi tạo những message báo lỗi bằng string rỗng
        $errorNumber = $errorImage = $errorTotalPassenger = $errorDescription = ""; 

        if (isset($_POST['submit'])) { // nếu click submit thì mới validate và lưu dữ liệu
            $countError = 0;
    
            if (strlen($_POST['number']) === 0) { //validate number trống
                $errorNumber = "Flight number không được để trống";
                $countError += 1;
            }
            if (strlen($_POST['description']) === 0) { //validate description trống
                $errorDescription = "Description không được để trống";
                $countError += 1;
            }
            if ($_POST['total_passengers'] < 0) { //validate total passengers âm
                $errorTotalPassenger = "Total passengers không được nhỏ hơn 0";
                $countError += 1;
            }
    
            if ($countError === 0) { //nếu không có lỗi nào thì tiến hành upload file và tạo data
                if (!empty($_FILES['image']['name'])) { //nếu có upload ảnh -> lưu ảnh mới
                    //upload file
                    $dest = 'image/'.basename($_FILES['image']['name']); //khai báo đường dẫn lưu ảnh (lưu ý phải tạo folder image trước)
                    $temp = $_FILES['image']['tmp_name']; //lấy ảnh từ bộ nhớ tạm thời với ['tmp_name']
                    // $fileType = $_FILES['image']['type']; //lấy kiểu file được upload lên với ['type']
                    // $fileSize = $_FILES['image']['size']; //lấy kiểu file được upload lên với ['size']
                    move_uploaded_file($temp, $dest); //chuyen file tu bo nho tam sang thu muc muon luu tru
                    $image = $dest; //lưu đường dẫn lưu ảnh vào trường image
                } else { //không thì giữ nguyên ảnh cũ
                    $image = $flight['image'];
                }
                
                //lay du lieu ng dugn nhap tu form
                $number = $_POST['number'];
                $totalPassenger = $_POST['total_passengers'];
                $description = $_POST['description'];
                $airlineId = $_POST['airline_id'];
    
                //câu query insert vào db
                $sql = "UPDATE flights 
                SET flight_number='$number',image='$image',total_passengers='$totalPassenger',description='$description',airline_id='$airlineId'
                WHERE flight_id=$id";
                $conn->exec($sql); //thực thi câu query
                
                header('Location: ./index.php'); //redirect về trang chủ
            }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit flight</title>
</head>
<body>
    <form action="./edit.php?id=<?=$flight['flight_id']?>" method="POST" enctype="multipart/form-data"> <!-- thêm enctype để upload file -->
        <label for="flight">Number</label>
        <input type="text" value="<?=$flight['flight_number']?>" name="number"> 
        <span style="color:red"><?=$errorNumber?></span>  <!-- thông báo lỗi validate number -->
        <br>
        <label for="image">Image</label>
        <img src="<?=$flight['image']?>" alt="" height="100">
        <input type="file" name="image">
        <span style="color:red"><?=$errorImage?></span> <!-- thông báo lỗi validate image  -->
        <br>
        <label for="passenger">Total passengers</label>
        <input type="number" value="<?=$flight['total_passengers']?>" name="total_passengers">
        <span style="color:red"><?=$errorTotalPassenger?></span> <!-- thông báo lỗi validate total passenger  -->
        <br> 
        <label for="description">Description</label>
        <input type="text" value="<?=$flight['description']?>" name="description">
        <span style="color:red"><?=$errorDescription?></span> <!-- thông báo lỗi validate description -->
        <br>
        <label for="airline">Airline</label>
        <select name="airline_id">
            <!-- lấy dữ liệu trong bảng airlines cho các option -->
            <?php foreach ($airlines as $airline) { ?>
                <?php if ($airline['airline_id'] === $flight['airline_id']) { ?>
                    <option selected value="<?=$airline['airline_id']?>">
                        <?=$airline['airline_name']?>
                    </option>
                <?php } else { ?>
                    <option value="<?=$airline['airline_id']?>">
                        <?=$airline['airline_name']?>
                    </option>
                <?php } ?>
            <?php } ?>
        </select>
        <button type="submit" name="submit">Save</button>
    </form>
</body>
</html>