<?php
    $ruta="fileServer/".$_FILES['archivo']['name'];
    
    if($_FILES['archivo']['type']=="image/jpeg" || $_FILES['archivo']['type']=="image/png"){
        if(($_FILES['archivo']{'size'}/1024)<=15360){
        if(move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta)){
                echo "¡Archivo Enviado!";
            }else{
                echo "No se pudo enviar";
            }
        }else{
            echo "Tamaño de imagen excedido";
        }
    }else{
        echo "Formato de imagen no válido";
    }