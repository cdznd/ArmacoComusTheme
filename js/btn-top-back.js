//Button Top-Back
document.addEventListener('DOMContentLoaded', (event) => {
    
    var check = document.getElementById("check");
    let html = document.querySelector("html");

    check.addEventListener("click",function(){

        if(check.checked){

            html.classList.add("html-no-scroll");
            
        }else{

            html.classList.remove("html-no-scroll");

        }

    });

    var topBackBtn = document.querySelector('.btn-top-back');

    var rootElement = document.documentElement;

    document.addEventListener("scroll", function () {

        var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight;

        if ((rootElement.scrollTop / scrollTotal) > 0.20) {

            topBackBtn.classList.add("show");

        } else {

            topBackBtn.classList.remove("show");

        }

    })

    topBackBtn.addEventListener("click", function () {

        rootElement.scrollTo({

            top: 0,
            behavior: "smooth"

        })

    })

});