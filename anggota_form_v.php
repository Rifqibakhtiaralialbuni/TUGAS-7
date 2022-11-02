<?php

    if(!empty($query)){
        $row = $query->row_array();
    }
    else{
        $row['ID_Anggota']   ='';
        $row['Nim']     ='';
        $row['Nama'] ='';
        $row['Progdi']  ='';
    }

    echo validation_errors();
    echo form_open('anggota/check');
    echo form_hidden('id', set_value('id', $row['ID_Anggota']));
    echo form_hidden('is_update', $is_update);

    echo "NIM : ".form_input('Nim',set_value('Nim',$row['Nim']),"size='50' maxlength='100'");
    echo "<br /><br />";
    echo "Nama : ".form_input('Nama',set_value('Nama',$row['Nama']),"size='50' maxlength='150'");
    echo "<br /><br />";
    echo "Progdi : ".form_dropdown('Progdi',$opt_progdi,set_value('Progdi',$row['Progdi']));
    echo "<br /><br />";
    echo form_submit('btn_simpan','Simpan');
    echo form_close();

?>