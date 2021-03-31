function formSwitch() {
   const radio = document.getElementsByName('RadioGroup1');
   
   const completes = document.querySelectorAll('.completed');
   
   const unCompletes = document.querySelectorAll('.unCompleted');
   
   const tasks = document.getElementById('tasks');
 　
   if(radio[1].checked) {
     unCompletes.forEach(item => {
      item.closest('#tasks').style.display = "";
     });
     completes.forEach(item => {
      item.closest('#tasks').style.display = "none";
    });
     //completesの表示の処理
   } else if(radio[2].checked) {
      completes.forEach(item => {
        item.closest('#tasks').style.display = "";
      });
      unCompletes.forEach(item => {
         item.closest('#tasks').style.display = "none";
        });
   } else if(radio[0].checked) {
    completes.forEach(item => {
      item.closest('#tasks').style.display = "";
    });
    unCompletes.forEach(item => {
       item.closest('#tasks').style.display = "";
      });
   }
}
