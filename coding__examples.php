<!---->
<!-- -->
<!--  -->
<!--   -->
<?php
	include ('db__connection.php');
    include ('header.php')
?>
<body class="coding__example__page__body__inner">
    </nav>
    <div class="coding__example__page__body__inner">
        
        <div ><h1 class="coding__example__page__header">Coding Examples</h1><pre id="code1"><code  class="language-js">
submit.addEventListener( 'click',() => { 
    if (input.value.length == "") {
        Alert("No value entered");
    }
    else{
        for ( let i = 0; i < profile__name.length; i++){
            if (profile__name.indexOf(input.value) === i){
                new__user = false;
                user__data[i].push(pic__box.src);
                console.log(" Value exists!");
            }
        }
        if(new__user == true) {
            store__user__data();
            input.value = '';
            obj = "";
        }
        new__user = true;
        }    
    } 
)
        </code></div>
        <div class="coding__text__block__1">
            <p class="coding__text__block__1__description" >
            Above is an example of code from my Photo picker web page. This section listens for an input, in this case a 'click', once detected executes the statements belows. First it checks if the input value after the user clicks is empty , sends a message if true (there was no input) or moves onto the next section.
            </p>
            <p>
            The next section is controlled using an else for statement and checks if the user data matches any currently stored data, setting the value of 'new__user' to false and if this is the case, sending an alert that "Value exists!".
            </p>
            <p>
            If the data has not been entered before it moves onto the next IF statement which checks the status of 'new__user' and if true executes another statement outside of this one that stores the data accordingly. Lastly it sets the main values used back to blank to be used again.S
            </p>
        </div>
    </div>   
    <script src="js\plugins\Prism\prism.js" >
	</script>       
</body>
</html>