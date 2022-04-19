<?php
function index_mof_info_render($malop,$mathichu)
{
    $array_result = [
        'malop' => $malop,
        'mathichu' => $mathichu,
    ];
    return $array_result;
}
function data_mof_info_render($mathichu,$mathiso,$cmnd,$ngaythi)
{
    $array_result = [
    'mathichu' => $mathichu,
    'mathiso' => $mathiso,
    'cmnd' => $cmnd,
    'ngaythi' => $ngaythi
    ];
    return $array_result;
}
function data_mof_certified_result_render($tenlop,$cmnd,$chungchi,$ngaycap,$diem){
    $array_result = [
    'tenlop' =>$tenlop,
    'cmnd' =>$cmnd,
    'chungchi' => $chungchi,
    'ngaycap' => $ngaycap,
    'diem' => $diem,
    ];
    return $array_result;
}
function data_mof_view_certificate_render($userid)
{
    $array_result = [
        'userid' => $userid,
    ];
    return $array_result;
}
function data_mof_magic_tabs_render($tenmien)
{
    $array_result = [
        'tenmien' => $tenmien,
    ];
    return $array_result;
}
function index_mof_magic_tabs_render($tenmien)
{
    $array_result = [
        'tenmien' =>$tenmien,
    ];
    return $array_result;
}
function index_mof_pick_cohort($tenlop,$mathichu)
{
    $array_result = [
        'tenlop' => $tenlop,
        'mathichu' => $mathichu,
    ];
    return $array_result;
}
function upload_decision_number_mof_magic_tabs_render($tenmien)
{
    $array_result = [
        'tenmien' =>$tenmien,
    ];
    return $array_result;
}
function mof_score_user_error($name,$cohort)
{
    $array_result = [
        'name' => $name,
        'cohort' => $cohort,
    ];
    return $array_result;
}
function mof_score_user_system_not_found($name)
{
    $array_result = [
        'name' => $name,
    ];
    return $array_result;
}
function mof_score_user_updated($cmnd)
{
    $array_result = [
        'cmnd' => $cmnd,
    ];
    return $array_result;
}
function popup_hello_student($firstname, $lastname)
{
    $array_result = [
            'firstname' => $firstname,
            'lastname' => $lastname
    ];
    return $array_result;
}
function rendering_paths($mydiv)
{
    $array_result = $mydiv;
    return $array_result;
}
function rendering_block_instance_id($sliderid)
{
    $array_result = [
        'sliderid' => $sliderid,
    ];
    return $array_result;
}