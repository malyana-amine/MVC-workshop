let jokes=[];
function getQuestion(){
    let aj = new XMLHttpRequest();
    aj.onreadystatechange = function(){
        if(this.readyState===4 && this.status===200){
            
            jokes = JSON.parse(this.responseText);
            console.log(jokes);
            // showQue(generateRandomNumber());
        }
    }
    aj.open("POST","http://localhost/MVC-workshop/model/selectjokes.php",true);
    aj.send();
    
}
let btn = document.querySelector('.btn');
let submit = document.querySelector('.submit');
let showJoke = (index)=>{    
    btn.textContent = jokes[index]['joke'];
    console.log( btn.textContent);
}
submit.addEventListener("click", () => {
    showJoke(myFunction());
  });
let x;
function myFunction() {
  x = Math.floor(Math.random() * 5); 
console.log(x);
return (x)
  }



getQuestion();