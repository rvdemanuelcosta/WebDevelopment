let page=0
let rule0 = ""
let rule0Content
let mainPage
let nextBT
let previousBT
let pageContent
let userPage
let pageHeader
function changePage(){
    mainPage = document.getElementById("mainPage")
    rule0 = document.getElementById("rules")
    nextBT = document.getElementById("nextPage")
    previousBT = document.getElementById("previousPage")
    userPage = document.getElementById("page")
    pageHeader = document.getElementById("pageHeader")
    saveRule()
    
    switch(page){
        case 0: 
            disableRule0()
            allowTypping()
            changeBG()
            changeTextColor()
            disableNextBT()
            enablePreviousBT()
            page = 1
        break;
        case 1:
            enableRule0()
            savePageContent()
            disableTypping()
            changeBG()
            changeTextColor()
            disablePreviousBT()
            enableNextBT()
            page = 0
        break;
    }
}
// allow the user to type
function allowTypping(){
    userPage.style.display = "block"
}
// disable the textarea for user to type
function disableTypping(){
    userPage.style.display = "none"
    userPage.value = ""
}
// save the page content
function savePageContent(){
    pageContent = mainPage.value
}
// load the page content
function loadPageContent(){
    mainPage.value = pageContent
}
// save the content of textarea id rule
function saveRule(){
    if(rule0.value != ""){
        rule0Content = rule0.value
    }
    
}
// disable the content of textarea id rule
function disableRule0(){
    rule0.value = ""
    rule0.style.display = "none"
}
// enable the content of textarea id rule
function enableRule0(){
    rule0.value = rule0Content
    rule0.style.display = "block"
}
// changes the background image and color of the page.
function changeBG(){
    switch(page){
        case 0:
            mainPage.style.backgroundColor = "white"
            break;
        case 1:
            mainPage.style.backgroundColor = "black"
            break;
    }
}
// changes the color of the text.
function changeTextColor(){
    switch(page){
        case 0:
            userPage.style.color = "black"
            pageHeader.style.color = "black"
        break;
        case 1:
            userPage.style.color = "white"
            pageHeader.style.color = "white"
        break;
    }
}

// disable the previous button
function disablePreviousBT(){
    previousBT.style.display = "none"
}
//disable the button for next page
function disableNextBT(){
    nextBT.style.display = "none"
}
// enable previous button
function enablePreviousBT(){
    previousBT.style.display = "block"
}
// enable next button
function enableNextBT(){
    nextBT.style.display = "block"
}
