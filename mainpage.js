function toggleMenu() {
    var menu = document.getElementById("menu");
    let vep = document.getElementById("d");
    menu.classList.toggle("active");
}

    document.addEventListener("click", function(event) {
    var menu = document.getElementById("menu");
    var ysl = document.querySelector(".ysl");
    if (!menu.contains(event.target) && event.target !== ysl) {
        menu.classList.remove("active");
    }
    });
    
    function showMenu(){
        let vap = document.getElementById('d');
        vap.style.transform = "rotateX(-180deg)"
        vap.style.backgroundImage = "url('vectorpaint.svg');"
    }
    function hideMenu(){
        let vap = document.getElementById('d');
        vap.style.transform = "rotateX(0deg)"
    }
    function showMenu2(){
        let vap = document.getElementById('d2');
        vap.style.transform = "rotateX(-180deg)"
    }
    function hideMenu2(){
        let vap = document.getElementById('d2');
        vap.style.transform = "rotateX(0deg)"
    }




    
    //УПравление бургер меню
    
    let ars = document.getElementById('ham').addEventListener('click',ae)
    let hide = document.getElementById('showme');
    let flag = false;
    function ae(){
        if(!flag){
            let ares = document.getElementById('showme');
            let vap = document.getElementById('dburg1');
            let shows = document.getElementById('shmbtysl');
            let ares2 = document.getElementById('showme');
            let vap2 = document.getElementById('dburg2');
            let shows2 = document.getElementById('shmbtysl2');


            vap.style.transform = "rotateX(0deg)"
            ares.style.height = '300px'
            shows.style.transition = 'height 0.5s ease'
            shows.style.transition = '0.5s ease'
            shows.style.backgroundColor = 'orange';
            shows.style.height = '0%';
            burgerflagaces = false;


            vap2.style.transform = "rotateX(0deg)"
            ares2.style.height = '300px'
            shows2.style.transition = 'height 0.5s ease'
            shows2.style.transition = '0.5s ease'
            shows.style.backgroundColor = 'orange';
            shows2.style.height = '0%';
            burgerflagaces2 = false;



        }
        let ares = document.getElementById('showme');
        if(!flag){
            ares.style.transition = 'height 0.5s ease'
            ares.style.height = '300px'
            hide.style.display = 'flex';
            flag = true;
            console.log(flag)
            
        }else{
            ares.style.transition = 'height 0.5s ease'
            ares.style.height = '0%'
            hide.style.overflow = 'hiden';
            flag = false;
            console.log(flag)
        }
        return flag;
    }


    




    
    
    //УБрАТЬ ДУБЛИРоВАНИЕ КОДА
    let burgerflagaces = false
    let burgerflagaces2 = false
    
    function burgercheckload(){
        let ares = document.getElementById('showme');
        let vap = document.getElementById('dburg1');
        let shows = document.getElementById('shmbtysl');
        if(burgerflagaces2){
            burgercheckload2()
        }
        if(!burgerflagaces){
            vap.style.transform = "rotateX(-180deg)";
            vap.style.backgroundImage = "url('vectorpaint.svg');";
            ares.style.height = '500px'
            shows.style.height = '300px';
            shows.style.transition = '0.5s ease'
            shows.style.backgroundColor = 'white';

            burgerflagaces = true;
            
            
        }else{
            vap.style.transform = "rotateX(0deg)"
            ares.style.height = '300px'
            shows.style.transition = 'height 0.5s ease'
            shows.style.transition = '0.5s ease'
            shows.style.backgroundColor = 'orange';
            shows.style.height = '0%';
            burgerflagaces = false;
            
        }
        return burgerflagaces;
    }
    function burgercheckload2(){
        let ares = document.getElementById('showme');
        let vap = document.getElementById('dburg2');
        let shows = document.getElementById('shmbtysl2');
        if(burgerflagaces){
            burgercheckload()
        }
        if(!burgerflagaces2){
            vap.style.transform = "rotateX(-180deg)";
            vap.style.backgroundImage = "url('vectorpaint.svg');";
            ares.style.height = '350px'
            shows.style.height = '60px';
            shows.style.transition = '0.5s ease'
            shows.style.backgroundColor = 'white'
            burgerflagaces2 = true;
            
            
        }else{
            vap.style.transform = "rotateX(0deg)"
            ares.style.height = '300px'
            shows.style.transition = 'height 0.5s ease'
            shows.style.transition = '0.5s ease'
            shows.style.backgroundColor = 'orange';
            shows.style.height = '0%';
            burgerflagaces2 = false;
            
        }
        return burgerflagaces2;
    }
    