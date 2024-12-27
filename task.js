let type=document.getElementById('type');
let typetask=document.getElementById('task-type');
console.log(typetask);
console.log(type);
type.style.display="none";
typetask.addEventListener("change", (event) => {
 type.style.display="block";
    let typetaskvalue = typetask.value;
    if(typetaskvalue==="bug"){
      type.style.display="block";
         type.innerHTML=` <label for="task-name">priority</label>
      <input type="text" id="task-name"  name="priority">`;
    }
    else if(typetaskvalue==="feature"){
      type.style.display="block";

 type.innerHTML=` <label for="task-name">version</label>
      <input type="text" id="task-name"  name="version">`;
    }
    else{
        type.innerHTML=``;
    }




    
});
l