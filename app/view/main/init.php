<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="card-title h4 mb-4">Оставьте отзыв</h1>
                    <form id="reviewForm" method="POST" action="">
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Ваше имя</label>
                            <input type="text" class="form-control" id="nameInput" name="name" placeholder="Ваше имя" required>
                        </div>
                        <div class="mb-3">
                            <label for="reviewTextarea" class="form-label">Ваш отзыв</label>
                            <textarea class="form-control" id="reviewTextarea" name="review" rows="3" placeholder="Ваш отзыв" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="js-ajax-test">Отправить</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="card-title h4 mb-4">Отзывы</h1>
                    <div id="reviewsList">
                        <?php if (!empty($reviews)): ?>
                            <?php foreach ($reviews as $review): ?>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= htmlspecialchars($review['name']) ?></h5>
                                        <p class="card-text"><?= htmlspecialchars($review['message']) ?></p>
                                        <hr>
                                        <p class="card-text"><?= htmlspecialchars($review['date']) ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="alert alert-info">Пока нет отзывов. Будьте первым!</div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>