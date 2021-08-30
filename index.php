<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="main.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
<header>
    <div class="container">
    <div class="select-box col-3 mt-5 ">
        <select class="form-select " aria-label="Default select example">
            <option selected>Фільтер товарів:</option>
            <option class="select" data-id="price">спочатку дешевші</option>
            <option class="select" data-id="name">по алфавіту</option>
            <option class="select" data-id="date">спочатку нові</option>
        </select>
    </div>
    </div>
</header>
<section>
    <div class="container">
        <div class="shop-content">
            <div class="part-1">
                <div class="widget">
                    <h3 class="widget-title">Категории</h3>
                    <ul class="widget-list">
                        <li><a class="all">Всі категорії</a></li>
                        <div class="category-out">
                            <li><a class="category" data-id="1">wrong</a></li>
                        </div>

                    </ul>
                </div>
            </div>
            <div class="part-2">
                <div class="product">
                    <img src="image/product.png" alt="">
                    <p class="name">Adidas original 44 XL</p>
                    <div class="price">1000 uah</div>
                    <button class="add-product  " data-bs-toggle="modal" data-bs-target="#staticBackdrop">Купить</button>
                </div>
                <div class="product">
                    <img src="image/product.png" alt="">
                    <p class="name">Adidas original 44 XL</p>
                    <div class="price">1000 uah</div>
                    <button class="add-product">Купить</button>
                </div>
                <div class="product">
                    <img src="image/product.png" alt="">
                    <p class="name">Adidas original 44 XL</p>
                    <div class="price">1000 uah</div>
                    <button class="add-product">Купить</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="product">
                    <img src="image/product.png" alt="">
                    <p class="name">Adidas original 44 XL</p>
                    <div class="price">1000 uah</div>
                    <button class="add-product">Додати в корзину</button>
                </div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Продовжити покупки</button>
                <button type="button" class="btn btn-primary">Прейти в корзину</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>