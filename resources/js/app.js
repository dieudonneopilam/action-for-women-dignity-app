import './bootstrap';

(function(){
    var menu = document.querySelector('.menu')
    var menuMobile = document.querySelector('.nav-link-mobile')
    var open = document.querySelector('.open')

    var close = document.querySelector('.close')
    var options = document.querySelectorAll('.options-edit')
    var points = document.querySelectorAll('.points')
    var pointClose = document.querySelectorAll('.close-point')
    var menuOptions = document.querySelectorAll('.menu-options')
    var optionpubs = document.querySelectorAll('.optionPub')
    var Othersbtn = document.querySelectorAll('.menu-pubOption')
    var closes = document.querySelectorAll('.closepub')

    close.style.display = 'none'
    menuMobile.style.display = 'none'

    // point.style.display = 'block'
    // pointClose.style.display = 'none'
    //option.style.display = 'none'

    for (let index = 0; index < options.length; index++) {
        const option = options[index]
        option.style.display = 'none'
    }

    var closeAllEditOption = function(){
        for (let index = 0; index < points.length; index++) {
            const point = points[index]
            point.style.display = 'block'
        }
    }

    var closeAllEditOther = function(){
        for (let index = 0; index < Othersbtn.length; index++) {
            const other = Othersbtn[index]
            other.style.display = 'none'
        }
    }
    var closeAllClosePub = function(){
        for (let index = 0; index < closes.length; index++) {
            const close = closes[index]
            close.style.display = 'none'
        }
    }

    closeAllEditOption()
    closeAllEditOther()
    closeAllClosePub()


    for (let index = 0; index < pointClose.length; index++) {
        const pointclose = pointClose[index];
        pointclose.style.display = 'none'
    }

    for (let index = 0; index < pointClose.length; index++) {
        const pointclose = pointClose[index];
        pointclose.style.display = 'none'
    }

    menu.addEventListener('click',function(){
        
        if(menuMobile.style.display == 'none'){
            menuMobile.style.display = 'block'
            open.style.display = 'none'
            close.style.display = 'block'
        }else{
            menuMobile.style.display = 'none'
            open.style.display = 'block'
            close.style.display = 'none'
            
        }
    })

    for (let index = 0; index < menuOptions.length; index++) {
        let menuOption = menuOptions[index];
        
        menuOption.addEventListener('click', function(){
            
            var option = this.querySelector('.points')
            var closepoint = this.querySelector('.close-point')
            var optionsEdit= this.parentNode.querySelector('.options-edit')
            console.log(optionsEdit)
            if(option.style.display=='block'){
                optionsEdit.style.display = 'block'
                closepoint.style.display ='block'
                option.style.display = 'none'
            }else if(option.style.display=='none'){
                optionsEdit.style.display = 'none'
                closepoint.style.display ='none'
                option.style.display = 'block'
            }
        })
    }

    for (let index = 0; index < optionpubs.length; index++) {
        let optionbub = optionpubs[index];
        
        optionbub.addEventListener('click', function(){
            
            var cardPub= this.parentNode.parentNode
            var otheroption = cardPub.querySelector('.menu-pubOption')
            var clopub = this.querySelector('.closepub')
            var pointbtn = this.querySelector('.points')
            if(otheroption.style.display=='none'){
                otheroption.style.display = 'block'
                pointbtn.style.display = 'none'
                clopub.style.display ='block'
            }else if (otheroption.style.display=='block') {
                otheroption.style.display = 'none'
                clopub.style.display ='none'
                pointbtn.style.display = 'block'
            }
        })
    }

    function likeoff(){
        
    }

})()