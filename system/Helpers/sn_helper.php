<?php

function tampilan($halaman, $data = [])
{

    echo view('Templates/v_header', $data);
    echo view('Templates/v_sidebar', $data);
    echo view('Templates/v_topbar', $data);
    echo view($halaman, $data);
    echo view('Templates/v_footer', $data);
}
