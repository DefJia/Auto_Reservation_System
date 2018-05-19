function select_all(room){
    var i;
    var sel_all = document.getElementsByClassName('pick_room');
    for (i = 0; i < sel_all.length; i++) {
        var info = sel_all[i].getAttribute('id');
        if (room == 208 || room == 211 || room == 311 || room ==308)
            if(info.indexOf(room) > -1)
                sel_all[i].checked = true;
        if(room == 1)
            if(info.charCodeAt(4) > 70)
                sel_all[i].checked = true;
        if(room == 0)
            if(info.charCodeAt(4) <= 70)
                sel_all[i].checked = true;
        if(room == 2)
            sel_all[i].checked = true;
        if(room == 3)
            sel_all[i].checked = false;
    }
}