<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="../css/custom.css">
    <title>Document</title>
</head>
<body>
<div class="w3-container table-custom">

    <div class="header-table-top">
        <div class="header-table-left">
            <h2>Road Table</h2>
            <form action="/RoadManager/db/seedData.php" method="post" name="seedData">
                <button class="w3-button w3-white w3-border w3-round-large btn-seed">SeedData</button>
            </form>
        </div>
        <form action="api/list.php" method="GET" name="search-road" style="width: 100%">
            <div class="header-table-right">
                <select class="w3-input w3-border keyword w3-border" id="district" name="district">
                    <option value="-1">Filter by district</option>
                    <option value="1">Thanh Xuân</option>
                    <option value="2">Đống Đa</option>
                    <option value="3">Cầu Giấy</option>
                </select>
                <input type="text" name="keyword" class="w3-input w3-border keyword w3-border"
                       placeholder="Search by name...">
                <input type="submit" id="submit" value="Search" class="w3-button w3-white w3-border w3-round-large">
                <a href="/RoadManager/client/list.php" style="padding: 8px 10px;"
                   class="w3-button w3-white w3-border w3-round-large">Reset</a>
                <a href="/RoadManager/client/form.php" style="padding: 8px 10px;"
                   class="w3-button w3-white w3-border w3-round-large">Create new</a>
            </div>
        </form>
    </div>

    <div class="w3-responsive">
        <table class="w3-table-all" id="table-road">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>District</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created at</th>
            </tr>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../js/list.js"></script>
<script src="../js/data-example.js"></script>
</body>
</html>