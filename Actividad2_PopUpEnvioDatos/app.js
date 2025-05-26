var Alert = new CustomAlert();

function CustomAlert(){
    this.render = function(){

        let popUpBox = document.getElementById('popUpBox');
        popUpBox.style.display = 'block';

        document.getElementById('closeModal').innerHTML = '<a href="index.html"><button type="button" a href>¡Sí Quiero!</button></a>';
    }
    this.ok = function(){
        document.getElementById('popUpBox').style.display = "none";
        document.getElementById('popUpOverlay').style.display = "none";
    }
}