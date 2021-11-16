$(document).ready(function () {
    let bodyTable = $('#table-road tbody');
    let keyword = $('input[name="keyword"]');
    let district = $('select[name="district"]');

    $('#district').change(function () {
        $('form[name=search-road]').submit();
    })

    $('form[name=search-road]').submit(function (event) {
        event.preventDefault();
        loadData();
    })
    loadData();

    function loadData() {
        const obj = {
            keyword: keyword.val(),
            district: district.val(),
        }
        $.ajax({
            url: 'http://localhost:5000/RoadManager/api/list.php',
            method: 'get',
            data: obj,
            success: function (response) {
                let headerTable = `
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>District</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Created at</th>
                            </tr>`
                let listRoadHtml = ``;
                response.data.forEach(ele => {
                    listRoadHtml += `
                        <tr>
                            <td>${ele.id}</td>
                            <td>${ele.name}</td>
                            <td>${handlerDistricts(ele.district_id)}</td>
                            <td>${ele.description}</td>
                            <td>${handlerStatus(ele.status)}</td>
                            <td>${moment(ele.created_at).format('YYYY-MM-DD')}</td>
                        </tr>`
                })

                bodyTable.html(`${headerTable}${listRoadHtml}`)
            },
            error: function () {
                console.log('something error');
            }
        });
    }

    function handlerStatus(status) {
        if (status === '0') {
            return "Đang thi công";
        }
        if (status === '1') {
            return "Đang sử dụng";
        }
        if (status === '2') {
            return "Đang sửa chữa";
        }
        return "fail";
    }

    function handlerDistricts(district) {
        let districtName = '';
        switch (district) {
            case '1':
                districtName = "Thanh Xuân";
                break;
            case '2':
                districtName = "Hoàn Kiếm";
                break;
            case '3':
                districtName = "Đống Đa";
                break;
            case '4':
                districtName = "Cầu Giấy";
                break;
            case '5':
                districtName = "Tây Hồ";
                break;

        }

        return districtName;
    }


});