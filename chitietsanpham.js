var arr = ['imge/mara1.webp', 
        'imge/mara2.webp', 
        'imge/mara3.webp', 
        'imge/mara4.webp', 
        'imge/mara5.webp', 
        'imge/mara6.webp'];
function doi_anh(idx){
    var imgMain = document.getElementById('imgMain');
    var img = arr[idx];
    imgMain.setAttribute('src',img);

    var imgThumbs = document.getElementById('imgThumbs');
    var imgs = imgThumbs.getElementsByTagName('img');
    for (var i=0;i<imgs.length;i++){
        imgs[i].className = "";
    }
    imgs[idx].className = "active";
}


