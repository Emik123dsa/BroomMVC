var move = {
    
    broom: function() 
    {
        var height = window.innerHeight;
        var width = window.innerWidth;
        //this.console.log(event.clientX);

        window.addEventListener('mousemove', function(event) {
            document.getElementById('broomMove').style = `transform: translate(${(width - event.clientX)/2} px, ${(height - event.clientY)/2} px)`;
        });
        
    }
}

move.broom();