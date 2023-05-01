let page=0

function nextPage(){
    switch(page){
        case 0: 
        allowTypping()
        changeBG()
        page += 1
        break;
    }
}
function allowTypping(){
    document.getElementById("page").style.display = "block"
}
function changeBG(){
    switch(page){
        case 0:
            document.getElementById("mainPage").style.backgroundColor = "white"
            document.getElementById("mainPage").style.backgroundImage = "url('images/bg320.png')"
            document.getElementById("mainPage").style.backgroundSize = "contain"
            document.getElementById("page").style.color = "black"
            document.getElementById("pageHeader").style.color = "black"
            break;
    }
}