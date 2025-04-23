$('#js-ajax-test').click((e) => {
    e.preventDefault();

    const name = document.getElementById('nameInput').value;
    const message = document.getElementById('reviewTextarea').value;

    if (!name || !message) {
        alert('Необходимо заполнить обязательные поля!');
        return;
    }

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {
            action: 'test',
            name: name,
            message: message
        },
        success: function(data) {
            const reviewsList = document.getElementById('reviewsList');
            reviewsList.innerHTML = '';
            const newComments = data.reviews;
            newComments.forEach(el=>{
                const newElem = document.createElement('div');
                newElem.className = 'card mb-3';
                newElem.innerHTML = `
                    <div class="card-body">
                        <h5 class="card-title">${el.name}</h5>
                        <p class="card-text">${el.message}</p>
                        <hr>
                        <p class="card-text">${el.date}</p>
                    </div>
                `;

                reviewsList.appendChild(newElem);
            });

            document.getElementById('reviewForm').reset();

        },
        error: function(xhr, status, error) {
            alert('Ошибка при отправке: ' + error);
        }
    });
});

$(document).ready(function() {
    $('#nameInput').on('input', function() {
        $('#js-ajax-test').prop('disabled', !$(this).val().trim());
    }).trigger('input');
});