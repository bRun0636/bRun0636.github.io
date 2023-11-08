function toggle(){
    const checkbox = document.getElementById('toggle_dark');
    if(checkbox.checked == true){
        document.getElementById('mylink').href = "./styles/dark_theme.css"
    }
    else{
        document.getElementById('mylink').href = "./styles/light_theme.css"
    }
}
function size(size){
    for(i = 1; i<7;i++){
        document.images[i].style = `width: ${size}px; height: ${size}px`;
    }    
}
let array = Array.from(document.getElementsByTagName('*'));
array.forEach(item => {item.addEventListener("click", AddSelect)});
function AddSelect(){
    array.forEach((item) => {item.classList.remove("input-style")});
    event.target.classList.add("input-style");
}
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
    console.log("Ваше обращение: " + document.forms[0].area.value);

}
area.value = localStorage.getItem('area');
        area.oninput = () => {
        localStorage.setItem('area', area.value)
    };

function add_form(){
    let my_block = document.createElement('div');
    my_block.className = 'box_comp';
    my_block.id = "box";
    document.getElementById("main_block").append(my_block);

    let block_inf = document.createElement("div");
    my_block.append(block_inf);

    let inf_h2 = document.createElement("h2");
    inf_h2.innerHTML = document.getElementById("title").value;
    block_inf.append(inf_h2);

    let time = document.createElement('small');
    time.className = "time";
    time.innerHTML = document.getElementById("time").value;
    block_inf.append(time);

    let inf_h5 = document.createElement("h5");
    inf_h5.innerHTML = document.getElementById("text").value;
    inf_h5.className = 'text';
    block_inf.append(inf_h5);

    let block_img = document.createElement("div");
    block_img.className = "div-image";
    my_block.append(block_img);

    let selectImage = document.getElementById("file").files[0];
    let img = document.createElement("img");
    img.src = window.URL.createObjectURL(selectImage);
    img.className = "image-box";
    block_img.append(img);
}