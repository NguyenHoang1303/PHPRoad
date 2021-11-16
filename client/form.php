<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>
<div class="body-form">
    <h2 class="w3-center">Creat new road</h2>
    <form name="road-form" action="api/processForm.php" class="w3-container w3-card-4 w3-light-grey" method="post">
        <div class="message">

        </div>
        <p>
            <label for="">Name:</label>
            <input class="w3-input w3-border" type="text" name="name" placeholder="Road name..">
            <span id="name-road" class="w3-text-red"></span>
        </p>
        <p>
            <label for="">District:</label>
            <select class="w3-input w3-padding-16" name="district">
                <option value="1">Thanh Xuân</option>
                <option value="2">Đống Đa</option>
                <option value="3">Cầu Giấy</option>
            </select>
            <span id="district-road" class="w3-text-red"></span>
        </p>
        <p>
            <label for="">Description:</label>
            <textarea class="w3-input w3-border" name="description" placeholder="Enter description"></textarea>
            <span id="description-road" class="w3-text-red"></span>
        </p>
        <p>
            <label for="">Created at:</label>
            <input class="w3-input w3-padding-16" type="date" name="created_at"">
            <span id="created_at-road" class="w3-text-red"></span>
        </p>
        <p>
            <label for="">Status:</label>
            <select class="w3-input w3-padding-16" name="status">
                <option value="1">Đang sử dụng</option>
                <option value="0">Đang thi công</option>
                <option value="2">Đang sửa chữa</option>
            </select>
            <span id="status-road" class="w3-text-red"></span>
        </p>
        <p>
            <input type="submit" class="w3-btn w3-green btn" value="Submit">
            <input type="reset" class="w3-btn w3-grey w3-text-white btn" value="Reset">
            <a href="/RoadManager/client/list.php" class="w3-btn w3-blue">List road</a>
        </p>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../js/form.js"></script>
</body>
</html>