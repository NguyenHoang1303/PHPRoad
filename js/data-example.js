$(document).ready(function () {


    $('form[name=seedData]').submit(function (event) {
        event.preventDefault();
        seeData();
    })

    function seeData() {
        $.ajax({
            url: 'http://localhost:5000/RoadManager/db/seedData.php',
            method: 'post',
            data: JSON.stringify(obj),
            success: function (response) {
                console.log('response:', response.message);
            },
            error: function () {
                console.log('something error');
            }
        });
    }

    const listRoad = [
        {
            name: 'Đường Nguyễn Trãi',
            description: 'Đường Nguyễn Trãi bắt đầu từ Ngã Tư Sở đến sát địa giới quận Hà Đông ở Phùng Khoang.',
            district: '1',
            created_at: '1980/1/1',
            status: 1,
        },
        {
            name: 'Đường Vũ Trọng Phụng',
            description: 'Đường Vũ Trọng Phụng mở rộng có chiều dài 440m, nối đường Nguyễn Huy Tưởng và trục đường Nguyễn Trãi đều nằm trên địa bàn quận Thanh Xuân.',
            district: '1',
            created_at: '1980/1/1',
            status: 2,
        },
        {
            name: 'Đường Lê Duẩn',
            description: 'Đường Lê Duẩn dài 2,5 km, đi từ đường Điện Biên Phủ đến nút giao hầm Kim Liên.',
            district: '2',
            created_at: '1988/1/1',
            status: 1,
        },
        {
            name: 'Đường Đinh Tiên Hoàng',
            description: 'Phố Đinh Tiên Hoàng dài 900m, rộng 16m. Từ quảng trường Đông Kinh nghĩa thục (đầu phố Hàng Đào, Hàng Gai), chạy quanh bờ bắc và đông của hồ Hoàn Kiếm, tới ngã tư Tràng Tiền - Hàng Khay - Hàng Bài.',
            district: '2',
            created_at: '1954/1/1',
            status: 1,
        },
        {
            name: 'Đường Nguyễn Lương Bằng',
            description: 'Phố kéo dài từ ngã năm đường La Thành, phố Tôn Đức Thắng, phố Ô Chợ Dừa, phố Xã Đàn và phố Đông Tác kéo dài đến phố Tây Sơn.',
            district: '3',
            created_at: '1989/1/1',
            status: 1,
        },
        {
            name: 'Đường Thái Hà',
            description: 'Thái Hà thuộc địa phận phường Trung Liệt quận Đống Đa - Hà Nội, kéo dài từ ngã tư Thái Hà - Chùa Bộc, chạy dài giao với các đường Yên Lãng, Hoàng Cầu tới đường Láng Hạ (cạnh Trung Tâm Chiếu Phim Quốc Gia).Phố dài 1, 2km, rộng 25 - 30m.',
            district: '3',
            created_at: '1989/1/1',
            status: 1,
        },
        {
            name: 'Đường Trần Duy Hưng',
            description: 'Dài 1600m nối từ ngã tư đường Nguyễn Chí Thanh - Đường Láng đến ngã tư đường Phạm Hùng - Khuất Duy Tiến.',
            district: '4',
            created_at: '1999/1/1',
            status: 1,
        },
        {
            name: 'Đường Cầu Giấy',
            description: 'Đường Cầu Giấy dài 1.800m, rộng 20m. Từ ngã ba đền Voi Phục - Kim Mã - La Thành đi qua Cầu Giấy bắc qua sông Tô Lịch đến ngã ba phố Nguyễn Phong Sắc - Xuân Thủy.',
            district: '4',
            created_at: '1999/1/1',
            status: 1,
        },
        {
            name: 'Đường Âu Cơ',
            description: 'Đường Âu Cơ dài 3.000m, rộng 6-8m. Đường đi từ ngã ba Nhật Tân đến đường Nghi Tàm (khu vực khách sạn Thắng Lợi).',
            district: '5',
            created_at: '1999/1/1',
            status: 1,
        },
        {
            name: 'Đường Thanh Niên',
            description: 'Đường Thanh Niên dài 1,0 km, là đường ngắn nhất Hà Nội. Đường kéo từ dốc Yên Phụ tới ngã tư Quán Thánh - Thụy Khuê, cách Hồ Gươm chừng 3 km về hướng tây bắc.',
            district: '5',
            created_at: '1999/1/1',
            status: 1,
        },
    ]
    const listDistricts = [
        {
            id: 1,
            name: 'Thanh Xuân',
        },
        {
            id: 2,
            name: 'Hoàn Kiếm',
        },
        {
            id: 3,
            name: 'Đống Đa',
        },
        {
            id: 4,
            name: 'Cầu Giấy',
        },
        {
            id: 5,
            name: 'Tây Hồ',
        },

    ]
    const obj = {
        roads: listRoad,
        districts: listDistricts,
    }


});