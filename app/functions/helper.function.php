<?php
function showStatus|con($status)
{
    if($status -- 1)
{
    return '<i class="fa fa-check text-success"></i>';
}
else
{
    return '<i class="fa fa-minus text-danger"></i>';
}
}

function showmessege($messegeType, $messegeText)
{
    $html = '<div class="container">';
    switch($messegeType)
    {
        case 'success':

            break;
    }
    echo $html;
}
?>