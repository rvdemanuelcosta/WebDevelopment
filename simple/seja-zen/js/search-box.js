function uiNorToSearch(){
    document.getElementById("h-header").style.display = "none"
    document.getElementById("h-logo").style.display = "none"
    document.getElementById("search-area").style.width = "280px"
    document.getElementById("entrar").style.display = "none"
    document.getElementById("start-search").style.display = "none"
    document.getElementById("end-search").style.display = "inline-block"
    document.getElementById("search-ifield").style.display = "inline-block"
    document.getElementById("cancel-search-bt").style.display = "inline-block"
}

function uiSearchToNor(){
    document.getElementById("h-header").style.display = "inline-block"
    document.getElementById("h-logo").style.display = "inline-block"
    document.getElementById("search-area").style.width = "120px"
    document.getElementById("entrar").style.display = "inline-block"
    document.getElementById("start-search").style.display = "inline-block"
    document.getElementById("end-search").style.display = "none"
    document.getElementById("search-ifield").style.display = "none"
    document.getElementById("cancel-search-bt").style.display = "none"
}
function searchInPage(){
    console.log("search in the page")
    uiSearchToNor()
}