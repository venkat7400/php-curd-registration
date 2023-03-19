function printList() {
    let btns=document.getElementsByClassName("btn")
    /* printremove id used in heading and filter input in every file */
    let printremove=document.querySelectorAll("#printremove")
  

  for(let i=0;i<btns.length;i++){
    btns[i].style.display="none"
  }

  for(let i=0;i<printremove.length;i++){
    printremove[i].style.display="none"
  }
  window.print()
  window.location.reload()
  }
  