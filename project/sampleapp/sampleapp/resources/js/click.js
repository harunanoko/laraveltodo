function formSwitch() {
   const radio = document.getElementsByName('RadioGroup1');
   
   const completes = document.getElementsByClassName('completed');
   
   const unCompletes = document.getElementsByClassName('unCompleted');
   
   const tasks = document.getElementById('tasks');
 　
   if(radio[1].checked) {
     unCompletes.forEach(item => {
      item.closest('#tasks').style.display = "none";
     });
     completes.forEach(item => {
      item.closest('#tasks').style.display = "";
    });
     //completesの表示の処理
   } else if(radio[2].checked) {
      completes.forEach(item => {
        item.closest('#tasks').style.display = "none";
      });
      unCompletes.forEach(item => {
         item.closest('#tasks').style.display = "";
        });
   } else if(radio[0].checked) {
      tasks.forEach(item => {
        item.closest('#tasks').style.display = "";
      });
   }
}
