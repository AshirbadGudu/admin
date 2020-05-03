<?php
function showSend($msg, $url)
{
    echo "<script>alert('$msg');</script>";
    echo "<script>location.href = '$url';</script>";
}
