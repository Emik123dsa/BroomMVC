var move = {
    
    broom: function() 
    {
        
        window.addEventListener('mousemove', function(event) {

            var height = window.innerHeight;
            var width = window.innerWidth;
            //this.console.log(event.clientX);
            document.getElementById('broomMove').style = `transform: translate(${(width - event.clientX)/2} px, ${(height - event.clientY)/2} px)`;
        });
        
    }
}

move.broom();