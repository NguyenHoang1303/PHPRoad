$(document).ready(function () {

    const name = $('input[name=name]');
    const description = $('textarea[name=description]');
    const district = $('select[name=district]');
    const created_at = $('input[name=created_at]');
    const status = $('select[name=status]');

    $('form[name=road-form]').submit(function (event) {
        event.preventDefault();

        const data = {
            name: name.val(),
            description: description.val(),
            district: district.val(),
            created_at: created_at.val(),
            status: status.val(),
        }

        let error = validate(data)
        if (Object.keys(error).length > 0) {
            Object.keys(error).forEach(key => {
                switch (key) {
                    case 'name':
                        $('#name-road').text(error[key])
                        break;
                    case 'description':
                        $('#description-road').text(error[key])
                        break;
                    case 'created_at':
                        $('#created_at-road').text(error[key])
                        break;
                    case 'status':
                        $('#status-road').text(error[key])
                        break;
                    case 'district':
                        $('#district-road').text(error[key])
                        break;
                }
            })
        } else {
            $.ajax({
                url: 'http://localhost:5000/RoadManager/api/processForm.php',
                method: 'POST',
                data: JSON.stringify(data),
                success: function (response) {
                    alert('Creat new road success!');
                    console.log(response.message);

                },
                error: function (response) {
                    alert("Creat new fail!");
                    console.log(response.message);
                }
            });
        }

    });

    function validate(obj) {
        const messageError = {};
        Object.keys(obj).forEach(key => {
            switch (key) {
                case 'name':
                    if (obj[key].length === 0) {
                        messageError['name'] = '*Name cannot left blank';
                    }
                    break;
                case 'description':
                    if (obj[key].length === 0) {
                        messageError['description'] = '*Description cannot left blank';
                    }
                    break;
                case 'created_at':
                    if (obj[key].length === 0) {
                        messageError['created_at'] = '*Created at cannot left blank';
                    }
                    break;
                case 'status':
                    if (obj[key].length === 0) {
                        messageError['status'] = '*Status cannot left blank';
                    }
                    break;
            }
        })
        return messageError;
    }
});