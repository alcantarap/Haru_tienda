// ENVIO MENSAJE

let msgdiv = document.querySelector(".msg");

//function update() {
//let msg = document.getElementById('input_msg').value;
//console.log('Message:', msg);
//}

// UPDATE --  Agregar mensaje a la BD
window.onkeydown=(e)=>{
  if(e.key=="Enter"){
    update()
  }
}
function update(){
  let msg=input_msg.value;
  input_msg.value="";
  fetch(`addMsg?msg=${msg}`).then(
    r=>{
      if(r.ok){
        return r.text();
      }
    }
  ).then(
    d=>{
      console.log("msg enviado")
      msgdiv.scrollTop=(msgdiv.scrollHeight-msgdiv.clientHeight);
    }
  )

//Escritura y lectura de mensajes
  let msgdiv=document.querySelector(".msg");
  setInterval(() => {
    fetch("readMsg").then(
      r=>{
      if(r.ok){
        return r.text();
      }
      }
    ).then(
      d=>{
        msgdiv.innerHTML=d;
      }
    )
  }, 500);
}