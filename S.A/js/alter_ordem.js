/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

 function formatarMoeda(){
     var texto = document.getElementById("valor").value ;
     
     texto = texto.replace('R$','');
     texto =texto.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
     // alert(texto);  
      
      var atual = parseInt(texto);

//com R$
       var f = atual.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
       
       document.getElementById("valor").value = f ;
  }
  
