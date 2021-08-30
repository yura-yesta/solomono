$(document).ready(function ()
{
    ajaxic()
    gotCategory()

    document.onclick = event => {
        if (event.target.classList.contains('category')) {
            let id = event.target.dataset.id;
            change('id_cat', id)
        }
        if (event.target.classList.contains('add-product')) {
            let id = event.target.dataset.id;
            modalWindow(id)
        }
        if (event.target.classList.contains('select')) {
            let id = event.target.dataset.id;
            change('select', id)
        }
        if (event.target.classList.contains('all')) {
            addUrl('/')
        }
    }
})

function ajaxic()
{
    $.ajax({
        method: "POST",
        url: "shop.php",
        data:  getUrl(),
        success: (function (response)
        {
             out(JSON.parse(response))
        })
    })
}

function change(argument, value)
{
    let urlObject = getUrl()
    let url = '' ;

    if(!urlObject[argument]){
        urlObject[argument] = value;
    }if (urlObject[argument] !==value){
        urlObject[argument] = value
    }
    for (let key in urlObject){
        url +=key+'='+urlObject[key]+';'
    }
    addUrl('?'+url)
}

function getUrl()
{
    var url = {};
    var parts = window.location.href.replace(/[?;]+([^=;]+)=([^;]*)/gi, function(m,key,value)
    {
        url[key] = value;
    });
    return url;
}

function addUrl(url)
{
    const id = { 'page_id': 1 };
    history.pushState(id, "", url)
    ajaxic()
}

function out(data)
{
    let out = '';
    for (let key in data){
        out += `<div class="product">
                    <img src="image/product.png" alt="">
                    <p class="name">${data[key].name}</p>
                    <div class="price">${data[key].price} uah</div>
                    <button class="add-product"  data-id="${data[key].id}"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Купить</button>
                </div>`
    }
    document.querySelector('.part-2').innerHTML = out;
}

function gotCategory()
{
        $.ajax({
            method: "POST",
            url: "shop.php",
            data: {gotCategory : "gotCategory"} ,
            success: (function (response)
            {
                let data = JSON.parse(response);
                let out = '';
                for (let key  in data){
                    let res = data[key]
                    for (let item in res){
                        out += `<li><a class="category" data-id="${key}">${item}(${res[item]})</a></li>`
                    }
                }
                document.querySelector('.category-out').innerHTML = out;
            })
        })
}

function modalWindow(id)
{
    let out = '';

    $.ajax({
        method: "POST",
        url: "shop.php",
        data: {id : id},
        success: (function (response)
        {
            let res = JSON.parse(response)

            out =`<div className = "modal-header">
                  <h5 className = "modal-title" id = "staticBackdropLabel" >${res[0].name}</h5>
                  </div>
                  <div className="modal-body">
                  <div className="product">
                  <img src="image/product.png" alt="">
                  <p className="name">${res[0].name}</p>
                  <div className="price">${res[0].price} uah</div>
                  <button className="add-product" data-id="${res[0].id}">Додати в корзину</button>
                  </div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  <div className="modal-footer">
                  <button type="button" className="btn btn-secondary" data-bs-dismiss="modal">Продовжити покупки</button>
                  <button type="button" className="btn btn-primary">Прейти в корзину</button>
                  </div> `
            document.querySelector('.modal-body').innerHTML = out;
        })
    })
}
