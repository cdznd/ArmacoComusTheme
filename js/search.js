document.addEventListener('DOMContentLoaded', (event) => {


    //1. constructors, describe and initiate our objects and variables.

    let open_button = document.querySelector(".js-search-trigger");

    let close_button = document.querySelector(".search-overlay__close");

    let search_overlay = document.querySelector(".search-overlay");

    //Input DOM-VAR
    let search_input = document.querySelector(".search-input");

    let html = document.querySelector("html");

    var isOverlay_open = false;

    let search_result = document.querySelector(".search-overlay__results");

    let search_result_container = document.getElementById("search_result_container");

    var isSpinnerVisible = false;



    var typing_time;

    var previous_value = '';




    //2. Events

    //Open search window
    open_button.addEventListener('click',(event) => {

        openOverlay();

    });
    //Close search window
    close_button.addEventListener('click', (event) => {

        closeOverlay();

    });


    /* used to close with esc, General keyup, whenever you type it will catch */
    document.addEventListener('keyup',(event) => {

        keyPressDispatcher(event);

    });
    

    /* Input from form, event just inside de input */
    search_input.addEventListener('keyup',(event) => {

        typingLogic();

    });


    //3. Functions
    
    function typingLogic(){

        if(search_input.value != previous_value){

            clearTimeout(typing_time);

            if(!isSpinnerVisible){

                search_result.innerHTML = " <div class='fa-3x'> <i class='fas fa-spinner fa-spin'></i> </div> ";

                isSpinnerVisible = true;

            } 

            if(search_input.value == ''){

                search_result.innerHTML = " <div class='fa-3x'> <i class='fas fa-spinner fa-spin'></i> </div> ";

                isSpinnerVisible = true;

            } 

            typing_time = setTimeout(function(){

                getResults();

            },100);

        }

        previous_value = search_input.value;

    }

    function getResults(){

        //https://javascript.info/fetch

        var typed = search_input.value;

        //FIXXX THIS, WHEN Nothing is typed it search for nothing, when it shouldn' search.

        //var url = 'https://armaco.local/wp-json/wp/v2/pages?search=' + typed;
        
        //Production URL
        var url = 'https://armacoacosespeciais.com/wp-json/wp/v2/pages?search=' + typed;
        
        fetch(url,{method:"GET"})
            .then(response => response.json())
            .then(data => {
                
                search_result_container.classList.remove("none");

                search_result.innerHTML = `
                
                    <div class="row">

                    ${data.map(item => {

                        return `

                            <div class="col-md-4">

                                <div class="box">

                                    <figure class="box-effect">

                                        <img src="${item.better_featured_image.source_url}" class="product-image" alt="Product image">

                                        <figcaption>

                                            <h2> ${ item.title.rendered } </h2>

                                            <p> ${ item.content.rendered } </p>

                                            <a href=" ${ item.link } ?> "></a>

                                        </figcaption>

                                    </figure>

                                </div>

                            </div>

                        `
                
                    }).join('')}

                    </div>
                
                `
            });            
        
    };

    
    //Key Events//for closing
    function keyPressDispatcher(e){

        var keyCode = e.keyCode;

        //Press Esc to close
        if(keyCode == 27 && isOverlay_open){

            closeOverlay();

        }

    }
    

    function openOverlay(){

        search_overlay.classList.add("search-overlay--active");

        html.classList.add("html-no-scroll");

        isOverlay_open = true;

    }

    function closeOverlay(){

        search_overlay.classList.remove("search-overlay--active");

        html.classList.remove("html-no-scroll");

        search_result.innerHTML = '';
        search_result_container.classList.add("none");

        isOverlay_open = false

    }

});





