function check(){
    console.log("Здравствуйте " + document.forms[0].name.value)
    for(var i = 0; i<3; i++){
        if(document.forms[0].choose[i].checked){
            console.log("Ответ будет " + document.forms[0].choose[i].value);
        } 
    }
  
    
    console.log("Вами были выбраны языки: ")
    for(var i = 0; i<3; i++){
        if(document.forms[0].chckbx[i].checked)
        console.log(document.forms[0].chckbx[i].value);
    }

    console.log("Цель вашего обращения " + document.forms[0].theme[document.forms[0].theme.selectedIndex].text);
    console.log("Ваш номер: " + document.forms[0].tel.value);
    console.log("Ваша почта: " + document.forms[0].email.value);
    console.log("Ваше обращение: " + document.forms[0].question.value);

}
function size(size){
        for(i = 1; i<7;i++){
            document.images[i].style = `width: ${size}px; height: ${size}px`;
        }    
}
