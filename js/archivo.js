function reloj() {
   
    hoy = new Date();
    let hora = hoy.getHours();
    let minuto = hoy.getMinutes();
    let segundo = hoy.getSeconds();
   // let horaD = parseInt(document.getElementById("hora").value);
    //let minutoD = parseInt(document.getElementById("minuto").value);
  
    if (minuto < 10) {
        minuto = "0" + minuto
    };
    if (segundo < 10) {
        segundo = "0" + segundo
    };
    /*if (hora == horaD && minuto == minutoD && segundo == 0) {
       
        alert("El tiempo de Espera ya esta cumplido..");
        let tiempo = document.getElementById("tiempo");
       // tiempo.textContent = ("Listo Tiempo Consumido..."+horaD+":"+minutoD);

    };*/
  
    let tm = document.getElementById("tm");
        tm.textContent = (hora + ":" + minuto + ":" + segundo);
  
  };
  
  setInterval(reloj, 1000);

// modos de abrir página fullscreen
// https://www.w3schools.com/jsref/met_win_open.asp